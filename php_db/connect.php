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
            echo "データベースに接続しました！";
        } catch (PDOException $e) {
            echo '接続失敗: ' . $e->getMessage();
        }
         
         ?>
     </p>
 </body>
 
 </html>