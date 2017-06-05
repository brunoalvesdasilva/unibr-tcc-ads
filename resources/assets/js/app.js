/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 
// Jquery
var $;
$ = window.jQuery = require('jquery');

// Bootstrap
require('bootstrap-sass');
require('jquery-mask-plugin');
require('pickadate/lib/picker.js');
require('pickadate/lib/picker.date.js');

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
    
    
    // Maskaras
    $("input[data-calendario]").each(function(indice, elm){
        $(elm).pickadate({
            monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
            monthsShort: [ 'jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez' ],
            weekdaysFull: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado' ],
            weekdaysShort: [ 'dom', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab' ],
            today: 'Hoje',
            clear: 'Limpar',
            close: 'Fechar',
            format: 'dd/mm/yyyy',
            formatSubmit: 'yyyy-mm-dd',
            hiddenName: true
        });
    });
    
    $("input[data-dinheiro]").each(function(indice, elm){
        $(elm).mask("#.##0,00", {reverse: true, placeholder: "0,00"});
    });
});

