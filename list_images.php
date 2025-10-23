<?php
    require 'db_config.php';

    $sql = "SELECT id, image_name, created_in FROM images";
    $result = $conn->query($sql);
?>

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
        <button class="right_button"><a href="main.php">Voltar</a></button>
    </header>

    <main>
        <h3>Lista de Imagens</h3>

        <div class="image_grid">
            <?php
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<div class='image_card'>
                                <img src='view_image.php?id={$row['id']}' alt='image_name'>
                                <div class='image_info'>
                                    <h4>{$row['image_name']}</h4>
                                    <p><strong>ID:</strong> {$row['id']}</p>
                                    <p><strong>Data de Upload:</strong> {$row['created_in']}</p>
                                </div>
                            </div>";
                    }
                }else{
                    echo "<p>Nenhuma imagem encontrada.</p>";
                }
            ?>
        </div>
    </main>

    <footer>
        &copy; 2025 Banco de Imagens. Todos os direitos reservados.
    </footer>
</body>
</html>