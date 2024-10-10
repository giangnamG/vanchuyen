<?php

?>
<style>
    /* Thẻ thống kê (Cards) cải tiến */
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    /* Hiệu ứng nút hành động nhanh */
    .btn-lg {
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
        border-radius: 25px;
        transition: background-color 0.3s, box-shadow 0.3s;
    }

    .btn-lg:hover {
        background-color: #218838;
        box-shadow: 0 8px 20px rgba(0, 123, 255, 0.6);
    }

    /* Cải thiện bảng đơn hàng */
    table.table {
        border-radius: 15px;
        overflow: hidden;
    }

    table.table thead {
        background-color: #343a40;
        color: white;
    }

    table.table tbody tr:hover {
        background-color: #f8f9fa;
    }

    /* Center text */
    .text-center {
        text-align: center;
    }
</style>
<!-- Thẻ thống kê (Cards) -->
<div class="row text-center mb-4">
    <div class="col-md-3">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Tổng Đơn Hàng</h5>
                <p class="card-text display-4">120</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-warning mb-3">
            <div class="card-body">
                <h5 class="card-title">Đang Vận Chuyển</h5>
                <p class="card-text display-4">15</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Đã Giao</h5>
                <p class="card-text display-4">95</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-danger mb-3">
            <div class="card-body">
                <h5 class="card-title">Đơn Hàng Bị Hủy</h5>
                <p class="card-text display-4">10</p>
            </div>
        </div>
    </div>
</div>

<!-- Bảng đơn hàng mới nhất -->
<h3 class="text-center mb-4">Đơn Hàng Mới Nhất</h3>

<?php 
    include 'order/index.php';
?>

<!-- Nút hành động nhanh -->
<div class="text-center mt-4">
    <a href="/order/create" class="btn btn-success btn-lg">Tạo Đơn Hàng Mới</a>
</div>