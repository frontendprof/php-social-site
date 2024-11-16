<?php

function h($string = "")
{
	return htmlspecialchars($string);
}

function escape($string)
{
	return htmlentities($string, ENT_QUOTES);
}

function check_empty_flds($req_flds)
{
	$form_errors = array();

	foreach ($req_flds as $fld) {
		if (!isset($_POST[$fld]) || $_POST[$fld] == NULL) {
			$form_errors[] = $fld . " is a required field";
		}
	}

	return $form_errors;
}

function show_errors($errors)
{

	$output = '<ul class="form_errs">';
	foreach ($errors as $error) {
		$output .= '<li>' . htmlspecialchars($error) . '</li>';
	}
	$output .= '</ul>';
	return $output;
}
