-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 11, 2022 lúc 06:49 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ilaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
(1, '2021_10_30_000000_create_users_table', 1),
(2, '2021_10_30_100000_create_password_resets_table', 1),
(3, '2021_10_30_000000_create_failed_jobs_table', 1),
(4, '2021_10_30_170234_create_tbl_admin_table', 1),
(6, '2021_10_31_135651_create_tbl_category_product', 2),
(7, '2021_11_01_035640_create_tbl_brand_product', 3),
(8, '2021_11_01_084807_create_tbl_product', 4),
(9, '2021_11_04_093419_tbl_datphong', 5),
(10, '2021_12_22_021513_create_tbl_book', 6);

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
(2, 'dinhduc2406@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'FAbet', '0835070557', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_book`
--

CREATE TABLE `tbl_book` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `book_nd` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_nv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_sn` int(11) NOT NULL,
  `book_gnp` double(8,2) NOT NULL,
  `book_ht` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_em` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_sdt` int(11) NOT NULL,
  `book_tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_book`
--

INSERT INTO `tbl_book` (`book_id`, `product_id`, `book_nd`, `book_nv`, `book_sn`, `book_gnp`, `book_ht`, `book_em`, `book_sdt`, `book_tinhtrang`) VALUES
(7, 37, '30-11-2021', '30-11-2021', 1, 3.00, 'Lê Nhung', 'Ltnhung@gmail.com', 985495516, 0),
(8, 35, '30-11-2021', '30-11-2021', 1, 4.00, 'Lê Nhung', 'Ltnhung@gmail.com', 985495516, 0),
(9, 37, '03-12-2021', '05-12-2021', 3, 4.00, 'Lê Nhung', 'Ltnhung@gmail.com', 985495516, 0),
(10, 37, '05-12-2021', '06-12-2021', 1, 2.00, 'Lê Nhung', 'Nhung@gmail', 985495516, 0),
(11, 37, '05-12-2021', '05-12-2021', 1, 2.00, 'Lê Nhung', 'Nhung@gmail', 985495516, 0),
(12, 36, '05-12-2021', '05-12-2021', 1, 1.00, 'Lê Nhung', 'Nhung@gmail', 985495516, 0),
(13, 37, '07-12-2021', '09-12-2021', 1, 1.00, 'Lê Nhung', 'Ltnhung@gmail.com', 985495516, 0),
(14, 37, '06-12-2021', '07-12-2021', 1, 2.00, 'Lê Nhung', 'ltnhung.20it7@vku.udn.vn', 985495516, 2),
(15, 37, '07-12-2021', '07-12-2021', 1, 2.00, 'Lê Nhung', 'ltnhung.20it7@vku.udn.vn', 985495516, 2),
(16, 37, '08-12-2021', '09-12-2021', 2, 2.00, 'Lê Hữu Lân', 'lhlan.20it7@vku.udn.vn', 456123789, 2),
(17, 33, '08-12-2021', '09-12-2021', 1, 1.00, 'Trần Thị Thu Nhàn', 'thunhantranthi.vn@gmail.com', 456123789, 2),
(18, 36, '08-12-2021', '08-12-2021', 1, 1.00, 'Lê Nhung', 'Ltnhung@gmail.com', 985495516, 0),
(19, 30, '09-12-2021', '10-12-2021', 1, 1.00, 'Thu Huyền', 'thanhhuyen191203@gmail.com', 234123456, 2),
(20, 41, '30-12-2021', '31-12-2021', 1, 2.00, 'Lê Nhung', 'Ltnhung@gmail.com', 985495516, 0),
(21, 41, '30-12-2021', '01-01-2022', 2, 4.00, 'Đức', 'dinhduc2406@gmail.com', 835070557, 5),
(22, 41, '15-02-2022', '18-02-2022', 1, 1.00, 'Đức', 'dinhduc2406@gmail.com', 835070557, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(17, '4.jpg', 'Đà Nẵng', 'Đà Nẵng – một thành phố xinh đẹp không chỉ nổi bật với những bãi biển xanh, cát trắng trải dài hay những thắng cảnh du lịch làm ngây ngất lòng người, thành phố này còn chinh phục du khách bởi những giá trị văn hóa cực “chất” của mình. Bạn biết gì về văn hóa và con người Đà Nẵng? Nếu bạn đang tìm hiểu về thành phố du lịch tuyệt vời này để chuẩn bị cho chuyến du hí sắp đến thì bài viết này chính là dành cho bạn đấy! Hãy cùng Mytour bắt đấu chuyến hành trình văn hóa tại thành phố Đà Nẵng xinh đẹp ngay bây giờ thôi nào!', NULL, NULL),
(18, '5.jpg', 'Đà Lạt', 'Tọa lạc trên trung tâm cao nguyên, Đà Lạt là nơi thư giãn thật sự lý tưởng giành cho khách du lịch. Khu vực đồi núi nghỉ dưỡng của người Pháp thời xưa chỉ cách phía Bắc Sài Gòn chừng 300 Km. Đây là một nơi tuyệt vời giúp du khách thoát khỏi cái oi bức nóng nực của vùng đồng bằng Nam Bộ.', NULL, NULL),
(19, '6.jpg', 'Huế', 'Từng là Kinh đô của triều đại nhà Nguyễn, vì thế mà Huế được xem là một trong những thành phố có bề dày lịch sử, văn hóa lâu đời nhất ở nước ta. Văn hóa, di tích, kiến trú đã “lôi cuốn” không ít khách du lịch đến với Huế. Không chỉ dừng lại đó, Huế còn quyến rũ du khách bởi bức tranh thiên nhiên hữu tình thi vị và con ngườ địa phương chân chất hiền hòa.', NULL, NULL),
(21, '8.jpg', 'Phan Thiết', 'Phan Thiết là một địa điểm du lịch biển nổi tiếng ở Việt Nam với những bờ cát trắng trải dài, biển xanh và những hàng dừa cong vút.Là tỉnh lỵ, trung tâm chính trị, kinh tế, văn hóa và khoa học kỹ thuật của tỉnh Bình Thuận. Phan Thiết nằm trên quốc lộ 1A (chiều dài quốc lộ 1A đi qua là 7 km), cách Thành phố Hồ Chí Minh 198 km về hướng Đông.Tuy là đô thị của miền Trung, thuộc khu vực Nam Trung Bộ, tuy nhiên, theo quy hoạch phát triển đến năm 2025, nó sẽ là đô thị cấp vùng Đông Nam Bộ. Diện tích tự nhiên là 206,45 km², bờ biển trải dài 57,40 km', NULL, NULL),
(22, '9.jpg', 'Phú Quốc', 'Phú Quốc là quần đảo xinh đẹp nằm sâu trong vùng vịnh Thái Lan, thuộc tỉnh Kiên Giang. Ở vùng biển phía Nam của tổ quốc, đảo Ngọc Phú Quốc – hòn đảo lớn nhất của Việt Nam, cũng là đảo lớn nhất trong quần thể 22 đảo tại đây. Nước biển trong vắt, những dòng suối yên bình cùng nhiều hải sản độc đáo chính là lợi thế tuyệt vời của du lịch Phú Quốc.', NULL, NULL),
(23, '10.jpg', 'Hội An', 'Du lịch Đà Nẵng đang ngày càng trở thành điểm đến lý tưởng cho kỳ nghỉ được du khách thập phương lựa chọn. Đến với thành phố đáng sống này, không một du khách nào không ghé thăm Hội An – một nét đẹp văn hóa truyền thống của Việt Nam. Bài viết này Saigon Star Travel sẽ giới thiệu về Phố Cổ Hội An – một Hội An với vẻ đẹp của thời gian ngưng đọng luôn cuốn hút du khách ghé thăm.', NULL, NULL),
(27, '11.png', 'Sa-pa', 'Nằm ở phía tây bắc của Tổ quốc, Sa Pa là một huyện vùng cao của tỉnh Lào Cai, một vùng đất khiêm nhường, lặng lẽ nhưng ẩn chứa bao điều kỳ diệu của cảnh sắc thiên nhiên. Phong cảnh thiên nhiên của Sa Pa được kết hợp với sức sáng tạo của con người cùng với địa hình của núi đồi, màu xanh của rừng, như bức tranh có sự sắp xếp theo một bố cục hài hoà tạo nên một vùng có nhiều cảnh sắc thơ mộng hấp dẫn.', NULL, NULL),
(28, '7.jpg', 'Nha Trang', 'rước đây, vùng đất Nha Trang vốn thuộc về Chiêm Thành, do đó các di tích của người Chăm vẫn còn tồn tại nhiều nơi ở Nha Trang. Nha Trang được Thủ tướng chính phủ Việt Nam công nhận là đô thị loại I vào ngày 22 tháng 4 năm 2009. Nha Trang được mệnh danh là hòn ngọc của biển Đông, Viên ngọc xanh [3] vì giá trị thiên nhiên, vẻ đẹp cũng như khí hậu của nó.[4] Đây là nơi được mệnh danh là Los Angles 2', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_prouct`
--

CREATE TABLE `tbl_category_prouct` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_prouct`
--

INSERT INTO `tbl_category_prouct` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(6, 'Phòng đôi', 'Phòng đôi', 0, NULL, NULL),
(7, 'Phòng đơn', '1 giường', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_datphong`
--

CREATE TABLE `tbl_datphong` (
  `datphong_id` int(10) UNSIGNED NOT NULL,
  `datphong_sn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datphong_tks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datphong_cid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datphong_cod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datphong_tg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datphong_ht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datphong_sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datphong_e` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `brand_id`, `category_id`, `product_name`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `product_quantity`, `created_at`, `updated_at`) VALUES
(30, 25, 7, 'Lê Nhung', '08B đường Thác Bạc, thị trấn SaPa, Trung tâm thành phố Sapa, Sapa', 'Chi tiết khách sạn: \r\n•	Diện tích: 60-65m2\r\n•	Điều hòa 2 chiều\r\n•	Điện thoại\r\n•	Mini bar và đồ uống\r\n•	Kết nối wifi và internet\r\n•	Dịch vụ phục vụ tại phòng\r\n•	1 giường kingsize\r\n•	Phòng tắm với bồn tắm đứng và vòi hoa sen\r\n•	Ti vi LCD SONY 32 inch\r\n•	Bàn trà với trà và café miễn phí\r\n•	Miễn phí chỗ gửi xe tại khách sạn\r\n', '50', '2028.jpg', 0, -1, NULL, NULL),
(32, 22, 7, 'ThanhThanh', 'Village 03, Ong Lang, Cua Duong, Ong Lang, Phú Quốc, Việt Nam', 'Chi tiết khách sạn\r\n•	Diện tích: 80-70m2\r\n•	Điều hòa 2 chiều\r\n•	Điện thoại\r\n•	Mini bar và đồ uống\r\n•	Kết nối wifi và internet\r\n•	Dịch vụ phục vụ tại phòng\r\n•	1 giường kingsize\r\n•	Phòng tắm với bồn tắm đứng và vòi hoa sen\r\n•	Ti vi LCD SONY 32 inch\r\n•	Bàn trà với trà và café miễn phí\r\n•	Miễn phí chỗ gửi xe tại khách sạn', '40', '165.jpg', 0, 0, NULL, NULL),
(33, 21, 7, 'Lê Hòa', 'Khu phố 14, Bãi sau Mũi Né, Mũi Né, Phan Thiết', 'Chi tiết khách sạn: \r\n•	Diện tích: 60-65m2\r\n•	Điều hòa 2 chiều\r\n•	Điện thoại\r\n•	Mini bar và đồ uống\r\n•	Kết nối wifi và internet\r\n•	Dịch vụ phục vụ tại phòng\r\n•	1 giường kingsize\r\n•	Phòng tắm với bồn tắm đứng và vòi hoa sen\r\n•	Ti vi LCD SONY 32 inch\r\n•	Bàn trà với trà và café miễn phí\r\n•	Miễn phí chỗ gửi xe tại khách sạn', '35', '1538.jpg', 0, -1, NULL, NULL),
(34, 19, 7, 'N&D', 'Bến Nghé, Phường Phú Hội, Thành phố Huế', 'Chi tiết khách sạn: \r\n•	Diện tích: 70-65m\r\n•	Điều hòa 2 chiều\r\n•	Điện thoại\r\n•	Mini bar và đồ uống\r\n•	Kết nối wifi và internet\r\n•	Dịch vụ phục vụ tại phòng\r\n•	1 giường kingsize\r\n•	Phòng tắm với bồn tắm đứng và vòi hoa sen\r\n•	Ti vi LCD SONY 32 inch\r\n•	Bàn trà với trà và café miễn phí\r\n•	Miễn phí chỗ gửi xe tại khách sạn', '30', '1440.jpg', 0, 0, NULL, NULL),
(35, 18, 7, 'Mường Thanh', 'Phù Đổng Thiên Vương, Thành Phố  Đà Lạt', 'Chi tiết phòng : •	Diện tích: 60-65m2\r\n•	Điều hòa 2 chiều\r\n•	Điện thoại\r\n•	Mini bar và đồ uống\r\n•	Kết nối wifi và internet\r\n•	Dịch vụ phục vụ tại phòng\r\n•	1 giường kingsize\r\n•	Phòng tắm với bồn tắm đứng và vòi hoa sen\r\n•	Ti vi LCD SONY 32 inch\r\n•	Bàn trà với trà và café miễn phí\r\n•	Miễn phí chỗ gửi xe tại khách sạn', '26', '123.jpg', 0, 0, NULL, NULL),
(36, 28, 7, 'House', 'đường Phạm Văn Đồng, TP. Nha Trang', 'Chi tiết khách sạn: \r\n•	Diện tích: 60-65m2\r\n•	Điều hòa 2 chiều\r\n•	Điện thoại\r\n•	Mini bar và đồ uống\r\n•	Kết nối wifi và internet\r\n•	Dịch vụ phục vụ tại phòng\r\n•	1 giường kingsize\r\n•	Phòng tắm với bồn tắm đứng và vòi hoa sen\r\n•	Ti vi LCD SONY 32 inch\r\n•	Bàn trà với trà và café miễn phí\r\n•	Miễn phí chỗ gửi xe tại khách sạn\r\n', '42', '1325.jpg', 0, 0, NULL, NULL),
(37, 17, 7, 'N&D', 'Phường Mỹ An ,Quận Ngũ Hành Sơn , Tp Đà nẵng', 'Chi tiết khách sạn: \r\n•	Diện tích: 80-70m2\r\n•	Điều hòa 3 chiều\r\n•	Điện thoại 2\r\n•	Mini bar và đồ uống(Free đồ uống)\r\n•	Kết nối wifi và internet\r\n•	Dịch vụ phục vụ tại phòng\r\n•	1 giường kingsize\r\n•	Phòng tắm với bồn tắm đứng và vòi hoa sen\r\n•	Ti vi LCD SONY 32 inch\r\n•	Bàn trà với trà và café miễn phí\r\n•	Miễn phí chỗ gửi xe tại khách sạn', '100', '24814.jpg', 0, 10, NULL, NULL),
(41, 28, 7, 'N&D', 'Phường Hòa Hải , Quận Ngũ Hành Sơn , TP Đà Nẵng', 'Chi tiết khách sạn: \r\n•	Diện tích: 80-70m2\r\n•	Điều hòa 3 chiều\r\n•	Điện thoại 2\r\n•	Mini bar và đồ uống(Free đồ uống)\r\n•	Kết nối wifi và internet\r\n•	Dịch vụ phục vụ tại phòng\r\n•	1 giường kingsize\r\n•	Phòng tắm với bồn tắm đứng và vòi hoa sen\r\n•	Ti vi LCD SONY 32 inch\r\n•	Bàn trà với trà và café miễn phí\r\n•	Miễn phí chỗ gửi xe tại khách sạn', '85', 'giuong-ngu-khach-san_1199.jpg', 0, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_statistical`
--

CREATE TABLE `tbl_statistical` (
  `id_statistical` int(11) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `sales` varchar(200) NOT NULL,
  `profit` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_statistical`
--

INSERT INTO `tbl_statistical` (`id_statistical`, `order_date`, `sales`, `profit`, `quantity`, `total_order`) VALUES
(1, '2020-11-08', '20000000', '7000000', 90, 10),
(2, '2020-11-07', '68000000', '9000000', 60, 8),
(3, '2020-11-06', '30000000', '3000000', 45, 7),
(4, '2020-11-05', '45000000', '3800000', 30, 9),
(5, '2020-11-04', '30000000', '1500000', 15, 12),
(6, '2020-11-03', '8000000', '700000', 65, 30),
(7, '2020-11-02', '28000000', '23000000', 32, 20),
(8, '2020-11-01', '25000000', '20000000', 7, 6),
(9, '2020-10-31', '36000000', '28000000', 40, 15),
(10, '2020-10-30', '50000000', '13000000', 89, 19),
(11, '2020-10-29', '20000000', '15000000', 63, 11),
(12, '2020-10-28', '25000000', '16000000', 94, 14),
(13, '2020-10-27', '32000000', '17000000', 16, 10),
(14, '2020-10-26', '33000000', '19000000', 14, 5),
(15, '2020-10-25', '36000000', '18000000', 22, 12),
(16, '2020-10-24', '34000000', '20000000', 33, 20),
(17, '2020-10-23', '25000000', '16000000', 94, 14),
(18, '2020-10-22', '12000000', '7000000', 16, 10),
(19, '2020-10-21', '63000000', '19000000', 14, 5),
(20, '2020-10-20', '66000000', '18000000', 22, 12),
(21, '2020-10-19', '74000000', '20000000', 33, 20),
(22, '2020-10-18', '63000000', '19000000', 14, 5),
(23, '2020-10-17', '66000000', '18000000', 23, 12),
(24, '2020-10-16', '74000000', '20000000', 32, 20),
(25, '2020-10-15', '63000000', '19000000', 14, 5),
(26, '2020-10-14', '66000000', '18000000', 23, 12),
(27, '2020-10-13', '74000000', '20000000', 33, 20),
(28, '2020-10-12', '66000000', '18000000', 23, 12),
(29, '2020-10-11', '74000000', '20000000', 10, 20),
(30, '2020-10-10', '63000000', '19000000', 14, 5),
(31, '2020-10-09', '66000000', '18000000', 23, 12),
(32, '2020-10-08', '74000000', '20000000', 15, 20),
(33, '2020-10-07', '66000000', '18000000', 23, 12),
(34, '2020-10-06', '74000000', '20000000', 30, 22),
(35, '2020-10-05', '66000000', '18000000', 23, 12),
(36, '2020-10-04', '74000000', '20000000', 32, 20),
(37, '2020-10-03', '63000000', '19000000', 14, 5),
(38, '2020-10-02', '66000000', '18000000', 23, 12),
(39, '2020-10-01', '74000000', '20000000', 32, 20),
(40, '2020-09-30', '63000000', '19000000', 14, 5),
(41, '2020-09-29', '66000000', '18000000', 23, 12),
(42, '2020-09-28', '74000000', '20000000', 15, 20),
(43, '2020-09-27', '66000000', '18000000', 23, 12),
(44, '2020-09-26', '74000000', '20000000', 30, 22),
(45, '2020-09-25', '66000000', '18000000', 23, 12),
(46, '2020-09-24', '74000000', '20000000', 32, 20),
(47, '2020-09-23', '63000000', '19000000', 14, 5),
(48, '2020-09-22', '66000000', '18000000', 23, 12),
(49, '2020-09-21', '74000000', '20000000', 32, 20),
(50, '2020-09-20', '63000000', '19000000', 14, 5),
(51, '2020-09-19', '66000000', '18000000', 23, 12),
(52, '2020-09-18', '74000000', '20000000', 15, 20),
(53, '2020-09-17', '66000000', '18000000', 23, 12),
(54, '2020-09-16', '74000000', '20000000', 30, 22),
(55, '2020-09-15', '66000000', '18000000', 23, 12),
(56, '2020-09-14', '74000000', '20000000', 32, 20),
(57, '2020-09-13', '63000000', '19000000', 14, 5),
(58, '2020-09-12', '66000000', '18000000', 23, 12),
(59, '2020-09-11', '74000000', '20000000', 32, 20),
(60, '2020-09-10', '63000000', '19000000', 14, 5),
(61, '2020-09-09', '66000000', '18000000', 23, 12),
(62, '2020-09-08', '74000000', '20000000', 15, 20),
(63, '2020-09-07', '66000000', '18000000', 23, 12),
(64, '2020-09-06', '74000000', '20000000', 30, 22),
(65, '2020-09-05', '66000000', '18000000', 23, 12),
(66, '2020-09-04', '74000000', '20000000', 32, 20),
(67, '2020-09-03', '63000000', '19000000', 14, 5),
(68, '2020-09-02', '66000000', '18000000', 23, 12),
(69, '2020-09-01', '74000000', '20000000', 32, 20),
(70, '2021-12-30', '1190', '714', 10, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thanhtoan`
--

CREATE TABLE `tbl_thanhtoan` (
  `thanhtoan_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `thanhtoan_ud` int(11) NOT NULL,
  `thanhtoan_tti` int(11) NOT NULL,
  `thanhtoan_tto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_uudai`
--

CREATE TABLE `tbl_uudai` (
  `uudai_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `book_uudai` int(11) NOT NULL,
  `uudai_name` varchar(25) NOT NULL,
  `uudai_connten` varchar(225) NOT NULL,
  `uudai_desc` varchar(225) NOT NULL,
  `uudai_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đức\r\n', 'dinhhduc.2406@gmail.com', '2021-12-30 07:26:13', '4297f44b13955235245b2497399d7a93', '0835070557', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `uudai`
--

CREATE TABLE `uudai` (
  `uudai_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_prouct`
--
ALTER TABLE `tbl_category_prouct`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_datphong`
--
ALTER TABLE `tbl_datphong`
  ADD PRIMARY KEY (`datphong_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_statistical`
--
ALTER TABLE `tbl_statistical`
  ADD PRIMARY KEY (`id_statistical`);

--
-- Chỉ mục cho bảng `tbl_thanhtoan`
--
ALTER TABLE `tbl_thanhtoan`
  ADD PRIMARY KEY (`thanhtoan_id`);

--
-- Chỉ mục cho bảng `tbl_uudai`
--
ALTER TABLE `tbl_uudai`
  ADD PRIMARY KEY (`uudai_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `uudai`
--
ALTER TABLE `uudai`
  ADD PRIMARY KEY (`uudai_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_category_prouct`
--
ALTER TABLE `tbl_category_prouct`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_datphong`
--
ALTER TABLE `tbl_datphong`
  MODIFY `datphong_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_statistical`
--
ALTER TABLE `tbl_statistical`
  MODIFY `id_statistical` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
