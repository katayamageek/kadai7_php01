<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,
    tr,
    td {
        border: solid 1px black;
    }
    </style>
</head>

<body>

    <?php

// ファイルを読み込む
//  　$dataの中にはdata.txtが入りますよ
$data = file_get_contents('data/data.txt');


// 読み込んだものをブラウザに表示する
// 　$dataを表示させちゃおう

echo nl2br ($data);

?>


    <table>
        <tr>
            <td></td>
        </tr>

    </table>


</body>

</html>