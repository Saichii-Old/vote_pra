<?php
include_once "db.php";

$topic_array=['topic'=>$_POST['subject']];
insert('topics',$topic_array); //將POST資料"陣列"匯入 subject資料表

?>