const btnSair = document.getElementById("sair-tab2");
btnSair.addEventListener("click", btnSair => {
    window.location.href = "http://localhost/calculadora/sair.php";
});

const btnHome = document.getElementById("home-tab2");
btnHome.addEventListener("click", btnHome => {
    window.location.href = "http://localhost/calculadora/index.php?pg=home"
});