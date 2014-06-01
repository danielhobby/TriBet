<?php

//Check if the inforamtion is correct..
function checkPass($row, $password)
{
    if ($row['password'] == sha1($password . $row['salt']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function checkUser($result, $username, $password)
{
    while($row = mysqli_fetch_array($result)) 
    {
        if ($row['username'] == $username)
        {
            $_SESSION['login-username'] = $username;
            $_SESSION['balance'] = $row['balance'];
            return checkPass($row, $password);
        }
    }
    
    return false;
}

$username = $_POST['inUsername'];
$password = $_POST['inPassword'];

session_start();

$con=mysqli_connect("localhost","root","","tribet");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "SELECT * FROM users");

if (checkUser($result, $username, $password))
{
    $_SESSION['login'] = "TRUE";
}

mysqli_close($con);


header("Location: ../index.php");