<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>学生登録画面</title>
    </head>

    <body>
        <form action="{{route('redirect_students.registration')}}" method="post">
            @csrf
            <h3>登録フォーム</h3>
            <p>名前：<input type="text" name="name"></p>
            <p>住所：<input type="text" name="address"></p>
            <p>顔写真：<input type='file' accept='image/*' name="img_pass"></p>
            <button type="submit">登録</button>
        </form>
        <br>
        <h3>戻るボタン</h3>
        <button type="button" onClick="location.href='{{route('users.menu')}}'">戻る</button>
    </body>

</html>
