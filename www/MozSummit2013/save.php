<?php
require_once('lib/FileLog.class.php');
$f = new FileLog('data/names.tsv', array('time', 'name', 'korean'));

if ($_POST['name']) {
	$f->save(array(time(), $_POST['name'], strlen($_POST['korean']) > 0 ? $_POST['korean'] : $_POST['mozilla']));
}

$d = $f->load();
$d = array_reverse($d);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta name="viewport" content="width=device-width" />
<meta charset="UTF-8">
<title>Let's type my name in Korean.</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>My Name to Korean</h1>
<p>Great! You entered: </p>

<ul>
<?php
echo('<li>Your Name: ' . $_POST['name'] . '</li>');
if (strlen($_POST['korean']) > 0) {
	echo('<li>Your Name in Korean: ' . $_POST['korean'] . '</li>');
} else {
	echo('<li>Mozilla in Korean: ' . $_POST['mozilla'] . '</li>');
}
?>
</ul>

<h2>Participants</h2>
<ul>
<?php
foreach ($d as $item) {
	echo('<li><strong>' . $item['name'] . '</strong>: ' . $item['korean'] . '</li>');
}
?>
</ul>

<p><a href="./">Go Back</a></p>
</body>
</html>
