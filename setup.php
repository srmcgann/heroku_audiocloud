<?
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server_ = $url["host"];
$username_ = $url["user"];
$password_ = $url["pass"];
$db_ = substr($url["path"], 1);
echo "user: $username<br>";
echo "pass: $password<br>";
?>
