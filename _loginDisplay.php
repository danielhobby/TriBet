<div id="login-area">
    <h4 style="padding:0; margin:0;">Login</h4>
    <form method="POST" action="./scripts/login.php">
        Username:<input name="inUsername" type="text"/><br>
        Password:<input name="inPassword" type="password" /><br>
        <input type="submit" name="inSubmit" value="Login">
    </form>
</div>
<div id="login-button">
    <?php 
    session_start();
    //session_unset();
    if (!isset($_SESSION['login']))
    {
        echo '<button id="login">Login</button>';
    }
    else 
    {
        if (isset($_SESSION['login-username']))
        {
            echo 'Hello, ' . $_SESSION['login-username'] . '<br />';
            echo 'Your balance is: ' . $_SESSION['balance'];
        }
        
    }
    
    ?>
</div>