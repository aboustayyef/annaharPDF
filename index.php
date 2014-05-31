<?php


// Annahar's PDF No 300 was on April 4th 2014
$pdfFileNumber = 300 + getDaysSince('04-04-2014');
$found = 'no';

// keep going back in time until issue is found
for ($tries=0; $tries < 10 ; $tries++) { 
	$filename = 'http://static.annahar.com/storage/pdfs/2014/'.($pdfFileNumber-$tries).'_file1.pdf';
	$handle = @fopen($filename, 'r');
	if ($handle) {
		$found = 'yes';
		$annaharPdfFile = $filename;
		header("location: $annaharPdfFile");
		break;
	}
}
echo "sorry, couldn't find any pdf from the last 10 days";


function getDaysSince($date){
	$today = new dateTime("now");
	$wantedDate = new DateTime($date);
	$difference = $today->diff($wantedDate);
	return $difference->days;
}

?>