<?php
//0.GETでidを取得
$id=$_GET["id"];


//1.  DB接続
try {
  $pdo = new PDO('mysql:dbname=gs_db37;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //対象行のみ取得
  $row = $stmt->fetch(); //$row["name"]
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>登録情報を更新できます！</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <h1>登録情報を更新しましょう！</h1>
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
            <form method="post" action="insertBook.php">
                <fieldset>
                    <legend>本の情報</legend>
                    <label>書籍名：<input type="text" name="bookName" value="<?=$row["bookName"]?>"></label><br>
                    <label>URL：<input type="text" name="bookUrl" value="<?=$row["bookUrl"]?>"></label><br>
                    <label>コメント：<textArea name="bookComment" rows="4" cols="40"><?=$row["bookComment"]?></textArea></label><br>
<!--                    本当はここでログイン機能があって、自動で入力されるといい-->
                    <label>社員番号：<input type="text" name="regUser" value="<?=$row["regUser"]?>"></label><br>
                    <input type="submit" value="送信">
                </fieldset>
            </form>
        </section>
    </div>
</body>

</html>

