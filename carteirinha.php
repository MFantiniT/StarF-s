<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Carteirinha do Fã Clube</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background-color: #eee; }
        .card { 
            border: 1px solid #ddd; 
            margin-top: 50px; 
            padding: 20px; 
            width: 300px; 
            margin-left: auto; 
            margin-right: auto; 
            background-color: #f3f3f3; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
            position: relative; 
        }
        .card img { 
            width: 100px; height: 100px; 
            border-radius: 50%; 
            position: absolute; 
            top: 20px; 
            left: calc(50% - 50px); 
            border: 3px solid white; 
            object-fit: cover; 
        }
        .info { 
            margin-top: 130px; /* Ajuste para acomodar a imagem */
            margin-bottom: 10px; 
            line-height: 1.5; /* Espaçamento entre linhas */
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
        $foto = $_GET['foto'] ?? 'path_to_default_image.jpg'; // Imagem padrão caso não exista
        echo '<img id="memberPhoto" src="' . htmlspecialchars($foto) . '" alt="Foto do Membro">';
        ?>
        <div class="info">
            <strong>Nome:</strong> <span id="nome"><?php echo htmlspecialchars($_GET['nome'] ?? ''); ?></span><br>
            <strong>Data de Inscrição:</strong> <span id="dataInscricao">20/11/2023</span><br>
            <strong>Fã Clube:</strong> <span id="nomeFanClube"><?php echo htmlspecialchars($_GET['nomeFanClube'] ?? ''); ?></span>
        </div>
    </div>
</body>
</html>
