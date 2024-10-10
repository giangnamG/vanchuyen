<!-- Danh Sách Đơn Hàng -->
<?php 


?>
<!-- Nút hành động nhanh -->
<div class="text-center mt-4">
    <a href="/order/create" class="btn btn-success btn-lg">Tạo Đơn Hàng Mới</a>
</div>
<h2 class="text-center mb-4">Danh Sách Đơn Hàng</h2>

        <!-- Bảng danh sách đơn hàng -->
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Khách Hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Trạng Thái</th>
                    <th>Ngày Đặt Hàng</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>Hà Nội</td>
                    <td><span class="badge bg-warning text-dark">Đang vận chuyển</span></td>
                    <td>2024-10-09</td>
                    <td>
                        <button class="btn btn-primary btn-sm" onclick="window.location='/order/view/123'">Chi Tiết</button>
                        <button class="btn btn-danger btn-sm">Hủy</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Trần Thị B</td>
                    <td>Đà Nẵng</td>
                    <td><span class="badge bg-success">Đã giao hàng</span></td>
                    <td>2024-10-08</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Chi Tiết</button>
                        <button class="btn btn-danger btn-sm">Hủy</button>
                    </td>
                </tr>
            </tbody>
        </table>