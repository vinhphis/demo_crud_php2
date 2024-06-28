<?php

namespace App\Controllers;

use App\Interface\IController;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController implements IController
{
    const PATH_URL = 'category.';
    public $category = '';

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $listCategory = $this->category->list();
        return $this->render(self::PATH_URL . __FUNCTION__, compact('listCategory'));
    }

    public function show($id)
    {
        $listCategory = $this->category->list($id);
        return $this->render(self::PATH_URL . __FUNCTION__, compact('listCategory'));
    }

    public function add()
    {
        return $this->render(self::PATH_URL . __FUNCTION__);
    }

    public function store()
    {
        $this->category->add(NULL, $_POST['name']);
        return redirect('success', 'Add category success', '?url=list-category');
    }

    public function edit($id)
    {
        $listCategory = $this->category->list($id);
        return $this->render(self::PATH_URL . __FUNCTION__, compact('listCategory'));
    }

    public function update()
    {
        $this->category->update($_POST['name'], $_POST['id']);
        return redirect('success', 'Update category success', '?url=list-category');
    }

    public function delete($id)
    {
        $this->category->delete($id);
        return redirect('success', 'Delete category success', '?url=list-category');
    }
}
