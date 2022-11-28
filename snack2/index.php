<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if(empty($_GET)){
    echo 'Inserisci i dati!';
} elseif(str_contains($mail, '@') && str_contains($mail, '.') && strlen($name) > 3 && is_numeric($age)) {
    echo 'Accesso Riuscito';
} else{
    echo 'Accesso negato';
}

/*
elseif(strlen($name) < 3 ){
        echo 'accesso negato';
} 
*/

/*
elseif(str_contains($mail, '.', '@')) {
}
*/

/*
## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <title>Document</title>
</head>

<body>
    <form class="p-5" action="index.php" method="get">
        <div>
            <label for="name">Name</label>
            <input name="name" id="name" type="text">
        </div>
        <div>
            <label for="mail">mail</label>
            <input name="mail" id="mail" type="text">
        </div>
        <div>
            <label for="age">age</label>
            <input name="age" id="age" type="number">
        </div>
        <div class="mt-5">
            <button class="btn btn-primary" type="submit">submit</button>
            <button class="btn btn-danger" type="reset">reset</button>
        </div>
    </form>

</body>

</html>