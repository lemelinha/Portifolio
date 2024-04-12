<header>
    <img src="<?= $adminInfo->cd_caminho_pfp ?>" alt="Foto Pessoal">
    <h1>Lucas Leme</h1>
    <button type="button" class="btn" onclick="window.open('<?= $adminInfo->cd_caminho_curriculo ?>', '_blank')">Baixar Currículo</button>
    <nav>
        <a href="<?= $adminInfo->lk_github ?>" target="_blank"><i class="fa-brands fa-square-github fa-2xl"></i></a>
        <a href="<?= $adminInfo->lk_linkedin ?>" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
    </nav>
</header>
<main>
    <section class="sobre-mim">
        <h2>Sobre Mim</h2>
        <p>
            <?= $adminInfo->ds_sobre_mim ?>
        </p>
    </section>
    <section class="tecnologias">
        <h2>Tecnologias</h2>
        <p>
            <?= $adminInfo->ds_tecnologias ?>
        </p>
    </section>
    <section class="projetos-container">
        <?php
            // printando os projetos
            foreach($projects as $id => $project): ?>
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
                        <h2><?= $project->nm_projeto ?></h2>
                        <div class="descricao">
                            <p><?= $project->ds_projeto ?></p>
                        </div>
                        <div class="links">
                            <?= $project->lk_github!=null?"<a href='{$project->lk_github}'>Visualizar no GitHub</a>":'' ?>
                            <?= $project->lk_expo!=null?"<a href='{$project->lk_expo}'>Visualizar no Expo</a>":'' ?>
                            <?= $project->lk_online!=null?"<a href='{$project->lk_online}'>Visualizar Online</a>":'' ?>
                        </div>
                    </div>
                </div>
        <?php endforeach; 
        // carregando as primeiras imagens de cada carousel
        $imagesDecoded = json_decode($images);
        $CarouselOnWindowLoad = "";
        foreach($imagesDecoded as $id => $image){
            $imageLoad = $imagesDecoded->$id[0];
            $CarouselOnWindowLoad .= "document.getElementById('$id').style.backgroundImage = \"url('". $imageLoad ."')\";\n";
        }

        echo "
            <script>
                const images = " . str_replace('\/', '/', $images) . ";
                console.log(images);
                window.onload = () => { $CarouselOnWindowLoad };
            </script>"; ?>
        </section>
</main>
