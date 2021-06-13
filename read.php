<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <title>管理画面</title>
</head>
<body>

<div>
    <h2><a href="./result/result.csv">csvダウンロード</a></h2>
</div>

<div>
    <h2><a href="./input.php" target="_blank">アンケートに戻る</a></h2>
</div> 

<?php

// ファイルを開く
$file = fopen("./result/result.csv","r");
//rは設定値(read onlyの意味)


//表示用HTML
//メモ：一括表形式で出力する際のXSS対策の書き方は？
echo "<table>
    <tr>
        <th>日付</th>
        <th>名前</th>
        <th>メール</th>
        <th>性別</th>
        <th>年齢</th>
    </tr>";
    // ファイル内容を1行ずつ読み込んで出力
    while($line= fgetcsv($file)){
        echo "<tr>";
        for ($i=0;$i<count($line);$i++){
            echo "<td>".$line[$i]."</td>";
        }
        echo "</tr>";
    }
echo "</table>";

// ファイルを閉じる
fclose($file)

?>
</body>
</html>