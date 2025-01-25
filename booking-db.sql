-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Июл 09 2023 г., 15:42
-- Версия сервера: 5.7.34
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `booking-db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_13_080737_create_tbl_user_table', 1),
(6, '2023_06_13_092057_create_tbl_signin_table', 1),
(7, '2023_06_13_095208_create_tbl_signup_table', 1),
(8, '2023_06_14_050140_create_tbl_booking_table', 2),
(9, '2023_06_14_053652_create_tbl_booking2_table', 2),
(10, '2023_07_04_092522_table_tbl_userbook_create', 3),
(11, '2023_06_14_054047_create_tbl_bookingmore_table', 4),
(12, '2023_07_04_181625_create_tbl_package_table', 5),
(13, '2023_07_05_082315_create_tbl_package_table', 6),
(14, '2023_07_05_082656_create_tbl_bookingmore_table', 7),
(15, '2023_07_05_085344_create_tbl_signin_table', 8),
(16, '2023_07_05_085431_create_tbl_signup_table', 8),
(17, '2023_07_05_091734_create_tbl_user_comment_china_package_table', 9),
(18, '2023_07_05_091828_create_tbl_user_comment_thailand_package_table', 9),
(19, '2023_07_05_091918_create_tbl_user_comment_switzerland_package_table', 9),
(20, '2023_07_08_162139_add_user_id_to_tbl_bookingmore', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_bookingmore`
--

CREATE TABLE `tbl_bookingmore` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `s_request` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tbl_bookingmore`
--

INSERT INTO `tbl_bookingmore` (`id`, `user_id`, `name`, `email`, `start`, `country`, `amount`, `price`, `s_request`) VALUES
(1, 36, 'bugaga', 'bugaga@gmail.com', '2023-07-08', '3', 1, NULL, 'asdf');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `country`, `day`, `description`, `price`, `picture`) VALUES
(1, 'Switzerland', 7, 'Discover amazing places of the Switzerland', '3999.00', NULL),
(2, 'China', 14, 'Discover amazing places of the world with us', '2050.00', NULL),
(3, 'Thailand', 21, 'Discover amazing places of the world with us', '2350.00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_user_comment_china_package`
--

CREATE TABLE `tbl_user_comment_china_package` (
  `id` int(10) UNSIGNED NOT NULL,
  `china_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `china_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `china_website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `china_message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tbl_user_comment_china_package`
--

INSERT INTO `tbl_user_comment_china_package` (`id`, `china_name`, `china_email`, `china_website`, `china_message`) VALUES
(1, 'kasiet', 'kasiet@gmail.com', 'fjnhb', 'dfrgtnyjmku'),
(2, 'kasieterj', 'kasiet@gmail.com', 'fjnhb', 'd'),
(3, 'heng', 'heng@gmail.com', 'dsfdgb', 'dsfbg'),
(4, 'hengfbg', 'heng@gmail.com', 'dsfdgb', 'dsfbg'),
(5, 'hengfbg', 'heng@gmail.com', 'dsfdgb', 'dsfbg'),
(6, 'hengfbg', 'heng@gmail.com', 'dsfdgb', 'dsfbg'),
(7, 'sal', 'sal@gmail.com', 'dfbg', 'dsfdbg'),
(8, 'df', 'dd@gmail.com', 'dsg', 'csvdbf'),
(9, 'John Doe', 'John@gmail.com', 'asdg', 'fsdgf'),
(10, 'heng', 'kasiet@gmail.com', 'fjnhb', 'g'),
(11, 'heng', 'heng@gmail.com', 'swdefgrth', 'sdfgnhmj'),
(12, 'hengfbg', 'kasiet@gmail.com', 'dfdvgnj', 'vfbghmj'),
(13, 'kasieterj', 'heng@gmail.com', 'ertbh', 'fgrbdhntjy'),
(14, 'kvfg', 'vfklmgj@gmail.com', 'defvg', 'vdfg');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_user_comment_switzerland_package`
--

CREATE TABLE `tbl_user_comment_switzerland_package` (
  `id` int(10) UNSIGNED NOT NULL,
  `switzerland_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `switzerland_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `switzerland_website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `switzerland_message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_user_comment_thailand_package`
--

CREATE TABLE `tbl_user_comment_thailand_package` (
  `id` int(10) UNSIGNED NOT NULL,
  `thailand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thailand_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thailand_website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thailand_message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tbl_user_comment_thailand_package`
--

INSERT INTO `tbl_user_comment_thailand_package` (`id`, `thailand_name`, `thailand_email`, `thailand_website`, `thailand_message`) VALUES
(1, 'wefgr', 'dwfegr@gmail.com', 'vfg', 'vdbgh');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(33, 'sal', 'sal@gmail.com', NULL, '$2y$10$po4afsr5xfWYk7FqNnFf9uvd/PByDwz7kNvBqUGC0ztZLvsUhRbuW', NULL, '2023-07-09 02:29:13', '2023-07-09 02:29:13'),
(34, 'lucky', 'lucky@gmail.com', NULL, '$2y$10$USnXEd1eLuBtJeuP5Pl5ju7z4osKM.wOJgCPK0sxBFkJ7JT969pga', NULL, '2023-07-09 02:35:21', '2023-07-09 02:35:21'),
(35, 'jaja', 'jaja@gmail.com', NULL, '$2y$10$Dlf4gNN3vGrAT0B0NMNFKO4aLYGAGJuJ3wiPvxISBssVeDRsFIQnq', NULL, '2023-07-09 02:35:52', '2023-07-09 02:35:52'),
(36, 'bugaga', 'bugaga@gmail.com', NULL, '$2y$10$SRPjMQ.7uZ2Qyd0XaHwUn.l5IV1R1X04mmXRsi34isNIkFLGpVi/q', NULL, '2023-07-09 02:52:06', '2023-07-09 02:52:06'),
(37, 'hehe', 'hehe@gmail.com', NULL, '$2y$10$/m/NT1Myfn2ahOU3LAH3Tu7Ul1T7sfWMqGgsttkvrcq4nUx2c9L1y', NULL, '2023-07-09 08:19:32', '2023-07-09 08:19:32');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `tbl_bookingmore`
--
ALTER TABLE `tbl_bookingmore`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_bookingmore_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_user_comment_china_package`
--
ALTER TABLE `tbl_user_comment_china_package`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_user_comment_switzerland_package`
--
ALTER TABLE `tbl_user_comment_switzerland_package`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_user_comment_thailand_package`
--
ALTER TABLE `tbl_user_comment_thailand_package`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tbl_bookingmore`
--
ALTER TABLE `tbl_bookingmore`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tbl_user_comment_china_package`
--
ALTER TABLE `tbl_user_comment_china_package`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `tbl_user_comment_switzerland_package`
--
ALTER TABLE `tbl_user_comment_switzerland_package`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `tbl_user_comment_thailand_package`
--
ALTER TABLE `tbl_user_comment_thailand_package`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tbl_bookingmore`
--
ALTER TABLE `tbl_bookingmore`
  ADD CONSTRAINT `tbl_bookingmore_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
