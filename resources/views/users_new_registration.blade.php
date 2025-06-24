<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>管理ユーザー新規登録画面</title>
    </head>

    <body>
        <form action="{{route('redirect_users.login')}}" method="post">
            @csrf
            <h3>ユーザー登録フォーム</h3>
            <p>ユーザー名：<input type="text" name="user_name" ></P>
            <p>メールアドレス：<input type="email" name="email"></p>
            <p>パスワード：<input type="password" name="password"></p>
            <p>パスワード(確認用)：<input type="password" name="password_confirmation"></p>
            <button type="submit">登録</button>
        </form>
        <br>
        <h3>戻るボタン</h3>
        <button type="button" onClick="location.href='{{route('login')}}'">戻る</button>
</body>
</html>
