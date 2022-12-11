<?php
/**
* Base rule file Uinsu-Web-Framework
*/

/**
* URL base, jika di upload ke hosting, perhatikan http/https, karena akan berpengaruh
*/
$homeBase = 'http://localhost/niu-coffee/';

/**
* Site name (nama situs web)
*/
$siteName = 'Niu Coffee';

/**
* Author (Pengembang / pemilik website)
*/
$author = 'NIU Coffee & Eatery';

/**
* Default route
*/
$mainRoute = 'home';

/**
* Path to  style asset (css, js, dll)
*/
$styleBase = $homeBase.'ladun';

/**
* Define to public
*/
define('HOMEBASE', $homeBase);
define('SITENAME', $siteName);
define('AUTHOR', $author);
define('MAINROUTE', $mainRoute);
define('STYLEBASE', $styleBase);



