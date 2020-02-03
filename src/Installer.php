<?php
namespace hocn\PHPUtility;
use Composer\Script\PackageEvent;

class Installer {
    public static function postPackageInstall(PackageEvent $event) {
        echo "Install done";
    }
}