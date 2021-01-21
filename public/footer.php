<!-- 鱼群跳跃 -->
<?php if ($this->options->JFishStatus === "top") : ?>
    <div id="j-fish-skip"></div>
<?php endif; ?>

<section class="container-fluid j-footer">
    <?php if ( $this->options->JFootRecommend && !$this->is('author') ): ?>
        <?php $this->need('component/footer.recommend.php'); ?>
    <?php endif; ?>
    <section class="site-info clearfix">
        <div class="container">
            <div class="footer-left">
                <div class="footer-l-top">
                    <?php $this->options->JFooternavs(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <section class="banquan">
            <?php if ($this->options->JBanQuan) : ?>
                <span class="info"><?php $this->options->JBanQuan() ?></span>
            <?php else : ?>
                <span class="info">2019 - 2021 © Reach - <a href="//ae.js.cn">Joe</a></span>
            <?php endif; ?>
            <?php if ($this->options->JCountTime === 'on') : ?>
                <svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M872 64c13.2544 0 24 10.7456 24 24 0 13.2544-10.7456 24-24 24h-104v177.456c0 67.0672-36.4912 128.8224-95.2368 161.1744l-111.0816 61.1744 111.328 61.536C731.6176 605.7328 768 667.4112 768 734.376V912h104c13.2544 0 24 10.7456 24 24 0 13.2544-10.7456 24-24 24H152c-13.2544 0-24-10.7456-24-24 0-13.2544 10.7456-24 24-24h104V734.544c0-67.0672 36.4912-128.8224 95.2368-161.1744l111.08-61.176-111.328-61.5328C292.3824 418.2656 256 356.5872 256 289.6224V112H152c-13.2544 0-24-10.7456-24-24 0-13.2544 10.7456-24 24-24h720zM512.4 539.4112l-138.0064 76.0032A136 136 0 0 0 304 734.544V912h416V734.3776a136 136 0 0 0-70.2096-119.0272l-137.3904-75.9392zM720 112H304v177.6224a136 136 0 0 0 70.2096 119.0272l137.3904 75.9392 138.0064-76.0032A136 136 0 0 0 720 289.456V112z" fill="#979797" p-id="2750"></path>
                </svg>
                <span class="time"><?php echo timerStop(); ?></span>
            <?php endif; ?>
        </section>
        <section class="banquan-links">
            <?php if ($this->options->JBanQuanLinks) : ?>
                <?php $this->options->JBanQuanLinks() ?>
            <?php else : ?>
                <a href="//ae.js.cn">JOE</a>
                <a target="_blank" rel="noopener" href="<?php $this->options->feedUrl(); ?>">RSS</a>
                <a target="_blank" rel="noopener" href="<?php echo $this->options->index . "/sitemap.xml" ?>">MAP</a>
            <?php endif; ?>
        </section>
    </section>
</section>

<!-- 鱼群跳跃 -->
<?php if ($this->options->JFishStatus === "bottom") : ?>
    <div id="j-fish-skip"></div>
<?php endif; ?>

<section class="j-actions">
    <section class="item" id="backToTop">
        <svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path d="M725.902222 498.915556c18.204444-251.448889-93.297778-410.737778-205.368889-475.591112l-6.257777-3.982222-6.257778 3.413334c-111.502222 64.853333-224.711111 224.142222-204.8 475.591111-55.751111 53.475556-80.213333 116.622222-80.213334 204.8v15.36l179.2-35.271111c11.377778 40.391111 58.595556 69.973333 113.208889 69.973333 54.613333 0 101.262222-29.582222 112.64-68.835556l180.337778 36.408889V705.422222c-0.568889-89.884444-25.031111-153.6-82.488889-206.506666zM571.733333 392.533333c-33.564444 31.288889-87.04 28.444444-118.328889-5.12s-28.444444-87.04 5.12-117.76c33.564444-31.288889 87.04-28.444444 118.328889 5.12s28.444444 86.471111-5.12 117.76zM515.413333 761.173333c-35.84 0-64.284444 29.013333-64.284444 64.284445 0 35.84 54.044444 182.613333 64.284444 182.613333s64.284444-146.773333 64.284445-182.613333c0-35.271111-29.013333-64.284444-64.284445-64.284445z" fill="" p-id="10602"></path>
        </svg>
    </section>
    <?php if ($this->options->JDayNight === 'on') : ?>
        <div class="item light" id="j-day-night">
            <svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M768 608c-6.7 0-13.4-2.1-19.2-6.4-14.1-10.6-17-30.7-6.4-44.8C780.1 506.7 800 446.9 800 384c0-158.8-129.2-288-288-288S224 225.2 224 384c0 62.9 19.9 122.7 57.6 172.8 10.6 14.1 7.8 34.2-6.4 44.8-14.1 10.6-34.2 7.8-44.8-6.4C184.3 533.9 160 460.9 160 384c0-194.1 157.9-352 352-352s352 157.9 352 352c0 76.9-24.3 149.9-70.4 211.2-6.3 8.4-15.9 12.8-25.6 12.8z" p-id="1779"></path>
                <path d="M384 800c-10.3 0-20.5-5-26.7-14.3l-128-192c-9.8-14.7-5.8-34.6 8.9-44.4 14.8-9.8 34.6-5.8 44.4 8.9l128 192c9.8 14.7 5.8 34.6-8.9 44.4-5.4 3.7-11.6 5.4-17.7 5.4z m256 0c-6.1 0-12.3-1.8-17.7-5.4-14.7-9.8-18.7-29.7-8.9-44.4l128-192c9.8-14.7 29.6-18.7 44.4-8.9 14.7 9.8 18.7 29.7 8.9 44.4l-128 192C660.5 795 650.3 800 640 800z m0 96H384c-17.7 0-32-14.3-32-32s14.3-32 32-32h256c17.7 0 32 14.3 32 32s-14.3 32-32 32z m0 96H384c-17.7 0-32-14.3-32-32s14.3-32 32-32h256c17.7 0 32 14.3 32 32s-14.3 32-32 32zM512 544c-4.8 0-9.7-1.1-14.3-3.4-15.8-7.9-22.2-27.1-14.3-42.9l40.8-81.7H448c-11.1 0-21.4-5.8-27.2-15.2s-6.4-21.2-1.4-31.1l64-128c7.9-15.8 27.1-22.2 42.9-14.3 15.8 7.9 22.2 27.1 14.3 42.9L499.8 352H576c11.1 0 21.4 5.8 27.2 15.2s6.4 21.2 1.4 31.1l-64 128C535 537.5 523.7 544 512 544z" p-id="1780"></path>
            </svg>
        </div>
    <?php endif; ?>
</section>

<audio id="j-hover-music" autoplay="autoplay"></audio>

<!--<div class="j-video-preview j-modal-mask">-->
<!--    <div class="container">-->
<!--        <iframe src="--><?php //echo THEME_URL . '/player.php?url=' ?><!--" scrolling="no" allowfullscreen="allowfullscreen" frameborder="0"></iframe>-->
<!--    </div>-->
<!--    <svg class="close" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">-->
<!--        <path d="M6.713 512C6.713 232.562 233.13 6.2 512 6.2c278.926 0 505.287 226.362 505.287 505.288V512A504.718 504.718 0 0 1 512 1017.287 505.116 505.116 0 0 1 6.713 512z m539.079 0l176.47-176.47a22.983 22.983 0 0 0 0-32.71l-1.082-1.081a22.983 22.983 0 0 0-32.71 0L512 478.72 335.53 301.739a22.983 22.983 0 0 0-32.71 0l-1.081 1.08a22.983 22.983 0 0 0 0 32.712l176.469 176.981-176.47 176.47a22.983 22.983 0 0 0 0 32.767l1.082 1.024a22.983 22.983 0 0 0 32.71 0L512 546.304l176.47 176.47a22.983 22.983 0 0 0 32.71 0l1.081-1.025a22.983 22.983 0 0 0 0-32.768L545.792 512z" p-id="13836"></path>-->
<!--    </svg>-->
<!--</div>-->

