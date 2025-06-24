<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>学生詳細表示画面</title>
    </head>

    <body>
        <h3>学生表示</h3>

        <p>学年：</p>
        <p>名前：</p>
        <p>住所：</p>
        <p>顔写真：</p>
        <p>コメント：</p>
        <button type="button" onClick="location.href='{{route('students.edit')}}'">学生編集</button>

        <h3>成績表示</h3>
        <p>学年時：</p>
        <p>学期：</p>
        <p>国語：</p>
        <p>数学：</p>
        <p>理科：</p>
        <p>社会：</p>
        <p>音楽：</p>
        <p>家庭科：</p>
        <p>英語：</p>
        <p>美術：</p>
        <p>保健体育：</p>
        <button type="button" onClick="location.href='{{route('grades.edit')}}'">成績編集</button>

        <h3>成績登録ボタン</h3>
        <button type="button" onClick="location.href='{{route('add.grades')}}'">成績登録</button>

        <h3>戻るボタン</h3>
        <button type="button" onClick="location.href='{{route('students.page')}}'">戻る</button>
    </body>

</html>
