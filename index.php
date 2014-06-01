<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.



-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title></title>
        
        <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
        
        <script>
            $(document).ready(function()
            {
                $("#login-area").hide();
                
                
                $("#login").click(function()
                {
                    $("#login-area").show();
                    $("#login").hide();
                });
            });
        </script>
    </head>
    <body>
        <?php
            //unset($_SESSION);
            //session_unset();
        ?>

        <div id="div-container">
            <div id="top-container">
                <div id="logo-container" class="float-left">
                    <!-- Logo will be in this container. -->
                </div>

                <div id="winnings-container" class="float-left white-font-style" >
                    Winnings container
                </div>

                <div id="twofourhlottery-container" class="float-left white-font-style" >
                    24h Lottery
                </div>

                <div id="balance-container" class="float-left white-font-style" >
                    <?php include '_loginDisplay.php'; ?>
                </div>

                <div class="clear"></div>

            </div>
            <div id="mid-container">
                <div id="sidemenu" class="float-left">
                    <ul class="menu">
                        <li class="menu-item"><a href="#home">Home</a></li>
                        <li class="menu-item"><a href="raffle.php">Raffle</a></li>
                        <li class="menu-item"><a href="#contact">Contact</a></li>
                        <li class="menu-item"><a href="#about">About</a></li>
                    </ul>
                </div>

                <div id="main-container" class="float-left">
                    
                    <h2 class="white-font-style">Welcome to TriBet!</h2>
                    <p class="white-font-style">We are a new Eve Online Gambling Service. We hope you have a great time on our site.</p>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </body>
</html>
