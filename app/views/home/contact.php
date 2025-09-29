<style>
    :root {
        --coffee: #4b2e2b;
        --coffee-2: #6b3f34;
        --cream: #f6efe8;
        --caramel: #c28f5b;
        --bean: #2a1c18;
        --white: #ffffff;
    }

    .contact-hero {
        background: linear-gradient(to right, rgba(43, 26, 24, 0.85), rgba(43, 26, 24, 0.55)), url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?q=80&w=1600&auto=format&fit=crop') center/cover no-repeat;
        color: var(--cream);
        padding: 64px 0;
        margin-top: -70px
    }

    .contact-card {
        background: var(--white);
        border: 1px solid #eee;
        border-radius: 16px;
        padding: 20px;
        height: 100%;
        box-shadow: 0 8px 30px rgba(0, 0, 0, .06);
        transition: transform .18s ease, box-shadow .18s ease;
    }

    .contact-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 34px rgba(0, 0, 0, .08);
    }

    .contact-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: rgba(194, 143, 91, .15);
        color: var(--coffee);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-caramel {
        background: var(--caramel);
        color: var(--bean);
        border: none;
    }

    .btn-caramel:hover {
        filter: brightness(0.95);
    }

    .section-soft {
        background: var(--cream);
    }
</style>

<section class="contact-hero">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-7">
                <h1 class="display-5 fw-bold mb-2">Liên hệ CoffeeHouse</h1>
                <p class="mb-0">Chúng tôi luôn sẵn sàng hỗ trợ bạn. Hãy để lại lời nhắn hoặc ghé thăm cửa hàng.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 section-soft">
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="contact-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
                        <h6 class="mb-0" style="color:var(--coffee)">Địa chỉ</h6>
                    </div>
                    <div>123 Đường Cà Phê, Quận 1, TP.HCM</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="contact-icon"><i class="bi bi-telephone"></i></div>
                        <h6 class="mb-0" style="color:var(--coffee)">Điện thoại</h6>
                    </div>
                    <div>+84 28 1234 5678</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="contact-icon"><i class="bi bi-envelope"></i></div>
                        <h6 class="mb-0" style="color:var(--coffee)">Email</h6>
                    </div>
                    <div>hello@coffeehouse.vn</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="contact-icon"><i class="bi bi-clock"></i></div>
                        <h6 class="mb-0" style="color:var(--coffee)">Giờ mở cửa</h6>
                    </div>
                    <div>Mon - Sun: 07:00 - 21:30</div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="contact-card h-100">
                    <h5 class="mb-3" style="color:var(--coffee)">Gửi tin nhắn</h5>
                    <form method="post" action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Họ tên</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nguyễn Văn A" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">Chủ đề</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Đặt bàn / Góp ý / Hỏi đáp">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Lời nhắn</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tôi muốn..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-caramel w-100">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-card h-100 p-0 overflow-hidden">
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps?q=Ben+Thanh+Market,Ho+Chi+Minh+City&output=embed"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>