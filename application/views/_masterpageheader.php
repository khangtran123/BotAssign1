<table id='banner'>
	<tr>
		<td id="bannerLogo" width="20%">
			<img id="bannerLogoImage" src = "../assets/images/r2d2.jpg" alt = "Banner Image"/></a>
		</td>
                <td id='headerinfo' colspan="2" width="50%">
			<h2 id="siteTitle">Bot Collector Game</h2>
		</td>
		<td width="30%">
                    <p>{welcome_msg}</p>
                    <form name='loginForm' id='loginForm' method='POST'>
                            <br/>
                            <label for='username' style='display:{loginform}'>Username: </label>    
                            <input type='text' name='username' id='username' size='15' style='display:{loginform}'>
                            <input type='hidden' name='do' value='{loginDo}'>
                            <input type='submit' value='{login}'>
                    </form>
		</td>
	</tr>
</table>
