-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 172.17.0.1:3306
-- Generation Time: Jul 18, 2026 at 05:20 AM
-- Server version: 11.8.1-MariaDB-4deepin1
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yayasan_khalifah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(100) NOT NULL DEFAULT 'Indonesia',
  `city` varchar(100) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) UNSIGNED NOT NULL,
  `title_id` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `content_id` text NOT NULL,
  `content_en` text NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title_id`, `title_en`, `content_id`, `content_en`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Penerimaan Peserta Didik Baru (PPDB) T.A. 2026/2027 Resmi Dibuka', 'New Student Admission (PPDB) A.Y. 2026/2027 is Officially Open', 'Informasi pendaftaran siswa baru untuk jenjang TK, SD, SMP, dan SMA terpadu dapat diakses melalui menu Pendaftaran.', 'Registration information for new students of TK, SD, SMP, and SMA levels can be accessed via the Admissions menu.', '2026-07-01', 1, '2026-07-17 01:47:16', '2026-07-17 01:47:16'),
(2, 'Jadwal Libur Semester Ganjil', 'Odd Semester Holiday Schedule', 'Libur semester ganjil dimulai dari tanggal 20 Desember hingga 3 Januari. Kegiatan belajar mengajar aktif kembali 4 Januari.', 'The odd semester holiday starts from December 20th to January 3rd. Active teaching and learning activities resume on January 4th.', '2026-12-10', 1, '2026-07-17 01:47:16', '2026-07-17 01:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) UNSIGNED NOT NULL,
  `title_id` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `subtitle_id` varchar(255) DEFAULT NULL,
  `subtitle_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `list_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title_id`, `title_en`, `subtitle_id`, `subtitle_en`, `image`, `link`, `list_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mencetak Generasi Qur\'ani & Unggul', 'Nurturing Quranic & Excellent Generations', 'Selamat Datang di Yayasan Khalifah Latif Cendaka', 'Welcome to Khalifah Latif Cendaka Foundation', 'images/bangunan/gedung.webp', 'admission', 1, 1, '2026-07-17 01:47:16', '2026-07-17 01:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) UNSIGNED NOT NULL,
  `title_id` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content_id` text NOT NULL,
  `content_en` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `author_id` int(11) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title_id`, `title_en`, `slug`, `content_id`, `content_en`, `image`, `category_id`, `author_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pendidikan Karakter Berbasis Karakter Islami di Sekolah', 'Character Education Based on Islamic Character in Schools', 'pendidikan-karakter-berbasis-karakter-islami-di-sekolah', '<p>Pendidikan karakter di sekolah sangat penting untuk membekali generasi masa depan dengan moralitas yang kokoh.</p>', '<p>Character education in schools is crucial to equip future generations with robust morality.</p>', 'uploads/1784345373_53042acd99f25e868b5a.webp', 1, 1, 1, '2026-07-17 01:47:16', '2026-07-18 03:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name_id` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL DEFAULT '#0d6efd',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name_id`, `name_en`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Pendidikan', 'Education', '#0d6efd', '2026-07-17 01:47:16', '2026-07-17 01:47:16'),
