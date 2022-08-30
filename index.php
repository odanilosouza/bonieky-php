<?php
session_start();
require('header.php');

if($_SESSION['Aviso']){
    echo $_SESSION['Aviso'];
    $_SESSION['Aviso'] = '';
}

?>

<a href="apagar.php">Apagar Cookie</a>

<form action="recebedor.php" method="post">

<label>
    Nome:
    <input type="text" name="nome" />
</label>
</br>
</br>

<label>
    Email:
    <input type="text" name="email" />
</label>
</br>
</br>
<label>

<label>

    Idade:
    <input type="password" name="idade" />
</label>
</br>
</br>

<input type="submit" value="Enviar"/>
</form>