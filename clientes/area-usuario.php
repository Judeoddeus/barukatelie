<?php
include "../includes/cabecalho.php";
include "../includes/conexao.php"
?>

<?php 
    $sqlBusca = "SELECT * FROM cadastro_medidas_cliente ";
    $area_usuario = mysqli_query($conexao, $sqlBusca);
?>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col">Medidas</th>
                        <th scope="col">valor</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Busto</th>
                        <td>1.78</td>

                    </tr>
                    <tr>
                        <th scope="row">Cintura</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Quadril</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Ombro a Ombro</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Ombro</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Colarinho</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Entre Cavas FRT</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Centro FRT</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Entre Cavas CST</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alt. Busto</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Separação do Busto</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alt. Frente</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alt. Costas</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alt. Quadril</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alt. Gancho FRT</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alt. Gancho CST</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alt. Cintura do Joelho</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alt. Cintura ao Tornozelo</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Largura do Joelho</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Cump. Braço</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Largura Braço</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Punho</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alt. Manga 3/4</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alt. Manga Curta</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <span>

            </span>
        </div>
    </div>
</div>

<?php
    while($row_usuario = mysqli_fetch_assoc($area_usuario)){
        echo "<tr>";
        echo "<td> {$row_usuario['busto']}</td>";
        echo "<td> {$row_usuario['cintura']}</td>";
        echo "<td> {$row_usuario['quadril']}</td>";
        echo "<td> {$row_usuario['ombro_a_ombro']}</td>";
        echo "<td> {$row_usuario['ombro']}</td>";
        echo "<td> {$row_usuario['colarinho']}</td>";
        echo "<td> {$row_usuario['entreCavasFrt']}</td>";
        echo "<td> {$row_usuario['centroFrt']}</td>";
        echo "<td> {$row_usuario['entreCavasCst']}</td>";
        echo "<td> {$row_usuario['alt_busto']}</td>";
        echo "<td> {$row_usuario['separacaoBusto']}</td>";
        echo "<td> {$row_usuario['alt_frente']}</td>";
        echo "<td> {$row_usuario['alt_costa']}</td>";
        echo "<td> {$row_usuario['alt_quadril']}</td>";
        echo "<td> {$row_usuario['alt_gancho']}</td>";
        echo "<td> {$row_usuario['alt_ganchoFrt']}</td>";
        echo "<td> {$row_usuario['alt_ganchoCst']}</td>";
        echo "<td> {$row_usuario['alt_cintJoelho']}</td>";
        echo "<td> {$row_usuario['alt_cintTorno']}</td>";
        echo "<td> {$row_usuario['largJoelho']}</td>";
        echo "<td> {$row_usuario['cumpBraco']}</td>";
        echo "<td> {$row_usuario['largBraco']}</td>";
        echo "<td> {$row_usuario['punho']}</td>";
        echo "<td> {$row_usuario['alt_manga3_4']}</td>";
        echo "<td> {$row_usuario['alt_mangaCurta']}</td>";
        echo "<td> {$row_usuario['alt_saia']}</td>";
     
    }
?>
<?php include "../includes/rodape.php"; ?>