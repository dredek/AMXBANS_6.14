########################################
#
# AMXBans backup: 30.08.2017 20:32:04
#
########################################


########################################
# table: amx_admins_servers
########################################

CREATE TABLE IF NOT EXISTS `amx_admins_servers` (
 `admin_id` int(11) NULL,
 `server_id` int(11) NULL,
 `custom_flags` varchar(32) NULL,
 `use_static_bantime` enum('yes','no') NULL DEFAULT 'yes');



########################################
# table: amx_amxadmins
########################################

CREATE TABLE IF NOT EXISTS `amx_amxadmins` (
 `id` int(12) NULL auto_increment,
 `username` varchar(32) NULL,
 `password` varchar(32) NULL,
 `access` varchar(32) NULL,
 `flags` varchar(32) NULL,
 `steamid` varchar(32) NULL,
 `nickname` varchar(32) NULL,
 `ashow` int(11) NULL,
 `created` int(11) NULL,
 `expired` int(11) NULL,
 `days` int(11) NULL,
PRIMARY KEY (id),
KEY steamid (steamid));

INSERT INTO `amx_amxadmins` (`id`,`username`,`password`,`access`,`flags`,`steamid`,`nickname`,`ashow`,`created`,`expired`,`days`) VALUES ('1','pirmais','34670360110','abd','a','otrais','tresais','1','1504117670','0','0');
INSERT INTO `amx_amxadmins` (`id`,`username`,`password`,`access`,`flags`,`steamid`,`nickname`,`ashow`,`created`,`expired`,`days`) VALUES ('2','pirmais','34670360110','abd','a','otrais','tresais','0','1504117695','0','0');
INSERT INTO `amx_amxadmins` (`id`,`username`,`password`,`access`,`flags`,`steamid`,`nickname`,`ashow`,`created`,`expired`,`days`) VALUES ('3','pirmais','34670360110','abd','a','otrais','tresais','0','1504117699','0','0');
INSERT INTO `amx_amxadmins` (`id`,`username`,`password`,`access`,`flags`,`steamid`,`nickname`,`ashow`,`created`,`expired`,`days`) VALUES ('4','indianiso1','34670360110','asd','ab','asd','dsad','0','1504117742','1506709742','30');


########################################
# table: amx_bans
########################################

CREATE TABLE IF NOT EXISTS `amx_bans` (
 `bid` int(11) NULL auto_increment,
 `player_ip` varchar(32) NULL,
 `player_id` varchar(35) NULL,
 `player_nick` varchar(100) NULL DEFAULT 'Unknown',
 `admin_ip` varchar(32) NULL,
 `admin_id` varchar(35) NULL,
 `admin_nick` varchar(100) NULL DEFAULT 'Unknown',
 `ban_type` varchar(10) NULL DEFAULT 'S',
 `ban_reason` varchar(100) NULL,
 `ban_created` int(11) NULL,
 `ban_length` int(11) NULL,
 `server_ip` varchar(32) NULL,
 `server_name` varchar(100) NULL DEFAULT 'Unknown',
 `ban_kicks` int(11) NULL,
 `expired` int(1) NULL,
 `imported` int(1) NULL,
PRIMARY KEY (id, bid),
KEY steamid (steamid),
KEY player_id (player_id));



########################################
# table: amx_bans_edit
########################################

CREATE TABLE IF NOT EXISTS `amx_bans_edit` (
 `id` int(11) NULL auto_increment,
 `bid` int(11) NULL,
 `edit_time` int(11) NULL,
 `admin_nick` varchar(32) NULL DEFAULT 'unknown',
 `edit_reason` varchar(255) NULL,
PRIMARY KEY (id, bid, id),
KEY steamid (steamid),
KEY player_id (player_id));



########################################
# table: amx_bbcode
########################################

CREATE TABLE IF NOT EXISTS `amx_bbcode` (
 `id` int(11) NULL auto_increment,
 `open_tag` varchar(32) NULL,
 `close_tag` varchar(32) NULL,
 `url` varchar(32) NULL,
 `name` varchar(32) NULL,
PRIMARY KEY (id, bid, id, id),
KEY steamid (steamid),
KEY player_id (player_id));

