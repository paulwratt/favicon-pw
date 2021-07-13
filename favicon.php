<?php
# deflect favicon.ico "ping" to server 
#  or you could pass back a redirect (or a different file)
# works in conjuction with web server,
#  make sure /favicon.ico does NOT exist
# nginx:
#  location = /favicon.ico {
#          try_files $uri          /favicon.php;
#  }
#


$rf=$_SERVER['HTTP_REFERER'];
#  ( $rf === ''  ) will not work here if HTTP_REFERER is undefined (not sent by client)
if ( $rf == ''  ) {
  http_response_code(404);
  exit;
}

$f="x_favicon.ico";
if (file_exists($f)) {
    header('Content-Type: image/x-icon');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: '.filesize($f));
    readfile($file);
}

exit;

?>
