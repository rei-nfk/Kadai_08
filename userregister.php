<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録ページ</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <h1>ユーザーを登録しましょう!</h1>
        </header>
        <nav>
            <ul>
                <li><a href="selectBook.php">登録書籍一覧</a></li>
                <li><a href="bookregister.php">書籍登録</a></li>
                <li><a href="selectUser.php">登録ユーザー一覧</a></li>
                <li><a href="userregister.php">ユーザー登録</a></li>
            </ul>
        </nav>
        <section>
            <form method="post" action="insertUser.php">
                <fieldset>
                    <legend>ユーザーの情報</legend>
                    <label>氏名：<input type="text" name="userName"></label><br>
                    <label>ID：<input type="text" name="lid"></label><br>
                    <label>PW：<input type="text" name="lpw"></label><br>
                    <label>
                        権限：<input type="radio" name="kanri_flg" value="0" checked="checked">一般ユーザー
                        <input type="radio" name="kanri_flg" value="1">特権管理者
                    </label><br>
                    <input type="submit" value="送信">
                </fieldset>
            </form>
        </section>
    </div>
</body>

</html>
