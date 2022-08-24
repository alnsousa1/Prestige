<?php
    include "header.php";
    include "dados.php";

        $id = $_GET["id"] ?? NULL;

    if(empty ($id)){
        echo "<script>alert('Notícia não encontrada');history.back();</script>";
        exit;
    }

    $nome = $noticias[$id]["nome"];
    $imagem = $noticias[$id]["imagem2"];
    $conteudo = $noticias[$id]["conteudo"]; 
    $conteudo2 = $noticias[$id]["conteudo2"]; 
?>

<main>
    <div class="grid-2">
        <div class='banner'>
            <img src="imagens/<?=$imagem?>" class="imgbanner">
        </div>
        <div class='coluna'>
            <h2 class="tituloN"><?=$nome?></h2>
            <p class="conteudo"><?=$conteudo?></p>
        </div>
        <img src="imagens/propaganda2.jpg" alt="propaganda" class="propaganda">
        <p class="conteudo"><?=$conteudo2?></p>

    </div>
</main>
<?php include "footer.php";?>