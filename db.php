<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server_ = $url["host"];
$username_ = $url["user"];
$password_ = $url["pass"];
$db_ = substr($url["path"], 1);


  $db_user=$username_;
  $db_pass=$password_;
  $db_host=$server_;
  $db=$db_;
  $maxResultsPerPage = 6;
  
  
  $local = false;
  if($local){
    $baseURL='local.audiocloud.dweet.net';
    $baseAssetsURL = 'http://local.assets.whitehotrobot.com';
  }else{
    $baseURL='audiocloud.dweet.net';
  }
  
  $baseFullURL= ($local ? 'http://' : 'https://') . $baseURL;
  $link = mysqli_connect($db_host, $db_user, $db_pass, $db);

  $in = explode("\n", file_get_contents('/etc/group'));
  foreach($in as $group){
    $group = mysqli_real_escape_string($link, explode(':', $group)[0]);
    $sql = 'SELECT * FROM users WHERE name LIKE "' . $group . '"';
    $res = mysqli_query($link, $sql);
    if(!mysqli_num_rows($res)){
      $sql = 'INSERT INTO users (name, passhash, enabled, escaped_name) VALUES("'.$group.'", "", FALSE, "'.$group.'")';
      mysqli_query($link, $sql);
    }
  }
?>

