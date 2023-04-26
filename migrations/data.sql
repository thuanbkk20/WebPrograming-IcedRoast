CREATE DATABASE IF NOT EXISTS icedroast;
Use icedroast;

DROP TABLE IF EXISTS user;
CREATE TABLE user(
	id INT PRIMARY KEY AUTO_INCREMENT,
	username varchar(50) not null,
	password varchar(100) not null,
	last_name varchar(50) not null,
	first_name varchar(19) not null,
	phone_number varchar(10) not null,
	role varchar(10) default '',
	image varchar(50) default ''
);

DROP TABLE IF EXISTS product;
CREATE TABLE product(
	id INT AUTO_INCREMENT,
	name varchar(100) not null,
	image varchar(200) not null,
	price INT not null,
	description varchar(500) not null,
	status varchar(20) not null,
	category varchar(50) not null,
	size varchar(1) not null default 'S',
	primary key (id)
);

DROP TABLE IF EXISTS orders;
CREATE TABLE orders(
	id INT AUTO_INCREMENT,
	user_id INT NOT NULL,
	product_id INT NOT NULL,
	order_date TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP,
	quantity INT NOT NULL default 1,
	price INT NOT NULL,
	image varchar(200) NOT NULL,
	name varchar(100) NOT NULL, 
	size varchar(1) NOT NULL default 'S',
	payment_status varchar(30) NOT NULL default 'Chưa thanh toán',
	status varchar(30) NOT NULL default 'Chưa xác nhận',
	address varchar(200) NOT NULL,
	description varchar(300),
	primary key (id, user_id, product_id,price)
);

DROP TABLE IF EXISTS cart;
CREATE TABLE cart(
	id INT AUTO_INCREMENT,
	user_id INT not null,
	product_id INT not null,
	image varchar(200) not null,
	name varchar(100) not null,
	price INT not null,
	size varchar(2) not null,
	quantity INT not null default 1,
	primary key (id)
);

DROP TABLE IF EXISTS news;
CREATE TABLE news(
	id INT AUTO_INCREMENT,
	title varchar(200) not null,
	image varchar(200) not null,
	description varchar(1000) not null,
	link varchar(200) not null,
	tag varchar(50) not null,
	primary key (id)
);

DROP TABLE IF EXISTS contact;
CREATE TABLE contact(
	id INT AUTO_INCREMENT,
	name varchar(50) not null,
	phone_number varchar(10) not null,
	email varchar(50) not null,
	detail varchar(200) not null,
	time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	primary key (id)
);

INSERT INTO user
VALUES (1,"admin@gmail.com","$2y$10$kR3IBZ4Aunux/zENSwsLremmklA5x.iJT4nXlRPlYCeGjeleRfJ4i","Nguyen","Thuan","0123456789","admin","");

INSERT INTO icedroast.news (title, image, description, link, tag)
VALUES

("CÀ PHÊ SỮA ESPRESSO THE COFFEE HOUSE - BẬT LON BẬT VỊ NGON", 
"https://file.hstatic.net/1000075078/article/1__3__ec2969cff66c462d8d29959f1456bc08_master.jpg",
"Cà phê sữa Espresso là một lon cà phê sữa giải khát với hương vị...",
"CÀ PHÊ SỮA ESPRESSO THE COFFEE HOUSE - BẬT LON BẬT VỊ NGON – The Coffee House",
"coffeeholic"),

("SIGNATURE - BIỂU TƯỢNG VĂN HOÁ CÀ PHÊ CỦA THE COFFEE HOUSE ĐÃ QUAY TRỞ LẠI",
"https://file.hstatic.net/1000075078/article/3__1__2b67342f4db64bb082944cf078afd910_master.jpg",
"Mới đây, các \"tín đồ\" cà phê đang bàn tán xôn xao về SIGNATURE -...",
"https://thecoffeehouse.com/blogs/coffeeholic/signature-the-coffee-house-da-quay-tro-lai",
"coffeeholic"),

("UỐNG GÌ KHI TỚI SIGNATURE BY THE COFFEE HOUSE?",
"https://file.hstatic.net/1000075078/article/_dsc2358_5075c84b1b114f72b968dad9e9e9ceaa_master.jpg",
"Vừa qua, The Coffee House chính thức khai trương cửa hàng SIGNATURE by The Coffee...",
"https://thecoffeehouse.com/blogs/coffeeholic/uong-gi-khi-toi-signature-by-the-coffee-house",
"coffeeholic"),

