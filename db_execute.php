<?php
/* 実行ボタンを押したときの動作PHPファイル　　※画面戻り先リンク要指定 */

isset($_POST['send']){  //実行ボタンが押されたら
  $sql = $_POST['sql'];   //入力されたSQL文
  require_once "Common.php";
  $dbm = new Common();    //インスタンス＆コンストラクタ実行　接続OK
  
  $dbm->db_sql_only(sql);   //取得SQL実行
  //$dbm->db_sql("");         //現在未実装、Log表示用のSQLを挿入
  
  
  
  
}

header("./index.php") ;

?>
