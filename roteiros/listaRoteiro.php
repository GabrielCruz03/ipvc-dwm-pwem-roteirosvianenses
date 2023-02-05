<?php

include_once "config.php";
include_once "template.php";

?>

<?=stringHeader();?>

<h1>Lista de Roteiros <a href="criar_roteiro.php" class="btn btn-success">Criar novo roteiro</a></h1>

<?php


//listar todos os roteiro
$st=$pdo->prepare("SELECT id_roteiro,nome,descricao, (select imagem from roteirosviana.imagens where id_imagem=(select id_imagem from roteirosviana.roteiro_imagem where id_roteiro =roteirosviana.roteiro.id_roteiro) ) as imagem from roteirosviana.roteiro ORDER BY id_roteiro;");
    $st->execute();

    //lista dos roteiros
    $listaRoteiro=$st->fetchAll(PDO::FETCH_ASSOC);

    if(count($listaRoteiro)>0)

    {
        ?>
        <table style="margin-top:30px;" class="table table-stripedd">
        <thead class="table-dark">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Imagem</td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <?php
//cria una lista com os dados da base de dados
        foreach ($listaRoteiro as $roteiro)
        {
            echo "<tr>";
            echo "<td>".$roteiro["id_roteiro"]."</td>";
            echo "<td>".$roteiro["nome"]."</td>";
            echo "<td>".$roteiro["descricao"]."</td>";
            echo '<td> 
            <img src="data:image/jpeg;base64,'. base64_encode($roteiro["imagem"]) .'" width="225" height="150"/></td>';
            echo "<td><a href='editar_roteiro.php?id_roteiro=".$roteiro["id_roteiro"]."' class='btn btn-primary'>Editar</a>
            <a href='remover_roteiro.php?id_roteiro=".$roteiro["id_roteiro"]."' class='btn btn-danger'>Remover</a></td>";
            echo "<tr>";
        }
        ?>
        </table>
        <?php
    }    
    else
    {
        echo "<p class='text-danger'>Sem Roteiro</p>";
    }

?>



<?=stringFooter();?>