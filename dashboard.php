<?php
/**
 * Template Name: dashboard
 *
 */

 get_header();
 ?>

<main class="dashboard-page light-t">

    <div id="dash-framer">
        <iframe id="dash-grafana" style="height: 100%;width: 100%;position: absolute;"
            src="https://dashboard.hypha.earth/d/cYCoB3lnz/hypha-dao-light-teme?orgId=1&from=1641013200000&to=1652151764409"
            width="100%" height="auto" frameborder="0"></iframe>
    </div>

</main>

<div id="scroll_top"></div>


<?php get_footer(); ?>