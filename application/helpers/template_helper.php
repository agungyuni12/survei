<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function template($model= '', $page = '', $data = array(), $view = '')
{
	$CI =& get_instance();
	$data['view'] = $CI->config->item('core_template').'/'.$model.'/'.$page.'/'.$view;
	$CI->load->view($CI->config->item('core_template').'/'.$model.'/index', $data);
}
