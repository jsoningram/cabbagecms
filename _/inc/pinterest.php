<?php												

function cabbagecms_pinterest_js() { ?>

    <!-- Pinterest widget -->
    <script type="text/javascript">
        (function(d){
            var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
            p.type = 'text/javascript';
            p.async = true;
            p.src = '//assets.pinterest.com/js/pinit.js';
            f.parentNode.insertBefore(p, f);
        }(document));
    </script>
    
<?php }

add_action('wp_footer', 'cabbagecms_pinterest_js');