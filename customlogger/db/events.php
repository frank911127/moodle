<?php

$observers = array(
    array(
        'eventname' => '\core\event\notification_sent',
        'callback' => 'local_customlogger\logmanager::log_submission_created',
    ),
);