<?php
$config = $GLOBALS['config'];
$active = $config['solutions-is-active'];
?>
<?php if($active == true): ?>
<section class='options' id='packages'>
    <h1>Solutions</h1>

    <div class='slideshow'>
        <div class='slide package-1'>
            <h4>Package 1: Dispenser Management</h4>
            <p>
                Track dispenser activity with top accuracy and identify the real numbers knowing exact soap and
                sanitizer usages.
            </p>

            <div class='images'>
                <img alt="heat" src='<?php bloginfo('template_url') ?>/assets/img/heat-map.png' width='424'/>
                <div class='includes'>
                    <p>Includes:</p>
                    <div class='items'>
                        <figure>
                            <img alt="web-portal" src='<?php bloginfo('template_url') ?>/assets/img/web-portal.png' width='100'>
                            <figcaption>Web Portal</figcaption>
                        </figure>
                        <figure>
                            <img alt="dispenser" src='<?php bloginfo('template_url') ?>/assets/img/dispenser.png' width='100'>
                            <figcaption>Dispenser Sensors</figcaption>
                        </figure>
                        <figure>
                            <img alt="gateways" src='<?php bloginfo('template_url') ?>/assets/img/gateways.png' width='100'>
                            <figcaption>Gateways</figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <a href='#pricing' class='btn' data-popup='pricep'>Request Pricing</a>
        </div>

        <div class='slide package-2'>
            <h4>Package 2: Advanced Reporting System</h4>
            <p>
                Know how often and for how long individuals are washing their hands providing them with feedback and
                reminders around their wash quality.
            </p>

            <div class='images'>
                <img alt="packageoptions" src='<?php bloginfo('template_url') ?>/assets/img/packageoptions-slide2-comp.jpg' width='495'/>
                <div class='includes'>
                    <p>Includes:</p>
                    <div class='items'>
                        <figure>
                            <img alt="packageoptions" src='<?php bloginfo('template_url') ?>/assets/img/packageoptions-slide2-reportingapp.png' width='100'/>
                            <figcaption>Reporting App</figcaption>
                        </figure>
                        <figure>
                            <img alt="wristband" src='<?php bloginfo('template_url') ?>/assets/img/packageoptions-slide2-wristband.png' width='100'/>
                            <figcaption>Wristband</figcaption>
                        </figure>
                        <p class='tag blue'>Advanced</p>
                    </div>
                    <div class='items'>
                        <figure>
                            <img alt="portal" src='<?php bloginfo('template_url') ?>/assets/img/web-portal.png' width='100'>
                            <figcaption>Web Portal</figcaption>
                        </figure>
                        <figure>
                            <img alt="dispenser" src='<?php bloginfo('template_url') ?>/assets/img/dispenser.png' width='100'>
                            <figcaption>Dispenser Sensors</figcaption>
                        </figure>
                        <figure>
                            <img alt="gateways" src='<?php bloginfo('template_url') ?>/assets/img/gateways.png' width='100'>
                            <figcaption>Gateways</figcaption>
                        </figure>
                        <p class='tag'>Basic</p>
                    </div>
                </div>
            </div>

            <a href='#pricing' class='btn' data-popup='pricep'>Request Pricing</a>
        </div>

        <div class='slide package-3'>
            <h4>Package 3: Comprehensive Safety Network</h4>
            <p>
                The world’s most accurate hygiene data providing you with the information needed to meet and beat
                compliance goals.
            </p>

            <div class='images'>
                <img alt="packageoptions" src='<?php bloginfo('template_url') ?>/assets/img/packageoptions-slide3-patientcare.jpg' width='445'/>
                <div class='includes'>
                    <p>Includes:</p>
                    <div class='items'>
                        <figure>
                            <img alt="locationbeacon" src='<?php bloginfo('template_url') ?>/assets/img/packageoptions-slide3-locationbeacon.png' width='100'/>
                            <figcaption class='blue'>Location Beacon</figcaption>
                        </figure>
                        <p class='tag blue'>Comprehensive</p>
                    </div>
                    <div class='items'>
                        <figure>
                            <img alt="reportingapp" src='<?php bloginfo('template_url') ?>/assets/img/packageoptions-slide2-reportingapp.png' width='100'/>
                            <figcaption>Reporting App</figcaption>
                        </figure>
                        <figure>
                            <img alt="packageoptions" src='<?php bloginfo('template_url') ?>/assets/img/packageoptions-slide2-wristband.png' width='100'/>
                            <figcaption>Wristband</figcaption>
                        </figure>
                        <p class='tag'>Advanced</p>
                    </div>
                    <div class='items'>
                        <figure>
                            <img alt="web-portal" src='<?php bloginfo('template_url') ?>/assets/img/web-portal.png' width='100'>
                            <figcaption>Web Portal</figcaption>
                        </figure>
                        <figure>
                            <img alt="dispenser" src='<?php bloginfo('template_url') ?>/assets/img/dispenser.png' width='100'>
                            <figcaption>Dispenser Sensors</figcaption>
                        </figure>
                        <figure>
                            <img alt="gateways" src='<?php bloginfo('template_url') ?>/assets/img/gateways.png' width='100'>
                            <figcaption>Gateways</figcaption>
                        </figure>
                        <p class='tag'>Basic</p>
                    </div>
                </div>
            </div>

            <a href='#pricing' class='btn' data-popup='pricep'>Request Pricing</a>
        </div>
    </div>
</section>
<?php endif; ?>