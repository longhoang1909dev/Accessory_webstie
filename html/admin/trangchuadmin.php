<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ-Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css
    ">
    <link rel="stylesheet" href="../../asset/font/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../asset/css/base.css">
    <link rel="stylesheet" href="../../asset/css/trangchu.css">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="header__welcome">
                <h1 class="header__welcome-welcome">Xin chào, Admin</h1>
                <a href="../../html/nv/login.php" class="header__welcome-signout">Đăng xuất</a>
            </div>
            <div class="header__navbar">
                <div class="header__navbar-logo">
                    <img src="../../asset/img/Logo_PHENIKAA-UNI-removebg-preview.png" alt="">
                </div>
                <div class="header__navbar-search">
                    <input type="text" class="header__navbar-search-input" placeholder="Nhập để tìm kiếm các thông tin">
                    <button class="header__navbar-search-button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>

                <div class="header__navbar-namestore">
                    <span class="name-store">HaNoiComputer Store</span>
                </div>

            </div>
        </div>

        <div class="container">
            <nav class="category">

                <span class="category-pos">DANH MỤC QUẢN LÍ</span>
                <ul class="category-list">
                    <li class="category-item category-item-active"><a href="./trangchuadmin.php" class="category-item-link">TRANG CHỦ</a>
                    </li>
                    <li class="category-item"><a href="./qllinhkien-ad.php" class="category-item-link">QUẢN LÍ LINH KIỆN</a></li>
                    <li class="category-item"><a href="./quanlidonnhap-ad.php" class="category-item-link">QUẢN LÍ ĐƠN NHẬP HÀNG</a></li>
                    <li class="category-item"><a href="./qldonban-ad.php" class="category-item-link">QUẢN LÍ ĐƠN BÁN HÀNG</a></li>
                    <li class="category-item"><a href="./qlkhachhang-ad.php" class="category-item-link">QUẢN LÍ KHÁCH HÀNG</a></li>
                    <li class="category-item"><a href="./quanlincc-ad.php" class="category-item-link">QUẢN LÍ NHÀ CUNG CẤP</a></li>
                    <li class="category-item"><a href="./quanlinhanvien.php" class="category-item-link">QUẢN LÍ NHÂN VIÊN</a></li>
                    <li class="category-item"><a href="./danhsach-ad.php" class="category-item-link">DANH SÁCH HIỂN THỊ</a></li>
                </ul>
            </nav>

            <div class="information">
                <div class="content-header">
                    <div class="header-tittle">
                        <span class="content-0 content-1">QUẢN LÍ</span>
                    </div>
                    <div class="header-tittle">
                        <span class="content-0 content-2">CỬA HÀNG</span>
                    </div>
                    <div class="header-tittle">
                        <span class="content-0 content-3">BÁN LINH KIỆN ĐIỆN TỬ</span>
                    </div>
                </div>
                <div class="content-header-2">
                    <span>Hãy để chúng tôi giới thiệu tới bạn cách mà chuyên gia có thể hỗ trợ bạn và doanh nghiệp </span>
                </div>

                <div class="content-header-3">
                    <div class="content-header-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/FPT_logo_2010.svg/1200px-FPT_logo_2010.svg.png" alt="" class="guest">
                      <img src="data:image/png;base64,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" alt="">
                        <img src="https://1ty.vn/datafiles/3/2018-06-09/hanoicomputer-logo-15284837823775.jpg" alt="" class="guest">
                        <img src="https://dlcdnimgs.asus.com/websites/global/Sno/79183.jpg" alt="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS82_uefrXEb3LaZ3sghs7MMOaAhHz1K8zZnA&usqp=CAU" alt="">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/1200px-HP_logo_2012.svg.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="activity">
                <i class="fa-solid fa-chart-column"></i>
                <span>Recently activity</span>
            </div>
            <div class="footer-content">
                <div class="footer-user">
                    <ul class="footer-user-acitvity">
                        <li class="user-using">Số người đang sử dụng dịch vụ: 190.</li>
                        <li class="user-rate">Đánh giá trung bình: 3.7/5.</li>
                        <li class="user-like">Tổng số đánh giá tích cực: 1000+.</li>
                        <li class="user-access">Tổng số người truy cập web: 3760</li>
                        <li class="hotline">Hotline: 0967846423</li>
                        <li class="gmail">Gmail: long19092k2@gmail.com</li>
                    </ul>
                </div>
                <div class="rate">
                    <span class="rate-star">Rate for me: </span>
                    <i class="fa-solid fa-star rating"></i>
                    <i class="fa-solid fa-star rating"></i>
                    <i class="fa-solid fa-star rating"></i>
                    <i class="fa-solid fa-star rating"></i>
                    <i class="fa-solid fa-star rating"></i>
                </div>
            </div>

            <div class="footer-end">
               
            </div>
        </div>
    </div>
</body>

</html>