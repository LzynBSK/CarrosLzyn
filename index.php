<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PW2</title>
</head>
<body>
    <form method="get">
        <input type="color" name="cor">
        <input type="text" name="nome" id="">
        <input type="submit" value="" name="btnEnviar">
    </form>
    
    <?php
        //isset() -> verifica a exitência de uma variável
        if(isset($_GET['btnEnviar'])){
            echo '<h1 style="color:'.$_GET['cor'].'">Teset</h1>';            
        }
        else{
            echo '<h1 style="color:black">Teset</h1>';
        }
    ?>
</body>
</html>