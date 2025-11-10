<style>
    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        background: linear-gradient(to right, #1f292a 0%, #58aa58 120%);
        display: flex;
        flex-direction: column;
    }

    .form-container-wrapper {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .form-container {
        max-width: 1200px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    .form-label {
        color: white;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    /* Layout for three-column structure */
    .row {
        display: flex;
        gap: 20px;
    }

    .col-md-4 {
        flex: 1;
    }

    .product-image {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .product-image img {
        max-width: 150px;
        max-height: 150px;
        margin-bottom: 10px;
    }

    .product-image p {
        color: whitesmoke;
    }

    /* Align buttons to the left */
    .button-group {
        text-align: left;
    }



    .fixed-image {
        position: fixed;
        bottom: 0px;
        right: 0px;
        max-width: 950px;
        transition: transform 0.7s ease-in-out;
        z-index: 0; 
        filter: blur(8px); /* Blur effect */
    }

.form-container-wrapper {
        position: relative;
        z-index: 1; /* Higher z-index for content */
    }
</style>

<div class="form-container-wrapper">
    <div class="card form-container">
        <div class="card-header text-center">
            <h2 style="color:#ffffff">Add New Product</h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('/products/store') ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="barcode" class="form-label">Barcode</label>
                            <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Enter Barcode" required>
                        </div>
                        <div class="mb-3">
                            <label for="productname" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productname" name="productname" placeholder="Enter Product Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Product Description" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="purchaseprice" class="form-label">Purchase Price</label>
                            <input type="number" step="0.01" class="form-control" id="purchaseprice" name="purchaseprice" placeholder="Enter Purchase Price" required>
                        </div>
                        <div class="mb-3">
                            <label for="sellingprice" class="form-label">Selling Price</label>
                            <input type="number" step="0.01" class="form-control" id="sellingprice" name="sellingprice" placeholder="Enter Selling Price" required>
                        </div>
                        <div class="mb-3">
                            <label for="wholesaleprice" class="form-label">Wholesale Price</label>
                            <input type="number" step="0.01" class="form-control" id="wholesaleprice" name="wholesaleprice" placeholder="Enter Wholesale Price" required>
                        </div>
                        <div class="mb-3">
                            <label for="deliverydate" class="form-label">Delivery Date</label>
                            <input type="datetime-local" class="form-control" id="deliverydate" name="deliverydate" required>
                        </div>
                    </div>

                    <div class="col-md-4 product-image">
                        <!-- Image Upload Section -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        </div>
                    </div>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-primary">Save Product</button>
                    <a href="<?= base_url('products') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <img src="<?= base_url() ?>public/images/grocery.png" class="fixed-image">
</div>