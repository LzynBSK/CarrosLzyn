<?php
    $con = new mysqli('localhost','root','','aulapw-2');
    if(isset($_POST['btnCadastrar'])){
        $func = $_POST['var_func'];   
        $mes  = $_POST['var_data'];   
        $sal  = $_POST['var_salario'];

        $cmdSql = "INSERT INTO dados VALUES ('$func','$mes','$sal')";

        $con->query($cmdSql);
    }

    $resultado = $con->query('Select * from dados');    
    $dados = false;
    if($resultado->num_rows > 0){
        $dados = $resultado->fetch_all();       
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <form method="post" id="formSalario">
        <fieldset>
            <legend>Salários</legend>

            <div class="salMes">
                <label for="">Funcionário - Matricula</label>]
                <select name="var_func">
                    <option value="1000">José - 1000</option>
                </select>
            </div>

            <div class="salMes">
                <label for="">Mês</label>
                <input type="date" name="var_data">
            </div>

            <div class="salMes">
                <label for="">valor salário</label>
                <input type="text" name="var_salario" placeholder="0000.00">
            </div>

            <div class="salMes2">
                <input class="btn" type="submit" name="btnCadastrar" value="Cadastrar">
            </div>

        </fieldset>
    </form>
    <div class="divTabela">
        <table>
            <tr>
                <th>Funcionário</th>
                <th>Mês</th>
                <th>Salário</th>
            </tr>            
            <?php
                if($dados){
                    $total = 0;
                    foreach ($dados as $linhas) {
                        echo '<tr>
                                <td>'.$linhas[0].'</td>
                                <td>'.$linhas[1].'</td>
                                <td>'.$linhas[2].'</td>
                            </tr>';
                            $total+=$linhas[2];
                    }
                    echo'<tr>
                            <td colspan="2"><p class="textRight">Total</p></td>
                            <td>R$'.$total.'</td>
                        </tr>';
                }
            ?>

        </table>
    </div>
    <?php

    ?>
</body>

</html>