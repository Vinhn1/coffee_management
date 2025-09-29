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