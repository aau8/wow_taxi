<?php 
add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');

function add_styles() { // добавляем стили
  // wp_enqueue_style('ugryumov-blog-style.css', get_stylesheet_uri() );
  wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/assets/vendor/swiper-bundle.min.css');
  wp_enqueue_style('temporarily-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
};

function add_scripts() { // добавляем скрипты
	// wp_enqueue_script('jquery', $in_footer=false);
    // wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null);
	// wp_enqueue_script('jquery-suggestions', get_stylesheet_directory_uri() . '/assets/vendor/jquery.suggestions.min.js', array(), null, true);
	wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/assets/vendor/swiper-bundle.min.js', array(), null, true);
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true);
};

add_action('after_setup_theme', function() {
  add_theme_support('custom-logo'); // кастомный логотип
  add_theme_support('menus'); // редактирование меню
  add_theme_support('post-thumbnails'); // изображение записи 

  register_nav_menus([ // добавляем выбор нахождения меню (в шапке или в футере)
    'header-menu' => 'Верхнее меню',
    'footer-menu' => 'Нижнее меню'
  ]);
});

add_filter('excerpt_length', function() {
  return 35;
});

add_filter('excerpt_more', function($more) {
  return '...';
});

// Колонка "ID" в админке
add_action('admin_init', 'admin_area_ID');
function admin_area_ID() {
	// для таксономий (рубрик, меток и т.д.)
	foreach (get_taxonomies() as $taxonomy) {
		add_action("manage_edit-${taxonomy}_columns",          'tax_add_col');
		add_filter("manage_edit-${taxonomy}_sortable_columns", 'tax_add_col');
		add_filter("manage_${taxonomy}_custom_column",         'tax_show_id', 10, 3);
	}
	add_action('admin_print_styles-edit-tags.php', 'tax_id_style');
	function tax_add_col($columns) {return $columns + array ('tax_id' => 'ID');}
	function tax_show_id($v, $name, $id) {return 'tax_id' === $name ? $id : $v;}
	function tax_id_style() {print '<style>#tax_id{width:4em}</style>';}
	// для постов и страниц
	add_filter('manage_posts_columns', 'posts_add_col', 5);
	add_action('manage_posts_custom_column', 'posts_show_id', 5, 2);
	add_filter('manage_pages_columns', 'posts_add_col', 5);
	add_action('manage_pages_custom_column', 'posts_show_id', 5, 2);
	add_action('admin_print_styles-edit.php', 'posts_id_style');
	function posts_add_col($defaults) {$defaults['wps_post_id'] = __('ID'); return $defaults;}
	function posts_show_id($column_name, $id) {if ($column_name === 'wps_post_id') echo $id;}
	function posts_id_style() {print '<style>#wps_post_id{width:4em}</style>';}
}

