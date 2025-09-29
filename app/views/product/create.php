<div class="container mt-4">
    <h2 class="text-center mb-4">Thêm sản phẩm mới</h2>
    <form action="index.php?controller=product&action=create" method="post" enctype="multipart/form-data" class="w-50 mx-auto">
        <div class="mb-3">
            <label for="masp" class="form-label">Mã sản phẩm</label>
            <input type="text" name="masp" id="masp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tensanpham" class="form-label">Tên sản phẩm</label>
            <input type="text" name="tensanpham" id="tensanpham" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="giatien" class="form-label">Giá tiền</label>
            <input type="number" name="giatien" id="giatien" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Hình ảnh</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-success w-100">Thêm sản phẩm</button>
        <a href="index.php?controller=product&action=list" class="btn btn-secondary w-100 mt-2">Hủy</a>
    </form>
</div>