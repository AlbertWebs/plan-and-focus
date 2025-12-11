-- SQLite version converted from MySQL dump
-- Original file: designek_pnf.sql

-- Table structure for table `cache`
CREATE TABLE `cache` (
  `key` TEXT NOT NULL PRIMARY KEY,
  `value` TEXT NOT NULL,
  `expiration` INTEGER NOT NULL
);

-- Table structure for table `cache_locks`
CREATE TABLE `cache_locks` (
  `key` TEXT NOT NULL PRIMARY KEY,
  `owner` TEXT NOT NULL,
  `expiration` INTEGER NOT NULL
);

-- Table structure for table `failed_jobs`
CREATE TABLE `failed_jobs` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `uuid` TEXT NOT NULL UNIQUE,
  `connection` TEXT NOT NULL,
  `queue` TEXT NOT NULL,
  `payload` TEXT NOT NULL,
  `exception` TEXT NOT NULL,
  `failed_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Table structure for table `jobs`
CREATE TABLE `jobs` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `queue` TEXT NOT NULL,
  `payload` TEXT NOT NULL,
  `attempts` INTEGER NOT NULL,
  `reserved_at` INTEGER DEFAULT NULL,
  `available_at` INTEGER NOT NULL,
  `created_at` INTEGER NOT NULL
);

CREATE INDEX `jobs_queue_index` ON `jobs` (`queue`);

-- Table structure for table `job_batches`
CREATE TABLE `job_batches` (
  `id` TEXT NOT NULL PRIMARY KEY,
  `name` TEXT NOT NULL,
  `total_jobs` INTEGER NOT NULL,
  `pending_jobs` INTEGER NOT NULL,
  `failed_jobs` INTEGER NOT NULL,
  `failed_job_ids` TEXT NOT NULL,
  `options` TEXT,
  `cancelled_at` INTEGER DEFAULT NULL,
  `created_at` INTEGER NOT NULL,
  `finished_at` INTEGER DEFAULT NULL
);

-- Table structure for table `migrations`
CREATE TABLE `migrations` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `migration` TEXT NOT NULL,
  `batch` INTEGER NOT NULL
);

-- Dumping data for table `migrations`
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_29_100415_create_portfolios_table', 1);

-- Table structure for table `password_reset_tokens`
CREATE TABLE `password_reset_tokens` (
  `email` TEXT NOT NULL PRIMARY KEY,
  `token` TEXT NOT NULL,
  `created_at` DATETIME DEFAULT NULL
);

-- Table structure for table `portfolios`
CREATE TABLE `portfolios` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `title` TEXT NOT NULL,
  `slung` TEXT NOT NULL UNIQUE,
  `description` TEXT,
  `image` TEXT DEFAULT NULL,
  `created_at` DATETIME DEFAULT NULL,
  `updated_at` DATETIME DEFAULT NULL
);

-- Dumping data for table `portfolios`
INSERT INTO `portfolios` (`id`, `title`, `slung`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Megapipes Solutions Limited', 'megapipes-solutions-limited', 'Developed a PR process and campaign for Mega Pipes from its inception. The campaign focused on showcasing the WeHolite Solution for storm water and sanitation solutions. The WeHolite products include; road culverts, pottable water storage tanks (safe to drink water), manholes, sewerlines, irrigation channels, pump stations, rain water harvesting systems, packaged waste water treatement plans and other storm water and sanitation solutions. More recently, the work focuses on government and stakeholder relations. This involves engagement and collaboration with both national governments, county governments, public sector and the private sector.
', 'p16 LHS.jpg', NULL, NULL),
(2, 'DTB', 'dtb', 'Plan and Focus delivered the photography and production that involved producing high quality images and video content testimonials of customers, partners and stakeholders that was used in the DTB 2024 Integrated Report and Financial statements.', 'dtb-1280x820-1.webp', NULL, NULL),
(3, 'Deloitte East Africa', 'deloitte-east-africa', 'Plan and Focus was subcontracted for the writing and design for the DTB 2023 Integrated Report and Financial statements and 2024 Integrated Report and Financial statements. the work involved managing multiple stakeholders to get the right content for the report and implementing a design process that delivered outstanding work. the DTB 2023 integrated report and financial statements, won the 1st runner up award in the Financial Reporting Excellence Awards (FiRe awards). (Link)', 'Deloitte-1702511385.jpeg', NULL, NULL),
(4, 'NGAAF', 'ngaaf', 'Plan and Focus developed the NGAAF strategic plan 2023/24 - 2027/28. The work involved copy review and validation, and design. Plan and Focus also delivered the updated comprehensive brand identity, standards and guidelines for NGAAF including key project sub identites and county.', 'ngaaf.png', NULL, NULL),
(5, 'Kenya Bankers Association.', 'Kenya-bankers-association', 'Plan and Focus delivered the copy review, validation and design of the IFRS S1 & IFRS S2 Disclosures Reporting Template for Banks by the Kenya Bankers Association. This is the first industry disclosures reporting template developed in Kenya.', 'kba.png', NULL, NULL),
(6, 'Alternatives Africa', 'alternatives-africa', 'Plan and Focus delivered the design and branding for the Indo-Kenya AgroKenya food and processing expo in 2020. We also delivered the social media campaign that built awareness and attendance for the expo. Delivering a virtual expo was an experience that stretched us into a new space in unprecedented times - in the height of the COVID lockdown.
', 'BIG-4-S2-9th-Oct-2018-21.jpg', NULL, NULL);

-- Table structure for table `sessions`
CREATE TABLE `sessions` (
  `id` TEXT NOT NULL PRIMARY KEY,
  `user_id` INTEGER DEFAULT NULL,
  `ip_address` TEXT DEFAULT NULL,
  `user_agent` TEXT,
  `payload` TEXT NOT NULL,
  `last_activity` INTEGER NOT NULL
);

CREATE INDEX `sessions_user_id_index` ON `sessions` (`user_id`);
CREATE INDEX `sessions_last_activity_index` ON `sessions` (`last_activity`);

-- Table structure for table `users`
CREATE TABLE `users` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `name` TEXT NOT NULL,
  `email` TEXT NOT NULL UNIQUE,
  `email_verified_at` DATETIME DEFAULT NULL,
  `password` TEXT NOT NULL,
  `remember_token` TEXT DEFAULT NULL,
  `created_at` DATETIME DEFAULT NULL,
  `updated_at` DATETIME DEFAULT NULL
);

