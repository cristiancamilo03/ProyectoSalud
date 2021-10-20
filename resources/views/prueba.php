<?php
if(isset($_FILES['imagen'])){
    move_uploaded_file($_FILES['imagen']['tpm_name'], 'img/' . uniqid() . '.png');
    $subir = true;
}
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
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="imagen" required />
            <input type="submit" >
        </form>
    </div>
</body>
</html>