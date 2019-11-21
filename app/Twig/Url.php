<?php

namespace App\Twig;

/*
 * Sippy View Support via Twig
 * Docs: https://twig.sensiolabs.org
 * */

use Twig_Function;

class Url extends \Twig_Extension {

    public function getFunctions()
    {
        return array(
            new Twig_Function('url', array($this, 'generate_url') ),
            new Twig_Function('asset', array($this, 'generate_asset') )
        );
    }

    public function generate_url($uri) {
        if ($uri === '/') {
            return BASE_URL;
        } else {
            return BASE_URL.$uri;
        }
    }

    public function generate_asset($asset) {
        return BASE_URL.$asset;
    }

}