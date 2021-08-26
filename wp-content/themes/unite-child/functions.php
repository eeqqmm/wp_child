<?php
require_once get_theme_file_path('inc/terms.php');
require_once get_theme_file_path('inc/post_types.php');




/**
 *  return transient if not exist
 *
 * @param string $transient
 * @param string $WP_Query_string
 * @return  from query posts
 */
function get_transient_from_query_string($transient,$WP_Query_string)
{
    if (false === get_transient($transient)) {
        $special_query_results = new WP_Query($WP_Query_string);
        set_transient($transient, $special_query_results);
    }
    wp_reset_query();
    return get_transient($transient);
}
