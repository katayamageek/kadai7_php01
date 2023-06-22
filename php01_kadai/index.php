<!-- phpファイルだがhtmlしか書いていない -->

<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
    <link rel="stylesheet" href="input.css">

</head>

<body>
<h3>音声広告の放送媒体となる商業施設を登録・選択する</h3>
    <div class="form">
        <form action="write.php" method="post">

            <div class="name">
                <lavel for="name">施設名:</lavel>
                <input type="text" name="name" class="inputname">
            </div>
            <div class="number">
                <lavel for="number">来客人数/日:</lavel>
                <input type="number" name="number" placeholder="半角数字" class="inputnumber">
            </div>
            <div>
                <input type="submit" value="送信" id="submit" class="submit">
            </div>
        </form>
    </div>
</body>

</html>