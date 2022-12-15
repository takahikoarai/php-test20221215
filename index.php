<html>
  <style>
    td{
      border:1px solid;
    }

    table{
      border-collapse:collapse;
    }
  </style>
  <table>
  <?php
  for($i = 1; $i < 10; $i++){
    //$iが繰り返しの条件を満たす場合は<tr>を出力する
    echo '<tr>';

    for($j = 1; $j < 10; $j++){
      //$jが繰り返しの条件を満たす場合は<td>を出力し、そのなかに$i*$jの結果を出力
      echo '<td>'.$i * $j.'</td>';
    }
    
    echo '</tr>';
  }
  ?>
</table>
</html>