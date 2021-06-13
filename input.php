<html>
<head>
	<meta charset="utf-8">
	<title>サンプルフォーム</title>
	<link rel="stylesheet" href="./css/input.css">
</head>

<body>
<!--課題はPostとWriteにデータを渡し、可視化する-->
	<h1>アンケートにご回答をお願いいたします！</h1>
	<form action="write.php" method="post">
		<ul>
		<li>お名前:<br> <input type="text" name="name"></li>
		<li>メールアドレス:<br> <input type="text" name="email"></li>
		<li>性別:<br><select name="gender" id=""></li>
					<option value="mens">Mens</option>
					<option value="wemens">Wemens</option>
					<option value="other">Other</option>
				</select>
		<li>年齢:<br>	<select name="age" id=""></li>
					<option value="20_29">20~29</option>
					<option value="30_39">30~39</option>
					<option value="40_49">40~49</option>
					<option value="50_59">50~59</option>
					<option value="60over">60~</option>
				</select>
		</ul>
		<input id="sbmt" type="submit" value="送信">
	</form>

</body>
</html>