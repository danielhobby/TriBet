<div id="login-area">
    <h4 style="padding:0; margin:0;">Login</h4>
    <form method="POST" action="./scripts/login.php">
        Username:<input name="inUsername" type="text"/><br>
        Password:<input name="inPassword" type="password" /><br>
        <input type="submit" name="inSubmit" value="Login"><button id="cancel">Cancel</button>
    </form>
</div>
<div id="login-button">
    <?php 
    session_start();
    //session_unset();
    if (!isset($_SESSION['login']))
    {
        echo '<button id="login">Login</button><button id="register">Register</button><br />'
        . '<div id="login-text">Login to see your balance and other useful info. Or register to take part!</div>';
    }
    else 
    {
        if (isset($_SESSION['login-username']))
        {
            echo 'Hello, ' . $_SESSION['login-username'] . '<br />';
            echo 'Your balance is: <br />' . $_SESSION['balance'] . " isk";
        }
    }
    ?>
</div>