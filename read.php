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

<header>
<h1>アンケート回答確認</h1>
</header>

<div class="main">
    <div>
        <h2><a href="./result/result.csv">csvダウンロードする</a></h2>
    </div>

    <div>
        <h2><a href="./input.php" target="_blank">アンケートを確認する</a></h2>
    </div> 

    </div>
        <h2>アンケート回答一覧</h2>
        <?php
        // ファイルを開く
        $file = fopen("./result/result.csv","r");
        //rは設定値(read onlyの意味)


        //表示用HTML
        echo "<table>
            <tr>
                <th>日付（GMT+2）</th>
                <th>名前</th>
                <th>メール</th>
                <th>性別</th>
                <th>年齢</th>
            </tr>";
            // ファイル内容を1行ずつ読み込んで出力
            // XSS対策：$lineでデータを取得しているので、それらをhtmlspeciaslcarsで囲えばOK
            while($line= fgetcsv($file)){
                echo "<tr>";
                for ($i=0;$i<count($line);$i++){
                    echo "<td>".htmlspecialchars($line[$i],ENT_QUOTES)."</td>";
                }
                echo "</tr>";
            }
        echo "</table>";

        // ファイルを閉じる
        fclose($file)
        ?>
    <div>
</div>
</body>
</html>