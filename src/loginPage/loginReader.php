<?php
namespace loginPage;
require_once "pdo.php";

class loginReader
{

function validateUsername(string $userName)
{
    $sql = "SELECT COUNT(*) FROM USERS WHERE USER_NAME = :uname";

    $sql->bindValue(":uname", $userName, PDO::PARAM_STR);
    
    try{
        $sql->execute();
    }catch(PDOException $e){
        throw new RuntimeException($e->getMessage());
    }

    return $sql->fetch(PDO::FETCH_COLUMN) > 0;
}

}

function validatePassword(string $userName, string $password)
{
    $sql = "SELECT COUNT(*) FROM USERS WHERE USER_NAME = :uname AND PASSWORD = :pword";

    $sql->bindValue(":uname", $userName, PDO::PARAM_STR);
    $sql->bindValue(":pword", $password, PDO::PARAM_STR);

    try{ 
        $sql->execute();
    }catch(PDOException $e){
        throw new RuntimeException($e->getMessage());
    }

    return $sql->fetch(PDO::FETCH_COLUMN) > 0;
}


?>
