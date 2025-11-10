<style>
body {
    margin: 0;
    padding: 0;
    height: 100%;
    background: linear-gradient(to right, #1f292a 0%, #58aa58 120%);
}

.container {
    background-color: rgba(255, 255, 255, 0.0);
    border-radius: 30px;
    padding: 50px;
    box-shadow: 0 4px 8px rgba(0, 0, .6, 0.5);
    color: whitesmoke;
    transition: transform 0.3s ease; /* Add transition for smooth zoom */
}

.container:hover {
    transform: scale(1.05); /* Slightly zoom in on hover */
}

.product-title {
    color: white;
    font-weight: bold;
    margin-bottom: 15px;
}

.product-description {
    color: whitesmoke;
    font-size: 1.1em;
    margin-bottom: 20px;
}

ul li {
    margin-bottom: 10px;
}

.btn {
    margin-top: 10px;
}
</style>



<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Product Image -->
            <img src="<?= base_url('uploads/' . $product['image']) ?>" class="img-fluid"
                alt="<?= esc($product['productname']) ?>" style="max-height: 400px; width: auto; object-fit: contain;">
        </div>
        <div class="col-md-6">
            <!-- Product Details -->
            <h2 class="product-title"><?= esc($product['productname']) ?></h2>
            <p class="product-description"><?= esc($product['description']) ?></p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><b>Barcode:</b> <?= esc($product['barcode']) ?></li>
                        <li><b>Unit:</b> <?= esc($product['unit']) ?></li>
                        <li><b>Purchase Price:</b> ₱<?= esc($product['purchaseprice']) ?></li>
                        <li><b>Supplier:</b> <?= esc($product['supplier']) ?></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><b>Selling Price:</b> ₱<?= esc($product['sellingprice']) ?></li>
                        <li><b>Wholesale Price:</b> ₱<?= esc($product['wholesaleprice']) ?></li>
                        <li><b>Delivery Date:</b> <?= date('Y-m-d', strtotime($product['deliverydate'])) ?></li>
                        <li><b>Date Encoded:</b> <?= date('Y-m-d', strtotime($product['dateencoded'])) ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 40px;" >
                <a href="<?= base_url('products/edit/' . $product['id']) ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url('products/delete/' . $product['id']) ?>" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                <a href="<?= base_url('products') ?>" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</div>  