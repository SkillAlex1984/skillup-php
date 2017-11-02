'use strict';

//Задача1
$('h2').html('!!!!');
//Задача2
$('h3').css('color', 'red');
//Задача3
$('h2').css({'color': 'blue', 'font-size': '30px'});
//Задача4
$('.test').css('background-color', 'lightgray');
//Задача5
$('h2.test').css('background-color', 'lightgreen');
//Задача6
$('div + div').css('color', 'yellow');
//Задача7
$('li + li.www').css('color', 'brown');
//Задача8
$('h4 i').css('color', 'pink');
//Задача9
$('strong > i').css('color', 'red');
//Задача10
$(':header').css({'font-family': 'Courier New'});
//Задача11
$('h2:not(.test)').css({'text-align': 'center'});
//Задача12
$(':header:not(.test)').css({'font-size': '40px'});
//Задача13
$(':header + :header').css('color', 'red');
//Задача16
$('p:first').css('color', 'red');
//Задача17
$('p:last').css('color', 'green');
//Задача19
$('h5:has(i)').css({'font-family': 'Arial','text-align': 'center'});
//Задача20
$('h5 > i').css('color', '#4682B4');
//Задача21
$('li:eq(2)').css('color', '#8B008B');
//Задача23
$('li.task23:lt(9)').css('background-color', '#DAA520');


