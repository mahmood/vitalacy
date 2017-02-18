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
                <p>
                    <img alt="pie" src='<?php bloginfo('template_url') ?>/assets/img/pie@2x.png' width='71'></img>
                    <span class='big'>70%</span> of all HAIs are directly caused by poor hand hygiene.
                </p>
                <p>HAI <span class='somewhat-big'>increases</span> the length of hospitalization.</p>
                <img alt="red-detail" src='<?php bloginfo('template_url') ?>/assets/img/red-detail.png' alt='details'>
            </div>
            <div class='stats-right no-tablet'>
                <p><span class='big'>75K</span> Americans are dying as a result of HAI every year.</p>
                <img alt="population" src='<?php bloginfo('template_url') ?>/assets/img/red-population.png' alt='population'>
                <img alt="population2" src='<?php bloginfo('template_url') ?>/assets/img/red-population.png' alt='population'>
                <img alt="population3" src='<?php bloginfo('template_url') ?>/assets/img/red-population.png' alt='population'>

                <p class='year'>x365</p>
            </div>
        </div>

        <div class='slide'>
            <div class='left no-tablet'>
                <img alt="statistics" src='<?php bloginfo('template_url') ?>/assets/img/illustration-population-statistics.png'>
            </div>
            <div class='right'>
                <div class='percents tablet'>
                    <p><span class='red'>15%</span> of men don't wash at all</p>
                    <p><span class='red'>33%</span> of people don't use soap</p>
                    <p><span class='red'>95%</span> of people are using cutting corners</p>
                </div>
                <img alt="slide" src='<?php bloginfo('template_url') ?>/assets/img/problem-slide2-hand.png'>
                <div class='description'>
                    <p class='red'>6 seconds</p>
                    <p>
                        is the average hand-washing time, far below CDC’s recommended 20 seconds duration.
                    </p>
                    <img alt="bacteria" src='<?php bloginfo('template_url') ?>/assets/img/problem-slide2-bacteria.png'>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>