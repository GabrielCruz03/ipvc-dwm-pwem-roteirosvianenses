<?php

include_once "config.php";
include_once "template.php";
?>

<?=stringHeader()?>
<h1>Criar Roteiro</h1>
<a href="listaRoteiro.php" class="btn btn-success"> Lista de Roteiro</a>
<form method="post" action="criar_roteiro.php" enctype="multipart/form-data" >

    <div class="mb-3">
            <label for="Rroteiro" class="form-label"> Nome </label>
            <input type=" text" class="form-control" id="Rroteiro" name="Rroteiro" required/>
    </div> 

    <div class="mb-3">
            <label for="Rdescricao" class="form-label"> Descricao</label>
            <input type=" text" class="form-control" id="Rdescricao" name="Rdescricao" required/>
    </div>
    <div class="mb-3">
            <label for="Rimagem" class="form-label">Imagem</label>
            <input type="file" class="form-control" id='Iimagem' name="Iimagem" required>

    </div> 
    <button type="submit" class="btn btn-primary" name="guardar">Guardar </button>
</form>

<?php


if(!empty($_POST))
{
    
    //guardar registo na bd na respetivas tabelas
    $img=file_get_contents($_FILES["Iimagem"]["tmp_name"]);
    $rot=$_POST["Rroteiro"];

    $st=$pdo->prepare('INSERT INTO roteirosviana.imagens (imagem,nome_imagem) values(:i,:ni)');
    $st->bindValue('i',$img);
    $st->bindValue('ni',$rot);
    $st->execute();

    $imagem_id = $pdo->lastInsertId();


    $rot=$_POST["Rroteiro"];
    $desc=$_POST["Rdescricao"];
    $st=$pdo->prepare('INSERT INTO roteirosviana.roteiro (nome,descricao) values(:n,:d)');
    $st->bindValue('n',$rot);
    $st->bindValue('d',$desc);
    $st->execute();

    $roteiro_id = $pdo->lastInsertId();
    
        $st=$pdo->prepare('INSERT INTO roteirosviana.roteiro_imagem (id_roteiro, id_imagem) values(:n,:d)');
        $st->bindValue('n',$roteiro_id);
        $st->bindValue('d',$imagem_id);
        $st->execute();

    echo "<div class='alert alert-success'>roteiro foi criada com sucesso</div>";

}
?>
<?=stringFooter()?>