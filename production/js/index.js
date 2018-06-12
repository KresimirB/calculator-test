(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
class calculator{
    constructor(){        
        this.val1 = '0';
        this.val2 = '';
        this.operation = ''; //operation to show on display
        this._display = $("#display");
        this.operations = {'+':'add', '-':'substract', '/':'divide', '*':'multiply'};
        this.currentOperator = '';
        this.result = true; // need to know if equal button is clicked
    }
    isFloat(val){
        return val % 1 !== 0;
    }
    add(){
        try{
            this.val1 = parseFloat(this.val1) + parseFloat(this.val2);
            
            //check if the number is float
            if(this.isFloat(this.val1)){
                this.val1 = this.val1.toFixed(3);
            }
            this.val1 = this.val1.toString();
            this.val2 = '';
        }catch(e){
            alert('check your inputs');
        }
    };
    substract(){
        try{
            this.val1 = parseFloat(this.val1) - parseFloat(this.val2);
            if(this.isFloat(this.val1)){
                this.val1 = this.val1.toFixed(3);
            }
            this.val1 = this.val1.toString();
            this.val2 = '';
        }catch(e){
            alert('check your inputs');
        }
    };
    multiply(val1, val2){
        try{
            this.val1 = parseFloat(this.val1) * parseFloat(this.val2);
            if(this.isFloat(this.val1)){
                this.val1 = this.val1.toFixed(3);
            }
            this.val1 = this.val1.toString();
            this.val2 = '';
        }catch(e){
            alert('check your inputs');
        }
    };
    divide(val1, val2){
        try{
            this.val1 = parseFloat(this.val1) / parseFloat(this.val2);
            if(this.isFloat(this.val1)){
                this.val1 = this.val1.toFixed(3);
            }
            this.val1 = this.val1.toString();
            this.val2 = '';
        }catch(e){
            alert('check your inputs');
        }
    };

    //sign change
    change(){
        if(this.operation!=='' && this.val2!==''){
            this.val2 = - this.val2;
        }else if(this.operation!==''){
        }else{
            this.val1 = -this.val1;
        }
    }
    equal(){
        //do only if both of values are numbers
        if(this.val1!=='' && this.val2!==''){
            this.result = true;
            this.operation = '';
            this[this.currentOperator](); //operation to do
        }
    }
    delete(val){
        //delete one sign from right
        if(this.result){
            this.clear();
        }
        if(this.operation!=='' && this.val2!==''){
            this.val2 = this.val2.slice(0, -1);
        }else if(this.operation!==''){
            this.operation = '';
        }else{
            this.val1 = this.val1.slice(0, -1);
            if(this.val1 === ''){      
                this.clear();
            }
        }
    };
    clear(){
        this.val1 = '0';
        this.val2 = '';
        this.operation = '';        
        this.result = true;
    };
    display(value, type){
        if(type==='number'){
            if(this.operation===''){
                this.val1 = ("" + this.val1 + value);
                if(this.result && this.val1.slice(1, 2)!=='.'){
                    this.result = false;
                    this.val1 = value.toString();
                };
            }else{
                this.val2 = ("" + this.val2 + value);
                if(this.val2.slice(0, 1)=='0' && this.val2.slice(1, 2)!=='.' && this.val2.slice(1, 2)!==''){
                    this.val2 = this.val2.slice(1);
                };
            }
        }else if(type==='operator'){
            this.result = false;
            if(this.currentOperator!=='' && this.val2 !== ''){
                $(".equal").click();
            }
            this.operation = value;
            this.currentOperator = this.operations[value];
        }else{
            this[type]();
        }
        this._display.empty().append(this.val1 + '' + this.operation + '' + this.val2);
    }
    operator(symbol){
        switch(symbol){
            case '+':
                this.operation = ['add', '+'];
                return true;
            break;
            case '-':
                this.operation = ['substract', '-'];
                return true;
            break;
            case '/':
                this.operation = ['divide', '/'];
                return true;
            break;
            case '*':
                this.operation = ['multiply', '*'];
                return true;
            break;
        }
    }
}

module.exports = calculator;
},{}],2:[function(require,module,exports){
let _calculator = require('./_calculator.js');

$(document).ready(function(){
    // elem = getElementById('calculator-icon');
    let calculator = new _calculator();

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
},{"./_calculator.js":1}]},{},[2]);
