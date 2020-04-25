<?php

// will print content inside "<head>"
add_action('wp_head', function () {
    print('<meta name="my-meta" content="my-content"/>');
});

