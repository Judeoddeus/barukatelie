<?php include "../includes/cabecalho.php";?>

<hr>

<p>
    <a href="agenda-formulario-inserir.php" class="btn btn-danger bi-plus-circle">Agendamento</a>
</p>
<hr><br>

<?php
    include "../conexao.php";
    
    $result = mysqli_query($conexao,"SELECT * FROM agenda");

?>


<br>
<table class="table">
<thead class="border">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DATA</th>
      <th scope="col">HORÁRIO</th>
      <th scope="col">NOME</th> 
      <th scope="col">TELEFONE</th>
      <th scope="col">AÇÕES</th>
      <br>
    </tr>
  </thead>

<?php
  while($row_busca = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td> {$row_busca['id']}</td>";
    $data_agendada = date("d/m/Y", strtotime($row_busca['data']));
    echo "<td>{$data_agendada}</td>";    
    echo "<td>{$row_busca['hora']}</td>";
    echo "<td>{$row_busca['nome']}</td>";
    echo "<td>{$row_busca['telefone']}</td>";  
    echo"<td><a class='btn btn-outline-danger' href='agenda-formulario-alterar.php'?id={row_busca['id']}'><i class='bi bi-badge-ad'>AD</i></a></td>";
    echo"<td><a class='btn btn-outline-danger' href='agenda-excluir.php'?id={row_busca['id']}'><i class='bi bi-dash-lg'>EX</i></a></td>";
    echo "<tr>";
}    

?>
</table>

<?php include "../includes/rodape.php";?>
