<style>
    :root {
        --coffee: #4b2e2b;
        --coffee-2: #6b3f34;
        --cream: #f6efe8;
        --caramel: #c28f5b;
        --bean: #2a1c18;
        --white: #ffffff;
    }

    .menu-hero {
        background: linear-gradient(to right, rgba(43, 26, 24, .85), rgba(43, 26, 24, .55)), url('https://images.unsplash.com/photo-1494415859740-21e878dd929d?q=80&w=1600&auto=format&fit=crop') center/cover no-repeat;
        color: var(--cream);
        padding: 64px 0;
        margin-top: -70px;
    }

    .menu-card {
        border: none;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 12px 36px rgba(0, 0, 0, .08);
        transition: transform .18s ease, box-shadow .18s ease;
        background: var(--white);
    }

    .menu-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 44px rgba(0, 0, 0, .12);
    }

    .menu-chip {
        position: absolute;
        top: 14px;
        left: 14px;
        background: var(--coffee);
        color: var(--cream);
        padding: .35rem .6rem;
        border-radius: 999px;
        font-size: .8rem;
    }

    .price {
        color: var(--coffee-2);
        font-weight: 700;
    }

    .section-soft {
        background: var(--cream);
    }
</style>

<section class="menu-hero">
    <div class="container">
        <h1 class="display-6 fw-bold mb-2">Thực Đơn</h1>
        <p class="mb-0">Thưởng thức các món cà phê được ưa chuộng nhất tại CoffeeHouse</p>
    </div>
</section>

<section class="py-5 section-soft">
    <div class="container">
        <div class="row g-4">
            <?php if (!empty($products)) : ?>
                <?php foreach ($products as $p) : ?>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card menu-card position-relative h-100">
                            <span class="menu-chip">Best Seller</span>
                            <img src="<?= isset($p['image']) && $p['image'] ? BASE_URL . '/images/product/' . htmlspecialchars($p['image']) : 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80' ?>" class="card-img-top" alt="<?= htmlspecialchars($p['tensanpham'] ?? 'Coffee') ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1"><?= htmlspecialchars($p['tensanpham']) ?></h5>
                                <p class="price mb-2">$<?= number_format((float)($p['giatien'] ?? 0), 2) ?></p>
                                <a href="#" class="btn btn-sm btn-outline-dark">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
        </div>

        <div class="col-12">
            <div class="alert alert-warning">Chưa có sản phẩm nào.</div>
        </div>
    <?php endif; ?>
    </div>
    </div>
</section>