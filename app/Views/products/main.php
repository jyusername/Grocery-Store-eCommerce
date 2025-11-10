<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Font Awesome -->

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            background: linear-gradient(to right, #1f292a 0%, #58aa58 120%);
        }

        .navbar {
            /* position: fixed; */
            display: flex;
            margin-top: 30px;
            padding: 10px;

            width: 100%;
            z-index: 1000;
        }

        .navbar .nav-link,
        .navbar .navbar-brand {
            color: #849e8d;
            margin: 0 15px;
            position: relative;
        }

        .navbar .nav-link:hover {
            color: white;
        }

        .navbar .nav-link::after {
            content: '';
            display: block;
            height: 1px;
            width: 0;
            background: white;
            transition: width 0.3s;
            position: absolute;
            left: 50%;
            bottom: -5px;
            transform: translateX(-50%);
        }

        .navbar .nav-link:hover::after {
            width: 100%;
        }

        .navbar .btn-signup {
            background-color: transparent;
            color: white;
            border: 1px solid white;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar .btn-signup:hover {
            background-color: white;
            color: #1f292a;
        }

        .hero-section {
            color: white;
            padding: 100px;
            margin-top: 30px;
            display: flex;
        }

        .promo-section h1 {
            font-size: 3.0rem;
            font-weight: bold;
            overflow: hidden;
            white-space: nowrap;
            margin: 0 auto;
            animation: typing 8s steps(15, end) infinite, blink-caret .75s step-end infinite;
        }

        .promo-section {
            width: 70%;
            padding: 10px;

        }

        .promo-section h1 {
            font-size: 3.0rem;
            font-weight: bold;
            margin-bottom: 10px;

        }



        .form-group {
            margin-left: 30px;
            margin-top: 60px;
        }

        .btn-success {
            margin-top: 30px;
            position: absolute;
            left: 9%;
        }

        @keyframes typing {
            0% {
                width: 0;
            }

            25% {
                width: 100%;
            }

            50% {
                width: 100%;
            }

            75% {
                width: 0;
            }

            100% {
                width: 0;
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: white;
            }
        }

        .fixed-image {
            position: fixed;
            bottom: 0px;
            right: 0px;
            max-width: 950px;
            transition: transform 0.7s ease-in-out;
        }

        .fixed-image:hover {
            transform: scale(1.05);
        }
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Grocery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <a class="btn btn-signup" href="<?= base_url('/login') ?>">
            <i class="fas fa-user-plus"></i> Sign Up
        </a>


    </nav>

    <div class="hero-section text-center">
        <div class="promo-section">
            <h1>Get fresh Grocery</h1>
            <p>Enjoy healthy life.</p>
            <div class="form-group">
                <select class="form-control" id="categorySelect">
                    <option>Select Category</option>
                    <option>Fruits</option>
                    <option>Vegetables</option>
                    <option>Dairy</option>
                    <option>Beverages</option>
                </select>
            </div>
            <a class="btn btn-success btn-lg" href="#">Shop Now</a>
        </div>
        <div class="container">
            <img src=" <?= base_url() ?>public\images\grocery.png" class="fixed-image">
        </div>




        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>