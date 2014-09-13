(function($){
    /*
       preguntas [{indice, opciones, consigna}]
     */

    /**
     * Construye una trivia no inicializada tomando cierto DOM
     * @param fbid el id de facebook o cedula
     * @param preguntas lote de preguntas
     * @param consigna wrapper de DOM de titulo de la pregunta
     * @param boton wrapper de DOM de clickeable para enviar
     * @param radios wrapper de DOM de radiobuttons (3)
     * @param labels wrapper de DOM de labels de dichos radiobuttons (3)
     * @param form wrapper de DOM de formulario interno a componer y enviar
     * @constructor
     */
    function Trivia(fbid, preguntas, consigna, boton, radios, labels, form) {
        this.fbid = fbid;
        this.preguntas = preguntas;
        this.consigna = consigna;
        this.boton = boton;
        this.radios = radios;
        this.labels = labels;
        this.form = form;
        this.pasadas = null;
    }
    Trivia.prototype.answer = function() {
        //si no esta inicializado, cortamos
        if (this.pasadas === null) {
            return;
        }

        //si no se respondio, cortamos
        if (!this.radios.is(':checked')) {
            return;
        }

        //guardamos la respuesta y pasamos la pregunta a la proxima.
        this.respuestas[this.preguntas[this.pasadas].indice] = this.radios.filter(':checked').val();
        this.pasadas++;

        if (this.pasadas == this.preguntas.length) {
            //enviar respuestas (limpiar formulario, crear items de respuesta, enviar)
            this.form.children().remove();
            var self = this;
            self.form.append($('<input />').attr({
                'type': 'hidden',
                'name': 'fbid',
                'value': self.fbid
            }));
            $.each(this.respuestas, function(k, v) {
                self.form.append($('<input />').attr({
                    'type': 'hidden',
                    'name': 'answer['+k+']',
                    'value': v
                }));
            });
            this.form.submit();
        } else {
            //mostramos proxima pregunta
            this.__mostrar();
        }
    };
    Trivia.prototype.__mostrar = function() {
        var pregunta = this.preguntas[this.pasadas];
        this.radios.prop('checked', false);
        this.consigna.text(pregunta.consigna);
        console.log(this.consigna);
        console.log(pregunta.consigna);
        this.labels.eq(0).text(pregunta.opciones[0]);
        this.labels.eq(1).text(pregunta.opciones[1]);
        this.labels.eq(2).text(pregunta.opciones[2]);
    };
    Trivia.prototype.start = function() {
        var self = this;
        self.pasadas = 0;
        self.respuestas = {};
        self.__mostrar();
        self.boton.click(function(){
            self.answer();
        });
    };
    $.Trivia = Trivia;
})(jQuery);