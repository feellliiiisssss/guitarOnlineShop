<?php

class TimeUtil {
    public static function GetCurrentTime() {
        $now = new DateTime();
        return $now->format('Y-m-d H:i:s');
    }
}