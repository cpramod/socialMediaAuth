<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Settings.
| -------------------------------------------------------------------------
*/
$config['app_id']       = '1701536869971744';       // iplocaation app id
$config['app_secret']   = '193567988f7532c81ea15cd5d0da3543';   // app secret
$config['scope']        = 'email';  // custom permissions check - http://developers.facebook.com/docs/reference/login/#permissions
$config['fields']       = 'id,first_name,last_name,email,picture'; // fields to retrieve; if set to '', default is "id,first_name,last_name"
$config['redirect_uri'] = site_url('sociallogin/facebookLogin/1');       // url to redirect back from facebook. If set to '', site_url('') will be used
