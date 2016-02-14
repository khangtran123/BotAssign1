<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../assets/css/style.css"/>
        <title>Home</title>
        <link rel="stylesheet" href="../assets/css/style.css"/>
        <title>Home Page</title>
    </head>
    <body>
        <div id="container">
            <div id="gameStatus">
                <h2 class = "text">Game Status</h2>
                <p id="statusContent">
					<table id="gameStats"><tr>{gameStatus}</tr></table>
                </p>
            </div>
             <!-- Right bar (Players Info) !-->
             <!-- Equity means how many pieces you have 1 piece = 1 equity!
                   Example: Khang has 4 peieces so his equity is 4
                   What you do is do a count by Piece and group by Player in collections table-->
             <!-- SQL Command to get equity: SELECT Player, count(Piece) FROM `collections` GROUP BY Player -->
             <!-- SQL Command to get peanuts from each player: SELECT * FROM players-->
             <div id="right_container">
                 <h2 class = "text">Player Info</h2>
                 {playerInfo}
             </div>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
