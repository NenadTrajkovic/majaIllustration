
<?php

    function majaillustration_files() {
        wp_enqueue_script("majaillustration_main_script", get_theme_file_uri("./js/index.js"), NULL, "1.0", true);
        wp_enqueue_script("majaillustration_scroll", get_theme_file_uri("./js/scroll.js"), NULL, "1.0", true);
        wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css");
        wp_enqueue_style("majaillustration_main_styles", get_stylesheet_uri());
    }
    add_action("wp_enqueue_scripts", "majaillustration_files");
    

    function majaillustration_features() {
        add_theme_support("custom-header");
        add_theme_support("title-tag");
        add_theme_support("post-thumbnails"); 
        add_theme_support("custom-logo");
        add_theme_support("automatic-feed-links");
        // Registering navigation menu
        register_nav_menu( "MainMenu", "Main Menu" );
        register_nav_menu( "HamburgerMenu", "Hamburger Menu" );
        register_nav_menu( "CollectionsMenu", "Collections Menu" );
    }
    add_action("after_setup_theme", "majaillustration_features");

    // remove width & height attributes from images
    //
    function remove_img_attr ($html) {
        return preg_replace('/(width|height)="\d+"\s/', "", $html);
    }  
    add_filter( "post_thumbnail_html", "remove_img_attr");

    // Register sidebar
    function theme_slug_widgets_init() {
        register_sidebar( array(
            'name' => __( 'Main Sidebar', 'theme-slug' ),
            'id' => 'sidebar-1',
            'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'theme_slug_widgets_init' );

?>

<?php
    // Overriding div, ul, li leaving only a attribute inside navigation menu
  class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {  
      public function start_lvl( &$output, $depth = 0, $args = array() ) {
          if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
              $t = '';
              $n = '';
          } else {
              $t = "\t";
              $n = "\n";
          }
          $indent = str_repeat( $t, $depth );

          $output .= "{$n}{$indent}{$n}";
      }

      public function end_lvl( &$output, $depth = 0, $args = array() ) {
          if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
              $t = '';
              $n = '';
          } else {
              $t = "\t";
              $n = "\n";
          }
          $indent = str_repeat( $t, $depth );
          $output .= "{$n}";
      }

      public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
          if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
              $t = '';
              $n = '';
          } else {
              $t = "\t";
              $n = "\n";
          }
          $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

          $classes = empty( $item->classes ) ? array() : (array) $item->classes;
          $classes[] = 'menu-item-' . $item->ID;

          $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

          $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );  

          $atts = array();
          $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
          $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
          $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
          $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
          $atts['class']  = ! empty( $class_names )      ? $class_names      : '';

          $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

          $attributes = '';
          foreach ( $atts as $attr => $value ) {
              if ( ! empty( $value ) ) {
                  $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                  $attributes .= ' ' . $attr . '="' . $value . '"';
              }
          }


          $title = apply_filters( 'the_title', $item->title, $item->ID );

          $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

          $item_output = $args->before;
          $item_output .= '<a'. $attributes .'>';
          $item_output .= $args->link_before . $title . $args->link_after;
          $item_output .= '</a>';
          $item_output .= $args->after;

          $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
      }

      public function end_el( &$output, $item, $depth = 0, $args = array() ) {
          if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
              $t = '';
              $n = '';
          } else {
              $t = "\t";
              $n = "\n";
          }
          $output .= "{$n}";
      }
  }