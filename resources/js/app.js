/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');
//
// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */
//
// // const files = require.context('./', true, /\.vue$/i);
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
import JQuery from 'jquery'


const app = new Vue({
    el: '#app',
    methods: {
    }
});


$( document ).ready(function() {

    $("#compute").click(function(e){
        e.preventDefault();
        var form = $("form").serializeObject()

        $.ajax({
            type:'POST',
            url:'/compute',
            data:form,
            success:function(data){
                $("#responce").html("<p>Compute value : "+data+"</p>");
            }
        });
    });
});

$.fn.serializeObject = function() {
    var o = {};
    var arr = this.serializeArray();
    $.each(arr, function( index, obj ) {
        if (typeof(o[obj.name]) === undefined) {
            if (!o[obj.name].push) {
                o[obj.name] = [o[obj.name]];
            }
            o[obj.name].push(obj.value || '');
        } else {
            o[obj.name] = obj.value || '';
        }
    });
    return o;
};

