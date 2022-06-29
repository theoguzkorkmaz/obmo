-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Haz 2022, 14:41:53
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `obmo`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_navbars`
--

CREATE TABLE `admin_navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ismenu` tinyint(1) NOT NULL DEFAULT 0,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admin_navbars`
--

INSERT INTO `admin_navbars` (`id`, `ad`, `icon`, `link`, `icerik`, `ismenu`, `admin`, `created_at`, `updated_at`) VALUES
(2, 'Sayfalar', 'fas fa-pager', '/admin/haber/haber_sayfas', 'Haber sayfa işlemleri için tıklayınız.', 0, 1, '2022-06-04 11:25:46', '2022-06-05 20:02:57'),
(3, 'Haber', 'fas fa-newspaper', '/admin/haber/habers', 'Admin haber işlemleri için tıklayınız!', 0, 1, '2022-06-05 20:03:31', '2022-06-05 20:03:31'),
(4, 'Kategori', 'fas fa-pager', '/admin/haber/haber_kategoris', 'Admin haber kategori işlemleri için tıklayınız!', 0, 1, '2022-06-05 20:04:42', '2022-06-05 20:16:01'),
(5, 'Topbar', 'fas fa-paint-brush', '/admin/haber/haber_topbars', 'Admin haber topbar işlemleri için tıklayınız!', 0, 1, '2022-06-05 20:05:31', '2022-06-05 20:05:31'),
(6, 'Yorum', 'fas fa-comment', '/admin/haber/haber_yorums', 'Admin haber yorum işlemleri için tıklayınız!', 0, 1, '2022-06-05 20:06:13', '2022-06-05 20:06:13'),
(7, 'Kategori', 'fas fa-cog', '/admin/egitim/egitim_kategoris', 'Admin eğitim kategoi işlemleri için tıklayınız!', 1, 1, '2022-06-05 20:06:51', '2022-06-05 20:06:51'),
(8, 'Eğitim', 'fas fa-pager', '/admin/egitim/egitims', 'Admin eğitim işlemleri için tıklayınız!', 1, 1, '2022-06-05 20:07:22', '2022-06-05 20:07:22'),
(9, 'İçerik', 'fas fa-pager', '/admin/egitim/egitim_iceriks', 'Admin eğitim içerik işlemleri için tıklayınız!', 1, 1, '2022-06-05 20:08:01', '2022-06-05 20:15:42'),
(10, 'Sınav', 'fas fa-question', '/admin/egitim/egitim_sinavs', 'Admin eğitim sınav işlemleri için tıklayınız!', 1, 1, '2022-06-05 20:08:28', '2022-06-05 20:08:28'),
(11, 'Yorum', 'fas fa-comment', '/admin/egitim/egitim_yorums', 'Admin eğitim yorum işlemleri için tıklayınız!', 1, 1, '2022-06-05 20:08:59', '2022-06-05 20:08:59'),
(12, 'Soru', 'fas fa-question', '/admin/egitim/egitim_sorus', 'Admin eğitim soru işlemleri için tıklayınız!', 1, 1, '2022-06-05 20:09:56', '2022-06-05 20:09:56'),
(13, 'Cevap', 'fab fa-angellist', '/admin/egitim/egitim_cevaps', 'Admin eğitim cevap işlemleri için tıklayınız!', 1, 1, '2022-06-05 20:10:52', '2022-06-05 20:10:52'),
(14, 'Puan', 'fas fa-seedling', '/admin/egitim/egitim_puans', 'Admin eğitim puan işlemleri için tıklayınız!', 1, 1, '2022-06-05 20:11:46', '2022-06-27 15:59:27'),
(15, 'Navbar', 'fas fa-pager', '/admin/egitim/egitim_navbars', 'Admin eğitim navbar işlemleri için tıklayınız!', 1, 1, '2022-06-05 20:12:18', '2022-06-05 20:12:18'),
(16, 'Sosyal mecra', 'fas fa-globe', '/admin/sosyals', 'Admin sosyal mecra işlemleri için tıklayınız!', 3, 1, '2022-06-05 20:12:56', '2022-06-05 20:12:56'),
(17, 'Navbar', 'fas fa-pager', '/admin/admin/admin_navbars', 'Admin eğitim kategoi işlemleri için tıklayınız!', 2, 1, '2022-06-05 20:13:31', '2022-06-05 20:13:31'),
(18, 'Adminlik', 'fas fa-cog', '/admin/adminlik', 'Adminlik işlemleri için tıklayınız!', 2, 1, '2022-06-05 20:14:08', '2022-06-05 20:14:08'),
(19, 'Eğitim', 'fas fa-user-graduate', '/egitim', 'Eğitim sayfasına gitmek için tıklayınız!', 3, 1, '2022-06-05 20:19:15', '2022-06-05 20:19:15'),
(20, 'Haber', 'fas fa-newspaper', '/haber', 'Haber sayfasına gitmek için tıklayınız!', 3, 1, '2022-06-05 20:19:43', '2022-06-05 20:19:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_cevaps`
--

CREATE TABLE `egitim_cevaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soru_id` bigint(20) UNSIGNED NOT NULL,
  `cevap_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dogru` tinyint(1) NOT NULL DEFAULT 0,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitim_cevaps`
--

INSERT INTO `egitim_cevaps` (`id`, `soru_id`, `cevap_no`, `icerik`, `dogru`, `admin`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'Hiper işaretleme metni', 0, 1, '2022-06-05 19:27:23', '2022-06-05 19:27:23'),
(2, 1, '2', 'Hyper işaretleme metni', 0, 1, '2022-06-05 19:27:37', '2022-06-05 19:27:37'),
(3, 1, '3', 'Hyper text markup language', 1, 1, '2022-06-05 19:27:53', '2022-06-05 19:27:53'),
(4, 1, '4', 'Hyper Text İşaretleme Dili', 0, 1, '2022-06-05 19:28:09', '2022-06-05 19:28:09'),
(5, 2, '4', '<b>a</b> etiketi', 1, 1, '2022-06-05 19:28:59', '2022-06-05 19:28:59'),
(6, 2, '3', '<b>p </b>etiketi', 0, 1, '2022-06-05 19:29:07', '2022-06-05 19:29:07'),
(7, 2, '2', '<b>span </b>etiketi', 0, 1, '2022-06-05 19:29:21', '2022-06-05 19:29:21'),
(8, 2, '1', '<b>li </b>etiketi', 0, 1, '2022-06-05 19:29:35', '2022-06-05 19:29:35'),
(9, 3, '4', '<b>a </b>etiketi', 0, 1, '2022-06-05 19:30:07', '2022-06-05 19:30:07'),
(10, 3, '3', '<b>b </b>etiketi', 0, 1, '2022-06-05 19:30:19', '2022-06-05 19:30:19'),
(11, 3, '2', '<b>p</b> etiketi', 1, 1, '2022-06-05 19:30:32', '2022-06-05 19:30:32'),
(12, 3, '1', '<b>ul &gt; li</b> etiketi', 0, 1, '2022-06-05 19:30:43', '2022-06-05 19:30:43'),
(13, 4, '1', '<b>strong</b> etiketi', 1, 1, '2022-06-05 19:31:24', '2022-06-05 19:31:24'),
(14, 4, '2', '<span style=\"font-weight: bolder;\">ul &gt; li</span>&nbsp;etiketi', 0, 1, '2022-06-05 19:31:29', '2022-06-05 19:31:29'),
(15, 4, '3', '<span style=\"font-weight: bolder;\">p</span>&nbsp;etiketi', 0, 1, '2022-06-05 19:31:34', '2022-06-05 19:31:34'),
(16, 4, '4', '<span style=\"font-weight: bolder;\">a&nbsp;</span>etiketi<br>', 0, 1, '2022-06-05 19:31:48', '2022-06-05 19:31:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_egitims`
--

CREATE TABLE `egitim_egitims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `baslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icerik` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim_aciklama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etiket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kazanim` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokuman` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitim_egitims`
--

INSERT INTO `egitim_egitims` (`id`, `kategori_id`, `baslik`, `aciklama`, `icerik`, `resim`, `resim_aciklama`, `etiket`, `kitle`, `kazanim`, `dokuman`, `admin`, `created_at`, `updated_at`) VALUES
(1, 1, 'HTML', '<p>HTML dersi, web programlamanın temellerinden olan HTML\'i bu dersimizde işleyeceğiz.</p><p>Eğer programlamaya yeni başlayan bir bireyseniz, doğru yerdesiniz HTML ile bir şeyler üretmeye başlamak doğru bir karardır.</p><p>Eğitim boyunca tüm içerikleri ve sınavları atlamadan tamamlayınız!</p>', '<ol><li>Giriş</li><li>W3C nedir?</li><li>Görüntü seviyeleri (Div, Span)</li><li>Başlık ve paragraf etiketleri</li><li>Metin biçimlendirme etiketleri</li><li>Alıntılama etiketleri</li><li>Link etiketleri</li><li>Resim etiketi</li><li>Tablo etiketi</li><li>Liste etiketleri</li><li>Medya etiketleri</li><li>iFrame etiketi</li><li>Form etiketleri (Bölüm 1)</li><li>Form etiketleri (Bölüm 2)</li></ol>', 'images/TAGiC8eoZzSSvHgyVL262UCwqX6Bd7HacR6i99UD.jpg', 'HTML eğitimi görselidir.', 'HTML, başlangıç', '<ul><li>Programlamaya yeni başlayan herkes.</li></ul>', '<ul><li>Eğitim sonunda HTML\'i orta seviyede kavramış olacaksınız.</li><li>HTML ile programlamaya giriş yaparak programlama mantığını anlamaya başlayacaksınız.</li></ul>', '-', 1, '2022-06-04 12:28:03', '2022-06-05 18:55:03'),
(2, 1, 'CSS', '<p>CSS dersi, web programlamanın temellerinden olan HTML\'i bitirdikten sonra bu dersimizde CSS işleyeceğiz.</p><p>Eğer programlamaya yeni başlayan bir bireyseniz, doğru yerdesiniz HTML\'den sonra CSS ile bir şeyler üretmeye başlamak doğru bir karardır.</p><p>Eğitim boyunca tüm içerikleri ve sınavları atlamadan tamamlayınız!</p>', '<ol><li>Sublime Text Editörünün İndirilmesi ve Kurulumu</li><li>Stillendirme ve seçim yöntemleri</li><li>Yazı stillendirme komutları</li><li>line-height, word-spacing, letter-spacing, text-decoration, text-transform</li><li>background-color, image, position, repeat, attachment, size</li><li>border, border-radius, border-image, box-shadow</li><li>border-width, border-style, border-color</li><li>Margin ve padding özellikleri</li><li>width, height, overflow, float, clear özellikleri</li><li>position, z-index, display, visibility özellikleri</li><li>child, sibling, adjacent sibling selectors</li><li>attribute selectors</li><li>pseudo ui, structural selectors</li><li>structural selectors nth-child( )</li><li> opacity, linear-gradient, radial-gradient </li><li>column-count, column-rule, column-gap</li><li>display: flex, flex-direction, flex-wrap</li><li>display: flex, flex-direction, flex-wrap</li><li> box-sizing Özelliği ve Multiple Background işlemleri</li><li>background-clip ve background-origin</li><li>2D Transform - translate, rotate, scale ve skew Metodları</li><li>transition Özellikleri - property, duration, delay, timing-function</li><li>Animasyon Özellikleri - name,duration,direction,delay,play-state,fill-mode...</li><li>media özelliği - Mobil Uyumlu Tasarım<br></li></ol>', 'images/JFWgH9rRdWTajwgAlY1RqfuoG2b0wSGNwoMEFdXd.jpg', 'CSS eğitimi görselidir.', 'css, html', '<ul><li>Programlamaya yeni başlamış herkes.</li><li>HTML eğitimini bitirmiş herkes.</li></ul>', '<ul><li>Eğitim sonunda CSS\'i orta seviyede kavramış olacaksınız.</li><li>CSS ile programlamaya giriş yaparak programlama mantığını anlamaya başlayacaksınız.</li></ul>', '-', 1, '2022-06-05 19:05:33', '2022-06-05 19:06:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_iceriks`
--

CREATE TABLE `egitim_iceriks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `egitim_id` bigint(20) UNSIGNED NOT NULL,
  `icerik_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_aciklamasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_yazili` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitim_iceriks`
--

INSERT INTO `egitim_iceriks` (`id`, `egitim_id`, `icerik_no`, `baslik`, `aciklama`, `video`, `video_aciklamasi`, `video_yazili`, `puan`, `admin`, `created_at`, `updated_at`) VALUES
(2, 1, '1', 'Giriş', 'Giriş', 'jiCSs0Weiqk', 'Giriş eğitimi videosudur.', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:08:12', '2022-06-05 19:08:12'),
(3, 1, '2', 'W3C Nedir?', 'W3C Nedir? eğitiminin açıklamasıdır.', 'Gw4R1XsavoM', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:14:55', '2022-06-05 19:14:55'),
(4, 1, '3', 'Görüntü Seviyeleri (Div, Span)', 'Görüntü Seviyeleri (Div, Span)&nbsp;eğitiminin açıklamasıdır.', 'sRo1eoW7PeA', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:15:10', '2022-06-05 19:15:10'),
(5, 1, '4', 'Başlık ve Paragraf Etiketleri', 'Başlık ve Paragraf Etiketleri&nbsp;eğitiminin açıklamasıdır.', 'vzmSTqw1X3Q', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:15:48', '2022-06-05 19:15:48'),
(6, 1, '5', 'Metin Biçimlendirme Etiketleri', 'Metin Biçimlendirme Etiketleri&nbsp;eğitiminin açıklamasıdır.', 'uew8XqPR--o', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:16:08', '2022-06-05 19:16:08'),
(7, 1, '6', 'Alıntılama Etiketleri', 'Alıntılama Etiketleri&nbsp;eğitiminin açıklamasıdır.', 'NORk3uXqEe0', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:16:32', '2022-06-05 19:16:32'),
(8, 1, '7', 'Link Etiketi', 'Link Etiketi&nbsp;eğitiminin açıklamasıdır.', '-nLW6UtvykM', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:17:00', '2022-06-05 19:17:00'),
(9, 1, '8', 'Resim Etiketi', 'Resim Etiketi&nbsp;eğitiminin açıklamasıdır.', 'nF9ME5hPZ9k', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:17:24', '2022-06-05 19:17:24'),
(10, 1, '9', 'Tablo Etiketi', 'Tablo Etiketi&nbsp;eğitiminin açıklamasıdır.', 'mlZ_va-h-6I', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:17:52', '2022-06-05 19:17:52'),
(11, 1, '10', 'Liste Etiketleri', 'Liste Etiketleri eğitiminin açıklamasıdır.', 'faQM8OYGm98', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:20:18', '2022-06-05 19:20:18'),
(12, 1, '11', 'Medya Etiketleri', 'Medya Etiketleri eğitiminin açıklamasıdır.', 'FEc9MTZCQy0', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:20:52', '2022-06-05 19:20:52'),
(13, 1, '12', 'Iframe Etiketi', 'Iframe Etiketi&nbsp;eğitiminin açıklamasıdır.', 'TPtSH1XOWYM', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:21:24', '2022-06-05 19:21:24'),
(14, 1, '13', 'Form Etiketleri (Bölüm 1)', 'Form Etiketleri (Bölüm 1)&nbsp;eğitiminin açıklamasıdır.', '2iqiTtQTTOA', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:21:48', '2022-06-05 19:21:48'),
(15, 1, '14', 'Form Etiketleri (Bölüm 2)', 'Form Etiketleri (Bölüm 1)&nbsp;eğitiminin açıklamasıdır.', 'tAqtmGJK2xc', 'Video açıklaması', '<div>Est ante in nibh mauris cursus mattis molestie a. Arcu dui vivamus arcu felis. Interdum velit laoreet id donec. Cursus mattis molestie a iaculis. Mattis rhoncus urna neque viverra. Ut eu sem integer vitae justo eget. Morbi tristique senectus et netus et malesuada fames. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Non tellus orci ac auctor augue mauris augue neque. Tellus rutrum tellus pellentesque eu tincidunt. Faucibus turpis in eu mi bibendum neque egestas congue.</div><div><br></div><div>Viverra nibh cras pulvinar mattis. Vel elit scelerisque mauris pellentesque pulvinar. Magna eget est lorem ipsum dolor sit amet consectetur. Sit amet consectetur adipiscing elit ut aliquam purus sit amet. Sit amet nisl suscipit adipiscing bibendum. Consectetur a erat nam at lectus urna duis. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Sollicitudin ac orci phasellus egestas tellus. Enim nec dui nunc mattis enim ut tellus elementum sagittis. Phasellus faucibus scelerisque eleifend donec pretium. Ultrices mi tempus imperdiet nulla malesuada. Penatibus et magnis dis parturient montes. In ante metus dictum at tempor. Rutrum quisque non tellus orci ac auctor augue. Nibh praesent tristique magna sit amet purus gravida quis blandit. Elementum pulvinar etiam non quam lacus suspendisse faucibus.</div>', '10', 1, '2022-06-05 19:22:23', '2022-06-05 19:22:23'),
(16, 2, '1', 'Sublime Text Editörünün İndirilmesi ve Kurulumu', 'Sublime Text Editörünün İndirilmesi ve Kurulumu&nbsp;içeriğinin açıklamasıdır.', 'eBuTk73d_s0', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:43:35', '2022-06-05 19:43:35'),
(17, 2, '2', 'Stillendirme ve Seçim Yöntemleri', 'Stillendirme ve Seçim Yöntemleri&nbsp;içeriğinin açıklamasıdır.', 'nPWo4K00Rcw', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:44:02', '2022-06-05 19:44:02'),
(18, 2, '3', 'Yazı Stillendirme Komutları - color,font-size,font-family,font-style,font-weight', 'Yazı Stillendirme Komutları - color,font-size,font-family,font-style,font-weight&nbsp;içeriğinin açıklamasıdır.', '6VfM-ZzSqyA', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:44:37', '2022-06-05 19:44:37'),
(19, 2, '4', 'line-height, word-spacing, letter-spacing, text-decoration, text-transform', 'line-height, word-spacing, letter-spacing, text-decoration, text-transform&nbsp;içeriğinin açıklamasıdır.', '7DJRo6tqtro', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:45:07', '2022-06-05 19:45:07'),
(20, 2, '5', 'background-color, image, position, repeat, attachment, size', 'background-color, image, position, repeat, attachment, size&nbsp;içeriğinin açıklamasıdır.', 'ZOq050uhO7o', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:45:44', '2022-06-05 19:45:44'),
(21, 2, '6', 'border, border-radius, border-image, box-shadow - CSS Kenarlık Özellikleri', 'border, border-radius, border-image, box-shadow - CSS Kenarlık Özellikleri&nbsp;içeriğinin açıklamasıdır.', 'TMkO_rBFTuk', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:46:15', '2022-06-05 19:46:15'),
(22, 2, '7', 'border-width, border-style, border-color - CSS Kenarlık Özellikleri', 'border-width, border-style, border-color - CSS Kenarlık Özellikleri&nbsp;içeriğinin açıklamasıdır.', 'TsnsVkj6gPU', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:46:49', '2022-06-05 19:46:49'),
(23, 2, '8', 'margin ve padding özellikleri', 'margin ve padding özellikleri&nbsp;içeriğinin açıklamasıdır.', 'qrhbvyygv5g', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:47:19', '2022-06-05 19:47:19'),
(24, 2, '9', 'width, height, overflow, float, clear özellikleri', 'width, height, overflow, float, clear özellikleri&nbsp;içeriğinin açıklamasıdır.', 'R6f4AoB9ptY', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:47:53', '2022-06-05 19:47:53'),
(25, 2, '10', 'position, z-index, display, visibility özellikleri', 'position, z-index, display, visibility özellikleri&nbsp;içeriğinin açıklamasıdır.', 'FlgP3zgchnA', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:48:19', '2022-06-05 19:48:19'),
(26, 2, '11', 'child, sibling, adjacent sibling selectors - Seçiciler Bölüm 1', 'child, sibling, adjacent sibling selectors - Seçiciler Bölüm 1&nbsp;içeriğinin açıklamasıdır.', 'ex1prxGdIOw', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:48:59', '2022-06-05 19:48:59'),
(27, 2, '12', 'attribute selectors - Seçiciler Bölüm 2', 'attribute selectors - Seçiciler Bölüm 2&nbsp;içeriğinin açıklamasıdır.', 'HyJA5yB0g9s', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:49:24', '2022-06-05 19:49:24'),
(28, 2, '13', 'pseudo ui, structural selectors - Seçiciler Bölüm 3', 'pseudo ui, structural selectors - Seçiciler Bölüm 3&nbsp;içeriğinin açıklamasıdır.', 'dmq226H0QgQ', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:49:51', '2022-06-05 19:49:51'),
(29, 2, '14', 'structural selectors nth-child( ) - Seçiciler Bölüm 4', 'structural selectors nth-child( ) - Seçiciler Bölüm 4&nbsp;içeriğinin açıklamasıdır.', 'rAXbWjZ9Cgc', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:50:34', '2022-06-05 19:50:34');
INSERT INTO `egitim_iceriks` (`id`, `egitim_id`, `icerik_no`, `baslik`, `aciklama`, `video`, `video_aciklamasi`, `video_yazili`, `puan`, `admin`, `created_at`, `updated_at`) VALUES
(30, 2, '15', 'opacity, linear-gradient, radial-gradient - Transparanlık ve Renk Geçişleri', 'opacity, linear-gradient, radial-gradient - Transparanlık ve Renk Geçişleri&nbsp;içeriğinin açıklamasıdır.', 'bJgutkfT0Lo', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:51:00', '2022-06-05 19:51:00'),
(31, 2, '16', 'column-count, column-rule, column-gap - Çoklu Kolon İşlemleri', 'column-count, column-rule, column-gap - Çoklu Kolon İşlemleri&nbsp;içeriğinin açıklamasıdır.', 'lUt2oKVsDrI', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:51:25', '2022-06-05 19:51:25'),
(32, 2, '17', 'display: flex, flex-direction, flex-wrap - Flexible Box Bölüm 1', 'display: flex, flex-direction, flex-wrap - Flexible Box Bölüm 1&nbsp;içeriğinin açıklamasıdır.', 'dr1VgGolK6g', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:51:54', '2022-06-05 19:51:54'),
(33, 2, '18', 'justify-content, align-items, align-content - Flexible Box Bölüm 2', 'justify-content, align-items, align-content - Flexible Box Bölüm 2&nbsp;içeriğinin açıklamasıdır.', 'l3jjgySV5Vo', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:52:25', '2022-06-05 19:52:25'),
(34, 2, '19', 'box-sizing Özelliği ve Multiple Background (Çoklu Arkaplan) İşlemleri', 'box-sizing Özelliği ve Multiple Background (Çoklu Arkaplan) İşlemleri&nbsp;içeriğinin açıklamasıdır.', 'CrwRnP6554Y', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:52:49', '2022-06-05 19:52:49'),
(35, 2, '20', 'background-clip ve background-origin Özellikleri', 'background-clip ve background-origin Özellikleri&nbsp;içeriğinin açıklamasıdır.', 'cNWuwNmnXLo', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:53:31', '2022-06-05 19:53:31'),
(36, 2, '21', '2D Transform - translate, rotate, scale ve skew Metodları', '2D Transform - translate, rotate, scale ve skew Metodları&nbsp;içeriğinin açıklamasıdır.', '4j_j4E-oNP8', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:55:25', '2022-06-05 19:55:25'),
(37, 2, '22', 'transition Özellikleri - property, duration, delay, timing-function', 'transition Özellikleri - property, duration, delay, timing-function&nbsp;içeriğinin açıklamasıdır.', 'Ibne4RTBFeo', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:55:50', '2022-06-05 19:55:50'),
(38, 2, '23', 'Animasyon Özellikleri - name,duration,direction,delay,play-state,fill-mode', 'Animasyon Özellikleri - name,duration,direction,delay,play-state,fill-mode&nbsp;içeriğinin açıklamasıdır.', 'rahyaa5tUs8', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:56:19', '2022-06-05 19:56:19'),
(39, 2, '24', 'media özelliği - Mobil Uyumlu Tasarım - Responsive Tasarım', 'media özelliği - Mobil Uyumlu Tasarım - Responsive Tasarım&nbsp;içeriğinin açıklamasıdır.', 'yMXObvUufq4', 'Video açıklaması', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Pulvinar neque laoreet suspendisse interdum consectetur libero id. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Netus et malesuada fames ac. Elit duis tristique sollicitudin nibh sit amet. Et sollicitudin ac orci phasellus egestas tellus. Vitae ultricies leo integer malesuada. Odio aenean sed adipiscing diam. Tristique sollicitudin nibh sit amet. Sagittis orci a scelerisque purus semper eget duis. Vel fringilla est ullamcorper eget nulla facilisi. Id aliquet lectus proin nibh. Sodales ut eu sem integer vitae justo eget. Quisque non tellus orci ac auctor augue mauris. Ligula ullamcorper malesuada proin libero nunc consequat interdum. Diam sit amet nisl suscipit adipiscing bibendum est ultricies integer. Convallis a cras semper auctor neque. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur libero id. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Faucibus scelerisque eleifend donec pretium vulputate sapien nec. Nisi vitae suscipit tellus mauris a diam maecenas sed. Cras fermentum odio eu feugiat. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Urna id volutpat lacus laoreet non curabitur. Fames ac turpis egestas integer eget. Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis.', '10', 1, '2022-06-05 19:56:52', '2022-06-05 19:56:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_kategoris`
--

CREATE TABLE `egitim_kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `baslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim_aciklama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitim_kategoris`
--

INSERT INTO `egitim_kategoris` (`id`, `baslik`, `aciklama`, `resim`, `resim_aciklama`, `icon`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Web programlama', '<p>Web programlama kategorisi, web programlama ile ilgili her şeyi A\'dan Z\'ye öğrenebileceğiniz eğitimlerle sizlere yardımcı olmaktayız.</p><p>Eğitim boyunca içeriklerin tamamını izlemeyi, sınavların tamamını tamamlamayı unutmayınız.</p>', 'images/f2p8vUa49l6OuIcz49xOHA5WpCaepVCeOp5plu5o.jpg', 'Web programlama kategorisi resmidir.', 'far fa-window-maximize', 1, '2022-06-04 12:26:55', '2022-06-05 18:14:16'),
(2, 'Mobil programlama', '<p>Mobil programlama kategorisi, mobil programlama ile ilgili her şeyi A\'dan Z\'ye öğrenebileceğiniz eğitimlerle sizlere yardımcı olmaktayız.</p><p>Eğitim boyunca içeriklerin tamamını izlemeyi, sınavların tamamını tamamlamayı unutmayınız.</p>', 'images/LDKbnd8us45ea83RwDhhwqCu8pDNGzuYJZPirKyS.jpg', 'Mobil programlama kategorisi resmidir.', 'fab fa-android', 1, '2022-06-05 18:22:37', '2022-06-05 18:22:37'),
(3, 'Oyun programlama', '<p>Oyun programlama kategorisi, oyun programlama ile ilgili her şeyi A\'dan Z\'ye öğrenebileceğiniz eğitimlerle sizlere yardımcı olmaktayız.</p><p>Eğitim boyunca içeriklerin tamamını izlemeyi, sınavların tamamını tamamlamayı unutmayınız.</p>', 'images/5uYJmkpdti1tMcukiBjuXRPcEJkg44FhGshHxv17.jpg', 'Oyun programlama kategorisi resmidir.', 'fas fa-chess-knight', 1, '2022-06-05 18:23:53', '2022-06-05 18:23:53');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_navbars`
--

CREATE TABLE `egitim_navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ismenu` tinyint(1) NOT NULL DEFAULT 0,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitim_navbars`
--

INSERT INTO `egitim_navbars` (`id`, `ad`, `icon`, `link`, `icerik`, `ismenu`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Ara', 'fas fa-search', '/egitim/ara', 'Eğitim aramak için tıklayın', 1, 1, '2022-06-05 20:21:20', '2022-06-05 20:21:20'),
(2, 'Dashboard', 'fas fa-tachometer-alt', '/egitim', 'Dashboard\'a gitmek için tıklayın', 1, 1, '2022-06-05 20:22:19', '2022-06-05 20:27:50'),
(3, 'Daha sonra', 'fas fa-bookmark', '/egitim/sonra', 'Daha sonraya eklediğiniz içerikleri görmek için tıklayın', 1, 1, '2022-06-05 20:26:42', '2022-06-05 20:26:42'),
(4, 'Kategoriler', 'fas fa-pager', '/egitim/kategoriler', 'Kategoriler sayfasına gitmek için tıklayınız.', 1, 1, '2022-06-05 20:28:49', '2022-06-05 20:28:49'),
(5, 'Derslerim', 'fas fa-book', '/egitim/derslerim', 'Derslerim sayfasına gitmek için tıklayınız', 1, 1, '2022-06-05 20:29:36', '2022-06-05 20:29:36'),
(6, 'Sıralama', 'fas fa-medal', '/egitim/siralama', 'Sıralama sayfasına gitmek için tıklayınız', 1, 1, '2022-06-05 20:30:31', '2022-06-05 20:30:31'),
(7, 'Haber', 'fas fa-newspaper', '/haber', 'Haber sayfasına gitmek için tıklayınız!', 0, 1, '2022-06-05 20:35:01', '2022-06-05 20:35:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_puans`
--

CREATE TABLE `egitim_puans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sinav_id` bigint(20) UNSIGNED NOT NULL,
  `dogru_sayisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yanlis_sayisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitim_puans`
--

INSERT INTO `egitim_puans` (`id`, `sinav_id`, `dogru_sayisi`, `yanlis_sayisi`, `puan`, `admin`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '0', '22', 0, '2022-06-05 22:27:11', '2022-06-05 22:27:11'),
(2, 1, '1', '0', '12', 0, '2022-06-14 12:07:44', '2022-06-14 12:07:44');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_sinavs`
--

CREATE TABLE `egitim_sinavs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icerik_id` bigint(20) UNSIGNED NOT NULL,
  `baslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitim_sinavs`
--

INSERT INTO `egitim_sinavs` (`id`, `icerik_id`, `baslik`, `aciklama`, `puan`, `admin`, `created_at`, `updated_at`) VALUES
(1, 2, 'HTML Quiz 1', 'HTML dersi birinci Quiz sınavıdır.', '12', 1, '2022-06-04 12:31:02', '2022-06-05 19:24:22'),
(2, 6, 'HTML Quiz 2', 'HTML dersi ikinci Quiz sınavıdır.', '12', 1, '2022-06-05 19:25:05', '2022-06-05 19:25:05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_sorus`
--

CREATE TABLE `egitim_sorus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sinav_id` bigint(20) UNSIGNED NOT NULL,
  `soru_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim_aciklama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitim_sorus`
--

INSERT INTO `egitim_sorus` (`id`, `sinav_id`, `soru_no`, `soru`, `resim`, `resim_aciklama`, `admin`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'HTML\'in açılımı nedir?', NULL, NULL, 1, '2022-06-05 19:25:27', '2022-06-05 19:25:27'),
(2, 2, '1', 'Aşağıdakilerden hangisi köprü (link) oluşturmamıza yarayan etikettir?', NULL, NULL, 1, '2022-06-05 19:26:11', '2022-06-05 19:26:11'),
(3, 2, '2', 'Aşağıdakilerden hangisi paragraf oluşturmamıza yarayan etikettir?', NULL, NULL, 1, '2022-06-05 19:26:27', '2022-06-05 19:26:27'),
(4, 2, '3', 'Aşağıdakilerden hangisi kalın yazılar oluşturmamıza yarayan etikettir?', NULL, NULL, 1, '2022-06-05 19:26:50', '2022-06-05 19:26:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim_yorums`
--

CREATE TABLE `egitim_yorums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `egitim_id` bigint(20) UNSIGNED NOT NULL,
  `kullanici_id` bigint(20) UNSIGNED NOT NULL,
  `baslik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icerik` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitim_yorums`
--

INSERT INTO `egitim_yorums` (`id`, `egitim_id`, `kullanici_id`, `baslik`, `icerik`, `admin`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'HTML dersi yorum başlığı', 'HTML dersi yorum içeriği', 0, '2022-06-06 07:44:30', '2022-06-06 07:44:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber_bultens`
--

CREATE TABLE `haber_bultens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `haber_bultens`
--

INSERT INTO `haber_bultens` (`id`, `mail`, `created_at`, `updated_at`) VALUES
(1, 'deneme@hotmail.com', '2022-06-14 13:27:31', '2022-06-14 13:27:31'),
(3, 'deneme2@hotmail.com', '2022-06-26 22:32:43', '2022-06-26 22:32:43'),
(4, 'theoguzcgbgfkorkmaz@gmail.com', '2022-06-27 15:21:48', '2022-06-27 15:21:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber_habers`
--

CREATE TABLE `haber_habers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `baslik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerik` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim_aciklama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etiket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `haber_habers`
--

INSERT INTO `haber_habers` (`id`, `kategori_id`, `baslik`, `icerik`, `resim`, `resim_aciklama`, `etiket`, `admin`, `created_at`, `updated_at`) VALUES
(1, 1, 'Renault, Türkiye’de yenilenmiş araç satacak!', '<p>Araç fiyatları <b>döviz kuru</b>nun yükselmesi ile gün geçtikçe artarken üreticiler de bu konu hakkında yeni yöntemler geliştirme arayışında. Bu gelişmeler ışığında ülkemize yeni bir otomobil satış modeli geliyor. Renault’un başlatacağı yeni satış modeli ile <b>yenilenmiş araçlar</b> yeniden piyasaya sürülecek.</p><p>Yenilenmiş araç satışı yakında Türkiye’ye geliyor</p><p>“<b>Refactory</b>” olarak adlandırılan bu sistem araçları fabrikada yenileyip yeniden garantili bir şekilde satma işlemini içeriyor. Hâli hazırda Fransa ve İspanya‘da Renault tarafından kullanılan bu yenilenmiş araç satış modelinin yakında Türkiye’ye getirilmesi planlanıyor.</p><p>Türkiye’de yedek parça sektöründe imalat yapan firmaların oldukça yeterli olduğu belirtilirken bu modelin Türkiye’de oldukça başarı sağlayabileceği düşünülüyor. Bu anlamda Türkiye’nin tek rakibinin uzak doğu ülkeleri olduğu söylenirken, araçların başarılı bir şekilde yenilenip piyasaya sürülebileceği ifade edildi.</p><p>Yeni araç satış sisteminde <b>son aşamaya gelinmiş durumda</b>. Son çalışmalar da bittikten sonra Renault, yeni yenileme ve satış modelini uygulamaya koyabilir. Bu konu önündeki tek engel ise Türkiye‘deki ikinci el otomobil fiyatları olabilir.</p><p>İkinci elde araç bulunmaması ve fiyatların çok yüksek olması yeni satış modeli için büyük bir soru işareti oluşturuyor. Hâli hazırda sıfırdan daha yüksek ikinci el fiyatlarının olduğu bir piyasada araçları yenileyip satmanın maliyeti oldukça yüksek olacaktır. Bu durumda da sıfır otomobilleri aşan yenilenmiş araçlar ile karşılaşabiliriz.</p><p>Renault da yenilenmiş araç konusunda tüm bu etkenleri düşünerek bir adım atacaktır. Ortayaca çıkacak olan satış modeli ve sonuçlarını merakla bekliyoruz. Peki siz Renault’un yenilenmiş araç satış modeli hakkında ne düşünüyorsunuz? Görüşlerinizi yorumlar kısmında bizimle paylaşabilirsiniz.<br></p><p>                 \r\n              </p>', 'images/Yi6pvc60amFMhXVvOiKt5RVyasB0nzh3UyUozzBR.webp', 'Renault fabrikasından bir resim', 'renault, ikinci el', 1, '2022-06-05 16:03:47', '2022-06-05 16:03:47'),
(2, 1, 'Binance CEO’su, LUNA’dan ne kadar zarar ettiğini açıkladı!', '<p>LUNA, geçtiğimiz dönemde beklenmedik bir şekilde dibi gördü. Kripto para platformları işlem kısıtlaması getirerek bu coini geçici olarak kaldırdığını açıkladı. LUNA çöküşünde en çok zarar edenlerden biri de Binance CEO’su Changpeng Zhao oldu. Bugün ise verdiği bir röportajda ne kadar para kaybettiğini açıkladı.</p><h3><b>Binance CEO’su Zhao, LUNA kaybını açıkladı: Tam 1.6 milyar dolar!</b></h3><p>Binance CEO’su Changpeng Zhao, çöküş öncesinde verdiği bir röportajda yaklaşık 50 milyon LUNA’yı diğer yatırımlarıyla birlikte kripto cüzdanında sakladığını söyledi. Bugün yaptığı röportajda ise şirketiyle birlikte 2018 yılında LUNA coine 3 milyon dolar civarı bir yatırım yaptığını açıkladı.</p><p>Yaklaşık 4 yıl boyunca bu yatırımına dokunmayan Zhao’nun kripto cüzdanı gün geçtikçe değerlendi. LUNA’nın beklenmedik çöküşü öncesindeyse toplam değeri 1.6 milyar doları aştı. Konuyla ilgili açıklama yapan Zhao, şunları söyledi:</p><p><b><i style=\"\">Bu yatırımdan hiç para kazanmadık. Teorik olarak sahip olduğumuz bu kripto paranın değeri en tepe noktasında 1.6 milyar doları gördü, fakat bu yatırımı kaybetmiş olmamız (aslında 3 milyon dolara aldığı ima ediyor) bir sorun teşkil etmiyor.</i></b></p><p>Orijinal Terra ekosisteminin birden bire çökmesi tüm kripto dünyasında şok etkisi yarattı. Binance gibi LUNA’yı listeleyen büyük borsalar da adeta ateş altında kaldı. Üstelik oldukça büyük zararlara uğradılar. Fakat Terra ekibi LUNA’yı tekrar hayata döndürmek için çalıştığını ve küllerinden daha güçlü bir şekilde doğmak istediğini söylüyor.<br></p><p>                 \r\n              </p>', 'images/dsMbuTA23NEFGWENIiGCPwwvEPMdBZn1OmrcglOm.webp', 'Binance CEO\'su Changpeng Zhao konuşma yaparken', 'binance, zarar', 1, '2022-06-05 16:12:03', '2022-06-05 16:12:03'),
(3, 1, 'Apple’dan WWDC sürprizi: M2 işlemcili yeni bir cihaz ortaya çıktı!', '<p><b>Apple</b>, önümüzdeki Pazartesi günü Apple Worldwide Developer Conference&nbsp;(WWDC) ya da ülkemizde bilinen adıyla&nbsp;Apple Dünya Geliştiriciler Konferansı’nın ilk etabını düzenleyecek. Burada yazılım geliştiricileri bir araya gelecek olsa da yeni teknolojileri görmeyi bekliyoruz.</p><p>Nitekim giderek sıklaşan iddia ve sızıntılara göre, etkinlik sırasında M2 işlemcisi ve bunu kullanan ilk dizüstü modeli olan yeni <b>MacBook Air</b> tanıtılacak. Fakat bugün itibariyle bazı Apple yetkili satıcıları (3. taraf) yeni M2 Mac mini modelini listelemeye başladı.</p><h3>Apple’dan WWDC şovu: M2 Mac mini ve MacBook Air geliyor!</h3><p>Şu anda tüm dünyanın gözü, Apple’ın yarın başlayacağı WWDC 22 etkinliğinde. Özellikle yeni <b>iOS 16, iPadOS 16, watchOS 9, macOS 13 ve tvOS 16</b> işletim sistemlerinin tanıtımı dikkatleri üzerine topluyor. Fakat bazı sürprizler de yer alacak.</p><p>İlk olarak M2 işlemcisi için ufak bir tanıtımının gerçekleşmesi bekleniyor. Daha sonra ise bu yongayı kullanan yeni bilgisayarlar tanıtılacak. Bunlar da şu an için M2 MacBook Air ve M2 Mac mini olarak adlandırılıyor.</p><p>Her ne kadar bu işlemcinin ve bilgisayarların tanıtımı Apple tarafından resmi olarak açıklanmamış olsa da B&amp;H Photo gibi bazı yetkili yatıcılar internet sitelerinde bu cihazları listelemeye başladı. Tabii onlar da şu an için fiyat ve görsellere yer vermedi.</p><p>Fakat M2’den beklentiler büyük. Ailenin son çıkanları M1 Pro, Ultra ve Max gibi yüksek performans sağlamayacak. Ancak M1’den en az yüzde 10 daha güçlü olduğu halde daha az güç tüketecek. Bu da onu Watt başına performans sıralamasında ilk 3’e taşıyacaktır.</p><p>Tabii Apple’ın son yıllarda beklentileri aşma gibi bir hobisi olduğu için listenin ilk sırasına yerleştiğini de görebiliriz. Fakat genel özellikleri itibariyle bu işlemci, iPhone 13 modellerinde yer alan A15 çipindeki CPU ve GPU çekirdeklerini kullanacak.</p><p>Dolayısıyla belirttiğimiz gibi hedef düşük güç tüketimi. Yüksek performans beklentisi olanların ise önümüzdeki dönemde tanıtılacak yeni MacBook Pro modellerinde yer alacak M2 Pro, M2 Ultra ve M2 Max’i beklemesi gerekiyor.</p><p>                 \r\n              </p>', 'images/bj8tB1uzRZUgiAr2P40lIu8yXE8bE2G87VSI0bw7.webp', 'Apple mac mini modeli', 'mac, mini, apple', 1, '2022-06-05 16:20:05', '2022-06-05 16:20:05'),
(4, 1, 'Bir Xiaomi modeli daha MIUI 13 güncellemesini aldı!', '<p>Xiaomi son dönemde yeni akıllı telefon serisi olan Xiaomi 12’ye odaklanmış durumda. İlk olarak 12 ve 12 Pro modellerini satışa sunan şirket, şimdi de 12 Ultra’yı tanıtmaya hazırlanıyor. Fakat eski telefonlarını da unutmuş değil. Zira bugün itibariyle Mi 10 5G, Android 12 tabanlı MIUI 13 güncellemesini aldı.</p><h3>Mi 10 5G, Android 12 tabanlı MIUI 13 güncellemesi aldı: Hangi telefonlar alacak?</h3><p>Bugün itibariyle Xiaomi, Mi 10 5G modeli için Android 12 tabanlı MIUI 13 güncellemesini yayınlamaya başladı. Fakat her ülkeye ve her cihaza aynı anda sunulmadığını belirtelim. Yani eğer bu cihazı kullanıyorsanız, an itibariyle güncelleme size ulaşmamış olabilir. Dolayısıyla biraz vakit geçtikten sonra tekrar kontrol etmelisiniz.</p><p>Tabii bu cihaz Xiaomi’nin büyük güncelleme paketi içerisindeki tek model değil. Nispeten eski modeller Android 11, yeniler ise Android 12 tabanlı MIUI 13 güncellemesi alıyor. Cihazınıza bu sürümün gelip gelmeyeceğini aşağıdaki listeden kontrol edebilirsiniz.</p><h3>MIUI 13 güncellemesi alacak tüm cihazlar</h3><div><b>Not: Listede Xiaomi 12 Ultra gibi henüz tanıtılmayan, ancak gelmesi kesinleşen modeller de bulunuyor.</b></div><div><b><br></b></div><div><ul><li>Xiaomi 12</li><li>Xiaomi 12 Pro</li><li>Xiaomi 12X</li><li>Xiaomi 12 Ultra</li><li>Xiaomi 12 Lite</li><li>Xiaomi 11T</li><li>Xiaomi 11T Pro</li><li>Xiaomi Mi 11 Lite 4G</li><li>Xiaomi Mi 11 Lite 5G</li><li>Xiaomi 11 Lite 5G NE</li><li>Xiaomi Mi 11</li><li>Xiaomi Mi 11i</li><li>Xiaomi Mi 11 Ultra</li><li>Xiaomi Mi 11 Pro</li><li>Xiaomi Mi 11X Pro</li><li>Xiaomi MIX 4</li><li>Xiaomi MIX FOLD</li><li>Xiaomi MIX FOLD 2</li><li>Xiaomi Civi</li><li>Xiaomi Civi 1S</li><li>Xiaomi Mi Note 10 Lite</li><li>Xiaomi Mi 10</li><li>Xiaomi Mi 10 Pro</li><li>Xiaomi Mi 10 Lite</li><li>Xiaomi Mi 10 Lite Zoom</li><li>Xiaomi Mi 10 ultra</li><li>Xiaomi Mi 10T</li><li>Xiaomi Mi 10T Lite</li><li>Redmi Note 11</li><li>Redmi Note 11 4G</li><li>Redmi Note 11T</li><li>Redmi Note 11 Pro</li><li>Redmi Note 11 Pro+ 5G</li><li>Redmi Note 11S</li><li>Redmi Note 11 Pro</li><li>Redmi Note 11 Pro 5G</li><li>Redmi Note 10 Pro</li><li>Redmi Note 10</li><li>Redmi Note 10T Japan</li><li>Redmi Note 9 Pro 5G</li><li>Redmi K50</li><li>Redmi K50 Pro</li><li>Redmi K50 Gaming</li><li>Redmi K40S</li><li>Redmi K40 Pro</li><li>Redmi K40 Pro+</li><li>Redmi K40</li><li>Redmi K40 Gaming</li><li>Redmi K30S Ultra</li><li>Redmi K30 4G</li><li>Redmi K30 Pro</li><li>Redmi Note 8 (2021)</li><li>Redmi Note 10 Pro 5G</li><li>Redmi 10C</li><li>Redmi 10A</li><li>Redmi 10 Power</li><li>Redmi 10</li><li>Redmi 10 Prime</li><li>Redmi 10 Prime 2022</li><li>Redmi 10 2022</li><li>Redmi Note 11E</li><li>Redmi Note 11E Pro</li><li>Redmi Note 11T Pro</li><li>Redmi Note 11T Pro+</li><li>POCO M4 Pro 4G</li><li>POCO M4</li><li>POCO X4 Pro 5G</li><li>POCO M4 Pro 5G</li><li>POCO X3 Pro</li><li>POCO X3 GT</li><li>POCO X4 GT</li><li>POCO X4 GT+</li><li>POCO F4</li><li>POCO F4 Pro</li><li>POCO F3</li><li>POCO F3 GT</li><li>POCO C40</li><li>POCO C40+</li></ul></div><p>                 \r\n              </p>', 'images/U2UsN66mzw8YL21Qmqm1lGTLWhROeLZZHCuOs7bA.webp', 'Xiaomi mi 10 5g modeli telefon', 'xiaomi, güncelleme', 1, '2022-06-05 16:23:26', '2022-06-05 16:23:26'),
(5, 1, 'Kripto parada sıcak ve soğuk cüzdan nedir?', '<p><b>Kripto paralar</b> gün geçtikçe yaygınlaşırken daha fazla insan da kripto para sahibi oluyor. Peki kripto paralarımızı nerede saklamalıyız? Kripto paraları saklamak için çeşitli seçenekler mevcut. Paralarınızı elektronik cüzdanlarda saklamak da bu yollardan bir tanesi. Peki soğuk ve sıcak olarak adlandırılan bu cüzdanlar arasındaki fark nedir?</p><h3>Kripto paraları nerede saklamalıyız?</h3><p>Kripto para cüzdanı, kripto para birimlerini saklamak için kullanılan bir uygulama veya cihazdır. Geleneksel bir cüzdanın aksine, bir kripto cüzdanı madeni paralar yerine kripto paraları içerir. Buraya konulan kripto paralar bir blok zincirinde kalır ve ancak özel bir şifre ile erişim mümkün olur.</p><h3>Sıcak cüzdan nedir?</h3><p>“Sıcak cüzdan” terimi, internete bağlı olan cüzdanlar için kullanılır. Bu cüzdanlar bir tarayıcı uzantısı, mobil uygulama veya masaüstü uygulaması olabilir. Sıcak cüzdanlar hızlı işlemler için oldukça uygundur. Ancak, internete bağlı oldukları için bu cihaz ve uygulamalar her zaman bir güvenlik riski oluşturur. Bilgisayar korsanlarının da birinci hedefi genellikle sıcak cüzdanlardır.</p><p>Diğer yandan ise çevrim içi yapıları sayesinde sıcak cüzdanlar kullanıcısına birçok kolaylık sağlar. İnternet erişimi olan her yerde bu cüzdanlara erişmek ve işlem yapmak mümkün oluyor. Bu yüzden sıcak cüzdanlar üzerinden işlemler çok daha pratik şekilde halledilebilir.</p><h3>Soğuk cüzdan nedir?</h3><p>Sıcak cüzdanların tersine soğuk cüzdanlar ise internet bağlantısına sahip değildir. Çevrim dışı bu cüzdanlar özellikle güvenlik konusunda öne çıkıyor. Soğuk cüzdanlar kripto paraları siber saldırılara karşı korumanın en iyi yoludur.</p><p>USB bellek benzeri fiziksel cihazlar olan soğuk cüzdanlar, özellikle büyük yatırımcılar tarafından çokça kullanılır hâle gelmiş durumda. Ancak, sürekli internete bağlı olmadıkları için kullanımlarının sıcak cüzdanlara karşı daha az pratik olduğunu da söyleyebiliriz.<br></p><p>                 \r\n              </p>', 'images/8DuVKSev1eUuAoxDswWH6VoM6AX4jVJj37m2AgNr.webp', 'Kripto paralar ile ilgili görsel', 'kripto, sıcak, soğuk, cüzdan', 1, '2022-06-05 16:25:42', '2022-06-05 16:25:42'),
(6, 1, 'Discord’a yıllardır beklenen özellik nihayet geliyor!', '<div>Discord, son yılların en hızlı büyüyen iletişim uygulamalarından biri. Özellikle de oyuncular arasında hızla yayılan Platform, ücretsiz ve topluluk odaklı olmasıyla rakiplerine karşı önemli üstünlükler elde etmişti. Hızla kazandığı kitleyi elinde tutmayı başaran Discord zaman zaman yeni özellikler getirerek platformu canlı tutuyor.</div><div>Discord iyi bir kullanıcı deneyimi sunsa da mükemmel olmadığı kesin. Kullanıcıların yıllardır beklediği bir özellik, yakın zamanda platforma eklenecek.</div><div><h3>Discord sesli sohbetlere yazışma özelliği getiriyor</h3><div>Herhangi bir sunucuya girdiğinizde ses kanallarıyla birlikte onları destekleyen metin kanallarının olduğunu görebilirsiniz. Discord’a ses kanalı ve metin kanalı ayrımı ilk geldiğinde geliştiriciler bazen bazı şeylerin sohbete yazılması gerektiğini düşünememiş. Bu yüzden Discord’daki hemen hemen her sunucuda ses kanalını desteklemek bir de metin kanalı açılıyor. Discord yetkililerinin nihayet bu durumu düzeltecek güncellemesi, 29 Haziran’da herkese açılmış olacak.</div><div><div>Özellik şimdiden bazı sunucularda kullanılabiliyor. Eğer ‘Topluluk’ olarak ayarlanmamış bir sunucudaysanız ses kanallarında metin kısmını da görebiliyor olabilirsiniz. Eğer bir topluluk yöneticisiyeniz, sunucu ayarlarını kontrol ederek özelliğin kullanılabilir olup olmadığını görebilirsiniz. Er ya da geç Discord, bu özelliği tüm sunuculara ekleme imkanı sağlayacak.</div><div>Discord’un uzun zamandır beklenen özellikleri getirmeye başlaması bizi mutlu etti. Platform sürekli farklı şeyler denerken, uzun süredir olan temel özelliklerdeki eksikleri gidermiyordu. Nihayet ses kanallarındaki bu sorunun aşılmasının daha iyi bir deneyim sunacağına eminiz. Eğer sunucunuzda bu özelliği istemezseniz devre dışı bırakabilirsiniz.</div></div></div>', 'images/Jmhh1ebOGMsTEObt2T66CKXcB6yOiWM5hoXHr5ZX.webp', 'Discord logosu', 'discord, yeni', 1, '2022-06-05 16:28:03', '2022-06-05 16:28:03'),
(7, 2, 'Meta\'dan yapay zeka destekli \"evrensel konuşma tercümanı\"', '<p>Meta bugün paylaştığı bir tweet seli ile Metaverse\'deki ve fiziksel ortamlardaki dil bariyerini ortadan kaldırmak için harekete geçtiğini açıkladı.</p><p>Meta, Metaverse\'deki ve fiziksel ortamlardaki dil bariyerini ortadan kaldırmak için harekete geçtiğini açıkladı. Şirket, bir süredir üzerinde çalıştığı yapay zeka destekli evrensel simultane tercümanı tanıttı.&nbsp;</p><p>Şirketin duyurduğu bu yeni yapay zeka araştırma projesi, dünyadaki herkesin işine yarayacak bir çeviri yazılımı geliştirme amacı taşıyor. Bunun yanında şirket, yapay zekanın Metaverse\'de kullanımı üzerine verdiği örneklerle bir gelecek planı inşa ediyor.</p><p>Aslında geniş kitleler tarafından kullanılan İngilizce, Mandarin ve İspanyolca gibi diller çeviri araçları tarafından destekleniyor. Ancak Meta\'nın paylaştığı bilgilere göre, dünya nüfusunun yüzde 20\'sinin konuştuğu diller, bu sistemler tarafından desteklenmiyor.&nbsp;</p><p>Şirket ayrıca söz konusu dillerin, yapay zeka sistemlerini eğitmek için gerekli olan yazılı metin külliyatına sahip olmadığını belirtiyor. Hatta bazı dillerin herhangi bir şekilde standartlaştırılmış bir yazı sistemine sahip olmadığı da vurgulanıyor.&nbsp;</p><h3>Meta iki alana odaklanıyor</h3><p>Makine öğrenimi ile bu alandaki zorlukları bertaraf etmeyi hedefleyen Meta, bu bağlamda iki farklı alana odaklanıyor. Bunlardan ilki; yapay zekanın eğitim sürecinde daha az örnek kullanarak dili tercüme etmeyi öğrenen yapay zeka modelleri oluşturmak. Bir diğeri ise Evrensel Konuşma Tercümanı olarak tanımlayabileceğimiz \"Universal Speech Translator\". Evrensel Konuşma Tercümanı, bir metne ihtiyaç duymadan gerçek zamanlı olarak konuşmalarınızı bir dilden diğerine tercüme edebiliyor.&nbsp;</p><h3>Araştırma süreçlerindeki belirsiz</h3><p>Meta, açıklamalarıyla uzun süredir heyecanla gerçekleşmesini beklediğimiz geleceğin önizlemesini sunuyor. Ancak paylaşımlara baktığımızda, araştırma süreçleri ile ilgili detayların eksikliği dikkat çekiyor. Örneğin, şu an için bu projenin ne kadar zamanda tamamlanacağı ve hangi aşamaların ne zaman gerçekleşeceği soruları cevapsız kalıyor. Şirket paylaştığı blog gönderisinde odaklanmayı planladığı iki alandan \"uzun vadeli tercüme hedefleri\" olarak bahsediyor.&nbsp;</p><p>                 \r\n              </p>', 'images/KfgR5DDu7JJwLIlVNqtHOAQV5KldmsN4Ol0XqKEn.png', 'Metaverse ile ilgili görsel', 'meta', 1, '2022-06-05 16:31:29', '2022-06-05 16:31:29'),
(8, 2, 'VR odaklı internet tarayıcısı Firefox Reality\'nin hizmetleri sonlandırılıyor', '<div>Günümüzün en önemli internet tarayıcılarından Firefox\'un geliştiricisi konumunda bulunan Mozilla\'nın sanal gerçeklik teknolojisi ile ilgili çalışmalar yaptığını ilk olarak 2015 yılında sizlere aktarmıştık. Uzun süredir sanal gerçeklik teknolojisi üzerine çalışan Firefox, 2018 yılında ise Firefox Reality isimli sanal gerçeklik tarayıcısını kullanıma sundu.</div><div>Sanal gerçeklik gözlükleri için geliştirilen ve kullanıcılara sanal gerçeklik odaklı bir internet tarayıcısı deneyimi sunan Firefox Reality, 4 yılın ardından yolun sonuna geldi. Mozilla, Firefox Reality sanal gerçeklik tarayıcısının hizmetlerini sonlandıracağını duyurdu.</div><div>Viveport, Oculus, Pico ve HoloLens gibi platformların uygulama mağazaları içinde yer alan Firefox Reality, kullanıcıların sanal gerçeklik gözlükleri ile birlikte hem 2D hem de 3D olarak internet tarayıcısı kullanmalarına odaklanıyordu. Firefox Reality internet tarayıcısının sanal gerçeklik gözlüklerinin kumandaları ile birlikte kullanıldığını da ekleyelim.</div><div>Mozilla tarafından paylaşılan bilgilere göre Firefox Reality internet tarayıcısı, uygulama mağazalarından önümüzdeki haftalarda kaldırılacak. Mozilla tarafından aktarılan bir diğer önemli bilgi ise Firefox Reality\'nin kaynak kodunun geleceği ile ilgili oldu.</div><div>Paylaşılan bilgilere göre Firefox Reality\'nin kaynak kodu Igalia tarafından geliştirilecek olan sanal ve artırılmış gerçeklik odaklı internet tarayıcısı Wolvic tarafından kullanılacak. Wolvic internet tarayıcısının önümüzdeki hafta içinde resmen kullanıma sunulması bekleniyor.</div><div>Firefox Reality\'den farklı olarak hem sanal hem de artırılmış gerçeklik teknolojisini kullanacak olan Wolvic internet tarayıcısının ücretsiz olarak sunulacağını da ekleyelim. Wolvic\'in hangi platformlar için kullanıma sunulacağı ile ilgili ise herhangi bir bilgi bulunmuyor.</div>', 'images/Tnyis03KRtmI0E4hEDnQQDdtI8Z2Xl2eMyeZLzFq.png', 'Firefox Reality ile ilgili görsel', 'firefox, reality', 1, '2022-06-05 16:32:30', '2022-06-05 16:32:30'),
(9, 2, 'DeepMind\'dan yazılımcılar ile rekabet edebilen yapay zeka: AlphaCode AI', '<div>Google\'ın çatı şirketi Alphabet\'in yapay zeka platformu olarak hayatımıza giren DeepMind\'ı geçtiğimiz yıllarda sizlere aktarmıştık. 2016 yılında AlphaGo yapay zeka sistemiyle Go şampiyonunu yenen DeepMind, kodlama konusuna da elini attı.</div><div>DeepMind tarafından paylaşılan bilgilere göre şirketin kodlama yapması için geliştirdiği AlphaCode AI, ortalama bir yazılımcı kadar başarılı bir şekilde kod yazabiliyor. Toplamda 5 bin yazılımcının katıldığı 10 yarışmayı simüle ederek AlphaCode AI\'ı test eden DeepMind, simülasyonun sonucunda ise oldukça başarılı bir sonuç elde ettiğini duyurdu.</div><div>Rekabetçi bir seviyede kodlama yapabilen AlphaCode AI, simülasyon sonucunda 5 bin kişi içinde yüzde 54\'lik dilim içinde yer aldı. AlphaCode AI\'ın Codeforces tarafından belirlenen kodlama sorunları ile test edildiğini de paylaşalım. Codeforces\'un kodlama sorunlarını mantık, matematik ve kodlama uzmanlığını birleştiren özel bulmacalar olarak düşünebiliriz.</div><div>AlphaCode, bu bulmacaları başarılı bir şekilde çözmeyi başardı. Yapay zeka destekli bir sistem olarak çalışan AlphaCode AI, bu başarısı ile birlikte otonom kodlama konusunda geleceğin parlak olduğunu da göstermiş oldu.</div><div>DeepMind\'ın testlerine göre şu an için ortalama bir yazılımcı kadar kodlama yapabilen AlphaCode AI\'ın ilerleyen dönemlerde en iyi yazılımcılarla rekabet edebilecek bir yapay zekaya dönüşmesi hedefleniyor. Yazılımcıların yerini alması için geliştirilmeyen AlphaCode AI\'ın ortaya çıkışındaki temel amacın kodlama yapmak isteyen kişilere yardımcı olmak olduğunu da belirtelim.</div><div>DeepMind\'in baş araştırmacısı Oriol Vinyals tarafından aktarılan bilgilere göre AlphaCode\'un uzun vadede hem yazılımcı hem de yazılımcı olmayan kişilerin kod yazmasına ve üretkenliklerini artırmalarına yardımcı olması hedefleniyor.</div>', 'images/pdW9CZFT2nTxEF5SQnEHtUikpdRGSCL4oBNKBSfN.png', 'Alphacode ile ilgili görsel', 'alphacode', 1, '2022-06-05 16:33:54', '2022-06-05 16:33:54'),
(10, 2, 'Kripto kredi protokolü geliştiren Goldfinch, a16z\'den 25 milyon dolar yatırım aldı', '<div>Merkeziyetsiz kredi protokolü girişimi Goldfinch, Andreessen Horowitz’den 25 milyon dolar yatırım aldı. Yatırım turuna ayrıca Coinbase Ventures, SV Angel, Blocktower, Bill Ackman ve Helicap katılım gösterdi.&nbsp;</div><div>Bu noktada girişimin geçtiğimiz haziran ayında 11 milyon dolar yatırım aldığını hatırlatalım. Bu yeni yatırım ile birlikte Goldfinch\'in topladığı yatırım miktarı 37.7 milyon dolara ulaştı.</div><h3>Girişimin kurucuları ve faaliyet alanı</h3><div>Girişim, 2020\'in Temmuz ayında Mike Sall ve Blake West tarafından kuruldu. İkili, şirketi kurmadan önce Coinbase\'de birlikte çalışıyordu.&nbsp;</div><div>Goldfinch, yazının başında da belirttiğimiz üzere merkeziyetsiz kredi protokolü geliştirmeye odaklanıyor. Şirket özellikle kripto birikimi olmayan kişi ve kurumların söz konusu kripto kredilerinden faydalanmasını hedefliyor. Zira şu anda pek çok kripto kredi platformu, kredi vermek için başvuranların teminat olarak kripto birikimlerini göstermesini istiyor.&nbsp;</div><div>Geliştirdiği protokol ile kripto kredisine daha karma bir çözü getirmeyi hedefleyen Goldfinch, sermaye havuzları oluşturmanın yanı sıra ABD dışında faaliyet gösteren fintechlerin protokol çatısı altındaki kredi şirketlerine ulaşmasını sağlayacak. Buna ek olarak şirketler, kripto dışındaki varlıklarını teminat gösterebilirken, fonlara erişim sağlayacak.&nbsp;</div><div>Goldfinch\'in protokol kapmamında sağladığı tüm bu hizmetler ile kripto birikimi bulunmayanları hedefleyerek pazardaki önemli bir boşluğu doldurmayı amaçladığını söylemek mümkün.&nbsp;</div><h3>Yasal kısıtlamalar</h3><div>Bu arada Goldfinch\'in hayata geçirmeyi planladığı havuza alınöıi yatırımlar, eyalet tarafından yasal olarak değerlendirilmemekte. Bu nedele şirket, ABD pazarını şimdilik öncelik listesine almıyor ve gözünü gelişmekte olan ülkelere çeviriyor. Protokol aracılığıyle en yüksek kredi hacmine sahip ülkeler ise Kenya, Nijerya, Uganda ve Filipinler olarak öne çıkıyor.&nbsp;</div>', 'images/lGVF98jiN9gu3r9ul9dBIjYb6S5QJN171eXYzqPj.png', 'Goldfinch ile ilgili görsel', 'goldfinch', 1, '2022-06-05 16:34:52', '2022-06-05 16:34:52'),
(11, 2, 'Microsoft, şubat ayında Azure fiyatlarına yüzde 68 zam yapacak', '<div>Bugün Twittter kullanıcıları, paylaştıkları ekran görüntüleri ile Microsoft\'un şubat ayında Azure fiyatlarına yüzde 68 zam yapacağını gündeme taşıdı. Paylaşılan bilgilere göre, Microsoft bu sabah gönderdiği bir e-posta ile zam konusunda kullanıcılarını bilgilendirdi.&nbsp;</div><div>E-postada yer alan ifadelere göre, Microsoft, Azure.com\'da Microsoft Online Services kapsamında bulunan ve TL ile ücretlendirilen kullandıkça öde abonelikleri için fiyat ayarlaması yapacak. Yeni Azure fiyatları, 1 Şubat 2022\'den itibaren geçerli olacak. Şirket bu yüzde 68\'lik zammın, yurt dışındaki fiyatlara uyum sağlamak için gerçekleştirileceğini belirtiyor.&nbsp;</div><div>Bu arada söz konusu fiyatlandırmanın Azure bulut çözümleri (CSP) için geçerli olmayacağını belirtelim. Şirket, bu kapsamda kanal ortağı olarak nitelendirdiği kurumlara yüzde 68\'lik zammı yansıtmayacak. Aynı şekilde kanal ortaklıkları kapsamında hayata geçirilen işletme anlaşmaları (EA), işletme abonelik anlaşmaları (EAS), Microsoft ürün ve hizmetleri (MPSA) ya da sunucu ve bulut kayıtları (SCE) da zamdan etkilenmeyecek.&nbsp;</div><div>Geçtiğimiz günlerde teknoloji şirketlerinin kur dalgalanmaları neticesinde yeni fiyat politikalarını hayata geçirdiğine şahit olduk. Apple 4 hafta içinde ikinci zamma imza atarken, TL\'deki dalgalanmaya ayak uydurarak bir indirim uygulaması da gerçekleştirmişti.&nbsp;</div><div><br></div><div>Özellikle bağımsız geliştiriciler ve dijital ürün sahipleri, donanım ürünleri, alan adı ve hosting hizmetleri dahil olmak üzere her geçen gün ekonomik açıdan daha farklı alanlarda yüksek fiyat politikalarıyla karşı karşıya kalmaya devam ediyor.&nbsp;</div><div>Paylaştığımız gelişmelerin ardından Microsoft habere ilişkin şu açıklamada bulundu:&nbsp;</div><div><div><b><i>Microsoft farklı bölge ve pazarlar arasında fiyat dengesi sağlanması için ürün ve hizmetlerinin yerel para cinsinden değerini düzenli olarak değerlendirmektedir. 1 Şubat 2022 itibarıyla uygulamaya konacak olacak yeni fiyatlama da söz konusu değerlendirmenin bir sonucudur.</i></b></div><div><b><i>Microsoft, Azure web sitesine Microsoft Online Servisler Anlaşması (MOSA) başlığı altında yer alan “Kullandıkça Öde / Pay As YouGo” aboneliklerin fiyatlarını Türk Lirası cinsinden yeniden düzenleyecektir. 1 Şubat 2022 itibarıyla, Azure fiyatları Türk Lirası bazında %68 artırılarak global fiyatlarla uyumlu seviyeye getirilecektir. Söz konusu uygulama Azure web sitesindeki “Kullandıkça Öde / Pay As You Go” abonelikleri için geçerlidir.</i></b></div><div><b><i>Kullandıkça Öde model aboneliği bulunan müşterilerimiz, minimum bir satın alma gerekliliğine tabi tutulmadan esnek fiyatlandırmadan faydalanmaktadır. Bu müşterilerimiz, 1 Şubat 2022 tarihinden itibaren yeni fiyat uygulamasına geçirileceklerdir. Azure.com üzerinden Azure satın alan müşterilerimiz, tabi tutuldukları fiyatlandırmanın diğer para birimleriyle yakın seviyelerde olduğunu görebilirler.</i></b></div><div><b><i>Söz konusu fiyat değişimi, Amerikan Doları cinsinden fiyatlanan CSP hizmetlerini ve Kurumsal Anlaşmalar (EA, EAS), Microsoft Ürün ve Servisleri Sözleşmesi (MPSA) ya da Servis ve Bulut Sözleşmeleri (SCE) üzerinden hizmet alan müşterileri etkilemeyecektir.</i></b></div></div>', 'images/0UmLLlUw5nsnLSvU3LBqkZvH3EO9WuWnbJPWhsW2.jpg', 'Microsoft logosu', 'microsoft, zam', 1, '2022-06-05 16:39:18', '2022-06-05 16:39:18'),
(12, 2, 'Android oyunları, önümüzdeki yıl Windows cihazlara geliyor', '<div>Hayatımızın değişmez bir parçası haline gelen mobil uygulama ve oyunlar yakında zamanda bilgisayarlarda da karşımıza çıkacak. Bugün yeni bir açıklama yapan Google, Android oyunlarının Windows bilgisayarlara geleceğini duyurdu. Google tarafından paylaşılan bilgilere göre Android oyunları önümüzdeki yıl Windows işletim sistemine sahip olan laptop, bilgisayar ve tabletler tarafından kullanılabilecek.</div><div>Edindiğimiz bilgilere göre Google, Windows için Google Play Games isimli bir uygulama geliştirecek. Bu uygulama 2022 yılında Windows için yayınlanacak. Sadece yeni Windows 11 sürümü için yayınlanmayacak olan Google Play Games uygulaması Windows\'un eski sürümlerini de destekleyecek.</div><div>Hatırlatmak gerekirse benzer bir hamle daha önce Google\'ın PC alternatifi olan Chromebook modelleri için atılmıştı. Söz konusu oyunların hem Android cihazlarda hem de Windows cihazlarda senkronize bir şekilde oynanacağını da belirtelim.</div><div>Kısacası telefonunuzdan oynadığınız bir Android oyuna kaldığınızda yerden Windows bilgisayarınızda devam edebileceksiniz. Senkronizasyonun gerçekleşebilmesi için her iki cihazda da aynı Google hesabının açık olması gerekiyor.&nbsp;</div><div>Android ve Windows işletim sisteminin son zamanlarda oldukça yakın çalıştığını da belirtelim. Hatırlatmak gerekirse Amazon ile önemli bir anlaşma imzalayan Microsoft, bazı Android oyun ve uygulamalarının Amazon Appstore aracılığı ile Windows cihazlara yüklenmesine izin de vermişti.</div>', 'images/df3ndc7CCvNfx7WCdOubmdDacPc2Ihx8U2UyNR2m.png', 'Android oyunları windows işletim sistemi üzerinde gösteren görsel', 'microsoft, android, oyun', 1, '2022-06-05 16:40:30', '2022-06-05 16:40:30'),
(13, 3, 'Masaüstü Modeli Intel Arc Alchemist Ekran Kartından İlk Görüntü Geldi', '<div>Intel artık ekran kartı pazarına tam anlamıyla giriş yaptı. Her ne kadar şimdilik sadece mobil serilerin özellikleri açıklanmış olsa da çok yakında masaüstü&nbsp; Intel Arc Alchemist modellerinin de detayları açıklanacak.</div><div><br></div><div>Çok yakında diyorum çünkü yavaş yavaş yeni masaüstü ekran kartları için gerçek görseller de yayınlanmaya başladı. En son mobil serilerin tanıtımı sırasında yeni masaüstü modeli için bir teaser yayınlandığını görmüştük.</div><div><br></div><div>Şimdi de bu modeli kanlı canlı görebildik. Zira marka, Intel Extreme Master 2022 etkinliği sırasında kartı sergiledi.</div><div><br></div><div>Intel Arc Alchemist Ekran Kartları Yolda</div><div>Hangi model olduğu ve özelliklerinin ne olduğu bilinmeyen bu kart için bir isim ibaresi de göremiyoruz. Tek gördüğümüz şey yeni ekran kartının tasarımının tam da videoda gösterildiği gibi olması.</div><div><div>Kartın çift fanlı olarak geleceği ve kapalı bir yapıda olacağını anlıyoruz. Arka kısımda ARC logosunun yer aldığı bir kapak bölümü kullanılmış.</div><div><br></div><div>Intel özellikleri ve serinin adını açıklamadı ama daha önce yapılan tanıtımdan da gelen bilgilere göre bu serinin ACM-G10 GPU birimi üzerinden yükselen model olması bekleniyor.</div><div><br></div><div><div>Tam olarak isimlendirme A770 şeklinde mi yoksa A780 olarak mı yapılacak net değil ancak iki modelde de 16 GB GDDR6 bellek kullanılacağı biliniyor.</div><div><br></div><div>RTX 3070 seviyelerinde bir ekran kartı olduğu söylenen yeni modelin tüm özelliklerinin açıklanacağı tanıtım da çok yakında diyebiliriz. Zira artık ekran kartı stantlarda sergilenecek seviyeye gelmiş.</div></div></div>', 'images/qrPJKxPk6s2kkVNAsreaUCI7GuJjWkEC59Pa8b01.webp', 'Intel ARC görseli', 'intel, arc', 1, '2022-06-05 16:43:04', '2022-06-05 16:43:04'),
(14, 3, 'ASUS Prime AP201 MicroATX Kasa Modeli Tanıtıldı! Tüm Detaylar', '<div>Kullanıcı ihtiyaçlarına hitap edecek ürünler hazırlayan ASUS, yine bu noktada değerlendirebileceğimiz bir ürün daha tanıttı. Tasarımıyla farkını gösteren ASUS Prime AP201 MicroATX kasa modeli duyuruldu.</div><div><br></div><div>Benzerlerinde biraz daha farklı bir formu olan yeni kasa, 33 litrelik bir hacimle geliyor ve kullanıcı dostu yapısıyla önemli işlevsellik artıları sunuyor. Tabii ki bunlarla kalmayacağız ve yeni kasayı da baştan sona değerlendireceğiz. Hemen detaylara geçelim.</div><div><br></div><h2>ASUS Prime AP201 MicroATX Tasarımı Nasıl?</h2><div>Aslında minimalist bir kasadan söz ediyoruz. Fakat öyle bir yapı kullanılmış ki kasanın hem çok fazla yer işgal etmemesi sağlanmış hem de içinin bir hayli geniş tutulması sağlanmış.</div><div>Genel tasarıma baktığımız zaman da 3 bir tarafın ve üst bölümün delikli yapıda olduğunu görüyoruz. ASUS, kasa üzerinde toplam 57.000 adet olmak üzere hassas olarak işlenmiş 1,5 mm deliğe yer vermiş.</div><div><br></div><div><div>Yan kısımlarda da yarı filtreli delikli kapaklar hem hoş bir görüntü sunmuş hem de hava akışı için istenen akımın oluşması sağlanmış. Alt, üst, ön ve yanlardaki bu yapı, soğutma performansını önemli ölçüde etkiliyor deniyor. Deniyor diyorum zira henüz yeni kasa modelini inceleme fırsatımız olmadı.</div><div><br></div><div>Bu delikli yapı dışında tasarım kısmında yine önemli diyebileceğimiz detaylar var. Bir kere kasa yerden yüksek olması adına bir tık uzun destek ayaklarına sahip. Bu yapı hem kasanın daha şık gözükmesini sağlamış hem de alt taraf için hava akımının artmasını kasanın daha iyi nefes almasını sağlamış. ASUS ek olarak alt kısımda kolay çıkarılabilir bir toz filtresi de kullanmış.</div><div><br></div><div><div>Tasarım kısmında son olarak söyleyebileceğimiz şey, butonların ve portların ön kısma alındığı. Üst bölümde değil de ön kısımda kullanılan butonlar ve portlar, kullanım kolaylığı açısından önem sağlıyor.</div><div><br></div><div>Renkler: Beyaz ve Siyah seçenekleri</div><div>Hacim: 33 litre</div><div>Yan Kapaklar: Basit klips mekanizmasıyla çıkıyor. Yanlışlıkla çıkmaya karşı da korumalı.</div><div>Kablo Düzenleme: 32 mm kablo düzenleme alanı var ve sistem toplamayı kolaylaştırıyor.</div><div>Boyut: 205 mm X 350 mm X 460 mm</div><div>Malzeme: Çelik, Plastik</div><div>Ağırlık: 5.8 kg</div></div></div>', 'images/6G9v2Xp23JnLBWo68AzfXzme96W7psXCz8PZOWOk.webp', 'ASUS AP201 görseli', 'asus, ap201', 1, '2022-06-05 16:44:41', '2022-06-05 16:44:41'),
(15, 3, 'AOC AGON PRO AG274QZM Piyasaya Çıkıyor! Fiyatı ve Özellikleri', '<div>Oyuncu monitörleri pazarında adını kanıtlamış markalardan biri olan AOC, Mayıs ayını hızlı geçirdi. Marka yeni oyuncu monitör modellerini bir bir pazara sunmaya başladı. İddialı özellikleriyle dikkat çeken bu modellerden birisi de AGON PRO AG274QZM oldu.</div><div><br></div><div>Yüksek performanslı oyuncu monitörlerinden biri olarak karşımıza çıkan seri, özellikle görüntü kalitesi açısından da çok konuşulacak modellerden biri olacak gibi gözüküyor. O zaman tasarıma ve teknik detaylara bir bakalım.</div><div><br></div><h2>AOC AGON PRO AG274QZM Tasarımı Nasıl?</h2><div>AOC, bu seride tanıdık bir tasarım dili kullanıyor. Serinin diğer modellerinde olduğu gibi AGON PRO AG274QZM tasarımının da benzer yapıda olduğunu görüyoruz.</div><div><br></div><div>Ön kısımda, üst ve yanlarda çok ince çerçevelerin kullanıldığı yapı, görüş alanının biraz daha genişlemesini sağlıyor. Hemen alt kısımda ise pençe tarz destek ayağı görüyoruz.</div><div><br></div><div><div><br></div><div>AOC AGON PRO AG274QZM Piyasaya Çıkıyor! Fiyatı ve Özellikleri</div><div>Oyuncu monitörleri pazarında adını kanıtlamış markalardan biri olan AOC, Mayıs ayını hızlı geçirdi. Marka yeni oyuncu monitör modellerini bir bir pazara sunmaya başladı. İddialı özellikleriyle dikkat çeken bu modellerden birisi de AGON PRO AG274QZM oldu.</div><div><br></div><div>Yüksek performanslı oyuncu monitörlerinden biri olarak karşımıza çıkan seri, özellikle görüntü kalitesi açısından da çok konuşulacak modellerden biri olacak gibi gözüküyor. O zaman tasarıma ve teknik detaylara bir bakalım.</div><div><br></div><div>AOC AGON PRO AG274QZM Tasarımı Nasıl?</div><div>AOC, bu seride tanıdık bir tasarım dili kullanıyor. Serinin diğer modellerinde olduğu gibi AGON PRO AG274QZM tasarımının da benzer yapıda olduğunu görüyoruz.</div><div><br></div><div>Ön kısımda, üst ve yanlarda çok ince çerçevelerin kullanıldığı yapı, görüş alanının biraz daha genişlemesini sağlıyor. Hemen alt kısımda ise pençe tarz destek ayağı görüyoruz.</div><div><br></div><div>Dediğim gibi bu seride sık sık tercih edilen tasarım dillerinden birisi ve şahsen bu tasarımı ben de gayet başarılı buluyorum.</div><div><br></div><div><div>Ön kısmı bırakıp ekranın arka kısmındaki tasarıma geçtiğimiz zaman ise oyuncu serisi ürünlerde aradığımız hareketi yakalıyoruz. Arka kısımda çizgilerle beraber sunulan aydınlatma, ekranın çok daha şık gözükmesini ve bir miktar da ortamı aydınlatmasını sağlıyor.</div><div><div>Çeşitli renk destekleri olan aydınlatmanın diğer AOC ürünleriyle de tam bir uyum içerisinde çalıştığını ekleyelim.</div><div><br></div><h3>Ergonomik Yapı</h3><div><br></div><div>Eğilme: -3° ±2°~21° ±2°</div><div>Dönme: -20° ±2°~20° ±2°</div><div>Pivot Özelliği: Var</div><div>Yükseklik Ayarı: 120mm</div><div>Boyutlar: (427.3~547.3）(H) × 612.9 (W) ×352.1(D)</div><div>Ağırlık: 7.5 kg</div><div>Portlar: USB 3.2 Gen 1, DisplayPort 1.4 x 1, 2 x HDMI 2.1, 4 USB port, mikrofon girişi, kulaklık çıkışı</div><div>Aydınlatma: Arka kısımda Light FX aydınlatma</div><div>Logo Projektörü: Alt kısımda ek logo projektörü</div></div></div><div><br></div></div>', 'images/Qadabqlq9hCksZdicthbUNMjRRBAV6qqzhg9Pc7w.webp', 'AOC AGON PRO AG274QZM görseli', 'aoc, monitör', 1, '2022-06-05 16:46:08', '2022-06-05 16:46:08'),
(16, 3, 'Intel Core i7-12850HX Özellikleri ve Teknik Detayları Nasıl?', '<div>Amiral gemisi işlemciler için son nesil HX nesli oldu. Intel 12.nesil Intel HX modellerini geçen hafta itibariyle duyurdu. Duyurunun ardından i9 modellerini sizlerle paylaşmıştık. Şimdi ise sıra geldi i7 modellerine. İlk ele alacağımız işlemci de Intel Core i7-12850HX modeli olacak.</div><div><br></div><div>i9 HX serisi kadar değil ama yine de amiral gemisi bir işlemci ile karşı karşıya olduğumuzu söylemek lazım. Gerek çekirdek sayısı gerekse de saat hızları konusunda çok iddialı bir model. Hadi hemen özelliklere geçelim.</div><div><br></div><div><h2>Intel Core i7-12850HX Özellikleri için Tüm Merak Edilenler</h2><div>Hibrit mimarisinin son üyelerinden olan 12850HX, 16 çekirdekle beraber geliyor. İzlek sayısı kısmında da 24 izlek olduğunu belirtelim. Bu yönüyle i9 modelleriyle aynı değerleri sunan işlemci, önbellek kısmında ise 25 MB Intel Smart Cache ile geliyor.</div><div><br></div><div><h3>Teknik Detaylar Özet</h3><div><br></div><div>Çekirdek Sayısı: 16</div><div>İzlek Sayısı: 24</div><div>Performans Çekirdekleri: 8</div><div>Verimlilik Çekirdekleri: 8</div><div>Performans çekirdekleri maksimum frekans: 4.80 GHz</div><div>Performans çekirdekleri minimum frekans: 2.1 GHz</div><div>Verimlilik çekirdekleri maksimum frekans: 3.4 GHz</div><div>Verimlilik çekirdekleri minimum frekans: 1.7 GHz</div><div>Grafik Birimi: 32EU</div><div>Grafik frekansı: 1.45 GHz</div><div>TDP Standart: 55W</div><div>Maksimum TDP: 157W</div><div>VPro: Evet</div><div>ECC Desteği: Var</div><div>Hız Aşırtma: Limitli çekirdek OC, full bellek</div><div>Intel Core i7-12850HX için tüm özellikler ve detaylar bu şekilde. Yeni seriye sahip olacak olan bilgisayarları da merakla bekliyoruz. Yakında söz konusu işlemcileri barındıran PC modellerini de görmeye başlarız.</div></div></div>', 'images/jnSLQkujz622esqPKcvnxRR3OAPRYwgacTtqjYfs.webp', 'Intel core görseli', 'intel', 1, '2022-06-05 16:47:36', '2022-06-05 16:47:59'),
(17, 3, 'NVIDIA GeForce RTX 40 Serisinin Tanıtım Tarihi için Yeni Bir Sızıntı Geldiv', '<div>NVIDIA GeForce RTX 40 serisinin teknik özellikleri için çok fazla sızıntı geldi. Kartların ne kadar güçlü olacağı üzerine de konuşmalar başladı. Fakat teknik özellikler bir yana tabii ki beklediğimiz yeni ekran kartlarının ne zaman tanıtılacağı.</div><div><br></div><div>Teknik özellikler açısından göz doldurucu olacağını düşündüğümüz modellerin ne zaman tanıtılacağına ilişkin yeni bir bilgi de sızdı. Buna göre söz konusu modeller çok yakın.</div><div><br></div><h3>NVIDIA GeForce RTX 40 Serisi için İlk Tanıtım Ağustos 2022’de Olabilir</h3><div>Yakın bir zamanda Kopite7kimi tarafından bir sızıntı gerçekleştirilmişti. Yapılan sızıntı da seride önce RTX 4090 modelinin tanıtılacağı, sonrasında ise RTX 4080 ve RTX 4070 modellerinin geleceği vurgulanmıştı.</div><div><br></div><div>İşte bu sızıntıyı doğrulayacak yeni raporlar ortaya çıktı. Raporlara göre söz konusu ekran kartları için ilk tanıtım Ağustos ayında yapılacak.</div><div><br></div><div>Ağustos 2022’de ilk olarak RTX 4090 ekran kartını göreceğiz. Söylenene göre Eylül 2022 lansmanında ise RTX 4080 ekran kartı gelecek. Hemen sonrasında Ekim ayı içerisinde ise RTX 4070 tanıtımı yapılacak.</div><div><br></div><div><div>Sızıntı doğruysa yaz sonunda NVIDIA GeForce RTX 40 serisiyle tanışmış olacağız. Ama burada sızıntıların ne kadar doğru olduğu da önemli. Şöyle bir durum da var ki henüz RTX 30 modelleri için yeni tanıtılan modeller var.</div><div><br></div><div>Bu modellerin biraz daha pazarda son nesil olarak kalması isteniyor mu istenmiyor mu bu da önemli bir konu.</div></div>', 'images/gAKOsLYbiI2nqURTg3ZCSWXcRN4yEUDh6X049pYF.webp', 'Geforce görseli', 'geforce', 1, '2022-06-05 16:49:19', '2022-06-05 16:49:19'),
(18, 3, 'Ryzen 7000, Hız Aşırtma Olmadan 5.5 GHz Değerini Görmüş', '<div>AMD,&nbsp; Computex 2022 kapsamında Ryzen 7000 serisi için ilk tanıtımını yapmıştı. Yeni mimari ve genel olarak işlemciler için bilgiler veren AMD, tanıtım sırasında serinin modellerinden biriyle bir oyun testi yayınlamıştı.</div><div><br></div><div>Mühendislik örneği mi değil mi tam olarak bilemediğimiz işlemcinin ise 5.5 GHz saat hızına kadar çıktığı gözükmüştü.</div><div><br></div><div>Ghostwire Tokyo oyunuyla beraber yapılan testlerde görülen saat hızları konusunda ise yeni detaylar ortaya çıkmaya başladı.</div><div><br></div><div><h3>AMD, Ryzen 7000 Testlerinde Hız Aşırtma Yapmamış</h3><div>Ian Cutress tarafından ortaya çıkarılan bilgilere göre bu testler sırasında ekstra bir işlem kullanılmamış. Yani işlemci için herhangi bir hız aşırtma yapılmamış. Stok frekans değerlerinde işlemcinin bu değerlere çıktığı söyleniyor.</div><div><br></div><div>İş parçacıklarının bir çoğu için de 5 GHz değerinin aşıldığı gözüküyor. Yani birden fazla çekirdek için 5 GHz üzerinde değerler görülmüş durumda.</div><div><br></div><div><div>Hız aşırtma yapılmadan ve çok aşırı bir soğutucu kullanılmadan ( 280 mm Asetek all in one sıvı soğutucu kullanıldığı söyleniyor) bu değerlerin gözükmesi, Ryzen 7000 serisinin çok güçlü bir seri olacağını gösteriyor.</div><div><br></div><div>Tabii ki bunları konuşmak için biraz erken. Önce tüm modelleri, sahip oldukları saat hızlarını ve çekirdek sayılarını tam olarak görmek lazım. Zira şu an için oyunda kullanılan işlemcinin serinin hangi modeline ait olduğunu bile bilmiyoruz.</div></div></div>', 'images/hjOPcpGdzqQgBZW57GCzG0OBQcNvr28Ud3yRSwL5.webp', 'Ryzen tanıtımından bir görsel', 'Ryzen', 1, '2022-06-05 16:50:55', '2022-06-05 16:50:55'),
(19, 4, 'Bilim-2 gemisinin Marmara\'daki 1 aylık incelemesinden sevindirici sonuçlar', '<p>Marmara Denizi\'nde birçok noktada görülen müsilaj oluşumunu araştırmak üzere ODTÜ Deniz Bilimleri Enstitüsünün araştırma gemisi Bilim-2 seyrüfesere çıkmıştı.</p><p>1 aydır Marmara Denizi genelinde çalışma yürüten bilim ekibinin son çalışmaları ve tespitleriyle ilgili Deniz Bilimleri Enstitüsü Öğretim Üyesi ve Enstitü Müdür Yardımcısı Doç. Dr. Mustafa Yücel DHA\'ya bilgi verdi. Bilim- 2 gemisinde bulunan ahtapot , çoklu karot örnekleyici cihazı ve derin suya özel geliştirilmiş sensörlü cihazlarla müsilajın derin sulara, 100 metre ve altına inip inmediğine bakıldı. Bilim ekibi müsilajın etkilerini inceledi.</p><h3>\"ÜREMESİNİN, BÜYÜMESİNİN BİRAZ DURDUĞUNU GÖRÜYORUZ\"</h3><div><div>Yürüttükleri çalışmalarının ardından tekrar karaya dönen ve yapılan ikmalin ardından yeniden sefere çıkarak araştırmalarını sürdüreceklerini söyleyen Doç. Dr. Mustafa Yücel, \"En önemli bulgu, müsilaj ilk 30 metreye sıkışmış durumda. Üremesinin, büyümesinin biraz durduğunu görüyoruz. En azından yüzeydeki o eski 2 hafta önceki etkisinin olmadığını görüyoruz. Zaten oluşmuş olan müsilaj yığınları ilk 30 metrede yığılmış durumda. Yaptığımız araştırmalar daha derin suya inmediğini gösteriyor ve derin deniz tabanına da müsilaj tabakanın çökmediğini son günlerde bulduk\" diye konuştu.</div><h3>\"İLK 30 METREDE KALMASI MARMARA İÇİN OLUMLU BİR HABER\"</h3><p>Doç. Dr. Mustafa Yücel, \"Olumlu tarafından bakarsak. Marmara\'nın derin suyu yani 30-40 metre ötesi zaten son 30-40 yıldır zaten artan azot fosfor girdiler aşırı biyolojik üretim nedeniyle zaten oksijenini tamamen yitirmek üzere çok az bir oksijen kalmış durumda.</p></div><div><div>Derin suya çökmesi şöyle kötü olurdu. Müsilaj organik bir oluşum ve üremesini durdurduğunda oksijen bedeli karşılığında yani o sistemden oksijen tüketecek. Bunun dibe çökmeyişi, ilk 30 metrede kalması Marmara için olumlu bir haber. Marmara iki tabaklı bir deniz. 25-30 metresi Karadeniz orijinli bir su, Ege\'ye doğru akıyor. Alttaki su ise daha eski statik bir sur karışmıyor. Şuan zaten uydu verilerinden de gördüğümüz, Çanakkale Boğazı\'ndan Ege\'ye doğru bu müsilaj tabakalarının önemli bölümünün çıktığı yönünde. Tabi bu Ege Denizi için bir risk ama Marmara için bu nispeten olumlu bir gelişme\" diye konuştu. \"İlk 30 metrede kaldıkça Marmara\'dan çıkış yapma olasılığı var\" diyebildiklerini söyleyen Yücel, \"Diğer bir olasılıkta bu bozulacaksa, oksijen faturası bize kesilecekse yüzeyde kesmesi ekosistem açısından daha avantajlı.</div><div><br></div></div><div>Çünkü atmosfere daha yakın yüzey. Kış mevsimi geldiğinde karışım başladığında tekrar oraya oksijen girdileri olur ama derin suya olmaz. Tabi ki oksijen faturası kesecek bunu yüzeyde kesse daha iyi diye düşünüyoruz\" şeklinde konuştu.</div>', 'images/vQrXMOIKPngiMj4tpRnOwghcuABfWnifhvUoFiGC.webp', 'Bilim-2 gemisinin görseli', 'bilim', 1, '2022-06-05 16:57:10', '2022-06-05 16:57:10'),
(20, 4, 'Dünyanın ilk \'düşünen\' robotu geliştirildi', '<p>Laboratuvarda büyütülen beyin benzeri nöronlara sahip olan robottaki hücreler elektrikle uyarıldığında, makine küçük bir labirentte başarılı bir şekilde gezindi. Araştırmacılar, ‘fiziksel rezervuar hesaplama’ adı verilen bir tekniğin, robotun beyin dalgalarını anlamlandırmasını ve engelleri aşmasını sağladığını söyledi.</p><p>TRT Haber\'in Independent\'a dayandırdığı habere göre, çalışmanın yardımcı yazarı Prof. Dr. Hirokazu Takahashi, \"Bu sinir hücreleri veya nöronlar, bir beyinden alınan canlı hücrelerden büyütüldü. Bilgisayarın tutarlı sinyaller oluşturması için fiziksel rezervuar görevi gördüler” dedi.</p><p>                 \r\n              </p>', 'images/Wu1e7m3Kj4x1VUFkHMUc3FzRrp9U9VA4lHKV6GCS.jpg', 'Robot görseli', 'robot', 1, '2022-06-05 16:58:20', '2022-06-05 16:58:20'),
(21, 4, 'Bilim insanlarından heyecanlandıran keşif! ABD\'de bulunan dinozor fosili, gök taşı iddialarını gündeme getirdi', '<p>ABD\'de bulunan fosil, bilim dünyasında büyük heyecan yarattı. Mükemmel şekilde korunmuş fosilin dev göktaşının dünyaya çarptığı gün ölen bir dinozora mı ait olduğu konuşuluyor.</p><p>Derisi bile duran bu fosil, ABD\'nin Kuzey Dakota eyaletindeki Tanis fosil bölgesindeki etkileyici fosil keşiflerinden biri. Ama heyecanlanmamız için tek sebep fosilin çok iyi korunmuş olması değil; aynı zamanda temsil ettiği şey.</p><p>Bu bacağın ait olduğu dinozorun ve Tanis\'te bulunan diğer fosillerin, tam olarak, dinozorlar ve birçok canlının yok olmasına sebep olan dev göktaşının dünyaya çarptığı gün öldüğü düşünülüyor.</p><p>12 kilometre çapındaki göktaşının 66 milyon yıl önce dünyaya çarpmasıyla, dinozorlar da dahil canlıların yüzde 75\'inin yok olduğu artık genel bir kanı haline geldi. Bu olayla dinozorlar saltanatı sona ermiş ve memelilerin yükselişi başlamıştı.</p><p>Ancak şu ana kadar, büyük çarpmanın birkaç bin yıl yakınına ait bile çok az fosil bulunmuştu. Bu nedenle çarpma gününe ait bir fosil bulunmuş olması ihtimali, kesin kanıtlanamamış olsa bile, olağanüstü bir durum.</p><h3>3 BİN KİLOMETRE MESAFEDE</h3><p>Göktaşının, Meksika Körfezi\'nde Yucatan bölgesi yakınına düştüğü biliniyor. Burası Tanis\'e yaklaşık 3 bin kilometre mesafede. Ama göktaşının büyüklüğü ve yarattığı etki düşünülünce bu mesafe aslında oldukça yakın.</p><p>Bulunan fosillerin ve kaya parçalarının tam bir keşmekeş halinde birbirine geçmiş olması da adeta o gün yaşananları özetliyor.</p><p>Tanis bölgesinde, bu dinozor bacağının yanı sıra, bazı balık fosilleri de bulundu.</p><p>Kazıları yürüten ekibin başındaki Manchester Üniversitesi\'nden Robert DePalma \"Bu bölgede an be an neler olduğunu bize anlatan birçok detay var. Sanki yaşananları bir filmde izliyormuşuz gibi. Kayaya, oradaki fosillere bakıyorsunuz ve sizi o güne geri götürüyor\" diyor.</p><p>Basında ilk kez 2019 yılında yer alan Tanis fosil bölgesi hakkında şu ana kadar hakemli dergilerde yayımlanmış birkaç makale bulunuyor, ve bilim insanları gerisinin geleceğini söylüyor.</p><p>BBC belgesel bölümü Tanis\'te son 3 yıldır çekim yapıyor. Bağımsız uzmanların da yorumlarıyla katkıda bulunduğu belgesel, ünlü belgeselci Sir David Attenborough\'nun anlatımıyla 15 Nisan\'da gösterilecek.</p><p>                 \r\n              </p>', 'images/aam7SWWcyH9B7zVq4b1jgP18S9eUdpwWGOdr9gfR.webp', 'Fosilin görüntüsü', 'fosil, abd', 1, '2022-06-05 16:59:49', '2022-06-05 16:59:49'),
(22, 4, 'Bilim insanları bir ilki başardı: Ay\'da yaşam mümkün mü?', '<p>CNN International\'ın haberine göre, NASA\'nın Artemis programı kapsamında yapılan çalışmalar, dünya habitatına nazaran Ay toprağında yetişen bitkilerin daha meşakkatli bir yoldan geçtiğini ortaya koydu.</p><p>Florida Üniversitesi\'nde araştırma profesörü Lisa Paul, \"Bitkiler, aydan geri getirilen toprak örneklerinin karasal yaşama zarar verecek patojenler veya diğer bilinmeyen bileşenler içermediğinin belirlenmesine yardımcı oldu, ancak bu bitkiler yalnızca ay regolitiyle tozlandı ve içinde asla yetiştirilmedi.\" dedi.</p><p>Araştırmacılar deneyleri bir adım öteye götürerek tohumların ay toprağında büyüyüp büyümeyeceğini görmek istedi. Araştırmacılar çalışmalar sonunda, \"\"Gelecekteki daha uzun uzay görevleri için Ay\'ı bir merkez veya fırlatma rampası olarak kullanabiliriz\" ifadelerine yer verdi.</p><p>Lisa Paul, \"Bu, bilime ve ay regolitinin bitkiler üzerindeki etkilerine, aksi takdirde yapabileceğimizden daha derin bir bakış atmamızı sağlamada büyük bir fark yarattı\" dedi.</p><p>                 \r\n              </p>', 'images/94k3Bg4kGrYsETtb9j1n7cQO01SlJhtaVpcK0YqA.jpg', 'Artemis programından görsel', 'artemis', 1, '2022-06-05 17:01:09', '2022-06-05 17:01:09');
INSERT INTO `haber_habers` (`id`, `kategori_id`, `baslik`, `icerik`, `resim`, `resim_aciklama`, `etiket`, `admin`, `created_at`, `updated_at`) VALUES
(23, 4, '‘Nazik devi’ Türk astrofizikçi tanıttı', '<div>2019’da elde edilen ilk karadelik görüntüsünden 3 yıl sonra bilim insanları Samanyolu galaksisinin merkezinde yer alan karadeliği görüntülemeyi başardı. Sagittarius A isimli karadelik, Dünya’ya 27 bin ışık yılı uzaklıkta bulunuyor.</div><div><br></div><div><div>Galaksimizin Samanyolu’nun merkezinde, Güneş’ten 4 milyon kat daha büyük kütleye sahip Karadelik ilk defa görüntülendi. Hürriyet\'ten Razi Canikligil\'in haberine göre, Arizona Üniversitesi’nde görev yapan Türk astrofizikçi Prof. Dr. Feryal Özel, ABD Washington’da düzenlenen basın toplantısında, ‘Sagittarius A’ isimli süper kütleli karadeliğin görüntüsünü dünyayla paylaştı. 2019’da Messier 87 galaksisindeki karadeliği ilk defa görüntülemeyi başaran ekipte de yer alan Özel, yeni görüntüyü paylaşırken karadeliği “galaksimizin merkezindeki nazik dev” olarak adlandırdı.</div></div><div><br></div><h3>27 BİN IŞIK YILI UZAKTA</h3><div><div>Bilim insanlarının varlığını 1974 yılında keşfettiği Sagisttarius A’nın görüntüsü, dünya çapında sekiz senkronize radyo teleskobundan oluşan Event Horizon Teleskopu’yla (EHT) yakalandı. Sagittairus A, Dünya’ya yaklaşık 27 bin ışık yılı uzaklıkta yer alıyor. Bu uzaklıktaki karadeliği mercekte yakalamak ve fotoğraflamak ise olağanüstü görüntü çözünürlüğü gerektiriyor. EHT’nin topladığı verileri fotoğrafa dönüştürmek için ‘süper bilgisayarlar’ kullanılıyor.</div></div><div><br></div><h3>İLK KARADELİK 2019’DA GÖRÜNTÜLENMİŞTİ</h3><div><div>İlk karadeliğin fotoğrafı, 2019’da Messier 87 (M87) galaksisinin merkezinden çekildi. Dünya’dan yaklaşık 52 milyon ışık yılı uzaklıktaki Messier 87 galaksisinin merkezindeki karadeliğin boyutu, Güneş’ten 6.5 milyar kat daha büyük. Biliminsanları Sagittarius A ve Messier 87 karadeliklerinin görüntülerini karşılaştırarak gizemli karadelikler hakkında daha çok bilgi sahibi olmayı umuyor.</div></div>', 'images/qzi2pCUlcE7TGnxj3aEw6i2B0jNNk4Mj3A3C12bB.jpg', 'Nazik dev\'in görseşi', 'nazik, dev, astrofizik', 1, '2022-06-05 17:02:39', '2022-06-05 17:02:39'),
(24, 4, 'Evrenin açıklanamayan sırları: Hubble\'ın elde ettiği veriler bilim insanlarını şaşırttı', '<div>NASA’nın evrenin nasıl genişlediği konusunda Hubble Uzay Teleskobu ile elde ettiği verilerdeki tutarsızlığın mevcut fizikle açıklanamayacağı belirtildi. Son 30 yılda, uzay gözlemevi bilim insanlarının bu hızlanma oranını keşfetmelerine ve iyileştirmelerine yardımcı olurken gizemli bir kırışıklığı da ortaya çıkardı. Bilim insanları ise evrenin sırlarını barındıran bu yeni keşifte \'tuhaf bir şey\' olduğunu dile getirdi.</div><div><br></div><div><div>Amerikan Havacılık ve Uzay Dairesi (NASA) evrenin gözlemlenmesi amacıyla 1990’da uzaya Hubble Uzay Teleskobu’nu fırlatmıştı. Hubble görev yaptığı 30 yıl boyunca evrendeki 42 ayrı noktayı belirleyip bu noktalardaki değişiklikleri hesaplayarak evrenin genişleme hızını ölçtü. Yakın tarihte bu görevini tamamlayan Hubble’dan elde edilen veriler, bilim insanlarını çok şaşırttı.</div></div><div><br></div><div><div>Çünkü evrenin mevcut genişleme hızı ile Büyük Patlama’dan hemen sonraki hızı arasında büyük fark vardı.</div></div><div><br></div><h3>‘YEPYENİ KURALLAR\'</h3><div><div>Hubble’ın ölçümleri, evrenin genişleme hızının megaparsek (3.26 milyon ışık yılına eşit mesafe ölçü birimi) başına 73 kilometre olduğunu gösteriyor. Ancak derin evrende bu hız 67.5 kilometreye düşüyor. NASA bu farkın mevcut fizik kurallarıyla açıklanamadığını duyurdu.</div></div><div><br></div><div><div>Yapılan açıklamada “Hızlar arasındaki tutarsızlığın nedeni bir sır olarak kaldı. Hubble verileri, bizim bilmediğimiz yepyeni bir fizik kuralını içeren garip bir şeyin olduğu fikrini destekliyor” denildi.</div></div>', 'images/hdy7A2pPwD069h3LA7eXpk4jE39Bfa2MabNCWMMc.jpg', 'Evren görüntüsü', 'evren', 1, '2022-06-05 17:03:43', '2022-06-05 17:03:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber_kategoris`
--

CREATE TABLE `haber_kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim_aciklama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `navbar_gorunme` tinyint(1) DEFAULT 1,
  `footer_gorunme` tinyint(1) DEFAULT 1,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `haber_kategoris`
--

INSERT INTO `haber_kategoris` (`id`, `ad`, `aciklama`, `resim`, `resim_aciklama`, `icon`, `navbar_gorunme`, `footer_gorunme`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Teknoloji', 'Teknoloji kategorisi, teknoloji alanındaki tüm haberlere anında ulaşmak için bizleri takip etmeyi unutmayın.', 'images/FrljmD0oethPk8OhRJ3wHWDKvdZ2AuQT2VpH5CmV.bin', 'Teknoloji kategorisi, kategori resmidir.', 'fas fa-meteor', 1, 1, 1, '2022-06-05 15:36:19', '2022-06-05 16:26:35'),
(2, 'Yazılım', 'Yazılım kategorisi, yazılım alanındaki tüm haberlere anında ulaşmak için bizleri takip etmeyi unutmayın.', 'images/Yfvt348BpjW5BITTG89ctRRGYwmpzsoCRAc8P6RB.bin', 'Yazılım kategorisi, kategori resmidir.', 'fas fa-code', 1, 1, 1, '2022-06-05 15:37:27', '2022-06-05 15:38:49'),
(3, 'Donanım', 'Donanım kategorisi, donanım alanındaki tüm haberlere anında ulaşmak için bizleri takip etmeyi unutmayın.', 'images/eZ2TjTaAqxCSeB3l0HO0Seq9ohwVUjTl0hXAKoAa.bin', 'Donanım kategorisi, kategori resmidir.', 'fas fa-memory', 1, 1, 1, '2022-06-05 15:44:32', '2022-06-05 15:44:32'),
(4, 'Bilim ve Uzay', 'Bilim kategorisi, bilimalanındaki tüm haberlere anında ulaşmak için bizleri takip etmeyi unutmayın.', 'images/YauSACsbHK0srWeaZCDe16LKvSkJPttmvDhjrlvU.jpg', 'Bilim kategorisi, kategori resmidir.', 'fas fa-microscope', 1, 1, 1, '2022-06-05 15:59:51', '2022-06-05 17:04:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber_sayfas`
--

CREATE TABLE `haber_sayfas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerik` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `navbar_gorunme` tinyint(1) DEFAULT 1,
  `footer_gorunme` tinyint(1) DEFAULT 1,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `haber_sayfas`
--

INSERT INTO `haber_sayfas` (`id`, `ad`, `icerik`, `resim`, `navbar_gorunme`, `footer_gorunme`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Hakkımızda', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p><p>                 \r\n              </p>', NULL, 1, 1, 1, '2022-06-05 17:05:48', '2022-06-05 17:05:48'),
(2, 'Biz kimiz?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p><p>                 \r\n              </p>', NULL, 1, 1, 1, '2022-06-05 17:06:21', '2022-06-05 17:06:21'),
(3, 'İletişim', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p><p>                 \r\n              </p>', NULL, 1, 1, 1, '2022-06-05 17:10:38', '2022-06-05 17:10:38'),
(4, 'Genel yorum kuralları', '<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li><li>Qquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li><li>Excepteur <b>sint occaecat</b> cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li><li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li><li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></li></ul>', NULL, 1, 1, 1, '2022-06-07 11:50:17', '2022-06-07 11:50:17');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber_topbars`
--

CREATE TABLE `haber_topbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yer` tinyint(1) NOT NULL DEFAULT 0,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `haber_topbars`
--

INSERT INTO `haber_topbars` (`id`, `ad`, `link`, `aciklama`, `yer`, `icon`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Haber ara', '/haber/ara', 'Arama yapmak için tıklayınız.', 0, 'fas fa-search', 1, '2022-06-05 15:45:35', '2022-06-05 15:56:32'),
(2, 'Translate', '/haber#google_translate_element', 'Sayfa dilini değiştirmek için tıklayınız.', 1, 'fas fa-language', 1, '2022-06-05 15:48:35', '2022-06-05 15:48:35'),
(3, 'Yazılım öğren', '/egitim', 'Eğitim sayfasına gitmek için tıklayınız.', 1, 'fas fa-code', 1, '2022-06-05 15:55:55', '2022-06-05 15:55:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber_yorums`
--

CREATE TABLE `haber_yorums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `haber_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `baslik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icerik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onay` tinyint(1) NOT NULL DEFAULT 0,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log_kayits`
--

CREATE TABLE `log_kayits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `icerik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `log_kayits`
--

INSERT INTO `log_kayits` (`id`, `user_id`, `icerik`, `created_at`, `updated_at`) VALUES
(6, 1, 'Teknoloji oluşturuldu.', '2022-06-05 15:36:19', '2022-06-05 15:36:19'),
(7, 1, 'Programlama oluşturuldu.', '2022-06-05 15:37:27', '2022-06-05 15:37:27'),
(8, 1, 'Programlama güncellendi.', '2022-06-05 15:38:05', '2022-06-05 15:38:05'),
(9, 1, 'Yazılım güncellendi.', '2022-06-05 15:38:49', '2022-06-05 15:38:49'),
(10, 1, 'Donanım oluşturuldu.', '2022-06-05 15:44:32', '2022-06-05 15:44:32'),
(11, 1, 'Ara oluşturuldu.', '2022-06-05 15:45:35', '2022-06-05 15:45:35'),
(12, 1, 'Ara güncellendi.', '2022-06-05 15:45:57', '2022-06-05 15:45:57'),
(13, 1, 'Translate oluşturuldu.', '2022-06-05 15:48:35', '2022-06-05 15:48:35'),
(14, 1, 'Yazılım öğren oluşturuldu.', '2022-06-05 15:55:55', '2022-06-05 15:55:55'),
(15, 1, 'Haber ara güncellendi.', '2022-06-05 15:56:32', '2022-06-05 15:56:32'),
(16, 1, 'Bilim oluşturuldu.', '2022-06-05 15:59:51', '2022-06-05 15:59:51'),
(17, 1, 'Uzay oluşturuldu.', '2022-06-05 16:00:46', '2022-06-05 16:00:46'),
(18, 1, 'Renault, Türkiye’de yenilenmiş araç satacak! oluşturuldu.', '2022-06-05 16:03:47', '2022-06-05 16:03:47'),
(19, 1, 'Binance CEO’su, LUNA’dan ne kadar zarar ettiğini açıkladı! oluşturuldu.', '2022-06-05 16:12:03', '2022-06-05 16:12:03'),
(20, 1, 'Apple’dan WWDC sürprizi: M2 işlemcili yeni bir cihaz ortaya çıktı! oluşturuldu.', '2022-06-05 16:20:05', '2022-06-05 16:20:05'),
(21, 1, 'Bir Xiaomi modeli daha MIUI 13 güncellemesini aldı! oluşturuldu.', '2022-06-05 16:23:26', '2022-06-05 16:23:26'),
(22, 1, 'Kripto parada sıcak ve soğuk cüzdan nedir? oluşturuldu.', '2022-06-05 16:25:42', '2022-06-05 16:25:42'),
(23, 1, 'Teknoloji güncellendi.', '2022-06-05 16:26:35', '2022-06-05 16:26:35'),
(24, 1, 'Discord’a yıllardır beklenen özellik nihayet geliyor! oluşturuldu.', '2022-06-05 16:28:03', '2022-06-05 16:28:03'),
(25, 1, 'Meta\'dan yapay zeka destekli \"evrensel konuşma tercümanı\" oluşturuldu.', '2022-06-05 16:31:29', '2022-06-05 16:31:29'),
(26, 1, 'VR odaklı internet tarayıcısı Firefox Reality\'nin hizmetleri sonlandırılıyor oluşturuldu.', '2022-06-05 16:32:30', '2022-06-05 16:32:30'),
(27, 1, 'DeepMind\'dan yazılımcılar ile rekabet edebilen yapay zeka: AlphaCode AI oluşturuldu.', '2022-06-05 16:33:54', '2022-06-05 16:33:54'),
(28, 1, 'Kripto kredi protokolü geliştiren Goldfinch, a16z\'den 25 milyon dolar yatırım aldı oluşturuldu.', '2022-06-05 16:34:52', '2022-06-05 16:34:52'),
(29, 1, 'Microsoft, şubat ayında Azure fiyatlarına yüzde 68 zam yapacak oluşturuldu.', '2022-06-05 16:39:18', '2022-06-05 16:39:18'),
(30, 1, 'Android oyunları, önümüzdeki yıl Windows cihazlara geliyor oluşturuldu.', '2022-06-05 16:40:30', '2022-06-05 16:40:30'),
(31, 1, 'Masaüstü Modeli Intel Arc Alchemist Ekran Kartından İlk Görüntü Geldi oluşturuldu.', '2022-06-05 16:43:04', '2022-06-05 16:43:04'),
(32, 1, 'ASUS Prime AP201 MicroATX Kasa Modeli Tanıtıldı! Tüm Detaylar oluşturuldu.', '2022-06-05 16:44:41', '2022-06-05 16:44:41'),
(33, 1, 'AOC AGON PRO AG274QZM Piyasaya Çıkıyor! Fiyatı ve Özellikleri oluşturuldu.', '2022-06-05 16:46:08', '2022-06-05 16:46:08'),
(34, 1, 'Intel Core i7-12850HX Özellikleri ve Teknik Detayları Nasıl? oluşturuldu.', '2022-06-05 16:47:36', '2022-06-05 16:47:36'),
(35, 1, 'Intel Core i7-12850HX Özellikleri ve Teknik Detayları Nasıl? güncellendi.', '2022-06-05 16:47:59', '2022-06-05 16:47:59'),
(36, 1, 'NVIDIA GeForce RTX 40 Serisinin Tanıtım Tarihi için Yeni Bir Sızıntı Geldiv oluşturuldu.', '2022-06-05 16:49:19', '2022-06-05 16:49:19'),
(37, 1, 'Ryzen 7000, Hız Aşırtma Olmadan 5.5 GHz Değerini Görmüş oluşturuldu.', '2022-06-05 16:50:55', '2022-06-05 16:50:55'),
(38, 1, 'Bilim-2 gemisinin Marmara\'daki 1 aylık incelemesinden sevindirici sonuçlar oluşturuldu.', '2022-06-05 16:57:10', '2022-06-05 16:57:10'),
(39, 1, 'Dünyanın ilk \'düşünen\' robotu geliştirildi oluşturuldu.', '2022-06-05 16:58:20', '2022-06-05 16:58:20'),
(40, 1, 'Bilim insanlarından heyecanlandıran keşif! ABD\'de bulunan dinozor fosili, gök taşı iddialarını gündeme getirdi oluşturuldu.', '2022-06-05 16:59:49', '2022-06-05 16:59:49'),
(41, 1, 'Bilim insanları bir ilki başardı: Ay\'da yaşam mümkün mü? oluşturuldu.', '2022-06-05 17:01:09', '2022-06-05 17:01:09'),
(42, 1, '‘Nazik devi’ Türk astrofizikçi tanıttı oluşturuldu.', '2022-06-05 17:02:39', '2022-06-05 17:02:39'),
(43, 1, 'Evrenin açıklanamayan sırları: Hubble\'ın elde ettiği veriler bilim insanlarını şaşırttı oluşturuldu.', '2022-06-05 17:03:43', '2022-06-05 17:03:43'),
(44, 1, 'Uzay silindi.', '2022-06-05 17:04:20', '2022-06-05 17:04:20'),
(45, 1, 'Bilim ve Uzay güncellendi.', '2022-06-05 17:04:32', '2022-06-05 17:04:32'),
(46, 1, 'Hakkımızda oluşturuldu.', '2022-06-05 17:05:48', '2022-06-05 17:05:48'),
(47, 1, 'Biz kimiz? oluşturuldu.', '2022-06-05 17:06:21', '2022-06-05 17:06:21'),
(48, 1, 'İletişim oluşturuldu.', '2022-06-05 17:10:38', '2022-06-05 17:10:38'),
(49, 1, 'Web programlama güncellendi.', '2022-06-05 18:14:16', '2022-06-05 18:14:16'),
(50, 1, 'Mobil programlama oluşturuldu.', '2022-06-05 18:22:37', '2022-06-05 18:22:37'),
(51, 1, 'Oyun programlama oluşturuldu.', '2022-06-05 18:23:53', '2022-06-05 18:23:53'),
(52, 1, 'HTML güncellendi.', '2022-06-05 18:53:23', '2022-06-05 18:53:23'),
(53, 1, 'HTML güncellendi.', '2022-06-05 18:55:03', '2022-06-05 18:55:03'),
(54, 1, 'CSS oluşturuldu.', '2022-06-05 19:05:33', '2022-06-05 19:05:33'),
(55, 1, 'CSS güncellendi.', '2022-06-05 19:06:43', '2022-06-05 19:06:43'),
(56, 1, 'Giriş oluşturuldu.', '2022-06-05 19:08:12', '2022-06-05 19:08:12'),
(57, 1, '2 silindi.', '2022-06-05 19:08:26', '2022-06-05 19:08:26'),
(58, 1, '1 dersine Oğuz Korkmaz kişisi kayıt oldu.', '2022-06-05 19:08:38', '2022-06-05 19:08:38'),
(59, 1, 'W3C Nedir? oluşturuldu.', '2022-06-05 19:14:55', '2022-06-05 19:14:55'),
(60, 1, 'Görüntü Seviyeleri (Div, Span) oluşturuldu.', '2022-06-05 19:15:10', '2022-06-05 19:15:10'),
(61, 1, 'Başlık ve Paragraf Etiketleri oluşturuldu.', '2022-06-05 19:15:48', '2022-06-05 19:15:48'),
(62, 1, 'Metin Biçimlendirme Etiketleri oluşturuldu.', '2022-06-05 19:16:08', '2022-06-05 19:16:08'),
(63, 1, 'Alıntılama Etiketleri oluşturuldu.', '2022-06-05 19:16:32', '2022-06-05 19:16:32'),
(64, 1, 'Link Etiketi oluşturuldu.', '2022-06-05 19:17:00', '2022-06-05 19:17:00'),
(65, 1, 'Resim Etiketi oluşturuldu.', '2022-06-05 19:17:24', '2022-06-05 19:17:24'),
(66, 1, 'Tablo Etiketi oluşturuldu.', '2022-06-05 19:17:52', '2022-06-05 19:17:52'),
(67, 1, 'Liste Etiketleri oluşturuldu.', '2022-06-05 19:20:18', '2022-06-05 19:20:18'),
(68, 1, 'Medya Etiketleri oluşturuldu.', '2022-06-05 19:20:52', '2022-06-05 19:20:52'),
(69, 1, 'Iframe Etiketi oluşturuldu.', '2022-06-05 19:21:24', '2022-06-05 19:21:24'),
(70, 1, 'Form Etiketleri (Bölüm 1) oluşturuldu.', '2022-06-05 19:21:48', '2022-06-05 19:21:48'),
(71, 1, 'Form Etiketleri (Bölüm 2) oluşturuldu.', '2022-06-05 19:22:23', '2022-06-05 19:22:23'),
(72, 1, 'HTML Quiz 1 güncellendi.', '2022-06-05 19:24:22', '2022-06-05 19:24:22'),
(73, 1, 'HTML Quiz 2 oluşturuldu.', '2022-06-05 19:25:05', '2022-06-05 19:25:05'),
(74, 1, 'HTML\'in açılımı nedir? oluşturuldu.', '2022-06-05 19:25:27', '2022-06-05 19:25:27'),
(75, 1, 'Aşağıdakilerden hangisi köprü (link) oluşturmamıza yarayan etikettir? oluşturuldu.', '2022-06-05 19:26:11', '2022-06-05 19:26:11'),
(76, 1, 'Aşağıdakilerden hangisi paragraf oluşturmamıza yarayan etikettir? oluşturuldu.', '2022-06-05 19:26:27', '2022-06-05 19:26:27'),
(77, 1, 'Aşağıdakilerden hangisi kalın yazılar oluşturmamıza yarayan etikettir? oluşturuldu.', '2022-06-05 19:26:50', '2022-06-05 19:26:50'),
(78, 1, 'Hiper işaretleme metni oluşturuldu.', '2022-06-05 19:27:23', '2022-06-05 19:27:23'),
(79, 1, 'Hyper işaretleme metni oluşturuldu.', '2022-06-05 19:27:37', '2022-06-05 19:27:37'),
(80, 1, 'Hyper text markup language oluşturuldu.', '2022-06-05 19:27:53', '2022-06-05 19:27:53'),
(81, 1, 'Hyper Text İşaretleme Dili oluşturuldu.', '2022-06-05 19:28:09', '2022-06-05 19:28:09'),
(82, 1, '<b>a</b> etiketi oluşturuldu.', '2022-06-05 19:28:59', '2022-06-05 19:28:59'),
(83, 1, '<b>p </b>etiketi oluşturuldu.', '2022-06-05 19:29:07', '2022-06-05 19:29:07'),
(84, 1, '<b>span </b>etiketi oluşturuldu.', '2022-06-05 19:29:21', '2022-06-05 19:29:21'),
(85, 1, '<b>li </b>etiketi oluşturuldu.', '2022-06-05 19:29:35', '2022-06-05 19:29:35'),
(86, 1, '<b>a </b>etiketi oluşturuldu.', '2022-06-05 19:30:07', '2022-06-05 19:30:07'),
(87, 1, '<b>b </b>etiketi oluşturuldu.', '2022-06-05 19:30:19', '2022-06-05 19:30:19'),
(88, 1, '<b>p</b> etiketi oluşturuldu.', '2022-06-05 19:30:32', '2022-06-05 19:30:32'),
(89, 1, '<b>ul &gt; li</b> etiketi oluşturuldu.', '2022-06-05 19:30:43', '2022-06-05 19:30:43'),
(90, 1, '<b>strong</b> etiketi oluşturuldu.', '2022-06-05 19:31:24', '2022-06-05 19:31:24'),
(91, 1, '<span style=\"font-weight: bolder;\">ul &gt; li</span>&nbsp;etiketi oluşturuldu.', '2022-06-05 19:31:29', '2022-06-05 19:31:29'),
(92, 1, '<span style=\"font-weight: bolder;\">p</span>&nbsp;etiketi oluşturuldu.', '2022-06-05 19:31:34', '2022-06-05 19:31:34'),
(93, 1, '<span style=\"font-weight: bolder;\">a&nbsp;</span>etiketi<br> oluşturuldu.', '2022-06-05 19:31:48', '2022-06-05 19:31:48'),
(94, 1, 'Sublime Text Editörünün İndirilmesi ve Kurulumu oluşturuldu.', '2022-06-05 19:43:35', '2022-06-05 19:43:35'),
(95, 1, 'Stillendirme ve Seçim Yöntemleri oluşturuldu.', '2022-06-05 19:44:02', '2022-06-05 19:44:02'),
(96, 1, 'Yazı Stillendirme Komutları - color,font-size,font-family,font-style,font-weight oluşturuldu.', '2022-06-05 19:44:37', '2022-06-05 19:44:37'),
(97, 1, 'line-height, word-spacing, letter-spacing, text-decoration, text-transform oluşturuldu.', '2022-06-05 19:45:07', '2022-06-05 19:45:07'),
(98, 1, 'background-color, image, position, repeat, attachment, size oluşturuldu.', '2022-06-05 19:45:44', '2022-06-05 19:45:44'),
(99, 1, 'border, border-radius, border-image, box-shadow - CSS Kenarlık Özellikleri oluşturuldu.', '2022-06-05 19:46:15', '2022-06-05 19:46:15'),
(100, 1, 'border-width, border-style, border-color - CSS Kenarlık Özellikleri oluşturuldu.', '2022-06-05 19:46:49', '2022-06-05 19:46:49'),
(101, 1, 'margin ve padding özellikleri oluşturuldu.', '2022-06-05 19:47:19', '2022-06-05 19:47:19'),
(102, 1, 'width, height, overflow, float, clear özellikleri oluşturuldu.', '2022-06-05 19:47:53', '2022-06-05 19:47:53'),
(103, 1, 'position, z-index, display, visibility özellikleri oluşturuldu.', '2022-06-05 19:48:19', '2022-06-05 19:48:19'),
(104, 1, 'child, sibling, adjacent sibling selectors - Seçiciler Bölüm 1 oluşturuldu.', '2022-06-05 19:48:59', '2022-06-05 19:48:59'),
(105, 1, 'attribute selectors - Seçiciler Bölüm 2 oluşturuldu.', '2022-06-05 19:49:24', '2022-06-05 19:49:24'),
(106, 1, 'pseudo ui, structural selectors - Seçiciler Bölüm 3 oluşturuldu.', '2022-06-05 19:49:51', '2022-06-05 19:49:51'),
(107, 1, 'structural selectors nth-child( ) - Seçiciler Bölüm 4 oluşturuldu.', '2022-06-05 19:50:34', '2022-06-05 19:50:34'),
(108, 1, 'opacity, linear-gradient, radial-gradient - Transparanlık ve Renk Geçişleri oluşturuldu.', '2022-06-05 19:51:00', '2022-06-05 19:51:00'),
(109, 1, 'column-count, column-rule, column-gap - Çoklu Kolon İşlemleri oluşturuldu.', '2022-06-05 19:51:25', '2022-06-05 19:51:25'),
(110, 1, 'display: flex, flex-direction, flex-wrap - Flexible Box Bölüm 1 oluşturuldu.', '2022-06-05 19:51:54', '2022-06-05 19:51:54'),
(111, 1, 'justify-content, align-items, align-content - Flexible Box Bölüm 2 oluşturuldu.', '2022-06-05 19:52:25', '2022-06-05 19:52:25'),
(112, 1, 'box-sizing Özelliği ve Multiple Background (Çoklu Arkaplan) İşlemleri oluşturuldu.', '2022-06-05 19:52:49', '2022-06-05 19:52:49'),
(113, 1, 'background-clip ve background-origin Özellikleri oluşturuldu.', '2022-06-05 19:53:31', '2022-06-05 19:53:31'),
(114, 1, '2D Transform - translate, rotate, scale ve skew Metodları oluşturuldu.', '2022-06-05 19:55:25', '2022-06-05 19:55:25'),
(115, 1, 'transition Özellikleri - property, duration, delay, timing-function oluşturuldu.', '2022-06-05 19:55:50', '2022-06-05 19:55:50'),
(116, 1, 'Animasyon Özellikleri - name,duration,direction,delay,play-state,fill-mode oluşturuldu.', '2022-06-05 19:56:19', '2022-06-05 19:56:19'),
(117, 1, 'media özelliği - Mobil Uyumlu Tasarım - Responsive Tasarım oluşturuldu.', '2022-06-05 19:56:52', '2022-06-05 19:56:52'),
(118, 2, '2 dersine Beytullah Arslan kişisi kayıt oldu.', '2022-06-05 19:58:45', '2022-06-05 19:58:45'),
(119, 1, 'Facebook oluşturuldu.', '2022-06-05 20:17:38', '2022-06-05 20:17:38'),
(120, 1, 'Twitter oluşturuldu.', '2022-06-05 20:18:04', '2022-06-05 20:18:04'),
(121, 1, 'Instagram oluşturuldu.', '2022-06-05 20:18:32', '2022-06-05 20:18:32'),
(122, 1, 'Ara oluşturuldu.', '2022-06-05 20:21:20', '2022-06-05 20:21:20'),
(123, 1, 'Daha sonra oluşturuldu.', '2022-06-05 20:22:19', '2022-06-05 20:22:19'),
(124, 1, 'Daha sonra güncellendi.', '2022-06-05 20:23:13', '2022-06-05 20:23:13'),
(125, 1, 'Daha sonra oluşturuldu.', '2022-06-05 20:26:42', '2022-06-05 20:26:42'),
(126, 1, 'Dashboard güncellendi.', '2022-06-05 20:27:26', '2022-06-05 20:27:26'),
(127, 1, 'Dashboard güncellendi.', '2022-06-05 20:27:50', '2022-06-05 20:27:50'),
(128, 1, 'Kategoriler oluşturuldu.', '2022-06-05 20:28:49', '2022-06-05 20:28:49'),
(129, 1, 'Derslerim oluşturuldu.', '2022-06-05 20:29:36', '2022-06-05 20:29:36'),
(130, 1, 'Sıralama oluşturuldu.', '2022-06-05 20:30:31', '2022-06-05 20:30:31'),
(131, 1, '2 içeriğinden 10 puan kazandı.', '2022-06-05 20:30:51', '2022-06-05 20:30:51'),
(132, 1, '2 içeriğini Oğuz Korkmaz tarafından tamamladı.', '2022-06-05 20:30:51', '2022-06-05 20:30:51'),
(133, 1, 'Haber oluşturuldu.', '2022-06-05 20:35:01', '2022-06-05 20:35:01'),
(134, 1, '1 sınavından 12 puan kazandı.', '2022-06-05 22:27:11', '2022-06-05 22:27:11'),
(135, 1, '1 sınavı Oğuz Korkmaz tarafından tamamladı.', '2022-06-05 22:27:11', '2022-06-05 22:27:11'),
(136, 1, 'HTML dersi yorum başlığı yorumu sisteme Oğuz Korkmaz tarafından ekledi.', '2022-06-06 07:44:30', '2022-06-06 07:44:30'),
(137, 1, '2 dersine Oğuz Korkmaz kişisi kayıt oldu.', '2022-06-06 10:09:08', '2022-06-06 10:09:08'),
(138, 1, '2 dersine Oğuz Korkmaz kişisi daha sonraya eklendi.', '2022-06-06 19:28:17', '2022-06-06 19:28:17'),
(139, 1, 'Genel yorum kuralları oluşturuldu.', '2022-06-07 11:50:17', '2022-06-07 11:50:17'),
(140, 1, 'Linkedin oluşturuldu.', '2022-06-10 20:04:11', '2022-06-10 20:04:11'),
(141, 1, 'Linkedin güncellendi.', '2022-06-10 20:04:26', '2022-06-10 20:04:26'),
(142, 2, '1 dersine Beytullah Arslan kişisi kayıt oldu.', '2022-06-14 12:06:49', '2022-06-14 12:06:49'),
(143, 2, '1 sınavından 12 puan kazandı.', '2022-06-14 12:07:44', '2022-06-14 12:07:44'),
(144, 2, '1 sınavı Beytullah Arslan tarafından tamamladı.', '2022-06-14 12:07:44', '2022-06-14 12:07:44'),
(145, 0, 'deneme@hotmail.com bültene eklendi.', '2022-06-14 13:27:31', '2022-06-14 13:27:31'),
(146, 0, 'deneme2@hotmail.com bültene eklendi.', '2022-06-26 22:32:43', '2022-06-26 22:32:43'),
(147, 0, 'theoguzcgbgfkorkmaz@gmail.com bültene eklendi.', '2022-06-27 15:21:48', '2022-06-27 15:21:48'),
(148, 1, 'Puan güncellendi.', '2022-06-27 15:59:27', '2022-06-27 15:59:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(417, '2014_10_12_000000_create_users_table', 1),
(418, '2014_10_12_100000_create_password_resets_table', 1),
(419, '2019_08_19_000000_create_failed_jobs_table', 1),
(420, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(421, '2022_05_17_054413_create_haber_topbars', 1),
(422, '2022_05_17_080438_create_haber_kategoris', 1),
(423, '2022_05_17_202404_create_haber_habers', 1),
(424, '2022_05_17_212613_create_haber_yorums', 1),
(425, '2022_05_17_222950_create_sosyals', 1),
(426, '2022_05_17_225038_create_haber_sayfas', 1),
(427, '2022_05_18_165231_create_egitim_kategoris', 1),
(428, '2022_05_18_171808_create_egitim_egitims', 1),
(429, '2022_05_18_183902_create_egitim_iceriks', 1),
(430, '2022_05_18_184051_create_egitim_sinavs', 1),
(431, '2022_05_18_184134_create_egitim_yorums', 1),
(432, '2022_05_18_184211_create_egitim_sorus', 1),
(433, '2022_05_18_184337_create_egitim_puans', 1),
(434, '2022_05_18_184432_create_egitim_cevaps', 1),
(435, '2022_05_20_203212_create_egitim_navbars', 1),
(436, '2022_05_21_214802_create_user_egitims', 1),
(437, '2022_05_22_073406_create_user_sonras', 1),
(438, '2022_05_23_174855_create_haber_bultens', 1),
(439, '2022_05_27_152738_create_admin_navbars', 1),
(440, '2022_05_29_055716_create_log_kayits', 1),
(441, '2022_05_29_085714_create_user_iceriks', 1),
(442, '2022_05_29_085810_create_user_sinavs', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyals`
--

CREATE TABLE `sosyals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktiflik` tinyint(1) NOT NULL DEFAULT 1,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sosyals`
--

INSERT INTO `sosyals` (`id`, `ad`, `icon`, `link`, `aciklama`, `aktiflik`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'fab fa-facebook', 'https://www.facebook.com', 'Facebook sayfamıza gitmek için tıklayınız.', 1, 1, '2022-06-05 20:17:38', '2022-06-05 20:17:38'),
(2, 'Twitter', 'fab fa-twitter', 'https://www.twitter.com', 'Twitter sayfamıza gitmek için tıklayınız.', 1, 1, '2022-06-05 20:18:04', '2022-06-05 20:18:04'),
(3, 'Instagram', 'fab fa-instagram', 'https://www.instagram.com', 'Instagram sayfamıza gitmek için tıklayınız.', 1, 1, '2022-06-05 20:18:32', '2022-06-05 20:18:32'),
(4, 'Linkedin', 'fab fa-linkedin', 'https://www.linkedin.com', 'Linkedin sayfamıza gitmek için tıklayınız.', 1, 1, '2022-06-10 20:04:11', '2022-06-10 20:04:26');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL DEFAULT 0,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `city`, `point`, `user_type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Oğuz Korkmaz', 'Erkek', '67', 22, 'Administrator', 'theoguzkorkmaz@gmail.com', NULL, '$2y$10$0mhz.tRTEmCSa2LLD4Y.Tu.NH2vzzqwpI5Z6vTNPVFqlCod2LOgU.', 'Fegc2YfUt6qV2vKukJkUnZQy6a4omRuFFUX3sJhuEBQuxqUQwCfQkGcOmQM9', '2022-06-04 11:09:26', '2022-06-05 22:27:11'),
(2, 'Beytullah Arslan', 'Erkek', '41', 12, NULL, 'beytullaharslan@gmail.com', NULL, '$2y$10$gq2oeFAF5G3t0yb1YlcW/eb6ZXv1YfFhfr03iWdGsSv4IQi3sdBY2', 'WENb2MNmNGvREG48fTgmTT5WoboCXUjEkfu5BQUjMbo9YBHs0ZnP2QPBWvKH', '2022-06-05 19:58:28', '2022-06-14 12:07:44'),
(3, 'OKAN ÇELEBİ', 'Erkek', '6', 0, NULL, 'okancelebi@gmail.com', NULL, '$2y$10$Cw7KyhfIyXoSLSzbZndMbu.vZcvnn5e192Vw0gf1vwLlO0iWbUWAq', NULL, '2022-06-14 13:03:57', '2022-06-14 13:03:57');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_egitims`
--

CREATE TABLE `user_egitims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ders_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `user_egitims`
--

INSERT INTO `user_egitims` (`id`, `user_id`, `ders_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-06-05 19:08:38', '2022-06-05 19:08:38'),
(2, 2, 2, '2022-06-05 19:58:45', '2022-06-05 19:58:45'),
(4, 2, 1, '2022-06-14 12:06:49', '2022-06-14 12:06:49');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_iceriks`
--

CREATE TABLE `user_iceriks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `icerik_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_sinavs`
--

CREATE TABLE `user_sinavs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sinav_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `user_sinavs`
--

INSERT INTO `user_sinavs` (`id`, `user_id`, `sinav_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, '2022-06-14 12:07:44', '2022-06-14 12:07:44');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_sonras`
--

CREATE TABLE `user_sonras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ders_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `user_sonras`
--

INSERT INTO `user_sonras` (`id`, `user_id`, `ders_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2022-06-06 19:28:17', '2022-06-06 19:28:17');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin_navbars`
--
ALTER TABLE `admin_navbars`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim_cevaps`
--
ALTER TABLE `egitim_cevaps`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim_egitims`
--
ALTER TABLE `egitim_egitims`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim_iceriks`
--
ALTER TABLE `egitim_iceriks`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim_kategoris`
--
ALTER TABLE `egitim_kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim_navbars`
--
ALTER TABLE `egitim_navbars`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim_puans`
--
ALTER TABLE `egitim_puans`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim_sinavs`
--
ALTER TABLE `egitim_sinavs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim_sorus`
--
ALTER TABLE `egitim_sorus`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim_yorums`
--
ALTER TABLE `egitim_yorums`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `haber_bultens`
--
ALTER TABLE `haber_bultens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `haber_bultens_mail_unique` (`mail`);

--
-- Tablo için indeksler `haber_habers`
--
ALTER TABLE `haber_habers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haber_kategoris`
--
ALTER TABLE `haber_kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haber_sayfas`
--
ALTER TABLE `haber_sayfas`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haber_topbars`
--
ALTER TABLE `haber_topbars`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haber_yorums`
--
ALTER TABLE `haber_yorums`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `log_kayits`
--
ALTER TABLE `log_kayits`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `sosyals`
--
ALTER TABLE `sosyals`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `user_egitims`
--
ALTER TABLE `user_egitims`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user_iceriks`
--
ALTER TABLE `user_iceriks`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user_sinavs`
--
ALTER TABLE `user_sinavs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user_sonras`
--
ALTER TABLE `user_sonras`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin_navbars`
--
ALTER TABLE `admin_navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `egitim_cevaps`
--
ALTER TABLE `egitim_cevaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `egitim_egitims`
--
ALTER TABLE `egitim_egitims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `egitim_iceriks`
--
ALTER TABLE `egitim_iceriks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Tablo için AUTO_INCREMENT değeri `egitim_kategoris`
--
ALTER TABLE `egitim_kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `egitim_navbars`
--
ALTER TABLE `egitim_navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `egitim_puans`
--
ALTER TABLE `egitim_puans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `egitim_sinavs`
--
ALTER TABLE `egitim_sinavs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `egitim_sorus`
--
ALTER TABLE `egitim_sorus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `egitim_yorums`
--
ALTER TABLE `egitim_yorums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `haber_bultens`
--
ALTER TABLE `haber_bultens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `haber_habers`
--
ALTER TABLE `haber_habers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `haber_kategoris`
--
ALTER TABLE `haber_kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `haber_sayfas`
--
ALTER TABLE `haber_sayfas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `haber_topbars`
--
ALTER TABLE `haber_topbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `haber_yorums`
--
ALTER TABLE `haber_yorums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `log_kayits`
--
ALTER TABLE `log_kayits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=443;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sosyals`
--
ALTER TABLE `sosyals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `user_egitims`
--
ALTER TABLE `user_egitims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `user_iceriks`
--
ALTER TABLE `user_iceriks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `user_sinavs`
--
ALTER TABLE `user_sinavs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `user_sonras`
--
ALTER TABLE `user_sonras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
