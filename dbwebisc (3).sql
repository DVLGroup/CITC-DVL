-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 01:24 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbwebisc`
--

-- --------------------------------------------------------

--
-- Table structure for table `daugia`
--

CREATE TABLE IF NOT EXISTS `daugia` (
  `sp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sp_price_now` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sp_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daugia`
--

INSERT INTO `daugia` (`sp_id`, `user_id`, `sp_price_now`) VALUES
(1, 8, '510000'),
(1, 10, '515000'),
(2, 10, '800000');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT,
  `sp_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sp_status` int(45) NOT NULL,
  `sp_time` datetime NOT NULL,
  `sp_price_goc` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sp_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `sp_name`, `sp_status`, `sp_time`, `sp_price_goc`, `sp_image`) VALUES
(1, 'Tăm tre Trẻ Em Mù', 0, '2013-12-21 00:00:00', '500000', 'http://dnapharma.com.vn/ImgUpload/tamtre633909286168125000.jpg'),
(2, 'Bút Chì Yêu Thương', 1, '2013-12-22 00:00:00', '600000', 'http://llwww.thejigsawpuzzles.com/download/640582-2/get-1-2010-6nj0iaez.jpg'),
(3, 'Bút Bi Thương Yêu', 1, '2013-12-22 05:00:00', '600000', 'http://llwww.thejigsawpuzzles.com/download/640582-2/get-1-2010-6nj0iaez.jpg'),
(17, 'Tăm tre cao cấp', 0, '0000-00-00 00:00:00', '600000', 'http://llwww.thejigsawpuzzles.com/download/640582-2/get-1-2010-6nj0iaez.jpg'),
(18, 'Tăm tre Sài Gòn', 0, '0000-00-00 00:00:00', '600000', 'http://84d1f3.medialib.glogster.com/movieonline247/media/c6/c6e95ecd0e8f1e0d03dc59e3d29f17a6ceb7e8e1/wolverine1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `tintuc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tintuc_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `tintuc_content` text COLLATE utf8_unicode_ci,
  `tintuc_postdate` date DEFAULT NULL,
  `tintuc_keyword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tintuc_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tintuc_cataloge_id` int(11) NOT NULL,
  PRIMARY KEY (`tintuc_id`),
  KEY `tintuc_cataloge_id` (`tintuc_cataloge_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`tintuc_id`, `tintuc_title`, `user_id`, `tintuc_content`, `tintuc_postdate`, `tintuc_keyword`, `tintuc_status`, `tintuc_cataloge_id`) VALUES
(1, 'Nhà Hảo Tâm Sài Gòn Nguyễn Trung Việt', 1, '[b][i][left]THÔNG BÁO\r\nNhà Hảo Tầm Nguyễn Trung Việt và nhân viên Lê Thị Lợi Đang cần 8 bạn là thành viên của web để đi từ thiện ở miền tây 2 ngày 1 đêm, bao chi phí  ăn ở và đi lại luôn\r\n\r\nmọi chi tiết liên hệ\r\n\r\nNguyễn Trung V iệt: vietnt134@gmail.com\r\nhoặc\r\nChị Lê Thị Lợi: trongloikt192@gmail.com\r\nthân ái:)[/left][/i][/b]', '2013-12-21', 'Hảo Tâm', 'Đã Ủng Hộ', 2),
(5, 'Niềm vui nhỏ tới trẻ em vùng cao', 1, 'Tháng 9 tới đây NTTV sẽ hỗ trợ một số vật dụng cho trẻ em vùng cao , kính mong quý mạnh thường quân đồng lòng chia sẻ .\r\nĐây là một xã đa sồ là đồng bào dân tôc ( khoảng 95% dân tộc K ho),họ sống bằng nghề nông..,cuộc sống rất nghèo...đời sống văn hoá rất hạn chế . Vì lý do đó chúng tôi muốn xây dựng một thư viện nho nhỏ với mục đích để các em có vui chơi, phát triển văn hóa đọc cho các em nhỏ.\r\nvới dự án " Thư Viện Cho Trè Em Vùng Cao"\r\ntổng số học sinh là :598 em\r\ntrong đó:\r\n- Mẫu giáo 74 em\r\n- Cấp 1 316 em\r\n- Cấp 2 208 em\r\n[center][img]http://img.tinthethao.com.vn/uploads/news/PostImg/2012/11/14/69/950a3042511804.jpg[/img]﻿[/center]\r\nNgười chịu trách nhiêm : Linh mục joa Nguễn Đức Mừng\r\nĐia điểm : Trong khu của nhà thờ Giáo họ B SuMrac ,thôn 1, xã Lộc Tân, Huyện BảoLâm,tỉnh Lâm đồng\r\nĐiện thoại : 0633 930044 - di động: 0903 135455\r\n\r\nCần quyên góp các loại sách, dụng cụ học tập , quần áo ...\r\nĐịa điểm nhận đóng góp : 28C Phạm Viết Chánh , p19 . quận Bình Thạnh , HCM .\r\nSố đt liên hệ : 0902.668.069 - 0909.668.069\r\nThời hạn nhận ủng hộ : đến hết ngày 30/09/2013', '2013-12-21', 'Hảo Tâm, Đòi Quà', 'Chưa Ủng Hộ', 2),
(6, '561 triệu đồng từ thiện cho trẻ em nghèo, người khyết tật', 8, 'Trong tháng 9, ngân hàng An Bình (ABBank) sẽ trao hơn 500 phần quà cho người có hoàn cảnh khó khăn tại TP HCM và 28 tỉnh, thành khác trên toàn quốc - những địa phương mà doanh nghiệp này có mặt. Tổng giá trị từ thiện lên đến 561 triệu đồng.\r\nChương trình từ thiện "Hè yêu thương - 20 năm gắn kết và chia sẻ" của ABBank tập trung vào mảng giáo dục và y tế tại các địa phương mà ngân hàng này có mặt. Theo đó, hơn 500 phần quà sẽ được doanh nghiệp này trao tặng những người có hoàn cảnh kém may mắn như: người neo đơn, trẻ em mồ côi, người khuyết tật, người mắc bệnh hiểm nghèo, học sinh giỏi vượt khó… Tổng ngân sách dành cho chương trình ước tính trên 561 triệu đồng. Công đoàn và cán bộ nhân viên ABBank cũng đã đóng góp số lượng lớn đồ chơi, sách truyện, tiền mặt, thuốc men… vào quỹ quà tặng của chương trình.\r\n[left]﻿[/left][center][img]http://farm.vtc.vn/media/vtcnews/2011/04/04/1301563622ngheo13.jpg[/img]﻿[/center]', '2013-12-24', '561 Triệu, Người Nghèo, Người Khuyết Tật', 'Chưa Ủng Hộ', 2),
(7, '[ Phía Nam ] Giúp đỡ 2 bà cháu khó khăn tại huyện Bù Đăng - Bình Phước', 8, '[center][img]http://nguoiphattu.com/hinh/hinh2013/thang6/luuthichi/bechi00.jpg[/img][/center]\r\nChắc rằng trong mỗi con người chúng ta, ai cũng mơ về một mái ấm gia đình hạnh phúc đầy đủ cha mẹ và người thân , ước mơ ấy tưởng chừng như nhỏ bé mà lại vô cùng “ xa xỉ “ đối với cô bé tội nghiệp Lưu Thị Bé Chi trú tại xã Đăng Hà huyện Bù Đăng tỉnh Bình Phước .[/b]\r\n\r\nChi mồ côi cha mẹ từ bé và phải sống cùng bà ngoại bên mái nhà tạm bợ của người chú . Hiện tại công việc mưu sinh hàng ngày của Chi là lượm hạt điều mỗi ngày kiếm được khoảng 30 – 40 ngàn ,chi phí sinh hoạt cho 2 bà cháu cũng được gói ghém hết sức cẩn thận mới đủ . Nhưng nào ông trời có chiều theo lòng người đâu , chẳng may bà Chi bị bệnh nặng không di chuyển được nhiều, ở cái tuổi 75 gần đất xa trời lại mang thêm trong mình căn bệnh tai biến thì đó là nỗi ám ảnh của bà và cô cháu gái đáng thương , đồng tiền vốn đã ít ỏi nay lại càng ít hơn để chi tiêu vào tiền thuốc thang cho bà .\r\nHai bà cháu đang trong hoàn cảnh khốn khó cần tiền sinh hoạt và thuốc thang chữa bệnh cho bà , sắp đến mùa mưa mà 2 bà cháu phải ở trong căn nhà không mấy lành lặn làm chúng tôi vô cùng lo lắng .\r\nChúng tôi được biết : “ Ngày bà về với đất trời cũng là ngày Chi phải cuốn gói ra đi và không được ở trong ngôi nhà ấy nữa, với khả năng nhỏ bé của chúng tôi thì làm sao giúp đỡ được nơi chốn nương thân cho cô bé đây ? “ .Điều đó làm chúng tôi ray rứt mãi .\r\nChúng tôi tha thiết mong mỏi các quý mạnh thường quân hãy chung tay cùng chúng tôi giúp đỡ cho 2 bà cháu có được mái nhà lành lặn để qua khỏi mùa mưa và 1 số tiền nhỏ để Chi có thể thang thuốc cho bà . Một cây làm chẳng nên non nhưng chúng tôi tin rằng khi nhiều cây hợp lại cũng có thể san sẻ phần nào nỗi thống khổ mà 2 bà cháu đang gánh chịu .', '2013-12-22', 'Bà Cháu, cần giúp đỡ', 'Chưa Ủng Hộ', 1),
(8, '[ Phía Bắc ] Giúp bé Mai cùng Bà bị bỏng nặng', 1, '[center]﻿[video]acFboElLX3A[/video][/center][b]Hà Nội những ngày cuối năm,nhà nhà người người tấp nập lo lắng sắm Tết.Đâu đó trên những nẻo đường,người ta đã thấy thấp thoáng những chuyến xe chở đào,quất về với thủ đô yêu dấu…Nhưng đằng sau những sự ấm no,sung túc ấy,chúng tôi biết ở rất nhiều nơi,nhiều cảnh đời cần giúp đỡ,cần sẻ chia…và hoàn cảnh của gia đình bé Mai là một ví dụ…[/b]\r\n \r\nBiết dược thông tin về hoàn cảnh của bé Mai, chúng tôi tìm đến viện bỏng Quốc gia Hà Nội và gặp được cô của bé Mai,người đã phải bỏ công việc ra Hà Nội để chăm cho bà là Nguyễn Thị Vẻ 58t,và bé Nguyễn Thị Mai 5t.Người phụ nữ khắc khổ này cứ nhỏ nhẹ kể lại câu được câu mất về vụ nổ kinh hoàng kia.Dường như những người trong gia đình xấu số này vẫn chưa hết bang hoàng. Sau khi tìm hiểu sự viêc chúng tôi dược biết,trong khi cả gia đình đang quây quần nấu cơm ăn uống thì vụ nổ bình ga diễn ra.Tất cả có 7 người bị nạn,trong đó có bố bé Mai vì quá nặng nên đã qua đời, bé Mai và bà của bé do bị bỏng nặng nên phải chuyển ra viện Bỏng Quốc gia để được điều trị, bé Mai bị bỏng nặng ở vùng mặt và có thể bị hỏng cả 2 mắt. Mẹ bé Mai và ông nội bị nhẹ hơn nên đang được chăm sóc ở bệnh viện tỉnh Bắc Ninh.\r\nNghẹn ngào và xúc động trước hoàn cảnh của bé, chúng tôi chỉ dám hỏi sơ qua tình hình:\r\n[list][*]Thế bác sĩ có nói gì về tình hình của bé Mai không chị?[/*][*]Có,bác sĩ có nói ,và tin vui nhiều hơn là tin dữ…[/*][/list]Mặc quần áo bảo hộ,xin phép bác sĩ vào thăm bệnh nhân,tôi không khỏi bàng hoàng vì mọi thứ tôi nhìn thấy còn kinh khủng hơn những gì mà tôi tưởng tượng .Mặc dù trong phòng có máy sưởi cho bé và bà,nhưng tôi vẫn thấy lạnh người.\r\n\r\nBé Mai mở mắt khe khẽ,thỉnh thoảng lại run lên bần bật vì đau,khóc nũng với cô,bảo cô nói bác sĩ đi ra ngoài đi.Tôi đành đứng tránh ra một góc quan sát.Với một cơ thể 5t chưa phát triển đầy đủ mà chịu đau đớn,ngày nào cũng phải thay băng…không thể hiểu nổi những nỗi đau về thể xác và tinh thần còn theo bé tới khi nào.Bé ngoan lắm, bé kêu cô gọi điện về cho mẹ,tiếng nũng nịu khe khẽ của trẻ con .Người cô chỉ chực rơm rớm,một tay cầm điện thoại vờ bấm,một tay khẽ vuốt nhè nhẹ môi bé…\r\n\r\nGiường bên cạnh là bà của bé.Đã ở cái tuổi gần đất xa trời,có ai nghĩ chỉ vì một bữa cơm mà cả gia đình mang họa.Khôn không đến trẻ,khỏe không đến già.Cũng chỉ kịp thấy hơi thở phập phồng,khe khẽ cựa mình và nhữn tiếng rên rỉ nho nhỏ…Thế là gia đình họ năm nay chẳng có một cái Tết trọn vẹn.\r\n\r\n****\r\n\r\nQuý mệnh thường quân - Nhà hảo tâm giúp đỡ gia đình bé vui lòng liên hệ trực tiếp với gia đình.\r\n\r\nMã số bệnh nhân của Bé và Bà là 7710 và 7711 ( Nguyễn Thị Vẻ 58 tuổi ,và bé Nguyễn Thị Mai 5 tuổi ) phòng 212 - tầng 2 khoa hồi sức cấp cứu Viện bỏng quốc gia - Hà Nội.\r\n\r\n[b][u]Hợp tác cùng Viethearts ( NTTV ) [/u][/b]Mọi sự ủng hộ của mệnh thường quân được cập nhật công khai tại Topic này.\r\n\r\n[b]Hội từ thiện Những Trái Tim Việt[/b]\r\n\r\n[b]Tại Tp - HCM[/b]\r\nĐịa chỉ: 28c - Phạm Viết Chánh - Phường 19 - Bình Thạnh\r\n[b]Tại Hà Nội[/b]\r\nĐịa chỉ:141 phố Vọng - Hai Bà Trưng - Hà NộiĐiện thoại: [i][b]0902.668.069 [/b][b]- 0909.668.069 [/b]( Viethearts - Những trái tim việt ) [/i]\r\n\r\n[b]Ngân hàng Vietcombank - HCM[/b]\r\nSố TK: 0181001752859\r\nChủ Tk: Hoàng Ngọc Thành\r\nPs:/ Số riêng của hội đã đăng ký sms/ Internet Banking Check Online ( Public )\r\nQuý nhà hảo tâm chuyển khoản ủng hộ vui lòng cho xin thêm 1 sms báo tới số của hội để tiện cập nhật', '2013-12-22', 'bỏng, giúp đỡ, bé Mai', 'Chưa Ủng Hộ', 2),
(9, 'Bé Tuyền 8 tuổi bị viêm màng não', 1, 'Nhận được tin báo từ bệnh viện Pham Ngọc Thạch có 1 cô bé 8 tuổi bị viêm màng nảo nặng nên chúng tôi là những người đại diện cho hội từ thiện “ Những Trái Tim Việt” đã đến thăm hỏi em và gia đình. Em tên là Võ Thị Tuyền năm nay em đã được 8 tuổi,hằng ngày bé vừa đi học và đi bán vé số phụ mẹ ( cha em đã theo vợ nhỏ ) 1 lần đi bán vé số bé bỗng đổ bệnh và được bác sỉ chuẩn đoán bị viêm màng não,bé hay bị nhức đầu và ăn uống khó khăn , căn bệnh gần như chiếm đi cả đôi mắt của em,hiện tại mắt em bị lé và 2 mắt chạy sát lại gần nhau .Nếu như không có tiền chữa trị căn bệnh này có thể đôi mắt của em sẽ không còn nữa, đôi chân của em đã không còn đi lại được nửa,nhìn ánh mắt u buồn và đau đớn của em chúng tôi rất đau lòng. Mong quý mạnh thường quân xa gần hãy giúp đỡ em vượt qua cơn hoạn nạn này...\r\n[br]\r\nMọi người có thể đến trực tiếp thăm bé tại địa chỉ :\r\nBệnh viện Phạm Ngọc Thạch\r\nBé : Võ Thị Tuyền\r\nPhòng số 4 , giường 14\r\nSố đt gia đình : 0947.247.152 ( mẹ bé chị Nhung )', '2013-12-22', 'Bé Tuyền, viêm màng não', 'Chưa Ủng Hộ', 2),
(10, '[Phía Nam] - Đưa con ông cụ BHH về Làng Tre và thăm gia đình bé Gia Huy', 8, '﻿﻿Hôm nay đã là 20 ngày kể từ ngày ông Hai ở Bình Hưng Hòa qua đời . Anh chị em NhữngTrái Tim Việt đã đến với ông hơn 1 năm qua dường như cũng là duyên trời. Chúng tôi nhận ra mọi người không chỉ coi ông như một hoàn cảnh neo đơn cần giúp đỡ, mà hơn cả mọi người còn coi ông như một người thân . Lúc ông còn sống, mọi người vẫn thỉnh thoảng ghé thăm và chuyện trò cùng ông . Từ lúc ông bệnh nặng cho đến lúc mất, ace NTTV luôn có mặt bên cạnh ông . NTTV đã cùng những người tốt lạ mặt, mỗi người góp chút sức lo cho đám tang của ông thật trọn vẹn. Ace NTTV đã hoàn thành tâm nguyện cuối cùng trước khi ông mất đó là : lo cho người con trai bị tâm thần của ông và những con mèo hoang mà ông cưu mang từ nhỏ.\r\n[br]\r\nSau khi liên lạc nhiều nơi thì NTTV đã tìm được chỗ ở cho con trai ông Hai , đó là [url=http://forum.saigonlab.com.vn/f59/va-phong-su-anh-ngay-chu-nhat-voi-lang-tre-niem-vui-chua-tron-ven-va-6347/]Làng Tre ở Đồng Nai [/url], nơi mà ace NTTV đã một lần đến thăm vào tháng 5 năm 2010 .[offtop]\r\n[/offtop]', '2013-12-22', 'BHH, Làng Tre', 'Chưa Ủng Hộ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc_cataloge`
--

CREATE TABLE IF NOT EXISTS `tintuc_cataloge` (
  `tintuc_cataloge_id` int(11) NOT NULL AUTO_INCREMENT,
  `tintuc_cataloge_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tintuc_cataloge_id`),
  UNIQUE KEY `tintuc_cataloge_name_UNIQUE` (`tintuc_cataloge_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tintuc_cataloge`
--

INSERT INTO `tintuc_cataloge` (`tintuc_cataloge_id`, `tintuc_cataloge_name`) VALUES
(2, 'Do admin post'),
(1, 'Do người dùng post');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_avatar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_sdt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_level_id` int(11) NOT NULL,
  `user_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email_UNIQUE` (`user_email`),
  KEY `user_level_id` (`user_level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_name`, `user_address`, `user_avatar`, `user_sdt`, `user_level_id`, `user_password`, `user_description`) VALUES
(1, 'vietnt134@gmail.com', 'Nguyễn Trung Việt', '47/8/5 đường 2, Phường Bình An, Quận 2, TPHCM', '', '0903676222', 1, 'whatdidyoudo134', ''),
(8, 'trongloitk192@gmail.com', 'Nguyễn Thị Lợi', '45/8, đường 3, P.An Bình, Quận 2, TPHCM', 'DMC-DevilMayCry-2013-02-03-19-18-40-86.png', '01232254526', 4, 'whatdidyoudo', 'Nhà hảo tâm có tấm lòng nhân ái'),
(10, '10520649@gm.uit.edu.vn', 'Nguyễn Việt', '45/8, đường 3, P.An Bình, Quận 2, TPHCM', 'DMC-DevilMayCry-2013-02-03-19-18-40-86.png', '01232254526', 2, '12345678', ''),
(11, 'lct_1992@yahoo.com', 'Lâm Thị Chí Thẹn', '45/8, đường 3, P.An Bình, Quận 2, TPHCM', 'nucuoitretho.jpg', '05150250225', 4, '7c4a8d09ca3762af61e59520943dc26494f8941b', ''),
(12, 'haivl@gmail.com', 'Hài Vui Lắm', '45/8, đường 3, P.An Bình, Quận 2, TPHCM', 'nucuoitretho.jpg', '01232253452', 4, '12345678', 'Một trang web về hình ảnh vui nhộn, nhưng làm từ thiện thì cực kỳ tích cực...');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `user_level_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_level_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_level_id`),
  UNIQUE KEY `user_level_name_UNIQUE` (`user_level_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level_name`) VALUES
(1, 'Admin'),
(4, 'Donor'),
(3, 'Primary_User'),
(2, 'User');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `tintuc_ibfk_3` FOREIGN KEY (`tintuc_cataloge_id`) REFERENCES `tintuc_cataloge` (`tintuc_cataloge_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `user_level` (`user_level_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
