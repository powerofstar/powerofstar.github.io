<html>
    <head>
        <title>Enviar video</title>
    </head>
    <body>
        <?php
        if(isset($_POST['Name']) && !empty($_POST['Name']) && isset($_POST['Link']) && !empty($_POST['Link'])){
            $name = htmlspecialchars($_POST['Name']);
            $content = strval(htmlspecialchars(substr($_POST['Link'], 21, strlen($_POST['Link']))));
            $folder = $name;

            if( is_dir($folder) === false )
            {
                mkdir($folder);
            }

            rename($folder, "watch/linkup/$folder");

            $fileLocation = getenv("watch/linkup/$content") . "$content.txt";
            $file = fopen($fileLocation,"w");

            fwrite($file,"");
            fclose($file);
            rename("$content.txt", "watch/linkup/$name");
        }
        ?>
    </body>
</html>