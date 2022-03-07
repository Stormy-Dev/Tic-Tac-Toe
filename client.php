<!DOCTYPE html>
<html lang="en">
<?php session_start();
$user=$_SESSION['user'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>TicTacToe</title>
</head>

<body>
    <div class="topDiv">
        <!-- <div class="headerDiv"> -->
        <h1>Online Tic Tac Toe</h1>
        <!-- </div> -->

        <div style="display:flex;flex-direction: column;">
        <span><?= $user ?></span>
        <a href="login1.html">logout</a>
        </div>

        <div class="container" id="container">

            <div class="sidebar" id="sidebar">
                <div class="flex-col1">
                    <!-- user details goes here -->
                </div>
                <div class="flex-col2">
                   <!-- <button class="connectBtn" id="connectBtn">Connect</button>-->
                    <button class="newGame" id="newGame">New Game</button>
                    <label for="joinGame" class="joinLabel">Players</label>
                    <ul class="currGames" id="currGames">
                        <li>No games </li>
                    </ul>
                    <button type="submit">Join</button>

                </div>

            </div>
            <div class="mainbar" id="mainbar">
                <div class="gameStatus" id="gameStatus"></div>
                <div class="board" id="board">
                    <div class="cell" id="cell"></div>
                    <div class="cell" id="cell"></div>
                    <div class="cell" id="cell"></div>
                    <div class="cell" id="cell"></div>
                    <div class="cell" id="cell"></div>
                    <div class="cell" id="cell"></div>
                    <div class="cell" id="cell"></div>
                    <div class="cell" id="cell"></div>
                    <div class="cell" id="cell"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="clientScript.js" defer></script>
</body>

</html>