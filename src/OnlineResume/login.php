<?php 

include_once "../onlinePortfolioReader.php";

$userLoginMessage = false;

$onlinePortfolioReader = new onlinePortfolioReader();

if(isset($_POST['uname']) && isset($_POST['pword'])){
    //validate username
    if(!$onlinePortfolioReader->validateUsername($_POST['uname']) || 
        !$onlinePortfolioReader->validatePassword($_POST['pword'])){
        $userLoginMessage = 'Username or password is incorrect.';
    }else{
        header('Location: homePage.php');    
    }
 
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Leigh's Online Resume</title>
    <!--link rel="stylesheet" href="main.css" type="text/css"> -->
</head>

<?php 
if(!$userLoginMessage){
    echo('<p style="color: red;">'.htmlentities($userLoginMessage)."</p>\n");
    
}
?>


<body>
    <form method="POST">
        <div class="container">
            <label for="uname">Username:</label>
            <input type="text" name="uname" id="username" placeholder="Enter Username" required>
<br>
            <label for="pword">Password:</label>
            <input type="password" name="pword" id="pword" placeholder="Enter Password" required>
            <br>
            <button type="submit">Submit</button>

        </div>
    </form>

</body>
</html>