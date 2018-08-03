<!DOCTYPE html>
<html lang="ja">
   <head>
   <meta charset="UTF-8">
   <title></title>
   <link rel="stylesheet" type="text/css" href="style.css">
   </head>
    
<body>
   
   
  
    <header>
        <img src="https://www.chatwork.com/gateway/download_file.php?bin=1&amp;file_id=236344739">
        
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eacについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>

    </header>
    
    <main>
        <div class="left">
            
        <h1 div class="a1">プログラミングに役立つ掲示板</h1>
       
       
        <form action="insert.php" method="POST">
        <p>入力フォーム</p>
            
        <label>ハンドルネーム</label>
        <br>
        <input type="text" name="handlename">
        <br>
        <label>タイトル</label>
        <br>
        <input type="text" name="title">
        <br>
        <label>コメント</label>
        <br>
        <textarea rows="5" cols="50" name="comments"></textarea>
        <br>
        <input type="submit" value="送信する">
        </form>    
      </div>
   
  
 
    <div class="side">
    <h3>人気の記事</h3>
       <ul>
        <li>PHPオススメ本</li>
        <li>PHP MyAdiminの使い方</li>
        <li>いま人気のエディタTop5</li>
        <li>HTMLの基礎</li>
       </ul>
    <h3>オススメリンク</h3>
       <ul>
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Bracketsのダウンロード</li>
       </ul>
    </div>
    
   
    <div class="contents2"> 
     <?php
    
	mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");
    $stmt = $pdo->query("select*from 4each_keijiban");
      
    
    while ($row = $stmt->fetch()){ 
		echo "<div class='kiji'>";
		echo "<h3>".$row['title']."</h3>";
		echo "<div class='contents'>";
		echo $row['comments'];
		echo "<div class='handlename'>posted by 通りすがり</div>";
		echo "</div>";
		echo "</div>";
	}
			
	?>
   
	</div>
   
   
   <div class='kiji'>
<h3>b</h3>
<div class='contents'>b<div class='handlename'>posted by 通りすがり</div></div>

   
    </main>
    
 
    <footer>
    <p>copyright internous | 4each brog is the which provides A to Z about programng.</p>
    </footer>
    
    
</body>

</html>