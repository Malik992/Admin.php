<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>

           
    <fieldset>
    <table>
    <legend><u>Beinvenue sur votre page</u></legend>
        
            <form action="" method="POST">
                <tr>
                    <td>Login:</td>
                    <td><input type="text" name="Log" placeholder="Entrer votre login"></td>
                </tr>
                <tr>
                    <td>Paseword:</td>
                    <td><input type="password" name="Pass" placeholder="Entrer votre mot de pass"></td>
                </tr>
                <tr>
    <td>Profil 
         </td>
    <td>
        <select name="choix" id="">
            <option value=""></option>
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
    </td>
    </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="connexion" name="connexion"></td>
                </tr>
                <tr>
                    <tr></tr>
                    <tr><a href="http://localhost/test/lod.php">S'inscrire</a></tr>
                </tr>

        </table>

    </fieldset>
    </body>
</html>
        <?php

extract($_POST);

if(isset($connexion)){
    $fp = fopen("test.txt", "r+");
    rewind($fp);
    $exist=false;

    while(($line=fgets($fp)) !==false)
    {

        $info=explode(";", $line);
        if($info[0]==$Log)
        {
        
            break;
        }
    }
    if($exist)
    {
    

            header('location:error.html');
    }
    else
    {
       
        if($choix=="admin")
        {
             $_SESSION['visiteur']='admin';
            header('location: acadmin.php'); 
        }
        
        
     elseif($choix="user")
        {    $_SESSION['visiteur']='user';
            header('location: acuser.html');
        }
    }

}
?>