<?php 

include "onlinePortfolioReader.php";

$userLoginMessage = false;

if(isset($_POST['uname']) && isset($_POST['pword'])){
    //validate username
    if(!validateUsername($_POST['uname']) || 
        !validatePassword($_POST['pword'])){
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
    <link rel="stylesheet" href="main.css" type="text/css">
</head>

<?php 
if(!$userLoginMessage){
    echo('<p style="color: red;">'.htmlentities($userLoginMessage)."</p>\n");
    
}
?>


<body>
    <script>
        document.body.className = 'fade';
    </script>

    <form method="POST">
        <div class="container">
            <input type="text" name="uname" id="username" placeholder="Enter Username" required>
<br>
            <input type="password" name="pword" id="pword" placeholder="Enter Password" required>
            <br>
            <button type="submit">Submit</button>

        </div>
    </form>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
      window.setTimeout(function() {
        document.body.className = '';
      }, 230);
    });
  </script>
</body>
</html> 