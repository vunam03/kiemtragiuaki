<?php

$uri = "mysql://avnadmin:AVNS_2Chm-4s4bdE88U9jjAK@mysql-1a5fe0a1-webnangcao.i.aivencloud.com:16513/defaultdb?ssl-mode=REQUIRED";

$fields = parse_url($uri);

// build the DSN including SSL settings
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=QUANLYSACH";
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
  $db = new PDO($conn, $fields["user"], $fields["pass"]);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}