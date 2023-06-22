<?php

// ファイルを読み込む
//  　$dataの中にはdata.txtが入りますよ
$dataview_name = file_get_contents('data/data_name.txt');
$dataview_number = file_get_contents('data/data_number.txt');


// 読み込んだものをブラウザに表示する
// 　$dataを表示させちゃおう

// echo nl2br ($dataview_name);
// echo nl2br ( $dataview_number);
?>

<html>

<head>
    <style>
    table,
    td,
    th {
        border: solid 1px black;
    }
    </style>
</head>

<body>

    <table id="table">
        <tr>
            <th>施設名@data_name.txt</th>
            <th>来場人数@data_number.txt</th>
        </tr>
        <tr>
            <td><?php 
            echo nl2br ($dataview_name)
            ?></td>
            <td id="tdNumber"><?php 
            echo nl2br ( $dataview_number)
            ?></td>
        </tr>
    </table>





    <!-- jQueryは上 -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- script src=""でjsを紐づける
    <script src="js/test.js"></script> -->
</body>

</html>