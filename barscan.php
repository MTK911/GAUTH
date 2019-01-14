<?php
require_once('rfc6238.php');
print sprintf('<img src="%s"/>',TokenAuth6238::getBarCodeUrl('','',$secretkey,'MTK_APP'));
?>
<br>
<a href="javascript:history.go(-1)";>GO_BACK</a>