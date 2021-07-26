<html>
    <head>
        <title>Enviar video</title>
    </head>
    <body>
        <?php
        $nome_temporario=$_FILES["Arquivo"]["tmp_name"];
        $nome_real=$_FILES["Arquivo"]["name"];

        copy($nome_temporario,"watch/uploads/$nome_real");
        ?>
    </body>
</html>