<?php
function p($data) {
    return print_r($data);
}

class Pass {
    //static $url = 'http://pugiemonn.dyndns.tv';
    static $url = 'http://pd.tv';
}
class Database {
    static $dbsv   = 'localhost';
    static $dbname = 'zombie';
    static $dbuser = 'zombie';
    static $dbpass = '';
    static $dbtype = 'mysql';
}

$url    = Pass::$url;
$dbsv   = Database::$dbsv;
$dbname = Database::$dbname;
$dbuser = Database::$dbuser;
$dbpass = Database::$dbpass;
$dbtype = Database::$dbtype;

mysql_connect($dbsv, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
mysql_query('SET NAMES UTF8');

?>