INSERT INTO `amx_bbcode` (`id`,`open_tag`,`close_tag`,`url`,`name`) VALUES ('1','[b]','[/b]','bold.png','bold');
INSERT INTO `amx_bbcode` (`id`,`open_tag`,`close_tag`,`url`,`name`) VALUES ('2','[i]','[/i]','italic.png','italic');
INSERT INTO `amx_bbcode` (`id`,`open_tag`,`close_tag`,`url`,`name`) VALUES ('3','[u]','[/u]','underline.png','underline');
INSERT INTO `amx_bbcode` (`id`,`open_tag`,`close_tag`,`url`,`name`) VALUES ('4','[center]','[/center]','center.png','center');


########################################
# table: amx_comments
########################################

CREATE TABLE IF NOT EXISTS `amx_comments` (
 `id` int(11) NULL auto_increment,
 `name` varchar(35) NULL,
 `comment` text NULL,
 `email` varchar(100) NULL,
 `addr` varchar(32) NULL,
 `date` int(11) NULL,
 `bid` int(11) NULL,
PRIMARY KEY (id, bid, id, id, id),
KEY steamid (steamid),
KEY player_id (player_id));



########################################
# table: amx_files
########################################

CREATE TABLE IF NOT EXISTS `amx_files` (
 `id` int(11) NULL auto_increment,
 `upload_time` int(11) NULL,
 `down_count` int(11) NULL,
 `bid` int(11) NULL,
 `demo_file` varchar(100) NULL,
 `demo_real` varchar(100) NULL,
 `file_size` int(11) NULL,
 `comment` text NULL,
 `name` varchar(64) NULL,
 `email` varchar(64) NULL,
 `addr` varchar(32) NULL,
PRIMARY KEY (id, bid, id, id, id, id),
KEY steamid (steamid),
KEY player_id (player_id));



########################################
# table: amx_flagged
########################################

CREATE TABLE IF NOT EXISTS `amx_flagged` (
 `fid` int(11) NULL auto_increment,
 `player_ip` varchar(32) NULL,
 `player_id` varchar(35) NULL,
 `player_nick` varchar(100) NULL DEFAULT 'Unknown',
 `admin_ip` varchar(32) NULL,
 `admin_id` varchar(35) NULL,
 `admin_nick` varchar(100) NULL DEFAULT 'Unknown',
 `reason` varchar(100) NULL,
 `created` int(11) NULL,
 `length` int(11) NULL,
 `server_ip` varchar(100) NULL,
PRIMARY KEY (id, bid, id, id, id, id, fid),
KEY steamid (steamid),
KEY player_id (player_id, player_id));



########################################
# table: amx_levels
########################################

CREATE TABLE IF NOT EXISTS `amx_levels` (
 `level` int(12) NULL,
 `bans_add` enum('yes','no') NULL DEFAULT 'no',
 `bans_edit` enum('yes','no','own') NULL DEFAULT 'no',
 `bans_delete` enum('yes','no','own') NULL DEFAULT 'no',
 `bans_unban` enum('yes','no','own') NULL DEFAULT 'no',
 `bans_import` enum('yes','no') NULL DEFAULT 'no',
 `bans_export` enum('yes','no') NULL DEFAULT 'no',
 `amxadmins_view` enum('yes','no') NULL DEFAULT 'no',
 `amxadmins_edit` enum('yes','no') NULL DEFAULT 'no',
 `webadmins_view` enum('yes','no') NULL DEFAULT 'no',
 `webadmins_edit` enum('yes','no') NULL DEFAULT 'no',
 `websettings_view` enum('yes','no') NULL DEFAULT 'no',
 `websettings_edit` enum('yes','no') NULL DEFAULT 'no',
 `permissions_edit` enum('yes','no') NULL DEFAULT 'no',
 `prune_db` enum('yes','no') NULL DEFAULT 'no',
 `servers_edit` enum('yes','no') NULL DEFAULT 'no',
 `ip_view` enum('yes','no') NULL DEFAULT 'no',
PRIMARY KEY (id, bid, id, id, id, id, fid, level),
KEY steamid (steamid),
KEY player_id (player_id, player_id));

