<?php
require "Common.php";

$sql = "select pg_statio_user_tables.relname
        from pg_catalog.pg_class,pg_catalog.pg_statio_user_tables
        where relkind='r'
        and pg_catalog.pg_statio_user_tables.relid=pg_catalog.pg_class.relfilenode;";   //テーブル一覧を取得（名前のみ）

$db = new Common();
$tbal = $db->db_sql($sql);           //テーブル一覧を取得（名前のみ） 
$list = null;
$tbl_lst = null;

$cnt = 0;
foreach($tbal as $value){
        $list[$cnt] = $value['relname'];
        $cnt++;
}
$cnt = 0;
foreach($list as $value){
        echo $value;
        $tbl_lst[$cnt] = $db->db_sql("select * from " . $value . ";");
}




var_dump($tbl_lst);



$db->db_close();

?>
