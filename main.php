<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Imagens</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
</head>
<body>
    
    <header>
        <img src="" alt="logo">
        <div class="header_text">
            Plataforma de Upload e Armazenamento de Imagens.
        </div>
    </header>

    <section>
        <h2>Bem-vindo ao Banco de Imagens.</h2>
        <p>Use o menu abaixo para navegar pelas funcionalidades disponíveis.</p>
        <hr>
    </section>

    <div class="form_grid">
        <div class="form_block">
            <h3>Envio de Imagens</h3>
            <p>Envie novas imagens para o banco de dados.</p>
            <button onclick="location.href='upload_image.php'">Upload de Imagem</button>
        </div>

        <div class="form_block">
            <h3>Consulta de Imagens</h3>
            <p>Veja todas as imagens armazenadas no banco de dados.</p>
            <button onclick="location.href='list_images.php'">Procurar Imagem</button>
        </div>
    </div>

    <footer>
        &copy; 2025 Banco de Imagens. Todos os direitos reservados.
    </footer>
</body>
</html>