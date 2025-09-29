<div class="container mt-4">
    <h2 class="mb-4">Cập nhật thông tin nhân viên</h2>

    <?php if (isset($error)): ?>
        <div class="alert alert-danger" role="alert">
            <?= htmlspecialchars($error) ?>
        </div>
        <a href="index.php?controller=employee&action=list" class="btn btn-secondary">Quay lại</a>
    <?php else: ?>

    <form action="index.php?controller=employee&action=update" method="post" class="row g-3">
        <!-- Ẩn ID để submit -->
        <input type="hidden" name="id_nhanvien" value="<?= $employee['id_nhanvien'] ?>">

        <div class="col-md-6">
            <label class="form-label">Tên nhân viên</label>
            <input type="text" name="ten_nhanvien" class="form-control"
                value="<?= htmlspecialchars($employee['ten_nhanvien']) ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Giới tính</label>
            <select name="gioitinh" class="form-select" required>
                <option value="Nam" <?= $employee['gioitinh'] == 'Nam' ? 'selected' : '' ?>>Nam</option>
                <option value="Nữ" <?= $employee['gioitinh'] == 'Nữ' ? 'selected' : '' ?>>Nữ</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Ngày sinh</label>
            <input type="date" name="ngaysinh" class="form-control"
                value="<?= $employee['ngaysinh'] ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Số điện thoại</label>
            <input type="text" name="sdt" class="form-control"
                value="<?= htmlspecialchars($employee['sdt']) ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Chức vụ</label>
            <input type="text" name="chucvu" class="form-control"
                value="<?= htmlspecialchars($employee['chucvu']) ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Lương cơ bản</label>
            <input type="number" name="luongcoban" class="form-control"
                value="<?= $employee['luongcoban'] ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Ngày vào làm</label>
            <input type="date" name="ngayvaolam" class="form-control"
                value="<?= $employee['ngayvaolam'] ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Trạng thái</label>
            <select name="trangthai" class="form-select" required>
                <option value="1" <?= $employee['trangthai'] == 1 ? 'selected' : '' ?>>Còn làm</option>
                <option value="0" <?= $employee['trangthai'] == 0 ? 'selected' : '' ?>>OFF</option>
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
            <a href="index.php?controller=employee&action=list" class="btn btn-secondary">Quay lại</a>
        </div>
    </form>
    <?php endif; ?>
</div>