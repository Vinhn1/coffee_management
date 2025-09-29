<!-- Coffee Themed Landing - Modern Refresh -->
<style>
    :root {
        --coffee:#4b2e2b; /* deep espresso */
        --coffee-2:#6b3f34; /* mocha */
        --cream:#f6efe8; /* latte foam */
        --caramel:#c28f5b; /* caramel drizzle */
        --bean:#2a1c18; /* roasted bean */
        --white:#ffffff;
    }
    .hero-coffee {
        position: relative;
        min-height: 88vh;
        display: flex;
        align-items: center;
        background: linear-gradient( to right, rgba(43, 26, 24, 0.85), rgba(43, 26, 24, 0.55) ), url('https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?q=80&w=1600&auto=format&fit=crop') center/cover no-repeat;
        color: var(--cream);
    }
    .hero-coffee .badge-hot {
        background: var(--caramel);
        color: var(--bean);
        letter-spacing: .08em;
        border-radius: 999px;
        padding: .5rem .9rem;
        box-shadow: 0 6px 20px rgba(0,0,0,.18);
    }
    .hero-title {
        font-weight: 800;
        line-height: 1.05;
        text-shadow: 0 6px 24px rgba(0,0,0,.35);
    }
    .hero-cta .btn {
        padding: .9rem 1.4rem;
        border-radius: 14px;
    }
    .btn-caramel {
        background: var(--caramel);
        color: var(--bean);
        border: none;
        transition: transform .15s ease, box-shadow .15s ease;
    }
    .btn-caramel:hover { transform: translateY(-2px); box-shadow: 0 12px 24px rgba(0,0,0,.18); }
    .btn-outline-cream { color: var(--cream); border: 2px solid var(--cream); }
    .btn-outline-cream:hover { color: var(--bean); background: var(--cream); }

    .section-soft {
        background: var(--cream);
    }
    .feature {
        background: var(--white);
        border: 1px solid #eee;
        border-radius: 16px;
        padding: 1.25rem 1.1rem;
        height: 100%;
        box-shadow: 0 8px 30px rgba(0,0,0,.06);
        transition: transform .18s ease, box-shadow .18s ease;
    }
    .feature:hover { transform: translateY(-4px); box-shadow: 0 14px 34px rgba(0,0,0,.08); }
    .feature .icon { width: 48px; height: 48px; border-radius: 12px; background: rgba(194,143,91,.15); color: var(--coffee); display:flex; align-items:center; justify-content:center; }

    .menu-card {
        border: none;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 12px 36px rgba(0,0,0,.08);
        transition: transform .18s ease, box-shadow .18s ease;
        background: var(--white);
    }
    .menu-card:hover { transform: translateY(-6px); box-shadow: 0 18px 44px rgba(0,0,0,.12); }
    .menu-card .price { color: var(--coffee-2); font-weight: 700; }
    .menu-chip { position:absolute; top:14px; left:14px; background: var(--coffee); color: var(--cream); padding:.35rem .6rem; border-radius:999px; font-size:.8rem; }

    .testi {
        background: linear-gradient(180deg, #ffffff, #f9f5f1);
        border-radius: 18px;
        border: 1px solid #eee;
        padding: 1.5rem;
        height: 100%;
    }
    .coffee-divider { height: 2px; background: linear-gradient(to right, transparent, var(--caramel), transparent); border: 0; }

    .coffee-footer { background: var(--bean); color: var(--cream); }
    .coffee-footer a { color: var(--caramel); text-decoration: none; }
    .coffee-footer a:hover { text-decoration: underline; }
</style>

<!-- Hero -->
<section id="hero" class="hero-coffee">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 animate__animated animate__fadeInDown">
                <span class="badge badge-hot mb-3">Freshly Roasted • Handcrafted • Daily</span>
                <h1 class="display-3 hero-title mb-3">Khởi đầu ngày mới với hương vị <span style="color:var(--caramel)">CoffeeHouse</span></h1>
                <p class="lead mb-4">Đậm đà. Cân bằng. Tỉnh táo. Thưởng thức những tách cà phê chất lượng với hạt rang tuyển chọn và công thức pha chế đặc trưng.</p>
                <div class="hero-cta d-flex gap-3">
                    <a href="#menu" class="btn btn-caramel btn-lg animate__animated animate__pulse animate__infinite">Xem Menu</a>
                    <a href="#contact" class="btn btn-outline-cream btn-lg">Đặt bàn</a>
                </div>
            </div>
        </div>
    </div>
    </section>

<!-- Features -->
<section class="section-soft py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature h-100">
                    <div class="icon mb-3"><i class="bi bi-cup-hot"></i></div>
                    <h5 class="mb-2" style="color:var(--coffee)">Hạt rang thủ công</h5>
                    <p class="mb-0">Nguồn hạt Arabica & Robusta chọn lọc, rang mới mỗi ngày để giữ trọn hương thơm.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature h-100">
                    <div class="icon mb-3"><i class="bi bi-droplet-half"></i></div>
                    <h5 class="mb-2" style="color:var(--coffee)">Công thức cân bằng</h5>
                    <p class="mb-0">Độ chua - ngọt - đắng hài hòa, phù hợp khẩu vị người Việt hiện đại.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature h-100">
                    <div class="icon mb-3"><i class="bi bi-emoji-smile"></i></div>
                    <h5 class="mb-2" style="color:var(--coffee)">Không gian ấm cúng</h5>
                    <p class="mb-0">Tone nâu ấm áp, ánh sáng dịu nhẹ – nơi lý tưởng cho làm việc và gặp gỡ.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Menu -->
<section id="menu" class="py-5">
    <div class="container">
        <h2 class="text-center mb-2 animate__animated animate__fadeInUp" style="color:var(--coffee)">Menu Cà Phê</h2>
        <p class="text-center text-muted mb-5">Chọn vị yêu thích của bạn hôm nay</p>
        <div class="row g-4">
            <div class="col-md-4 animate__animated animate__fadeInLeft">
                <div class="card menu-card position-relative">
                    <span class="menu-chip">Signature</span>
                    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Espresso">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Espresso</h5>
                        <p class="price mb-0">$3.50</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="card menu-card position-relative">
                    <img src="https://images.unsplash.com/photo-1525253086316-d0c936c814f8?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Latte">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Latte</h5>
                        <p class="price mb-0">$4.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInRight">
                <div class="card menu-card position-relative">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Cappuccino">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Cappuccino</h5>
                        <p class="price mb-0">$4.50</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="coffee-divider my-0">

<!-- Testimonials -->
<section class="py-5 section-soft">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="mb-1" style="color:var(--coffee)">Khách hàng nói gì?</h2>
                <p class="text-muted">Những trải nghiệm thật từ cộng đồng CoffeeHouse</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="testi h-100">
                    <p class="mb-3">“Mùi hương rang mới thật sự khác biệt. Không gian yên tĩnh để làm việc.”</p>
                    <div class="d-flex align-items-center gap-3">
                        <img src="https://i.pravatar.cc/64?img=12" class="rounded-circle" width="48" height="48" alt="avatar">
                        <div>
                            <strong>Minh Anh</strong>
                            <div class="text-muted small">Freelancer</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testi h-100">
                    <p class="mb-3">“Latte béo mịn, cân bằng hoàn hảo. Dịch vụ chu đáo.”</p>
                    <div class="d-flex align-items-center gap-3">
                        <img src="https://i.pravatar.cc/64?img=5" class="rounded-circle" width="48" height="48" alt="avatar">
                        <div>
                            <strong>Thu Hà</strong>
                            <div class="text-muted small">Marketer</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testi h-100">
                    <p class="mb-3">“Cà phê đậm đà, giá hợp lý. Sẽ quay lại thường xuyên!”</p>
                    <div class="d-flex align-items-center gap-3">
                        <img src="https://i.pravatar.cc/64?img=8" class="rounded-circle" width="48" height="48" alt="avatar">
                        <div>
                            <strong>Trọng Nghĩa</strong>
                            <div class="text-muted small">Developer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mb-4">
                    <h2 class="mb-1" style="color:var(--coffee)">Liên hệ</h2>
                    <p class="text-muted">Hãy để lại lời nhắn, chúng tôi sẽ liên hệ sớm nhất</p>
                </div>
                <form class="animate__animated animate__fadeInUp">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Họ tên</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập họ tên">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Lời nhắn</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Tôi muốn..."></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-caramel w-100">Gửi tin nhắn</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