("CÁCH NHẬN BIẾT HƯƠNG VỊ CÀ PHÊ ROBUSTA NGUYÊN CHẤT DỄ DÀNG NHẤT", 
"https://file.hstatic.net/1000075078/article/thecoffehouse_ca_phe_01_b4adbd88db6e4ca3b7c2c5934d1a1ed9_master.jpg",
"Cùng Arabica, Robusta cũng là loại cà phê nổi tiếng được sử dụng phổ biến...",
"https://thecoffeehouse.com/blogs/coffeeholic/cach-nhan-biet-huong-vi-ca-phe-robusta-nguyen-chat-de-dang-nhat",
"coffeeholic"),

("BẬT MÍ NHIỆT ĐỘ LÝ TƯỞNG ĐỂ PHA CÀ PHÊ NGON, ĐẬM ĐÀ HƯƠNG VỊ", 
"https://file.hstatic.net/1000075078/article/thecoffeehouse_caphe_7_db8def55acbf426ea725921529f6f01e_master.jpg",
"Nhiệt độ nước là một yếu tố quan trọng để có thể tạo nên những....",
"https://thecoffeehouse.com/blogs/coffeeholic/bat-mi-nhiet-do-ly-tuong-de-pha-ca-phe-ngon-dam-da-huong-vi",
"coffeeholic"),

("BỘ SƯU TẬP CẦU TOÀN KÈO THƠM: \"VÍA\" MAY MẮN KHÔNG THỂ BỎ LỠ TẾT NÀY", "https://file.hstatic.net/1000075078/article/cautoankeothom_thecoffeehouse_03_29cd435c9a574e1a867ac36f2c863bb6_master.jpg",
"Tết này vẫn giống Tết xưa, không hề mai một nét văn hoá truyền thống...",
"https://thecoffeehouse.com/blogs/teaholic/bo-suu-tap-cau-toan-keo-thom-via-may-man-khong-the-bo-lo-tet-nay",
"teaholic"),

("\"KHUẤY ĐỂ THẤY TRĂNG\" - KHUẤY LÊN NIỀM HẠNH PHÚC: TRẢI NGHIỆM KHÔNG THỂ BỎ LỠ MÙA TRUNG THU NÀY", "https://file.hstatic.net/1000075078/article/dscf0216_2890bcca44ae49aaaf843d5fa3db2fc6_master.jpg",
"Năm 2022 là năm đề cao sức khỏe tinh thần nên giới trẻ muốn tận...",
"https://thecoffeehouse.com/blogs/teaholic/khuay-de-thay-trang-trung-thu-nay",
"teaholic"),

("\"KHUẤY ĐỂ THẤY TRĂNG\" - HOT TREND MỞ MÀN MÙA TRUNG THU HẤP DẪN ĐÔNG ĐẢO GIỚI TRẺ", 
"https://file.hstatic.net/1000075078/article/dscf0216_2890bcca44ae49aaaf843d5fa3db2fc6_master.jpg",
"”Khuấy để thấy trăng” - trải nghiệm “ có 1 không 2” được The Coffee...",
"https://thecoffeehouse.com/blogs/teaholic/khuay-de-thay-trang-hot-trend-mo-man-mua-trung-thu-hap-dan-dong-da",
"teaholic"),

("UỐNG TRÀ HIBISCUS CÓ BỊ MẤT NGỦ HAY KHÔNG?", "https://file.hstatic.net/1000075078/article/thecoffeehouse_hiteahealthy_03_89263a1a922e4813a894c245b1145b7f_master.png",
"Trà hoa Hibiscus luôn nằm trong top những loại trà healthy được nhiều người ưa...",
"https://thecoffeehouse.com/blogs/teaholic/uong-tra-hibiscus-co-bi-mat-ngu-hay-khong",
"teaholic"),

("10 LỢI ÍCH KHÔNG NGỜ CỦA TRÀ HOA HIBISCUS", "https://file.hstatic.net/1000075078/article/pr-cover_41de066c6f654ee9b318dbffe7e5e5f0_master.jpg",
"Với rất nhiều lợi ích vượt trội, trà hoa Hibiscus được nhiều chị em ưu...",
"https://thecoffeehouse.com/blogs/teaholic/10-loi-ich-khong-ngo-cua-tra-hoa-hibiscus",
"teaholic"),

