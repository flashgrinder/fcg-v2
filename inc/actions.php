<?php

    add_action( 'wp_footer', function() {

    ?>

        <script>
            var title = $(document).attr('title');
            $('input[name="text-564"]').val(' | ' + title);
            console.log(title);
        </script>

    <?php

    }, 20);