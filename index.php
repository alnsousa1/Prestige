<?php
    include "header.php";
    include "dados.php";

?>

<main>
    <h1><strong>Notícias em destaque</strong></h1>
   <div class="grid">
        <?php
            $i = 0;

            foreach( $noticias as $noticia){
                $i++;
                if($i > 6) break;

                $id = $noticia["id"];
                $nome = $noticia["nome"];
                $imagem = $noticia["imagem"];

                echo   "<div class='coluna'>
                        <div class='zoom'>
                            <div class='container'>
                                <a class='txt' href='noticia.php?id={$id}'>
                                    <img src='imagens/{$imagem}' class='imgmini'>
                                </a>
                            </div>
                        </div>
                            <p class='txt'>$nome</p>
                            <p>
                                
                            </p>
                        </div>";
            }
        ?>
   </div>
</main>

<?php include "footer.php"; ?>