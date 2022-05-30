-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 29, 2021 lúc 04:07 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Xuân Linh', 'linh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0364369066', NULL, NULL),
(2, 'Trần Xuân Phương', 'phuong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0912761284', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_28_150328_create_tbl_admin_table', 1),
(5, '2020_11_29_122442_create_tbl_category_product', 2),
(6, '2020_12_06_062749_create_tbl_brand_table', 3),
(7, '2020_12_06_082951_create_tbl_product', 4),
(8, '2020_12_16_093821_tbl_customer', 5),
(9, '2020_12_19_123416_tbl_shipping', 6),
(10, '2020_12_21_061752_tbl_payment', 7),
(11, '2020_12_21_061921_tbl_order', 7),
(12, '2020_12_21_062136_tbl_details', 7),
(13, '2020_12_26_152355_create_tbl_news', 8),
(14, '2021_01_10_070522_tbl_reviews', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '123456', 'tuan linh', '0364369066', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_slug`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(2, 'Samsung', 'samsung', 'samsung', 1, NULL, NULL),
(3, 'Apple', 'apple', 'apple', 1, NULL, NULL),
(4, 'Xiaomi', 'xiaomi', '<p>xiaomi là 1 thương hi&ecirc;̣u đ&ecirc;́n từ Trung Qu&ocirc;́c</p>', 1, NULL, NULL),
(5, 'Oppo', 'Oppo', '<p>Oppo</p>', 1, NULL, NULL),
(6, 'Huawei', 'huawei', '<p>Huawei</p>', 1, NULL, NULL),
(7, 'LG', 'lg', '<p>LG</p>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_product_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_category_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_product_keywords`, `category_name`, `slug_category_product`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(4, 'smart-phone', 'Smart Phone', 'smart-phone', '<p>đi&ecirc;̣n thoại th&ocirc;ng minh</p>', 1, NULL, NULL),
(5, 'tablet', 'Máy tính bảng', 'tablet', '<p>Máy tính bảng</p>', 1, NULL, NULL),
(6, 'phu-kien', 'Phụ kiện', 'phu-kien', '<p>Phụ Ki&ecirc;̣n đi&ecirc;̣n thoại</p>', 1, NULL, NULL),
(7, 'laptop', 'Laptop', 'laptop', '<p>laptop</p>', 1, NULL, NULL),
(8, 'smart-watch', 'Đồng hồ thông minh', 'smart-watch', '<p>Đ&ocirc;ng h&ocirc;̀ th&ocirc;ng minh</p>', 1, NULL, NULL),
(9, 'pc-printer', 'Pc, Máy in', 'Pc-printer', '<p>PC cũ, PC mới, máy in</p>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `tittle`, `content`, `news_image`, `created_at`, `updated_at`) VALUES
(3, 'iPhone Xr đã rẻ, giờ còn rẻ hơn khi giảm thẳng 1.3 triệu khi đặt mua online đầu năm mới, nhanh tay sắm ngay', 'Với mức giá dưới 13 triệu đồng, thì đâu sẽ là mẫu iPhone đáng mua nhất ở thời điểm đầu năm mới này? Để mình bật mí cho, đó là iPhone Xr 64GB. Hiện tại đang có mức giá khá tốt sau khi giảm thẳng 1.3 triệu khi đặt mua online.\r\nThời gian diễn ra: Đến hết ngày 15/1/2021.\r\n\r\nVừa sắm được iPhone xịn nguyên seal, vừa tiết kiệm được khoản tiền kha khá nữa. Vậy còn đợi gì mà không nhanh tay rinh ngay từ hôm nay.\r\n\r\nLưu ý: \r\n\r\nKhuyến mãi chỉ áp dụng khi đặt mua online.\r\nGiá bán online có thể thay đổi theo khu vực, khách hàng nên chọn khu vực mình đang sinh sống khi mua hàng để tham khảo mức giá chính xác nhất.\r\nVậy sản phẩm này có những điểm gì nổi bật?\r\n\r\nChiếc iPhone này có mức giá khá dễ chịu, vẫn được trang công nghệ bảo mật Face ID xịn sò. Sở hữu hiệu năng mạnh mẽ và vô cùng ổn định nhờ trang bị con chip Apple A12 Bionic. Mặc dù, chỉ có 1 camera sau nhưng khả năng lấy nét, xóa phông,... là cực kì tốt.\r\n\r\nĐặc biệt hơn, với viên pin 2.942 mAh kèm công nghệ sạc nhanh, chắc chắn bạn sẽ có những trải nghiệm thoải mái hơn rất nhiều. Ngoài ra, iPhone Xr cũng có cho mình khả năng chống nước, chống bụi.', 'news199.jpg', '2021-01-10 06:06:26', '2021-01-10 06:06:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(2, 1, 5, 2, '19,360,000.00', 1, NULL, NULL),
(3, 1, 5, 3, '19,360,000.00', 1, NULL, NULL),
(4, 1, 5, 4, '19,360,000.00', 1, NULL, NULL),
(5, 1, 5, 5, '19,360,000.00', 1, NULL, NULL),
(6, 1, 5, 6, '19,360,000.00', 1, NULL, NULL),
(7, 1, 5, 7, '19,360,000.00', 1, NULL, NULL),
(8, 1, 6, 8, '14,520,000.00', 1, NULL, NULL),
(17, 1, 11, 19, '29,040,000.00', 1, NULL, NULL),
(18, 1, 11, 20, '29,040,000.00', 1, NULL, NULL),
(19, 1, 12, 21, '14,520,000.00', 1, NULL, NULL),
(20, 1, 12, 22, '14,520,000.00', 1, NULL, NULL),
(21, 2, 13, 23, '14,520,000.00', 1, NULL, NULL),
(22, 1, 14, 24, '21,780,000.00', 1, NULL, NULL),
(23, 1, 14, 25, '0.00', 1, NULL, NULL),
(24, 1, 14, 26, '0.00', 1, NULL, NULL),
(25, 1, 14, 27, '0.00', 1, NULL, NULL),
(26, 1, 14, 28, '14,520,000.00', 1, NULL, NULL),
(27, 1, 15, 29, '9,680,000.00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` bigint(20) NOT NULL,
  `product_sales_quantity` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(1, 7, 2, 'Samsung A71', 8000000, 2, NULL, NULL),
(2, 8, 1, 'Apple Iphone 8', 12000000, 1, NULL, NULL),
(3, 10, 2, 'Samsung A71', 8000000, 1, NULL, NULL),
(4, 12, 1, 'Apple Iphone 8', 12000000, 1, NULL, NULL),
(5, 13, 8, 'Pin sạc dự phòng 20000mah', 400000, 1, NULL, NULL),
(6, 17, 1, 'Apple Iphone 8', 12000000, 2, NULL, NULL),
(7, 18, 1, 'Apple Iphone 8', 12000000, 2, NULL, NULL),
(8, 19, 1, 'Apple Iphone 8', 12000000, 1, NULL, NULL),
(9, 20, 1, 'Apple Iphone 8', 12000000, 1, NULL, NULL),
(10, 21, 1, 'Apple Iphone 8', 12000000, 1, NULL, NULL),
(11, 22, 2, 'Samsung A71', 8000000, 1, NULL, NULL),
(12, 22, 3, 'Samsung Galaxy S10', 10000000, 1, NULL, NULL),
(13, 26, 1, 'Apple Iphone 8', 12000000, 1, NULL, NULL),
(14, 27, 2, 'Samsung A71', 8000000, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` int(11) NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Đang chờ xử lý', NULL, NULL),
(2, 2, 'Đang chờ xử lý', NULL, NULL),
(3, 2, 'Đang chờ xử lý', NULL, NULL),
(4, 2, 'Đang chờ xử lý', NULL, NULL),
(5, 2, 'Đang chờ xử lý', NULL, NULL),
(6, 2, 'Đang chờ xử lý', NULL, NULL),
(7, 2, 'Đang chờ xử lý', NULL, NULL),
(8, 2, 'Đang chờ xử lý', NULL, NULL),
(9, 2, 'Đang chờ xử lý', NULL, NULL),
(10, 2, 'Đang chờ xử lý', NULL, NULL),
(11, 2, 'Đang chờ xử lý', NULL, NULL),
(12, 3, 'Đang chờ xử lý', NULL, NULL),
(13, 2, 'Đang chờ xử lý', NULL, NULL),
(14, 2, 'Đang chờ xử lý', NULL, NULL),
(15, 2, 'Đang chờ xử lý', NULL, NULL),
(16, 2, 'Đang chờ xử lý', NULL, NULL),
(17, 3, 'Đang chờ xử lý', NULL, NULL),
(18, 3, 'Đang chờ xử lý', NULL, NULL),
(19, 3, 'Đang chờ xử lý', NULL, NULL),
(20, 2, 'Đang chờ xử lý', NULL, NULL),
(21, 2, 'Đang chờ xử lý', NULL, NULL),
(22, 2, 'Đang chờ xử lý', NULL, NULL),
(23, 2, 'Đang chờ xử lý', NULL, NULL),
(24, 2, 'Đang chờ xử lý', NULL, NULL),
(25, 2, 'Đang chờ xử lý', NULL, NULL),
(26, 2, 'Đang chờ xử lý', NULL, NULL),
(27, 2, 'Đang chờ xử lý', NULL, NULL),
(28, 2, 'Đang chờ xử lý', NULL, NULL),
(29, 2, 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` bigint(255) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_slug`, `category_id`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 'Apple Iphone 8', 'apple-iphone8', 4, 3, 'Iphone 8 256GB', 'Iphone 8 256GB', 12000000, 'ip844.jpg', 0, NULL, NULL),
(2, 'Samsung A71', 'samsung-a71', 4, 2, '<p>Samsung A71 thời thường</p>', '<p>Samsung A71 thời thường</p>', 8000000, 'ss_a717.jpg', 0, NULL, NULL),
(3, 'Samsung Galaxy S10', 'samsung-s10', 4, 2, '<h2><a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s10\" target=\"_blank\" title=\"Tham khảo điện thoại Samsung Galaxy S10 chính hãng\" type=\"Tham khảo điện thoại Samsung Galaxy S10 chính hãng\">Samsung Galaxy S10</a>&nbsp;l&agrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại chính hãng\">smartphone</a>&nbsp;kỉ niệm 10 năm ng&agrave;y kể từ ng&agrave;y đầu ti&ecirc;n Samsung ra mắt chiếc Galaxy S v&agrave; kh&ocirc;ng phụ sự chờ đợi của người d&ugrave;ng th&igrave;&nbsp;Samsung Galaxy S10 thực sự rất ấn tượng.</h2>', '<h3>Giờ d&ograve;ng Galaxy S đ&atilde; c&oacute; tới 3 camera</h3>', 10000000, 'ss_s1048.jpg', 0, NULL, NULL),
(4, 'Apple Watch S6 400mm', 'apple-watch-s6', 8, 3, '<h3>Đồng hồ th&ocirc;ng minh Apple sở hữu&nbsp;chip S6 cho hiệu năng vượt bậc</h3>\r\n\r\n<p>Nhờ c&oacute; bộ xử l&yacute; S6 ho&agrave;n to&agrave;n mới, đồng hồ đạt&nbsp;hiệu năng cao hơn 20% so với d&ograve;ng chip S5 thế hệ trước, đ&acirc;y được coi l&agrave; bước nhảy vọt về phần cứng của d&ograve;ng Apple Watch.</p>\r\n\r\n<p>&nbsp;</p>', '<h3>Đồng hồ th&ocirc;ng minh Apple sở hữu&nbsp;chip S6 cho hiệu năng vượt bậc</h3>\r\n\r\n<p>Nhờ c&oacute; bộ xử l&yacute; S6 ho&agrave;n to&agrave;n mới, đồng hồ đạt&nbsp;hiệu năng cao hơn 20% so với d&ograve;ng chip S5 thế hệ trước, đ&acirc;y được coi l&agrave; bước nhảy vọt về phần cứng của d&ograve;ng Apple Watch.</p>\r\n\r\n<p>&nbsp;</p>', 14000000, 'apple-watch-s6-lte-40mm-vien-nhom-day-cao-su-ava-400x40042.jpg', 0, NULL, NULL),
(5, 'Apple Macbook Air 2020', 'apple-macbook-air', 7, 3, '<h2 dir=\"ltr\">Vẫn l&agrave; ng&ocirc;n ngữ thiết kế quen thuộc: đẳng cấp - gọn nhẹ,&nbsp;<a href=\"https://www.thegioididong.com/laptop/apple-macbook-air-2020-i3-mwtj2saa\" target=\"_blank\" title=\"Laptop Apple MacBook Air 2020 i3 (MWTJ2SA/A)\">Apple MacBook Air 2020 (MWTJ2SA/A)</a>&nbsp;phi&ecirc;n bản Core i3 Gen 10 mạnh mẽ lại c&oacute; gi&aacute; b&aacute;n hời hơn đ&aacute;p ứng điều kiện cho những ai muốn sở hữu một con laptop sang xịn nhưng gi&aacute; kh&ocirc;ng qu&aacute; cao.</h2>', '<h2 dir=\"ltr\">Vẫn l&agrave; ng&ocirc;n ngữ thiết kế quen thuộc: đẳng cấp - gọn nhẹ,&nbsp;<a href=\"https://www.thegioididong.com/laptop/apple-macbook-air-2020-i3-mwtj2saa\" target=\"_blank\" title=\"Laptop Apple MacBook Air 2020 i3 (MWTJ2SA/A)\">Apple MacBook Air 2020 (MWTJ2SA/A)</a>&nbsp;phi&ecirc;n bản Core i3 Gen 10 mạnh mẽ lại c&oacute; gi&aacute; b&aacute;n hời hơn đ&aacute;p ứng điều kiện cho những ai muốn sở hữu một con laptop sang xịn nhưng gi&aacute; kh&ocirc;ng qu&aacute; cao.</h2>', 28000000, 'apple-macbook-air-2020-i3-11ghz-8gb-256gb-mwtj2sa-600x60076.jpg', 0, NULL, NULL),
(6, 'Apple Ipad 2020', 'Apple-Ipad-2020', 5, 3, '<p>Apple Ipad 2020 11 inch</p>', '<p>Apple Ipad 2020 11 inch</p>', 20000000, 'ipad-pro-11-inch-2020-xam-600x600-600x60054.jpg', 0, NULL, NULL),
(7, 'Samsung Galaxy Tab A8', 'samsung-tab-a8', 5, 2, '<p>Samsung Galaxy Tab A8</p>', '<p>Samsung Galaxy Tab A8</p>', 17000000, 'samsung-galaxy-tab-a8-t295-2019-silver-600x600-1-600x60013.jpg', 0, NULL, NULL),
(8, 'Pin sạc dự phòng 20000mah', 'sac-du-phong', 6, 3, '<p>Pin sạc dự phòng 20000mah</p>', '<p>Pin sạc dự phòng 20000mah</p>', 400000, 'pin-sac-du-phong-polymer-10000mah-ava-pj-jp207-xam-600x60073.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `reviews_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` int(50) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_reviews`
--

INSERT INTO `tbl_reviews` (`reviews_id`, `product_id`, `customer_id`, `user`, `content`, `star`, `date`, `updated_at`) VALUES
(2, 1, 1, 'Nguyễn Xuân Linh', 'đẳng cấp', 0, '2021-01-10 09:18:56', NULL),
(3, 1, 1, 'Nguyễn Xuân Linh', 'tuyệt', 0, '2021-01-10 09:30:59', NULL),
(4, 1, 1, 'Nguyễn Xuân Linh', 'tuyệt', 0, '2021-01-10 09:32:04', NULL),
(5, 1, 1, 'Nguyễn Xuân Linh', 'tuyệt', 0, '2021-01-10 09:35:48', NULL),
(6, 1, 1, 'Nguyễn Xuân Linh', 'tuyệt', 0, '2021-01-10 09:39:14', NULL),
(7, 1, 1, 'Nguyễn Xuân Linh', 'đẹp', 0, '2021-01-10 09:41:45', NULL),
(8, 1, 1, 'Nguyễn Xuân Linh', 'sản phẩm rất đúng tầm giá', 0, '2021-01-10 09:47:11', NULL),
(9, 1, 2, 'Trần Xuân Phương', 'sản phẩm rất đẹp', 0, '2021-01-11 00:57:34', NULL),
(10, 2, 2, 'Trần Xuân Phương', 'đẹp', 0, '2021-01-11 01:35:36', NULL),
(11, 2, 2, 'Trần Xuân Phương', 'tốt trong tầm giá', 0, '2021-01-11 01:35:52', NULL),
(12, 1, 2, 'Trần Xuân Phương', 'đẹp', 0, '2021-01-11 02:44:53', NULL),
(13, 1, 2, 'Trần Xuân Phương', 'đẹp', 2, '2021-01-14 13:25:54', NULL),
(14, 1, 2, 'Trần Xuân Phương', 'đẹp', 5, '2021-01-14 14:14:59', NULL),
(15, 5, 2, 'Trần Xuân Phương', 'đẹp', 5, '2021-01-14 14:16:42', NULL),
(16, 5, 2, 'Trần Xuân Phương', 'đẹp', 3, '2021-01-14 14:17:47', NULL),
(17, 5, 2, 'Trần Xuân Phương', 'xấu', 1, '2021-01-14 14:36:51', NULL),
(18, 5, 2, 'Trần Xuân Phương', 'xấu', 1, '2021-01-14 14:37:10', NULL),
(19, 1, 2, 'Trần Xuân Phương', 'đẹp', 5, '2021-01-15 04:50:25', NULL),
(20, 1, 2, 'Trần Xuân Phương', 'hôm nay thi đồ án', 4, '2021-01-15 04:59:23', NULL),
(21, 1, 2, 'Trần Xuân Phương', 'thi đồ án', 5, '2021-01-15 05:23:47', NULL),
(22, 3, 1, 'Nguyễn Xuân Linh', 'đẹp', 4, '2021-01-16 01:01:52', NULL),
(23, 2, 1, 'Nguyễn Xuân Linh', 'thi đồ án', 5, '2021-01-16 01:13:26', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_method` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `shipping_method`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Xuân Linh', 'Đà Nẵng', '0364369066', 'linh@gmail.com', 'linh', 0, NULL, NULL),
(2, 'Nguyễn Xuân Hải', 'Đà Nẵng', '0328339440', 'linh1@gmail.com', 'hải', 1, NULL, NULL),
(3, 'Nguyễn Xuân Nam', 'Đà Nẵng', '0485994442', 'linh2@gmail.com', 'Nam', 1, NULL, NULL),
(4, 'Nguyễn Xuân Linh', 'Đà Nẵng', '0364369066', 'linh@gmail.com', 'linh', 0, NULL, NULL),
(5, 'Nguyễn Xuân Linh', 'Đà Nẵng', '0364369066', 'linh@gmail.com', 'linh', 0, NULL, NULL),
(6, 'Nguyễn Xuân Linh', 'Đà Nẵng', '0364369066', 'linh@gmail.com', 'linh', 0, NULL, NULL),
(7, 'Nguyễn Xuân Linh', 'Đà Nẵng', '0364369066', 'linh@gmail.com', 'linh', 1, NULL, NULL),
(8, 'Nguyễn Xuân Linh', 'Đà Nẵng', '0364369066', 'nxlinh.19it4@vku.udn.vn', 'linh', 1, NULL, NULL),
(9, 'linh', 'da nang', '0364369066', 'nxlinh.19it4@vku.udn.vn', 'da nang', 0, NULL, NULL),
(10, 'linh', 'da nang', '0364369066', 'nxlinh.19it4@vku.udn.vn', 'da nang', 0, NULL, NULL),
(11, 'Nguyễn Xuân Linh', 'h', '0364369066', 'linh1@gmail.com', 'd', 0, NULL, NULL),
(12, 'Nguyễn Xuân Linh', 'h', '0364369066', 'nxlinh.19it4@vku.udn.vn', 'f', 0, NULL, NULL),
(13, 'Nguyễn Xuân Linh', 'h', '0364369066', 'linh@gmail.com', 'da nang', 0, NULL, NULL),
(14, 'Nguyễn Xuân Linh', 'h', '0364369066', 'linh@gmail.com', 'a', 0, NULL, NULL),
(15, 'Nguyễn Xuân Linh', 'h', '0364369066', 'linh@gmail.com', 'a', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tuan linh', 'admin@gmail.com', NULL, '123456', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`reviews_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `reviews_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
