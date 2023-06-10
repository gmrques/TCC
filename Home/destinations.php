<?php
    include_once("Connection/conect.php"); 
?> 

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
    <title>Brasil em Viagem</title>
</head>
    <header>
        <nav>
            <a href="home.php"><img id="logo" src="CSS/IMG/brand-icon/parrot.png" alt="">Brasil em Viagem</a>
            <ul class="navlist">
                <a href="destination.php">Destinos</a>
                <a href="roadmap.php">Roteiros</a>
                <a href="gastronomy.php">Receitas</a>
                <button id="btn"><i style="font-size: 1.5em;" class='plus bx bx-plus'></i></button>
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
    <ul id="publish-options" class="options">
            <li><a href="publish-article.php">Artigo</a></li>
            <li><a href="publish-roadmap.php">Roteiro</a></li>
            <li><a href="publish-gastronomy.php">Receita</a></li>
        </ul>
        <div class="box">
            <div class="top-destination-box">
                    <p class="location" value="1">Sul</p>
                    <p class="location" value="2">Sudeste</p>
                    <p class="location" value="3">Centro-oeste</p>
                    <p class="location" value="4">Norte</p>
                    <p class="location" value="5">Nordeste</p>
                    <!-- Aplicar o JS nos cards (30/05) -->
                    <div class="container_card">
                            <div class="card_sul">
                            <a href="#" value="1"><img src="CSS/IMG/Destinations/Porto_Alegre.jpg" alt=""></a>
                            <div class="intro">
                                <h2>Rio Grande do sul</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id sit accusamus vero! Dicta rerum quos quas, sequi quae necessitatibus atque quidem sapiente temporibus repellendus corrupti non dolorem dolor odit totam!</p>
                            </div>
                        </div>
                        <div class="card_sul">
                            <a href="#" value="2"><img src="CSS/IMG/Destinations/Florianópolis.jpg" alt=""></a>
                            <div class="intro">
                                <h2>Santa Catarina</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, qui assumenda accusantium veritatis cupiditate delectus tenetur magni quis voluptas fugiat aliquam error quod vitae architecto eos, et culpa beatae velit.</p>
                            </div>
                        </div>
                        <div class="card_sul">
                            <a href="#" value="3"><img src="CSS/IMG/Destinations/Curitiba.jpg" alt=""></a>
                            <div class="intro">
                                <h2>Paraná</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente delectus molestiae est, minima harum, quae optio exercitationem error voluptate quis aperiam a iusto culpa, accusamus veritatis. Rerum quia in possimus.</p>
                            </div>
                        </div>
                    </div>


                <!-- <div class="container_card">
                    <div class="card_sudeste">
                        <a href="#" value="4"><img src="CSS/IMG/Destinations/São Paulo.jpg" alt=""></a>
                        <div class="intro">
                            <h2>São Paulo</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium deleniti tempora repudiandae nemo veniam rerum facilis voluptate corrupti accusamus quam distinctio incidunt atque unde, in tenetur labore sapiente quas voluptates.</p>
                        </div>
                    </div>
                    <div class="card_sudeste">
                        <a href="#" value="5"><img src="CSS/IMG/Destinations/Rio de Janeiro.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Rio de Janeiro</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, nemo suscipit blanditiis vel eius cum dolorum corrupti atque quis similique fugit illo voluptates consequatur autem enim non. Voluptatum, molestias quas.</p>
                        </div>
                    </div>
                    <div class="card_sudeste">
                        <a href="#" value="6"><img src="CSS/IMG/Destinations/Minas Gerais.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Minas Gerais</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sapiente illum maiores voluptatibus facere alias nesciunt dolores quaerat atque! Ullam officiis cum laborum quo quidem cupiditate, minus magnam eos ad!</p>
                        </div>
                    </div>
                    <div class="card_sudeste">
                        <a href="#" value="7"><img src="CSS/IMG/Destinations/Espírito Santo.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Espírito Santo</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sapiente illum maiores voluptatibus facere alias nesciunt dolores quaerat atque! Ullam officiis cum laborum quo quidem cupiditate, minus magnam eos ad!</p>
                        </div>
                    </div>
                </div> -->

            
                <!-- <div class="container_card">
                    <div class="card_centro_oeste">
                        <a href="#" value="8"><img src="CSS/IMG/Destinations/Mato grosso.jpg" alt=""></a>#
                        <div class="intro">
                            <h2>Mato Grosso</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi temporibus eum recusandae doloribus officiis veritatis esse iusto tempore aperiam nesciunt! Quod sit totam ab. Nulla sint consequatur perferendis fugiat harum!</p>
                        </div>
                    </div>
                    <div class="card_centro_oeste">
                        <a href="#" value="9"><img src="CSS/IMG/Destinations/Mato grosso do sul.jpg" alt=""></a>#
                        <div class="intro">
                            <h2>Mato grosso do sul</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi temporibus eum recusandae doloribus officiis veritatis esse iusto tempore aperiam nesciunt! Quod sit totam ab. Nulla sint consequatur perferendis fugiat harum!</p>
                        </div>
                    </div>
                    <div class="card_centro_oeste">
                        <a href="#" value="10"><img src="CSS/IMG/Destinations/Goiás.jpg" alt=""></a>#
                        <div class="intro">
                            <h2>Goiás</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi temporibus eum recusandae doloribus officiis veritatis esse iusto tempore aperiam nesciunt! Quod sit totam ab. Nulla sint consequatur perferendis fugiat harum!</p>
                        </div>
                    </div>
                    <div class="card_centro_oeste">
                        <a href="#" value="11"><img src="CSS/IMG/Destinations/DF.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Distrito Federal</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi temporibus eum recusandae doloribus officiis veritatis esse iusto tempore aperiam nesciunt! Quod sit totam ab. Nulla sint consequatur perferendis fugiat harum!</p>
                        </div>
                    </div>
                </div> -->


                <!-- <div class="container_card">
                   <div class="card_norte">
                        <a href="#" value="12"><img src="CSS/IMG/Destinations/Acre.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Acre</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                        </div>
                    </div>
                    <div class="card_norte">
                        <a href="#" value="13"><img src="CSS/IMG/Destinations/Amazonas.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Amazonas</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                        </div>
                    </div>
                    <div class="card_norte">
                        <a href="#" value="14"><img src="CSS/IMG/Destinations/Amapá.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Amapá</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                        </div>
                    </div>
                    <div class="card_norte">
                        <a href="#" value="15"><img src="CSS/IMG/Destinations/Pará.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Pará</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                        </div>
                    </div>
                </div>
                <div class="container_card">
                    <div class="card_norte">
                        <a href="#" value="16"><img src="CSS/IMG/Destinations/Roraima.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Roraima</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                        </div>
                    </div>
                    <div class="card_norte">
                        <a href="#" value="17"><img src="CSS/IMG/Destinations/Rondonia.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Rondônia</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                        </div>
                    </div>
                    <div class="card_norte">
                        <a href="#" value="18"><img src="CSS/IMG/Destinations/Tocantins.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Tocantins</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                        </div>
                    </div> 
                </div> -->
            <!-- <div class="container_card">
                    <div class="card_nordeste">
                         <a href="#" value="19"><img src="CSS/IMG/Destinations/Paraíba.jpg" alt=""></a>
                         <div class="intro">
                             <h2>Paraíba</h2>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                         </div>
                     </div>
                     <div class="card_nordeste">
                         <a href="#" value="20"><img src="CSS/IMG/Destinations/Pernambuco.jpg" alt=""></a>
                         <div class="intro">
                             <h2>Pernanbuco</h2>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                         </div>
                     </div>
                     <div class="card_nordeste">
                         <a href="#" value="21"><img src="CSS/IMG/Destinations/Alagoas.jpg" alt=""></a>
                         <div class="intro">
                             <h2>Alagoas</h2>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                         </div>
                     </div>
                     <div class="card_nordeste">
                         <a href="#" value="22"><img src="CSS/IMG/Destinations/Sergipe.jpg" alt=""></a>
                         <div class="intro">
                             <h2>Sergipe</h2>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                         </div>
                     </div>
                 </div> 
                 <div class="container_card">
                     <div class="card_nordeste">
                         <a href="#" value="23"><img src="CSS/IMG/Destinations/Bahia.jpg" alt=""></a>
                         <div class="intro">
                             <h2>Bahia</h2>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                         </div>
                     </div>
                     <div class="card_nordeste">
                         <a href="#" value="24"><img src="CSS/IMG/Destinations/Ceará.jpg" alt=""></a>
                         <div class="intro">
                             <h2>Ceará</h2>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                         </div>
                     </div>
                     <div class="card_nordeste">
                         <a href="#" value="25"><img src="CSS/IMG/Destinations/Maranhão.jpg" alt=""></a>
                         <div class="intro">
                             <h2>Maranhão</h2>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                         </div>
                     </div>
                     <div class="card_nordeste">
                        <a href="#" value="26"><img src="CSS/IMG/Destinations/Piauí.jpg" alt=""></a>
                        <div class="intro">
                            <h2>Piauí</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, tenetur sequi? Repellat, tempora culpa ullam ab qui assumenda, impedit nobis magni fugiat, voluptas illo saepe possimus! Rem nesciunt quisquam et?</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
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