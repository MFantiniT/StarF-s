<?php
    include_once('templates/header.php');

    if(isset($_POST['pesquisa'])){
        $result = pesquisaVagas($conn, $_POST['pesquisa']);
    } else {
        $result = exibeVagas($conn);
    }   
?> 

<!-- aqui o conteudo principal  -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Inscrições</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addJobModal">
          + Adicionar Fã
        </button>
    </div>
    
    <form action="MinhasVagas.php" method="post" class="input-group my-3">
        <input type="text" name="pesquisa" id="pesquisa" class="form-control" placeholder="Pesquisar">
        <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Status</th>
              <th>Data</th>
              <th>Gerar Carteirinha</th>                   
            </tr>
          </thead>
          <tbody>
              
              <tr>
                <td>1</td>
                <td>Matheus Fantini T</td>
                <td>Aguardando Carteirinha do fã clube</td>
                <td>19/11/2023</td>
                <td><a href="geraCarteirinha.html"><img src="forma-de-pagamento.png" alt="ico-cartao"  width="5%" height="5%"></a></td>
              </tr>
                
          </tbody>
        </table>
      </div>
      <!-- Modal -->
<div class="modal fade" id="addJobModal" tabindex="-1" aria-labelledby="addJobModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addJobModalLabel">Adicionar nova vaga</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form action="actions/addVagas.php" method="POST">
          <div class="form-group">
              <label for="jobTitle">Nome do Fã</label>
              <input type="text" class="form-control" id="jobTitle" name="jobTitle" required>
          </div>
          <div class="form-group">
              <label for="jobDescription">email</label>
              <textarea class="form-control" id="jobDescription" name="jobDescription" rows="1" required></textarea>
          </div>
          <div class="form-group">
              <label for="requisitos">Telefone</label>
              <textarea class="form-control" id="requisitos" name="requisitos" rows="1" required></textarea>
          </div>

          <!-- Add more fields as needed -->
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php include_once('templates/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
