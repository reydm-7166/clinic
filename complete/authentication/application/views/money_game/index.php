<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bet</title>
    <style>
        body {
            padding: 2rem;
            box-sizing: border-box; 
            background-color: lightslategray;
        }
        form #reset{
            right: 1px;
            margin-right: 8rem;
            position: absolute;
            width: 10%;
            height: 4vh;
            background-color: gray;
            color: white;
            border: .5px solid #2d7ca1;
            cursor: pointer;
        }
        form div {
            margin: 10rem 15rem 5rem 4.5rem;
            text-align: center;
            box-sizing: border-box;
            padding: 1;
            width: 80%;
            height: 20vh;
            border: solid 1px black;
            border-radius: .5rem;
        }
        form p {
            font-size: 20px;
        }
        form input:not(#reset) {
            width: 30%;
            height: 4vh;
            background-color: #51acd6;
            color: white;
            border: .5px solid #2d7ca1;
            cursor: pointer;
        }
        main {
            display: flex;
            flex-direction: row;
        }
        footer {
            box-sizing: border-box;
            height: 40vh;
            width: 100%;
            border: solid 1px black;
        }
            .container_logs{
                padding: .2rem 1rem;
                
            }
                h1 {
                    text-align: left;
                }
                .logs {
                    height: 72.5%;
                    width: 100%;
                    margin-top: 1rem;
                    padding: 1rem 1rem;
                    box-sizing: border-box;
                    overflow-y: scroll;
                    border-top: solid 1px black;
                }
                .logs p {
                    font-size: 22px;
                    text-align: justify;
                    text-justify: inter-word;
                    margin: 1rem;
                    padding-bottom: .7rem;
                    border-bottom: solid 1px black;
                }
                #log {
                    margin-top: -20px;
                }
                #center {
                    text-align: center;
                    margin: auto;
                }

        
    </style>
</head>
<body>
    <header>
        <form action="/money/reset_process" method="post">
            <input type="hidden" name="reset_button" value="reset_button">
            <h1>Your money: <?= $this->session->userdata('money')?><h1>
            <input type="submit" id="reset" value="Reset Game">
            <p>Chances left: <?= $this->session->userdata('chance')?></p>
        </form>
    </header>

    <main>
        <form action="/money/bet" method="post">
            <div class="low_risk">
                <h2>Low Risk</h2>
                <input type="submit" name="bet_button">
                <p>By -25 up to 100</p>
                <input type="hidden" name="button" value="low_button">
            </div>
        </form>
        <form action="/money/bet" method="post">
            <div class="low_risk">
                <h2>moderate Risk</h2>
                <input type="submit" name="bet_button">
                <p>By -100 up to 1000</p>
                <input type="hidden" name="button" value="moderate_button">
            </div>
        </form>
        <form action="/money/bet" method="post">
            <div class="low_risk">
                <h2>high Risk</h2>
                <input type="submit" name="bet_button">
                <p>By -500 up to 2500</p>
                <input type="hidden" name="button" value="high_button">
            </div>
        </form>
        <form action="/money/bet" method="post">
            <div class="low_risk">
                <h2>severe Risk</h2>
                <input type="submit" name="bet_button">
                <p>By -3000 up to 5000</p>
                <input type="hidden" name="button" value="severe_button">
            </div>
        </form>
    </main>

    <footer>
        <div class="container_logs">
            <h1>Game Host:</h1>
        </div>
        <div class="logs">
            <p> Welcome to Money Button Game, risk taker! All you need to do is push buttons
            to try your luck. You have free 10 chances with initial money 500. Choose wisely and goodluck!</p><br>
            <?php if (isset($_SESSION['details'])){ 
                echo $_SESSION['details']; 
            }?>
        </div>
    </footer>
    
</body>
</html>