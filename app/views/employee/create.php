    <div class="container mt-4">
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
    </div>

    <div class="container mt-4">
        <h2 class="mb-4">Thêm Nhân Viên Mới</h2>
        <form action="index.php?controller=employee&action=create" method="POST" class="row g-3" id="formAddEmployee">
            <!-- ID -->
            <div class="col-md-6">
                <label for="id" class="form-label">ID Nhân Viên</label>
                <input type="text" class="form-control" id="id" name="id" required>
                <div class="invalid-feedback"></div>
            </div>
            <!-- Tên -->
            <div class="col-md-6">
                <label for="ten" class="form-label">Tên Nhân Viên</label>
                <input type="text" class="form-control" id="ten" name="ten" required>
                <div class="invalid-feedback"></div>
            </div>
            <!-- Giới tính -->
            <div class="col-md-6">
                <label class="form-label">Giới tính</label>
                <select class="form-select" name="gioitinh" required>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <!-- Ngày sinh -->
            <div class="col-md-6">
                <label class="form-label" for="ngaysinh">Ngày sinh</label>
                <input type="date" name="ngaysinh" id="ngaysinh" class="form-control">
                <div class="invalid-feedback"></div>
            </div>

            <div class="col-md-6">
                <label for="sdt" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" id="sdt" name="sdt" required>
                <div class="invalid-feedback"></div>
            </div>

            <!-- Chức Vụ -->
            <div class="col-md-6">
                <label for="chucvu" class="form-label">Chức vụ</label>
                <input type="text" class="form-control" id="chucvu" name="chucvu" required>
                <div class="invalid-feedback"></div>
            </div>

            <!-- Lương cơ bản -->
            <div class="col-md-6">
                <label for="luongcoban" class="form-label">Lương cơ bản</label>
                <input type="number" class="form-control" id="luongcoban" name="luongcoban" required>
                <div class="invalid-feedback"></div>
            </div>

            <!-- Ngày vào làm -->
            <div class="col-md-6">
                <label for="ngayvaolam" class="form-label">Ngày vào làm</label>
                <input type="date" class="form-control" id="ngayvaolam" name="ngayvaolam" required>
                <div class="invalid-feedback"></div>
            </div>

            <!-- Trạng thái -->
            <div class="col-md-6">
                <label class="form-label">Trạng thái</label>
                <select class="form-select" name="trangthai" required>
                    <option value="1">Còn làm</option>
                    <option value="0">Nghỉ việc</option>
                </select>
            </div>

            <!-- Button -->
            <div class="col-12">
                <button type="submit" class="btn btn-success">Thêm nhân viên</button>
                <a href="index.php?controller=employee&action=list" class="btn btn-secondary">Quay lại</a>
            </div>
        </form>
    </div>


    <script src="<?= BASE_URL ?>/js/modules/employee.js"></script>