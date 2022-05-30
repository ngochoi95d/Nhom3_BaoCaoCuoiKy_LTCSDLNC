-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2022 lúc 03:29 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'tanhoa', '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id_danhgia` int(11) NOT NULL,
  `danhgiasao` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noidungdanhgia` text NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `thutu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(5, 'Khoa Học', '1'),
(6, 'Tiểu Thuyết', '2'),
(8, 'Truyện Vui', '3'),
(9, 'Văn Học', '4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `mahoadon` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `giaohang` varchar(255) NOT NULL,
  `thanhtoan` varchar(255) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `mahoadon` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id_khuyenmai` int(11) NOT NULL,
  `tenkhuyenmai` varchar(255) NOT NULL,
  `giakhuyenmai` int(11) NOT NULL,
  `phantram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id_khuyenmai`, `tenkhuyenmai`, `giakhuyenmai`, `phantram`) VALUES
(7, 'HOT SALE ', 10000, '50%'),
(8, 'FLASH SALE ', 10000, '15%');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `masanpham` varchar(10) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `gia` varchar(20) NOT NULL,
  `soluong` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `hinh1` varchar(255) NOT NULL,
  `hinh2` varchar(255) NOT NULL,
  `hinh3` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `tinhtrang` varchar(20) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_khuyenmai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `masanpham`, `tensanpham`, `gia`, `soluong`, `hinh`, `hinh1`, `hinh2`, `hinh3`, `mota`, `tinhtrang`, `id_danhmuc`, `id_khuyenmai`) VALUES
(1, '8935235226', 'Nhà Giả Kim (Tái Bản 2020)', '67150', '227', 'image_195509_1_36793.jpg', 'image_195509_1_36793-001.jpg', '8935235226272_1.jpg', '8935235226272_2.jpg', ' ', 'còn hàng', 5, 8),
(2, '8936071673', 'Bố Già (Đông A)', '95700', '12', '8936071673381.jpg', '8936071673381-001.jpg', '2019_09_19_10_59_54_1-390x510.jpg', '2019_09_19_10_59_54_2-390x510.jpg', '', 'còn hàng', 5, 8),
(3, '8935235217', 'Bước Chậm Lại Giữa Thế Gian Vội Vã (Tái Bản 2018)', '68000', '254', 'buoc_cham_lai_giua_the_gian_voi_va.u335.d20160817.t102115.612356.jpg', 'https://cdn0.fahasa.com/media/catalog/product/b/u/buoc_cham_lai_giua_the_gian_voi_va.u335.d20160817.t102115.612356.jpg', '2019_09_19_11_46_51_1-390x510.jpg', '2019_09_19_11_46_51_2-390x510.jpg', '', 'còn hàng', 5, 8),
(4, '8934974163', 'Mắt Biếc (Tái Bản 2019)', '93500', '12', 'mat-biec_bia-mem_in-lan-thu-44.jpg', 'mat-biec_bia-mem_in-lan-thu-44-001.jpg', 'mat_biec_bia_mem_in_lan_thu_44.jpg', '2019_11_05_09_36_21_1-390x510.jpg', '', 'còn hàng', 5, 8),
(5, '8935235228', 'Cây Cam Ngọt Của Tôi', '91800', '244', 'image_217480.jpg', 'image_217480-001.jpg', '2020_12_17_16_50_30_1-390x510.jpg', '2020_12_17_16_50_30_2-390x510.jpg', '', 'còn hàng', 5, 8),
(6, '8934974170', 'Con Chim Xanh Biếc Bay Về - Bìa Cứng - Tặng Kèm 6 Postcard', '202500', '396', 'biacung_1_1.jpg', 'biacung_1_1-001.jpg', 'thumbnail.jpg', 'con_chim_xanh_bia_cung_bia_1.jpg', '', 'còn hàng', 5, 8),
(7, '8934974150', 'Nỗi Buồn Chiến Tranh', '97750', '12', 'noibuonchientranh.jpg', 'noibuonchientranh-001.jpg', '2020_06_05_09_45_57_1-390x510.jpg', '2020_06_05_09_45_57_2-390x510.jpg', '', 'còn hàng', 5, 8),
(8, '8934974158', 'Hạ Đỏ (Tái Bản 2018)', '49200', '12', '8934974158592.jpg', '8934974158592-001.jpg', '2020_05_26_13_43_27_1-390x510.JPG.jpg', '2020_05_26_13_43_27_2-390x510.JPG.jpg', '', 'còn hàng', 5, 8),
(9, '8934974175', 'Ra Bờ Suối Ngắm Hoa Kèn Hồng - Tặng Kèm Bookmark Bồi Hai Mặt + Thiệp Trái Tim In Bài Thơ Của Tác Giả', '130500', '336', '600ra-bo-suoi---bm_1.jpg', '600ra-bo-suoi---bm_1-001.jpg', 'ra_bo_suoi_-_bm_1.jpg', 'thi_ptho_1_1.jpg', '', 'còn hàng', 5, 8),
(10, '8934974159', 'Cho Tôi Xin Một Vé Đi Tuổi Thơ (12) (Tái Bản 2018)', '64000', '12', 'image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_1233.jpg', 'image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_1233-001.jpg', '2021_06_08_15_54_24_1-390x510.jpg', '2021_06_08_15_54_24_2-390x510.jpg', '', 'còn hàng', 5, 8),
(11, '8935244868', 'Tiểu Thuyết Chuyển Thể - Thanh Gươm Diệt Quỷ: Tanjiro Và Nezuko - Khởi Đầu Của Định Mệnh', '55000', '17.6 x 11.3 cm', 'tieu-thuyet-chuyen-the---thanh-guom-diet-quy---khoi-dau-cua-dinh-menh.jpg', 'tieu-thuyet-chuyen-the---thanh-guom-diet-quy---khoi-dau-cua-dinh-menh-001.jpg', 'tieu_thuyet_chuyen_the_-_thanh_guom_diet_quy_-_khoi_dau_cua_dinh_menh.jpg', 'tieu_thuyet_chuyen_the_-_thanh_guom_diet_quy_-_khoi_dau_cua_dinh_menh-001.jpg', '', 'còn hàng', 5, 8),
(13, '8934974170', 'Con Chim Xanh Biếc Bay Về - Tặng Kèm 6 Postcard', '112500', '396', 'biamem.jpg', 'biamem-001.jpg', 'thumbnail-001.jpg', 'con_chim_xanh_bia_mem_bia_1.jpg', '', 'còn hàng', 5, 8),
(14, '8934974158', 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh (Bản In Mới - 2018)', '100000', '12', 'image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_2199.jpg', 'image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_2199-001.jpg', '2019_11_04_14_40_54_1-390x510.jpg', '2019_11_04_14_40_54_2-390x510.jpg', '', 'còn hàng', 5, 8),
(15, '8935095630', 'Số Đỏ', '45100', '12', 'image_220968.jpg', 'image_220968-001.jpg', '8935095630752.jpg', 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia_sodo3b4.jpg', '', 'còn hàng', 5, 8),
(16, '8934974148', 'Cô Gái Đến Từ Hôm Qua', '72800', '12', 'co_gai_den_tu_hom_qua_1_2018_11_16_11_03_46.JPG.jpg', 'co_gai_den_tu_hom_qua_1_2018_11_16_11_03_46.JPG-001.jpg', 'co_gai_den_tu_hom_qua_2_2018_11_16_11_03_46.JPG.jpg', 'co_gai_den_tu_hom_qua_3_2018_11_16_11_03_46.JPG.jpg', '', 'còn hàng', 5, 8),
(17, '8934974158', 'Tôi Là Bêtô (Tái Bản 2018)', '72250', '12', 'image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_1236.jpg', 'image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_1236-001.jpg', '2021_06_08_15_54_54_1-390x510.jpg', '2021_06_08_15_54_54_2-390x510.jpg', '', 'còn hàng', 5, 8),
(18, '8935325003', 'Semantic Error - Lỗi Logic - Tập 1 - Tặng Kèm Bookmark + 01 Postcard', '227920', '24 x 17 cm', 'bia---semantic-error_1.jpg', 'bia---semantic-error_1-001.jpg', 'bia-ao-_1_---semantic-error_1.jpg', 'bia-trong-_1_---semantic-error_1.jpg', '', 'còn hàng', 5, 8),
(19, '8936203360', 'Bố Già - Bìa Cứng', '217500', '24 x 16 cm', 'z2611575615164_9f60c133cfed1c7bb3f59b247f-600.jpg', 'z2611575615164_9f60c133cfed1c7bb3f59b247f-600-001.jpg', 'z2611575615164_91500.jpg', 'https://cdn0.fahasa.com/media/catalog/product/z/2/z2611575571384_cbcc752273941dac01892e854e8d8917.jpg', '', 'còn hàng', 5, 8),
(20, '8934974160', 'Bảy Bước Tới Mùa Hè (Tái Bản 2019)', '97750', '12', 'image_182390.jpg', 'image_182390-001.jpg', '2020_04_17_13_52_35_1-390x510.JPG.jpg', '2020_04_17_13_52_35_2-390x510.JPG.jpg', '', 'còn hàng', 5, 8),
(21, '8934974158', 'Bồ Câu Không Đưa Thư (Tái Bản 2019)', '49300', '12', 'image_180919.jpg', 'image_180919-001.jpg', '2020_05_27_17_26_39_1-390x510.JPG.jpg', '2020_05_27_17_26_39_2-390x510.JPG.jpg', '', 'còn hàng', 5, 8),
(22, '8935235215', 'Tớ Muốn Ăn Tụy Của Cậu', '76800', '341', 'image_145277.jpg', 'to_muon_an_tuy_cua_cau_1_2018_08_07_11_02_04.JPG.jpg', 'to_muon_an_tuy_cua_cau_2_2018_08_07_11_02_04.JPG.jpg', 'to_muon_an_tuy_cua_cau_3_2018_08_07_11_02_04.JPG.jpg', '', 'còn hàng', 5, 8),
(23, '8935086852', 'Dấu Chân Trên Cát (Tái Bản 2020)', '118400', '432', 'image_195509_1_12629_1.jpg', 'image_195509_1_12629_1-001.jpg', 'dauchantrencat_bia_1_1.jpg', 'doc_thu_dauchantrencat-5_1.jpg', '', 'còn hàng', 5, 8),
(24, '8934974152', 'Gọi Em Bằng Tên Anh', '83300', '316', 'goiembangtenanh.jpg', 'goi_em_bang_ten_anh_1_2018_07_05_14_04_10.JPG.jpg', 'goi_em_bang_ten_anh_2_2018_07_05_14_04_10.JPG.jpg', 'goi_em_bang_ten_anh_3_2018_07_05_14_04_10.JPG.jpg', '', 'còn hàng', 5, 8),
(165, '8936071673', 'Bố Già (Đông A)', '95700', '3', '8936071673381.jpg', '8936071673381.jpg', '8936071673381.jpg', '8936071673381.jpg', '<p>Bố Già (Đông A)  Thế giới ngầm được phản ánh trong tiểu thuyết Bố già là sự gặp gỡ giữa một bên là ý chí cương cường và nền tảng gia tộc chặt chẽ theo truyền thống mafia xứ Sicily với một bên là xã hội Mỹ nhập nhằng đen trắng, mảnh đất màu mỡ cho những', 'Còn Hàng', 5, 8),
(166, 'KH-01', 'Đỗ Thích Kỳ Án', '96000', '3', 'sanhkhoahoc.jpg', 'sanhkhoahoc.jpg', 'sanhkhoahoc.jpg', 'sanhkhoahoc.jpg', '<p>Tác giả : duy khánh</p>', 'còn hàng', 5, 8),
(167, '8935235226', 'Nhà Giả Kim (Tái Bản 2020)', '67150', '1', 'image_195509_1_36793.jpg', 'image_195509_1_36793.jpg', 'image_195509_1_36793.jpg', 'image_195509_1_36793.jpg', '<p>Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người</p>', 'còn hàng', 5, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `diachi`, `phone`, `avatar`, `email`) VALUES
(2, 'hoa', '1234', '232', '13121', '', 'hoaguyen@'),
(4, 'nguyentaans', '123', '232', '0983775038', '', 'hoa1@gmail.com'),
(5, 'hoa', '123456', '1231-02', '0983775038', '', 'admin@gmail.com'),
(6, 'nguyenhuya', '12345678', 'ssdsd', '0983775038', '', 'admin@gmail.comm'),
(7, 'nguyenhuya', '123', '44  hoa nam, 2', '0983775038', '', 'hoa@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id_danhgia`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `mahoadon` (`mahoadon`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `mahoadon` (`mahoadon`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id_khuyenmai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`),
  ADD KEY `id_khuyenmai` (`id_khuyenmai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id_danhgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id_khuyenmai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
