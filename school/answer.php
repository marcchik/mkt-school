<?php
header('Content-Type: text/html; charset=utf-8');

$file = file_get_contents('data.json');
$list = json_decode($file,TRUE);
unset($file);
$list[] = [$_POST['user'], $_POST['question'], $_POST['answer']];
if (!empty($_POST['user']) && file_put_contents('data.json', json_encode($list, JSON_UNESCAPED_UNICODE))) {

    $token = '5263663074:AAE4VX8yOGwG6ERaMRWwSOU92wRmtKiNobI'; // Token бота
    $telegram_admin_id = '469182552'; // Ваш ID или канала
    $msg = "👤 ".$_POST['user'].
        "\n❓ ".$_POST['question'].
        "\n📝 ".$_POST['answer'].
        "\n🎁 ".$_POST['gift'];
    file_get_contents('https://api.telegram.org/bot'. $token .'/sendMessage?chat_id='. $telegram_admin_id .'&text=' . urlencode($msg));

}


$token = '5263663074:AAE4VX8yOGwG6ERaMRWwSOU92wRmtKiNobI'; // Token бота
$telegram_admin_id = '469182552'; // Ваш ID или канала

$data = json_decode(file_get_contents('php://input'), TRUE);

//$data = $data['callback_query'] ? $data['callback_query'] : $data['message'];

$message = json_encode($data);
//$message = mb_strtolower(($data['text'] ? $data['text'] : $data['data']),'utf-8');
file_put_contents('data2.json', json_encode($data, JSON_UNESCAPED_UNICODE));




