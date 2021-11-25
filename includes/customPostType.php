<?php


function domi_teams_cpt() {
    register_post_type('domi_teams_cpt',
        array(
            'labels'      => array(
                'name'               => _x('Team', 'General name', 'wptheme.smartfarming'),
                'singular_name'      => _x('Team', 'Singular name', 'wptheme.smartfarming'),
                'menu_name'          => _x('Teams', 'Menu name', 'wptheme.smartfarming'),
                'parent_item_colon'  => _x('Übergeordnetes Team', 'Parent item with colon', 'wptheme.smartfarming'),
                'all_items'          => _x('Alle Teams anzeigen', 'All items', 'wptheme.smartfarming'),
                'view_item'          => _x('Team anzeigen', 'View item', 'wptheme.smartfarming'),
                'add_new_item'       => _x('Team hinzufügen', 'Add new item', 'wptheme.smartfarming'),
                'add_new'            => _x('Team hinzufügen', 'Add new', 'wptheme.smartfarming'),
                'edit_item'          => _x('Team bearbeiten', 'Edit item', 'wptheme.smartfarming'),
                'update_item'        => _x('Team aktualisieren', 'Update item', 'wptheme.smartfarming'),
                'search_items'       => _x('Team suchen', 'Search items', 'wptheme.smartfarming'),
                'not_found'          => _x('Keine Teams gefunden.', 'Not found', 'wptheme.smartfarming'),
                'not_found_in_trash' => _x('Keine Teams im Papierkorb gefunden.', 'Not found in trash', 'wptheme.smartfarming'),
            ),
            'description'         => _x('Team Informationen', 'Description', 'wptheme.fcseisa08'),
            'supports'            => ['title', 'thumbnail'],
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'rewrite'             => false,
            'menu_icon'           => 'dashicons-groups',
        )
    );
}
add_action('init', 'domi_teams_cpt');
?>