("SIGNATURE BY THE COFFEE HOUSE - \"DẤU ẤN\" MỚI CỦA NHÀ CÀ PHÊ", "https://file.hstatic.net/1000075078/article/signaturebythecoffeehouse_03_16b2ab7101e14d62835a4b231e73b65d_master.jpg",
"Ngày 11.01.2023, Chuỗi The Coffee House thông báo cửa hàng SIGNATURE by The Coffee House...",
"https://thecoffeehouse.com/blogs/blog/signature-by-the-coffee-house-dau-an-moi-cua-nha-ca-phe",
"blog"),
("CHIẾC LY ĐỔI MÀU \"NGÀN NGƯỜI THEO ĐUỔI\" ĐÃ QUAY TRỞ LẠI, LẸ CH N BẮT TREND NGAY KẺO TIẾC", "https://file.hstatic.net/1000075078/article/dscf6292_d784e8350a0942c1965127ecf57587ee_master.jpg",
"Bộ sản phẩm Trà sữa Merry CloudTea trong chiếc ly đổi màu từ The Coffee...",
"https://thecoffeehouse.com/blogs/blog/chiec-ly-doi-mau-ngan-nguoi-theo-duoi-da-quay-tro-lai",
"blog"),

("CŨNG LÀ ĂN BÁNH, THƯỞNG TRÀ, NGẮM TRĂNG - GEN Z LÀM GÌ CHO BỚT NHẠT?", "https://file.hstatic.net/1000075078/article/z3663478710700_0f36930c9ad300ade688f7ed1ddbd4f8_ceb536831696441fa7e8d9a2ad990c44_master.jpg",
"Trung thu là dịp mà bất kỳ ai cũng có thể \"bé lại\" để niềm...",
"https://thecoffeehouse.com/blogs/blog/gen-z-trung-thu-lam-gi-cho-bot-nhat",
"blog"),

("LỄ TÌNH NH N, CÙNG CRUSH ĐI Đ U?", "https://file.hstatic.net/1000075078/article/123232891_2820303564910318_4578047210373311456_n_699bea2973ec4087886ab888d5434de4_master.jpg",
"Tadaaaa, hết Tết thì Valentine đầy yêu thương lại đang đến rồi nè. Lễ tình....",
"https://thecoffeehouse.com/blogs/blog/le-tinh-nhan-cung-crush-di-dau",
"blog"),

("CHAI FRESH LUÔN BÊN BẠN TRONG MỌI KHOẢNH KHẮC", "https://file.hstatic.net/1000075078/article/tch206857_stacking_d4325b7f7a5945d7b2abee4eb7ad51d5_master.jpg",
"Với sự kết nối của The Coffee House, những thức trà và cà phê dạng...",
"https://thecoffeehouse.com/blogs/blog/chai-fresh-luon-ben-ban-trong-moi-khoanh-khac",
"blog");


INSERT INTO icedroast.product (name, image, price, description, status, category, size)
VALUES

-- Category: Cà Phê Việt Nam

("Đường Đen Sữa Đá", "https://product.hstatic.net/1000075078/product/1680709856_tagnew-dd-suada_19e9ff3863c3428fb01bd3f509ce4b4f_large.jpg",
"45000",
"Cà phê đường đen pha sữa kèm đá thơm ngon mời bạn uống nha…",
"stocking", 
"Vietnam_Coffee",
"S"),

("Bạc Xỉu", "https://product.hstatic.net/1000075078/product/1639377904_bac-siu_e36a71b3a35548ba98b3589a88169bbd_large.jpg",
"29000",
"Bạc xỉu thơm ngon mời bạn uống nha…",
"stocking", 
"Vietnam_Coffee",
"S"),

("The Coffee House Sữa Đá", "https://product.hstatic.net/1000075078/product/1675355354_bg-tch-sua-da-no_3d896c2d3850460db5aa384a6f8f65b0_large.jpg",
"39000",
"Thecoffeehouse sữa đá thơm ngon mời bạn uống nha…",
"stocking", 
"Vietnam_Coffee",
"S"),

("Cà Phê Sữa Đá", "https://product.hstatic.net/1000075078/product/1669736835_ca-phe-sua-da_ecadaeeedef34cce898764ee63b12f7d_large.png",
"29000",
"Cà phê sữa đá thơm ngon mời bạn uống nha…",
"stocking", 
"Vietnam_Coffee",
"S"),

("Cà Phê Sữa Nóng", "https://product.hstatic.net/1000075078/product/1639377770_cfsua-nong_5dddc0a17bec46ec8984bfe06a84fdb9_large.jpg",
"39000",
"Cà phê sữa nóng thơm ngon mời bạn uống nha…",
"stocking", 
"Vietnam_Coffee",
"S"),

