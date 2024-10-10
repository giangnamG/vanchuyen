<?php

?>

<style>
    .action-btn {
        margin-right: 5px;
    }
</style>

<h2 class="text-center mb-4">Danh Sách Người Dùng</h2>

<!-- Nút Thêm người dùng mới -->
<div class="text-end mb-3">
    <button class="btn btn-success btn-lg">Thêm Người Dùng Mới</button>
</div>

<!-- Bảng người dùng -->
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>Tên Đơn Vị/Tổ Chức</th>
            <th>Role</th>
            <th>Hành Động</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Công Ty ABC</td>
            <td>Quản trị viên</td>
            <td>
                <button class="btn btn-primary btn-sm action-btn">Sửa</button>
                <button class="btn btn-danger btn-sm action-btn">Xóa</button>
            </td>
        </tr>
        <tr>
            <td>Tổ Chức XYZ</td>
            <td>Người dùng</td>
            <td>
                <button class="btn btn-primary btn-sm action-btn">Sửa</button>
                <button class="btn btn-danger btn-sm action-btn">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>