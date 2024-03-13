<?php
session_start();
if(isset($_GET["odjava"])){
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}
if(!isset($_SESSION["ime"])){
    header("Location: index.php");
    exit();
}
if($_SESSION["status"]!="Administrator"){
    header("Location: post.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/admin.js"></script>
</head>
<body>
    <div class="container">
        <div class="alert alert-info">
            <div id="idKorisnika" style="display:none"><?php echo $_SESSION["id"] ?></div>
            <div><?php echo "Korisnik: ".$_SESSION["ime"]." ".$_SESSION["prezime"]." (".$_SESSION["status"].")";?></div>
            <div><a href="post.php">All Posts</a> | <a href="post.php?odjava=true">LogOut</a><?php if($_SESSION["status"]=="Administrator") echo ' | <a href="admin.php">Administracija</a>' ?></div>
        </div>
        <div class="alert alert-success">
            <input id="inputDatum" type="date"><button id="btnPrikazi" class="btn btn-primary mx-2">Prikaži</button>
        </div>
        <div id="divLogovi" class="mt-4">

        </div>
    </div>

</body>
</html>