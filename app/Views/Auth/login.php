<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            background: linear-gradient(to right, #1f292a 0%, #58aa58 120%);
        }

        .navbar {
            /* position: fixed; */
            display: flex
            width: 100%;
            z-index: 1000;
            margin: 30px;
        }

        .navbar .nav-link,
        .navbar .navbar-brand {
            color: #849e8d;
            margin: 0 15px;
            position: relative;

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


        .container{
            position: absolute;
            left: 10%; 
            top: 40%;
            transform: translateY(-50%);
            max-width: 400px;
            padding: 10px;
            color:white;
        }


        /* Button styles */
        .btn-primary {
            background-color: transparent;
            color: #58aa58; 
            border: 1px solid white; 
            border-radius: 20px;
            padding: 10px 20px;
            transition: background-color 0.3s, color 0.3s;
            margin-right: 10px;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #58aa58; 
            color: white; 
        }

        .btn-secondary {
            background-color: transparent;
            color: #849e8d; 
            border: 1px solid #849e8d; 
            border-radius: 20px;
            padding: 10px 20px;
            transition: background-color 0.3s, color 0.3s;
            margin-top: 10px;
        }

        .btn-secondary:hover {
            background-color: #849e8d;
            color: white;
        }


        
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Grocery</a>
        
</nav>

<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px; background: rgba(255, 255, 255, 0.08); border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); border-radius:20px; padding: 20px">
        <div class="card-header text-center" style="background: transparent;">
            <h3>Login</h3>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('/auth/loginSubmit') ?>" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="<?=base_url(relativePath: '/')?>" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

<div    >
            <img src=" <?= base_url() ?>public\images\grocery.png" class="fixed-image">
        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