("Bạc Xỉu Nóng", "https://product.hstatic.net/1000075078/product/1639377926_bacsiunong_d0392b90bdcc436485ff58419b1831cc_large.jpg",
"39000",
"Bạc xỉu nóng thơm ngon mời bạn uống nha…",
"stocking", 
"Vietnam_Coffee",
"S"),

("Cà Phê Đen Đá", "https://product.hstatic.net/1000075078/product/1639377797_ca-phe-den-da_4508e326018a4f24927f6bac584c163e_large.jpg",
"29000",
"Đen đá không đường thơm ngon mời bạn uống nha…",
"stocking", 
"Vietnam_Coffee",
"S"),

("Cà Phê Đen Nóng", "https://product.hstatic.net/1000075078/product/1639377816_ca-phe-den-nong_0d036cbe07014a0b99f412f389c5d5a5_large.jpg",
"39000",
"Đen đá nóng hổi thơm ngon mời bạn uống nha…",
"stocking", 
"Vietnam_Coffee",
"S"),

("Cà Phê Sữa Đá Chai Fresh 250ML", "https://product.hstatic.net/1000075078/product/bottlecfsd_496652_bc4ae40ad16d4984abec4a3974a6b883_large.jpg",
"79000",
"Chai cà phê sữa thơm ngon mời bạn uống nha…",
"stocking", 
"Vietnam_Coffee",
"S"),

-- Category: Cà Phê Máy
("Đường Đen Marble Latte", "https://product.hstatic.net/1000075078/product/1680709921_tagnew-dd-latte-2_b127b50deca54f57b484720b0b1a086a_large.jpg",
"55000",
"Ly Đường Đen Marble Latte thơm phức nè",
"stocking", 
"Machine_Coffee",
"S"),

("Caramel Macchiato Đá", "https://product.hstatic.net/1000075078/product/caramel-macchiato_143623_1c221e7703e04460869a7bf17ede2ba1_large.jpg",
"55000",
"Ly Caramel Macchiato Đá thơm phức nè",
"stocking", 
"Machine_Coffee",
"S"),

("Caramel Macchiato Nóng", "https://product.hstatic.net/1000075078/product/caramelmacchiatonong_168039_b86cd34b3a9e49f08affb0bc1f72b923_large.jpg",
"55000",
"Ly Caramel Macchiato nóng hổi thơm phức nè",
"stocking", 
"Machine_Coffee",
"S"),

("Latte Đá", "https://product.hstatic.net/1000075078/product/latte-da_438410_9efee2ac7712462c9b9866304a1f8818_large.jpg",
"55000",
"Ly Latte Đá thơm phức nè",
"stocking", 
"Machine_Coffee",
"S"),

("Latte Nóng", "https://product.hstatic.net/1000075078/product/latte_851143_0f4b72f4e9d44984b3f96941ecd82874_large.jpg",
"55000",
"Ly Latte nóng hổi thơm phức nè",
"stocking", 
"Machine_Coffee",
"S"),

("Americano Đá", "https://product.hstatic.net/1000075078/product/classic-cold-brew_791256_8c0e10a96eb143cbb5942cd65cf735d1_large.jpg",
"45000",
"Ly Americano Đá thơm phức nè",
"stocking", 
"Machine_Coffee",
"S"),

("Americano Nóng", "https://product.hstatic.net/1000075078/product/1636647328_arme-nong_46df616d5b97400da548e295da9352a4_large.jpg",
"45000",
"Ly Americano nóng hổi thơm phức nè",
"stocking", 
"Machine_Coffee",
"S"),

("Cappuccino Đá", "https://product.hstatic.net/1000075078/product/capu-da_487470_75a84a9fc32b47b1a190f3246f451996_large.jpg",
"55000",
"Ly Cappuccino Đá thơm phức nè",
"stocking", 
"Machine_Coffee",
"S"),

("Cappuccino Nóng", "https://product.hstatic.net/1000075078/product/cappuccino_621532_d22dd8b1797e4777ad3243a8fd491d67_large.jpg",
"55000",
"Ly Cappuccino nóng hổi thơm phức nè",
"stocking", 
"Machine_Coffee",
"S"),

-- Category: Cold Brew

("Cold Brew Phúc Bồn Tử", "https://product.hstatic.net/1000075078/product/1675329120_coldbrew-pbt_1313cf51012c45aabc0c4d8df71ee53b_large.jpg",
"49000",
"Cold Brew Phúc Bồn Tử mát lạnh, càng uống càng mê",
"stocking", 
"Cold_Brew",
"S"),

