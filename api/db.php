<!-- FUNCTION 語法 -->
<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=mypolling"; //資料庫位址
$pdo = new PDO($dsn, 'root', ''); //連結資料庫

//取得符合條件的一筆資料
function find($table, $id)
{
    global $pdo;
    $sql = "SELECT * FROM `$table` WHERE "; //執行行為

    if (is_array($id)) {  //如果是陣列
        foreach ($id as $key => $value) {
            $tmp[] = "`$key`='$value'";
        }

        $sql = $sql . implode(" AND ", $tmp); //指定為變數sql語法
    } else {
        $sql = $sql . "`id`='$id'";
    }

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

//計算符合條件的資料筆數
function rows($table, $array)
{
    global $pdo;
    $sql = "SELECT count(*) FROM `$table` WHERE ";
    foreach ($array as $key => $value) {
        $tmp[] = "`$key`='$value'";
    }

    $sql = $sql . implode(" AND ", $tmp);
    return $pdo->query($sql)->fetchColumn();
}

//取出指定資料表的所有資料
function all($table, ...$arg)
{
    global $pdo;
    $sql = "SELECT * FROM `$table` ";
    if (isset($arg[0])) {
        if (is_array($arg[0])) {
            foreach ($arg[0] as $key => $value) {
                $tmp[] = "`$key`='$value'";
            }

            $sql = $sql . "where " . implode(" AND ", $tmp);
        } else {
            $sql = $sql . $arg[0];
        }
    }

    if (isset($arg[1])) {
        $sql = $sql . $arg[1];
    }

    // echo $sql;

    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();
}

//update
function update($table, $column, $where)
{
    global $pdo;

    $sql_set = '';
    foreach ($column as $key => $value) {
        $sql_set = $sql_set . "`$key`='$value',";
    }
    $sql_set = trim($sql_set, ',');

    $sql_where = '';
    foreach ($where as $key => $value) {
        $sql_where = $sql_where . "`$key`='$value' AND ";
    }
    $sql_where = mb_substr($sql_where, 0, mb_strlen($sql_where) - 5);;

    mb_substr($sql_where, 0, mb_strlen($sql_where) - 5);
    $sql = "UPDATE `$table` SET $sql_set WHERE $sql_where ";
    echo $sql . "<br>";
    $pdo->exec($sql);
}

// insert
function insert($table, $array)
{
    global $pdo;


    $sql = "INSERT into $table(`" . implode('`,`', array_keys($array)) . "`)
                       value('" . implode("','", $array) . "')";

    return $pdo->exec($sql);
}

// delete
function del($table, $id)
{
    global $pdo;
    $sql = "DELETE FROM `$table` WHERE `id`='$id'"; //建立共有的基本SQL語法

    if (is_array($id)) {  //如果是陣列
        foreach ($id as $key => $value) {
            $tmp[] = "`$key`='$value'";
        }

        $sql = $sql . implode(" AND ", $tmp); //指定為變數sql語法
    } else {
        $sql = $sql . "`id`='$id'";
    }

    return $pdo->exec($sql); //執行
}

// print_r(array_keys($array));


//dd
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
