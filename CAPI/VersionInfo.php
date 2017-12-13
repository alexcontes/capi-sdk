<?php


namespace CAPI;


class VersionInfo {
    const MAJOR = 1;
    const MINOR = 0;
    const PATCH = 1;

    public static function string() {
        return implode('.', array(self::MAJOR, self::MINOR, self::PATCH));
    }
}
