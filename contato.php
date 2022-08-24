<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestige</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include "header.php";
?>
<main>
    <form name="form1" action="enviar.php">
        <label for="nome"></label>
        <input type="text" name="nome" id="nome" required Placeholder="Digite seu nome">
        <br>
        <label for="email"></label class='email'>
        <input type="email" name="email" id="email" required Placeholder="Digite seu e-mail">
        <br>
        <label for="mensagem"></label>
        <textarea name="mensagem" id="mensagem" rows="10" Placeholder="Deixe sua mensagem"></textarea>
        <br>
        <button type="submit">Enviar Dados</button>
    </form>
</main>

<?php
    include "footer.php";
?>
    
</body>
</html>
