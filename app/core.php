<?php

class App
{
    private $URLController = null;

    private $URLAction = null;

    private $URLParams = array();

    public function __construct()
    {

        $this->URLSplitter();

          if (!$this->URLController) {

            require BASE . 'controllers/indexController.php';
            $page = new MainPage();
            $page->index();

        } elseif (file_exists(BASE . 'controllers/' . $this->URLController . '.php')) {
            
            require BASE . 'controllers/' . $this->URLController . '.php';
            $this->URLController = new $this->URLController();

            if (method_exists($this->URLController, $this->URLAction)) {

                if (!empty($this->URLParams)) {
                    call_user_func_array(array($this->URLController, $this->URLAction), $this->URLParams);
                } else {
                    $this->URLController->{$this->URLAction}();
                }

            } else {
                if (strlen($this->URLAction) == 0) {
                    $this->URLController->index();
                }
                else {
                    header('location: error');
                }
            }
        } else {
            header('location: error');
        }
    }

    private function URLSplitter()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->URLController = isset($url[0]) ? $url[0] : null;
            $this->URLAction = isset($url[1]) ? $url[1] : null;

            unset($url[0], $url[1]);

            $this->URLParams = array_values($url);
        }
    }
}
