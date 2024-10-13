<?php
 $dsn = 'mysql:dbname=nwmyim9hmc2b2vcj;
 host=q0h7yf5pynynaq54.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;
 charset=utf8mb4';
$user = 'sh0dbtig658bj2t5';
$password = 'htoxakwoouep8bcm';
 
 // idパラメータの値が存在すれば処理を行う
 if (isset($_GET['id'])) {
     try {
         $pdo = new PDO($dsn, $user, $password);
 
         // idカラムの値をプレースホルダ（:id）に置き換えたSQL文をあらかじめ用意する
         $sql = 'DELETE FROM users WHERE id = :id';
         $stmt = $pdo->prepare($sql);
 
         // bindValue()メソッドを使って実際の値をプレースホルダにバインドする（割り当てる）
         $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
 
         // SQL文を実行する
         $stmt->execute();
 
         // header()関数を使ってusers.phpにリダイレクトさせる
         header('Location: users.php');
     } catch (PDOException $e) {
         exit($e->getMessage());
     }
 } else {
     // idパラメータの値が存在しない場合はエラーメッセージを表示して処理を停止する
     exit('idパラメータの値が存在しません。');
 }