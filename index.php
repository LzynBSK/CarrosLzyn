<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <form method="get" id="formSalario">
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
            
        </table>
    </div>
    <?php

    ?>
</body>

</html>