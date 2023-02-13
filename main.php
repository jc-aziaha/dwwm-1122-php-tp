<?php
    var_dump($_SESSION);
    // var_dump($_POST);
    // var_dump($_FILES);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Les fichiers</h1>

        <form method="POST" enctype="multipart/form-data">
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    </body>
</html>