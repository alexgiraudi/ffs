<?php
defined('IN_MOBIQUO') or exit;

require($phpbb_root_path . 'includes/functions_user.' . $phpEx);
require('include/mobi_register.php');
$user->session_begin();

$auth->acl($user->data);
$user->setup('ucp');
$register = new mobi_ucp_register();
$register->main();
$result = $register->result;
$result_text = $register->result_text;

