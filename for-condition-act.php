<?php
# 1
for($i = 1; $i <= 10; $i++){
   if($i != 10){
      if($i % 2 == 0){
         echo "$i.";
      }else{
         echo "$i-";
      }
   }else{
      echo $i;
   }
}

echo "<hr>";

# 2
for ($i = 1; $i < 10; $i++) {
   if ($i == 9) {
      echo "$i-", ++$i;
   } else {
      echo "$i-", ++$i, ".";
   }
}
?>