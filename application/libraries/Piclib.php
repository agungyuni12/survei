<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class piclib
{
	function orientation($url)
	{
		list( $width, $height ) = getimagesize($url);
		if ( $width > $height ) 
		{
		    return 'landscape';
		} 
		elseif ( $width == $height)
		{
			return 'square';
		}
		else 
		{
		    return 'portrait';
		}
	}

	function get_config($url, $path){
		$ci =& get_instance();

		$config['file_name'] = $url;
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 0;
		$config['max_width']  = 0;
		$config['max_height']  = 0;
		return $ci->upload->initialize($config);
	}

	function resize_image($source_path, $width, $height, $min_width, $min_height, $new_image = '', $dims = ''){
		$ci =& get_instance();

		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = $source_path;
		$thumb['create_thumb'] = FALSE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width'] = $min_width;
		$thumb['height'] = $min_height;
		if( $new_image != '' )
		{
			$thumb['new_image'] = $new_image;		
		}
		$thumb['quality'] = '100%';
		$dim = (intval($width) / intval($height)) - ($thumb['width'] / $thumb['height']);
		if( $dims != '' )
		{
			$thumb['master_dim'] = ($dim > 0) ? "width" : "height";
		}
		else
		{
			$thumb['master_dim'] = ($dim <= 0) ? "width" : "height";
		}
		return $ci->image_lib->initialize($thumb);
	}

	function crop_image($source_path, $width, $height, $x_axis, $y_axis){
		$ci =& get_instance();

		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = $source_path;
		$thumb['maintain_ratio'] = FALSE;
		$thumb['quality'] = '100%';
		$thumb['x_axis'] = $x_axis;
		$thumb['y_axis'] = $y_axis;
		$thumb['width']  = $width;
		$thumb['height'] = $height;
		return $ci->image_lib->initialize($thumb);
	}
}