(2, 'Kegiatan', 'Activity', '#ffc107', '2026-07-17 01:47:16', '2026-07-17 01:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) UNSIGNED NOT NULL,
  `title_id` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `venue_id` varchar(255) NOT NULL,
  `venue_en` varchar(255) NOT NULL,
  `content_id` text NOT NULL,
  `content_en` text NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title_id`, `title_en`, `venue_id`, `venue_en`, `content_id`, `content_en`, `date`, `time`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Penerimaan & Orientasi Santri Baru (PPDB) T.A. 2026/2027', 'Admission & Orientation of New Students (PPDB) A.Y. 2026/2027', 'Aula Utama Kampus Yayasan Khalifah Latif Cendaka', 'Main Hall of Khalifah Latif Cendaka Foundation Campus', 'Penerimaan resmi dan masa pengenalan lingkungan sekolah (MPLS) bagi seluruh santri dan siswa baru tingkat TKIT, SDIT, SMPIT, dan SMAIT.', 'Official acceptance and school environment introduction period (MPLS) for all new students at TKIT, SDIT, SMPIT, and SMAIT levels.', '2026-07-20', '08.00 - 12.00 WIB', 'images/bangunan/gedung.webp', 1, '2026-07-17 01:47:16', '2026-07-17 01:47:16'),
(2, 'Tabligh Akbar & Doa Bersama Menyambut Hari Kemerdekaan RI', 'Grand Islamic Lecture & Joint Prayer for Independence Day', 'Masjid Jamie Khalifah Latif Cendaka', 'Jamie Mosque of Khalifah Latif Cendaka', 'Kajian umum kebangsaan bersama asatidzah dan tokoh masyarakat, dilanjutkan dengan doa bersama demi keselamatan bangsa.', 'National public study with Islamic scholars and community figures, followed by a joint prayer for the nation\'s safety.', '2026-08-15', '19.30 WIB - Selesai', 'images/bangunan/gedung.webp', 1, '2026-07-17 01:47:16', '2026-07-17 01:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `extracurriculars`
--

CREATE TABLE `extracurriculars` (
  `id` int(11) UNSIGNED NOT NULL,
  `title_id` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `description_id` text NOT NULL,
  `description_en` text NOT NULL,
  `icon` varchar(100) NOT NULL DEFAULT 'ri-star-line',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extracurriculars`
--

INSERT INTO `extracurriculars` (`id`, `title_id`, `title_en`, `description_id`, `description_en`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pramuka Terpadu', 'Integrated Scouting', 'Melatih kedisiplinan, kemandirian, kepemimpinan, dan kerja sama tim.', 'Training discipline, independence, leadership, and teamwork.', 'ri-compass-3-line', 1, '2026-07-17 01:47:16', '2026-07-17 01:47:16'),
(2, 'Seni Bela Diri', 'Martial Arts', 'Melatih fisik, ketangkasan diri, dan pertahanan diri Islami.', 'Training physical strength, agility, and Islamic self-defense.', 'ri-shield-user-line', 1, '2026-07-17 01:47:16', '2026-07-17 01:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `title_id` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title_id`, `title_en`, `image`, `category`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Praktek Laboratorium Sains', 'Science Lab Practice', 'images/gallery/gallery-thumb-02.webp', 'fasilitas', 1, '2026-07-17 01:47:16', '2026-07-17 01:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2026-07-17-085000', 'App\\Database\\Migrations\\CreateAllTables', 'default', 'App', 1784252834, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `key_name` varchar(100) NOT NULL,
  `key_value_id` text DEFAULT NULL,
  `key_value_en` text DEFAULT NULL,
  `group_name` varchar(50) NOT NULL DEFAULT 'general'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key_name`, `key_value_id`, `key_value_en`, `group_name`) VALUES
(1, 'site_name', 'Yayasan Khalifah Latif Cendaka', 'Khalifah Latif Cendaka Foundation', 'general'),
(2, 'phone', '+62-711-000-0000', '+62-711-000-0000', 'contact'),
(3, 'email', 'info@khalifah-latif.sch.id', 'info@khalifah-latif.sch.id', 'contact'),
(4, 'address', 'Jl. Khalifah Latif No. 1, Kota Palembang, Sumatera Selatan', 'Jl. Khalifah Latif No. 1, Palembang City, South Sumatra', 'contact'),
(5, 'maps_iframe', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3888361099684!2d104.72445831526425!3d-2.9888299411226463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75f1aa93574b%3A0xe21262d1e2170!2sPalembang!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3888361099684!2d104.72445831526425!3d-2.9888299411226463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75f1aa93574b%3A0xe21262d1e2170!2sPalembang!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid', 'contact'),
(6, 'facebook', 'https://facebook.com/khalifahlatif', 'https://facebook.com/khalifahlatif', 'social'),
(7, 'instagram', 'https://instagram.com/khalifahlatif', 'https://instagram.com/khalifahlatif', 'social'),
(8, 'youtube', 'https://youtube.com/khalifahlatif', 'https://youtube.com/khalifahlatif', 'social'),
(9, 'linkedin', 'https://linkedin.com/company/khalifahlatif', 'https://linkedin.com/company/khalifahlatif', 'social'),
(10, 'about_intro', 'Selamat datang di Yayasan Khalifah Latif Cendaka, lembaga pendidikan terpadu yang berkomitmen mencetak generasi unggul, berakhlak mulia, dan berdaya saing global.', 'Welcome to the Khalifah Latif Cendaka Foundation, an integrated educational institution committed to producing superior generations with noble character and global competitiveness.', 'about'),
(11, 'about_history', 'Yayasan Khalifah Latif Cendaka didirikan dengan visi besar untuk menyelenggarakan pendidikan berkualitas tinggi yang mengintegrasikan nilai-nilai Islam, ilmu pengetahuan modern, dan karakter unggul. Perjalanan kami dimulai dari tekad memberikan kontribusi nyata bagi masa depan umat dan bangsa.', 'The Khalifah Latif Cendaka Foundation was established with a grand vision to provide high-quality education integrating Islamic values, modern science, and outstanding character. Our journey began with a determination to make a tangible contribution to the future of the nation and the Ummah.', 'about'),
(12, 'about_vision', 'Menjadi lembaga pendidikan Islam terpadu yang terdepan dalam mencetak generasi unggul yang berakhlak mulia, cerdas, kreatif, dan berdaya saing global.', 'To be the leading integrated Islamic educational institution in producing superior generations of noble character, intelligent, creative, and globally competitive.', 'about'),
(13, 'about_mission_1', 'Menyelenggarakan pendidikan berkualitas berbasis nilai-nilai keislaman dan Al-Qur\'an.', 'Organizing high-quality education based on Islamic values and the Quran.', 'about'),
(14, 'about_mission_2', 'Mengembangkan bakat akademis dan non-akademis siswa secara optimal.', 'Optimally developing students\' academic and non-academic talents.', 'about'),
(15, 'about_mission_3', 'Membentuk karakter kepemimpinan yang berakhlak mulia dan berwawasan global.', 'Building leadership character with noble morals and a global mindset.', 'about'),
(16, 'operating_hours', 'Senin - Sabtu: 07.30 - 15.30 WIB', 'Monday - Saturday: 07:30 AM - 03:30 PM', 'general');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation_id` varchar(255) NOT NULL,
  `designation_en` varchar(255) NOT NULL,
  `description_id` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `list_order` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `designation_id`, `designation_en`, `description_id`, `description_en`, `photo`, `facebook`, `instagram`, `linkedin`, `list_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KH. Abdul Latif, Lc.', 'Ketua Dewan Pembina', 'Chairman of Advisory Board', 'Lulusan Universitas Islam Madinah, membina keislaman dan arah kebijakan kurikulum pesantren.', 'Graduate of Islamic University of Madinah, guiding Islamic values and pesantren curriculum policy.', NULL, '#', '#', '#', 1, 1, '2026-07-17 01:47:16', '2026-07-17 01:47:16'),
(2, 'Dr. H. Ahmad Dahlan, M.Pd.', 'Kepala Sekolah / Direktur Pendidikan', 'Principal / Director of Education', 'Doktor Manajemen Pendidikan, memimpin operasional akademis dan standarisasi mutu guru.', 'Doctor of Education Management, leading academic operations and teacher quality standardization.', NULL, '#', '#', '#', 2, 1, '2026-07-17 01:47:16', '2026-07-17 01:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation_id` varchar(255) NOT NULL,
  `designation_en` varchar(255) NOT NULL,
  `quote_id` text NOT NULL,
  `quote_en` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'general',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation_id`, `designation_en`, `quote_id`, `quote_en`, `image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dr. H. Khalifah Latif, M.Pd.', 'Ketua Yayasan', 'Chairman of the Foundation', 'Pendidikan di Yayasan kami didedikasikan untuk membentuk pemimpin masa depan yang kokoh secara keislaman, cemerlang dalam keilmuan sains modern, serta memiliki kepedulian sosial tinggi.', 'Education at our Foundation is dedicated to shaping future leaders who are strong in their Islamic faith, brilliant in modern science, and possess a high social awareness.', 'uploads/1784345319_6f17512ddb22d9377421.webp', 'foundation', 1, '2026-07-17 01:47:16', '2026-07-18 03:28:39'),
(2, 'Sarah Humaira', 'Alumni SMAIT 2022 - Mahasiswi ITB', 'Alumni of SMAIT 2022 - ITB Student', 'Belajar di SMAIT Khalifah Latif memberikan bekal akademis yang luar biasa sekaligus kematangan karakter Islam yang menjaga saya di dunia perkuliahan.', 'Studying at SMAIT Khalifah Latif provided an extraordinary academic background as well as a mature Islamic character that guides me through college life.', 'uploads/1784345329_08d5c64608a686c84648.webp', 'alumni', 1, '2026-07-17 01:47:16', '2026-07-18 03:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `tuition_fees`
--

CREATE TABLE `tuition_fees` (
  `id` int(11) UNSIGNED NOT NULL,
  `level_id` varchar(100) NOT NULL,
  `level_en` varchar(100) NOT NULL,
  `registration_fee` int(11) NOT NULL,
  `base_fee` int(11) NOT NULL,
  `monthly_spp` int(11) NOT NULL,
  `books_uniforms_fee` int(11) NOT NULL,
  `list_order` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuition_fees`
--

INSERT INTO `tuition_fees` (`id`, `level_id`, `level_en`, `registration_fee`, `base_fee`, `monthly_spp`, `books_uniforms_fee`, `list_order`, `created_at`, `updated_at`) VALUES
(4, 'SMA Islam Terpadu', 'Integrated Islamic Senior High School', 300000, 5500000, 450000, 1800000, 4, '2026-07-17 01:47:16', '2026-07-17 01:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'admin',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@khalifahlatif.or.id', '$2y$12$Ccdkg1HSV87vqJJT9tdMsOZkQPf.RsgSmA35AMoUVc8ZieQe4nDiq', 'admin', '2026-07-17 01:47:16', '2026-07-17 01:47:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key_name` (`key_name`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuition_fees`
--
ALTER TABLE `tuition_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tuition_fees`
--
ALTER TABLE `tuition_fees`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
