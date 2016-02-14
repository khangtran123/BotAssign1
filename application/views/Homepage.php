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
                    The Evaluation Glossary App was developed by Kylie Hutchinson of Community Solutions Planning & Evaluation.  
                    It combines over 600 terms related to evaluation, program planning, and research derived from various sources.  All terms 
                    are used with the permission of the publishers.  Special thanks to Chris Lovato, Jessica Dunkley, Khang Tran, Michael Chung, 
                    Mark Batin, and Anderson Phan for their support.
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
                 
                 <table class="firstColumn">
                     <tr>
                         <td colspan="2">
                             <p class="playerName">
                                 {playerInfo}
                                    {Player}
                                 {/playerInfo}
                             </p>
                         </td>
                     </tr>
                     <tr>
                         <td>
                            <p>Cash: </p>
                         </td>
                         <td>
                             <p>
                                {playerInfo}
                                   {Peanuts}
                                {/playerInfo} Peanuts
                             </p>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <p>Equity:</p>
                         </td>
                         <td>
                             <p>
                                {playerInfo}
                                   {Total_Pieces}
                                {/playerInfo} Cards
                             </p>
                         </td>
                     </tr>
                 </table>
                 <table class="secondColumn">
                     <tr>
                         <td colspan="2">
                             <p class="playerName">Donald</p>
                         </td>
                     </tr>
                     <tr>
                         <td>
                            <p>Peanuts: </p>
                         </td>
                         <td>
                             <p>10 Peanuts</p>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <p>Equity: </p>
                         </td>
                         <td>
                             <p>5 Peanuts</p>
                         </td>
                     </tr>
                 </table>
                 <br />
                  <table class="firstColumn">
                     <tr>
                         <td colspan="2">
                             <p class="playerName">Mickey</p>
                         </td>
                     </tr>
                     <tr>
                         <td>
                            <p>Peanuts: </p>
                         </td>
                         <td>
                             <p>10 Peanuts</p>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <p>Equity: </p>
                         </td>
                         <td>
                             <p>5 Peanuts</p>
                         </td>
                     </tr>
                 </table>
                 <table class="secondColumn">
                     <tr>
                         <td colspan="2">
                             <p class="playerName">Donald</p>
                         </td>
                     </tr>
                     <tr>
                         <td>
                            <p>Peanuts: </p>
                         </td>
                         <td>
                             <p>10 Peanuts</p>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <p>Equity: </p>
                         </td>
                         <td>
                             <p>5 Peanuts</p>
                         </td>
                     </tr>
                 </table>
             </div>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
