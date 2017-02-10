<?php
$config = $GLOBALS['config'];
$active = $config['problem-is-active'];
?>
<?php if($active == true): ?>
<section class='problem' id='problem'>
    <h1>The Problem</h1>

    <div class='slideshow'>
        <div class='slide'>
            <div class='stats-left'>
                <i class='circle'></i>
                <p><span class='big'>70%</span> of all HAIs are directly caused by poor hand hygiene.</p>
                <p>HAI <span class='somewhat-big'>increases</span> the length of hospitalization.</p>
                <img src='<?php bloginfo('template_url') ?>/assets/img/red-detail.png' alt='details'>
            </div>
            <div class='stats-right no-tablet'>
                <p><span class='big'>100K</span> Americans are dying as a result of HAI every year.</p>
                <img src='<?php bloginfo('template_url') ?>/assets/img/red-population.png' alt='population'>
                <img src='<?php bloginfo('template_url') ?>/assets/img/red-population.png' alt='population'>
                <img src='<?php bloginfo('template_url') ?>/assets/img/red-population.png' alt='population'>

                <p class='year'>x365</p>
            </div>
        </div>

        <div class='slide'>
            <div class='left no-tablet'>
                <img src='<?php bloginfo('template_url') ?>/assets/img/illustration-population-statistics.png'>
            </div>
            <div class='right'>
                <div class='percents tablet'>
                    <p><span class='red'>15%</span> of men don't wash at all</p>
                    <p><span class='red'>33%</span> of people don't use soap</p>
                    <p><span class='red'>95%</span> of people are using cutting corners</p>
                </div>
                <img src='<?php bloginfo('template_url') ?>/assets/img/problem-slide2-hand.png'>
                <div class='description'>
                    <p class='red'>6 seconds</p>
                    <p>
                        is the average hand-washing time, far below CDC’s recommended 20 seconds duration.
                    </p>
                    <img src='<?php bloginfo('template_url') ?>/assets/img/problem-slide2-bacteria.png'>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>