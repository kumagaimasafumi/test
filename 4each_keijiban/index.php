<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>4each_keijiban</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php 
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=contactform01;host=localhost;","root","mysql");
    
    $stmt = $pdo->query("select * from 4each_keijiban");
    
    ?>








    <img src="4eachblog_logo.jpg" class="logo">

    <header>

        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>




    <main>

        <div class="main-left">

            <h2>プログラミングに役立つ掲示板</h2>
            <br>


            <div class="leftleft">

                <h1>入力フォーム</h1>





                <form method="post" action="insert.php">

                    <div>

                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">

                    </div>

                    <br>



                    <div>

                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">

                    </div>
                    <br>




                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="60" rows="7" name="comments"></textarea>

                    </div>
                    <br>



                    <div>

                        <input type="submit" class="submit" value="送信する">

                    </div>

                </form>

            </div>

            <br>




            <?php
            
            while($row = $stmt->fetch()){
            
            echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
                
            echo "<div class='kiji2''>";
            echo $row['comments'];
            
            echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
            
            echo "</div>";
                
            echo "</div>";
                
            }
            
            
                
            ?>
            
            <br>

        </div>








        <div class="main-right">

            <h1>人気の記事</h1>

            <ul>
                <li>PHP おすすめ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>


            <h1>おすすめリンク</h1>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>

            <h1>カテゴリ</h1>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>

        </div>



    </main>

    <footer>
        copyright internous | 4each blog is the one which provides A to Z about programming.
    </footer>




</body>

</html>
