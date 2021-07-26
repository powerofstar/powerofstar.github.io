<html>
    <head>
        <title>Enviar Video</title>
    </head>
        <body>
        <form action="uploader.php" method="post" enctype="multipart/form-data">
            <input type="file" name="Arquivo" id="Arquivo"><br>
            <input type="submit" value="Enviar">
            <input type="reset" value="Apagar">
        </form>
        <form action="uploaderl.php" method="post" enctype="multipart/form-data">
            <input type="text" name="Link" id="Link" required><br>
            <input type="text" name="Name" id="Name" required><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
