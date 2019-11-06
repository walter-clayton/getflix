<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $db = new PDO('mysql:host=localhost;dbname=getflix', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    if(isset($_GET['id'])) {
        $idlion = $_GET['id'];
    
    $demande = $db -> prepare('SELECT id , link_video FROM media2 WHERE id = ?');
    $demande-> execute(array( $idlion));
    while($ligne = $demande -> fetch()){
    echo $ligne['link_video'];

    }
    }
    
    ?>
</body>
</html>