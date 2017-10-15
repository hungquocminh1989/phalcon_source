<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function onConstruct()
    {

    }

    public function initialize()
    {
        $this->tag->setDoctype(Phalcon\Tag::XHTML10_TRANSITIONAL);

        $this->assets->addCss('public/css/bootstrap.css');
        $this->assets->addCss('public/css/bootstrap-fileupload.min.css');
        $this->assets->addCss('public/css/font-awesome.css');
        $this->assets->addCss('public/css/basic.css');
        $this->assets->addCss('public/css/custom.css');

        $this->assets->addJs('public/js/jquery-1.10.2.js');
        $this->assets->addJs('public/js/bootstrap.js');
        $this->assets->addJs('public/js/bootstrap-fileupload.js');
        $this->assets->addJs('public/js/jquery.metisMenu.js');

    }

    public function indexAction()
    {
        /*$this->dispatcher->forward(
            [
                'controller' => 'login',
                'action'     => 'index'
            ]
        );*/
    }

}
