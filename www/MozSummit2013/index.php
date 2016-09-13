<?php
$vowel = array(
	/* 단모음 */
	'a' => 'ᅡ', 
	'eo' => 'ᅥ', 
	'o' => 'ᅩ', 
	'u' => 'ᅮ', 
	'eu' => 'ᅳ', 
	'i' => 'ᅵ', 
	'ae' => 'ᅢ', 
	'e' => 'ᅦ', 
	'oe' => 'ᅬ', 
	'wi' => 'ᅱ', 
	/* 이중모음 */
	'ya' => 'ㅑ', 
	'yeo' => 'ㅕ', 
	'yo' => 'ㅛ', 
	'yu' => 'ㅠ', 
	'yae' => 'ㅒ', 
	'ye' => 'ᅨ', 
	'wa' => 'ᅪ', 
	'wae' => 'ᅫ', 
	'wo' => 'ᅯ', 
	'we' => 'ᅰ', 
	'ui' => 'ᅴ', 
	/* 추가 */
	'y' => 'ㅣ', 
);
$consonant = array(
	/* 파열음 */
    'g' => 'ㄱ', 
    'k' => 'ㄱ', 
    'kk' => 'ㄲ', 
    'k' => 'ㅋ', 
    'd' => 'ㄷ', 
    't' => 'ㄷ', 
    'tt' => 'ㄸ', 
    't' => 'ㅌ', 
    'b' => 'ㅂ', 
    'pp' => 'ㅃ', 
    'p' => 'ㅍ', 
    /* 파찰음 */
    'j' => 'ㅈ', 
    'jj' => 'ㅉ', 
    'ch' => 'ㅊ', 
    /* 마찰음 */
    's' => 'ㅅ', 
    'ss' => 'ㅆ', 
    'h' => 'ㅎ', 
    /* 비음 */
    'n' => 'ㄴ', 
    'm' => 'ㅁ', 
    'ng' => 'ㅇ', 
    /* 유음 */
    'r' => 'ㄹ', 
    'l' => 'ㄹ', 
    /* 추가 */
    'f' => 'ㅍ', 
    'q' => 'ㅋ', 
    'x' => 'ㅋ', 
    'z' => 'ㅈ', 
);

require_once('lib/FileLog.class.php');
$f = new FileLog('data/names.tsv', array('time', 'name', 'korean'));

if ($_POST['name']) {
	$f->save(array(time(), $_POST['name'], strlen($_POST['korean']) > 0 ? $_POST['korean'] : $_POST['mozilla']));
	header('Location: ./');
	exit();
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
<p>Let's try to type my name in Korean with Firefox OS Korean keyboard.</p>

<h2>Conversion table</h2>
<h3>vowel</h3>
<ul class="table">
<?php
ksort($vowel);
foreach ($vowel as $key => $value) {
	echo('<li><strong>' . $key . '</strong>: ' . $value . '</li>');
}
?>
</ul>

<h3>consonant</h3>
<ul class="table">
<?php
ksort($consonant);
foreach ($consonant as $key => $value) {
	echo('<li><strong>' . $key . '</strong>: ' . $value . '</li>');
}
?>
</ul>

<h2>Exercise</h2>
<ol>
	<li>Korean is a phonogram. Convert pronunciation of your name.</li>
	<li>Place your family name at first.</li>
	<li>If your name is starting with vowel, add "ㅇ" at first. ex) Aky = <strong>ㅇ</strong>ㅏㅋㅣ</li>
</ol>
<p>Let's see some example.</p>
<p>Mozilla -&gt; ㅁ(m) + ㅗ(o) + ㅈ(z) + ㅣ(i) + ㄹ(l) + ㄹ(l) + ㅏ(a) -&gt; 모질라</p>
<form action="./" id="exercise">
	<p><label>Type ㅁ ㅗ ㅈ ㅣ ㄹ ㄹ ㅏ <input type="text" id="mozilla-in-korean"></label></p>
	<p><button>Err.. is it right?</button></p>
</form>
<p id="feedback"></p>

<h2>Let's do it.</h2>
<form action="./save.php" method="post">
	<p><label>Your Name <input type="text" name="name" value=""></label></p>
	<h3>Level 1</h3>
	<p><label>Type Mozilla in Korean <input type="text" name="mozilla" value=""></label></p>
	<p>or, </p>
	<h3>Level 2</h3>
	<p><label>Your Name in Korean <input type="text" name="korean" value=""></label></p>
	<input type="submit" value="Save">
</form>

<h2>Participants</h2>
<ul>
<?php
foreach ($d as $item) {
	echo('<li><strong>' . $item['name'] . '</strong>: ' . $item['korean'] . '</li>');
}
?>
</ul>

<script>
document.getElementById('exercise').addEventListener('submit', function (event) {
	var feedback = document.getElementById('feedback');
	if (document.getElementById('mozilla-in-korean').value == '모질라') {
		feedback.innerHTML = 'Yes! Great!';
		feedback.style.color = '#0c0';
	} else {
		feedback.innerHTML = 'Oops! You entered "' + document.getElementById('mozilla-in-korean').value + '".';
		feedback.style.color = '#c00';
	}

	event.preventDefault();
}, false);
</script>
</body>
</html>
