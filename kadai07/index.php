<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CA Moms</title>
  <link rel="stylesheet" href="css/index_style.css">
  <link rel="icon" type="img/png" href="img/favicon.png">
</head>

<body>
  <!-- kadai07_PHP01 アンケート 表示アプリ-->

<header>
  <div class="container">
    <div><img src="img/cheers.png" alt=""></div>
    <div><h1>CA Moms</h1></div>
    <div><img src="img/cheers.png" alt=""></div>
  </div>
</header>

<section class="input_section">
  <h2>My Recomended Restaurant</h2>
  <form action="write.php" method="post">
    <div class="info_row">
      <div class="info_label">
        <label for="rest_name">店名：</label>
      </div>
      <div class="info_input">
        <input type="text" name="rest_name" class="text_space"><br>
      </div>
    </div>
    <div class="info_row">
      <div class="info_label">
        <label for="genre">ジャンル：</label>
      </div>
      <div class="info_input">
        <select name="genre"  class="select_area">
          <option value="イタリアン">イタリアン</option>
          <option value="フレンチ">フレンチ</option>
          <option value="和食">和食</option>
          <option value="中華">中華</option>
          <option value="焼き鳥">焼き鳥</option>
          <option value="居酒屋">居酒屋</option>
          <option value="ラーメン">ラーメン</option>
          <option value="その他" selected>その他</option>
        </select><br>
      </div>
    </div>
    <div class="info_row">
      <div class="info_label">
        <label for="url">URL：</label>
      </div>
      <div class="info_input">
        <input type="text" name = "url" class="text_space"><br>
      </div>
    </div>
    <div class="info_row">
      <div class="info_label">
        <label for="memo">おすすめポイント：</label>
      </div>
      <div class="info_input">
        <input type="text" name="memo" class="text_space" ><br>
      </div>
    </div>
    <div class="info_row">
      <div class="info_label">
        <label for="name">投稿者：</label>
      </div>
      <div class="info_input">
        <select name="name" class="select_area">
          <option value="Mie">Mie</option>
          <option value="Mika">Mika</option>
          <option value="Rita">Rita</option>
        </select><br>
      </div>
    </div>
    <button type="submit">送信</button>
  </form>
</section>

<section class="list">
  <h2 class="h2_title">Our Favorite Restaurants</h2>
  <?php
//****************************************************************************************
// data.csvを読み込む（やり方は色々ある。やりたいことに合わせて選ぶ。ここではfgets関数でdata.csvを1行ずつ読み込む）
//****************************************************************************************
$filename = 'data.csv'; // 作成したファイルdata.csv を変数filenameに格納する
$fp = fopen($filename, 'r'); // fopenでファイルを開く（'r'は読み込みモードで開く）

// テーブルタグを作成し、テーブルヘッダーで見出しを作る
echo '<table>
      <tr>
      <th>店名</th>
      <th>ジャンル</th>
      <th>URL</th>
      <th>おすすめポイント</th>
      <th>投稿者</th>
      </tr>';

// while文でCSVファイルのデータを1つずつ繰り返し読み込む
while($data = fgetcsv($fp)){
  echo '<tr>';
  // テーブルセルに配列の値を格納
  for($i = 0; $i < count($data); $i++){
    echo '<td>'.$data[$i].'</td>';
  }
  echo '</tr>';
}
fclose($fp);// fcloseでファイルを閉じる

//****************************************************************************************
// 読み込んだデータで何かをする
//****************************************************************************************
// 読み込んだあと、for文を回す
// オブジェクト型の配列か配列に保管する
// 食べたい料理ジャンル
// if イタリアンだったらイタリアンcounterをcountupする
// if フレンチだったら、フレンチcounterをcountupする
// if 和食だったら、和食counterをcountupする
// 一番大きいcounterを第1位にする
// 
?>
</section>

</body>
</html>