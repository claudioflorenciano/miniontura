<html>
    <head>
        <title>Miniontura</title>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <div id="divLogo"><img src="img/logo.png"></div>
        </header>
        <section>
            <div id="divTitulo"><img src="img/titulo.png"></div>
            <center>    
                <div id="produtos">
                    <div class="produto"><img src="img/minion1.png"></div>
                    <div class="produto"><img src="img/minion2.png"></div>
                    <div class="produto"><img src="img/minion3.png"></div>
                    <div class="produto"><img src="img/minion4.png"></div>
                    <div class="produto"><img src="img/minion5.png"></div>
                    <div class="produto"><img src="img/minion6.png"></div>
                    <div class="produto"><img src="img/minion7.png"></div>
                    <div class="produto"><img src="img/minion8.png"></div>
                </div>
                <div id="divTitulo2"><img src="img/titulo2.png"></div>
                <div id="formulario">
                    <form name="encomenda" id="encomenda" method="post" action="envia.php">
                        <label for="nome" class="input">Nome:</label>
                        <input type="text" name="nome" required placeholder="Seu Nome." title="Nome" class="placeholder">
                        <br>
                        <label for="email" class="input">E-Mail:</label>
                        <input type="text" name="email" required placeholder="E-Mail." title="E-Mail" class="placeholder">
                        <br>
                        <label for="descricao" class="input">Descrição:</label>
                        <input type="text" name="descricao" required placeholder="Deixe aqui sua encomenda, especificando modelos e quantidades de cada modelo." title="Descricao da Encomenda." id="placeholderDescricao">
                        <br>
                        <input id="enviar" type="submit" value="Encomendar" title="Enviar encomenda">
                    </form>
                </div>
            </center>
            
        </section>
        <footer>
            <p>&copy; Todos os direitos reservados. &reg; Desenvolvido por Claudio Luiz.</p>
        </footer>
    </body>      
</html>