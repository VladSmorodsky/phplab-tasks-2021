<?php
/**
 * TODO
 *  Write DPO statements to create following tables:
 *
 *  # airports
 *   - id (unsigned int, autoincrement)
 *   - name (varchar)
 *   - code (varchar)
 *   - city_id (relation to the cities table)
 *   - state_id (relation to the states table)
 *   - address (varchar)
 *   - timezone (varchar)city_id
 *
 *  # cities
 *   - id (unsigned int, autoincrement)
 *   - name (varchar)
 *
 *  # states
 *   - id (unsigned int, autoincrement)
 *   - name (varchar)
 */

/** @var \PDO $pdo */
require_once './pdo_ini.php';

// cities
$sql = <<<'SQL'
CREATE TABLE `cities` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`)
);

CREATE TABLE `states` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci',
    PRIMARY KEY (`id`)
);

CREATE TABLE `airports` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) COLLATE 'utf8_general_ci',
    `code` VARCHAR(5),
    `city_id` INT(10) unsigned NOT NULL,
    `state_id` INT(10) unsigned NOT NULL,
    `address` VARCHAR(255),
    `timezone` VARCHAR(50),
    PRIMARY KEY (`id`),
    FOREIGN KEY (city_id) REFERENCES `cities`(`id`),
    FOREIGN KEY (state_id) REFERENCES `states`(`id`)
);
SQL;
$pdo->exec($sql);
