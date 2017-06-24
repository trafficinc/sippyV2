<?php
/**
* Sippy 2.0
* BaseController
*/
namespace App\Controllers;


use Twig_Environment;
use Twig_Loader_Filesystem;


class BaseController {

  public $twig;

    public function __construct()
    {
        $twigCache = FALSE;
        if (VIEW_CACHE) {
            $twigCache = BASE_PATH . '/app/Views/cache';
        }
        $loader = new Twig_Loader_Filesystem(BASE_PATH . '/app/Views');
        $this->twig = new Twig_Environment($loader, array(
            'cache' => $twigCache,
        ));
        $this->twig->addExtension(new \App\Twig\Url());
    }

    public function validate($data, $rules)
    {
        //todo - add some sort of validator for requests
        //return new Validator($data, $rules);
    }

    public function view($template, $data = null)
    {
        if (empty($data)) {
            echo $this->twig->render($template . '.html');
        } else {
            echo $this->twig->render($template . '.html', $data);
        }
    }

    public function __destruct()
    {
    }

}