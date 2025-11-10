<style>
    .navbar {
        position: fixed;
        width: 100%;
        z-index: 1000;
        margin-top: 30px;
        background-color: transparent; /* Keep the navbar transparent */
    }

    

    .navbar .nav-link,
    .navbar .navbar-brand {
        color: #849e8d;
        margin: 0 15px 0 15px;
        position: relative;
    }


    .navbar .nav-link:hover {
        color: black;
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
        background-color: #1f292a; 
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
        color: whitesmoke; 
        margin-right: 30px;
    }

    .navbar .btn-signup:hover {
        background-color: whitesmoke; 
        color: #1f292a; 
    }
</style>

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?=base_url('products')?>" style="margin-left:40px">Grocery</a>
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
    <a class="btn btn-signup" href="<?=base_url('/')?>">
        <i class="fas fa-user-plus"></i> Logout
    </a>
</nav>
