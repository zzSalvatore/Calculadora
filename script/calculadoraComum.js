const previousOperationText = document.querySelector("#previous-operations");
const currentOperationText = document.querySelector("#current-operations");
const buttons = document.querySelectorAll("#buttons-container button");

class Calculator{
    constructor(previousOperationText, currentOperationText){
        this.previousOperationText = previousOperationText;
        this.currentOperationText = currentOperationText;
        this.currentOperation = "";
    }

    // ADICIONA O DIGITO A TELA
    addDigit(digit){
        // VERIFICA SE JA TEM UM .
        if(digit === "." && this.currentOperationText.innerText.includes(".")){
            return;
        }
        this.currentOperation = digit;
        this.updateScreen();
    }

    //PROCESSA OPERAÇÕES
    processOperation(operation){
        // CHECA SE O CURRENT ESTÁ VAZIO
        if(this.currentOperationText.innerText === "" && operation !== "C"){
            //MUDA DE OPERAÇÃO
            if(this.previousOperationText.innerText != ""){
                this.changeOperation(operation);
            }
            return;
        }
        
        // PEGA O VALOR ATUAL E O ANTERIOR
        let operationValue;
        const previous = +this.previousOperationText.innerText.split(" ")[0];
        const current = +this.currentOperationText.innerText;

        switch(operation){
            case "+":
                operationValue = previous + current;
                this.updateScreen(operationValue, operation, current, previous);
                break;
            case "-":
                operationValue = previous - current;
                this.updateScreen(operationValue, operation, current, previous);
                break;
            case "*":
                operationValue = previous * current;
                this.updateScreen(operationValue, operation, current, previous);
                break;
            case "/":
                operationValue = previous / current;
                this.updateScreen(operationValue, operation, current, previous);
                break;
            case "DEL":
                this.processDelOperator();
                break;
            case "CE":
                this.processClearCurrentOperation();
                break;
            case "C":
                this.processClearAllOperation();
                break;
            case "=":
                this.processEqualOperation();
                break;
            default:
                return;
        }
    }

    // MUDA VALORES DA TELA
    updateScreen(operationValue = null, operation = null, current = null, previous = null){
        if(operationValue === null){
            this.currentOperationText.innerText += this.currentOperation;
        }else{
            // CHECA SE É 0
            if(previous === 0){
                operationValue = current;
            }
            // ADD CURRENT TO PREVIOUS
            this.previousOperationText.innerText = `${operationValue} ${operation}`;
            this.currentOperationText.innerText = "";
        }
    }

    //Muda de Operação
    changeOperation(operation){

        const mathOperation = ["+", "-", "*", "/"];

        if(!mathOperation.includes(operation)){
            return;
        }

        this.previousOperationText.innerText = this.previousOperationText.innerText.slice(0, -1) + operation;
    }

    // DELETA O ULTIMO DIGITO
    processDelOperator(){
        this.currentOperationText.innerText = this.currentOperationText.innerText.slice(0, -1);
    }

    // LIMPA OPERAÇÃO ATUAL
    processClearCurrentOperation(){
        this.currentOperationText.innerText = "";
    }

    // LIMPA TODA A OPERAÇÃO
    processClearAllOperation(){
        this.currentOperationText.innerText = "";
        this.previousOperationText.innerText = "";
    }

    // Método para o Botao de Igual
    processEqualOperation(){
       const operation = previousOperationText.innerText.split(" ")[1];
       this.processOperation(operation);
    }
}

const calc = new Calculator(previousOperationText, currentOperationText);

buttons.forEach((btn) => {
    btn.addEventListener("click", (e) => {

        const value = e.target.innerText;
        // O sinal de + é utilizado no lugar do parseInt
        if(+value >= 0 || value === "."){
            calc.addDigit(value);
        }else{
            calc.processOperation(value);
        }

    });
});