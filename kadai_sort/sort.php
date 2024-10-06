<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];

        function stor_2way($array, $ordre) {
         
          if($ordre){
           echo '昇り順でソートします。<br>';
           sort ($array);
           foreach ($array as $num){
           echo "{$num}<br>";
           }
          } 

           else {
            echo '降順でソートします。<br>'; 
            rsort ($array);
            foreach ($array as $num){
            echo "{$num}<br>";
           }
          } 
        }  

        stor_2way ($nums, true);
        stor_2way ($nums, false);
        
        ?>
    </p>
</body>

</html>
