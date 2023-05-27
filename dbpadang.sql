CREATE database IF NOT EXISTS dbkotapadang;

USE dbkotapadang;


CREATE TABLE IF NOT EXISTS `user` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`username` TEXT NOT NULL,
	`password` TEXT NOT NULL,
	`status` INT NOT NULL 
);

INSERT INTO user (username, password, status) VALUES 
('admin', 'admin', '0');


CREATE table info (
    `id` INT not null primary key,
    `wilayah` TEXT not null,
    `tk` INT not null,
    `sd` INT not null,
    `smp` INT not null,
    `sma` INT not null
);

INSERT INTO info (`id`, `wilayah`, `tk`, `sd`, `smp`, `sma`) VALUES
(1, 'Kec. Koto Tangah', 101, 69, 19, 7),
(2, 'Kec. Kuranji', 38, 59, 11, 5),
(3, 'Kec. Padang Timur', 32, 52, 13, 7),
(4, 'Kec. Lubuk Begalung', 42, 40, 6, 3),
(5, 'Kec. Padang Utara', 23, 34, 8, 7),
(6, 'Kec. Padang Barat', 20, 29, 15, 12),
(7, 'Kec. Padang Selatan', 10, 36, 8, 7),
(8, 'Kec. Nanggalo', 21, 27, 8, 4),
(9, 'Kec. Lubuk Kilangan', 24, 24, 6, 2),
(10, 'Kec. Pauh', 17, 24, 5, 4),
(11, 'Kec. Bungus Teluk Kabung', 6, 18, 3, 1);