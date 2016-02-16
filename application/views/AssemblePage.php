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
            
            <tr><td>Head<select class="buttonAssemble" >{selectHeads}</select></td></tr>
            <tr><td><br/><br/></td></tr>
            <tr><td>Body<select class="buttonAssemble" >{selectBody}</select></td></tr>
            <tr><td><br/><br/></td></tr>
            <tr><td>Legs<select class="buttonAssemble" >{selectLegs}</select></td></tr>
                        <tr><td><br/><br/></td></tr>
            <tr><td><input class="buttonAssemble" type="submit" name='btn_submit' value='Assemble'/></td></tr>            
            <tr><td><h5 id="previewH5"><br/>Preview</h5></td></tr>
            <tr><td><img src="/assets/images/11c-0.jpeg"</td></tr>
            <tr><td><img src="/assets/images/11c-1.jpeg"</td></tr>
            <tr><td><img src="/assets/images/11c-2.jpeg"</td></tr>
        </table>
    </div>
</div>
    

</body>
</html>