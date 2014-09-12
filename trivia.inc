<?php

/* indice, opciones, consigna, respuesta */
$trivia = array(
    array(
        'consigna' => '¿Con qué frecuencia se toma o vende un auto en 1001 Carros?',
        'respuesta' => 1,
        'indice' => 'frecuencia-cv',
        'opciones' => array(
            '2 por hora',
            '5 por día',
            '1 por día'
        )
    ),
    array(
        'consigna' => '¿En qué ciduades del Ecuador se encuentra 1001 Carros?',
        'respuesta' => 2,
        'indice' => 'ciudades',
        'opciones' => array(
            'Quito y Guayaqul',
            'Quito y Santo Domingo',
            'Quito, Guayaquil y Cuenca'
        )
    ),
    array(
        'consigna' => '¿Qué sorteamos por nusetro Segundo Aniversario?',
        'respuesta' => 3,
        'indice' => 'premio',
        'opciones' => array(
            'Un Kia Rio semi nuevo',
            'Un Chevrolet Spark semi nuevo',
            'Un Toyota Yaris semi nuevo'
        )
    ),
    array(
        'consigna' => '¿Cuántos puntos de cada vehículo inspeccionamos para recibir un usado?',
        'respuesta' => 1,
        'indice' => 'inspeccion',
        'opciones' => array(
            'Más de 125 puntos de inspección',
            '90 puntos de inspección',
            '60 puntos de inspección'
        )
    ),
    array(
        'consigna' => '¿Cuántos carros hemos vendido y tomado en nuestros dos años?',
        'respuesta' => 0,
        'indice' => 'cantidad-cv',
        'opciones' => array(
            'más de 2000',
            'más de 7200',
            'más de 10000'
        )
    )
);

define('PREGUNTAS', 5);

function are_right($answers) {
    global $trivia;
    $cnt_answers = count($answers);
    $points = 0;

    foreach($trivia as $t) {
        if (isset($answers[$t['indice']]) && (int)$answers[$t['indice']] == $t['respuesta']) {
            $points++;
        }
    }

    return $points == $cnt_answers;
}

function prepare($t) {
    return array(
        'indice' => $t['indice'],
        'opciones' => $t['opciones'],
        'consigna' => $t['consigna']
    );
}

function fetch() {
    global $trivia;
    $claves = array_rand($trivia, PREGUNTAS);
    $selected = array();
    foreach($claves as $c) {
        $selected[] = prepare($trivia[$c]);
    }
    return $selected;
}