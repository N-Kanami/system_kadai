<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>メニュー画面</title>
    </head>

    <body>
        <h3>学年更新ボタン</h3>
        <button type="button">学年更新</button>
        <h3>学生登録ボタン</h3>
        <button type="button" onClick="location.href='{{route('students.registration')}}'">学生登録</button>
        <h3>学生表示ボタン</h3>
        <button type="button" onClick="location.href='{{route('students.page')}}'">学生表示</button>

</body>
</html>
