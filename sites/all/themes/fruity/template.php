<?php

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 * An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
	if (!empty($breadcrumb)) {
		return '<ul id="breadcrumb" class="grid_16 alpha"><li>'. implode('</li> <li>', $breadcrumb) .'</li></ul>';
	}
}

/**
 * Return user links.
 */
function fruity_user_nav() {
	global $user;
	
	if ($user->uid) {
		$links[] = '<a href="' . url('user') . '" class="user">' . $user->name . '</a>';
		$links[] = '<a href="' . url('logout') . '">'. t('Log out') .'</a>';
		$links = '<ul id="user_nav"><li>' . implode('</li> <li>', $links) . '</li></ul>';
		
		return $links;
	}
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars) {
	$vars['tabs2'] = menu_secondary_local_tasks();
}
	
if (arg(0) == 'admin' && (arg(1) == '' || arg(1) == 'by-module')) {
	drupal_add_js(path_to_theme() . '/scripts/admin_panels.js', 'theme', 'header', FALSE, TRUE, TRUE);
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs. Overridden to split the secondary tasks.
 *
 * @ingroup themeable
 */
function phptemplate_menu_local_tasks() {
	return menu_primary_local_tasks();
}

function phptemplate_comment_submitted($comment) {
	return t('!datetime — !username',
		array(
			'!username' => theme('username', $comment),
			'!datetime' => format_date($comment->timestamp)
		));
}

function phptemplate_node_submitted($node) {
	return t('!datetime — !username',
		array(
			'!username' => theme('username', $node),
			'!datetime' => format_date($node->created),
		));
}
