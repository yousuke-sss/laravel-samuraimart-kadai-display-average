<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP+DB</title>
 </head>
 
 <body>
     <p>
         <?php
         $dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
         $user = 'root';
         $password = '';
 
         try {
            $pdo = new PDO($dsn, $user, $password);
            echo "データベースに接続しました！";
        } catch (PDOException $e) {
            echo '接続失敗: ' . $e->getMessage();
        }
         
         ?>
     </p>
 </body>
 
 </html>