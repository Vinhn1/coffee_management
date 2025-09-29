<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered align-middle mb-0 w-75 text-center mx-auto">
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
                        <a href="index.php?controller=product&action=edit&id=<?= $sp['masp'] ?>" class="btn btn-primary btn-sm m-1">EDIT</a>

                        <a href="" class="btn btn-danger btn-sm">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>