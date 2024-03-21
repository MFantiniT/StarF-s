<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['foto'])) {
    $errors = [];
    $file_name = $_FILES['foto']['name'];
    $file_size = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $file_type = $_FILES['foto']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['foto']['name'])));

    $extensions = ["jpeg", "jpg", "png"];

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Extensão não permitida, por favor escolha um arquivo JPEG ou PNG.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'Tamanho do arquivo deve ser menor que 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "uploads/" . $file_name);
        // Redireciona para a carteirinha com os dados do formulário e o nome do arquivo da imagem
        $query = http_build_query([
            'nome' => $_POST['nome'],
            'cpf' => $_POST['cpf'],
            'dataInscricao' => $_POST['dataInscricao'],
            'nomeFanClube' => $_POST['nomeFanClube'],
            'foto' => 'uploads/' . $file_name
        ]);
        header('Location: carteirinha.php?' . $query);
    } else {
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
}
?>
