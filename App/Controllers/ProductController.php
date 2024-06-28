<?php

namespace App\Controllers;

use App\Interface\IController;
use App\Models\Category;
use App\Models\Product;

class ProductController extends BaseController implements IController
{
    const PATH_URL = 'product.';
    public $product = '';
    public $category = '';

    public function __construct() {
        $this->product = new Product();
        $this->category = new Category();
    }

    public function index()
    {
        $listProduct = $this->product->list();
        return $this->render(self::PATH_URL . __FUNCTION__, compact('listProduct'));
    }

    public function show($id)
    {
        $listCategory = $this->category->list();
        $listProduct = $this->product->list($id);
        return $this->render(self::PATH_URL . __FUNCTION__, compact('listProduct', 'listCategory'));
    }

    public function add()
    {
        $listCategory = $this->category->list();
        return $this->render(self::PATH_URL . __FUNCTION__, compact('listCategory'));
    }

    public function store()
    {
        $this->product->add(NULL, $_POST['name'], $_POST['price'], $_POST['category']);
        return redirect('success', 'Add product success', '?url=list-product');
    }

    public function edit($id)
    {
        $listProduct = $this->product->list($id);
        $listCategory = $this->category->list();
        return $this->render(self::PATH_URL . __FUNCTION__, compact('listProduct', 'listCategory'));
    }

    public function update()
    {
        $this->product->update($_POST['category'], $_POST['name'], $_POST['price'], $_POST['id']);
        return redirect('success', 'Update product success', '?url=list-product');
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect('success', 'Delete product success', '?url=list-product');
    }
}
