<?php $this->layout('_theme');
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h3 mb-2 text-gray-800 text-dark">Professores</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Email</th>
                            <th>Criado</th>
                            <th>Alterado</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($teachers as $teacher): ?>
                            <tr>
                                <th><?= $teacher->id ?></th>
                                <th><?= $teacher->first_name ?></th>
                                <th><?= $teacher->last_name ?></th>
                                <th><?= $teacher->email ?></th>
                                <th><?= $teacher->created_at ?></th>
                                <th><?= $teacher->updated_at ?></th>
                                <th>
                                    <a href="<?= url("view/{$teacher->id}") ?>">
                                        <button class="btn-sm btn-outline-primary">Ver</button>
                                    </a>
                                    <a href="<?= url("edit/{$teacher->id}") ?>">
                                        <button class="btn-sm btn-outline-warning">Editar</button>
                                    </a>
                                    <a href="<?= url("inactive/{$teacher->id}") ?>">
                                        <button class="btn-sm btn-outline-dark">Inativar</button>
                                    </a>

                                </th>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>