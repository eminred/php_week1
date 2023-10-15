<?php

require('./src/functions.php');

echo "Задача №1";
echo task1(['One', 'Two', 'Three', 'Four', 'Five', '1', '2', '3'], false);

echo "Задача №2 (*):<br><br>";
echo calcEverything('*', 2, 3, 4, 5); 
echo "<br><br>Задача №2 (/):<br><br>";
echo calcEverything('/', 2, 3, 4, 5);
echo "<br><br>Задача №2 (+):<br><br>";
echo calcEverything('+', 2, 3, 4, 5);
echo "<br><br>Задача №2 (-):<br><br>";
echo calcEverything('-', 2, 3, 4, 5);

echo "<br><br>Задача №3:<br><br>";
echo task3(8, 9);

echo "<br>Задача №4:<br><br>";
echo task4();

echo "<br>Задача №5:<br><br>";
echo task5();

echo "<br><br>Задача №6:<br><br>";
echo task6('text.txt');


?>