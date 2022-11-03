<?php
get_header();?>

<div id="entirecontent">
    <div class="divsides">
    <?php
    get_sidebar();?>
    </div>
    
    <div class="container">
        <?php get_template_part('template-parts/masonry','index');?>
    </div>
    
    <div class="divsides">
    </div>
</div>

<?php
get_footer();?>

<!-- put another div around everything, control size here, give percentage and max size like 1200px. if that div gets to small then switch to mobile mode 
put sidebar above right at the top out of the main div
maybe put another empty div afterwards and give it the same class as the first. then give them the same class so I can control them. give them a fixed width and make disappear on mobile
give main body max width of 1200px and sides a min width
use flexbox to fix the space-filling issues (better than using percentages)

to fix the padding issue with the tiles, try and add padding in the header as well to line it up
-->