<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>学生編集画面</title>
    </head>

    <body>
        <form action="{{route('redirect_students.edit')}}" method="post">
            @csrf
            <h3>編集フォーム</h3>
            <p>学年id：</p>
            <p>学年：<select name="grade">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select></p>
            <p>名前：<input type="text" name="name"></p>
            <p>住所：<input type="text" name="address"></p>
            <p>顔写真：<input type='file' accept='image/*' /></p>
            <p>コメント：<textarea></textarea></p>
            <button type="submit">編集</button>
        </form>
        <br>
        <h3>戻るボタン</h3>
        <button type="button" onClick="location.href='{{route('students.details')}}'">戻る</button>
    </body>

</html>
