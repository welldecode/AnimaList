<main>

    <section class="top container">
        <div class="top_content">
            <h1>A nova plataforma de anime da próxima geração</h1>
            <span>Acompanhe, compartilhe e descubra seus animes e mangás favoritos com o AnimaList.</span>
        </div>
    </section>

    <section class="dashboard_container">
        <div class="container">
            <div class="dashboard_content">
                <div class="left_info">
                    <div class="title_dashboard">Verão 2023 Animes</div>

                    <section class="items_content splide splide_dashboard">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php
                                $i = 0;
                                foreach ($this->trending_now as $anime) :
                                ?>
                                    <article class="splide__slide anime_i" data-aos="fade-up" data-aos-delay="<?php echo $i ?>00">
                                        <a href="toon/<?php echo $anime['slug'] ?>">
                                            <figure class="thumb">
                                                <img src="/public/uploads/<?= $anime['slug'] . ".jpg" ?>" alt="">
                                            </figure>
                                            <h1 class="text"><?php echo $anime['info']['name'] ?></h1>

                                            <div class="info_card">
                                                <div class="top_card">
                                                    <ul class="gerens">
                                                        <li>Ação</li>
                                                        <li>Comedia</li>
                                                    </ul>
                                                    <div class="eps"><span>24 Temporadas</span> <span>1067 Episódios</span></div>
                                                </div>
                                                <div class="title"><?php echo $anime['info']['synopsis'] ?></div>
                                                <div class="footer_card">
                                                    50 Usuarios
                                                </div>
                                            </div>
                                        </a>
                                    </article>
                                <?php $i++;
                                endforeach ?>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="right_info">
                    <div class="title_dashboard">Artigos em Destaque</div>

                </div>
            </div>
        </div>
    </section>
    <section class="descutions">
        <div class="container">
            <article class="news-unit">
                <a href="#">
                    <h1>O que fez do Wonder Egg Priority um anime tão especial, parte 1</h1>
                    <p>Wonder Egg Priority é a primeira série de anime criada pelo roteirista de drama de televisão, Shinji Nojima. É um espetáculo único imbuído da paixão de sua jovem equipe de criadores. Nesta entrevista especial, perguntamos à equipe principal da série o que tornou o Wonder Egg Priority tão notável.</p>
                    <ul class="author-news">
                        <li>Por <span>Febri</span></li>
                        <li>50k Views</li>
                        <li>Spoiler</li>
                    </ul>
                </a>
            </article>
        </div>
    </section>
    <section class="trending container">
        <div class="titles">
            <h1>Tendência agora</h1>
            <h2>Veja as últimas tendências lançadas</h2>
        </div>

        <section class="items_content splide splide_popular">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    $i = 0;
                    foreach ($this->trending_now as $anime) :
                    ?>
                        <article class="splide__slide anime_i" data-aos="fade-up" data-aos-delay="<?php echo $i ?>00">
                            <a href="toon/<?php echo $anime['slug'] ?>">
                                <figure class="thumb">
                                <img src="<?= \core\Images::load_image($anime['slug'] . ".jpg", 255, 350) ?>" alt="">
                           
                                </figure>
                                <h1 class="text"><?php echo $anime['info']['name'] ?></h1>

                                <div class="info_card">
                                    <div class="top_card">
                                        <ul class="gerens">
                                            <li>Ação</li>
                                            <li>Comedia</li>
                                        </ul>
                                        <div class="eps"><span>24 Temporadas</span> <span>1067 Episódios</span></div>
                                    </div>
                                    <div class="title"><?php echo $anime['info']['synopsis'] ?></div>
                                    <div class="footer_card">
                                        50 Usuarios
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php $i++;
                    endforeach ?>
                </ul>
            </div>
        </section>

    </section>
</main>