// Хлебные крошки
function breadcrumbs() {

	/* === ОПЦИИ === */
	$text['home']     = 'Главная'; // текст ссылки "Главная"
	$text['category'] = '%s'; // текст для страницы рубрики
	$text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
	$text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
	$text['author']   = 'Статьи автора %s'; // текст для страницы автора
	$text['404']      = 'Ошибка 404'; // текст для страницы 404
	$text['page']     = 'Страница %s'; // текст 'Страница N'
	$text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

	$wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
	$wrap_after     = '</div>'; // закрывающий тег обертки
	$sep            = '<span class="breadcrumbs__separator">/</span>'; // разделитель между "крошками"
	$before         = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
	$after          = '</span>'; // тег после текущей "крошки"

	$show_on_home   = 1; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
	$show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
	$show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
	$show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
	/* === КОНЕЦ ОПЦИЙ === */

	global $post;
	$home_url       = home_url('/');
	$link           = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
	$link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
	$link          .= '<meta itemprop="position" content="%3$s" />';
	$link          .= '</span>';
	$parent_id      = ( $post ) ? $post->post_parent : '';
	$home_link      = sprintf( $link, $home_url, $text['home'], 1 );

	if ( is_home() || is_front_page() ) {

		if ( $show_on_home ) echo $wrap_before . $home_link . '<span class="breadcrumbs__separator">/</span><span class="breadcrumbs__current">Блог</span>' . $wrap_after;

	} else {

		$position = 0;

		echo $wrap_before;

		if ( $show_home_link ) {
			$position += 1;
			echo $home_link;
		}

		if ( is_category() ) {
			$parents = get_ancestors( get_query_var('cat'), 'category' );
			foreach ( array_reverse( $parents ) as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$cat = get_query_var('cat');
				echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_search() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $show_home_link ) echo $sep;
				echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_current ) {
					if ( $position >= 1 ) echo $sep;
					echo $before . sprintf( $text['search'], get_search_query() ) . $after;
				} elseif ( $show_last_sep ) echo $sep;
			}

		} elseif ( is_year() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_time('Y') . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_month() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_day() ) {
			if ( $show_home_link ) echo $sep;
			$position += 1;
			echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
			$position += 1;
			echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
			if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_single() && ! is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$position += 1;
				$post_type = get_post_type_object( get_post_type() );
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
				if ( $show_current ) echo $sep . $before . get_the_title() . $after;
				elseif ( $show_last_sep ) echo $sep;
			} else {
				$cat = get_the_category(); $catID = $cat[0]->cat_ID;
				$parents = get_ancestors( $catID, 'category' );
				$parents = array_reverse( $parents );
				$parents[] = $catID;
				foreach ( $parents as $cat ) {
					$position += 1;
					if ( $position > 1 ) echo $sep;
					echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
				}
				if ( get_query_var( 'cpage' ) ) {
					$position += 1;
					echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
					echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
				} else {
					if ( $show_current ) echo $sep . $before . get_the_title() . $after;
					elseif ( $show_last_sep ) echo $sep;
				}
			}

		} elseif ( is_post_type_archive() ) {
			$post_type = get_post_type_object( get_post_type() );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . $post_type->label . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_attachment() ) {
			$parent = get_post( $parent_id );
			$cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
			$parents = get_ancestors( $catID, 'category' );
			$parents = array_reverse( $parents );
			$parents[] = $catID;
			foreach ( $parents as $cat ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
			}
			$position += 1;
			echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_page() && ! $parent_id ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . get_the_title() . $after;
			elseif ( $show_home_link && $show_last_sep ) echo $sep;

		} elseif ( is_page() && $parent_id ) {
			$parents = get_post_ancestors( get_the_ID() );
			foreach ( array_reverse( $parents ) as $pageID ) {
				$position += 1;
				if ( $position > 1 ) echo $sep;
				echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
			}
			if ( $show_current ) echo $sep . $before . get_the_title() . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( is_tag() ) {
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				$tagID = get_query_var( 'tag_id' );
				echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_author() ) {
			$author = get_userdata( get_query_var( 'author' ) );
			if ( get_query_var( 'paged' ) ) {
				$position += 1;
				echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
				echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
			} else {
				if ( $show_home_link && $show_current ) echo $sep;
				if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
				elseif ( $show_home_link && $show_last_sep ) echo $sep;
			}

		} elseif ( is_404() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			if ( $show_current ) echo $before . $text['404'] . $after;
			elseif ( $show_last_sep ) echo $sep;

		} elseif ( has_post_format() && ! is_singular() ) {
			if ( $show_home_link && $show_current ) echo $sep;
			echo get_post_format_string( get_post_format() );
		}

		echo $wrap_after;

	}
}
 
