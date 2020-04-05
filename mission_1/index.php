<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Моя первая страница на HTML</title>
  <style>
    a img{
      border: 1px solid skyblue;    
    }
    .circle{
      list-style-type: circle;    
    }
  </style>
</head>
<body>
  <h1>Моя первая страница на HTML</h1>
  <p><strong>Lorem ipsum dolor</strong>, sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <p><i>Lorem ipsum dolor sit</i> , amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <hr>
  <a href="сертификаты.jpg"><img src="сертификаты.jpg" title="нажми меня" width="350" height="150"></a>
  <h2>Маркированный список</h2>
  
  <ul>
    <?php
      for($i=1; $i<4; $i++){
        echo '<li>Пункт ' . $i . '</li>';      
      }
    ?>
  </ul>
  
  <h2>Нумерованный список</h2>
    <?php
      echo "<ol>";    
      for($i=1; $i<4; $i++){
        echo '<li>Пункт ' . $i . '</li>';      
      }
      echo "</ol>";
    ?>      
    
  <h2>Вложенный список</h2>
  <ul>
    <?php
      for($i=1; $i<3; $i++){
        echo "<li>Lorem, ipsum";
        
        if($i==2)
          echo '<ul class="circle">'; 
        else
          echo '<ol>'; 
        
        for($j=1; $j<4; $j++){
          echo "<li>Lorem, ipsum</li>";
        }
        
        if($i==2)
          echo "</ul></li>";
        else
          echo "</ol></li>";
      }
    ?>  
  </ul>
</body>
</html>