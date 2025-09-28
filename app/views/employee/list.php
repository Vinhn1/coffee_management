<!-- Form tìm kiếm -->
<form action="index.php?controller=employee&action=search" method="post"
    class="row g-3 align-items-center mb-4 p-4 bg-light rounded shadow-sm w-75 form-search"
    style="margin: 0 auto;">

    <!-- Chọn kiểu tìm kiếm -->
    <div class="col-md-3">
        <select name="type" class="form-select form-select-lg">
            <option value="id">🔑 Tìm theo ID</option>
            <option value="name">👤 Tìm theo tên</option>
        </select>
    </div>

    <!-- Ô nhập từ khóa -->
    <div class="col-md-6">
        <input type="text" name="keyword" class="form-control form-control-lg"
            placeholder="🔍 Nhập ID hoặc tên nhân viên">
    </div>

    <!-- Nút tìm kiếm -->
    <div class="col-md-3">
        <button type="submit" class="btn btn-warning w-100 btn-lg fw-bold">
            <i class="fas fa-search me-2"></i> Tìm kiếm
        </button>
    </div>

    <!-- Nút thêm nhân viên -->
    <div class="col-md-12 text-end">
        <a href="index.php?controller=employee&action=create"
            class="btn btn-success btn-lg fw-bold mt-3 w-100">
            <i class="fas fa-user-plus me-2"></i> Thêm nhân viên
        </a>
    </div>
</form>


<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered align-middle mb-0 w-75 text-center mx-auto">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Tên Nhân Viên</th>
                <th>Giới Tính</th>
                <th>Ngày Sinh</th>
                <th>SĐT</th>
                <th>Chức Vụ</th>
                <th>Lương Cơ Bản</th>
                <th>Ngày Vào Làm</th>
                <th>Trạng Thái</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $emp): ?>
                <tr>
                    <td class="text-center fw-bold"><?= $emp['id_nhanvien'] ?></td>
                    <td><?= $emp['ten_nhanvien'] ?></td>
                    <td><?= $emp['gioitinh'] ?></td>
                    <td><?= $emp['ngaysinh'] ?></td>
                    <td><?= $emp['sdt'] ?></td>
                    <td><?= $emp['chucvu'] ?></td>
                    <td class="text-end"><?= number_format($emp['luongcoban']) ?>Đ</td>
                    <td><?= $emp['ngayvaolam'] ?></td>
                    <td class="text-center">
                        <?php if ($emp['trangthai'] == 1): ?>
                            <span class="badge bg-success px-3 py-2">Còn làm</span>
                        <?php else: ?>
                            <span class="badge bg-secondary px-3 py-2">Nghỉ việc</span>
                        <?php endif; ?>
                    </td>

                    <td class="text-center">
                        <!-- Edit -->
                        <a href="#" class="btn btn-sm btn-warning me-2">
                            <i class="fas fa-edit"></i>
                        </a>

                        <!-- On/Off -->
                        <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn cho nhân viên này nghỉ việc không?')">
                            <i class="fas fa-user-slash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>