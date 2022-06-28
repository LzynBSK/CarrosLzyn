<?php
    $con = new mysqli('localhost','root','','carros_lzyn');
    if(isset($_GET['btnCadastrar'])){
        
        $nome = $_GET['txtNome'];
        $marca = $_GET['txtMrc'];
        $estado = $_GET['txtEstd'];
        $anoLancamento = $_GET['txtAno'];
        $vendido = $_GET['txtVndd'];
        $cidade = $_GET['txtCidade'];
        $preco = $_GET['txtPreco'];



        $cmdSql = "INSERT INTO carro VALUES (NUll, '$nome','$marca','$estado','$anoLancamento','$vendido','$cidade','$preco')";


        $con->query($cmdSql);
    }


    $resultado = $con->query('Select * from carro');    
    $carro = false;
    if($resultado->num_rows > 0){
        $carro = $resultado->fetch_all();       
    }
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome 5 Icons -->
    <script src="https://kit.fontawesome.com/cfaf861b72.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

    <link rel="shortcut icon" href="./img/My Logo.png">

    <title>Cadastro de carros</title>
</head>

<body>

<header>
    <a href="#" class="logo" >LZCRS</a>
        <ul class="navigation">
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Portfólio</a></li>
        </ul>
        <div class="search">
            <input type="text" placeholder="Search">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
</header>
<div class="banner">
    <div class="content">
        <h2>Cadastro de Carros Para Administrar</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet animi dignissimos temporibus? Odit reiciendis, accusamus nihil in illo quibusdam libero sapiente quae a sequi, ex molestiae aut quia tempora voluptates.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet animi dignissimos temporibus? Odit reiciendis, accusamus nihil in illo quibusdam libero sapiente quae a sequi, ex molestiae aut quia tempora voluptates.</p>
        <a href="#cadastros">Cadastre o Seu</a>
    </div>
    <img src="/img/My Logo.png" class="image" 
    width="250px"
    height="250px">
</div>

    
            

<main>
    <section id="cadastros">
    <div class="container">
        <form method="get" class="row g-3">

            <div class="col-md-4">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputNome" name="txtNome">
            </div>

            <div class="col-md-4">
                <label for="inputEmail" class="form-label">Marca</label>
                <input type="marca" class="form-control" id="inputMrc" name="txtMrc">
            </div>

            <div class="col-md-4">
                <label for="inputTel" class="form-label">Estado</label>
                <input type="estado" class="form-control" id="inputEstd" name="txtEstd" placeholder="Usado/novo ...">
            </div>

            <div class="col-md-2">
                <label for="inputAN" class="form-label">Ano de Lançamento</label>
                <select id="inputAN" name="txtAno" class="form-select">
                    <option selected>Escolha...</option>
                    <option value="2000">2000</option>	
                    <option value="2001">2001</option>	
                    <option value="2002">2002</option>	
                    <option value="2003">2003</option>	
                    <option value="2004">2004</option>	
                    <option value="2005">2005</option>	
                    <option value="2006">2006</option>	
                    <option value="2007">2007</option>	
                    <option value="2008">2008</option>	
                    <option value="2009">2009</option>	
                    <option value="2010">2010</option>	
                    <option value="2011">2011</option>	
                    <option value="2012">2012</option>	
                    <option value="2013">2013</option>	
                    <option value="2014">2014</option>	
                    <option value="2015">2015</option>	
                    <option value="2016">2016</option>	
                    <option value="2017">2017</option>	
                    <option value="2018">2018</option>	
                    <option value="2019">2019</option>	
                    <option value="2020">2020</option>	
                    <option value="2021">2021</option>	
                    <option value="2022">2022</option>	
                    <option value="2023">2023</option>	
                    <option value="2024">2024</option>	
                    <option value="2025">2025</option>	
                    <option value="2026">2026</option>	
                </select>
            </div>
            
            <div class="col-md-2">
                <label for="inputVndd" class="form-label">Disponível/Vendido</label>
                <select id="inputVndd" name="txtVndd" class="form-select">
                    <option value="Disponível">Disponivel</option>
                    <option value="Vendido">Vendido</option>		
                </select>
            </div>

            <div class="col-md-4">
                <label for="inputCidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCidade" name="txtCidade">
            </div>
            <div class="col-md-4">
                <label for="inputPreco" class="form-label">Preço</label>
                <input type="text" class="form-control" id="inputPreco" name="txtPreco" value="R$ " placeholder="R$...">
            </div>     
            
            <div class="btn-cds">
            <button style="--clr: purple" type="submit" name="btnCadastrar"><span>Cadastrar</span><i></i></button>
            </div>
        </form>

        <hr>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Marca</th>
                <th scope="col">Estado</th>
                <th scope="col">Ano de Lançamento</th>
                <th scope="col">Disponível/Vendido</th>
                <th scope="col">Cidade</th>
                <th scope="col">Preço</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class = tabela-veiculos>
            <?php
                if($carro){
                    foreach ($carro as $linhas) {
                        echo '<tr>
                                
                                <td>'.$linhas[1].'</td>
                                <td>'.$linhas[2].'</td>
                                <td>'.$linhas[3].'</td>
                                <td>'.$linhas[4].'</td>
                                <td>'.$linhas[5].'</td>
                                <td>'.$linhas[6].'</td>
                                <td>'.$linhas[7].'</td>

                            </tr>';
                    }
                }
            ?>
            
            </tbody>
          </table>
    </div>
    </section>
</main>

        <footer>
        <div class="footer-content">    
        <h3>Carros Lzyn</h3>
            <p>Desenvolvido por LzynDev </p>
            <ul class = "social">
                <li><a href="https://www.youtube.com/channel/UCbBDgtmOzKHpq3BqjhEyTHQ"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://github.com/LzynBSK"><i class="fa-brands fa-github"></i></a></li>
                <li><a href="https://discord.gg/XF9RyEJRuU"><i class="fa-brands fa-discord"></i></a></li>
            </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy; 2022 LzynDev. Designed by <span>LzynDev</span></p>
            </div>
        </footer>

</body>

</html>

