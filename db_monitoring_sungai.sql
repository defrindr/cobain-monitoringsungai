-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_09_18_090531_create_table_roles',	1),
(2,	'2014_10_12_000000_create_users_table',	1),
(3,	'2014_10_12_100000_create_password_resets_table',	1),
(4,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(5,	'2019_08_19_000000_create_failed_jobs_table',	1),
(6,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(7,	'2020_09_17_012336_create_table_provinces',	1),
(8,	'2020_09_17_012518_create_table_districts',	1),
(9,	'2020_09_17_013056_create_sub_districts',	1),
(10,	'2020_09_17_013057_create_table_villages',	1),
(11,	'2020_09_17_013255_create_agama',	1),
(12,	'2020_09_17_013256_create_table_families',	1),
(13,	'2020_09_17_013620_create_table_family_status',	1),
(14,	'2020_09_17_013651_create_table_blood_types',	1),
(15,	'2020_09_17_013651_create_table_jobs',	1),
(16,	'2020_09_17_013652_create_table_persons',	1),
(17,	'2020_09_17_021047_create_table_cctv',	1),
(18,	'2020_09_17_022953_create_table_family_house',	1),
(19,	'2020_09_17_023324_create_table_report_tags',	1),
(20,	'2020_09_17_023325_create_table_society_reports',	1),
(21,	'2020_09_17_033758_create_table_society_report_reponds',	1),
(22,	'2020_09_17_035458_create_table_fund_reports',	1),
(23,	'2020_09_17_035738_create_table_incoming_fund_categories',	1),
(24,	'2020_09_17_040542_create_table_outgoing_fund_categories',	1),
(25,	'2020_09_17_040634_create_table_outgoing_funds',	1),
(26,	'2020_09_17_041022_create_table_incoming_funds',	1),
(27,	'2020_09_17_041115_create_table_detail_incoming_funds',	1),
(28,	'2020_09_17_042515_create_table_detail_outgoing_funds',	1),
(29,	'2020_09_19_042229_create_table_notifications',	1),
(30,	'2020_09_19_045520_create_sessions_table',	1),
(31,	'2020_10_02_064725_create_user_apps',	1),
(32,	'2020_10_05_042234_create_settings',	1);

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `notifications` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1,	'Peringatan Air danau mulai meluap , warga diharap mengungsi',	'Pengambilan Upeti 2020 dapat dilakukan besok senin , tanggal 27 september 2020',	NULL,	'2020-10-13 06:01:19',	'2020-10-13 06:29:48');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1,	'Administrator',	'2020-10-13 06:01:19',	'2020-10-13 06:01:19'),
(2,	'Citizen',	'2020-10-13 06:01:19',	'2020-10-13 06:01:19');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('F9GVCctKnhhLxhVQGhgmvAFMk0GttnpkjkaOZ7N2',	NULL,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36',	'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNjF4N1hlVE0zM3kyY1IwUE1yNVZYMUF5UGtiVjl1SDBNcmZGOEk3MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3QvbW9uaXRvcmluZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvbW9uaXRvcmluZy9kYXNoYm9hcmQiO319',	1615534510);

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `app_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` decimal(20,16) NOT NULL,
  `longitude` decimal(20,16) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tb_master`;
CREATE TABLE `tb_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_master` (`id`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1,	-7.984777694990518,	111.89847904927025,	'2021-02-28 07:36:18',	'2021-03-11 11:39:34');

DROP TABLE IF EXISTS `tb_monitoring`;
CREATE TABLE `tb_monitoring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ketinggian_air` varchar(10) NOT NULL COMMENT 'in centimeters',
  `volume_baterai` varchar(10) NOT NULL COMMENT 'in volt',
  `sinyal` varchar(10) NOT NULL COMMENT 'in dbi',
  `trend_level_sungai` int(11) NOT NULL COMMENT 'in centimeters',
  `trend_voltase_baterai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_monitoring` (`id`, `ketinggian_air`, `volume_baterai`, `sinyal`, `trend_level_sungai`, `trend_voltase_baterai`, `created_at`) VALUES
(1,	'2/10',	'5/10',	'6/10',	23,	30,	'2021-03-12 04:02:46'),
(2,	'2/10',	'5/10',	'6/10',	23,	30,	'2021-03-12 04:02:46'),
(3,	'2/10',	'5/10',	'6/10',	23,	30,	'2021-03-12 04:02:46'),
(4,	'2/10',	'5/10',	'6/10',	23,	30,	'2021-03-12 04:02:46'),
(6,	'2/10',	'5/10',	'6/10',	23,	30,	'2021-03-12 04:02:46'),
(7,	'2/10',	'5/10',	'6/10',	26,	30,	'2021-03-12 04:02:46'),
(8,	'2/10',	'5/10',	'6/10',	26,	30,	'2021-03-12 04:02:46'),
(9,	'2/10',	'5/10',	'6/10',	26,	30,	'2021-03-12 04:02:46'),
(13,	'5/10',	'5/20',	'5/40',	5,	7,	'2021-03-12 05:28:38'),
(14,	'5/10',	'5/20',	'5/40',	100,	80,	'2021-03-12 05:30:40'),
(15,	'5/10',	'20/20',	'50/4',	100,	80,	'2021-03-12 05:31:58'),
(16,	'5/10',	'20/20',	'50/4',	100,	80,	'2021-03-12 05:34:05');

DROP TABLE IF EXISTS `token_confirm_accounts`;
CREATE TABLE `token_confirm_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `access_token` varchar(100) NOT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `token_confirm_accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1 = konfirmasi, 2 = nonaktif',
  `fcm_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified_by` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `role_id` (`role_id`),
  KEY `verified_by` (`verified_by`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`verified_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `no_hp`, `password`, `status`, `fcm_token`, `remember_token`, `verified_by`, `created_at`, `updated_at`, `verified_at`) VALUES
(54,	2,	'Defri Indra Mahardika',	'admin@mon.id',	NULL,	'$2y$10$NI0ZZo/C8t/dWz/.aYKVR.9AWAceerzFJuAcoDwFbOxL9P6SuOkuy',	1,	NULL,	NULL,	NULL,	'2020-12-25 02:13:42',	'2020-12-25 04:10:25',	NULL);

-- 2021-03-19 11:28:11
