<?php
// POSTリクエストの受け取り
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // 受け取ったデータを表示
    echo json_encode([
        "message" => "データを受け取りました！",
        "name" => $name,
        "email" => $email
    ]);
} else {
    echo json_encode(["message" => "POSTメソッドでリクエストしてください。"]);
}
?>