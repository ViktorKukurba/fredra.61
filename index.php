<?php get_header(); ?>
<div id="busy-indicator">
    <svg class="circular">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>

<div class="container">
    <ui-view/>
</div>

<?php get_footer(); ?>