("Cold Brew Sữa Tươi", "https://product.hstatic.net/1000075078/product/cold-brew-sua-tuoi_379576_c43d5ae776b54caba94e295325558e9a_large.jpg",
"49000",
"Cold Brew Sữa Tươi mát lạnh, thơm béo, càng uống càng mê",
"stocking", 
"Cold_Brew",
"S"),

("Cold Brew Truyền Thống", "https://product.hstatic.net/1000075078/product/classic-cold-brew_239501_049116fad6f94678885a6d28e9292ff2_large.jpg",
"45000",
"Cold Brew Truyền Thống mát lạnh, càng uống càng mê",
"stocking", 
"Cold_Brew",
"S"),

-- Category: CloudFee
("CloudFee Hạnh Nhân Nướng", "https://product.hstatic.net/1000075078/product/1675357918_cloudfee-hanh-nhan-nuong-min_0fb61b77a9be41e5b1fe7ecfb8b8ca19_large.png",
"49000",
"Kính mời quý khách",
"stocking", 
"CloudFee",
"S"),

("CloudFee Caramel", "https://product.hstatic.net/1000075078/product/1675329314_bg-cloudfee-caramel_f71c9e98a5454be685799d02be327772_large.jpg",
"49000",
"Kính mời quý khách",
"stocking", 
"CloudFee",
"S"),

("CloudFee Hà Nội", "https://product.hstatic.net/1000075078/product/1675329314_bg-cloudfee-caramel_f71c9e98a5454be685799d02be327772_large.jpg",
"49000",
"Kính mời quý khách",
"stocking", 
"CloudFee",
"S"),

-- Category: CloudTea
("CloudTea Oolong Nướng Kem Cheese", "https://product.hstatic.net/1000075078/product/1675355728_cheese_75d8eb182e5b470cbf4a10c688d3b24d_large.jpg",
"55000",
"Kính mời quý khách",
"stocking", 
"CloudTea",
"S"),

("CloudTea Oolong Nướng Caramel", "https://product.hstatic.net/1000075078/product/1675329556_bg-cloudtea-arabica_37a91f1075f74ff2ad05c9267a667f20_large.jpg",
"55000",
"Kính mời quý khách",
"stocking", 
"CloudTea",
"S"),

("CloudTea Oolong Nướng Kem Dừa Đá Xay", "https://product.hstatic.net/1000075078/product/1675329651_bg-cloudtea-daxay_386096a7db554a0195e9e1c94ef46200_large.jpg",
"55000",
"Kính mời quý khách",
"stocking", 
"CloudTea",
"S"),

("CloudTea Oolong Nướng Kem Dừa", "https://product.hstatic.net/1000075078/product/1675740758_cloudtea-oolong-nuong-kem-cheese-min_49428342a9a24a03b3cf06dc1dbe3c9e_large.png",
"55000",
"Kính mời quý khách",
"stocking", 
"CloudTea",
"S"),

-- Category: Trà trái cây
("Trà Long Nhãn Hạt Sen", "https://product.hstatic.net/1000075078/product/1649378747_tra-sen-nhan_fbf86a0451b646ea83ecacf296fd8b25_large.jpg",
"49000",
"Kính mời quý khách",
"stocking", 
"Fruit_Tea",
"S"),

("Trà Đào Cam Sả - Đá", "https://product.hstatic.net/1000075078/product/1669736819_tra-dao-cam-sa-da_6d54d64690d245f99bee9f8f45427bf8_large.png",
"49000",
"Kính mời quý khách",
"stocking", 
"Fruit_Tea",
"S"),

("Trà Đào Cam Sả - Nóng", "https://product.hstatic.net/1000075078/product/tdcs-nong_288997_e68c756273f74eb097dec435f2628277_large.jpg",
"59000",
"Kính mời quý khách",
"stocking", 
"Fruit_Tea",
"S"),

("Trà Hạt Sen - Đá", "https://product.hstatic.net/1000075078/product/tra-sen_905594_8a619c3d659e483383f040a581a9a67c_large.jpg",
"49000",
"Kính mời quý khách",
"stocking", 
"Fruit_Tea",
"S"),

("Trà Hạt Sen - Nóng", "https://product.hstatic.net/1000075078/product/tra-sen-nong_025153_90b955cc5cb44c9785fe60bd71ec9b75_large.jpg",
"59000",
"Kính mời quý khách",
"stocking", 
"Fruit_Tea",
"S"),

