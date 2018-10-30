<?php
require "Common.php";

$sql = "select pg_statio_user_tables.relname
        from pg_catalog.pg_class,pg_catalog.pg_statio_user_tables
        where relkind='r'
        and pg_catalog.pg_statio_user_tables.relid=pg_catalog.pg_class.relfilenode;";   //テーブル一覧を取得（名前のみ）

$db = new Common();
$tbal = $db->db_sql($sql);           //テーブル一覧を取得（名前のみ）

foreach($tbal as $value){
        echo $value['relname'];
}

//var_dump($tbal);



$$db->db_close();

?>
