<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'barcode', 'productname', 'description', 'unit', 
        'purchaseprice', 'sellingprice', 'wholesaleprice', 
        'deliverydate', 'supplier', 'dateencoded','image'
    ];
}