("Trà Đào Cam Sả Chai Fresh 500ML", "https://product.hstatic.net/1000075078/product/bottle_tradao_836487_751ceaa7a5ea48339d0fd4c49a4bb7aa_large.jpg",
"105000",
"Kính mời quý khách",
"stocking", 
"Fruit_Tea",
""),

-- Category: Trà sữa Macchiato
("Trà Đen Macchiato", "https://product.hstatic.net/1000075078/product/tra-den-matchiato_430281_49b967754b704f5e95cef833f318e860_large.jpg",
"55000",
"Kính mời quý khách",
"stocking", 
"Macchiato",
"S"),

("Hồng Trà Sữa Trân Châu", "https://product.hstatic.net/1000075078/product/hong-tra-sua-tran-chau_326977_d3aec975b9564c4fb89eb0320e6e95b3_large.jpg",
"55000",
"Kính mời quý khách",
"stocking", 
"Macchiato",
"S"),

("Hồng Trà Sữa Nóng", "https://product.hstatic.net/1000075078/product/hong-tra-sua-nong_941687_999e6376e0ca4dea9dd093f60505719c_large.jpg",
"55000",
"Kính mời quý khách",
"stocking", 
"Macchiato",
"S"),

("Trà sữa Oolong Nướng Trân Châu", "https://product.hstatic.net/1000075078/product/1669736877_tra-sua-oolong-nuong-tran-chau_8449743143df4f58912ec2e7ce7b2632_large.png",
"55000",
"Kính mời quý khách",
"stocking", 
"Macchiato",
"S"),

("Trà sữa Oolong Nướng - Nóng", "https://product.hstatic.net/1000075078/product/oolong-nuong-nong_948581_d23ea5a6a0ef47d1a3d1f88fecbcf394_large.jpg",
"55000",
"Kính mời quý khách",
"stocking", 
"Macchiato",
"S"),

("Trà Sữa Mắc Ca Trân Châu", "https://product.hstatic.net/1000075078/product/tra-sua-mac-ca_377522_ebb85c65be61437cac55bdfb91207bbe_large.jpg",
"55000",
"Kính mời quý khách",
"stocking", 
"Macchiato",
"S"),

("Trà Sữa Oolong Nướng Trân Châu Chai Fresh 500ML", "https://product.hstatic.net/1000075078/product/bottle_oolong_285082_215b6924b90b4ef295b8f2b23672b4dc_large.jpg",
"95000",
"Kính mời quý khách",
"stocking", 
"Macchiato",
""),

-- Category: Hi-Tea Trà
("Hi-Tea Đào Kombucha", "https://product.hstatic.net/1000075078/product/1681368018_kombucha-dao-new_927a645f2eae4d4985b8ea56fd752e40_large.jpg",
"59000",
"Kính mời quý khách",
"stocking", 
"Hi-Tea_Tea",
"S"),

("Hi-Tea Yuzu Kombucha", "https://product.hstatic.net/1000075078/product/1681368048_kombucha-yuzu-new_6be5acd5d7364d4fa2ca54a88d7aa753_large.jpg",
"59000",
"Kính mời quý khách",
"stocking", 
"Hi-Tea_Tea",
"S"),

("Hi-Tea Thơm Trân Châu", "https://product.hstatic.net/1000075078/product/1679067368_hitea-thom_611202937db045819c62f6ad2e7e4c64_large.jpg",
"49000",
"Kính mời quý khách",
"stocking", 
"Hi-Tea_Tea",
"S"),

("Hi-Tea Phúc Bồn Tử Mandarin", "https://product.hstatic.net/1000075078/product/1669707649_bg-hitea-quyt-no_0fe4869e3ed548e3be27f7584ca907c6_large.jpg",
"49000",
"Kính mời quý khách",
"stocking", 
"Hi-Tea_Tea",
"S"),

("Hi-Tea Dâu Tây Mận Muối Aloe Vera", "https://product.hstatic.net/1000075078/product/1679067492_hitea-man-muoi-dau-tay-ver2_a4908f3cae3b4fdc929568e71e83dd76_large.jpg",
"49000",
"Kính mời quý khách",
"stocking", 
"Hi-Tea_Tea",
"S"),

