<?php

header('Content type: text/html; charset=UTF-8');

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>File Uploder</title>
    </head>

    <body>

    <h1>File Uploder</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <label for="file">
                <input type="file" name="file" />
            </label>
        </fieldset><br/>
        <button type="submit" name="send">Wyślij</button>
    </form>

    </body>
</html>

<?php

function prepareFilename($filename){
    $result = mb_strtolower($filename,'UTF-8');
    $result = str_replace(array('ą','ę','ć'),array('a','e','c'),$result);
    $result = str_replace(' ','_',$result)
}