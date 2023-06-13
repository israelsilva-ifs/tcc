<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/

namespace Tcc\Src\Controllers;

use Tcc\Src\Models\User;

class UsersController extends Controller
{
    public function index(): void
    {
        $users = (new User())->find()->fetch(true);
        echo $this->render('users', [
            'title' => CONF_SITE_NAME . ' Users',
            'users' => $users,

        ]);
    }
}