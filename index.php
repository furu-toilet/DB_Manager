<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DBConfig</title>
    <link rel="stylesheet" href="style_index.css">
  </head>
  <body>
    <header>
      <h1>DB Config</h1>
    </header>
    <div class="left">
      <form method="post" action="table_all.php" name="SQL_sendform">
        <h2>SQL</h2>
        <textarea class="sendarea" name="sql"></textarea><br>
        <div class="left-inputarea">
          <input class="left-in" type="submit" value="実行" name="sql_submit" id="sql_submit">
          <input class="left-in" type="submit" value="リセット" name="sql_reset" id="sql_reset">
        </div>
      </form>
      <div id="log">
        <h2>実行ログ</h2>
        <textarea class="log" rows=20 cols=60></textarea>
      </div>
    </div>
    <iframe class="rightframe" src="right.html"></iframe>
  </body>
</html>
