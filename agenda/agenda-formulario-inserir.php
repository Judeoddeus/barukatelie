<?php 
include "../includes/cabecalho.php";  
include "../conexao.php";
?>

<div class="container">
   <div class="row">
        <div class="col-md-1 "></div>
        <div class="col-md-11">
            <hr>
            <form name="cadastro-agenda" method="post" action="agenda-inserir.php">           
                <div class="form-row col-md-6 p-2">
                    <label>NOME</label>
                    <input type="text" class="form-control" name="nome">
                </div>                
                <div class="form-row d-flex pb-3 "> 
                    <div class="form-group col-md-3 p-2">
                        <label>TELEFONE</label>
                        <input type="text" class="form-control" name="telefone" >
                    </div>                 
                    <div class="form-group col-md-3 p-2">
                        <label>SERVIÇOS</label>
                        <select class="form-control " name="servicos">
                            <option value="">Escolha o serviço</option>
                            <option value="">Zipper</option>
                            <option value="">Barras</option>
                            <option value="">Conserto em geral</option>    
                            <option value="">Confecção de roupa</option>
                            <option value="">Caseamento de camisas</option>

                        </select>
                    </div>
                </div> 
                <div class="form-row d-flex pb-3 ">  
                   
                    <div class="form-group col-md-3 p-2">
                        <label>DATA</label>
                        <input type="date" class="form-control" name="data">
                    </div>

                    <div class="form-group col-md-3 p-2">
                        <label>HORA</label>
                        <input type="time" class="form-control" name="hora" >
                    </div> 
                </div> 
                <br>

                <button type="submit" class="btn btn-danger ">Salvar</button>
    
            </form>
        </div>
    </div>
</div><br>

<?php include "../includes/rodape.php";?>