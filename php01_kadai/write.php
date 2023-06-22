<?php

// // ファイルに書き込み
// // `postデータを受け取る
// $name = $POST['name'];
// $birthPlace = $POST['birthPlace'];
// // ここは楽にするために上記をくっつけるだけ(データを整形)
// $data = $name . $birthPlace;
// //データを保存する\
// // file_put_contentsは既に用意されている関数である
// // file appendは上書きではなく追記していくための指示
// file_put_contents('data/data.txt', $data, FILE_APPEND)

// ①inputからpostを受け取って変数$の中に入れる
// postされたうちの'[xxx]を指す'
$name = $_POST['name'];
$number = $_POST['number'];

// ②データを整形する
// "\n"をいれて、データテキストが改行されるようにする。brタグ的な！
$data = $name . '|' . $number . "\n";

// ③上記②のデータをtxtに保存しましょう
file_put_contents('data/data.txt', $data, FILE_APPEND)


//文字作成

?>

<html>


<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    <p><?php echo $data ?>を登録しました。</p>

    <ul>
        <li><a href="input.php">続けて登録する</a></li>
        <li><a href="read.php">登録一覧へ</a></li>
    </ul>
</body>

</html>