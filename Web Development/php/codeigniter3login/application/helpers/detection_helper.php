<?php

function is_logged_in() {

    //untuk memanggil library CI di function, gunakan syntax get_instance()
    $ci = get_instance();
    if( !$ci->session->userdata('email') ) redirect('auth');
    else {
        
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);
        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];
        $userAcess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id, 
            'menu_id' => $menu_id
        ]);

        if( $userAcess->num_rows() < 1 ) redirect('auth/blocked');


        
    }
}

function is_logout() {

    $ci = get_instance();
    if( $ci->session->userdata('email') ) redirect('user');

}

function check_access( $role_id, $menu_id ) {

    $ci = get_instance();
    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    
    if( $ci->db->get('user_access_menu')->num_rows() > 0 ) return "checked='checked'";

}