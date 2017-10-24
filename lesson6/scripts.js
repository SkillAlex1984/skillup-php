'use strict'

var plusButton = document.getElementById('plus'),
    minusButton = document.getElementById('minus'),
    op1 = document.getElementById('op1'),
    op2 = document.getElementById('op2'),
    result = document.getElementById('result'),
    buttons = document.getElementsByTagName('button'),
        i;

function onClik(event) {
    switch (event.target.innerHTML) {
        case '+': result.innerHTML = parseFloat(op1.value) + parseFloat(op2.value); break;
        case '-': result.innerHTML = parseFloat(op1.value) - (op2.value); break;
        case '*': result.innerHTML = parseFloat(op1.value) * parseFloat(op2.value); break;
        case '/': result.innerHTML = parseFloat(op1.value) / parseFloat(op2.value); break;
    }
}

for (i = 0; i<buttons.length; i++) {
    buttons[i].onclick = onClik;
}

//var arr = [3, -4, 50, 34, 8, -20, 20, -12],
//    i,
// sum = 0;

/*for (i=0; i<arr.length; i++) {
    if (arr[i]>0) {
        sum = arr[i];
    }
}
alert(sum);
/*function ask() {
    var day;

    day = prompt('Какой сегодня день недели ( от 1 до 7)?');

    switch (day) {
        case '1':
            alert('Выходные кончились');
            break;
        case '2':
        case '3':
        case '4':
            alert('Сегодня на работу');
            break;
        case '5':
            alert('Скоро выходные');
            break;
        case '6':
        case '7':
            alert('Ура, отдыхаем');
            break;
        default:
            alert('Будь внимательнее!');
            ask();
    }
}
ask();
alert('Молодец');

/*var day,
    dayIsCorrect = false;

while (dayIsCorrect === false) {
    day = prompt('Какой сегодня день недели ( от 1 до 7)?');
    dayIsCorrect = true;

    switch (day) {
        case '1':
            alert('Выходные кончились');
            break;
        case '2':
        case '3':
        case '4':
            alert('Сегодня на работу');
            break;
        case '5':
            alert('Скоро выходные');
            break;
        case '6':
        case '7':
            alert('Ура, отдыхаем');
            break;
        default:
            dayIsCorrect = false;
            alert('Будь внимательнее!');
    }
}
alert('Молодец');


/*var day,
    dayIsCorrect;

do {
    day = prompt('Какой сегодня день недели ( от 1 до 7)?');
    dayIsCorrect = true;

    switch (day) {
        case '1':
            alert('Выходные кончились');
            break;
        case '2':
        case '3':
        case '4':
            alert('Сегодня на работу');
            break;
        case '5':
            alert('Скоро выходные');
            break;
        case '6':
        case '7':
            alert('Ура, отдыхаем');
            break;
        default:
            dayIsCorrect = false;
            alert('Будь внимательнее!');
    }
} while (dayIsCorrect === false);
alert('Молодец');

/*var day;

day = prompt('Какой сегодня день недели ( от 1 до 7)?');

switch (day) {
    case '1': alert('Выходные кончились'); break;
    case '2':
    case '3':
    case '4': alert('Сегодня на работу'); break;
    case '5': alert('Скоро выходные'); break;
    case '6':
    case '7': alert('Ура, отдыхаем'); break;
    default:
        alert('Будь внимательнее!');
}*/


/*var arr = {
    '1': 'Monday',
    '2': 'Tuesday',
    '3': 'Wensday',
    '4': 'Tharsday',
    '5': 'Friday',
    '6': 'Saturday',
    '7' : 'Sanday'
};

var date = new Date(),
    day = date.getDay(),
    nameOfDay;

if (day==0) {
    nameOfDay = arr[7];
} else {
    nameOfDay = arr[day];
}*/

// nameOfDay = day == 0 ? arr[7]: arr[day]; таранарные функции

// alert(nameOfDay);

