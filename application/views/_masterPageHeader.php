<table id='banner'>
    <tr>
        <td id="bannerLogo" class="headerTable">
            <img id="bannerLogoImage" src = "../../assets/images/r2d2.jpg" alt = "Banner Image"/>
        </td>
        <td id='headerinfo'>
            <h2 id="siteTitle">Bot Collector Game</h2>
        </td>
        <td class="headerTable" >
            {welcomeMsg}
            <form name='loginForm' id='loginForm' method='POST'>
                <br/>
                <label for='username' style='display:{loginForm}'>Username: </label>    
                <input type='text' name='username' id='username' size='15' style='display:{loginForm}'>
                <input type='hidden' name='do' value='{loginDo}'>
                <input type='submit' value='{login}'>
            </form>
            Secret Token: {token} ...shhhhh!

        </td>
        <td class="headerTable">
            <div id="gameState">
                <p>{gameState}</p>
                <p>Round: {gameNumber}</p>
            </div>
        </td>
    </tr>
</table>