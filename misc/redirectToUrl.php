<?php
// we redirect to the website instead of linking directly because we don't want
// to expose the referer on the piwik demo
$url = htmlentities($_GET['url']);
?>
<html><head>
<meta http-equiv="refresh" content="0;url=<?php echo $url; ?>"/>
</head></html>
