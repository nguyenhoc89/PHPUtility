<?php
namespace hocn\PHPUtility;
use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Installer {
    public static function postPackageInstall(PackageEvent $event) {
        echo "Install done ...\n";
        exec("test.bat");
    }
}