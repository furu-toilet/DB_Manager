<?php
/* 実行ボタンを押したときの動作PHPファイル　　※画面戻り先リンク要指定 */

//if(isset($_POST["sql_submit"])){  //実行ボタンが押されたら
  $sql = $_POST["sql"];   //入力されたSQL文
  require "Common.php";
  $dbm = new Common();    //インスタンス＆コンストラクタ実行　接続OK
  
  $dbm->db_sql_only(sql);   //取得SQL実行
  //$dbm->db_sql("");         //現在未実装、Log表示用のSQLを挿入
  
  
  
  
//}

header("Location: ./index.php")  ;       //ページの遷移先指定

?>
