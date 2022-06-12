<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí nhân viên</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css
    ">
    <link rel="stylesheet" href="../../asset/font/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../asset/css/base.css">
    
    <link rel="stylesheet" href="../../asset/css/base-information.css">
    
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="header__welcome">
                <h1 class="header__welcome-welcome">Xin chào, Nhân viên</h1>
                <a href="../login.php" class="header__welcome-signout">Đăng xuất</a>
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
                    <span  class="name-store">HaNoiComputer Store</span>
                </div>

            </div>
        </div>

        <div class="container">
            <nav class="category">
                
                <span class="category-pos">DANH MỤC QUẢN LÍ</span>
                <ul class="category-list">
                 <li class="category-item"><a href="./trangchunhanvien.php" class="category-item-link">TRANG CHỦ</a></li>
                 <li class="category-item"><a href="./qllinhkien-nv.php" class="category-item-link">QUẢN LÍ LINK KIỆN</a></li>
                 <li class="category-item"><a href="./quanlidonnhap-nv.php" class="category-item-link">QUẢN LÍ ĐƠN NHẬP HÀNG</a></li>
                 <li class="category-item"><a href="./qldonban-nv.php" class="category-item-link">QUẢN LÍ ĐƠN BÁN HÀNG</a></li>
                 <li class="category-item"><a href="./qlkhachhang-nv.php" class="category-item-link">QUẢN LÍ KHÁCH HÀNG</a></li>
                 <li class="category-item category-item-active"><a href="./quanlincc-nv.php" class="category-item-link">QUẢN LÍ NHÀ CUNG CẤP</a></li>
                 <li class="category-item"><a href="./danhsach-nv.php" class="category-item-link">DANH SÁCH HIỂN THỊ</a></li>

                </ul>
            </nav>

            <!-- content-information -->
            <div class="wrap-information">
                <div class="accessories">
                    <span class="accessories-tittle">QUẢN LÍ NHÀ CUNG CẤP</span>
                </div>
                <span class="information-accessories">Thông tin nhà cung cấp</span>
                <div class="accessories-box">
                    <img src="../asset/img/icon-person.png" alt="" class="person-icon">
                    <div class="accessories-col1">
                        <ul class="col1-list">
                            <li class="col1-item">
                                <div class="accessories-code">
                                    <span class="code-label">Mã NCC:</span>
                                    <input type="text" class="col1-item-input">
                                </div>
                            </li>
                            <li class="col1-item">
                                <div class="accessories-code">
                                    <span class="code-label">Tên NCC:</span>
                                    <input type="text" class="col1-item-input">
                                </div>
                            </li>
                            <li class="col1-item">
                                <div class="accessories-code">
                                    <span class="code-label">Ngày cung cấp:</span>
                                    <input type="text" class="col1-item-input">
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="accessories-col1">
                        <ul class="col1-list">
                            <li class="col1-item">
                                <div class="accessories-code">
                                    <span class="code-label">Email:</span>
                                    <input type="text" class="col1-item-input">
                                </div>
                            </li>
                            <li class="col1-item">
                                <div class="accessories-code">
                                    <span class="code-label">Thời gian hợp đồng:</span>
                                    <input type="text" class="col1-item-input">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="accessories-function">
                    <button class="button-function add">Thêm</button>
                    <button class="button-function edit">Sửa</button>
                    <button class="button-function delete">Xoá</button>
                    <button class="button-function refresh">Làm mới</button>
                    <button class="button-function update">Cập nhật</button>
                    <button class="button-function exit">Thoát</button>
                </div>
            </div>
        </div>
</body>
<footer>
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
            hihi
        </div>
    </div>
</footer>

</html>