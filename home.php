<div class="align-self-start p-4 position-relative w-100" style="color: #13446e; text-align:center">
    <h1>Selecione sua calculadora abaixo:</h1>
</div>

<main class="main__accordion position-relative" style="text-align: -webkit-center;">
    <div class="accordion w-25 p-3" id="accordionHome">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Saúde
                </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionHome">
                <div class="accordion-body">
                    <ul class="ul__accordion">
                        <li>    
                            <button type="button" class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#modal_calculadora_imc">
                                IMC
                            </button>
                        </li>
                        <li>    
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_calculadora_bf">
                                Percentual de Gordura
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Finanças
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionHome">
                <div class="accordion-body">
                    <ul class="ul__accordion">
                        <li>
                            <button type="button" class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#modal_calculadora_incc">
                                INCC
                            </button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#modal_calculadora_cdi">
                                CDI
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Matemática
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionHome">
                <div class="accordion-body">
                    <ul class="ul__accordion">
                        <li>    
                            <button type="button" class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#modal_calculadora_simples">
                                Calculadora Simples
                            </button>
                        </li>
                        <li>    
                            <button type="button" class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Calculadora Cientifica
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

    <!-- Modal -->
<div class="modal fade" id="modal_calculadora_imc" tabindex="-1" aria-labelledby="modal_calculadora_imc" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="calculadora_imc">Calculadora IMC</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php require 'imc.html'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modal_calculadora_simples" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="calculadora_simples">Calculadora Simples</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php require 'calculadoraComum.html'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>







