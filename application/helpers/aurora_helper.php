<?php

if ( ! function_exists('bt_edit'))
{
	function bt_edit($uri){
		return anchor($uri, '<i class="fa fa-edit"></i>');
	}
}


if ( ! function_exists('bt_delete'))
{
	function bt_delete($uri){
		return anchor( $uri, '<i class="fa fa-trash-o"></i>', array('onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
			));
	}
}


if ( ! function_exists('bt_print'))
{
	function bt_print($uri){
		return anchor( $uri, '<i class="fa fa-print fa-2x"></i>', array('onclick' => "return confirm('You are about print barcode of this product. Are you sure?');"
			));
	}
}


if ( ! function_exists('bt_view'))
{
	function bt_view($uri){
		return anchor( $uri, '<i class="fa fa-eye fa-x"></i>');
	}
}


/**
 * Dump helper. Functions to dump variables to the screen, in a nicley formatted manner.
 * @author Joost van Veen
 * @version 1.0
 */
if (!function_exists('dump')) {
    function dump ($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable
        ob_start();
        var_dump($var);
        $output = ob_get_clean();

        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';

        // Output
        if ($echo == TRUE) {
            echo $output;
        }
        else {
            return $output;
        }
    }
}


if (!function_exists('dump_exit')) {
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump ($var, $label, $echo);
        exit;
    }
}

// echo 'aurora helper loded';


// function curdate() {
function curdate() {
    // gets current timestamp
    date_default_timezone_set('Asia/Manila'); // What timezone you want to be the default value for your current date.
    return date('Y-m-d H:i:s');
}
