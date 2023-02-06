<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Lanchonete - Contato</title>
        <link rel="stylesheet" href="../../reset.css">
        <link rel="stylesheet" href="../../components/header/header.css">
        <link rel="stylesheet" href="../../components/footer/footer.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header>
            <h1><a href="../../"><img src="../../assets/img/logo.png" alt="lanchonete delícia" width="100px"></a></h1>
            <div>
                <nav class="menu-lanchonete">
                    <ul>
                        <li><a href="../../#cardapios">Cardápios</a></li>
                        <li><a href="./pages/carrinho/"><img src="../../assets/img/car-pay.png" alt="" width="30px" height="30px"></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="container-form">
                <form action="" method="post">
                    <fieldset>
                        <legend><img src="../../assets/img/logo.png" alt="lanchonete delícia" width="120px"></legend>
                        <input type="text" name="nome" placeholder="NOME" require>
                        <input type="text" name="sobrenome" placeholder="SOBRENOME" require>
                        <input type="tel" name="telefone" placeholder="(XX) XXXXX-XXXX" require>
                        <input type="email" name="email" placeholder="seuemail@example.com" require>
                        <textarea name="observacoes" id="obs" cols="30" rows="10" placeholder="Observacoes" require></textarea>
                        <button type="submit">Enviar</button>
                    </fieldset>
                </form>
            </div>
        </main>
        <footer>
            <div class="sociais">
                <ul>
                    <li><a href=""><img src="../../assets/img/instagram.png" alt="instagram" width="36px"></a></li>
                    <li><a href=""><img src="../../assets/img/facebook.png" alt="facebook" width="36px"></a></li>
                    <li><a href=""><img src="../../assets/img/twitter.png" alt="twitter" width="36px"></a></li>
                    <li><a href=""><img src="../../assets/img/youtube.png" alt="youtube" width="36px"></a></li>
                </ul>
            </div>
            <div class="direitos">
                <img src="../../assets/img/logo.png" alt="logo roda pe" width="100px">
                <p>&copy Copyright - 2023 - Todos os Direitos Reservados. Desenvolvido Por Samuel Silva</p>
            </div>
        </footer>
    </body>
</html>