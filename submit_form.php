<?php
// データベース接続設定
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "survey_db";

// データベースに接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続エラーの確認
if ($conn->connect_error) {
    die("接続失敗: " . $conn->connect_error);
}

// フォームからのデータを取得
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$question1 = $_POST['question1'];

// SQL文を作成してデータを挿入
$sql = "INSERT INTO survey_responses (name, age, gender, latitude, longitude, question1) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sissss", $name, $age, $gender, $latitude, $longitude, $question1);

if ($stmt->execute()) {
    echo "データが正常に保存されました。";
} else {
    echo "エラー: " . $sql . "<br>" . $conn->error;
}

// 接続を閉じる
$stmt->close();
$conn->close();
?>
