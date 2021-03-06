<?php
! defined ( "NOW_ROOT" ) && define ( "NOW_ROOT", $_SERVER ['DOCUMENT_ROOT'] );

$nowRootArray = explode ( "/", NOW_ROOT );

$nowRootLength = count ( $nowRootArray ) - 1;

$dirName = $nowRootArray [$nowRootLength];

if (strcmp ( $dirName, "" ) == 0) {
    $nowRootLength --;
}

$dirName = $nowRootArray [$nowRootLength];

if (strcmp ( $dirName, "public_html" ) == 0) {
    ! defined ( "ROOT" ) && define ( "ROOT", $_SERVER ['DOCUMENT_ROOT'] );
} else {
    ! defined ( "ROOT" ) && define ( "ROOT", dirname ( $_SERVER ['DOCUMENT_ROOT'] ) );
}

require ROOT."/common/inc/common.php";

! defined ( "MAIN_DOMAIN" ) && define ( "MAIN_DOMAIN", DOMAIN . "/i/");
!defined("MAIN_PATH")  && define("MAIN_PATH", "/i/");

require BASE_INC . "init.php";
require BASE_INC . "php_version.php";
require BASE_INC . "JSON.php";
