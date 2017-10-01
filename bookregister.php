<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>本の登録ページ</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <h1>本を登録しましょう!</h1>
        </header>
        <section>
            <form method="post" action="insertBook.php">
                <fieldset>
                    <legend>本の情報</legend>
                    <label>書籍名：<input type="text" name="bookName"></label><br>
                    <label>URL：<input type="text" name="bookUrl"></label><br>
                    <label>コメント：<textArea name="bookComment" rows="4" cols="40"></textArea></label><br>
<!--                    本当はここでログイン機能があって、自動で入力されるといい-->
                    <label>社員番号：<input type="text" name="regUser"></label><br>
                    <input type="submit" value="送信">
                </fieldset>
            </form>
        </section>
    </div>
</body>

</html>
