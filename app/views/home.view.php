<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio</title>
    <link rel="stylesheet" href="<?= CSS . 'style.css'?>">
    <script src="https://kit.fontawesome.com/cdd96683ff.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <img src="<?= ASSETS . 'personal/PFP.jfif' ?>" alt="Foto Pessoal">
        <h1>Lucas Leme</h1>
        <nav>
            <a href="#" target="_blank"><i class="fa-brands fa-square-github fa-2xl"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
        </nav>
    </header>
    <main>
        <section class="sobre-mim">
            <h2>Sobre Mim</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, blanditiis error? Doloribus non, qui ab iure minima magni rem, porro ex repellendus dignissimos error similique doloremque rerum, maxime a dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione laborum ipsa asperiores, quibusdam ut exercitationem suscipit reiciendis maiores quidem eaque voluptate rem accusantium quod harum magnam facilis quos quasi explicabo.

            </p>
        </section>
        <section class="tecnologias">
            <h2>Tecnologias</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias similique blanditiis tempore rerum ut culpa facere iusto temporibus quis cupiditate ullam sapiente est reiciendis amet, fugit quam. Repudiandae, quod rerum.
            </p>
        </section>
        <section class="projetos-container">
            <?php
            $CarouselOnLoad = "";
            foreach(json_decode($images) as $key => $image){
                $imageLoad = json_decode($images)->$key[0];
                $CarouselOnLoad .= "document.getElementById($key).style.backgroundImage = 'url('". $imageLoad ."')';";
            }
            echo $CarouselOnLoad;
            

            echo "
                <script>
                    const images = " . str_replace('\/', '/', $images) . ";
                    console.log(images);
                    window.load = () => {
                        $CarouselOnLoad
                    }
                </script>
            ";

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
                        </div>
                    </div>
            <?php endforeach; ?>
                <!--
                    <div class="projeto">
                        <div class="carousel-container">
                            <span></span>
                            <div id="1"></div>
                            <div class="btns">
                                <button id="previous" onclick="previousImage(1)"></button>
                                <button id="next" onclick="nextImage(1)"></button>
                            </div>
                        </div>
                        <script src="<?= JS . 'script.js' ?>"></script>
                        <div class="sobre-projeto">
                            <h2>Titulo</h2>
                            <div class="descricao">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum, officiis necessitatibus quis reprehenderit omnis esse reiciendis optio architecto quo aliquam voluptates, minus aspernatur consequuntur pariatur debitis illum expedita, fuga ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia natus cum et aut dolorum delectus voluptatem labore iure velit ullam, sunt, magnam repellat exercitationem, rem rerum illo assumenda repudiandae deserunt.
                            </div>
                        </div>
                    </div>
                -->
                <script src="<?= JS . 'script.js' ?>"></script>
            </section>
    </main>
</body>
</html>