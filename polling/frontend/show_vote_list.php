<!-- 問卷問題表 -->
<?php
$subjects=all('topics');
echo "<ol>";

foreach ($subjects as $key => $value) {
    echo "<li>";
    echo $value['topic'];
    echo "</li>";
}

echo "</ol>";
?>