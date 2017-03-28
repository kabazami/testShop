<?php

class MainPage extends Controller
{
    public function index()
    {
        $goods = $this->model->getGoods();
        
    	$pageLink = '/';
        require BASE . 'views/partials/header.php';
        require BASE . 'views/index.php';
        require BASE . 'views/partials/footer.php';
    }
}
