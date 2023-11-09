<?php
namespace local_customlogger;

defined('MOODLE_INTERNAL') || die();
class logmanager {
    public static function log_submission_created($event) {
        // 獲取課程和學生信息
        $courseid = $event->courseid;
        $userid = $event->userid;

        // 寫入 error.log 檔案
        $logmessage = "Student {$userid} created an assignment on course {$courseid}.";
        error_log($logmessage);
    }
}