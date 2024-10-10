
<!-- Form thêm đơn hàng mới -->
<h2 class="text-center my-4">Thêm Đơn Hàng Mới</h2>
    <form>
        <div class="mb-3">
            <label for="customerName" class="form-label">Tên Khách Hàng</label>
            <input type="text" class="form-control" id="customerName" placeholder="Nhập tên khách hàng">
        </div>
        <div class="mb-3">
            <label for="customerAddress" class="form-label">Địa Chỉ</label>
            <input type="text" class="form-control" id="customerAddress" placeholder="Nhập địa chỉ khách hàng">
        </div>
        <div class="mb-3">
            <label for="orderStatus" class="form-label">Trạng Thái</label>
            <select class="form-select" id="orderStatus">
                <option value="chờ xử lý">Chờ xử lý</option>
                <option value="đang vận chuyển">Đang vận chuyển</option>
                <option value="đã giao hàng">Đã giao hàng</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Thêm Đơn Hàng</button>
    </form>