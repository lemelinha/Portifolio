<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas Leme</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/images/icon.png" type="image/x-icon">
</head>
<body id="index">
    <header>
        <img src="/<?= $this->adminInfo->pfp ?>" alt="Foto Pessoal">
        <h1>Lucas Leme</h1>
        <a type="button" class="btn" href="<?= $this->adminInfo->curriculo ?>" target="_blank">Baixar Currículo</a>
        <nav>
            <a href="<?= $this->adminInfo->github ?>" target="_blank"><i class="fa-brands fa-square-github fa-2xl"></i></a>
            <a href="<?= $this->adminInfo->linkedin ?>" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
        </nav>
    </header>
    <main>
        <section class="sobre-mim">
            <h2>Sobre Mim</h2>
            <p>
                <?= $this->adminInfo->sobre_mim ?>
            </p>
        </section>
        <section class="tecnologias">
            <h2>Tecnologias</h2>
            <p>
                <?= $this->adminInfo->tecnologias ?>
            </p>
        </section>
        <section class="projetos-container">
            <?php
                // printando os projetos
                foreach($this->projects as $id => $project): ?>
                    <div class="projeto" id="<?= $id ?>">
                        <div class="carousel-container">
                            <?php foreach($this->images[$id] as $image): ?>
                                <img src="/<?= $image ?>" style="<?= array_search($image, $this->images[$id])==0?'display: block':'display: none' ?>">
                            <?php endforeach; ?>
                            <div class="btns">
                                <button class="previous" id="<?= $id ?>"></button>
                                <button class="next" id="<?= $id ?>"></button>
                            </div>
                        </div>
                        <div class="sobre-projeto">
                            <h2><?= $project->nome ?></h2>
                            <div class="descricao">
                                <?= $project->descricao ?>
                            </div>
                            <div class="links">
                                <?= $project->github!=null?"<a href='{$project->github}' target='_blank'>Visualizar no GitHub</a>":'' ?>
                                <?= $project->expo!=null?"<a href='{$project->expo}' target='_blank'>Visualizar no Expo</a>":'' ?>
                                <?= $project->online!=null?"<a href='{$project->online}' target='_blank'>Visualizar Online</a>":'' ?>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
            </section>
            <!-- Font Awesome -->
            <script src="https://kit.fontawesome.com/cdd96683ff.js" crossorigin="anonymous"></script>

            <!-- JQuery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <script src="/assets/js/script.js"></script>
    </main>
</body>
</html>
