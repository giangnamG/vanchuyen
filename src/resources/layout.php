<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Vận Chuyển</title>
    <!-- Liên kết tới Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/resources/assets/css/app.css" rel="stylesheet">
</head>
<body>

    <!-- Thanh điều hướng -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Quản Lý Vận Chuyển</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Hello Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/order">Đơn Hàng</a>
                    </li>
                    <li class="nav-item">
                        <select class="form-select bg-dark text-white border-0" onchange="location = this.value;">
                            <option value="#" disabled selected>Quản lý người dùng</option>
                            <option value="/user/partner/list">Quản lý Đơn Vị/Tổ Chức</option>
                            <option value="/user/staff/list">Quản lý nhân viên</option>
                            <option value="/customer/groups">Nhóm khách hàng</option>
                        </select>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Báo Cáo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container chính -->
    <div class="container mt-5">
        <?php
            // Vị trí nội dung của template
            if (isset($content)) {
                echo $content;
            }
        ?>
    </div>

    <!-- Liên kết tới JavaScript của Bootstrap -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
