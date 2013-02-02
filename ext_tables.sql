#
# Table structure for table 'tx_pbsurvey_item'
#
CREATE TABLE tx_pbsurvey_item (
    uid int(11) DEFAULT '0' NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(10) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l18n_parent int(11) DEFAULT '0' NOT NULL,
    l18n_diffsource mediumblob NOT NULL,
    question_type int(11) unsigned DEFAULT '0' NOT NULL,
    question tinytext NOT NULL,
    question_alias tinytext NOT NULL,
    question_subtext text NOT NULL,
	page_title tinytext NOT NULL,
	page_introduction text NOT NULL,
    options_required tinyint(3) unsigned DEFAULT '0' NOT NULL,
    options_random tinyint(3) unsigned DEFAULT '0' NOT NULL,
    options_alignment int(11) unsigned DEFAULT '0' NOT NULL,
    options_minimum_responses int(11) DEFAULT '0' NOT NULL,
    options_maximum_responses int(11) DEFAULT '0' NOT NULL,
	options_row_heading_width int(11) DEFAULT '0' NOT NULL,
	rows text NOT NULL,
    answers text NOT NULL,
	answers_allow_additional tinyint(3) unsigned DEFAULT '0' NOT NULL,
	answers_text_additional tinytext NOT NULL,
    answers_type_additional tinyint(3) unsigned DEFAULT '0' NOT NULL,
    answers_none tinyint(3) unsigned DEFAULT '0' NOT NULL,
    textarea_width int(11) DEFAULT '0',
    textarea_height int(11) DEFAULT '0',
    selectbox_height int(11) DEFAULT '0',
	display_type tinyint(3) unsigned DEFAULT '0' NOT NULL,
	default_value_tf tinyint(3) unsigned DEFAULT '0' NOT NULL,
	default_value_yn tinyint(3) unsigned DEFAULT '0' NOT NULL,
	negative_first tinyint(3) unsigned DEFAULT '0' NOT NULL,
	default_value_txt tinytext NOT NULL,
	default_date int(11) DEFAULT '0' NOT NULL,
	default_value_num int(11) DEFAULT '0',
	beginning_number int(11) DEFAULT '0',
	ending_number int(11) DEFAULT '0',
	total_number int(11) DEFAULT '0',
	minimum_date int(11) DEFAULT '0',
	maximum_date int(11) DEFAULT '0',
	minimum_value int(11) DEFAULT '0',
	maximum_value int(11) DEFAULT '0',
	maximum_length int(11) DEFAULT '0',
	image blob NOT NULL,
	image_height int(11) DEFAULT '0',
	image_width int(11) DEFAULT '0',
	image_alignment tinyint(3) unsigned DEFAULT '0' NOT NULL,
	email tinyint(3) unsigned DEFAULT '0' NOT NULL,
	heading tinytext NOT NULL,
	html text NOT NULL,
	message text NOT NULL,
	conditions text NOT NULL,
	styleclass tinytext NOT NULL,
    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_pbsurvey_results'
#
CREATE TABLE tx_pbsurvey_results (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) unsigned DEFAULT '0' NOT NULL,
	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	user int(11) unsigned DEFAULT '0' NOT NULL,
	ip varchar(78) NOT NULL DEFAULT '',
	finished tinyint(4) unsigned DEFAULT '0' NOT NULL,
	begintstamp int(11) unsigned DEFAULT '0' NOT NULL,
	endtstamp int(11) unsigned DEFAULT '0' NOT NULL,
	history text,
	language_uid tinytext NOT NULL,
	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_pbsurvey_answers'
#
CREATE TABLE tx_pbsurvey_answers (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) unsigned DEFAULT '0' NOT NULL,
	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	result int(11) unsigned DEFAULT '0' NOT NULL,
	question int(11) unsigned DEFAULT '0' NOT NULL,
	row int(11) DEFAULT '0' NOT NULL,
	col int(11) unsigned DEFAULT '0' NOT NULL,
	answer text NOT NULL,
	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY parent (result)
);
