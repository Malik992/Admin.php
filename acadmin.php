<?php
session_start();
if( $_SESSION['visiteur']='admin')
{
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil admin</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <h1>Bienvenue My Admin</h1> <br><br>
    <div id="div">

        <p> Login: Admin</p>
        <p>
            <a href="admin.php">Déconnection</a></p>

    </div>
    <a href="date.php">La date ;  </a>
    <a href="e1.php">Formulaire.</a>

</body>

</html>
<?php
}
else
{
    header('location:error.html');
}
?>