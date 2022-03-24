<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // class teste{
        //     public $nome;
        // }
        // $nome = "João";
        // $idade = 10;
        // $salario = 1111.99;
        // $casado = false;
        // $formacao = ['Pedreiro','Pintor','Cozinheiro'];
        // $objeto = new teste();

        // var_dump($nome,$idade,$salario,$casado,$formacao,$objeto);
        
        $usuarios = [
            'SP' => [
                'nome'=>'Marcos',
                'idade'=>18,
                'formacao' => ['Pedreiro','Pintor','Cozinheiro']
            ],
            'user2' => [
                'nome'=>'Telma',
                'idade'=>22,
                'formacao' => ['Engenheira','Arquitéta']
            ],
        ];

        var_dump($usuarios);

// ************* Exercício ***************************;
// Crie uma array com o seguinte conteúdo;
// 3 estados; 
//     => dados do estado (nome, população, cidades)
// Cada estado com no mínimo 3 cidades;
// 	    => dados das cidades (nome, população, bairros)
// Cada cidade de cada estado com no mínimo 2 bairros;
// 	    => dados do bairro (nome, zona (ex: sul), ruas)
// Cada bairro com no mínimo 2 ruas;
// 	    => dados da rua (nome, número de casa)
//****************************************************;

    ?>
</body>
</html>
