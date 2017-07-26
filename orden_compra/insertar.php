<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'dragonball2');
define('DBNAME', 'supsys');
$db = new mysqli(HOST, USER, PASS, DBNAME);

    $values = array();

    for($i=0 ;$i < count($_POST['member']); $i++)
    {
        $var = $_POST['member']['shortname'][$i];
        $var2 = $_POST['member']['fullname'][$i];
       
        if (empty($var) && empty($var2)) 
        {
         
        }
        else
        {
           $values[] = '("' . $_POST['member']['shortname'][$i] . '","' . $_POST['member']['fullname'][$i] . '")';  
        }
       
    }
    
    $sql = "INSERT INTO orden_compra (cantidad, prueba) VALUES " . implode(',', $values);

    $result = $db->query($sql);

    if($result) 

    {
        echo "Yep";
    }
    $db->close();
?>