/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
<<<<<<< HEAD
 
// Jquery
var $;
$ = window.jQuery = require('jquery');

// Bootstrap
require('bootstrap-sass');

$(document).ready( function(){
    
    $('BODY').on('click', '.btn-help', () => {
        introJs().start();
    });

    var inputLoadImg = $("input[data-loadimg]");
    if( inputLoadImg.length ){
        inputLoadImg.change(function() {
            var target = inputLoadImg.data('srcimg');
            var preloader = inputLoadImg.data('loadimg');
            var reader = new FileReader();
                reader.onload = function(event){
                    var imgurl = event.target.result;
                    $(target).val(imgurl);
                    $(preloader).html('<img src="'+imgurl+'" class="img-responsive" />');
                }
                reader.readAsDataURL(this.files[0]);
        });
    }
    
});
=======
require('./bootstrap');
>>>>>>> 5a27b6d4c8736aa91d6f901263a8958748bc9e70
