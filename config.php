<?php
isset($_POST['send']){  //実行ボタンが押されたら
  $sql = $_POST['sql'];   //入力されたSQL文
  require_once "Common.php";
  $dbm = new Common();    //インスタンス＆コンストラクタ実行　接続OK
  $dbm->db_sql_only(sql);   //取得SQL実行
  $dbm->db_sql("");
  
  
  
  
}


?>
