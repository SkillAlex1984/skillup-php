'use strict'


var arrM = [[[1,1,1],[2,2,2]], [[1,1,1],[2,2,2]],[1]];
var rez = 0;

for (var i=0; i<arrM.length; i++) {
    for (var j = 0; j<arrM[i].length; j++) {
        for (var k=0; k<arrM[i][j].length; k++ ) {
            var rez = rez + arrM[i][j][k];
        }
    }
}
alert(rez);


/*var arrM = [[1,2,3,4,5], [4,5,6,7],[1]];
var rez = 0;

    for (var i=0; i<arrM.length; i++) {
        for (var j = 0; j<arrM[i].length; j++) {
            var rez = rez + arrM[i][j];
        }
    }
alert(rez);
/* zadach5 var arr1 =[1, 2, 3, 4, 5, 6, 7],
    rez = [],
    i,
    j = 0;

for (i=arr1.length - 1; i>=0; i--) {
    //rez.push(i);
    rez[j] = arr1[i];
    j++;
    }
alert(rez);
/*var arr = [0,0,0,0,0],
    rez = 0;

    for (var i=0; i < arr.length; i++) {
        rez = rez + arr[i];
        if (rez > 10) {
            alert(i + 1);
            break;
        } else {
            alert('меньше 10');
            break;
        }
    }


/*function arrayFill(s, count) {
    var i,
        res = '';
    for (i = 0; i < count; i++) {
        res += s;
    }
    return res;
}
        var i,
            arr = [];
            for (i = 1; i <=9; i++){
                arr.push(arrayFill('n', i));
            }
console.log(arr);
/*var arr = [],
    x = '',
    i;

for (i = 0; i<10; i++) {
    x += 'x';
    arr.push(x);
}
console.log(arr);*/
