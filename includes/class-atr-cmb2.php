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
            'title'         => __('Ajustes Página de Inicio', 'cmb2'),
            'object_types'  => array('page',), //post type
            'show_on'       => array('key' => 'id', 'value' => array(17)),
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, //show field names on the left
        ));

        /* Definiendo los metacampos */
        // Regular text field
        /*$cmb->add_field(array(
            'name'          => __('Test Text', 'cmb2'),
            'desc'          => __('field description (optional)', 'cmb2'),
            'id'            => 'yourprefix_text',
            'type'          => 'text',
            'show_on_cb'    => 'cmb2_hide_if_no_cats' //function should return a bool value
        ));*/

        // Metacampo para poner una lista de imágenes
        $cmb->add_field( array(
            'name'              => 'Imagenes Carrusel',
            'desc'              => 'Aquí pondremos las imágenes para crear el slider',
            'id'                => 'img_list_carrousel',
            'type'              => 'file_list',
            'preview_size'      => array( 100, 100 ), // Default: array( 50, 50 )
            'query_args'        => array( 'type' => 'image' ), // Only images attachment

            // Optional, override default text strings
            'text' => array(
                'add_upload_files_text'     => 'Replacement', // default: "Add or Upload Files"
                'remove_image_text'         => 'Replacement', // default: "Remove Image"
                'file_text'                 => 'Replacement', // default: "File:"
                'file_download_text'        => 'Replacement', // default: "Download"
                'remove_text'               => 'Replacement', // default: "Remove"
            ),
        ) );

    }

}