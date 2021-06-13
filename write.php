<?php

//文字列作成(日付)
$date = date('Y/m/d H:i:s');
//入力データの取得
$name = $_POST["name"];
$mail = $_POST["email"];
$gender = $_POST["gender"];
$age = $_POST["age"];

//XSS対策
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

//入力データと他のデータの結合
$data = $date;
$data .= ',';
$data .= $name;
$data .= ',';
$data .= $mail;
$data .= ',';
$data .= $gender;
$data .= ',';
$data .= $age;

//txt fileをデータに保存
$file = fopen("result/result.csv","a"); //対象ファイルを開く
fwrite($file, $data."\n"); //fileに書き込む（ファイル名、値（\で改行））
fclose($file);

?>


<html>
<head>
    <meta charset="utf-8">
    <title>Thank you</title>
    <link rel="stylesheet" href="./css/thanks.css">
</head>
<body>

<h1>Thank you for answering this form</h1>
<h2>あなたのご回答</h2>
<table>
    <tr>
        <th>入力日</th>
        <th>お名前</th>
        <th>メールアドレス</th>
        <th>性別</th>
        <th>年齢</th>
    </tr>
    <tr>
        <td><?=h($date);?></td>
        <td><?=h($name);?></td>
        <td><?=h($mail);?></td>
        <td><?=h($gender);?></td>
        <td><?=h($age);?></td>
    </tr>
</table>

<h2><a href="input.php">サイトに戻る</a></h2>

</body>
</html>