<?php

echo '<table border="1">';

for ($i = 1; $i <= 10; $i++) {
  echo '<tr>';
  for ($a = 1; $a <= 10; $a++) {
    $result = $i * $a;
    echo '<td>';
    if ($i % 2 == 0 && $a % 2 == 0) {
      echo "($result)";
    } elseif ($i % 2 !== 0 && $a % 2 !== 0) {
      echo "[$result]";
    } else {
      echo "$result";
    }
  }
};

?>