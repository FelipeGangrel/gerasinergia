
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

 // components 
require('./components/bootstrap/tooltips');
require('./components/mdb/modal');
import {sidebar} from './components/sidebar';


// definindo elemento da sidebar e a velocidade de transição
sidebar('div#main-sidebar .menu', 300);


Vue.component('example', require('./components/vue/Example.vue'));
// Vue.component('teste', require('./components/vue/teste.vue'));
const app = new Vue({
    el: '#app'
});


$(document).ready(function () {

    // Página aceite de termos da plataforma
    $('#li_concordo').on('change', function(){
        if($('#li_concordo').is(':checked')){
            $('#btn-prosseguir').removeAttr('disabled');
        }else{
            // $('#btn-prosseguir').attr('disabled');
            $('#btn-prosseguir').prop( "disabled", true );
        }
    });

    $('body').on('click', '.checkbox', function (event) {
        if (!$(event.target).is("label,input")) {
            $(this).find('input').not($(this).find('.checkbox input')).trigger('click');
        }
    });

    //troca fundo das checkbox
    function atualizarCheckboxs() {
        $('.checkbox').each(function () {
            if ($(this).find('[type="checkbox"]:not(.checkbox_status)').is(':checked')) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });
    }
    atualizarCheckboxs();

    // Não ligue. É assim mesmo
    $('div.checkbox_status').each(function () {
        
        if ( $(this).find('input[type="checkbox"]').is(':checked') == false ) {
            $(this).addClass('active');
        }else{
            $(this).removeClass('active');
        }

    });


    $('div.checkbox_status input[type="checkbox"]').on('change', function(){
        // console.log('teste');
        console.log($(this).is(':checked'));
        if( $(this).is(':checked') ){
            $(this).closest('div.checkbox_status').removeClass('active');
        }else{
            $(this).closest('div.checkbox_status').addClass('active');
        }
    });

    $('body').on('change', '[type="checkbox"]:not(.checkbox_status)', function (event) {

        if ($(this).is(':checked')) {
            $(this).closest('.checkbox').addClass('active');
        } else {
            $(this).closest('.checkbox').removeClass('active');
        }
        event.stopPropagation();
    });

});
