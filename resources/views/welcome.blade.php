@extends('layout')
<style>

    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&display=swap');


    h1, h2, h3, h4, h5, h6, .navbar-brand, .display-4 {
        font-family: 'Cormorant Upright', serif;
        font-weight: 600;
    }


    body, p, .lead, .btn {
        font-family: 'Cormorant Upright', serif;
        font-weight: 400;
    }


    .text-muted, small {
        font-family: 'Cormorant Upright', serif;
        font-weight: 300;
    }


    .hero-section {
        background-image: url("{{ asset('images/fon.png') }}");

        padding: 200px 0 150px 0;
        text-align: center;
    }

    .discount-badge {
        background: #ff6b6b;
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 1.2rem;
        display: inline-block;
        margin-bottom: 20px;
    }

    .product-card {
        border: none;
        transition: transform 0.3s ease;
        margin-bottom: 30px;
    }

    .product-card:hover {
        transform: translateY(-5px);
    }

    .product-image {
        background: #fff;
        border-radius: 10px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6c757d;

        img {
            height: 200px;
        }
    }


    .btn-perfume {
        background: #8b7355;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 20px;
    }

    .btn-perfume:hover {
        background: #756146;
        color: white;
    }

    .about-section {
        background: #f8f9fa;
        padding: 80px 0;
    }

    .fon-imag {
    }
</style>


<section class="hero-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bold mb-4">The Fragrance of Life</h1>
                <p class="lead mb-4">Популярные ароматы снова в продаже</p>
                <div class="discount-badge">25% скидка<br>на новую коллекцию</div>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Самые популярные ароматы </h2>
        <div class="row">

            <div class="col-md-3 col-6">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/valenttino.jpeg') }}" alt="Valentino">
                    </div>
                    <h5>Valentino</h5>
                    <p class="text-muted">$15.00</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/chanel 5.jpg') }}" alt="chanel 5">
                    </div>
                    <h5>Chanel №5</h5>
                    <p class="text-muted">$22.00</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/miss dior.jpg') }}" alt="miss dior">
                    </div>
                    <h5>Miss Dior</h5>
                    <p class="text-muted">$20.00</p>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/coco chanel.jpg') }}" alt="coco chanel">
                    </div>
                    <h5>Coco Chanel Paris</h5>
                    <p class="text-muted">$16.00</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3 class="mb-4">Высокое качество - это единственная основная ценность для нас</h3>
                <p class="text-muted">
                    Аромат — это ключ к замку наших чувств. Он может вернуть нас в далекий солнечный день,
                    пробудить в сердце трепет первой встречи, укутать в уют, как мягкий плед.
                    Наши духи — это не просто композиция нот. Это история, застывшая во флаконе.
                    Каждый наш аромат создан для того, чтобы стать вашей визитной карточкой, вашим тайным оружием и вашим личным уютным миром.
                </p>
                <button class="btn btn-perfume mt-3"></button>
            </div>
            <div class="col-md-6">
                <div class="row">

                    <div class="col-4">
                        <div class="product-image" style="height: 200px;">
                            <img src="{{ asset('images/one.jpg') }}" alt="one" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="product-image" style="height: 200px;">
                            <img src="{{ asset('images/red flag.jpg') }}" alt="red flag" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="product-image" style="height: 200px;">
                            <img src="{{ asset('images/two.jpg') }}" alt="two" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                        </div>git
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
