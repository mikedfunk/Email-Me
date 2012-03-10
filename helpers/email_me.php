<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * email_me
 * 
 * email_me helper for email_me spark.
 * 
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author		Mike Funk
 * @link		http://mikefunk.com
 * @email		mike@mikefunk.com
 * 
 * @file		email_me.php
 * @version		1.0.0
 * @date		03/10/2012
 * 
 * Copyright (c) 2012
 */

// --------------------------------------------------------------------------

/**
 * email_me function.
 * 
 * @param string $message
 * @param string $subject (default: '')
 * @param string $to (default: '')
 * @return bool
 */
function email_me($message, $subject = '', $to = '')
{
	// load resources
	$_ci =& get_instance();
	$_ci->load->library('email');

	// set email params and send
	$_ci->email->from(config_item('em_from_email'), config_item('em_from_name'));
	
	// set "to" to param or config
	if ($to != '')
	{
		$_ci->email->to($to);
	}
	else
	{
		$_ci->email->to(config_item('em_to_email'));
	}
	
	// set cc and bcc
	if (config_item('em_cc_email') != '')
	{
		$_ci->email->cc(config_item('em_cc_email'));
	}
	if (config_item('em_bcc_email') != '')
	{
		$_ci->email->bcc(config_item('em_bcc_email'));
	}
	
	// set subject to param or config
	if ($subject != '')
	{
		$_ci->email->subject($subject);
	}
	else
	{
		$_ci->email->subject(config_item('em_subject'));
	}
	$_ci->email->message($message);
	return $_ci->email->send();
}
/* End of file email_me.php */
/* Location: ./email_me/helpers/email_me.php */