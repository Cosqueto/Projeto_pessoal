<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site em PHP</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <h1>Bem-vindo ao meu site</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="index.php?sobre">Sobre</a></li>
                <li><a href="index.php?contato">Contato</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        if (isset($_GET['sobre'])) {
            echo '<h2>Sobre Nós</h2>';
            echo '<p>Este é um site básico desenvolvido em PHP para mostrar como criar uma estrutura simples.</p>';
        } elseif (isset($_GET['contato'])) {
            echo '<h2>Contato</h2>';
            echo '<p>Entre em contato conosco enviando um e-mail para: contato@sitebasico.com</p>';
        } else {
            echo '<h2>Página Inicial</h2>';
            echo '<p> página inicial</p>';

        }
        ?>


 

    </main>

    <footer>
        <p>&copy; final ( Footer ).</p>
    </footer>
</body>
</html>
