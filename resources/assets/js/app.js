/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 
// Jquery
var $;
$ = window.jQuery = require('jquery');
import Chart from 'chart.js';

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
    
    // Graficos da home
    $("canvas#chamadosAbertos").each(function(indice, elm){
        var Abertos = $(elm).data('abertos')*1;
        var Fechados = $(elm).data('fechados')*1;
        
        var myChartChamadosAbertos = new Chart($(elm)[0].getContext("2d"), {
            type: 'pie',
            data: {
                labels: ["Abertos", "Fechados"],
                datasets: [{
                    data: [Abertos, Fechados],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    });
    
    $("canvas#conflitoSaldo").each(function(indice, elm){
        var Receitas = $(elm).data('receitas')*1;
        var Despesas = $(elm).data('despesas')*1;
        
        var myChartConflitoSaldo = new Chart($(this)[0].getContext("2d"), {
            type: 'bar',
            data: {
                labels: ["Receitas", "Despesas"],
                datasets: [{
                    label: '# Saldo em Dinheiro',
                    data: [Receitas, Despesas],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255,99,132,1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    });
});
