<?php
require_once('rfc6238.php');
$otpkey = $_POST['otpkey'];

if ($otpkey == TokenAuth6238::getTokenCode($secretkey,0))
{
        echo "<h1><b>Good_KEY</b></h1>";
}
else
{
    if(isset($_POST['otpkey']))
    ?>

            <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            O.T.P-KEY <input type="text" name="otpkey"></input><br/>
            <input type="submit" name="submit" value="Go"></input>
            </form>
			
			<a href="barscan.php">Don't have the key get the key</a>
    <?php
}
?>
