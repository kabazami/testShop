<?php

class orders extends Controller
{
    public function index()
    {
        $orders = $this->model->getOrders();

        $pageLink = 'orders';
        require BASE . 'views/partials/header.php';
        require BASE . 'views/orders/index.php';
        require BASE . 'views/partials/footer.php';
    }

    public function placeOrder($id)
    {
        $this->model->placeOrder($id);

        header('location: ' . APP_URL );
    }

    public function deleteOrder($id)
    {
        if (isset($id)) {
            $this->model->destroyOrder($id);
        }

        header('location: ' . APP_URL . '/orders');
    }

}
