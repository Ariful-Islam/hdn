<?php
//Loads configuration from database into global CI config
function load_config()
{
	$CI =& get_instance();
	
	if ($CI->session->userdata('sitelang'))
	{
		$CI->config->set_item( 'language', $CI->session->userdata('sitelang') );
		
		$loaded = $CI->lang->is_loaded;
		$CI->lang->is_loaded = array();

		foreach($loaded as $file)
		{
			$CI->lang->load( str_replace( '_lang.php', '', $file ) );    
		}
	}
}
?>