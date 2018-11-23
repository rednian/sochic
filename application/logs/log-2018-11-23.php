<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-23 17:33:01 --> Query error: Table 'sochic.user_accessibility_option' doesn't exist - Invalid query: SELECT *
FROM `User_accessibility_option`
JOIN `Access_menu` ON `Access_menu`.`am_id` = `User_accessibility_option`.`am_id`
JOIN `Module_list` ON `Module_list`.`mod_id` = `Access_menu`.`mod_id`
WHERE `User_accessibility_option`.`acc_id` = '32'
 LIMIT 1
