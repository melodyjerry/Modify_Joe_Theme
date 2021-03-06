<?php $this->related(4)->to($relatedPosts); ?>
<?php if ($relatedPosts->have()) : ?>
    <div class="related">
        <div class="title">相关推荐</div>
        <ul>
            <?php while ($relatedPosts->next()) : ?>
                <li>
                    <a href="<?php $relatedPosts->permalink(); ?>">
                        <img class="lazyload" src="<?php echo GetLazyLoad() ?>" data-src="<?php GetRandomThumbnail($relatedPosts); ?>" alt="">
                        <span><?php $relatedPosts->title(); ?></span>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>