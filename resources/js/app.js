/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);


require('./gallery');

//require('./contact');
/*
$('#errors-popup').modal('show');
require('./contact');
require('./gallery');
require('./bootstrap-datetimepicker.min');*/

//require('./validatorForm');

$("#contactUs").click(function(event) {

    var $href = $(this).attr('href');
    var $anchor = $($href).offset();
    window.scrollTo($anchor.left,$anchor.top);
    return false;

});
$('#menuPhone').click(function(){
    if($('#top-menu').hasClass("visible-menu-top"))
        $('#top-menu').removeClass( "visible-menu-top" );
    else
        $('#top-menu').addClass( "visible-menu-top" );
});
$('#top-menu').click(function(){
    if($('#top-menu').hasClass("visible-menu-top"))
        $('#top-menu').removeClass( "visible-menu-top" );
    else
        $('#top-menu').addClass( "visible-menu-top" );
})