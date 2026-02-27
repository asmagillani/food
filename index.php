<?php
$restaurants = [
    [
        'name' => 'Burger House',
        'category' => 'Burgers · Fast Food',
        'rating' => '4.7',
        'delivery' => '25-35 min',
        'image' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'name' => 'Sushi Daily',
        'category' => 'Japanese · Sushi',
        'rating' => '4.8',
        'delivery' => '30-40 min',
        'image' => 'https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'name' => 'Pasta Point',
        'category' => 'Italian · Pasta',
        'rating' => '4.6',
        'delivery' => '20-30 min',
        'image' => 'https://images.unsplash.com/photo-1621996346565-e3dbc353d2e5?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'name' => 'Green Bowl',
        'category' => 'Healthy · Salads',
        'rating' => '4.9',
        'delivery' => '15-25 min',
        'image' => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=800&q=80'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodieGo - Food Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="sticky-top shadow-sm bg-white">
        <nav class="navbar navbar-expand-lg container py-3">
            <a class="navbar-brand brand-text" href="#">FoodieGo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#restaurants">Restaurants</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">How it works</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-outline-brand px-4" href="#">Log in</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-brand px-4" href="#">Sign up</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-section py-5 py-lg-6">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold mb-3">Enjoy your favorite food delivered fast at your door.</h1>
                        <p class="lead text-muted mb-4">Order from top local restaurants in minutes. Fresh meals, great deals, and instant delivery updates.</p>
                        <form class="location-box d-flex flex-column flex-md-row gap-2" action="#" method="get">
                            <input type="text" class="form-control form-control-lg" placeholder="Enter your delivery address">
                            <button type="submit" class="btn btn-brand btn-lg px-4">Find food</button>
                        </form>
                        <div class="mt-3 text-muted small">Popular: Pizza, Burgers, Sushi, Desserts</div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="img-fluid hero-image" src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=1200&q=80" alt="Healthy bowls and meals">
                    </div>
                </div>
            </div>
        </section>

        <section id="restaurants" class="py-5 bg-light">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold mb-0">Top restaurants near you</h2>
                    <a href="#" class="text-decoration-none brand-link">See all</a>
                </div>
                <div class="row g-4">
                    <?php foreach ($restaurants as $restaurant): ?>
                        <div class="col-sm-6 col-lg-3">
                            <article class="card border-0 shadow-sm h-100 restaurant-card">
                                <img src="<?php echo htmlspecialchars($restaurant['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($restaurant['name']); ?>">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h3 class="h6 mb-0"><?php echo htmlspecialchars($restaurant['name']); ?></h3>
                                        <span class="badge text-bg-success"><?php echo htmlspecialchars($restaurant['rating']); ?> ★</span>
                                    </div>
                                    <p class="text-muted small mb-2"><?php echo htmlspecialchars($restaurant['category']); ?></p>
                                    <span class="badge text-bg-light border text-dark"><?php echo htmlspecialchars($restaurant['delivery']); ?></span>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="features" class="py-5">
            <div class="container">
                <h2 class="text-center fw-bold mb-5">How FoodieGo works</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="feature-box h-100 p-4 text-center">
                            <div class="feature-icon mb-3">📍</div>
                            <h3 class="h5">Set your location</h3>
                            <p class="text-muted mb-0">Tell us where you are and discover nearby restaurants instantly.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box h-100 p-4 text-center">
                            <div class="feature-icon mb-3">🍽️</div>
                            <h3 class="h5">Choose your meal</h3>
                            <p class="text-muted mb-0">Browse menus, compare ratings, and pick your favorite dishes.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box h-100 p-4 text-center">
                            <div class="feature-icon mb-3">🛵</div>
                            <h3 class="h5">Fast delivery</h3>
                            <p class="text-muted mb-0">Track your order in real-time while we deliver it hot and fresh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section py-5">
            <div class="container text-center">
                <h2 class="fw-bold mb-3">Get the app and save more</h2>
                <p class="text-muted mb-4">Exclusive deals, free delivery offers, and priority support in the app.</p>
                <a href="#" class="btn btn-brand btn-lg px-5">Download now</a>
            </div>
        </section>
    </main>

    <footer class="py-4 border-top">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span class="text-muted">© <?php echo date('Y'); ?> FoodieGo</span>
            <div class="d-flex gap-3">
                <a href="#" class="text-decoration-none text-muted">Terms</a>
                <a href="#" class="text-decoration-none text-muted">Privacy</a>
                <a href="#" class="text-decoration-none text-muted">Help</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
