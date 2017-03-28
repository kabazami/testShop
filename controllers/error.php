<?php
class Error extends Controller
{
    public function index()
    {
        require APP . 'views/partials/header.php';
        require APP . 'views/error.php';
        require APP . 'views/partials/footer.php';
    }
}