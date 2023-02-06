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
            <section class="cardapios-restaurante">
                <h2>Lanches</h2>
                <div class="container-lanches">
                    <ul onclick="personalizar(this)">
                        <li><h2>Big Mac</h2></li>
                        <li><img src="./assets/img/lanche_big.png" alt="big_lanche" width="200px" height="200px"></li>
                        <li>Preço R$ 35,00</li>
                    </ul>
                    <ul onclick="personalizar(this)">
                        <li><h2>Artesanal</h2></li>
                        <li><img src="./assets/img/artesanal.png" alt="lanche_artesanal" width="200px" height="200px"></li>
                        <li>Preço R$ 24,90</li>
                    </ul>
                    <ul onclick="personalizar(this)">
                        <li><h2>X Salada</h2></li>
                        <li><img src="./assets/img/xsalada.png" alt="x-salada" width="200px" height="200px"></li>
                        <li>Preço R$ 18,00</li>
                    </ul>
                    <ul onclick="personalizar(this)">
                        <li><h2>X Tudo Duplo</h2></li>
                        <li><img src="./assets/img/x-tudo-duplo.png" alt="x-tudo-duplo" width="200px" height="200px"></li>
                        <li>Preço R$ 40,00</li>
                    </ul>
                    <ul onclick="personalizar(this)">
                        <li><h2>Combo</h2></li>
                        <li><img src="./assets/img/combo1.png" alt="combo completo" width="200px" height="200px"></li>
                        <li>Preço R$ 50,00</li>
                    </ul>
                    <ul onclick="personalizar(this)">
                        <li><h2>X Bacon</h2></li>
                        <li><img src="./assets/img/x-bacon.png" alt="X Banco" width="200px" height="200px"></li>
                        <li>Preço R$ 23,90</li>
                    </ul>
                    <ul onclick="personalizar(this)">
                        <li><h2>Hot Dog</h2></li>
                        <li><img src="./assets/img/hot-dog.png" alt="Hot Dog" width="200px" height="200px"></li>
                        <li>Preço R$ 10,00</li>
                    </ul>
                </div>
            </section>
            <section class="personalizar">
                <h2>Personalizar</h2>
                <div class="informations">
                    <div class="selecionado" id="selecionado">
                    </div>
                    <div class="ingredientes">
                        <div class="ingredient">
                            <p class="nome">Tomate 
                                <div class="quantidade">
                                    <div>
                                        <p onclick="subtrair(this)">-</p>
                                        <p class="valor" id="tomate">0</p>
                                        <p onclick="somar(this)">+</p>
                                        <p>R$ 3,00</p>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <div class="ingredient">
                            <p class="nome">Alface 
                                <div class="quantidade">
                                    <div>
                                        <p onclick="subtrair(this)">-</p>
                                        <p class="valor" id="alface">0</p>
                                        <p onclick="somar(this)">+</p>
                                        <p>R$ 3,00</p>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <div class="ingredient">
                            <p class="nome">Hamburguer 
                                <div class="quantidade">
                                    <div>
                                        <p onclick="subtrair(this)">-</p>
                                        <p class="valor" id="hamburguer">0</p>
                                        <p onclick="somar(this)">+</p>
                                        <p>R$ 7,00</p>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <div class="ingredient">
                            <p class="nome">Milho 
                                <div class="quantidade">
                                    <div>
                                        <p onclick="subtrair(this)">-</p>
                                        <p class="valor" id="milho">0</p>
                                        <p onclick="somar(this)">+</p>
                                        <p>R$ 5,00</p>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <div class="ingredient">
                            <p class="nome">Azeite 
                                <div class="quantidade">
                                    <div>
                                        <p onclick="subtrair(this)">-</p>
                                        <p class="valor" id="azeite">0</p>
                                        <p onclick="somar(this)">+</p>
                                        <p>R$ 2,00</p>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <div class="personalizacao-preco-total">
                            <p>Total </p>
                            <p id="total">0</p>
                        </div>
                    </div>
                    <div class="botoes-primarios">
                        <button id="add-card">Adicionar ao Carrinho</button>
                        <button id="btn-buy">Comprar</button>
                    </div>
                </div>
            </section>
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

                const content = "<p>" + nome + "</p>" + imag + "<p>" + preco + "</p>";
                $("#total")[0].innerText = parseFloat(preco[9] + preco[10] + '.' + preco[12] + preco[13]);
                $("#selecionado").html(content);
                $(".cardapios-restaurante").css('display', 'none');
                $(".personalizar").css('display', 'block');
            }

            function subtrair(e)
            {
                const id = $(e)[0].parentNode.children[1].id;
                let valor = parseInt($("#"+id)[0].outerText);
                
                if(valor > 0)
                {
                    let valorSubtraido = valor - 1;
                    $("#"+id)[0].innerText = valorSubtraido

                    let stringValorDoIngrediente = $(e)[0].parentElement.lastElementChild.outerText;
                    let valorDoIngrediente = stringValorDoIngrediente[3] + "." +stringValorDoIngrediente[5] + stringValorDoIngrediente[6];

                    let valorTotal = $("#total")[0].outerText;

                    let valorSomado = (parseFloat(valorTotal) - (parseFloat(valor) * parseFloat(valorDoIngrediente)));
                    
                    $("#total")[0].innerText = valorSomado.toFixed(2)
                }
            }

            function somar(e)
            {
               const id = $(e)[0].parentNode.children[1].id;
               let quantidade = parseInt($("#"+id)[0].outerText);
               let quantidadeTotal = quantidade + 1;

               $("#"+id)[0].innerText = quantidadeTotal;

               let valorSomado = null;

               let stringValorDoProduto = $("#selecionado")[0].lastElementChild.outerText;
               let valorProduto = stringValorDoProduto[9] + stringValorDoProduto[10] + "." + stringValorDoProduto[12] + stringValorDoProduto[13];

               let quantidadeDeIngredientesDisponiveis = $(".quantidade").length;
               
               for(let i = 0; i < quantidadeDeIngredientesDisponiveis; i++)
               {
                let selecionado = parseInt($(".quantidade")[i].lastElementChild.children[1].outerText);

                if(selecionado > 0)
                {
                    let stringValorDoIngrediente = $(".quantidade")[i].lastElementChild.lastElementChild.outerText;
                    let valorDoIngrediente = stringValorDoIngrediente[3] + "." + stringValorDoIngrediente[5] + stringValorDoIngrediente[6];
                    valorSomado += (quantidadeTotal * parseFloat(valorDoIngrediente));
                }
               }     
               total = parseFloat(valorSomado) + parseFloat(valorProduto)
               $("#total")[0].innerText = total.toFixed(2)
            }

            $("#cardapios").on('click', function()
            {
                $(".selecionado").html('');
                $(".cardapios-restaurante").css('display', 'block');
                $(".personalizar").css('display', 'none');
            })
        </script>
    </body>
</html>