<main>
    <section class="top container">
        <div class="top_content">
            <h1>A nova plataforma de anime da próxima geração</h1>
            <span>Acompanhe, compartilhe e descubra seus animes e mangás favoritos com o AnimaList.</span>
        </div>
    </section>

    <section class="trending container">
        <div class="titles">
            <h1>Trending Now</h1>
            <h2>see the latest trends released</h2>
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
                                    <img src="/public/uploads/<?= $anime['slug'] . ".jpg" ?>" alt="">
                                </figure>
                                <h1 class="text"><?php echo $anime['info']['name'] ?></h1>
                             
                            </a>
                        </article>
                    <?php $i++;
                    endforeach ?>
                </ul>
            </div>
        </section>

    </section>
</main>