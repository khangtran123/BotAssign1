<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Assemble</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
</head>
<body>

<div id="container">
        <div id="title">
	<h1>Bot Assembly</h1>
        </div>
        <div>
                {playerCards}
        </div>
    <div id="assemblyRightContainer">
        <table>
            <tr><td><select class="buttonAssemble"><option value={pieces}>{piece}</option></select></td></tr>
            <tr><td>Torso<select class="buttonAssemble"><option>11a-1</option></select></td></tr>
            <tr><td>Legs<select class="buttonAssemble"><option>11a-2</option></select></td></tr>
            <tr><td><button type="button" class="buttonAssemble">ASSEMBLE</button></td></tr>
            <tr></tr>
            <br/>
            <tr><td><h5 id="previewH5">Preview</h5></td></tr>
        </table>
    </div>
</div>
    

</body>
</html>