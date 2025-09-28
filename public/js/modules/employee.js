document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("formAddEmployee");

  if (!form) return;

  form.addEventListener("submit", function (e) {
    let valid = true;

    // Reset lỗi cũ
    form
      .querySelectorAll(".invalid-feedback")
      .forEach((el) => (el.textContent = ""));
    form
      .querySelectorAll(".form-control")
      .forEach((el) => el.classList.remove("is-invalid"));

    const id = form.querySelector("[name='id']");
    const ten = form.querySelector("[name='ten']");
    const sdt = form.querySelector("[name='sdt']");
    const luong = form.querySelector("[name='luongcoban']");
    const ngaysinh = form.querySelector("[name='ngaysinh']");

    // 1. Kiểm tra rỗng
    if (!id.value.trim()) {
      id.classList.add("is-invalid");
      id.nextElementSibling.textContent = "⚠️ Vui lòng nhập ID nhân viên!";
      valid = false;
    }

    if (!ten.value.trim()) {
      ten.classList.add("is-invalid");
      ten.nextElementSibling.textContent = "⚠️ Vui lòng nhập tên!";
      valid = false;
    }

    // 2. Kiểm tra SĐT
    if (!/^[0-9]{10}$/.test(sdt.value.trim())) {
      sdt.classList.add("is-invalid");
      sdt.nextElementSibling.textContent =
        "⚠️ Số điện thoại phải gồm 10 chữ số!";
      valid = false;
    }

    // 3. Kiểm tra lương
    if (luong.value <= 0) {
      luong.classList.add("is-invalid");
      luong.nextElementSibling.textContent = "⚠️ Lương cơ bản phải > 0!";
      valid = false;
    }

    // 4. Kiểm tra ngày sinh
    if (ngaysinh.value) {
      const today = new Date();
      today.setHours(0, 0, 0, 0); // reset về 00:00:00

      const dob = new Date(ngaysinh.value);

      if (dob >= today) {
        ngaysinh.classList.add("is-invalid");
        ngaysinh.nextElementSibling.textContent = "⚠️ Ngày sinh không hợp lệ!";
        valid = false;
      }
    }

    if (!valid) e.preventDefault(); // Ngăn submit nếu có lỗi
  });
});
