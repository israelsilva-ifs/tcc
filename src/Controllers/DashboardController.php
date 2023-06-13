<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/

namespace Tcc\Src\Controllers;

use Tcc\Src\Models\Teacher;
use Tcc\Src\Models\User;
use Tcc\Src\Core\Controller;

class DashboardController extends \Tcc\Src\Controllers\Controller
{
    public function index()
    {
        $users = (new User())->find()->count();
        $teachers = (new Teacher())->find()->count();
        //$disciplines = (new Discipline())->find->count();

        echo $this->render('home', [
            'title' => CONF_SITE_NAME . 'Home',
            'users' => $users,
            'teachers' => $teachers
        ]);
    }

    public function error(array $data): void
    {
        echo $data['error'];
    }

    public function notFound(array $data): void
    {
//        echo 'Não encontrado';
        echo $this->render('error', [
            'title' => CONF_SITE_NAME . ' <br> Pagina não encontrada',
            'errcode' => $data['errcode'],
            'message' => 'Esta pagina não foi localizada'
        ]);
    }

    public function about(array $data): void
    {
        echo 'Sobre..';
    }
}