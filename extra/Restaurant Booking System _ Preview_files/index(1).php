(function () {
	var i, src, script, div,
		element = null,
		scripts = document.getElementsByTagName("script");
	for (i = 0; i < scripts.length; i++) 
	{
		src = scripts[i].src;
		if(src.indexOf("/1700718637_910/index.php?controller=pjFront&action=pjActionLoad") !== -1)
		{
			element = scripts[i];
			break;
		}
	}
	div = document.createElement('div');
	div.innerHTML = '<div id="pjWrapperRestaurant_theme1"><div id="rbContainer_9884" class="container-fluid pjRbContainer"></div></div>';
	if(element !== null)
	{
		element.parentNode.insertBefore(div, element);
	}else{
		document.body.appendChild(div);
	}
			script = document.createElement('script');
		script.text = 'var pjQ = pjQ || {},RestaurantBooking_9884;(function () {"use strict";var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor),loadCssHack = function(url, callback){var link = document.createElement("link");link.type = "text/css";link.rel = "stylesheet";link.href = url;document.getElementsByTagName("head")[0].appendChild(link);var img = document.createElement("img");img.onerror = function(){if (callback && typeof callback === "function") {callback();}};img.src = url;},loadRemote = function(url, type, callback) {if (type === "css" && isSafari) {loadCssHack(url, callback);return;}var _element, _type, _attr, scr, s, element;switch (type) {case "css":_element = "link";_type = "text/css";_attr = "href";break;case "js":_element = "script";_type = "text/javascript";_attr = "src";break;}scr = document.getElementsByTagName(_element);s = scr[scr.length - 1];element = document.createElement(_element);element.type = _type;if (type == "css") {element.rel = "stylesheet";}if (element.readyState) {element.onreadystatechange = function () {if (element.readyState == "loaded" || element.readyState == "complete") {element.onreadystatechange = null;if (callback && typeof callback === "function") {callback();}}};} else {element.onload = function () {if (callback && typeof callback === "function") {callback();}};}element[_attr] = url;s.parentNode.insertBefore(element, s.nextSibling);},loadScript = function (url, callback) {loadRemote(url, "js", callback);},loadCss = function (url, callback) {loadRemote(url, "css", callback);},getSessionId = function () {return sessionStorage.getItem("session_id") == null ? "" : sessionStorage.getItem("session_id");},createSessionId = function () {if(getSessionId()=="") {sessionStorage.setItem("session_id", "9q8e3kp258inu7hn5154tbs067");}},options = {server: "https://demo.phpjabbers.com/1700718637_910/",folder: "https://demo.phpjabbers.com/1700718637_910/",theme: "theme1",index: 9884,locale: 1,hide: 0,week_start: 1,momentDateFormat: "dd.mm.yyyy",date_format: "d.m.Y",time_format: "HH:mm",show_period: false,include_voucher: "2",use_map: 1,validation:{required_field: "This field is required.",invalid_email: "Email is not valid.",incorrect_captcha: "Captcha is not correct.",exp_month: "Expiration month is required.",exp_year: "Expiration year is required."},loading_tables: "Loading tables ...",message_0: "Reservation is being processed...",message_1: "Your reservation has been saved. Redirecting to payment gateway....",message_3: "Your reservation is saved. [STAG]Start over[ETAG].",message_4: "Reservation failed to save.",message_5: "Your enquiry has been sent. [STAG]Start over[ETAG].",invalid_voucher: "Invalid voucher",out_of_range_voucher: "Voucher is out of range date or time."};loadScript("https://demo.phpjabbers.com/1700718637_910/third-party/storage_polyfill/1.0.0/storagePolyfill.min.js", function () {if (isSafari) {createSessionId();options.session_id = getSessionId();}else{options.session_id = "";}loadScript("https://demo.phpjabbers.com/1700718637_910/third-party/pj_jquery/1.11.2/pjQuery.min.js", function () {loadScript("https://demo.phpjabbers.com/1700718637_910/third-party/pj_validate/1.10.0/pjQuery.validate.min.js", function () {loadScript("https://demo.phpjabbers.com/1700718637_910/third-party/pj_bootstrap/3.3.2/pjQuery.bootstrap.min.js", function () {loadScript("https://demo.phpjabbers.com/1700718637_910/third-party/pj_bootstrap_datetimepicker/4.17.37/moment-with-locales.min.js", function () {loadScript("https://demo.phpjabbers.com/1700718637_910/third-party/pj_bootstrap_datetimepicker/4.17.37/pjQuery.bootstrap-datetimepicker.min.js", function () {                                    loadScript("https://demo.phpjabbers.com/1700718637_910/app/web/js/pjRestaurantBooking.js", function () {                                    RestaurantBooking_9884 = new RestaurantBooking(options);                                });                            });});});});});});})();';
		if(element !== null)
		{
			element.parentNode.insertBefore(script, element);
		}else{
			document.body.appendChild(script);
		}
		})();