("Hi-Tea Yuzu Trân Châu", "https://product.hstatic.net/1000075078/product/1669736859_hi-tea-yuzu-tran-chau_a3b6fc9ac1b1434790f79b6ac45b3c0f_large.png",
"49000",
"Kính mời quý khách",
"stocking", 
"Hi-Tea_Tea",
"S"),

("Hi-Tea Vải", "https://product.hstatic.net/1000075078/product/1669736893_hi-tea-vai_7644bc90667a4ba881f7796f7d4dd644_large.png",
"49000",
"Kính mời quý khách",
"stocking", 
"Hi-Tea_Tea",
"S"),

("Hi-Tea Đào", "https://product.hstatic.net/1000075078/product/1669737919_hi-tea-dao_e44d8e9b06124e0591b15546b1637861_large.jpg",
"49000",
"Kính mời quý khách",
"stocking", 
"Hi-Tea_Tea",
"S"),

-- Category: Hi-Tea Đá Tuyết
("Hi-Tea Đá Tuyết Yuzu Vải", "https://product.hstatic.net/1000075078/product/1653291175_da-tuyet-vai_80eac84668b64e62b736ce4a39bb96cf_large.jpg",
"59000",
"Kính mời quý khách",
"stocking", 
"Hi-Tea_Ice",
"S"),

-- Category: Bánh mặn
("Bánh Mì Gậy Gà Kim Quất", "https://product.hstatic.net/1000075078/product/1669737009_banh-mi-gay-ga-kim-quat_dd48235e67a545f1b96ca37060b87c37_large.png",
"25000",
"Kính mời quý khách",
"stocking", 
"Pastries",
""),

("Bánh Mì Gậy Cá Ngừ Mayo", "https://product.hstatic.net/1000075078/product/1669825303_bami-gay-tunajpg_ba2b8ceaf30b4d7f828a401058bd5ab3_large.jpg",
"25000",
"Kính mời quý khách",
"stocking", 
"Pastries",
""),

("Bánh Mì Que Pate", "https://product.hstatic.net/1000075078/product/1669736956_banh-mi-que-pate_908a43b74fda4b659bb061c9f631cf68_large.png",
"15000",
"Kính mời quý khách",
"stocking", 
"Pastries",
""),

("Bánh Mì Que Pate Cay", "https://product.hstatic.net/1000075078/product/banhmique_683851_288c521e75f442a09c7c068bbdbb9ed6_large.jpg",
"15000",
"Kính mời quý khách",
"stocking", 
"Pastries",
""),

("Bánh Mì Việt Nam Thịt Nguội", "https://product.hstatic.net/1000075078/product/1638440015_banh-mi-vietnam_e71b00549dd5430aa5a2dc7e6c2640a5_large.jpg",
"35000",
"Kính mời quý khách",
"stocking", 
"Pastries",
""),

("Croissant Trứng Muối", "https://product.hstatic.net/1000075078/product/croissant-trung-muoi_880850_3bb64a6c645a481ea5539ed08a879093_large.jpg",
"35000",
"Kính mời quý khách",
"stocking", 
"Pastries",
""),

("Chà Bông Phô Mai", "https://product.hstatic.net/1000075078/product/1669736993_cha-bong-pho-mai_9a4a0a727e5849469a6bb34a2b26ced7_large.png",
"35000",
"Kính mời quý khách",
"stocking", 
"Pastries",
""),

-- Category: Bánh ngọt
("Mochi Kem Phúc Bồn Tử", "https://product.hstatic.net/1000075078/product/1643102019_mochi-phucbontu_fe73a31bbc674dfdba2d3bcdf680b304_large.jpg",
"19000",
"Kính mời quý khách",
"stocking", 
"Cakes",
""),

("Mochi Kem Việt Quất", "https://product.hstatic.net/1000075078/product/1643102034_mochi-vietquat_f90e13f0c4cf4a22a1c41c8229cbfb48_large.jpg",
"19000",
"Kính mời quý khách",
"stocking", 
"Cakes",
""),

("Mochi Kem Dừa Dứa", "https://product.hstatic.net/1000075078/product/1643101996_mochi-dua_7078c65ed095460fbba473e7fcb85881_large.jpg",
"19000",
"Kính mời quý khách",
"stocking", 
"Cakes",
""),

("Mochi Kem Chocolate", "https://product.hstatic.net/1000075078/product/1655348107_mochi-choco_e69d6c16523348d9b4b685db019c12c1_large.jpg",
"19000",
"Kính mời quý khách",
"stocking", 
"Cakes",
""),

