<html lang="en">
<?php
    require "../config/config.php";
    header("refresh:30");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí khách hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css
    ">
    <link rel="stylesheet" href="../../asset/font/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="../../asset/css/base.css">
    <link rel="stylesheet" href="../../asset/css/base-list.css">
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
                 <li class="category-item "><a href="./qllinhkien-nv.php" class="category-item-link">QUẢN LÍ LINK KIỆN</a></li>
                 <li class="category-item"><a href="./quanlidonnhap-nv.php" class="category-item-link">QUẢN LÍ ĐƠN NHẬP HÀNG</a></li>
                 <li class="category-item"><a href="./qldonban-nv.php" class="category-item-link">QUẢN LÍ ĐƠN BÁN HÀNG</a></li>
                 <li class="category-item category-item-active"><a href="./qlkhachhang-nv.php" class="category-item-link">QUẢN LÍ KHÁCH HÀNG</a></li>
                 <li class="category-item"><a href="./quanlincc-nv.php" class="category-item-link">QUẢN LÍ NHÀ CUNG CẤP</a></li>
                 
                </ul>
            </nav>

            <!-- content-information -->
            <div class="wrap-information">
            <table>
                    <tr>
                        <th>STT</th>
                        <th>Mã KH</th>
                        <th>Tên KH</th>
                        <th>Giới tính</th>
                        <th>Ngày Đki</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Chức năng</th>

                    </tr>
                    <?php
                        $sql = "select * from khachhang ";
                        $qr = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($qr)){


                    ?>
                    <tr>
                        <td> <?php echo $row["id"] ?></td>
                        <td><?php echo $row["makh"] ?></td>
                        <td><?php echo $row["tenkh"] ?></td>
                        <td><?php echo $row["gioitinh"] ?></td>
                        <td><?php echo $row["ngaydki"] ?></td>
                        <td><?php echo $row["sdt"] ?></td>
                        <td><?php echo $row["diachi"] ?></td>

                        <td><a class="insert-button" href="../mainfuntion/insert-khachhang.php?id=<?php echo $row['id'];?> ">Sửa </a><a class="delete-button" href="../mainfuntion/delete-khachhang-nv.php?id=<?php echo $row['id'];?> ">Xoá</a></td>

                    </tr>
                    <?php } ?>
                </table>

                <div class="add-button">
                    <a href="../mainfuntion/add-khachhang.php" class="add-button-link">Thêm mới</a>
                </div>
                <div class="refresh-button" style="display: inline; margin: 20px;  border: 1px solid black;  font-size: 20px;  background-color: #1D5DBC; padding: 15px; border-radius: 5px;">
                    <a href="" class="refresh-button-link" style=" text-decoration: none; color: white; font-weight: 500; ">Làm mới</a>
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
