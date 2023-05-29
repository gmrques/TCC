 <!-- <?php
    require_once("Connection/conect.php");
    //  switch(@$_REQUEST["page"]) {
    //  case "":
    //     include("");
    //     break;
    //  case "":
    //     include("");
    //     break;
    //  case "":
    //     include("");
    //     break;
    //  case "":
    //     include("");
    //     break;
    //  default:
    //     echo"<h2>Mensagem de teste<h2>";
    //  }
    // feito para levar até as outras páginas, porém elas ainda não existem;
    // colocar dentro do href dos itens da navbar "href= ?page=nomeDaPágina.php". 
?> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="CSS/style-destinations.css" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nunito" rel="stylesheet">
    <link rel="icon" type="png" syzes="32x32" href="CSS/IMG/brand-icon/parrot.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="JS/script-search.js"></script>
    <title>Nome do site</title>
</head>
    <header>
        <nav>
            <a href=""><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Nome da empresa</a>
            <ul class="navlist">
                <a href="#">Destinos</a>
                <a href="#">Dicas</a>
                <a href="#">Roteiros</a>
                <a href="#">Gastronomia</a>
                <a href=""><i style="font-size: 1.5em;" class='plus bx bx-plus'></i></a>
                <a href=""><i style="font-size: 1.5em;" class='user bx bxs-user' ></i></a>
                <div class="container1">
                    <div class="icon">
                        <i class='search bx bx-search-alt'></i>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Pesquisar" id="search">
                        <i class='close bx bx-x'></i>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
    <body>
    <main>
        <div class="box">
            <div class="top-destination-box">
                    <p value="1">Sul</p>
                    <p value="2">Sudeste</p>
                    <p value="3">Centro-oeste</p>
                    <p value="4">Norte</p>
                    <p value="5">Nordeste</p>
                    <!-- Estilizar os cards 1:1 (29/05) -->
                    <!-- Aplicar o JS nos cards (30/05) -->
                    <!-- <div class="card-sul">
                        <img src="CSS/IMG/Destinations/Porto_Alegre.jpg" alt="">
                        <div class="intro">
                            <h3>Rio Grande do sul</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-sul">
                        <img src="CSS/IMG/Destinations/Florianópolis.jpg" alt="">
                        <div class="intro">
                            <h3>Santa Catarina</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-sul">
                        <img src="CSS/IMG/Destinations/Curitiba.jpg" alt="">
                        <div class="intro">
                            <h3>Paraná</h3>
                            <p></p>
                        </div>
                    </div> -->

                <!--
                    <div class="card-sudeste">
                        <img src="CSS/IMG/Destinations/São Paulo.jpg" alt="">
                        <div class="intro">
                            <h3>São Paulo</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-sudeste">
                        <img src="CSS/IMG/Destinations/Rio de Janeiro.jpg" alt="">
                        <div class="intro">
                            <h3>Rio de Janeiro</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-sudeste">
                        <img src="CSS/IMG/Destinations/Minas Gerais.jpg" alt="">
                        <div class="intro">
                            <h3>Minas Gerais</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-sudeste">
                        <img src="CSS/IMG/Destinations/Espírito Santo.jpg" alt="">
                        <div class="intro">
                            <h3>Espírito Santo</h3>
                            <p></p>
                        </div>
                    </div>

            
            
                    <div class="card-centro-oeste">
                        <img src="CSS/IMG/Destinations/Mato grosso.jpg" alt="">
                        <div class="intro">
                            <h3>Mato Grosso</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-centro-oeste">
                        <img src="CSS/IMG/Destinations/Mato grosso do sul.jpg" alt="">
                        <div class="intro">
                            <h3>Mato grosso do sul</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-centro-oeste">
                        <img src="CSS/IMG/Destinations/Goiás.jpg" alt="">
                        <div class="intro">
                            <h3>Goiás</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-centro-oeste">
                        <img src="CSS/IMG/Destinations/DF.jpg" alt="">
                        <div class="intro">
                            <h3>Distrito Federal</h3>
                            <p></p>
                        </div>
                    </div>
            
                    <div class="card-norte">
                        <img src="CSS/IMG/Destinations/Acre.jpg" alt="">
                        <div class="intro">
                            <h3>Acre</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-norte">
                        <img src="CSS/IMG/Destinations/Amazonas.jpg" alt="">
                        <div class="intro">
                            <h3>Amazonas</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-norte">
                        <img src="CSS/IMG/Destinations/Amapá.jpg" alt="">
                        <div class="intro">
                            <h3>Amapá</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-norte">
                        <img src="CSS/IMG/Destinations/Pará.jpg" alt="">
                        <div class="intro">
                            <h3>Pará</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-norte">
                        <img src="CSS/IMG/Destinations/Roraima.jpg" alt="">
                        <div class="intro">
                            <h3>Roraima</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-norte">
                        <img src="CSS/IMG/Destinations/Rondonia.jpg" alt="">
                        <div class="intro">
                            <h3>Rondônia</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card-norte">
                        <img src="CSS/IMG/Destinations/Tocantins.jpg" alt="">
                        <div class="intro">
                            <h3>Tocantins</h3>
                            <p></p>
                        </div>
                    </div>
            </div>
            <div class="bottom-destination-box">

            </div>
        </div>
         
        As publicações serão feitas em formato de card, com duas sections abaixo da nav para que o
        usuário selecione o que quer ver -->
    </main>
    </body>
    <footer>
        <div id="social-media">
            <a href="#"><i class='bx bxl-spotify'></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-pinterest-alt'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
        </div>
    </footer>
</html>