("Mochi Kem Matcha", "https://product.hstatic.net/1000075078/product/1655348113_mochi-traxanh_3f5822d627684e5b8693a3cb7c544361_large.jpg",
"19000",
"Kính mời quý khách",
"stocking", 
"Cakes",
""),

("Mochi Kem Xoài", "https://product.hstatic.net/1000075078/product/1643101968_mochi-xoai_4fcffb0b345d4929be7919b9bee9f4d0_large.jpg",
"19000",
"Kính mời quý khách",
"stocking", 
"Cakes",
""),

("Mousse Red Velvet", "https://product.hstatic.net/1000075078/product/5dd2087ff2546c2614fb08d1_red-velvet_087977_4379f06a3c7245de815abc5554f9025f_large.jpg",
"39000",
"Kính mời quý khách",
"stocking", 
"Cakes",
""),

("Mousse Tiramisu", "https://product.hstatic.net/1000075078/product/1638170137_tiramisu_c7eb56cf2d0747209a545a427c9f981b_large.jpg",
"39000",
"Kính mời quý khách",
"stocking", 
"Cakes",
""),

("Mousse Gấu Chocolate", "https://product.hstatic.net/1000075078/product/1638170066_gau_c8935ec1809f4e7788bd30a9624c4b40_large.jpg",
"39000",
"Kính mời quý khách",
"stocking", 
"Cakes",
""),

-- Category: Snack
("Mít Sấy", "https://product.hstatic.net/1000075078/product/mit-say_666228_d4754ca3e4b146419c53c176452bef79_large.jpg",
"20000",
"Kính mời quý khách",
"stocking", 
"Snack",
""),

("Gà Xé Lá Chanh", "https://product.hstatic.net/1000075078/product/kho-ga-la-chanh_995862_df12b11ea4934cac85d7e36552acd727_large.jpg",
"25000",
"Kính mời quý khách",
"stocking", 
"Snack",
""),

-- Category: Cà phê tại nhà
("Thùng Cà Phê Sữa Espresso", "https://product.hstatic.net/1000075078/product/1669707271_24lon-espresso-no_cabcf4b0f66d4696ad22182af8f560ae_large.jpg",
"336000",
"Kính mời quý khách",
"stocking", 
"Coffee-at-home",
""),

("Combo 6 Lon Cà Phê Sữa Espresso", "https://product.hstatic.net/1000075078/product/1669707292_6lon-espresso-no_876d4505d2db4eb8a6ee9df10d9a756f_large.jpg",
"84000",
"Kính mời quý khách",
"stocking", 
"Coffee-at-home",
""),

("Cà Phê Rang Xay Original 1 Túi 1KG", "https://product.hstatic.net/1000075078/product/1642387719_ori-1-1kg_f07c85a9e38a4f529cd0dba097861100_large.jpeg",
"235000",
"Kính mời quý khách",
"stocking", 
"Coffee-at-home",
""),

-- Category: Trà tại nhà
("Trà Oolong Túi Lọc Tearoma 20x2G", "https://product.hstatic.net/1000075078/product/1639646968_tra-oolong-tui-loc-tearoma-20x2gr_eeafd2f4e9874cc59beefe01d26a7ce1_large.jpg",
"28000",
"Kính mời quý khách",
"stocking", 
"Tea-at-home",
""),

("Trà Lài Túi Lọc Tearoma 20x2G", "https://product.hstatic.net/1000075078/product/1639647075_tra-lai-tui-loc-tearoma-20x2gr_6404322338a849ccbd3ca2bf8f03b5ae_large.jpg",
"28000",
"Kính mời quý khách",
"stocking", 
"Tea-at-home",
""),

("Trà Sen Túi Lọc Tearoma 20x2G", "https://product.hstatic.net/1000075078/product/1639648068_tra-sen-tui-loc-tearoma-20x2gr_e4ad6a93a5fc460c9baad1e7a82b2690_large.jpg",
"28000",
"Kính mời quý khách",
"stocking", 
"Tea-at-home",
""),

-- Category: Chocolate
("Chocolate Đá", "https://product.hstatic.net/1000075078/product/chocolate-da_877186_369b7a83ba114ff7a69183466f155814_large.jpg",
"55000",
"Kính mời quý khách",
"stocking", 
"Chocolate",
"S"),

("Chocolate Nóng", "https://product.hstatic.net/1000075078/product/chocolatenong_949029_519e3b6e757143728633ea5b1b4f0fd2_large.jpg",
"55000",
"Kính mời quý khách",
"stocking", 
"Chocolate",
"S");