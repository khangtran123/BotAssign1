<table id='banner'>
    <tr>
        <td id="bannerLogo" width="20%">
            <img id="bannerLogoImage" src = "../../assets/images/r2d2.jpg" alt = "Banner Image"/>
        </td>
        <td id='headerinfo' colspan="2" width="50%">
            <h2 id="siteTitle">Bot Collector Game</h2>
        </td>
        <td>
            {welcomeMsg}
            <form name='loginForm' id='loginForm' method='POST'>
                <br/>
                <label for='username' style='display:{loginForm}'>Username: </label>    
                <input type='text' name='username' id='username' size='15' style='display:{loginForm}'>
                <input type='hidden' name='do' value='{loginDo}'>
                <input type='submit' class='buttonLogin' value='{login}'>
            </form>
            Secret Token: {token} ...shhhhh!
        </td>
    </tr>
</table>
