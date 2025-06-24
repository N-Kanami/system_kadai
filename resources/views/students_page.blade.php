<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>学生表示画面</title>
    </head>

    <body>
        <form action="{{route('students.details')}}" method="post">
            @csrf
             <h3>学生表示</h3>
             <p>学年：</p>
             <p>名前：</p>
             <button type="submit">詳細表示</button>
        </form>
        <br>
        <form>
            <h3>検索フォーム</h3>
            <p>学生名：<input type="text" name="students name"></P>
            <p>学年：<select name="grades">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select></p>
        </form>
        <br>
        <h3>戻るボタン</h3>
        <button type="button" onClick="location.href='{{route('users.menu')}}'">戻る</button>
    </body>

</html>
