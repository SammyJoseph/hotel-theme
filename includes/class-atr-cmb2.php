<?php 

/* 
* Required para el archivo init de la librería CMB2
*/
require_once ATR_DIR_PATH . '/helpers/cmb2/init.php';

class ATR_CMB2{

    // Método para definir las metacajas y metacampos
    public function atr_cmb2_metaboxes(){

        // Iniciando la metacaja
        $cmb = new_cmb2_box(array(
            'id'            => 'pagina_inicio',
            'title'         => __('Test Metabox', 'cmb2'),
            'object_types'  => array('page',), //post type
            'show_on'       => array('key' => 'id', 'value' => array(17)),
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, //show field names on the left
        ));

        // Definiendo los metacampos
        // Regular text field
        $cmb->add_field(array(
            'name'          => __('Test Text', 'cmb2'),
            'desc'          => __('field description (optional)', 'cmb2'),
            'id'            => 'yourprefix_text',
            'type'          => 'text',
            'show_on_cb'    => 'cmb2_hide_if_no_cats' //function should return a bool value
        ));

    }

}