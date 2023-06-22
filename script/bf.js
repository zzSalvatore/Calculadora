const sexo = document.querySelector("#sexo");
const peso = document.querySelector("#peso");
const altura = document.querySelector("#altura");
const idade = document.querySelector("#idade");
const resposta = document.querySelector("#resposta");

const limpar = document.querySelector("#limpar");
const calcular = document.querySelector("#calcular");


// Funções

function calcularImc(altura, peso){
    const imc = (peso / (altura * altura)).toFixed(1);
    return imc;
}

function calcularBf(imc, idade, sexo){
    if(sexo.value == "homem"){
        sexo = 1;
    }else{
        sexo = 0;
    }
    const bf = (( 1.20 * imc) + ( 0.23 * idade) - ( 10.8 * sexo) - 5.4)
    
    return bf;
}


function limparDados(){
    altura.value = "";
    peso.value = "";
    idade.value = "";
    sexo.value = "selecione";
}

limpar.addEventListener("click", (e) => {
    e.preventDefault();
    limparDados();
})

function validDigits(text) {
    return text.replace(/[^0-9,]/g, "");
}

// Eventos
[peso, altura, idade].forEach((el) => {
    el.addEventListener("input", (e) => {
        const updatedValue = validDigits(e.target.value);
        e.target.value = updatedValue;
    });
});

calcular.addEventListener("click", (e) => {
    e.preventDefault();

    const pesoInput = +peso.value.replace(",", ".");
    const alturaInput = +altura.value.replace(",", ".");
    
    let imc = calcularImc(alturaInput, pesoInput);
    
    const idadeInput = +idade.value;
    const sexoInput = +sexo.value;

    let bf = calcularBf(imc, idadeInput, sexoInput);

    console.log('imc: '+ imc);

    console.log('bf: ' + bf);
    
    // resposta.textContent = imc;

})