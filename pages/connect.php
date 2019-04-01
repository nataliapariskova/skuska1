<?php

$servername = "localhost";  //meno servera ku ktor�mu sa prip�jame- localhost je m�j PC
$username = "root";         // toto v�etko je zadan� v php my admin ---mysql---user (a tam m��em zmeni� heslo, u��vate�a, taktie� aj ka�d�mu m��em nie�o zmeni� napr len ��tanie, alebo prepis )
$password = "";             // heslo do datab�zy
$dbname = "auta";           // meno v datab�ze

//vlo�en� z php my admin, azure aby sme sa napojili na datab�zu v azure
foreach ($_SERVER as $key => $value) {                            //cyklus, ktor� pole "premenn� server" a ber jednu polo�ku za druhou, k��� a hodnotu 
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {             // ak nie�o v tej z�tvore je splnen� (nesplnen�)  -teraz to nie je splnen� ked�e !==0, t�m p�dom nie je to splnen�, tak mi vykon� tie 4 riadky $connectstr
        continue;
    }
    
    $servername = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);     
    $dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $username = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $password = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  //ak je tam nejak� chyba, vyp�e mi Connection failed...
}
//echo "Connected successfully<br>";

?>