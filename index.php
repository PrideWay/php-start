<?php
header('Content-Type: text/html; charset=utf-8');

//hello world

$x = 2; //integer
$pi = 3.1415;

echo '<b>Hello</b> world!' . $x;
print "<div>" .
    "</div><b>Hello</b> world!{$x}yz</div>";

/*
echo <<<END
<p>Любой текст</p>
Еще текст
И еще текст
END;*/


$y = 1; //integer
$y = $x + $pi; //float
$y = $y + '2 строка 2'; //float
$y = $y . ' строка'; //string
$y += 0; //float

echo "Text 1", $y, " text2";

$name = 'chislo';
$chislo = 5;


define('KONSTANTA', 6);


?>
    <div><?= $x ?> - так писать не следует
    </div>
    <div>значение числа Пи равно <?php echo $pi; ?></div>
    <div>y = <?php echo $y; ?></div>
    <div><?php echo $name; ?> = <?php echo $$name; ?></div>
    <div><?php echo $name; ?> = <?php echo "${$name} еще слова"; ?></div>
    <div><?php echo KONSTANTA; ?></div>

    <ul>
        <li><?php echo __LINE__; ?> - номер строки</li>
        <li><?php echo __FILE__; ?> - путь к текущему файлу</li>
        <li><?php echo __FUNCTION__; ?> - название текущей функции</li>
        <li><?php echo __CLASS__; ?></li>
        <li><?php echo __METHOD__; ?></li>
        <li><?php echo PHP_VERSION; ?></li>
        <li><?php echo PHP_OS; ?></li>
        <li><?php echo DEFAULT_INCLUDE_PATH; ?></li>
    </ul>

<?php
//boolean
$flag_1 = true;
$flag_2 = false;

$x = $flag_1 * $flag_2;

echo $x;

$massiv = array(2, 5, 7, 'текст', true);
echo '<pre>';
print_r($massiv);
echo '</pre>';
echo $massiv[0];
echo $massiv[0] + $massiv[2];

//resource

//NULL

$z = (integer)'45';

echo "<div>$z</div>";

$a = 0;
$a = $a + 1; // аналогично $a += 1;
$a += 1;

echo "<div>".(++$a)."</div>";
echo "<div>".($a++)."</div>";
echo "<div>".($a)."</div>";