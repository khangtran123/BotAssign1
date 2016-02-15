<div id="container">
    <div id="dropdown">
        <h2 class="text">Players</h2>
        <!--{Player_Dropdown}-->
        Select a player to view
	<select onchange="window.location.href = this.value">
		{Player_dropdown}
	</select>     
    </div>
    
    <div id="player_activies">
        <h2 class="text">Recent Activities:</h2>
        {Player_transactions}
    </div>

     <div id="player_holdings">
         <h2 class="text">Current Holdings:</h2>
         {Player_collections}
     </div>

</div>