INSERT INTO `amx_levels` (`level`,`bans_add`,`bans_edit`,`bans_delete`,`bans_unban`,`bans_import`,`bans_export`,`amxadmins_view`,`amxadmins_edit`,`webadmins_view`,`webadmins_edit`,`websettings_view`,`websettings_edit`,`permissions_edit`,`prune_db`,`servers_edit`,`ip_view`) VALUES ('1','yes','yes','yes','yes','yes','yes','yes','yes','yes','yes','yes','yes','yes','yes','yes','yes');


########################################
# table: amx_logs
########################################

CREATE TABLE IF NOT EXISTS `amx_logs` (
 `id` int(11) NULL auto_increment,
 `timestamp` int(11) NULL,
 `ip` varchar(32) NULL,
 `username` varchar(32) NULL,
 `action` varchar(64) NULL,
 `remarks` varchar(256) NULL,
PRIMARY KEY (id, bid, id, id, id, id, fid, level, id),
KEY steamid (steamid),
KEY player_id (player_id, player_id));

INSERT INTO `amx_logs` (`id`,`timestamp`,`ip`,`username`,`action`,`remarks`) VALUES ('1','1501070434','::1','admin','Install','Installation AMXBans v6.14');
INSERT INTO `amx_logs` (`id`,`timestamp`,`ip`,`username`,`action`,`remarks`) VALUES ('2','1501070508','::1','admin','Install','Installation AMXBans v6.14');
INSERT INTO `amx_logs` (`id`,`timestamp`,`ip`,`username`,`action`,`remarks`) VALUES ('3','1501083476','::1','admin','Install','Installation AMXBans v6.14');
INSERT INTO `amx_logs` (`id`,`timestamp`,`ip`,`username`,`action`,`remarks`) VALUES ('4','1501675863','::1','admin','Install','Installation AMXBans v6.14');
INSERT INTO `amx_logs` (`id`,`timestamp`,`ip`,`username`,`action`,`remarks`) VALUES ('5','1504117670','::1','admin','AMXXAdmin config','Added admin: pirmais');
INSERT INTO `amx_logs` (`id`,`timestamp`,`ip`,`username`,`action`,`remarks`) VALUES ('6','1504117695','::1','admin','AMXXAdmin config','Added admin: pirmais');
INSERT INTO `amx_logs` (`id`,`timestamp`,`ip`,`username`,`action`,`remarks`) VALUES ('7','1504117699','::1','admin','AMXXAdmin config','Added admin: pirmais');
INSERT INTO `amx_logs` (`id`,`timestamp`,`ip`,`username`,`action`,`remarks`) VALUES ('8','1504117742','::1','admin','AMXXAdmin config','Added admin: indianiso1');
INSERT INTO `amx_logs` (`id`,`timestamp`,`ip`,`username`,`action`,`remarks`) VALUES ('9','1504117841','::1','admin','AMXXAdmin config','Edited admin: pirmais (nick: tresais)');
INSERT INTO `amx_logs` (`id`,`timestamp`,`ip`,`username`,`action`,`remarks`) VALUES ('10','1504117848','::1','admin','AMXXAdmin config','Edited admin: pirmais (nick: tresais)');


########################################
# table: amx_modulconfig
########################################

CREATE TABLE IF NOT EXISTS `amx_modulconfig` (
 `id` int(11) NULL auto_increment,
 `menuname` varchar(32) NULL,
 `name` varchar(32) NULL,
 `index` varchar(32) NULL,
 `activ` int(1) NULL DEFAULT '1',
PRIMARY KEY (id, bid, id, id, id, id, fid, level, id, id),
KEY steamid (steamid),
KEY player_id (player_id, player_id));

INSERT INTO `amx_modulconfig` (`id`,`menuname`,`name`,`index`,`activ`) VALUES ('1','_MENUIMPORTEXPORT','iexport','','1');


########################################
# table: amx_reasons
########################################

