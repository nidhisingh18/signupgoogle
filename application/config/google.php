<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '122428940599-1kh59gid2t7vh0uvjog5hbitv94daca6.apps.googleusercontent.com';
$config['google']['client_secret']    = 'fFcNumNicP6LLvYZuKqLCPTV';
$config['google']['redirect_uri']     = 'http://localhost/googlesignin/index.php';
//$config['google']['redirect_uri']     = 'http://localhost';
$config['google']['application_name'] = 'Lms Web';
$config['google']['api_key']          = 'AIzaSyDt05eRkFQI-xSnYZhMIXcQL6tzPnm85XU';
$config['google']['scopes']           = array('https://www.googleapis.com/auth/userinfo.email');