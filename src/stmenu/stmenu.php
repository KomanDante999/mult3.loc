ctmenu - menu table
===================
id
title

CREATE TABLE IF NOT EXISTS "ctmenu" (
"id" INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
"title" VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
PRIMARY KEY ("id") USING BTREE
)
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB
;

CREATE TABLE IF NOT EXISTS ctmenu (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci'
) COLLATE='utf8mb4_unicode_ci' ENGINE=InnoDB;