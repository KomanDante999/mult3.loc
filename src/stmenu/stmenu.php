ctmenu - menu table
===================
id
title

CREATE TABLE IF NOT EXISTS ctmenu (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci'
) COLLATE='utf8mb4_unicode_ci' ENGINE=InnoDB;

ctmenu_link - menu table
=========================
id
menu_id
parent_id

CREATE TABLE IF NOT EXISTS ctmenu_link (
id INT AUTO_INCREMENT PRIMARY KEY,
menu_id INT(10) UNSIGNED NOT NULL,
parent_id INT(10) UNSIGNED NOT NULL DEFAULT 0
) COLLATE='utf8mb4_unicode_ci' ENGINE=InnoDB;


ctmenu_link_description - menu_description table
================================================
menu_link_id
language_id
title
link

CREATE TABLE IF NOT EXISTS ctmenu_link_description (
menu_link_id INT(10) UNSIGNED NOT NULL,
language_id INT(10) UNSIGNED NOT NULL,
title VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
link VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
PRIMARY KEY (menu_link_id, language_id) USING BTREE
) COLLATE='utf8mb4_unicode_ci' ENGINE=InnoDB;