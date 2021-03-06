<?php

// Mandatory parameter that should be set to the registered application's 
// 'API Key' value.
$api_key = "";
 
// Mandatory parameter that should be set to the registered application's
// 'Secret Key' value.
$secret_key = "";

// Fully Qualified Domain Name. Mandatory parameter that points to the location
// of AT&T's API.
$FQDN = "https://api.att.com";

// Mandatory parameter. Scope to use when requesting access token.
$scope = "STTC";

// Mandtory parameter. File to save access token after request. File/folder 
// must have write permissions.
$oauth_file = "oauthtoken.php";

// Mandatory. Directory where files to be uploaded are stored.
$audioFolder = __DIR__ . "/audio";

// URL Link for this sample app's Github source code.
$linkSource = '#';

// URL link for this sample app's download.
$linkDownload = '#';

?>
