<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="title">
    <h1>Bot Assembly</h1>
</div>
<div>
    {playerCards}
</div>
<div id="assemblyRightContainer">

    <table>
        <form action="#" method="post">
            <tr><td>Head<select class="buttonAssemble" name="head" >{selectHeads}</select></td></tr>
            <tr><td><br/><br/></td></tr>
            <tr><td>Body<select class="buttonAssemble" name="body">{selectBody}</select></td></tr>
            <tr><td><br/><br/></td></tr>
            <tr><td>Legs<select class="buttonAssemble" name="leg">{selectLegs}</select></td></tr>
            <tr><td><br/><br/></td></tr>
            <tr><td><input class="buttonAssemble" type="submit" name='submit' value='Assemble'/></td></tr>
            <form>
            <tr><td><h5 id="previewH5"><br/>Preview</h5></td></tr>
                            <?php 
                            if (isset($_POST['submit'])) {
                                $head = $_POST['head'];
                                $body = $_POST['body'];
                                $leg = $_POST['leg'];
                                
                                echo "<tr><td><img src='../../assets/images/" . $_POST['head'] .".jpeg'/></tr></td>";
                                echo "<tr><td><img src='../../assets/images/" . $_POST['body'] .".jpeg'/></tr></td>";
                                echo "<tr><td><img src='../../assets/images/" . $_POST['leg'] .".jpeg'/></tr></td>";
                            }
                            ?>
     </table>
</div>
