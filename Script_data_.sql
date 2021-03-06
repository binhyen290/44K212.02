
USE [QUAN_LI_SAN_BONG]
GO
/****** Object:  Table [dbo].[DATSAN]    Script Date: 01/04/2021 10:07:53 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DATSAN](
	[MaDS] [char](6) NOT NULL,
	[MaSB] [char](5) NOT NULL,
	[MaSV] [char](12) NOT NULL,
	[ThoiGianDS] [datetime] NULL,
	[NgayNhan] [date] NULL,
	[GioNhan] [time](7) NULL,
	[GioTra] [time](7) NULL,
	[TongTien] [float] NULL,
	[DatCoc] [float] NULL,
	[HinhThucDC] [varchar](50) NULL,
	[TGHuy] [datetime] NULL,
	[DichVuKem] [nvarchar](255) NULL,
PRIMARY KEY CLUSTERED 
(
	[MaDS] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SANBONG]    Script Date: 01/04/2021 10:07:53 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SANBONG](
	[MaSB] [char](5) NOT NULL,
	[TenSB] [nvarchar](50) NULL,
	[DienTich] [nvarchar](50) NULL,
	[GiaThue] [float] NULL,
	[TinhTrang] [char](1) NULL,
PRIMARY KEY CLUSTERED 
(
	[MaSB] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SINHVIEN]    Script Date: 01/04/2021 10:07:53 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SINHVIEN](
	[MaSV] [char](12) NOT NULL,
	[TenSV] [nvarchar](50) NULL,
	[NgaySinh] [date] NULL,
	[Lop] [varchar](50) NULL,
	[Khoa] [nvarchar](100) NULL,
	[SDT] [char](10) NULL,
	[GMAIL] [nvarchar](100) NULL,
 CONSTRAINT [PK__SINHVIEN__2725081A0E94FF88] PRIMARY KEY CLUSTERED 
(
	[MaSV] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
INSERT [dbo].[DATSAN] ([MaDS], [MaSB], [MaSV], [ThoiGianDS], [NgayNhan], [GioNhan], [GioTra], [TongTien], [DatCoc], [HinhThucDC], [TGHuy], [DichVuKem]) VALUES (N'DS0001', N'SB001', N'171122015502', CAST(N'2021-01-15T02:29:01.000' AS DateTime), CAST(N'2021-01-20' AS Date), CAST(N'15:00:00' AS Time), CAST(N'17:00:00' AS Time), 480000, 100000, N'Cash', NULL, N'Áo bảo hộ')
INSERT [dbo].[DATSAN] ([MaDS], [MaSB], [MaSV], [ThoiGianDS], [NgayNhan], [GioNhan], [GioTra], [TongTien], [DatCoc], [HinhThucDC], [TGHuy], [DichVuKem]) VALUES (N'DS0002', N'SB002', N'181121521207', CAST(N'2021-02-07T15:45:35.000' AS DateTime), CAST(N'2020-02-09' AS Date), CAST(N'16:00:00' AS Time), CAST(N'18:00:00' AS Time), 480000, 100000, N'Credit card', NULL, N'Nước uống')
INSERT [dbo].[DATSAN] ([MaDS], [MaSB], [MaSV], [ThoiGianDS], [NgayNhan], [GioNhan], [GioTra], [TongTien], [DatCoc], [HinhThucDC], [TGHuy], [DichVuKem]) VALUES (N'DS0003', N'SB002', N'181121006209', CAST(N'2020-12-10T07:55:51.000' AS DateTime), CAST(N'2020-12-11' AS Date), CAST(N'15:00:00' AS Time), CAST(N'17:00:00' AS Time), 480000, 100000, N'Ewallet', NULL, N'Nước uống')
INSERT [dbo].[DATSAN] ([MaDS], [MaSB], [MaSV], [ThoiGianDS], [NgayNhan], [GioNhan], [GioTra], [TongTien], [DatCoc], [HinhThucDC], [TGHuy], [DichVuKem]) VALUES (N'DS0004', N'SB002', N'181121723507', CAST(N'2020-11-06T04:45:10.000' AS DateTime), CAST(N'2020-11-12' AS Date), CAST(N'16:00:00' AS Time), CAST(N'18:00:00' AS Time), 480000, 100000, N'Credit card', NULL, N'Bóng, nước uống')
INSERT [dbo].[DATSAN] ([MaDS], [MaSB], [MaSV], [ThoiGianDS], [NgayNhan], [GioNhan], [GioTra], [TongTien], [DatCoc], [HinhThucDC], [TGHuy], [DichVuKem]) VALUES (N'DS0005', N'SB001', N'181121505109', CAST(N'2020-11-15T05:31:49.000' AS DateTime), CAST(N'2020-11-16' AS Date), CAST(N'15:00:00' AS Time), CAST(N'17:00:00' AS Time), 480000, 100000, N'Cash', NULL, NULL)
INSERT [dbo].[DATSAN] ([MaDS], [MaSB], [MaSV], [ThoiGianDS], [NgayNhan], [GioNhan], [GioTra], [TongTien], [DatCoc], [HinhThucDC], [TGHuy], [DichVuKem]) VALUES (N'DS0006', N'SB002', N'181124022223', CAST(N'2020-10-30T01:53:16.000' AS DateTime), CAST(N'2020-10-30' AS Date), CAST(N'16:00:00' AS Time), CAST(N'18:00:00' AS Time), 480000, 100000, N'Cash', NULL, NULL)
INSERT [dbo].[DATSAN] ([MaDS], [MaSB], [MaSV], [ThoiGianDS], [NgayNhan], [GioNhan], [GioTra], [TongTien], [DatCoc], [HinhThucDC], [TGHuy], [DichVuKem]) VALUES (N'DS0007', N'SB001', N'181121521111', CAST(N'2020-11-17T06:30:22.000' AS DateTime), CAST(N'2020-11-18' AS Date), CAST(N'15:00:00' AS Time), CAST(N'17:00:00' AS Time), 480000, 100000, N'Cash', NULL, NULL)
INSERT [dbo].[DATSAN] ([MaDS], [MaSB], [MaSV], [ThoiGianDS], [NgayNhan], [GioNhan], [GioTra], [TongTien], [DatCoc], [HinhThucDC], [TGHuy], [DichVuKem]) VALUES (N'DS0008', N'SB002', N'171121703313', CAST(N'2021-01-02T07:34:03.000' AS DateTime), CAST(N'2021-01-03' AS Date), CAST(N'16:00:00' AS Time), CAST(N'18:00:00' AS Time), 480000, 100000, N'Credit card', NULL, N'Áo bảo hộ, còi')
INSERT [dbo].[DATSAN] ([MaDS], [MaSB], [MaSV], [ThoiGianDS], [NgayNhan], [GioNhan], [GioTra], [TongTien], [DatCoc], [HinhThucDC], [TGHuy], [DichVuKem]) VALUES (N'DS0009', N'SB001', N'181124022118', CAST(N'2021-01-18T05:40:04.000' AS DateTime), CAST(N'2021-01-19' AS Date), CAST(N'15:00:00' AS Time), CAST(N'17:00:00' AS Time), 480000, 100000, N'Ewallet', NULL, NULL)
GO
INSERT [dbo].[SANBONG] ([MaSB], [TenSB], [DienTich], [GiaThue], [TinhTrang]) VALUES (N'SB001', N'Sân A1', N'42m*25m', 240000, N'T')
INSERT [dbo].[SANBONG] ([MaSB], [TenSB], [DienTich], [GiaThue], [TinhTrang]) VALUES (N'SB002', N'Sân A2', N'42m*25m', 240000, N'T')
GO
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'161121006504', N'Nguyễn Thị Mỹ Dung', CAST(N'1998-12-20' AS Date), N'42K06.5', N'Kế Toán', N'0933651010', N'ndung339@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'161121505126', N'Lê Thị Tú Oanh', CAST(N'1998-05-24' AS Date), N'42K05', N'Thống Kê - Tin Học ', N'0913929832', N'oanhlun2203@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'161121505141', N'Trà Thị Thùy Trang', CAST(N'1998-06-25' AS Date), N'42K05', N'Thống kê - Tin học', N'0903945399', N'trathithuytrang14071998@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'161121514149', N'Nguyễn Nhật Trường', CAST(N'1998-06-15' AS Date), N'42k14', N'Thống kê-Tin Học', N'0908899192', N'nguyennhattruong11223344@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'161121521128', N'Nguyễn Thị Bích Nga', CAST(N'1997-01-04' AS Date), N'42K21', N'Thống Kê - Tin Học', N'0168908463', N'nga01226362776@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'161121608440', N'Lê Văn Trường', CAST(N'1998-05-16' AS Date), N'42k8.4', N'Thương mại điện tử', N'0903403314', N'Thegunnerr159@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'161123012120', N'Phan Thị Quỳnh Mai', CAST(N'1997-08-23' AS Date), N'42k12.1', N'Marketing', N'0935700123', N'phanthiquynhmai238@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121006132', N'Trần Thị Mỹ Phương', CAST(N'1999-09-21' AS Date), N'43k06.1', N'Kế toán', N'0962883220', N'myphuongchan2109@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121018112', N'Nguyễn Thanh  Hiền', CAST(N'1999-11-05' AS Date), N'43K18.1', N'Kế toán', N'0903945856', N'thmeo.115999@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121302222', N'Nguyễn Đình Thu Loan', CAST(N'1999-09-27' AS Date), N'43k02.2', N'Quản trịị kinh doanh', N'0978354865', N'meobeoi.abcv.99@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121317126', N'Lê Thị Khánh', CAST(N'1999-08-19' AS Date), N'43K17', N'QTKD', N'0914163750', N'Lekhanh201612a1@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121514112', N'Phan Văn Phúc', CAST(N'1999-10-12' AS Date), N'43k14', N'Thống Kê-Tin Học', N'0966654330', N'Phucphan99.com@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121521108', N'Trần Thị Ngọc Diễm', CAST(N'1999-08-22' AS Date), N'43k21', N'TKTH', N'0908487619', N'tranthingocdiem121@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121521120', N'Phan Sỹ Tùng Long', CAST(N'1999-03-02' AS Date), N'43K21', N'Thống kê-Tin Học', N'0964318076', N' khonghieunoi69@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121522102', N'Nguyễn Tấn Cẩm', CAST(N'1999-05-04' AS Date), N'44k22', N'Thương mại điện tử', N'0903803131', N'tancampvd@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121522114', N'Dương Trần Diệu  Hậu', CAST(N'1999-11-24' AS Date), N'43K22', N'Thương Mại Điện Tử', N'0918866666', N'duongtrandieuhau@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121522152', N'Lê Đình Tuyên', CAST(N'1999-04-02' AS Date), N'43k22', N'Thương mại điện tử', N'0913630941', N'ledinhtuyen040299@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121601402', N'Hồ Phi Cường', CAST(N'1999-01-07' AS Date), N'43k01.4', N'KDQT', N'0906785539', N'hophicuong1799@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171121703313', N'Nguyễn Thị Hồng Hoàng', CAST(N'1999-11-12' AS Date), N'43K03.3', N'Du Lịch', N'0164663603', N'hoangnguyen.lazy.1999@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171122015204', N'Đoàn Hồng Hạnh', CAST(N'1999-04-10' AS Date), N'43K15.2', N'Tài chính', N'0903903609', N'honghanhdoan104@gmail.com ')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171122015214', N'Nguyễn Thanh Hoài Nhơn', CAST(N'1999-07-19' AS Date), N'43k15.2', N'Tài chính', N'0165673021', N'nguyenthanhhoainhon1907@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171122015502', N'Nguyễn Hữu Tuấn Duy', CAST(N'1999-10-21' AS Date), N'43k15.5', N'Tài Chính', N'0932114009', N'Tduy123455@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171123012226', N'Nguyễn Lệ Thu', CAST(N'1999-10-10' AS Date), N'43k12.2', N'Marketing', N'0983686879', N'hahaha1010vl@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171123028135', N'Lê Thu  Phương ', CAST(N'1999-10-04' AS Date), N'43k28', N'Marketing ', N'0908103774', N'Ltphuong2602@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'171123028142', N'Đinh Phương Thảo', CAST(N'1999-06-02' AS Date), N'43k28', N'Marketing', N'0908181333', N'dpthao020706@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121006209', N'Nguyễn Lê Bảo Hân', CAST(N'2000-11-02' AS Date), N'44k06.2', N'Kế Toán', N'0933473714', N'baohannguyenle0211@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121505109', N'Nguyễn Thị Mỹ Hằng', CAST(N'2000-06-12' AS Date), N'44k05', N'thống kê - tin học', N'0942118228', N'myhang.1262k@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121514112', N'Hồ Sĩ Tuấn Minh', CAST(N'2018-08-24' AS Date), N'44k14', N'Thống kê tin học', N'0120877631', N'Hosituanminh@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121514124', N'Trương Huyền Trang', CAST(N'2000-06-30' AS Date), N'44k14', N'Thống kê-Tin học', N'0938098178', N'truonghuyentrang30062000@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121514127', N'Trần Nguyễn Đình Vũ', CAST(N'2000-05-23' AS Date), N'44k14', N'Thống kê-Tin học', N'0903715020', N'Khang2562016@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121521111', N'Đoàn Phạm Ngọc Hiếu', CAST(N'2018-01-05' AS Date), N'44k21.1', N'Thống kê-Tin học', N'0909252155', N'doanpngochieu@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121521143', N'Hồ Thanh Tâm', CAST(N'2000-03-01' AS Date), N'44k21.1', N'Thống kê-Tin học', N'0935270776', N'hothanhtam6200@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121521207', N'Trần Thị Mỹ Duyên', CAST(N'2000-02-11' AS Date), N'44k21.2', N'thống kê - tin học', N'0903872092', N'myduyen02112@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121521223', N'Bùi Thị Hoàng Nhi', CAST(N'2000-03-02' AS Date), N'44k21.2', N'Thống kê- Tin học', N'0164843800', N'hoanggnhii98@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121521229', N'Đoàn Thị Vũ Sa', CAST(N'1998-07-14' AS Date), N'44k21.2', N'Thống kê - Tin học', N'0913926744', N'doanvusa@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121521230', N'Nguyễn Trường Sinh', CAST(N'2000-03-11' AS Date), N'44k21.2', N'Thống kê- Tin học', N'0982805825', N'Sinhtruong311@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121521243', N'Lê Bình Yên', CAST(N'2000-09-02' AS Date), N'44k21.2', N'Thồng Kê - Tin Học', N'0903807466', N'lebinhyenqn@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121521244', N'Tăng Huy Bảo', CAST(N'2000-10-28' AS Date), N'44k01.5', N'Kinh doanh quốc tế', N'0908616435', N'huybaotang@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121601508', N'Đặng Hồ Châu Anh', CAST(N'1999-02-24' AS Date), N'44K22.3', N'Thương mại điện tử', N'0909041878', N'chauanh24299@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181121723507', N'Trương Hoàng Khả Hân', CAST(N'2000-06-06' AS Date), N'44k23.5', N'Du Lịch', N'0903662603', N'khahantruong6060@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181123028132', N'Nguyễn Võ Diễm Quỳnh', CAST(N'2000-11-04' AS Date), N'44k28', N'Marketing', N'0120202328', N'quynhnguyen.20000411@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124000000', N'Nguyễn Thị Thu Hương', CAST(N'2000-08-27' AS Date), N'44k22.1', N'thương mại điện tử', N'0121968865', N'nthuhuong278@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124008252', N'Nguyễn Thị Thu Trang', CAST(N'2000-06-25' AS Date), N'44k08.2', N'Thương mại điện tử', N'0909792297', N'nguyenthithutrangquochoc@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124008321', N'Lê Hoàng Khang', CAST(N'2000-10-11' AS Date), N'44k08.3', N'Thương Mại Điện Tử', N'0165421777', N'lehkhang1110@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022118', N'Phan Anh Hưng', CAST(N'2000-08-18' AS Date), N'44k22.1', N'Thương mại điện tử', N'0126916214', N'justicetea171@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022132', N'Nguyễn Mai Linh', CAST(N'2018-12-28' AS Date), N'44K22.01', N'Thương Mại Điện Tử', N'0975208772', N'lucky2872000@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022137', N'Nguyễn Ngọc Xuân Nghi', CAST(N'2000-01-20' AS Date), N'44K22.1', N'Thương mại điện tử', N'0969590517', N'nghinguyen102@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022139', N'Trần Văn  Nhật', CAST(N'2000-01-21' AS Date), N'44k22.1', N'Thương Mại điện tử', N'0908595477', N'nhattrancr7@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022140', N'Hoàng Thị Khánh Như', CAST(N'2000-03-31' AS Date), N'44K22.1', N'Thương Mại Điện Tử', N'0905556510', N'hoangnhu3132000@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022153', N'Nguyễn Thị Thu Sương', CAST(N'2000-07-31' AS Date), N'44K22.01', N'thương mại điện tử', N'0163884320', N'tsuong.3107@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022155', N'Trần Thị Minh Tâm', CAST(N'2000-11-17' AS Date), N'44K22.1', N'Thương Mại Điện Tử', N'0919271964', N'mtam201711@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022167', N'Nguyễn Thị Thảo Vy', CAST(N'2000-10-05' AS Date), N'44K22.1', N'Thương mại điện tử', N'0913808239', N'pennynguyen0510@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022169', N'Nguyễn Ngọc Vỹ', CAST(N'2000-06-29' AS Date), N'44k22.1', N'Thương mại điện tử', N'0937734527', N'ngocvyn296@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022223', N'Đoàn Phạm Gia Hiếu', CAST(N'2000-01-30' AS Date), N'44K22.2', N'Thương mại điện tử', N'0938733500', N'giahieuvn123@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022240', N'Nguyễn Thị My', CAST(N'2000-11-21' AS Date), N'44k22.2', N'Thương mại điện tử', N'0907287227', N'nguyenmy22112000@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022260', N'Đỗ Thị Ngọc Trúc', CAST(N'2000-09-19' AS Date), N'44K22.2', N'Thương Mại Điện Tử', N'0903737775', N'kobatoqaz@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022266', N'Phạm Thị Thùy Văn', CAST(N'2000-11-14' AS Date), N'44k22.2', N'Thương Mại Điện Tử', N'0939039905', N'phamvantj@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022336', N'Lê Thảo Nguyên', CAST(N'2000-07-04' AS Date), N'44K22.3', N'Thương Mại Điện Tử', N'0126532371', N'nguyenlt473@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022345', N'Nguyễn Thị Thùy Nhung', CAST(N'2000-10-26' AS Date), N'44k22.3', N'Thương Mại Điện Tử', N'0905886802', N'thuynhung.tmdt@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022351', N'Huỳnh Ngọc Thịnh', CAST(N'2000-08-02' AS Date), N'44K22.3', N'Thương mại điện tử', N'0918666340', N'thinhhuynhngoc82@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022360', N'Vương Hoàng Thu Trúc', CAST(N'2000-09-17' AS Date), N'44k.22.3', N'Thương Mại Điện Tử', N'0938813439', N'trucle170920@gmail.com')
INSERT [dbo].[SINHVIEN] ([MaSV], [TenSV], [NgaySinh], [Lop], [Khoa], [SDT], [GMAIL]) VALUES (N'181124022364', N'Dương Thị Ngọc Vi', CAST(N'2000-05-03' AS Date), N'44k22.3', N'Thương mại điện tử', N'0983115945', N'Duongthingocvidtt@gmail.com')
GO
ALTER TABLE [dbo].[DATSAN]  WITH CHECK ADD  CONSTRAINT [FK_MaSB] FOREIGN KEY([MaSB])
REFERENCES [dbo].[SANBONG] ([MaSB])
GO
ALTER TABLE [dbo].[DATSAN] CHECK CONSTRAINT [FK_MaSB]
GO
ALTER TABLE [dbo].[DATSAN]  WITH CHECK ADD  CONSTRAINT [FK_MaSV] FOREIGN KEY([MaSV])
REFERENCES [dbo].[SINHVIEN] ([MaSV])
GO
ALTER TABLE [dbo].[DATSAN] CHECK CONSTRAINT [FK_MaSV]
GO
