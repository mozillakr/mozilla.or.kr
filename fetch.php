<?php
if ($_SERVER['HTTP_HOST'] != 'localhost:8000') {
	exit();
}

// fetch
if ($_GET['action'] == 'fetch') {
	$url = urldecode($_GET['url']);
	unlink('output/' . urlencode($url));
	unlink('output/' . urlencode(str_replace('http://www.mozilla.org/en-US/', 'http://www.mozilla.or.kr/ko/', $url)));
	unlink('output/remote/' . urlencode($url));

	file_get_contents(str_replace('http://www.mozilla.org/en-US/', 'http://localhost:8000/ko/', $url));

	header('Location: fetch.php');
	exit();
} else  if ($_GET['action'] == 'flush') {
	$files = glob('output/remote/*');
	foreach($files as $file){
		if(is_file($file))
			unlink($file);
	}

	header('Location: fetch.php');
	exit();
}

$file_list = scandir('output/');

$result = array();
foreach ($file_list as $item) {
	$url = urldecode($item);
	if (substr($url, 0, strlen('http://www.mozilla.org/')) == 'http://www.mozilla.org/') {
		$remote_file_name = 'output/remote/' . urlencode($url);
		if (file_exists($remote_file_name)) {
			$remote_html = file_get_contents($remote_file_name);
		} else {
		$remote_html = file_get_contents($url);
			fwrite(fopen($remote_file_name, 'w'), $remote_html);
		}

		$diff = shell_exec('diff output/' . $item . ' ' . $remote_file_name);
		$diff = htmlspecialchars($diff);
		$diff = nl2br($diff);

		array_push($result, array(
			'url' => $url, 
			'diff' => $diff
		));
	}
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>Fetch remote server</title>
<style>
body {
	line-height: 1.5;
}
a:link {
	color: #000;
}
a:hover {
	color: #000;
}
a:active {
	color: #000;
}
a:visited {
	color: #000;
}
h1 {
	font-size: 2em;
	text-align: center;
}
h2 {
	font-size: 1.2em;
	color: #770;
	border-top: 2px solid #990;
	padding-top: 0.5em;
}
.diff {
	font-family: monospace;
	font-size: 0.8em;
	line-height: 1;
	border: 1px solid #eee;
	background-color: #f9f9f9;
	padding: 0.5em;
	max-height: 50em;
	overflow: auto;
}
.button {
	border: 1px solid #ddd;
	background: #eee;
	padding: 0.3em 1em 0.1em;
	border-radius: 0.3em;
	text-decoration: none;
	color: #000;
	font-size: 0.8em;
}
.button:hover, 
.button:focus {
	background: #ddd;
}
.button:active {
	background: #ccc;
	border-style: inset;
}
</style>
</head>
<body>
<h1><a href="http://www.mozilla.or.kr/">mozilla.or.kr</a> dashboard</h1>
<h2>All files</h2>
<p class="action"><a href="?action=flush" class="button">Refresh all caches</a></p>
<?php
foreach ($result as $item) {
	echo('<h2>' . $item['url'] . '</h2>');
	echo('<p class="action"><a href="?action=fetch&amp;url=' . urlencode($item['url']) . '" class="button">Fetch remote and re-generate cache</a></p>');
	if (strlen($item['diff'] > 0)) {
		echo('<div class="diff">' . $item['diff'] . '</div>');
	} else {
		echo('<p>Clean!</p>');
	}
}
?>
</body>
</html>
