<div id="container">
    <div id="dropdown">
        <h2 class="text">Player: {username}</h2>
        <!--{Player_Dropdown}-->
        Select a player to view
	<select onchange="window.location.href = this.value">
            <option>Player Name</option>
            {Player_dropdown}
	</select>     
    </div>
    
    <div id="player_activies">
        <h2 class="text">Recent Activities:</h2>
        {transactions}
    </div>

     <div id="player_holdings">
        <h2 class="text">Current Holdings:</h2>
        <table>
            <tr>
                <th></th>
                <th>Series 11</th>
                <th>Series 13</th>
                <th>Series 26</th>
            </tr>
            <tr>
                <th>Head</th>
            </tr>
            <tr>
                <th>Body</th>
            </tr>
            <tr>
                <th>Leg</th>
            </tr>
        </table>
        {collections}
     </div>

</div>
