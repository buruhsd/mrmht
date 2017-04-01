-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2017 at 05:12 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `murahamat`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Caden Willms IV', 'Alice. \'I don\'t even know what to do next, when suddenly a footman in livery, with a growl, And concluded the banquet--] \'What IS the same thing as a cushion, resting their elbows on it, or at least.', '2017-04-01 03:39:46', '2017-04-01 03:39:46'),
(2, 'Lily Brakus', 'Dormouse indignantly. However, he consented to go on. \'And so these three weeks!\' \'I\'m very sorry you\'ve been annoyed,\' said Alice, in a ring, and begged the Mouse heard this, it turned a.', '2017-04-01 03:39:46', '2017-04-01 03:39:46'),
(3, 'Ms. Ines Keeling', 'March Hare said to the Knave. The Knave shook his head mournfully. \'Not I!\' he replied. \'We quarrelled last March--just before HE went mad, you know--\' \'But, it goes on \"THEY ALL RETURNED FROM HIM.', '2017-04-01 03:39:46', '2017-04-01 03:39:46'),
(4, 'Danny Jerde', 'Either the well was very uncomfortable, and, as the door and found in it about four feet high. \'Whoever lives there,\' thought Alice, \'they\'re sure to make herself useful, and looking at it again:.', '2017-04-01 03:39:46', '2017-04-01 03:39:46'),
(5, 'Rocio Leffler Jr.', 'CHAPTER X. The Lobster Quadrille is!\' \'No, indeed,\' said Alice. \'I don\'t like it, yer honour, at all, as the whole thing, and she was nine feet high. \'Whoever lives there,\' thought Alice, \'shall I.', '2017-04-01 03:39:47', '2017-04-01 03:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(30, '2014_10_12_000000_create_users_table', 1),
(31, '2014_10_12_100000_create_password_resets_table', 1),
(32, '2017_04_01_042650_create_produts_table', 1),
(33, '2017_04_01_054504_create_categories_table', 1),
(34, '2017_04_01_060626_make_products_table', 1),
(35, '2017_04_01_063744_create_promos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `merk` text COLLATE utf8_unicode_ci NOT NULL,
  `price1` double(8,2) NOT NULL,
  `price2` double(8,2) DEFAULT NULL,
  `price3` double(8,2) DEFAULT NULL,
  `price4` double(8,2) DEFAULT NULL,
  `price5` double(8,2) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `merk`, `price1`, `price2`, `price3`, `price4`, `price5`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Natalie Greenholt', 'It was the White Rabbit, with a shiver. \'I beg your pardon,\' said Alice doubtfully: \'it means--to--make--anything--prettier.\' \'Well, then,\' the Cat in a deep voice, \'What are tarts made of?\' Alice.', 'Elisha Conroy', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(2, 'Emmanuel Legros', 'Mock Turtle, \'but if you\'ve seen them so often, of course had to stop and untwist it. After a while, finding that nothing more to do it.\' (And, as you liked.\' \'Is that all?\' said Alice, \'and if it.', 'Hollis Torp', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(3, 'Coty Rice', 'Pray how did you manage on the trumpet, and then sat upon it.) \'I\'m glad they\'ve begun asking riddles.--I believe I can say.\' This was not even room for this, and after a minute or two to think that.', 'Hollie Medhurst', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(4, 'Prof. Arthur Williamson IV', 'Cat\'s head with great emphasis, looking hard at Alice as she could even make out at the thought that it made Alice quite jumped; but she felt a little girl she\'ll think me for asking! No, it\'ll.', 'Willis Kessler', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(5, 'Luther McKenzie', 'And the Eaglet bent down its head impatiently, and walked two and two, as the rest waited in silence. At last the Caterpillar took the least idea what you\'re at!\" You know the way YOU manage?\' Alice.', 'Alberta Beahan', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(6, 'Robyn Jones', 'I\'ve nothing to do: once or twice, and shook itself. Then it got down off the subjects on his flappers, \'--Mystery, ancient and modern, with Seaography: then Drawling--the Drawling-master was an old.', 'Eli Ward', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(7, 'Justus Willms II', 'Those whom she sentenced were taken into custody by the whole pack rose up into the garden, called out in a hot tureen! Who for such dainties would not allow without knowing how old it was, and, as.', 'Dr. Edwardo Welch MD', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(8, 'Nannie Jacobson I', 'Alice said to herself, \'I wonder what was going to begin at HIS time of life. The King\'s argument was, that if you drink much from a Caterpillar The Caterpillar was the Cat again, sitting on the.', 'Mia Wisoky', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(9, 'Prof. Marilyne Stiedemann Jr.', 'I shall be punished for it flashed across her mind that she was shrinking rapidly; so she tried another question. \'What sort of life! I do wonder what they WILL do next! If they had at the end.\' \'If.', 'Janick Cole', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(10, 'Harley Considine', 'Soup, so rich and green, Waiting in a low voice, \'Why the fact is, you see, Miss, this here ought to eat the comfits: this caused some noise and confusion, as the Lory hastily. \'I thought it over.', 'Prof. Brock Stracke IV', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(11, 'Catherine Pfannerstill', 'She was walking hand in hand with Dinah, and saying to her great disappointment it was over at last, and managed to swallow a morsel of the moment how large she had asked it aloud; and in another.', 'Ms. Cassie Blick Jr.', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(12, 'Alejandra Pagac', 'Alice remarked. \'Right, as usual,\' said the Hatter: \'let\'s all move one place on.\' He moved on as he shook his grey locks, \'I kept all my limbs very supple By the use of a book,\' thought Alice to.', 'Tiffany Kuvalis', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(13, 'Prof. Kavon Wilkinson', 'Dormouse,\' the Queen merely remarking that a moment\'s delay would cost them their lives. All the time they were lying on their faces, and the baby with some curiosity. \'What a funny watch!\' she.', 'Vaughn Bauch', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(14, 'Brook Lang', 'Alice could see, when she first saw the Mock Turtle drew a long breath, and said \'What else had you to learn?\' \'Well, there was room for this, and after a few minutes to see how he can EVEN finish,.', 'Furman Cummerata', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(15, 'Lambert Gleason', 'They had a bone in his turn; and both footmen, Alice noticed, had powdered hair that WOULD always get into that lovely garden. First, however, she again heard a little glass box that was said, and.', 'Miss Ofelia Keeling I', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(16, 'Orlo Nicolas', 'King. (The jury all looked so good, that it might appear to others that what you mean,\' said Alice. \'Nothing WHATEVER?\' persisted the King. \'It began with the tea,\' the Hatter and the shrill voice.', 'Ervin Stanton', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:47', '2017-04-01 03:39:47'),
(17, 'Prof. Rosie Hoeger', 'Puss,\' she began, in a low voice, \'Your Majesty must cross-examine THIS witness.\' \'Well, if I was, I shouldn\'t want YOURS: I don\'t like them!\' When the procession came opposite to Alice, and.', 'Miss Emie Ferry MD', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:48', '2017-04-01 03:39:48'),
(18, 'Prof. Chesley Powlowski V', 'Alice could see it pop down a good opportunity for making her escape; so she sat down in a deep, hollow tone: \'sit down, both of you, and must know better\'; and this he handed over to herself, \'I.', 'Ms. Micaela Willms III', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:48', '2017-04-01 03:39:48'),
(19, 'Rory Kozey', 'Dormouse say?\' one of the way I want to see if she had looked under it, and found that her neck would bend about easily in any direction, like a telescope.\' And so it was in March.\' As she said.', 'Ryann Dach', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:48', '2017-04-01 03:39:48'),
(20, 'Murl Corkery', 'Alice. \'Exactly so,\' said Alice. \'Come, let\'s try the experiment?\' \'HE might bite,\' Alice cautiously replied: \'but I haven\'t been invited yet.\' \'You\'ll see me there,\' said the Hatter. \'It isn\'t.', 'Lolita McDermott', 100000.00, 345909.00, 47777.00, 555.00, 211111.00, 1, '2017-04-01 03:39:48', '2017-04-01 03:39:48'),
(21, 'assfsf', NULL, 'asasd', 123.00, 231234.00, NULL, NULL, NULL, 1, '2017-04-01 07:56:27', '2017-04-01 07:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `produts`
--

CREATE TABLE `produts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `merk` text COLLATE utf8_unicode_ci NOT NULL,
  `price1` double(8,2) NOT NULL,
  `price2` double(8,2) DEFAULT NULL,
  `price3` double(8,2) DEFAULT NULL,
  `price4` double(8,2) DEFAULT NULL,
  `price5` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Neoma Bernier', 'Hatter continued, \'in this way:-- \"Up above the world you fly, Like a tea-tray in the last few minutes, and she jumped up in a shrill, loud voice, and the other players, and shouting \'Off with his.', 'aaaa.jpg', '2017-04-01 03:39:48', '2017-04-01 03:39:48'),
(2, 'Nia Zemlak', 'Alice; \'that\'s not at all this grand procession, came THE KING AND QUEEN OF HEARTS. Alice was very nearly carried it out loud. \'Thinking again?\' the Duchess sang the second thing is to find that she.', 'aaaa.jpg', '2017-04-01 03:39:48', '2017-04-01 03:39:48'),
(3, 'Elian Rosenbaum', 'Miss, we\'re doing our best, afore she comes, to--\' At this moment the door and went by without noticing her. Then followed the Knave \'Turn them over!\' The Knave did so, very carefully, remarking, \'I.', 'aaaa.jpg', '2017-04-01 03:39:48', '2017-04-01 03:39:48'),
(4, 'Mallie Johnston', 'Has lasted the rest waited in silence. Alice was not quite like the Queen?\' said the Cat, as soon as there was mouth enough for it to half-past one as long as I tell you, you coward!\' and at last.', 'aaaa.jpg', '2017-04-01 03:39:48', '2017-04-01 03:39:48'),
(5, 'Veda Batz', 'It did so indeed, and much sooner than she had not gone much farther before she got to the cur, \"Such a trial, dear Sir, With no jury or judge, would be wasting our breath.\" \"I\'ll be judge, I\'ll be.', 'aaaa.jpg', '2017-04-01 03:39:48', '2017-04-01 03:39:48'),
(6, 'asd', 'dsf', 'data:image/jpeg;base64,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', '2017-04-01 03:40:19', '2017-04-01 03:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `produts`
--
ALTER TABLE `produts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `produts`
--
ALTER TABLE `produts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
