-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2022 lúc 04:11 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webtintuc_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `RowID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `IsViews` int(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`RowID`, `Name`, `Email`, `Phone`, `Message`, `IsViews`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Abc', 'abc@gmail.com', '0', 'con chim non', 1, '2021-12-16 02:28:41', '2021-12-15 19:50:13'),
(2, 'Nguyễn thị c', 'nguyenc@gmail.com', '132131313', 'Tôi muốn hút thuốc', 0, '2021-12-16 02:28:41', NULL),
(4, 'fafaf', '131231@gmail.com', 'rfafdasfafa', 'fafhaskjfhakjfl', 0, '2021-12-29 20:41:20', '2021-12-29 20:41:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `RowID` int(11) NOT NULL,
  `RowIDCat` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Alias` varchar(255) DEFAULT NULL,
  `Images` varchar(255) DEFAULT NULL,
  `Status` int(1) NOT NULL DEFAULT 1,
  `MetaTitle` text DEFAULT NULL,
  `MetaDescription` text DEFAULT NULL,
  `MetaKeyword` text DEFAULT NULL,
  `SmallDescription` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Views` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`RowID`, `RowIDCat`, `Name`, `Alias`, `Images`, `Status`, `MetaTitle`, `MetaDescription`, `MetaKeyword`, `SmallDescription`, `Description`, `Views`, `created_at`, `updated_at`) VALUES
(20, 4, 'Hơn 25.000 F0 đang điều trị, Hà Nội có bao nhiêu ca Covid-19 chuyển nặng?', 'hon-25000-f0-dang-dieu-tri-ha-noi-co-bao-nhieu-ca-covid-19-chuyen-nang', 'https://icdn.dantri.com.vn/thumb_w/770/2021/12/13/hanoi5-crop-1639355521620.jpeg', 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. Phasellus vestibulum lorem sed risus ultricies. Erat velit scelerisque in dictum non consectetur a erat. Ipsum nunc aliquet bibendum enim. Ultricies mi quis hendrerit dolor magna eget.', '<p>D&acirc;n tr&iacute;</p>\n\n<h2>&nbsp;Theo Sở Y tế H&agrave; Nội, t&iacute;nh đến ng&agrave;y 29/12, tổng số bệnh nh&acirc;n Covid-19 ở H&agrave; Nội đ&atilde; điều trị khỏi l&agrave; 26.677 người, số bệnh nh&acirc;n chuyển tầng điều trị l&agrave; 231 người.</h2>\n\n<p><strong>Hơn 90% F0 tại H&agrave; Nội được ghi nhận từ khi &quot;th&iacute;ch ứng Covid-19&quot;</strong></p>\n\n<p>Trong đợt dịch thứ 4 (từ ng&agrave;y 29/4 đến nay), H&agrave; Nội ghi nhận 45.432 ca mắc Covid-19, trong đ&oacute; c&oacute; 15.888 ca tại cộng đồng; 24.006 ca trong khu c&aacute;ch ly tập trung v&agrave; c&aacute;ch ly tại nơi cư tr&uacute;, 5.227 ca tại khu phong tỏa; 98 ca nhập cảnh; 213 ca mắc tại c&aacute;c bệnh viện trước ng&agrave;y 30/9.</p>\n\n<p><img alt=\"Hơn 25.000 F0 đang điều trị, Hà Nội có bao nhiêu ca Covid-19 chuyển nặng? - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/770/2021/12/13/hanoi5-crop-1639355521620.jpeg\" title=\"Hơn 25.000 F0 đang điều trị, Hà Nội có bao nhiêu ca Covid-19 chuyển nặng? - 1\" /></p>\n\n<p>Nhấn để ph&oacute;ng to ảnh</p>\n\n<p>X&eacute;t nghiệm Covid-19 (Ảnh minh họa).</p>\n\n<p>Cộng dồn đến nay, H&agrave; Nội đ&atilde; ghi nhận 45.672 ca mắc, trong đ&oacute; ghi nhận 16.009 ca tại cộng đồng tr&ecirc;n địa b&agrave;n TP H&agrave; Nội, 24.025 ca tại c&aacute;c khu c&aacute;ch ly tập trung v&agrave; c&aacute;ch ly tại nơi cư tr&uacute;, 5.227 ca tại khu phong tỏa, khu ổ dịch cũ; 198 ca nhập cảnh v&agrave; 213 ca mắc tại c&aacute;c bệnh viện trước ng&agrave;y 30/9.</p>\n\n<p>Từ khi thực hiện chiến lược &quot;th&iacute;ch ứng Covid-19&quot; (11/10), Thủ đ&ocirc; ghi nhận 41.125 ca mắc (trung b&igrave;nh 520 ca/ng&agrave;y), trong đ&oacute; 14.569 ca trong cộng đồng (35,42%), 22.089 ca tại khu c&aacute;ch ly tập trung v&agrave; c&aacute;ch ly tại nơi cư tr&uacute; (53,71%), 4.425 ca tại khu phong tỏa (10,75%), 42 ca nhập cảnh (0,12%).</p>\n\n<p>Cộng dồn số F1 ghi nhận từ 29/4 đến nay l&agrave; 86.618 trường hợp. C&aacute;c ca bệnh v&agrave; khu vực li&ecirc;n quan đến c&aacute;c bệnh nh&acirc;n đều được tổ chức điều tra dịch tễ, xử l&yacute; theo đ&uacute;ng hướng dẫn của Bộ Y tế. Hiện th&agrave;nh phố c&oacute; 76 điểm phong tỏa.</p>\n\n<p><strong>Gần 60% F0 ở H&agrave; Nội điều trị tại nh&agrave;</strong></p>\n\n<p>Theo Sở Y tế H&agrave; Nội, t&iacute;nh đến ng&agrave;y 29/12, H&agrave; Nội đang điều trị cho 25.217 bệnh nh&acirc;n, trong đ&oacute;:</p>\n\n<p>- Bệnh viện Bệnh Nhiệt đới Trung ương: 115 người; Bệnh viện Đại học Y H&agrave; Nội: 205 người.</p>\n\n<p>- Tại c&aacute;c bệnh viện của th&agrave;nh phố: 2.426 người.</p>\n\n<p>- Cơ sở thu dung điều trị th&agrave;nh phố: 2.271 người.</p>\n\n<p>- Cơ sở thu dung quận/huyện: 5.195 người.</p>\n\n<p>- Theo d&otilde;i c&aacute;ch ly tại nh&agrave;: 15.005 người.</p>\n\n<p><img alt=\"Hơn 25.000 F0 đang điều trị, Hà Nội có bao nhiêu ca Covid-19 chuyển nặng? - 2\" src=\"https://icdn.dantri.com.vn/thumb_w/770/2021/12/27/hanoi5-1640600890470.jpeg\" title=\"Hơn 25.000 F0 đang điều trị, Hà Nội có bao nhiêu ca Covid-19 chuyển nặng? - 2\" /></p>\n\n<p>Nhấn để ph&oacute;ng to ảnh</p>\n\n<p>Gần 60% F0 ở H&agrave; Nội điều trị tại nh&agrave; (Ảnh minh họa).</p>\n\n<p>Tổng số bệnh nh&acirc;n&nbsp;<a href=\"https://dantri.com.vn/suc-khoe/dai-dich-covid-19.htm\">Covid-19</a>&nbsp;đ&atilde; điều trị khỏi l&agrave; 26.677 người, số bệnh nh&acirc;n chuyển tầng điều trị l&agrave; 231 người.</p>\n\n<p>Theo số liệu từ Cục Quản l&yacute; kh&aacute;m chữa bệnh, Bộ Y tế, H&agrave; Nội hiện c&oacute; 1.600 bệnh nh&acirc;n ở mức độ trung b&igrave;nh; 273 bệnh nh&acirc;n nặng, nguy kịch. Trong số c&aacute;c bệnh nh&acirc;n nặng, nguy kịch c&oacute; 229 trường hợp phải thở oxy mask, gọng k&iacute;nh; 18 trường hợp thở oxy d&ograve;ng cao HFNC; 8 trường hợp thở m&aacute;y kh&ocirc;ng x&acirc;m lấn; 17 trường hợp thở m&aacute;y x&acirc;m lấn, một trường hợp phải lọc m&aacute;u.</p>\n\n<p>Từ khi&nbsp;<a href=\"https://dantri.com.vn/suc-khoe/dai-dich-covid-19.htm\">dịch Covid-19</a>&nbsp;b&ugrave;ng ph&aacute;t, H&agrave; Nội đ&atilde; ghi nhận 143 bệnh nh&acirc;n Covid-19 tử vong.</p>\n\n<p><strong>Giải tr&igrave;nh tự gen chủ động ph&aacute;t hiện sớm Omicron</strong></p>\n\n<p>Để chủ động gi&aacute;m s&aacute;t ph&aacute;t hiện sớm biến thể Omicron, Trung t&acirc;m Kiểm so&aacute;t Bệnh tật th&agrave;nh phố H&agrave; Nội đ&atilde; lấy mẫu tr&ecirc;n c&aacute;c bệnh nh&acirc;n c&oacute; kết quả RT- PCR dương t&iacute;nh, gửi Viện Vệ sinh Dịch tễ Trung ương giải tr&igrave;nh tự gen.</p>\n\n<p><img alt=\"Hơn 25.000 F0 đang điều trị, Hà Nội có bao nhiêu ca Covid-19 chuyển nặng? - 3\" src=\"https://icdn.dantri.com.vn/thumb_w/770/2021/12/29/omicron-1640744332807.jpg\" title=\"Hơn 25.000 F0 đang điều trị, Hà Nội có bao nhiêu ca Covid-19 chuyển nặng? - 3\" /></p>\n\n<p>Nhấn để ph&oacute;ng to ảnh</p>\n\n<p>Kết quả cho thấy 15/22 mẫu gửi đều thuộc biến thể Delta, chưa ghi nhận biến thể Omicron (7 mẫu kh&ocirc;ng đủ tải lượng để giải tr&igrave;nh tự gen).</p>\n\n<p>C&aacute;c mẫu thuộc biến thể Delta ph&acirc;n bố tại: Chương Mỹ (2), Đống Đa (2), Quốc Oai (một), Mỹ Đức (một), Bắc Từ Li&ecirc;m (một), Ho&agrave;n Kiếm (một), M&ecirc; Linh (một), Gia L&acirc;m (một), Nam Từ Li&ecirc;m (một), H&agrave; Đ&ocirc;ng (một), Thanh Oai (một), Đ&ocirc;ng Anh (một), Hai B&agrave; Trưng (một).</p>\n\n<p>Trước đ&oacute;, Sở Y tế H&agrave; Nội đ&atilde; c&oacute; chỉ đạo c&aacute;c đơn vị về việc tăng cường thực hiện c&aacute;c biện ph&aacute;p ph&ograve;ng, chống Covid-19, kiểm so&aacute;t biến thể mới Omicron của virus SARS-CoV-2. Sở Y tế chỉ đạo c&aacute;c đơn vị chủ động gi&aacute;m s&aacute;t, quản l&yacute; c&aacute;c trường hợp nhập cảnh từ nước ngo&agrave;i, đặc biệt c&aacute;c trường hợp đến/đi về từ c&aacute;c quốc gia, khu vực đ&atilde; ghi nhận v&agrave; l&acirc;y lan biến chủng mới như c&aacute;c quốc gia khu vực Nam Ch&acirc;u Phi v&agrave; một số quốc gia khu vực ch&acirc;u &Acirc;u, thực hiện việc x&eacute;t nghiệm, c&aacute;ch ly, gi&aacute;m s&aacute;t, theo d&otilde;i y tế cho người nhập cảnh theo đ&uacute;ng quy định.</p>\n\n<p>Thường xuy&ecirc;n theo d&otilde;i s&aacute;t, cập nhật c&aacute;c th&ocirc;ng tin khoa học v&agrave; khuyến c&aacute;o của c&aacute;c cơ quan chuy&ecirc;n m&ocirc;n y tế uy t&iacute;n trong nước v&agrave; quốc tế về biến thể Omicron v&agrave; c&aacute;c giải ph&aacute;p, biện ph&aacute;p ph&ograve;ng, chống dịch, phương ph&aacute;p điều trị để b&aacute;o c&aacute;o, tham mưu cho th&agrave;nh phố triển khai ph&ugrave; hợp, kịp thời.</p>\n\n<p><iframe frameborder=\"0\" id=\"dantri-widget-corona-vietnam-vaccinations\" scrolling=\"no\" src=\"https://gadgets.dantri.com.vn/corona/vietnam-vaccinations?embed=true\"></iframe></p>', 999, '2021-12-16 01:14:42', '2022-01-09 14:33:52'),
(21, 5, 'Lorem Ipsum Generator 5', 'lorem-ipsum-generator-5', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=1.00xw:0.669xh;0,0.190xh&resize=1200:*', 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. Phasellus vestibulum lorem sed risus ultricies. Erat velit scelerisque in dictum non consectetur a erat. Ipsum nunc aliquet bibendum enim. Ultricies mi quis hendrerit dolor magna eget.', '<p>Heheheheeheheheh</p>', 1, '2021-12-16 01:41:02', '2021-12-30 07:01:41'),
(22, 6, 'Lorem Ipsum Generator 6', 'lorem-ipsum-generator-6', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=1.00xw:0.669xh;0,0.190xh&resize=1200:*', 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. Phasellus vestibulum lorem sed risus ultricies. Erat velit scelerisque in dictum non consectetur a erat. Ipsum nunc aliquet bibendum enim. Ultricies mi quis hendrerit dolor magna eget.', '<p>4124</p>', 1, '2021-12-16 01:43:39', '2021-12-30 07:01:42'),
(23, 7, 'Lorem Ipsum Generator 7', 'lorem-ipsum-generator-7', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=1.00xw:0.669xh;0,0.190xh&resize=1200:*', 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. Phasellus vestibulum lorem sed risus ultricies. Erat velit scelerisque in dictum non consectetur a erat. Ipsum nunc aliquet bibendum enim. Ultricies mi quis hendrerit dolor magna eget.', '<p>fafsfasdf</p>', 1, '2021-12-16 01:48:32', '2021-12-30 07:01:44'),
(24, 8, 'Lorem Ipsum Generator 8', 'lorem-ipsum-generator-8', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=1.00xw:0.669xh;0,0.190xh&resize=1200:*', 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. Phasellus vestibulum lorem sed risus ultricies. Erat velit scelerisque in dictum non consectetur a erat. Ipsum nunc aliquet bibendum enim. Ultricies mi quis hendrerit dolor magna eget.', '<p>&quot;Nổi bật l&agrave; Đảng bộ Bộ Ngoại giao đ&atilde; nghi&ecirc;n cứu, dự b&aacute;o t&igrave;nh h&igrave;nh, cung cấp th&ocirc;ng tin chiến lược, tham mưu cho Bộ Ch&iacute;nh trị, Ban B&iacute; thư nhiều chủ trương ch&iacute;nh s&aacute;ch quan trọng về đấu tranh ngoại giao, bảo vệ chủ quyền v&agrave; to&agrave;n vẹn l&atilde;nh thổ, nhất l&agrave; Biển Đ&ocirc;ng; củng cố v&agrave; ph&aacute;t triển quan hệ với c&aacute;c nước l&aacute;ng giềng, c&aacute;c nước lớn, c&aacute;c nước bạn b&egrave; truyền thống v&agrave; c&aacute;c đối t&aacute;c quan trọng kh&aacute;c&quot; - &ocirc;ng Thưởng n&oacute;i v&agrave; đ&aacute;nh gi&aacute; cao vai tr&ograve; của Đảng bộ Bộ Ngoại giao trong việc Việt Nam đảm nhiệm th&agrave;nh c&ocirc;ng vai tr&ograve; Chủ tịch ASEAN 2020 v&agrave; Ủy vi&ecirc;n kh&ocirc;ng thường trực Hội đồng Bảo an Li&ecirc;n Hợp Quốc 2020 - 2021; kết hợp chặt chẽ ngoại giao văn h&oacute;a v&agrave; th&ocirc;ng tin đối ngoại, đẩy mạnh ngoại giao vaccine phục vụ ph&ograve;ng chống dịch; thu h&uacute;t nguồn lực để ph&aacute;t triển đất nước.</p>\r\n\r\n<p><img alt=\"Thường trực Ban Bí thư Võ Văn Thưởng nói về xử lý đảng viên có 2 quốc tịch - 2\" src=\"https://icdn.dantri.com.vn/thumb_w/770/2021/12/16/ong-vo-van-thuong-2-1639635962251.jpg\" title=\"Thường trực Ban Bí thư Võ Văn Thưởng nói về xử lý đảng viên có 2 quốc tịch - 2\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Thường trực Ban B&iacute; thư V&otilde; Văn Thưởng c&ugrave;ng Bộ trưởng Ngoại giao B&ugrave;i Thanh Sơn chủ tr&igrave; phi&ecirc;n họp quan trọng về c&ocirc;ng t&aacute;c x&acirc;y dựng đảng v&agrave; c&ocirc;ng t&aacute;c đảng ngo&agrave;i nước (Ảnh: Quốc Ch&iacute;nh).</p>\r\n\r\n<p>Tuy nhi&ecirc;n, Thường trực Ban B&iacute; thư cũng lưu &yacute; cần nh&igrave;n thẳng v&agrave;o hạn chế, yếu k&eacute;m, đ&oacute; l&agrave; năng lực l&atilde;nh đạo, sức chiến đấu của một bộ phận tổ chức đảng trong đảng bộ c&ograve;n hạn chế; c&ocirc;ng t&aacute;c gi&aacute;o dục, ch&iacute;nh trị tư tưởng cho đảng vi&ecirc;n hiệu quả chưa cao, c&oacute; nơi, c&oacute; l&uacute;c chưa ph&ugrave; hợp với t&igrave;nh h&igrave;nh thực tế&hellip;</p>\r\n\r\n<p>Đối với c&aacute;c tổ chức đảng ngo&agrave;i nước c&oacute; nhiều kh&oacute; khăn hơn. C&ocirc;ng t&aacute;c kiểm tra gi&aacute;m s&aacute;t c&ograve;n h&igrave;nh thức, một số c&aacute;n bộ đảng vi&ecirc;n ngo&agrave;i nước chưa ph&aacute;t huy vai tr&ograve; tiền phong gương mẫu, chưa l&agrave;m tr&ograve;n tr&aacute;ch nhiệm thậm ch&iacute; l&agrave;m ảnh hưởng kh&ocirc;ng tốt tới h&igrave;nh ảnh đất nước, con người Việt Nam; việc nắm t&igrave;nh h&igrave;nh cộng đồng, tham mưu kiến nghị v&agrave; phối hợp triển khai ch&iacute;nh s&aacute;ch đối với người Việt Nam ở nước ngo&agrave;i chưa s&acirc;u s&aacute;t, chặt chẽ kịp thời, chưa ph&aacute;t huy tiềm năng thế mạnh của kiều b&agrave;o.</p>\r\n\r\n<p><strong>Xử l&yacute; r&otilde; r&agrave;ng vấn đề đảng vi&ecirc;n c&oacute; 2 quốc tịch</strong></p>\r\n\r\n<p>Thường trực Ban B&iacute; thư V&otilde; Văn Thưởng y&ecirc;u cầu c&aacute;c cấp ủy tổ chức đảng ngoại giao cần sớm triển khai trong Đảng bộ nghi&ecirc;n cứu học tập, kết luận 21 về x</p>', 1, '2021-12-16 02:18:11', '2021-12-30 07:01:46'),
(25, 9, 'Lorem Ipsum Generator 9', 'lorem-ipsum-generator-9', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=1.00xw:0.669xh;0,0.190xh&resize=1200:*', 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. Phasellus vestibulum lorem sed risus ultricies. Erat velit scelerisque in dictum non consectetur a erat. Ipsum nunc aliquet bibendum enim. Ultricies mi quis hendrerit dolor magna eget.', '<p><img alt=\"\" src=\"http://127.0.0.1:8000/responsive_filemanager/source/tintuc/raven.jpg\" style=\"height:169px; width:300px\" />T&ocirc;i đứng tr&ecirc;n đỉnh cao đ&ecirc;̉ th&acirc;́y rằng mình còn nhỏ bé bao nhi&ecirc;u</p>', 1, '2021-12-22 02:50:15', '2021-12-30 07:01:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `newsletter`
--

CREATE TABLE `newsletter` (
  `RowID` int(11) NOT NULL COMMENT 'RowID tăng tự động',
  `Email` varchar(255) DEFAULT NULL COMMENT 'Email người dùng',
  `IsViews` int(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp() COMMENT 'Ngày chỉnh sửa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `newsletter`
--

INSERT INTO `newsletter` (`RowID`, `Email`, `IsViews`, `created_at`, `updated_at`) VALUES
(1, 'holoidhv@gmail.com', 1, '2021-12-15 10:01:27', '2021-12-15 03:29:49'),
(2, 'conchimnon@gmail.com', 1, '2021-12-15 10:01:27', '2021-12-15 10:13:59'),
(3, 'nguyenthic@gmail.com', 1, '2021-12-15 10:01:41', '2021-12-15 10:17:59'),
(5, 'kkkk@gmail.com', 0, '2021-12-29 10:19:30', '2021-12-29 10:19:30'),
(6, 'conchocon@gmail.com', 0, '2021-12-29 10:21:19', '2021-12-29 10:21:19'),
(7, 'helloword@gmail.com', 0, '2021-12-29 10:22:11', '2021-12-29 10:22:11'),
(8, 'chuchoncon@gmail.com', 0, '2021-12-29 10:22:32', '2021-12-29 10:22:32'),
(9, 'chuffafafa@gmail.com', 0, '2021-12-29 10:23:29', '2021-12-29 10:23:29'),
(10, 'fasklfjaskjflkafjlkW@gmail.com', 0, '2021-12-30 01:03:35', '2021-12-30 01:03:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_cat`
--

