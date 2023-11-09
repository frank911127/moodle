<?php
namespace local_customlogger;

defined('MOODLE_INTERNAL') || die();
class logmanager {
    public static function log_submission_created($event) {
        // 獲取學生ID和事件資料陣列
    $userid = $event->userid;
    $data = $event->get_data();

    // 轉換陣列成字串，使用print_r函數
    $dataString = print_r($data, true);

    // 寫入error.log檔案
    $logmessage = "User ID: {$userid}, Event Data: {$dataString}";
    error_log($logmessage);
    }
}