<?php
//POSTされてきたデータを取得する
$user_name = $_POST['user_name'];
$hobby = $_POST['hobby'];
var_dump($user_name);
var_dump($hobby);
?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>受信ページ</h1>
<p>あなたの名前は　さんです</p>
<p>趣味は　です。</p>
<p>こちらの情報でよろしいですか？</p>
<form action="submit" value="登録">
</form>
</body>
</html>
