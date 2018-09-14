<?php
/*----------------------------------------------------------------------
# BEAVER BUILDER LINK
------------------------------------------------------------------------*/
function igthemes_bb_upgrade_link() { 
    return 'https://www.wpbeaverbuilder.com/?fla=613'; 
}

add_filter( 'fl_builder_upgrade_url', 'igthemes_bb_upgrade_link' );
