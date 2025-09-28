<div class="container my-4">

    <!-- Thông báo lỗi -->
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger text-center fw-bold">
            <?= $error ?>
        </div>
    <?php endif; ?>

    <!-- Kết quả tìm kiếm -->
    <?php if (!empty($employees)): ?>
        <h4 class="mb-4 text-primary text-center">🔍 Kết quả tìm kiếm:</h4>

        <?php if (count($employees) === 1): ?>
            <!-- Nếu chỉ có 1 nhân viên -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary">
                                <?= $employees[0]['ten_nhanvien'] ?>
                            </h5>
                            <h6 class="card-subtitle mb-3 text-muted">
                                ID: <?= $employees[0]['id_nhanvien'] ?>
                            </h6>

                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item"><strong>Giới tính:</strong> <?= $employees[0]['gioitinh'] ?></li>
                                <li class="list-group-item"><strong>Ngày sinh:</strong> <?= $employees[0]['ngaysinh'] ?></li>
                                <li class="list-group-item"><strong>SĐT:</strong> <?= $employees[0]['sdt'] ?></li>
                                <li class="list-group-item"><strong>Chức vụ:</strong> <?= $employees[0]['chucvu'] ?></li>
                                <li class="list-group-item"><strong>Lương cơ bản:</strong> <?= number_format($employees[0]['luongcoban']) ?>Đ</li>
                                <li class="list-group-item"><strong>Ngày vào làm:</strong> <?= $employees[0]['ngayvaolam'] ?></li>
                                <li class="list-group-item">
                                    <strong>Trạng thái:</strong>
                                    <?php if ($employees[0]['trangthai'] == 1): ?>
                                        <span class="badge bg-success">Còn làm</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Nghỉ việc</span>
                                    <?php endif; ?>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-between">
                                <a href="index.php?controller=employee&action=edit&id=<?= $employees[0]['id_nhanvien'] ?>"
                                    class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Sửa
                                </a>
                                <a href="index.php?controller=employee&action=delete&id=<?= $employees[0]['id_nhanvien'] ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Bạn có chắc muốn cho nhân viên này nghỉ việc không?')">
                                    <i class="fas fa-user-slash"></i> Nghỉ việc
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <!-- Nếu nhiều nhân viên -->
            <div class="row">
                <?php foreach ($employees as $emp): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-primary">
                                    <?= $emp['ten_nhanvien'] ?>
                                </h5>
                                <h6 class="card-subtitle mb-3 text-muted">
                                    ID: <?= $emp['id_nhanvien'] ?>
                                </h6>

                                <ul class="list-group list-group-flush mb-3">
                                    <li class="list-group-item"><strong>Giới tính:</strong> <?= $emp['gioitinh'] ?></li>
                                    <li class="list-group-item"><strong>Ngày sinh:</strong> <?= $emp['ngaysinh'] ?></li>
                                    <li class="list-group-item"><strong>SĐT:</strong> <?= $emp['sdt'] ?></li>
                                    <li class="list-group-item"><strong>Chức vụ:</strong> <?= $emp['chucvu'] ?></li>
                                    <li class="list-group-item"><strong>Lương cơ bản:</strong> <?= number_format($emp['luongcoban']) ?>Đ</li>
                                    <li class="list-group-item"><strong>Ngày vào làm:</strong> <?= $emp['ngayvaolam'] ?></li>
                                    <li class="list-group-item">
                                        <strong>Trạng thái:</strong>
                                        <?php if ($emp['trangthai'] == 1): ?>
                                            <span class="badge bg-success">Còn làm</span>
                                        <?php else: ?>
                                            <span class="badge bg-secondary">Nghỉ việc</span>
                                        <?php endif; ?>
                                    </li>
                                </ul>

                                <div class="d-flex justify-content-between">
                                    <a href="index.php?controller=employee&action=edit&id=<?= $emp['id_nhanvien'] ?>"
                                        class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Sửa
                                    </a>
                                    <a href="index.php?controller=employee&action=delete&id=<?= $emp['id_nhanvien'] ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Bạn có chắc muốn cho nhân viên này nghỉ việc không?')">
                                        <i class="fas fa-user-slash"></i> Nghỉ việc
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>