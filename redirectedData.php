<h1>
<?php

$redirect=$_REQUEST['text'];
echo html_entity_decode(ltrim(htmlspecialchars($redirect))) ;
$len=strlen($_REQUEST['text']);
//echo $redirect.'<br>';
if ($len!==3 && isset($_REQUEST['text'])) {
    echo 'hello';
}

?>
</h1>