CREATE TABLE IF NOT EXISTS `amx_reasons` (
 `id` int(11) NULL auto_increment,
 `reason` varchar(100) NULL,
 `static_bantime` int(11) NULL,
PRIMARY KEY (id, bid, id, id, id, id, fid, level, id, id, id),
KEY steamid (steamid),
KEY player_id (player_id, player_id));



########################################
# table: amx_reasons_set
########################################

CREATE TABLE IF NOT EXISTS `amx_reasons_set` (
 `id` int(11) NULL auto_increment,
 `setname` varchar(32) NULL,
PRIMARY KEY (id, bid, id, id, id, id, fid, level, id, id, id, id),
KEY steamid (steamid),
KEY player_id (player_id, player_id));



########################################
# table: amx_reasons_to_set
########################################

CREATE TABLE IF NOT EXISTS `amx_reasons_to_set` (
 `id` int(11) NULL auto_increment,
 `setid` int(11) NULL,
 `reasonid` int(11) NULL,
PRIMARY KEY (id, bid, id, id, id, id, fid, level, id, id, id, id, id),
KEY steamid (steamid),
KEY player_id (player_id, player_id));



########################################
# table: amx_serverinfo
########################################

CREATE TABLE IF NOT EXISTS `amx_serverinfo` (
 `id` int(11) NULL auto_increment,
 `timestamp` int(11) NULL,
 `hostname` varchar(100) NULL DEFAULT 'Unknown',
 `address` varchar(100) NULL,
 `gametype` varchar(32) NULL,
 `rcon` varchar(32) NULL,
 `amxban_version` varchar(32) NULL,
 `amxban_motd` varchar(250) NULL,
 `motd_delay` int(10) NULL DEFAULT '10',
 `amxban_menu` int(10) NULL DEFAULT '1',
 `reasons` int(10) NULL,
 `timezone_fixx` int(11) NULL,
PRIMARY KEY (id, bid, id, id, id, id, fid, level, id, id, id, id, id, id),
KEY steamid (steamid),
KEY player_id (player_id, player_id));



########################################
# table: amx_smilies
########################################

CREATE TABLE IF NOT EXISTS `amx_smilies` (
 `id` int(5) NULL auto_increment,
 `code` varchar(32) NULL,
 `url` varchar(32) NULL,
 `name` varchar(32) NULL,
PRIMARY KEY (id, bid, id, id, id, id, fid, level, id, id, id, id, id, id, id),
KEY steamid (steamid),
KEY player_id (player_id, player_id));

INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('1',':D','big_smile.png','Big Grin');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('2','8)','cool.png','Cool');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('3',':S','hmm.png','Hmm');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('4','lol','lol.png','lol');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('5',':(','mad.png','Mad');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('6',':|','neutral.png','Neutral');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('7',':roll:','roll.png','RollEyes');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('8',':*(','sad.png','Sad');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('9',':)','smile.png','Smilie');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('10',':P','tongue.png','Tongue');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('11',';)','wink.png','Wink');
INSERT INTO `amx_smilies` (`id`,`code`,`url`,`name`) VALUES ('12',':O','yikes.png','Yikes');


########################################
# table: amx_usermenu
########################################

CREATE TABLE IF NOT EXISTS `amx_usermenu` (
 `id` int(11) NULL auto_increment,
 `pos` int(11) NULL,
 `activ` tinyint(1) NULL DEFAULT '1',
 `lang_key` varchar(64) NULL,
 `url` varchar(64) NULL,
 `lang_key2` varchar(64) NULL,
 `url2` varchar(64) NULL,
PRIMARY KEY (id, bid, id, id, id, id, fid, level, id, id, id, id, id, id, id, id),
KEY steamid (steamid),
KEY player_id (player_id, player_id));

