<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Lanchonete</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href='style.css'>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            require_once('./components/header/header.php');
        ?>
        <main>
            <p id="cardapios"></p>
            <div class="cardapios-restaurante">
                <h2>Lanches</h2>
                <div class="container-lanches">
                    <ul onclick="personalizar(this)">
                        <li><h2>Big Mac</h2></li>
                        <li><img src="./assets/img/lanche_big.png" alt="big_lanche" width="200px" height="200px"></li>
                        <li>Preço R$ 35,00</li>
                    </ul>
                    <ul>
                        <li><h2>Artesanal</h2></li>
                        <li><img src="./assets/img/artesanal.png" alt="lanche_artesanal" width="200px" height="200px"></li>
                        <li>Preço R$ 24,90</li>
                    </ul>
                    <ul>
                        <li><h2>X Salada</h2></li>
                        <li><img src="./assets/img/xsalada.png" alt="x-salada" width="200px" height="200px"></li>
                        <li>Preço R$ 18,00</li>
                    </ul>
                    <ul>
                        <li><h2>X Tudo Duplo</h2></li>
                        <li><img src="./assets/img/x-tudo-duplo.png" alt="x-tudo-duplo" width="200px" height="200px"></li>
                        <li>Preço R$ 40,00</li>
                    </ul>
                    <ul>
                        <li><h2>Combo</h2></li>
                        <li><img src="./assets/img/combo1.png" alt="combo completo" width="200px" height="200px"></li>
                        <li>Preço R$ 50,00</li>
                    </ul>
                    <ul>
                        <li><h2>X Bacon</h2></li>
                        <li><img src="./assets/img/x-bacon.png" alt="X Banco" width="200px" height="200px"></li>
                        <li>Preço R$ 23,90</li>
                    </ul>
                    <ul>
                        <li><h2>Hot Dog</h2></li>
                        <li><img src="./assets/img/hot-dog.png" alt="Hot Dog" width="200px" height="200px"></li>
                        <li>Preço R$ 10,00</li>
                    </ul>
                </div>
            </div>
            <div class="personalizar">
                <h2>Personalizar</h2>
                <div class="informations">
                    <div class="selecionado">
                        <p>Big Mac</p>
                        <img src="./assets/img/lanche_big.png" alt="big_lanche" width="200px" height="200px">
                        <p>Preço R$ 10,00</p>
                    </div>
                    <div class="ingredientes">
                        <div class="ingredient">
                            <p class="nome">Tomate <div class="quantidade"><p onclick="subtrair(this)">-</p><p class="valor" id="tomate">0</p><p onclick="somar(this)">+</p><p>R$ 3,00</p></div></p>
                        </div>
                        <div class="ingredient">
                            <p class="nome">Alface <div class="quantidade"><p onclick="subtrair(this)">-</p><p class="valor" id="alface">0</p><p onclick="somar(this)">+</p><p>R$ 3,00</p></div></p>
                        </div>
                        <div class="ingredient">
                            <p class="nome">Hamburguer <div class="quantidade"><p onclick="subtrair(this)">-</p><p class="valor" id="hamburguer">0</p><p onclick="somar(this)">+</p><p>R$ 7,00</p></div></p>
                        </div>
                        <div class="ingredient">
                            <p class="nome">Milho <div class="quantidade"><p onclick="subtrair(this)">-</p><p class="valor" id="milho">0</p><p onclick="somar(this)">+</p><p>R$ 5,00</p></div></p>
                        </div>
                        <div class="ingredient">
                            <p class="nome">Azeite <div class="quantidade"><p onclick="subtrair(this)">-</p><p class="valor" id="azeite">0</p><p onclick="somar(this)">+</p><p>R$ 2,00</p></div></p>
                        </div>
                        <p style="width: 50%; display: inline-block;">Total <p style="width: 50%; display: inline-block;">0</p></p>
                    </div>
                </div>
            </div>
        </main>
        <?php
            require_once('./components/footer/footer.php');
        ?>
        <script>
            function personalizar(e)
            {
                const nome  = [e][0].children[0].innerText;
                const imag  = [e][0].children[1].innerHTML;
                const preco = [e][0].children[2].innerText;

                let valor = preco[9] + preco[10];
                console.log(parseInt(valor))
            }

            function total()
            {

            }

            function subtrair(e)
            {
                const id = $(e)[0].nextSibling.id;
                let valor = parseInt($("#"+id)[0].outerText);
            
                if(valor > 0)
                {
                    $("#"+id)[0].innerText = valor - 1
                }
            }

            function somar(e)
            {
               const id = $(e)[0].parentNode.children[1].id;
               let valor = parseInt($("#"+id)[0].outerText);
               $("#"+id)[0].innerText = valor + 1;
               let stringPreco = $(e)[0].parentNode.firstElementChild.parentNode.lastElementChild.innerText;
               let preco = stringPreco[3] + stringPreco[4] + stringPreco[5] + stringPreco[6];

               console.log(parseFloat(preco))
            }
            
            setTimeout(() => {
                console.log($(".selecionado"))
            }, "1000")
        </script>
    </body>
</html>