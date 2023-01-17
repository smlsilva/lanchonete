<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Lanchonete</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href='style.css'>
    </head>
    <body>
        <?php
            require_once('./components/header/header.php');
        ?>
        <main>
            <p id="cardapios"></p>
            <div class="cardapios-restaurante">
                <h2>Lanches</h2>
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
        </script>
    </body>
</html>