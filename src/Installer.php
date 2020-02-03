<?php
namespace hocn\PHPUtility;
use ComposerScriptEvent;

class Installer {
    public static function postPackageInstall(Event $event) {
        echo "Install done";
    }
}