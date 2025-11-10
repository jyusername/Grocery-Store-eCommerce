<style>
body {
    margin: 0;
    padding: 0;
    min-height: 100vh; /* Ensure body height fills the viewport */
    background: linear-gradient(to right, #1f292a 0%, #58aa58 120%);
    display: flex;
    flex-direction: column; /* Ensure content is stacked vertically */
}

.form-container-wrapper {
    flex: 1; /* Take up remaining space */
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px; /* Add padding to ensure some space around the container */
}



.form-container {
    max-width: 1200px;
    background-color: rgba(255, 255, 255, 0.1); /* Slight transparency */
    border-radius: 20px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
}

.form-label {
    color: white; /* Label color */
}

.btn-primary {
    background-color: #007bff; /* Primary button color */
    border-color: #007bff; /* Button border color */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker shade on hover */
}

.btn-secondary {
    background-color: #6c757d; /* Secondary button color */
    border-color: #6c757d; /* Button border color */
}

.btn-secondary:hover {
    background-color: #5a6268; /* Darker shade on hover */
}

/* New styles for three-column layout */
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
    text-align: left; /* Align the button group to the left */
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
            <h2 style="color: #ffffff">Edit Product</h2>
        </div>
        <div class="card-body">
            <form action="<?= base_url('/products/update/' . $product['id']) ?>" method="post"
                enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="barcode" class="form-label">Barcode</label>
                            <input type="text" class="form-control" id="barcode" name="barcode"
                                value="<?= $product['barcode'] ?>" placeholder="Enter Barcode" required>
                        </div>
                        <div class="mb-3">
                            <label for="productname" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productname" name="productname"
                                value="<?= $product['productname'] ?>" placeholder="Enter Product Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                placeholder="Enter Product Description"
                                required><?= $product['description'] ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="unit" class="form-label">Unit</label>
                            <input type="text" class="form-control" id="unit" name="unit"
                                value="<?= $product['unit'] ?>" placeholder="Enter Unit" required>
                        </div>
                        <div class="mb-3">
                            <label for="purchaseprice" class="form-label">Purchase Price</label>
                            <input type="number" step="0.01" class="form-control" id="purchaseprice"
                                name="purchaseprice" value="<?= $product['purchaseprice'] ?>"
                                placeholder="Enter Purchase Price" required>
                        </div>
                        <div class="mb-3">
                            <label for="sellingprice" class="form-label">Selling Price</label>
                            <input type="number" step="0.01" class="form-control" id="sellingprice" name="sellingprice"
                                value="<?= $product['sellingprice'] ?>" placeholder="Enter Selling Price" required>
                        </div>
                        <div class="mb-3">
                            <label for="wholesaleprice" class="form-label">Wholesale Price</label>
                            <input type="number" step="0.01" class="form-control" id="wholesaleprice"
                                name="wholesaleprice" value="<?= $product['wholesaleprice'] ?>"
                                placeholder="Enter Wholesale Price" required>
                        </div>
                    </div>

                    <div class="col-md-4 product-image">
                        <!-- Image Upload Section -->
                        <div class="mb-3">
                            <?php if (!empty($product['image'])): ?>
                                <div class="mb-3">
                                    <img src="<?= base_url('uploads/' . $product['image']) ?>" alt="Product Image">
                                    <p>Current Image</p>
                                </div>
                            <?php endif; ?>
                            <label for="image" class="form-label">Upload New Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            <small class="form-text text-muted">Leave blank if you don't want to change the
                                image.</small>
                        </div>
                    </div>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                    <a href="<?= base_url('products') ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <img src="<?= base_url() ?>public/images/grocery.png" class="fixed-image">
</div>
