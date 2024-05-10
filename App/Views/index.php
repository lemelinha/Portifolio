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
                <div class="projeto">
                        <div class="carousel-container">
                            <span></span>
                            <div id="<?= $id ?>"></div>
                            <div class="btns">
                                <button id="previous" onclick="previousImage(<?= $id ?>)"></button>
                                <button id="next" onclick="nextImage(<?= $id ?>)"></button>
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
            <?php endforeach; 
            // carregando as primeiras imagens de cada carousel
            $imagesDecoded = $this->images;
            $CarouselOnWindowLoad = "";
            foreach($imagesDecoded as $id => $image){
                $imageLoad = $imagesDecoded->$id;
                $CarouselOnWindowLoad .= "document.getElementById('$id').style.backgroundImage = \"url('". $imageLoad ."')\";\n";
            }
    
            echo "
                <script>
                    const images = " . str_replace('\/', '/', $this->images) . ";
                    console.log(images);
                    window.onload = () => { $CarouselOnWindowLoad };
                </script>"; ?>
            </section>
    </main>
</body>
</html>
