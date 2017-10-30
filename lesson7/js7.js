'use strict'

// Задачи с массивами

// Задача 1
var arrGoods = ['Молоко', 'Чай', 'Хлеб', 'Вода', 'Сахар'];
console.log(arrGoods[arrGoods.length - 1]);
// Задача 2
arrGoods.push('Конфеты');
console.log(arrGoods);
// Задача 3
var styles = ['Джаз', 'Блюз'];
styles.push('Рок-н-Ролл');
styles[styles.length - 2] = 'Классика';
alert(styles.shift());
styles.unshift('Рэп', 'Регги');
console.log(styles);
// Задача 4
var rand = Math.floor(Math.random() * arrGoods.length);
alert(arrGoods[rand]);
// Задача 5
var a = true,
    i = 0,
    b,
    arrNumber = [],
    sumArr = 0;

    while (a = true) {
        b = prompt('Введите число');
        if (b === "" || b === null || isNaN(b)) {
            a = false;
            break;
        } else {
            arrNumber[i] = b;
            i++;
        }
    }
    for (var i = 0; i < arrNumber.length; i++) {
        sumArr += +arrNumber[i];
    }
    alert(sumArr);
// Задача 6

var arrZadacha6 = [2,3,4,5,6,7,8,9,0],
    rez;
function find(array, value) {

    for (var i = 0; i < array.length; i++) {
        if (array[i] === value) return i;
        }
        return -1;
    }
rez = find(arrZadacha6, 4);
alert(rez);

// Задача 7
var arrForTask7 = [1, 4, 5, 6, 3, 11, 0],
    rez7;

function filterRange (arr, a, b) {
    var arrFilterRange = [];

    for (var i = 0; i < arr.length; i++) {
        if (arr[i] >= a && arr[i] <= b) {
            arrFilterRange.push(arr[i]);
        }
    }
    return arrFilterRange;
}
rez7 = filterRange (arrForTask7, 3, 11);
alert(rez7);
// Задача Решето Эратосфена
var massNum = [];
var sum = 0;

for (var i = 2; i < 100; i++) {
    massNum.push(i);
}

for (var i = 0; i < 100; i++) {
    var targetNum = massNum[i];
    var limitation = Math.pow(targetNum, 2);

    if (targetNum == 0) continue;
    else if (limitation > 100) break;

    for(var j = targetNum; (targetNum * j) < 100; j++) {
        var pos = massNum.indexOf(targetNum*j);

        massNum[pos] = 0;
    }
}
for (var i = 0; i < 100; i++) {
    if (massNum[i]) sum += massNum[i];
}
alert(sum);
// Задача Подмассив наибольшей суммы
var arrMax = [-100, 2, 3, 5, -9];
function maxSum(array) {
    var maxSum = 0,
        partialSum = 0;
    for (var i = 0; i < array.length; i++) {
        partialSum += array[i];
        maxSum = Math.max(maxSum, partialSum);
        if (partialSum < 0) partialSum = 0;
    }
    return maxSum;
}

alert(maxSum(arrMax));


// Задачи на ассоциативные массивы в JS
//Задание 1
var Person = {
    "Name" : "Alex",
    "Age" : 30,
    "Sex" : "M",
    "id" : 1
};
console.log(Person);
//Задание 2

for (var Age in Person) {
    if (Age in Person)
    var age = 2017 - Person.Age;
    }
console.log('Год рождения' + age);