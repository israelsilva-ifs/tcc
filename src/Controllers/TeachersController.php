<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/

namespace Tcc\Src\Controllers;

use Tcc\Src\Models\Teacher;
use Tcc\Src\Models\User;

class TeachersController extends Controller
{
    public function index(): void
    {
        $teachers = (new Teacher())->find()->fetch(true);
        echo $this->render('teachers', [
            'title' => CONF_SITE_NAME . ' Teachers',
            'teachers' => $teachers,

        ]);
    }

    public function add()
    {
        $teachers = (new Teacher());
        echo $this->render('teachers:add');

        $teachers->save();

        if ($teachers()->save()) {
            echo $this->render('teachers:index', [
                'message' => 'Professor Adicionado',
            ]);
        } else {
            echo $this->render('teachers:index', [
                'message' => 'Erro ao adicionar Professor',
            ]);
        }
    }

    public function edit($id)
    {

    }

    public function inative($id)
    {

    }
}