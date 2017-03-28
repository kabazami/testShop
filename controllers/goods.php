<?php

class goods extends Controller
{
    public function index()
    {
        $goods = $this->model->getGoods();

        $pageLink = 'goods';
        require BASE . 'views/partials/header.php';
        require BASE . 'views/goods/index.php';
        require BASE . 'views/partials/footer.php';
    }

    public function addProduct()
    {
        if (isset($_POST["sub_add_product"])) {
            $this->model->addProduct($_POST["name"], $_POST["price"], $_POST["description"]);
        }
        header('location: ' . APP_URL . '/goods');
    }

    public function deleteProduct($id)
    {
        if (isset($id)) {
            $this->model->destroyProduct($id);
        }

        header('location: ' . APP_URL . '/goods');
    }

   public function editProduct($id)
    {
        if (isset($id)) {
            $product = $this->model->getProduct($id);

            $pageLink = 'goods';
            require BASE . 'views/partials/header.php';
            require BASE . 'views/goods/edit.php';
            require BASE . 'views/partials/footer.php';
        } else {
            header('location: ' . APP_URL . '/goods');
        }
    }

    public function updateProduct()
    {
        if (isset($_POST["sub_update_product"])) {
            $this->model->updateProduct($_POST["name"], $_POST["price"],  $_POST["description"], $_POST['id']);
        }

        header('location: ' . APP_URL . '/goods');
    }

}
