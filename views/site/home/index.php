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

        <?php
                $i = 0;
                foreach ($this->trending_now as $anime) :
                ?>
                    <article class="splide__slide anime_i" data-aos="fade-up" data-aos-delay="<?php echo $i ?>00">
                        <a href="toon/<?php echo $anime['slug'] ?>">
                            <figure class="thumb">
                             </figure>
                            <h1 class="text"><?php echo $anime['name'] ?></h1>
                            <div class="flex justify-between align-center">
                                <h2>Original</h2>
                                <h3>Dub | Leg</h3>
                            </div>
                        </a>
                    </article>
                <?php $i++;
                endforeach ?>
    </section>
</main>
