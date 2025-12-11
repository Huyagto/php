-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2025 at 06:07 PM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `year` int DEFAULT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tmdb_id` int DEFAULT NULL,
  `vote_average` float DEFAULT NULL,
  `popularity` float DEFAULT NULL,
  `backdrop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_movie_author` (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `year`, `poster`, `author_id`, `created_at`, `tmdb_id`, `vote_average`, `popularity`, `backdrop`) VALUES
(40, 'Kế Hoạch Bảo Vệ Gia Đình 2 - The Family Plan 2', 'Giờ đây, khi những tháng ngày làm sát thủ đã lùi vào quá khứ, Dan chỉ muốn có khoảng thời gian ý nghĩa bên các con vào dịp Giáng sinh. Nhưng khi biết con gái mình có dự định riêng, anh liền đặt một chuyến đi gia đình đến London — vô tình đặt cả nhà vào tầm ngắm của một kẻ thù bất ngờ.', 2025, '/fMQI7VEpvlPOoSetYd3ctLEY54G.jpg', 18, '2025-12-10 10:29:41', 1363123, NULL, NULL, NULL),
(41, 'Phi Vụ Động Trời', 'Trong phim này, Zootopia là một thành phố kì lạ không giống bất kì thành phố nào trước đây của hãng Walt Disney sáng chế. Đây là khu đô thị vui vẻ của các loài động vật, từ voi, tê giác, cho đến những loài nhỏ bé như chuột, thỏ, cún. Cho đến một ngày cô cảnh sát thỏ Judy Hopps xuất hiện, thành phố Zootopia đã có những thay đổi rất là khác. Cô cùng người bạn đồng hành là chú cáo đầy “tiểu xảo” Nick Widle, đã cùng nhau phiêu lưu trong một vụ kỳ án, với mong muốn thiết lập lại trật tự cho thành phố zootopia.', 2016, '/oy5mQVAmswPFwLGsDFclJvlZRkc.jpg', 19, '2025-12-10 10:29:44', 269149, NULL, NULL, NULL),
(38, 'Frankenstein', 'Guillermo del Toro mang đến phiên bản mới đầy viễn kiến cho câu chuyện gothic của Mary Shelley về một nhà khoa học lỗi lạc mà kiêu ngạo bị chính tạo vật bi thảm của mình hủy hoại.', 2025, '/g4JtvGlQO7DByTI6frUobqvSL3R.jpg', 16, '2025-12-10 10:29:37', 1062722, NULL, NULL, NULL),
(37, 'Cuộc Chiến Giữa Các Thế Giới', 'Will Radford — chuyên gia phân tích an ninh mạng hàng đầu của Bộ An ninh Nội địa — chuyên theo dõi các mối đe dọa đến an ninh quốc gia thông qua một chương trình giám sát diện rộng. Nhưng một cuộc tấn công bất ngờ từ một thực thể bí ẩn đã khiến anh bắt đầu nghi ngờ: phải chăng chính phủ đang che giấu điều gì đó… không chỉ với anh mà với toàn thế giới?', 2025, '/3e6GQvCA9hguxqfqA75BDvG7Vvp.jpg', 15, '2025-12-10 10:29:35', 755898, NULL, NULL, NULL),
(36, 'Khủng Bố Trên Không', 'Khủng Bố Trên Không (High Forces) bộ phim là câu chuyện về một vụ cướp máy bay và đòi tiền chuộc 3,5 tỷ nhân dân tệ với tính mạng hành khách bị đe dọa. Câu chuyện nghẹt thở trên chuyến bay quốc tế đầu tiên của chiếc A380 siêu sang trọng, khi máy bay bị một nhóm khủng bố do tên trùm Mike cầm đầu cướp.', 2024, '/b8xNJ39aOtEk3I7MFt8XJuN2bGS.jpg', 14, '2025-12-10 10:29:34', 949709, NULL, NULL, NULL),
(34, 'Bổ Phong Truy Ảnh', 'Wong Tak-Chung, một cựu chuyên gia giám sát được biết đến với khả năng phân tích dữ liệu và truy vết bậc thầy, bị cảnh sát Ma Cao mời trở lại hợp tác điều tra sau khi xuất hiện hàng loạt vụ cướp quy mô lớn do một tổ chức tội phạm công nghệ cao thực hiện.', 2025, '/5LGUvRBXoXHsMZsZrCGBOVmwOVd.jpg', 12, '2025-12-10 10:29:30', 1419406, NULL, NULL, NULL),
(35, 'Chainsaw Man - The Movie: Chương Reze', 'Tiếp nối series anime chuyển thể đình đám, Chainsaw Man lần đầu tiên oanh tạc màn ảnh rộng trong một cuộc phiêu lưu hoành tráng, ngập tràn các phân cảnh hành động. Ở phần trước, ta đã biết Denji từng làm Thợ Săn Quỷ cho yakuza để trả món nợ của cha mẹ nhưng bị họ phản bội và trừ khử. Trong khoảnh khắc hấp hối, chú chó quỷ cưa máy Pochita (người bạn đồng hành trung thành của Denji) đã đưa ra một khế ước, cứu sống cậu và hợp thể cùng cậu. Từ đó, một Quỷ Cưa bất khả chiến bại ra đời. Giờ đây ở Chainsaw Man – The Movie: Chương Reze, trong cuộc chiến tàn khốc giữa quỷ dữ, thợ săn quỷ và những kẻ thù trong bóng tối, một cô gái bí ẩn tên Reze xuất hiện trong thế giới của Denji. Denji buộc phải đối mặt với trận chiến sinh tử khốc liệt nhất của mình, một trận chiến được tiếp sức bởi tình yêu trong một thế giới nơi mọi người phải sinh tồn mà không biết bất kỳ luật lệ nào.', 2025, '/kywH6s7qTa64i0drx3pNvpQufWR.jpg', 13, '2025-12-10 10:29:32', 1218925, NULL, NULL, NULL),
(33, 'Quái Thú Vô Hình: Vùng Đất Chết Chóc', 'Trong tương lai, tại một hành tinh hẻo lánh, một Predator non nớt - kẻ bị chính tộc của mình ruồng bỏ - tìm thấy một đồng minh không ngờ tới là Thia và bắt đầu hành trình sinh tử nhằm truy tìm kẻ thù tối thượng. Bộ phim do Dan Trachtenberg - đạo diễn của Prey chỉ đạo và nằm trong chuỗi thương hiệu Quái Thú Vô Hình Predator.', 2025, '/6aPy2tMgQLVz2IcifrL1Z2Q9u1t.jpg', 11, '2025-12-10 10:29:28', 1242898, NULL, NULL, NULL),
(29, 'Первый отряд', '', 2009, '/mh2DUD5iHNs9VR8kxxJ8yVgZD0N.jpg', 7, '2025-12-10 10:29:20', 23527, NULL, NULL, NULL),
(30, 'Dracula: Bản Tình Ca Bất Diệt', 'Một hoàng tử tuyệt vọng biến thành Dracula và lang thang bất tận qua thời gian, sống chỉ vì lời hứa tìm lại tình yêu của đời mình.', 2025, '/vevuZVvb72VrbDzHiz4D8Z8XuGF.jpg', 8, '2025-12-10 10:29:22', 1246049, NULL, NULL, NULL),
(31, 'Wildcat', '', 2025, '/h893ImjM6Fsv5DFhKJdlZFZIJno.jpg', 9, '2025-12-10 10:29:24', 1448560, NULL, NULL, NULL),
(32, 'Cục 749', 'Một chàng trai trẻ bị tổn thương với những bất thường về thể chất buộc phải gia nhập một văn phòng bí ẩn để đối mặt với thảm họa lan rộng khắp trái đất do một sinh vật vô danh gây ra. Anh dấn thân vào một cuộc phiêu lưu khám phá những bí ẩn về cuộc đời mình.', 2024, '/xW640PVBXLlzhrkQnAcvWNsehIO.jpg', 10, '2025-12-10 10:29:26', 1033462, NULL, NULL, NULL),
(27, 'ಕಾಂತಾರ: ಅಧ್ಯಾಯ - ೧', '', 2025, '/ehQPboTPaIMkMUOoNOh8e7pZ5Rp.jpg', 5, '2025-12-10 10:29:17', 1083637, NULL, NULL, NULL),
(28, 'Năm Đêm Kinh Hoàng 2', 'Một năm sau cơn ác mộng siêu nhiên tại tiệm Pizza Freddy Fazbear, những câu chuyện xoay quanh sự kiện ấy đã bị bóp méo thành một huyền thoại kỳ quặc tại địa phương, truyền cảm hứng cho lễ hội Fazfest đầu tiên của thị trấn. Không hề biết sự thật bị che giấu, Abby lén trốn ra ngoài để gặp lại Freddy, Bonnie, Chica và Foxy — khởi đầu cho chuỗi sự kiện kinh hoàng, hé lộ bí mật đen tối về nguồn gốc thật sự của Freddy’s, và đánh thức một nỗi kinh hoàng bị chôn vùi suốt hàng thập kỷ.', 2025, '/512e7sOroI5InisAXpPI1pqvcHG.jpg', 6, '2025-12-10 10:29:19', 1228246, NULL, NULL, NULL),
(26, 'Phi Vụ Động Trời 2', 'Trong bộ phim \"Zootopia 2 - Phi Vụ Động Trời 2\" từ Walt Disney Animation Studios, hai thám tử Judy Hopps (lồng tiếng bởi Ginnifer Goodwin) và Nick Wilde (lồng tiếng bởi Jason Bateman) bước vào hành trình truy tìm một sinh vật bò sát bí ẩn vừa xuất hiện tại Zootopia và khiến cả vương quốc động vật bị đảo lộn. Để phá được vụ án, Judy và Nick buộc phải hoạt động bí mật tại những khu vực mới lạ của thành phố – nơi mối quan hệ đồng nghiệp của họ bị thử thách hơn bao giờ hết.', 2025, '/5wXpOF9WPUKliIzNBdAqwAStLHU.jpg', 4, '2025-12-10 10:29:15', 1084242, NULL, NULL, NULL),
(25, 'Troll: Quỷ núi khổng lồ 2', 'Khi con quỷ núi nguy hiểm mới tàn phá quê nhà của họ, Nora, Andreas và Đại úy Kris dấn thân vào nhiệm vụ nguy hiểm nhất của họ từ trước đến nay.', 2025, '/plyEn5uDNXXDYihF8Z7YOe2PVKE.jpg', 3, '2025-12-10 10:29:13', 1180831, NULL, NULL, NULL),
(24, 'Trò Chơi Ảo Giác: Ares', 'Một chương trình trí tuệ nhân tạo siêu việt mang tên Ares được gửi từ thế giới số vào thế giới thực trong một nhiệm vụ đầy nguy hiểm — đánh dấu lần đầu tiên nhân loại tiếp xúc trực tiếp với một thực thể A.I. sống động.', 2025, '/lj7imLGAzI3zKvbJtPH01aYW9lU.jpg', 2, '2025-12-10 10:29:11', 533533, NULL, NULL, NULL),
(42, 'Wicked: Phần 2', '', 2025, '/oQSPp51Uv74civ9gv3wqJmqlJVX.jpg', 20, '2025-12-10 10:29:46', 967941, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