// Пагинация
function wp_pagination( $args = array() ) {
    
    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( 'Previous', 'text-domain' ),
        'next_string'     => __( 'Next', 'text-domain' ),
        'before_output'   => '<div class="pagination__body">',
        'after_output'    => '</div>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    
    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
	$next = intval($page) + 1;

	// Блок с кнопками
	$echo .= '<div class="pagination__buttons">';

    $previous = esc_attr( get_pagenum_link($previous) );
	$disabled = '_disabled';
    if ( $previous && (1 != $page) ) {
		$disabled = '';
	}
	$echo .= '<a href="'.$previous.'" title="'.__( 'previous', 'text-domain').'" class="btn pagination-btn pagination-btn-prev '.$disabled.'">Назад</a>';
    
	$next = esc_attr( get_pagenum_link($next) );
	$disabled = '_disabled';
    if ($next && ($count != $page) ) {
		$disabled = '';
	}
	$echo .= '<a href="'.$next.'" title="'.__( 'next', 'text-domain').'" class="btn pagination-btn pagination-btn-next '.$disabled.'">Далее</a>';

	$echo .= '</div>';

	$echo .= '<ul class="pagination__pages">';

    if ( $previous && ($page >= 5) )
        $echo .= '<li><a href="'.esc_attr( get_pagenum_link(1) ).'" class="pagination__pages-link">1</a></li>';

    if ( $previous && ($page >= 5) )
        $echo .= '<li><span title="' . __( 'more', 'text-domain') . '" class="posts-pagination__text">...</span></li>';
        
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li><span class="pagination__pages-link current '.$min.'-'.$max.'-'.$i.'">' . str_pad( (int)$i, 2, ' ', STR_PAD_LEFT ) . '</span></li>';
            } else {
                $echo .= sprintf( '<li><a href="%s" class="pagination__pages-link">%2d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }

    $lastpage = esc_attr( get_pagenum_link($count) );
    if ( $lastpage && ($page < $count - 3) ) {
        $echo .= '<li><span title="' . __( 'more', 'text-domain') . '" class="posts-pagination__text">...</span></li>';
    }

    if ( $lastpage && ($page < $count - 3) ) {
        // $echo .= '<li class="next"><a href="' . $lastpage . '" class="pagination__pages-link">' . __( 'Last', 'text-domain' ) . '</a></li>';
        $echo .= '<li><a href="'.$lastpage.'" class="pagination__pages-link">'.$count.'</a></li>';
    }

	$echo .= '</ul>';

    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}

// Примерное время чтения статьи
if ( ! function_exists( 'get_read_time' ) ) {
	function get_read_time($id) {
		global $post;
		$text = get_the_content('','',$id);
		$words = str_word_count( strip_tags( $text ), 0, 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ' );
		if ( !empty( $words ) ) {
			$minutes = floor( $words / 201 );
			if ($minutes < 1) {
				$minutes = 1;
			}
			return $minutes;
		}
		return 0;
	}
}

// Добавление поля "Отрывок" в редакторе страниц
// add_post_type_support( 'page', array('excerpt', 'title') ); 

// Добавление класса menu-item-hide элементу меню (категории) у которого нет дочерних постов. В CSS этому элементу присваивается стиль display: none;
function menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top;
	$cat_id;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( $obj->menu_item_parent == 0 ) {
            // set the key of the parent
            $last_top = $key;
        } else {
			$cat_id = $sorted_menu_items[$last_top]->ID;
        }
    }

	$child_id;
	foreach ($sorted_menu_items as $key => $obj) {
		if ($obj->menu_item_parent == $cat_id) {
			if (get_category($obj->object_id)->count == 0) {
				$sorted_menu_items[$key]->classes['hide'] = 'menu-item-hide';
			}
		}
	}
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );

// Добавим подменю в меню админ-панели "Инструменты" (tools):
// add_action('admin_menu', 'register_my_custom_submenu_page');

// function register_my_custom_submenu_page() {
// 	add_submenu_page(
// 		'tools.php',
// 		'Gscore / UI-KIT',
// 		'Gscore / UI-KIT',
// 		'manage_options',
// 		'gscore_ui-kit',
// 		'my_custom_submenu_page_callback'
// 	);
// }

// function my_custom_submenu_page_callback() {
// 	include 'gscore-ui-kit.php';
// }