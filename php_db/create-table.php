<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP+DB</title>
 </head>
 
 <body>
     <p>
         <?php
         $dsn = 'mysql:dbname=nwmyim9hmc2b2vcj;
                 host=q0h7yf5pynynaq54.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;
                 charset=utf8mb4';
         $user = 'sh0dbtig658bj2t5';
         $password = 'htoxakwoouep8bcm';
 
         try {
             $pdo = new PDO($dsn, $user, $password);
 
             // usersテーブルを作成するためのSQL文を変数$sqlに代入する
             $sql = 'CREATE TABLE IF NOT EXISTS users (
                 id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                 name VARCHAR(60) NOT NULL,
                 furigana VARCHAR(60) NOT NULL,
                 email VARCHAR(255) NOT NULL,                    
                 age INT(11),
                 address VARCHAR(255)                    
             )';
 
             // SQL文を実行する
             $pdo->query($sql);
         } catch (PDOException $e) {
             exit($e->getMessage());
         }
         ?>
     </p>
 </body>
 
 </html>