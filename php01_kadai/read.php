<?php
$file = 'data/data.txt';

if (file_exists($file)) {
    $responses = file($file, FILE_IGNORE_NEW_LINES);
  
    // 表の開始を表示
    echo '<table border="1">';
    echo '<tr><th>施設名</th><th>来場者数</th><tr>';
  
    foreach ($responses as $response) {
        $fields = explode('|', $response);
        $name = $fields[0];
        $number = $fields[1];
        
        // データの表示
        echo '<tr>';
        echo '<td>' . $name . '</td>';
        echo '<td>' . $number . '</td>';
        echo '<td>' . '<input type="checkbox" class="numberCheckbox" value="' . $number . '" onchange="calculateSum()">' . '</td>';
echo '</tr>';
}
// 表の終了を表示
echo '</table>';
} else {
echo 'まだ登録されていません';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="result.css">
</head>

<body>
    合計リーチ数：
    <div id=sum></div>
    <script>
    function calculateSum() {
        var checkboxes = document.getElementsByClassName('numberCheckbox');
        var sum = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                sum += parseInt(checkboxes[i].value, 10);
            }
        }
        document.getElementById('sum').innerHTML = sum;
    }
    </script>
    <a href="index.php" class="back-button">戻る</a>
</body>

</html>