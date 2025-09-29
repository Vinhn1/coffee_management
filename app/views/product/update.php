<div class="container mt-4">
    <h2 class="text-center mb-4">Chỉnh sửa sản phẩm</h2>
    <form action="index.php?controller=product&action=update" enctype="multipart/form-data" method="post">
        <input type="hidden" name="masp" value="<?= $products['masp'] ?>">
        <input type="hidden" name="old_image" value="<?= $products['image'] ?>">

        <div class="mb-3">
            <label for="" class="form-label">Tên Sản Phẩm</label>
            <input type="text" name="tensanpham" class="form-control" value="<?= $products['tensanpham'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Giá Tiền</label>
            <input type="number" name="giatien" class="form-control" value="<?= $products['giatien'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Hình Ảnh</label>
            <br>
            <td style="width: 120px;">
                <img src="<?= BASE_URL ?>/images/product/<?= $products['image'] ?>" alt="<?= $products['tensanpham'] ?>" class="img-fluid rounded" style="max-height:80px;">
            </td>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Đổi Hình Ảnh</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success ">Cập nhật</button>
        <a href="index.php?controller=product&action=list" class="btn btn-secondary">Hủy</a>
    </form>
</div>