<?php
try{
   $db=new PDO('mysql:host=localhost;dbname=dbkutuphane','root','root'); 
}catch(PDOException $ex){
    echo $ex->getMessage();
}


?>