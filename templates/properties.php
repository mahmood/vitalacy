<?php
$config = $GLOBALS['config'];
$pro1 = array('title'=>$config['properties_1_title'], 'desc'=>$config['properties_1_desc']);
$pro2 = array('title'=>$config['properties_2_title'], 'desc'=>$config['properties_2_desc']);
$pro3 = array('title'=>$config['properties_3_title'], 'desc'=>$config['properties_3_desc']);
$active = $config['properties-is-active'];
?>
<?php if($active == true): ?>
<section class='properties'>
    <div class='transparent'>
        <img src='<?php bloginfo('template_url') ?>/assets/img/icon-transparent.png' width='65'>
        <div>
            <h4><?= $pro2['title'] ?></h4>
            <p>
                <?= $pro2['desc'] ?>
            </p>
        </div>
    </div>

    <div class='life-saving'>
        <img src='<?php bloginfo('template_url') ?>/assets/img/icon-life-saving.png' width='65'>
        <div>
            <h4><?= $pro1['title'] ?></h4>
            <p>
                <?= $pro1['desc'] ?>
            </p>
        </div>
    </div>

    <div class='habit-changing'>
        <img src='<?php bloginfo('template_url') ?>/assets/img/icon-habit-changing.png' width='65'>
        <div>
            <h4><?= $pro3['title'] ?></h4>
            <p>
               <?= $pro3['desc'] ?>
            </p>
        </div>
    </div>
</section>
<?php endif ?>