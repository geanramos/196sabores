<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vídeo do YouTube</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .video-container {
            position: relative;
            width: 90%;
            max-width: 800px;
            height: 0;
            padding-bottom: 56.25%; /* Proporção 16:9 */
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="video-container">
        <?php
        // Verifica se o parâmetro 'v' está presente na URL
        if (isset($_GET['v'])) {
            // Obtém o valor do parâmetro 'v'
            $videoID = $_GET['v'];

            // Gera o código do iframe com o vídeo do YouTube
            $iframeCode = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' . $videoID . '" frameborder="0" allowfullscreen></iframe>';

            // Exibe o iframe com o vídeo do YouTube
            echo $iframeCode;
        } else {
            echo "<p>Parâmetro 'v' não encontrado na URL.</p>";
        }
        ?>
    </div>
</body>
</html>
