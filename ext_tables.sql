CREATE TABLE tt_content (
    tx_cardcontent_template int(11) DEFAULT '0' NOT NULL,
    tx_cardcontent_cropratio varchar(25),
    tx_cardcontent_link tinytext,
    tx_cardcontent_linktext tinytext,
);

CREATE TABLE sys_file_reference (
    tx_cardcontent_bgplacement tinytext,
);
