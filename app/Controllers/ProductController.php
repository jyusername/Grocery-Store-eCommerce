<?php
 
namespace App\Controllers;
 
use App\Models\ProductModel;
use App\Models\UserModel;
use CodeIgniter\Controller;
 
class ProductController extends BaseController
{
    public function index()
    {

        $data['title'] = "Miguelito's Grocery Store";

        $model = model('ProductModel');
        // $data['products'] = $model->findAll();
        $data['products'] = $model->get()->getResultArray();
        

        return view('include/navbar', $data)
            . view('include/header')
            . view('products/index')
            . view('include/footer');

    }




    public function main()
    {
        return view('products/main');
    }



    public function create()
    {
        $data['title'] = "Add New Product";

        return view('include\navbar', $data)
            . view('include/header')
            . view('products/create')
            . view('include\footer');
    }

    public function store()
    {


        $model = new ProductModel();
        $data = $this->request->getPost();

        // Check if an image was uploaded
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Generate a new name for the image
            $newImageName = $image->getRandomName();

            // Move the image to the uploads directory
            $image->move('uploads', $newImageName);

            // Add the image file name to the data array
            $data['image'] = $newImageName;
        }


        $model->insert($data);
        return redirect()->to('/products');
    }

    public function edit($id)
    {
        $data['title'] = "Edit Product";

        $model = new ProductModel();
        $data['product'] = $model->find($id);

        return view('include\navbar', $data)
            . view('include/header')
            . view('products/edit')
            . view('include\footer');
    }

    public function view($id)
    {
        $model = new ProductModel();

        // Fetch the product by ID
        $data['product'] = $model->find($id);

        if (!$data['product']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product with ID ' . $id . ' not found.');
        }

        $data['title'] = "View Product";

        // Load the view with the product data
        return view('include/navbar', $data)
            . view('include/header')
            . view('products/view')
            . view('include/footer');
    }

    // public function getProductById($id) {
    //     // Fetch the product from the database by ID
    //     return $this->db->get_where('products', ['id' => $id])->row_array();
    // }

    public function update($id)
    {

        $data['title'] = "Update Product";

        $model = new ProductModel();

        $product = $model->find($id);

        $data = $this->request->getPost();

        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Generate a new name for the image
            $newImageName = $image->getRandomName();
    
            // Move the image to the uploads directory
            $image->move('uploads', $newImageName);
    
            // Add the image file name to the data array
            $data['image'] = $newImageName;
    
            // Optionally, delete the old image if it exists
            if (!empty($product['image']) && file_exists('uploads/' . $product['image'])) {
                unlink('uploads/' . $product['image']);
            }
        }
        $model->update($id, $data);
        
        return redirect()->to('/products');
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);
        return redirect()->to('/products');
    }
}
