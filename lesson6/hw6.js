'use strict'

document.write('Задачи на приемы работы с циклами на JavaScript' + '<br>')
// Задача 1
document.write('Задача 1' + '<br>');
for (var i = 1; i <= 10; i++) {
    for (var j = 1; j <= 10; j++) {
        var rez = i * j;
        document.write(i + '*' + j + '=' + rez + '<br>');

    }
    document.write('<br>');
}
// Задача 2
document.write('Задача 2' + '<br>');
var str = '';
for (var i = 1; i < 10; i++) {
    str = str + i;
}
document.write(str + '<br>');
// Задача 3
document.write('Задача 3' + '<br>');
var strZadach3 = '';
for (var i = 9; i >= 1; i--) {
    strZadach3 = strZadach3 + i;
}
document.write(strZadach3 + '<br>');
// Задача 4
document.write('Задача 4' + '<br>');
var strZadach4 = '-';
for (var i = 1; i < 10; i++) {
    strZadach4 = strZadach4 + i + '-';
}
document.write(strZadach4 + '<br>');

// Задача 5
document.write('Задача 5' + '<br>');
var strZadacha5 = '';
for (var i = 0; i < 20; i++) {
    strZadacha5 = strZadacha5 + 'x';
    document.write(strZadacha5 + '<br>');
}
// Задача 6
document.write('Задача 6' + '<br>');
for (var i = 1; i <= 9; i++) {
    for (var j = 1; j <= i; j++) {
        document.write(i);
    }
    document.write('<br>');
}
// Задача 7
document.write('Задача 7' + '<br>');
var strZadacha7 = '';
for(var i = 0; i <= 10; i++) {
    strZadacha7 = strZadacha7 + 'xx';
    document.write(strZadacha7 + '<br>');
}
document.write('Задачи на приемы работы с массивами на JavaScript' + '<br>')
// Задача 1
document.write('Задача 1' + '<br>');
var arr = [],
      str = 'x';
for (var i=0; i<9; i++){
    arr[i] = str;
    str = str + 'x';
}
document.write(arr + '<br>');
// Задача 2
document.write('Задача 2' + '<br>');
var arrayZadach2 = [];
for (var i = 1; i < 10; i++) {
    var strArray = '';
    for (var j = 0; j < i; j++) {
        strArray += i;
    }
    arrayZadach2.push(strArray);
}
document.write(arrayZadach2 + '<br>');

// Задача 3
document.write('Задача 3' + '<br>');
function arrayFill(value, length) {
    var arrZadach3 = [];
    for (var i = 0; i < length; i++) {
        arrZadach3.push(value);
    }
    return arrZadach3;
}

document.write(arrayFill(' :) ', 9) + '<br>');
// Задача 4
document.write('Задача 4' + '<br>');
function sumArr(arr) {
    var sum = 0;
    for (var i = 0 ; i < arr.length; i++) {
        sum += arr[i];
        if (sum > 10) {
            return i + 1;
        }
    }
}

document.write(sumArr([0, 0, 3, 7,1]) + '<br>');
// Задача 5
document.write('Задача 5' + '<br>');
var arrayZadach5 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var result = [];
for (var i = arrayZadach5.length - 1; i >= 0; i--) {
    result.push(arrayZadach5[i]);
}
document.write(result + '<br>');
// Задача 6
document.write('Задача 6' + '<br>');
var arrayZadach6 = [[1, 1, 1], [1, 1], [5]];
var sum = 0;
for (var i = 0; i < arrayZadach6.length; i++) {
    for (var j = 0; j < arrayZadach6[i].length; j++) {
        sum += arrayZadach6[i][j];
    }
}
document.write(sum + '<br>');
// Задача 7
document.write('Задача 7' + '<br>');
var arrayZadach7 = [[[1, 1], [1, 1]], [[1, 1], [1,1]]];
var sum = 0;
for (var i = 0; i < arrayZadach7.length; i++) {
    for (var j = 0; j < arrayZadach7[i].length; j++) {
        for (var k = 0; k < arrayZadach7[i][j].length; k++) {
            sum += arrayZadach7[i][j][k];
        }
    }
}
document.write(sum);