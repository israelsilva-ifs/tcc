<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/

namespace Tcc\Src\Controllers;

use League\Plates\Engine as parentAlias;

abstract class Controller extends parentAlias
{
    private $view;

    public function __construct()
    {
        $this->view = parent::__construct(CONF_VIEW_PATH . CONF_VIEW_THEME, CONF_VIEW_EXT);
        //$this->view = parent::__construct(CONF_VIEW_PATH . CONF_VIEW_THEME., CONF_VIEW_EXT);
    }


}