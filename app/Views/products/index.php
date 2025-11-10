<style>
    body {
        margin-bottom: 60px;
        padding: 0;
        height: 100%;
        background: linear-gradient(to bottom right, #1f292a 0%, #58aa58 120%);
    }

    .card {
        border-radius: 10%;
        background: transparent;
        backdrop-filter: blur(100px);
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
    }

    .card-body {
        text-align: left;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-footer {
        text-align: center;
    }

    .btn-add-product {
        background-color: white; 
        color: #1f292a; 
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s ease;
        border: none; 
        text-decoration: none; 
    }

    .btn-add-product:hover {
        background-color: #1f292a; 
        color: whitesmoke;
        transform: scale(1.05);
    }

    .btn-add-product i {
        margin-right: 5px;
    }

    .fixed-image {
        position: fixed;
        bottom: 0px;
        right: 0px;
        max-width: 950px;
        transition: transform 0.7s ease-in-out;
        z-index: 0; 
        filter: blur(5px); /* Blur effect */
    }

    .fixed-image:hover {
        transform: scale(1.05);
    }

    .content-container {
        position: relative;
        z-index: 1; /* Higher z-index for content */
    }
</style>

<div class="container mt-5 content-container" style="margin-bottom: 40px;">
    <div class="d-flex justify-content-between mb-4">
        <h2 style="color:white">Grocery List</h2>
        <a href="<?= base_url('products/create') ?>" class="btn btn-add-product">
            <i class="bi bi-plus-circle"></i> Add Product
        </a>
    </div>

    <div class="row row-cols-1 row-cols-md-5 g-4"> <!-- Adjusted columns for better layout -->
        <?php if (!empty($products) && is_array($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="col">
                    <div class="card h-100 text-center shadow-sm">
                        <!-- Dynamic Product Image -->
                        <img src="<?= base_url('uploads/' . $product['image']) ?>" class="card-img-top img-fluid"
                            alt="<?= esc($product['productname']) ?>"
                            style="max-height: 150px; width: auto; object-fit: contain;">

                        <div class="card-body">
                            <h6 class="card-title"><?= esc($product['productname']) ?></h6>
                            <p class="card-text">₱<?= esc($product['sellingprice']) ?></p>
                        </div>

                        <div class="card-footer">
                            <a href="<?= base_url('products/view/' . $product['id']) ?>" class="btn btn-primary btn-sm">View</a>
                            <a href="<?= base_url('products/edit/' . $product['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('products/delete/' . $product['id']) ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">No products found.</p>
        <?php endif; ?>
    </div>
</div>

<div class="container">
    <img src="<?= base_url() ?>public/images/grocery.png" class="fixed-image">
</div>
