<?php

$content = shell_exec('curl http://newspaper.annahar.com/pdf | grep http://static.annahar.com/storage/pdfs');
$test = preg_match("#(http://.+\.pdf)#", $content, $result);

$page = $result[0];

// To relocate to site: 
// header("location: $page");

// To email
require('mailer.php');

mailPaper($page);

?>
