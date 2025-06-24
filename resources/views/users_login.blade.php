<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>管理ユーザーログイン画面</title>
    </head>

    <body>
        <form action="{{route('users.menu')}}" method="post">
            @csrf
            <h3>ログインフォーム</h3>
            <p>メールアドレス：<input type="email" name="email"></p>
            <p>パスワード：<input type="password" name="password"></p>
            <button type="submit">ログイン</button>
        </form>
        <br>
        <h3>新規登録リンク</h3>
        <button type="button" onClick="location.href='{{route('users.new.registration')}}'">新規登録</button>
    </body>

</html>
