<?php
const DEV_MODE = true;
const DOC_ROOT = '/public/';
const ROOT_FOLDER = '/public/';
const DOMAIN = 'http://localhost';

$type = 'mysql';
$host = 'localhost';
$port = '3306';
$dbname = 'cms_graz';
$user_name = 'cms_graz';
$password = '';
$dsn = "$type:host=$host;dbname=$dbname";

const MEDIA_TYPES = ['image/jpeg', 'image/png'];
const FILE_EXTENSIONS = ['jpeg', 'jpg', 'png'];
const MAX_FILE_SIZE = 1024 * 1024 * 2;
define('UPLOAD_DIR', dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . ROOT_FOLDER . DIRECTORY_SEPARATOR . '/uploads/');

$mail_config = [
    'host' => 'mail.gmx.net',
    'port' => '465',
    'username' => 'wallner.viktoria@gmx.net',
    'password' => 'cuRwem-1woxvu-tuhwov',
    'sec' => 'ssl',
    'admin_mail' => 'wallner.viktoria@gmx.net',
    'debug' => (DEV_MODE ? 2 : 0)
];
