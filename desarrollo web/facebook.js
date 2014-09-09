/**
 * facebook.js - requires the prototype.js JavaScript framework
 * 
 * This file contains the facebookLikeButtonClass which allows you to catch facebook like
 * button events.
 *
 * http://www.saschakimmel.com
 *
 * Copyright (c) 2010 Sascha Kimmel, tricos media (www.tricos.com)
 *  
 *  Permission is hereby granted, free of charge, to any person obtaining
 *  a copy of this software and associated documentation files (the
 *  "Software"), to deal in the Software without restriction, including
 *  without limitation the rights to use, copy, modify, merge, publish,
 *  distribute, sublicense, and/or sell copies of the Software, and to
 *  permit persons to whom the Software is furnished to do so, subject to
 *  the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included
 *  in all copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 *  OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 *  MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 *  IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 *  CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 *  TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 *  SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @author Sascha Kimmel <skimmel@tricosmedia.de>
 * @version 1.0
 * @package facebookLikeButtonClass
 */
var facebookLikeButtonClass = Class.create({
	initialize:function(appId, locale, callback)
	{
		window.fbAsyncInit = function() {
			if (typeof FB == 'undefined') {
				return;
			}
		    FB.init({appId: appId, status: true, cookie: true, xfbml: true});
		    FB.Event.subscribe('edge.create', function(href, widget) {
		    	if (callback != null) {
		    		callback(href, widget);
		    	}
		    });
		};
		
		if ($('fb-root') == null) {
			var fbEl = new Element('div', {id: 'fb-root'});
			$(document.body).appendChild(fbEl);
			var sc = new Element('script', { type:'text/javascript', src:document.location.protocol + '//connect.facebook.net/'+locale+'/all.js', async:true });
			fbEl.appendChild(sc);
			window.fbInitDone = true;
		}
	}
});
// Usage:
/*
Event.observe(window, 'load', function() {
	new facebookLikeButtonClass('YOUR_APP_ID', 'de_DE', function(href, widgetObject) {
		// Put your code here
		alert('You just liked '+href);
	});
});
*/