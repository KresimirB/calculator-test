var _calculator = require('./_calculator.js');

$(document).ready(function(){
    // elem = getElementById('calculator-icon');
    var calculator = new _calculator();

    $("#_display").on('change', function(){
        console.log(parseFloat($(this).val()));
    });
    var keys = {'8':'a', };
    $('body').on('keyup',function(event){
        console.log(event.keyCode);
        switch(event.keyCode){
            case 8:
                $(".delete").click();
            break;
            case 13:
                $(".equal").click();
            break;
            case 46:
                $(".clear").click();
            break;
            case 48:
                calculator.display('0', 'number');
            break;
            case 45:
                calculator.display('0', 'number');
            break;
            case 49:
                calculator.display('1', 'number');
            break;
            case 35:
                calculator.display('1', 'number');
            break;
            case 50:
                calculator.display('2', 'number');
            break;
            case 40:
                calculator.display('2', 'number');
            break;
            case 51:
                calculator.display('3', 'number');
            break;
            case 34:
                calculator.display('3', 'number');
            break;
            case 52:
                calculator.display('4', 'number');
            break;
            case 37:
                calculator.display('4', 'number');
            break;
            case 53:
                calculator.display('5', 'number');
            break;
            case 12:
                calculator.display('5', 'number');
            break;
            case 54:
                calculator.display('6', 'number');
            break;
            case 39:
                calculator.display('6', 'number');
            break;
            case 55:
                calculator.display('7', 'number');
            break;
            case 36:
                calculator.display('7', 'number');
            break;
            case 56:
                calculator.display('8', 'number');
            break;
            case 38:
                calculator.display('8', 'number');
            break;
            case 57:
                calculator.display('9', 'number');
            break;
            case 33:
                calculator.display('9', 'number');
            break;
            case 106:
                calculator.display('*', 'operator');
            break;
            case 107:
                calculator.display('+', 'operator');
            break;
            case 109:
                calculator.display('-', 'operator');
            break;
            case 191:
                calculator.display('/', 'operator');
            break;
            case 111:
                calculator.display('/', 'operator');
            break;
            case 187:
                $(".equal").click();
            break;
        }
    });
    $(".calculator-button").on('click', function(event){

        //get name of data attribute
        var objectkey = Object.keys(($(this).data()))[0];
        //show changes
        calculator.display($(this).data(objectkey), objectkey);
    });
});