INSERT INTO `amx_usermenu` (`id`,`pos`,`activ`,`lang_key`,`url`,`lang_key2`,`url2`) VALUES ('1','0','1','_HOME','index.php','_HOME','index.php');
INSERT INTO `amx_usermenu` (`id`,`pos`,`activ`,`lang_key`,`url`,`lang_key2`,`url2`) VALUES ('2','1','1','_BANLIST','ban_list.php','_BANLIST','ban_list.php');
INSERT INTO `amx_usermenu` (`id`,`pos`,`activ`,`lang_key`,`url`,`lang_key2`,`url2`) VALUES ('3','2','1','_ADMLIST','admin_list.php','_ADMLIST','admin_list.php');
INSERT INTO `amx_usermenu` (`id`,`pos`,`activ`,`lang_key`,`url`,`lang_key2`,`url2`) VALUES ('4','3','1','_SEARCH','search.php','_SEARCH','search.php');
INSERT INTO `amx_usermenu` (`id`,`pos`,`activ`,`lang_key`,`url`,`lang_key2`,`url2`) VALUES ('5','4','1','_SERVER','view.php','_SERVER','view.php');
INSERT INTO `amx_usermenu` (`id`,`pos`,`activ`,`lang_key`,`url`,`lang_key2`,`url2`) VALUES ('6','5','1','_LOGIN','login.php','_LOGOUT','logout.php');


########################################
# table: amx_webadmins
########################################

CREATE TABLE IF NOT EXISTS `amx_webadmins` (
 `id` int(12) NULL auto_increment,
 `username` varchar(32) NULL,
 `password` varchar(32) NULL,
 `level` int(11) NULL DEFAULT '99',
 `logcode` varchar(64) NULL,
 `email` varchar(64) NULL,
 `last_action` int(11) NULL,
 `try` int(1) NULL,
PRIMARY KEY (id, bid, id, id, id, id, fid, level, id, id, id, id, id, id, id, id, id),
KEY steamid (steamid),
KEY player_id (player_id, player_id),
UNIQUE username (username, email));

INSERT INTO `amx_webadmins` (`id`,`username`,`password`,`level`,`logcode`,`email`,`last_action`,`try`) VALUES ('1','admin','c96dd568316deb9d8c7dec73b4c27cbb','1','jhl1hm1gcrio26rq75rv8h8rq3','admin@domain.com','1504117924','0');


########################################
# table: amx_webconfig
########################################

CREATE TABLE IF NOT EXISTS `amx_webconfig` (
 `id` int(11) NULL auto_increment,
 `cookie` varchar(32) NULL,
 `bans_per_page` int(11) NULL,
 `design` varchar(32) NULL,
 `banner` varchar(64) NULL,
 `banner_url` varchar(128) NULL,
 `default_lang` varchar(32) NULL,
 `start_page` varchar(64) NULL,
 `show_comment_count` int(1) NULL DEFAULT '1',
 `show_demo_count` int(1) NULL DEFAULT '1',
 `show_kick_count` int(1) NULL DEFAULT '1',
 `demo_all` int(1) NULL,
 `comment_all` int(1) NULL,
 `use_capture` int(1) NULL DEFAULT '1',
 `max_file_size` int(11) NULL DEFAULT '2',
 `file_type` varchar(64) NULL DEFAULT 'dem,zip,rar,jpg,gif',
 `auto_prune` int(1) NULL,
 `max_offences` smallint(6) NULL DEFAULT '10',
 `max_offences_reason` varchar(128) NULL DEFAULT 'max offences reached',
 `use_demo` int(1) NULL DEFAULT '1',
 `use_comment` int(1) NULL DEFAULT '1',
PRIMARY KEY (id, bid, id, id, id, id, fid, level, id, id, id, id, id, id, id, id, id, id),
KEY steamid (steamid),
KEY player_id (player_id, player_id),
UNIQUE username (username, email));

INSERT INTO `amx_webconfig` (`id`,`cookie`,`bans_per_page`,`design`,`banner`,`banner_url`,`default_lang`,`start_page`,`show_comment_count`,`show_demo_count`,`show_kick_count`,`demo_all`,`comment_all`,`use_capture`,`max_file_size`,`file_type`,`auto_prune`,`max_offences`,`max_offences_reason`,`use_demo`,`use_comment`) VALUES ('1','amxbans','50','default','amxbans.png','http://www.amxbans.net','english','view.php','1','1','1','0','0','1','2','dem,zip,rar,jpg,gif,png','0','10','max offences reached','1','1');


