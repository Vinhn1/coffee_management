<!-- Thông báo cập nhật thành công -->
<?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
    <div class="alert alert-success alert-dismissible fade show w-75 mx-auto mb-4" role="alert">
        <i class="fas fa-check-circle me-2"></i>
        <strong>Thành công!</strong> Cập nhật thông tin nhân viên thành công.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>


<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered align-middle mb-0 w-75 text-center mx-auto">
        <!-- Nút thêm Sản Phẩm -->
        <div class="d-flex w-75 mb-4 mx-auto">
            <a href="index.php?controller=product&action=create"
                class="btn btn-success btn-lg fw-bold mt-3">
                <i class="fas fa-user-plus me-2"></i> Thêm sản phẩm
            </a>
        </div>
        <thead class="table-dark text-center">
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th>Giá Tiền</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $sp): ?>
                <tr>
                    <td><?= $sp['masp'] ?></td>
                    <td><?= $sp['tensanpham'] ?></td>
                    <td style="width:120px;">
                        <img src="<?= BASE_URL ?>/images/product/<?= $sp['image'] ?>"
                            alt="<?= $sp['tensanpham'] ?>"
                            class="img-fluid rounded"
                            style="max-height:80px;"
                            onerror="this.src='<?= BASE_URL ?>/public/images/product/errorimage.webp">
                    </td>
                    <td><?= number_format($sp['giatien']) ?> VND</td>
                    <td>
                        <a href="index.php?controller=product&action=update&id=<?= $sp['masp'] ?>" class="btn btn-primary btn-sm m-1">EDIT</a>

                        <a href="index.php?controller=product&action=delete&id=<?= $sp['masp'] ?>" class="btn btn-danger btn-sm">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>