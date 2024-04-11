<!-- style-admin.css -->
<?php
    if (sizeof($_POST) > 1){
        header('Location: /admin');
    }

    if (isset($alert)){
        echo $alert;
    }
?>
<main>
    <h1>ADMIN PAGE</h1>
    <button onclick="window.location.href = '/logout'">Sair</button>
    <section class="pessoal">
        <div class="img" style="background-image: url('<?= $adminPFP ?>')"></div>
        <h1>Lucas Leme</h1>
        <div class="btns">
            <button><i class="fa-solid fa-pen-to-square fa-2xl"></i></button>
        </div>
    </section>
    <button id="addProjeto" onclick="window.location.href = '/admin/add'"><i class="fa-solid fa-plus"></i>Add Projeto</button>
    <section class="projetos">
        <?php
            foreach($projects as $id => $project): ?>
                <div class="projeto">
                    <div class="img" style="background-image: url('<?= $images[$id][0] ?>')"></div>
                    <div class="apresentacao">
                        <h1><?= $project->nm_projeto ?></h1>
                    </div>
                    <div class="btns">
                        <button onclick="window.location.href = '/admin/edit/<?= $id ?>'"><i class="fa-solid fa-pen-to-square fa-2xl"></i></button>
                        <button onclick="deleteProject(<?= $id ?>)"><i class="fa-solid fa-trash fa-2xl"></i></button>
                    </div>
                </div>
        <?php endforeach; ?>
    <!--
        <div class="projeto">
            <div class="img"></div>
            <div class="apresentacao">
                <h1>Titulo</h1>
            </div>
            <div class="btns">
                <button><i class="fa-solid fa-pen-to-square fa-2xl"></i></button>
                <button><i class="fa-solid fa-trash fa-2xl"></i></button>
            </div>
        </div>
    -->
    </section>
</main>
