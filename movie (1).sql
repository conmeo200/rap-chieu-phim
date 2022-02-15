-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 15, 2022 lúc 03:45 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `movie`
--

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
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2021_11_17_151905_khach_hang', 2),
(19, '2021_12_31_041607_addcolumn', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `p7`
--

CREATE TABLE `p7` (
  `ID` int(11) NOT NULL,
  `ID_Loai` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `p7`
--

INSERT INTO `p7` (`ID`, `ID_Loai`, `Status`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 0),
(4, 1, 0),
(5, 1, 0),
(6, 1, 1),
(7, 1, 0),
(8, 1, 1),
(9, 1, 0),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1),
(16, 1, 0),
(17, 1, 0),
(18, 1, 1),
(19, 1, 1),
(20, 1, 1),
(40, 2, 0),
(41, 2, 1),
(42, 2, 0),
(43, 2, 0),
(44, 2, 0),
(45, 2, 1),
(46, 2, 0),
(47, 2, 1),
(48, 2, 1),
(49, 2, 1),
(50, 2, 0),
(51, 2, 0),
(52, 2, 1),
(53, 2, 1),
(54, 2, 0),
(55, 2, 0),
(56, 2, 1),
(57, 2, 1),
(58, 2, 1),
(59, 2, 1),
(61, 3, 0),
(62, 3, 0),
(63, 3, 0),
(64, 3, 0),
(65, 3, 0),
(66, 3, 0),
(67, 3, 0),
(68, 3, 0),
(69, 3, 0),
(70, 3, 0),
(71, 3, 0),
(72, 3, 0),
(73, 3, 0),
(74, 3, 0),
(75, 3, 0),
(76, 3, 0),
(77, 3, 0),
(78, 3, 0),
(79, 3, 0),
(80, 3, 0),
(81, 4, 0),
(82, 4, 0),
(83, 4, 0),
(84, 4, 0),
(85, 4, 0),
(86, 4, 0),
(87, 4, 0),
(88, 4, 0),
(89, 4, 0),
(90, 4, 0),
(91, 4, 0),
(92, 4, 0),
(93, 4, 0),
(94, 4, 0),
(95, 4, 0),
(96, 4, 0),
(97, 4, 0),
(98, 4, 0),
(99, 4, 0),
(100, 4, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `ID` int(11) NOT NULL,
  `ID_VE` int(11) NOT NULL,
  `SoVe` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `SoLanCoi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `ID` int(11) NOT NULL,
  `ID_LOAI` int(11) NOT NULL,
  `image` varchar(150) DEFAULT '',
  `TenPhim` varchar(50) NOT NULL,
  `NoiDung` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`ID`, `ID_LOAI`, `image`, `TenPhim`, `NoiDung`, `created_at`, `updated_at`) VALUES
(1, 1, 'hd-1.jpeg', 'Lật Mặt 48h', 'Lý Hải trở lại với dòng phim hành động sở trường của mình. Bối cảnh hoành tráng với sự đầu tư nghiêm túc, siêu phẩm hành động Việt Lật Mặt 48h sẽ kể về một hành trình trốn chạy đầy kịch tính, nghẹt thở đến phút cuối cùng.', NULL, NULL),
(2, 1, 'hd-2.jpeg', 'Chị Mười Ba', 'Sau thành công của webdrama Thập Tam Muội, hoa hậu hài Thu Trang tiến công màn ảnh rộng bằng phim điện ảnh Chị Mười Ba.\r\nChị Mười Ba tiếp tục kể về nhóm xã hội đen An Cư Nghĩa Đoàn , chị đại Mười Ba Thu Trang và đại ca Đường Băng Tiến Luật làm thủ lĩnh. Cả hai phải đối đầu cùng đối thủ bí ẩn- đại ca Hắc Hổ. Hắn chính là kẻ bảo kê cho Bi Long Khương Ngọc quậy phá suốt bấy lâu nay.', NULL, NULL),
(3, 1, 'hd-3.jpeg', 'Sám Hối', 'Hoàng Minh Long được xây dựng là võ sĩ có cá tính mạnh, đặt gia đình lên trên hết. Anh sẵn sàng bỏ cuộc họp quan trọng, chỉ vì con sốt cao. Chi tiết tưởng chừng khắc họa được cá tính tốt của nhân vật lại tạo cảm giác nhàm chán, khi đa phần lời thoại của Bình Minh đều lặp lại ý: Vợ con tôi là tất cả, tôi sống chết sao cũng được. Các tuyến phụ của Hồng Đào, Việt Hương góp thêm những câu thoại vô thưởng vô phạt, xoay quanh việc nhân vật của Bình Minh là một người cha tuyệt vời, giàu đức hy sinh', NULL, NULL),
(4, 1, 'hd-4.jpeg', 'Mạng Đổi Mạng', 'Cựu sát thủ John Wick lấy lại chiếc Mustang bị đánh cắp của mình từ một cửa hàng bán đũa thuộc sở hữu của Abram Tarasov, anh trai của Viggo và chú của Iosef. John cử người của Tarasov tham gia một cuộc nổi loạn bạo lực khiến chiếc Mustang bị hư hại nặng nhưng tha cho Tarasov dưới sự bảo trợ của hòa bình và trở về nhà, sau đó gắn chặt vũ khí của mình xuống đất một lần nữa.', NULL, NULL),
(5, 1, 'hd-5.jpeg', 'Hai Phượng', 'Không cần có một kịch bản phức tạp với nhiều subplot (cốt truyện phụ) để “hack” não khán giả, Hai Phượng với kịch bản đơn tuyến vẫn khiến người xem không thể rời mắt trong suốt thời lượng 100 phút. Phim chỉ đơn giản là hành trình người mẹ đi cứu đứa con gái bị bắt cóc, qua đó triệt phá được đường dây buôn bán trẻ em xuyên quốc gia. Câu chuyện tuy đơn giản và đề tài khá cũ nhưng lại dễ theo dõi. Các nhân vật khác cũng được xây dựng vừa đủ, đóng vai trò nhất định trong cốt truyện và không có ai là dư thừa. Hành trình cứu con của Hai Phượng diễn ra liên tục trong 14 giờ đồng hồ, nhưng không tạo cảm giác lê thê hay cụt lủn và nhịp phim giữ được phong độ khá tốt.', NULL, NULL),
(6, 2, 'hh1.jpeg', 'Fate Stay Night', 'Cho những ai đã quên câu chuyện hai phần trước thì Saber sau khi bị tha hóa thành Alter Saber phục vụ Zoken đã đánh bại Berserker. Shirou và Archer cũng bị thương nặng sau trận chiến với Assassin. Nhờ được Archer tặng cánh tay, cậu có thể sở hữu sức mạnh bá đạo của một Servant nhưng cơ thể con người cũng sẽ khó lòng mà chịu nổi. Illyasviel được tiết lộ là em gái nuôi của Shirou. Shadow cũng được hé lộ là một mảnh của Chén Thánh từ cuộc Thánh Chiến lần thứ tư được Zoken cấy vào người Sakura. Sakura ra lệnh cho Rider bảo vệ Shirou trước khi bỏ về trang viên Matou. Trong cơn hoảng loạn, Sakura giết chết Shinji và bị Shadow nuốt chửng. Tiếp ở phần 3, Shirou và Rin cùng Illyah phải cùng nhau tìm cách để kéo Sakura quay trở về. Liệu họ có làm được không khi kẻ ác đích thực vẫn đang lần trốn?', NULL, NULL),
(7, 2, 'hh2.jpeg', 'Boruto', 'Boruto: Naruto Next Generations, Boruto: Naruto Next Generations 2017 Boruto: Naruto Next Generations ... Naruto là một Shinobi trẻ tuổi với tính cách siêu nghịch ngợm. Ước mơ của cậu là trở thành Shinobi vĩ đại nhất làng, sát cánh cùng Hokage huyền thoại của làng. Nhưng đây không phải là câu chuyện của anh nữa ... Thế hệ Shinobi mới đã đi vào lịch sử, dẫn đầu là con trai nhà Uzumaki - Boruto! Nhiều năm sau Đại chiến Thế giới Shinobi lần thứ 4, Naruto Uzumaki giờ đã đạt được ước mơ trở thành Hokage đệ Thất, và có một gia đình hạnh phúc với Hinata và hai đứa con Himawari và Boruto. Nhưng cậu con trai của gia đình Uzumaki luôn không hài lòng vì cho rằng cha cậu đặt công việc lên trên gia đình, Boruto quyết định tìm Sasuke để học Phật pháp, để cậu học kỹ thuật Rasengan cho cuộc thi Chunin sắp tới, thu hút sự chú ý của cha cậu. một chút. Nhưng chính mong muốn này của anh đã khiến anh gian lận trong cuộc thi, và Naruto là người đã phát hiện ra mánh khóe của anh. Giữa lúc hoang mang đó, một sự kiện khủng khiếp đã xảy ra ...', NULL, NULL),
(8, 2, 'hh3.jpeg', 'Sword Art Online', 'Sword Art Online (SAO) phiên bản movie lần này với tên gọi Ordinal Scale thật sự sẽ là một trải nghiệm lạ cho các fan của anime nói chung và fan riêng của series nói riêng. Đối với fan ruột của SAO thì chắc hẳn sẽ rất thích thú và chìm đắm trong thế giới ảo này, còn đối với khán giả thường thì hãy cứ yên tâm vì bộ phim không quá khó hiểu và phức tạp nếu như bạn là một người mê điện ảnh và xem được nhiều thể loại khác nhau.', NULL, NULL),
(9, 2, 'hh4.jpeg', 'The Seven Deadly Sins: Wrath of the Gods', 'Tác giả Suzuki trong một buổi phỏng vấn vào tháng 8 năm ngoái với tạp chí Da Vinci của Kadokawa, ông đã nói sẽ lên kế hoạch kết thúc manga Nanatsu no Taizai trong khoảng một năm, sau khoảng 40 tập truyện. Ông ấy cũng nói đã có kế hoạch kết thúc từ khi bắt đầu bộ truyện và kết thúc này sẽ hoàn toàn xứng đáng. Thất đại ác nhân, một nhóm chiến binh có tham vọng lật đổ vương quốc Britannia, được cho là đã bị tiêu diệt bởi các hiệp sĩ thánh chiến mặc dù vẫn còn 1 số người cho rằng họ vẫn còn sống. 10 năm sau, Các hiệp sĩ thánh chiến đã làm 1 cuộc đảo chính và khống chế đức vua, họ trở thành người cai trị độc tài mới của vương quốc.', NULL, NULL),
(10, 1, 'hh5.jpeg', 'Chuyến Tàu Vô Tận 123', 'Thanh Gươm Diệt Quỷ do Gotōge Koyoharu chấp bút và xuất bản trên tạp chí Weekly Shonen Jump từ năm 2016. Tác phẩm được lấy cảm hứng từ tác phẩm đầu tay Ka Gari Gari của nữ nhà văn với những khái niệm quỷ và kiếm quen thuộc với độc giả manga. Song, vì Ka Gari Gari quá đen tối và nghiêm túc nên đã không được xuất bản. Do đó, Thanh Gươm Diệt Quỷ được kể với giọng điệu tươi sáng, hài hước hơn nhưng vẫn giữ được sự ác liệt cần thiết trong cuộc chiến giữa người và quỷ', NULL, NULL),
(11, 3, 'lm-1.jpeg', 'Mắt Biếc', 'Bộ phim vẫn được kể theo góc nhìn và lời dẫn truyện của Ngạn và phần nào đó là góc nhìn của Hà Lan qua những câu thoại bộc bạch về mối quan hệ giữa cô và Ngạn. Trúc Anh và Trần Nghĩa tuy tuổi đời còn trẻ nhưng đã có thể mang đến cho người xem một màn trình diễn với rất nhiều cảm xúc và thật sự là phần hồn không thể tách rời của bộ phim này.', NULL, NULL),
(12, 3, 'lm-2.jpeg', 'Bố Già', 'Phim sẽ xoay quanh lối sống thường nhật của một xóm lao động nghèo, ở đó có bộ tứ anh em Giàu - Sang - Phú - Quý với Ba Sang sẽ là nhân vật chính, hay lo chuyện bao đồng nhưng vô cùng thương con cái. Câu chuyện phim tập trung về hai cha con Ba Sang và Quắn . Dù yêu thương nhau nhưng khoảng cách thế hệ đã đem đến những bất đồng lớn giữa hai cha con. Liệu cả hai có thể cho nhau cơ hội thấu hiểu đối phương, thu hẹp khoảng cách và tạo nên hạnh phúc từ sự khác biệt?', NULL, NULL),
(13, 3, 'lm-3.jpeg', 'Cua Lại Vợ Bầu', 'Cua Lại Vợ Bầu kể về mối tình của Trọng Thoại (Trấn Thành) – một anh chàng sửa xe cổ và Nhã Linh (Ninh Dương Lan Ngọc) – cô gái xinh đẹp, tài giỏi. Thế nhưng, người bạn cũ của cả hai là Quý Khánh (Anh Tú) bất ngờ xuất hiện và gây nên hàng loạt xáo trộn trong trái tim cô gái. Vào một ngày, Nhã Linh thông báo đã mang thai và quyết rời xa Trọng Thoại. Trớ trêu thay, chính cô cũng không biết cha đứa bé là ai. Tuy nhiên, điều đó chưa phải dấu chấm hết cho mối tình của Trọng Thoại và Nhã Linh. Anh vẫn kiên trì với tình yêu của mình và quyết tâm cua lại vợ bầu.', NULL, NULL),
(14, 3, 'lm-4.jpeg', 'Tiệc Trăng Máu ', 'Tiệc Trăng Máu xoay quanh một buổi tiệc tân gia, nơi ban đầu là một cuộc gặp gỡ bạn bè ấm cúng nhưng về sau lại là nơi vạch trần những bí mật kinh hoàng. Qua trò chơi công khai tất cả bí mật trong điện thoại, những mối quan hệ tình bạn và tình thân tưởng như hoàn hảo giữa những người tham gia đã bị lột trần bởi những sự thật cay đắng đằng sau.', NULL, NULL),
(55, 3, 'hoathinh-11-8-4read-only-1439338173.jpg', 'phim a', 'phim a day', '2022-01-02 06:09:37', '2022-01-02 06:09:37'),
(56, 1, '', 'phim k', 'asdasd', '2022-01-13 09:28:52', '2022-01-13 09:28:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `ID` int(11) NOT NULL,
  `SoPhong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`ID`, `SoPhong`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ql_phim_xc`
--

CREATE TABLE `ql_phim_xc` (
  `ID_XC` int(11) NOT NULL,
  `ID_PHIM` int(11) NOT NULL,
  `SoPhong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ql_phim_xc`
--

INSERT INTO `ql_phim_xc` (`ID_XC`, `ID_PHIM`, `SoPhong`, `created_at`, `updated_at`, `ID`) VALUES
(1, 1, 1, NULL, '2022-01-14 02:33:22', 1),
(2, 2, 2, NULL, NULL, 2),
(3, 3, 3, NULL, NULL, 3),
(4, 4, 4, NULL, NULL, 4),
(5, 1, 1, NULL, '2022-01-14 02:33:22', 5),
(6, 2, 2, NULL, NULL, 6),
(7, 3, 3, NULL, NULL, 7),
(1, 4, 4, NULL, NULL, 8),
(2, 5, 1, NULL, NULL, 9),
(3, 6, 2, NULL, NULL, 10),
(4, 7, 3, NULL, NULL, 11),
(5, 8, 4, NULL, NULL, 12),
(6, 5, 1, NULL, NULL, 13),
(7, 6, 2, NULL, NULL, 14),
(1, 7, 3, NULL, NULL, 15),
(2, 8, 4, NULL, NULL, 16),
(3, 9, 1, NULL, NULL, 17),
(4, 11, 2, NULL, NULL, 18),
(5, 12, 3, NULL, NULL, 19),
(6, 9, 4, NULL, NULL, 20),
(7, 11, 1, NULL, NULL, 21),
(1, 12, 2, NULL, NULL, 22),
(2, 13, 3, NULL, NULL, 23),
(3, 14, 4, NULL, NULL, 24),
(2, 1, 2, NULL, '2022-01-14 02:33:22', 25),
(5, 2, 3, NULL, NULL, 26),
(6, 10, 2, NULL, NULL, 27),
(7, 10, 1, NULL, NULL, 28),
(1, 55, 1, '2022-01-02 06:09:37', '2022-01-02 06:09:37', 29),
(2, 55, 2, '2022-01-02 06:09:37', '2022-01-02 06:09:37', 30),
(3, 56, 3, '2022-01-13 09:28:52', '2022-01-14 02:33:04', 31),
(4, 56, 4, '2022-01-13 09:28:52', '2022-01-14 02:33:04', 32),
(3, 56, 1, '2022-01-13 09:28:52', '2022-01-14 02:33:04', 33);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_phim`
--

CREATE TABLE `type_phim` (
  `ID` int(11) NOT NULL,
  `Loai` char(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type_phim`
--

INSERT INTO `type_phim` (`ID`, `Loai`) VALUES
(1, 'Hành Động'),
(2, 'Hoạt Hình'),
(3, 'Lãng Mạn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_ve`
--

CREATE TABLE `type_ve` (
  `ID` int(11) NOT NULL,
  `Gia` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type_ve`
--

INSERT INTO `type_ve` (`ID`, `Gia`) VALUES
(1, 75000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(7, 'tuanto987', 'concho236@gmail.com', NULL, '$2y$10$tniUc1sWN3fZPYonDIQ8yeyVpXh5cKyVcHqEmr7//LnYSMag2QGeO', NULL, '2021-12-29 07:53:21', '2021-12-29 07:53:21', 0),
(8, 'admin', 'admin@gmail.com', NULL, '123456789', NULL, NULL, NULL, 0),
(9, 'tyty', 'tyty@gmail.com', NULL, '$2y$10$M1AldvyXKTlRA71iO7mR1OT8kY8SCUNAgfKTzbM3dAdXJCTymdwge', NULL, '2022-01-06 03:38:07', '2022-01-06 03:38:07', NULL),
(10, 'bibi', 'bibi@gmail.com', NULL, '$2y$10$oDN.SzqguKUBRVMsJlxwM.DsWJsR9KmcYzEVW897I38PHurEEsEnu', NULL, '2022-01-06 20:58:37', '2022-01-06 20:58:37', 1),
(11, 'teoem', 'teoem@gmail.com', NULL, '$2y$10$TD.zgjPoSEOcBLoUden3YObOAFheuirDhZZ5arzHgg1TnXZfwVEbq', NULL, '2022-01-07 01:04:31', '2022-01-07 01:04:31', 0),
(12, 'toitoi', 'toitoi@gmail.com', NULL, '$2y$10$T7WZ8t.KzPnVX7acy/sFYeKA9OSYC0YbYJ.kEXHVk0V.cDWkY5GLW', NULL, '2022-01-10 09:56:57', '2022-01-10 09:56:57', 1),
(13, 'conmeo', 'conmeo@gmail.com', NULL, '123456789', NULL, NULL, NULL, 0),
(15, 'susu', 'susu@gmail.com', NULL, '$2y$10$/TKm.n2MZjv.ameAFQi9le9YT70/.tTXSy1Fp.AlpEYOTC3LhBfTa', NULL, '2022-01-20 00:08:25', '2022-01-20 00:08:25', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `ID` int(11) NOT NULL,
  `ID_PHIM` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Ghe` int(11) NOT NULL DEFAULT 0,
  `TenPhim` varchar(50) NOT NULL,
  `XuatChieu` varchar(50) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ve`
--

INSERT INTO `ve` (`ID`, `ID_PHIM`, `ID_User`, `Ghe`, `TenPhim`, `XuatChieu`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 20, 'Lật Mặt 48h', '9:00', '2022-01-21 03:47:43', '2022-01-21 03:47:43'),
(2, 1, 15, 19, 'Lật Mặt 48h', '9:00', '2022-01-21 03:47:43', '2022-01-21 03:47:43'),
(3, 1, 15, 18, 'Lật Mặt 48h', '9:00', '2022-01-21 03:47:43', '2022-01-21 03:47:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatchieu`
--

CREATE TABLE `xuatchieu` (
  `ID` int(11) NOT NULL,
  `TG` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `xuatchieu`
--

INSERT INTO `xuatchieu` (`ID`, `TG`) VALUES
(1, '9:00'),
(2, '13:00'),
(3, '16:00'),
(4, '18:00'),
(5, '21:00'),
(6, '23:00'),
(7, '1:00');

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- Chỉ mục cho bảng `p7`
--
ALTER TABLE `p7`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_p7_phong` (`ID_Loai`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_payment_ve` (`ID_VE`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`ID`,`TenPhim`) USING BTREE,
  ADD KEY `FK_phim_type_phim` (`ID_LOAI`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Chỉ mục cho bảng `ql_phim_xc`
--
ALTER TABLE `ql_phim_xc`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK__xuatchieu` (`ID_XC`) USING BTREE,
  ADD KEY `FK_ql_phim_xc_phim` (`ID_PHIM`) USING BTREE,
  ADD KEY `FK_ql_phim_xc_phong` (`SoPhong`);

--
-- Chỉ mục cho bảng `type_phim`
--
ALTER TABLE `type_phim`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `type_ve`
--
ALTER TABLE `type_ve`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_ve_phim` (`ID_PHIM`),
  ADD KEY `FK_ve_customer_2` (`ID_User`) USING BTREE;

--
-- Chỉ mục cho bảng `xuatchieu`
--
ALTER TABLE `xuatchieu`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `p7`
--
ALTER TABLE `p7`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `ql_phim_xc`
--
ALTER TABLE `ql_phim_xc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `type_ve`
--
ALTER TABLE `type_ve`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `p7`
--
ALTER TABLE `p7`
  ADD CONSTRAINT `FK_p7_phong` FOREIGN KEY (`ID_Loai`) REFERENCES `phong` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_payment_ve` FOREIGN KEY (`ID_VE`) REFERENCES `ve` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `FK_phim_type_phim` FOREIGN KEY (`ID_LOAI`) REFERENCES `type_phim` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `ql_phim_xc`
--
ALTER TABLE `ql_phim_xc`
  ADD CONSTRAINT `FK__xuatchieu` FOREIGN KEY (`ID_XC`) REFERENCES `xuatchieu` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ql_phim_xc_phim` FOREIGN KEY (`ID_PHIM`) REFERENCES `phim` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ql_phim_xc_phong` FOREIGN KEY (`SoPhong`) REFERENCES `phong` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `FK_ve_phim` FOREIGN KEY (`ID_PHIM`) REFERENCES `phim` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ve_users` FOREIGN KEY (`ID_User`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
