<?php

// 一
echo $_FILES['userfile']['name'];
// 一時ファイル名
echo $_FILES['userfile']['tmp_name'];
// ファイルサイズ
echo $_FILES['userfile']['size'];
// エラー情報
echo $_FILES['userfile']['error'];
$files_path = 'C:\Users\guest1Day\Documents\180109\CampChallenge_PHP\CampChallenge_PHP\011.データ操作\ファイルの読み込みアップロード/' . $_FILES['userfile']['name'];
// ファイルを移動
if (move_uploaded_file($_FILES['userfile']['tmp_name'],
    $files_path)) {
    // 成功したら、中身を表示してみる
    echo file_get_contents($files_path);
}
?>
