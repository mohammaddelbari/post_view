/*
use key =>> post_view
*/
function set_post_view_custom_field() {
    if ( is_single() ) {
        global $post;
        $post_id = $post->ID;
        $count = 1;
        $post_view = get_post_meta( $post_id, 'post_view', true );
        if ( $post_view_count ) {
            $count = $post_view + 1;
        }
        update_post_meta( $post_id, 'post_view', $count );
    }
}
add_action( 'wp_head', 'set_post_view_custom_field' );
