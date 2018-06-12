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