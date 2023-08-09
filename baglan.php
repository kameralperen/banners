
<?php
try{
    $db     =   new PDO("mysql:host=localhost;dbname=uskumru;charset=UTF8;", "root", "");
}catch(PDOException $hata){
    echo "HATA! " . $hata->getMessage();
    die();
}
?>