CREATE TABLE `news_cat` (
  `RowID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL COMMENT 'Tên Danh Mục',
  `Alias` varchar(255) DEFAULT NULL,
  `Status` int(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news_cat`
--

INSERT INTO `news_cat` (`RowID`, `Name`, `Alias`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Xu hướng', 'xu-huong', 1, '2021-12-16 03:09:24', '2021-12-29 23:35:09'),
(2, 'Cập nhật', 'cap-nhat', 1, '2021-12-16 03:09:24', '2021-12-29 23:35:32'),
(3, 'Sự kiện', 'su-kien', 1, '2021-12-27 03:01:48', '2021-12-29 23:35:45'),
(4, 'Xã hội', 'xa-hoi', 1, '2021-12-27 03:03:36', '2021-12-29 23:36:01'),
(5, 'Thế giới', 'the-gioi', 1, '2021-12-27 03:03:36', '2021-12-29 23:36:17'),
(6, 'Kinh doanh', 'kinh-doanh', 1, '2021-12-27 03:03:36', '2021-12-29 23:36:29'),
(7, 'Thể thao', 'the-thao', 1, '2021-12-27 03:03:36', '2021-12-29 23:36:41'),
(8, 'Sức khỏe', 'suc-khoe', 1, '2021-12-27 03:03:36', '2021-12-29 23:36:55'),
(9, 'Văn hóa', 'van-hoa', 1, '2021-12-27 03:03:36', '2021-12-29 23:37:07'),
(10, 'Pháp luật', 'phap-luat', 1, '2021-12-27 03:03:36', '2021-12-29 23:37:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page`
--

CREATE TABLE `page` (
  `RowID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Alias` varchar(255) DEFAULT NULL,
  `Font` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT 1,
  `Sort` int(11) DEFAULT NULL,
  `Description` text NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `page`
--

INSERT INTO `page` (`RowID`, `Name`, `Alias`, `Font`, `Status`, `Sort`, `Description`, `create_at`, `updated_at`) VALUES
(1, 'Trang chủ', '/', '<i class=\"fas fa-home\"></i>', 1, 1, '<p>Đ&acirc;y là trang chủ của chúng t&ocirc;i</p>', '2021-12-15 06:47:30', '2021-12-29 19:59:54'),
(4, 'Liên hệ', 'lien-he', NULL, 1, 4, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci facere eveniet voluptate laboriosam\n                possimus mollitia modi commodi, nesciunt sed officia voluptates rerum delectus aperiam id incidunt nulla\n                voluptatum. Eaque, nemo!\n                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel libero eaque esse voluptatum natus iure!\n                Soluta dignissimos, quis quaerat accusamus vero vel alias fugiat nihil deleniti rem impedit facilis\n                laudantium.', '2021-12-15 06:48:26', '2021-12-30 03:25:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `social`
--

CREATE TABLE `social` (
  `RowID` int(11) NOT NULL COMMENT 'RowID tự tăng',
  `Name` varchar(255) DEFAULT NULL COMMENT 'Tên MXH',
  `Font` varchar(255) DEFAULT NULL COMMENT 'Font mạng xã hôi·',
  `Alias` varchar(255) DEFAULT NULL,
  `Status` int(1) DEFAULT 1 COMMENT 'Trạng thái',
  `Sort` int(11) DEFAULT NULL COMMENT 'Sắp xếp',
  `created_at` timestamp NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp() COMMENT 'Ngày chỉnh sửa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `social`
--

INSERT INTO `social` (`RowID`, `Name`, `Font`, `Alias`, `Status`, `Sort`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', '<i class=\"fab fa-facebook\"></i>', 'https://www.facebook.com/thangkhoia.16/', 1, 1, '2021-12-15 07:53:06', '2021-12-25 10:08:05'),
(2, 'Twitter', '<i class=\"fab fa-twitter\"></i>', 'https://www.facebook.com/thangkhoia.16/', 1, 2, '2021-12-15 07:53:06', '2021-12-25 10:08:08'),
(3, 'Youtube', '<i class=\"fab fa-youtube\"></i>', 'https://www.facebook.com/thangkhoia.16/', 1, 3, '2021-12-15 07:53:30', '2021-12-25 10:08:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `system`
--

CREATE TABLE `system` (
  `RowID` int(11) NOT NULL,
  `Status` int(1) DEFAULT 1,
  `Code` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `system`
--

INSERT INTO `system` (`RowID`, `Status`, `Code`, `Description`, `created_at`, `updated_at`) VALUES
(1, 1, 'logo', 'logo.png', '2021-12-15 03:02:14', '2021-12-27 01:32:51'),
(2, 1, 'favicon', 'favicon.png', '2021-12-15 03:02:14', NULL),
(3, 1, 'name', 'Website tin tức nhóm 4 - lập trình ứng dụng PHP_MySQL_02', '2021-12-15 03:03:27', '2021-12-27 01:55:57'),
(4, 1, 'email', 'holoidhv@gmail.com', '2021-12-15 03:03:27', '2021-12-27 01:55:57'),
(5, 1, 'phone', '0856322337', '2021-12-15 03:03:49', '2021-12-27 01:55:57'),
(6, 1, 'address', 'Chợ Vinh - Hồng Hưng Hội', '2021-12-15 03:03:49', '2021-12-27 01:55:57'),
(7, 1, 'copyright', 'Nhóm 4 Copyright', '2021-12-15 03:04:54', '2021-12-27 01:55:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `level`, `status`, `username`, `password`, `fullname`, `address`, `email`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'admin', '$2y$10$xSugoyKv765TY8DsERJ2/.mPIOwLNdM5Iw1n3x1XNVymBlHNG4cX6', 'PHP admin', 'Ha Noi', 'holoidhv@gmail.com', '085632233766', NULL, '2021-12-11 14:03:00', '2021-12-16 20:55:21'),
(2, 2, 1, 'seocontent', NULL, 'Nhân Viên Seo', 'Nghệ An', 'Seo@gmail.com', '123456789', NULL, '2021-12-14 08:10:23', '2021-12-14 08:54:33'),
(3, 2, 0, 'abc', '123', 'Nguyễn Tèo', 'hello', '1@gmail.com', '0103913', NULL, '2021-12-14 18:48:24', '2021-12-14 19:32:33'),
(5, 2, 1, 'chimnon', '$2y$10$wZ7JVS92Mj51CJBolswaWe6yMCaidPJIC19VuJLBhdhVlEJoDkCha', 'kkk', 'Hong Son', '123131@gmail.com', '09091112313', NULL, '2021-12-15 01:33:01', '2021-12-15 08:33:15'),
(6, 1, 1, 'huanhoahong', '$2y$10$9nnjBGFu9ks1MQH5brOvUu0.Eg1ITSL58c3yOetdnPCJuJQSHurH6', 'Bui Xuan Huan', 'dafasf', 'HuanBui@gmail.com', '12312321312313', NULL, '2021-12-16 20:56:11', '2021-12-16 20:56:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_level`
--

CREATE TABLE `users_level` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users_level`
--

INSERT INTO `users_level` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 1, '2021-12-14 08:08:37', NULL),
(2, 'Seo Content', 1, '2021-12-14 08:08:37', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `news_cat`
--
ALTER TABLE `news_cat`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users_level`
--
ALTER TABLE `users_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'RowID tăng tự động', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `news_cat`
--
ALTER TABLE `news_cat`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `page`
--
ALTER TABLE `page`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `social`
--
ALTER TABLE `social`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'RowID tự tăng', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `system`
--
ALTER TABLE `system`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users_level`
--
ALTER TABLE `users_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
