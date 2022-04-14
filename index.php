<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Array</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>    
    <?php
        $produtos = [
            [
                'categoria' => 'Computadores',
                'itens' => [
                    [
                        'nome'  =>'PC Gamer HP',
                        'img'   =>'https://acerstore.vtexassets.com/arquivos/ids/160348-800-auto?v=637829657309270000',
                        'valor' =>'R$7.999,00',
                        'link'  => 'https://www.magazineluiza.com.br/notebook-acer-a315-56-311j-intel-core-i3-8gb-256gb-ssd-156-full-hd-led-windows-10/p/231776600/in/note/'
                    ],
                    [
                        'nome'  =>'PC Gamer HP',
                        'img'   =>'https://acerstore.vtexassets.com/arquivos/ids/160348-800-auto?v=637829657309270000',
                        'valor' =>'R$7.999,00',
                        'link'  => 'https://www.magazineluiza.com.br/notebook-acer-a315-56-311j-intel-core-i3-8gb-256gb-ssd-156-full-hd-led-windows-10/p/231776600/in/note/'
                    ],
                    [
                        'nome'  =>'Cpu Gamer Chatrey G1',
                        'img'   =>'https://http2.mlstatic.com/D_NQ_NP_898749-MLB49350396139_032022-O.webp',
                        'valor' =>'R$4.830,00',
                        'link'  => 'https://www.magazineluiza.com.br/notebook-acer-a315-56-311j-intel-core-i3-8gb-256gb-ssd-156-full-hd-led-windows-10/p/231776600/in/note/'
                    ]
                ]
            ],
            [
                'categoria' => 'Notebooks',
                'itens' => [
                    [
                        'nome'=>'Asus M515DA-EJ502T AMD',
                        'img'=>'https://a-static.mlcdn.com.br/618x463/notebook-asus-m515da-ej502t-amd-ryzen-5-8gb-256gb-156-full-hd-windows-10/magazineluiza/135308500/f7944857a96b6d6e480f9cd508d9b91b.jpg',
                        'valor'=>'R$3.393,57',
                        'link'  => 'https://www.magazineluiza.com.br/notebook-acer-a315-56-311j-intel-core-i3-8gb-256gb-ssd-156-full-hd-led-windows-10/p/231776600/in/note/'
                    
                    ],
                    [
                        'nome'=>'Samsung Book Intel Core i5',
                        'img'=>'https://a-static.mlcdn.com.br/618x463/notebook-samsung-book-intel-core-i5-8gb-256gb-ssd-156-full-hd-windows-11/magazineluiza/234099300/1dae9242b5dd61a5736f155930b95ebf.jpg',
                        'valor'=>'R$3.533,07',
                        'link'  => 'https://www.magazineluiza.com.br/notebook-acer-a315-56-311j-intel-core-i3-8gb-256gb-ssd-156-full-hd-led-windows-10/p/231776600/in/note/'
                    
                    ],
                    [
                        'nome'=>'Acer A315-56-311J Intel Core i3',
                        'img'=>'https://a-static.mlcdn.com.br/618x463/notebook-acer-a315-56-311j-intel-core-i3-8gb-256gb-ssd-156-full-hd-led-windows-10/magazineluiza/231776600/5dfacec6cd8aeaf2bc87d5ae99f286c4.jpg',
                        'valor'=>'R$2.882,07',
                        'link'  => 'https://www.magazineluiza.com.br/notebook-acer-a315-56-311j-intel-core-i3-8gb-256gb-ssd-156-full-hd-led-windows-10/p/231776600/in/note/'
                    
                    ]
                ]
            ]            
        ];
        foreach ($produtos as $nivel1) {
            echo '<h2>'.$nivel1['categoria'].'</h2>';
            echo '<ul>';
            foreach ($nivel1['itens'] as $nivel2) {
                ?>
                <a href="<?php echo $nivel2['link'];?>" target="_blank">
                    <li>
                        <figure>
                            <img src="<?php echo $nivel2['img'];?>">
                            <figcaption><?php echo $nivel2['nome'];?></figcaption>
                            <h2><?php echo $nivel2['valor'];?></h2>
                        </figure>
                    </li>
                </a>
                <?php                
            }
            echo '</ul>';
        }

        // for($id = 0; $id < count($produtos); $id++){
        //     echo '<p> id:'. $id .' -> '.$produtos[$id].'</p>';
        // }
    ?>
</body>
</html>