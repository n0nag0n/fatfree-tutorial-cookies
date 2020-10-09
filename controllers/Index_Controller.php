<?php

class Index_Controller {
	public function index(Base $fw, array $args = []): void {
		echo "Hello ".join(',', $fw->people)."! Eat a {$fw->get('sandwich')} on a {$_GET['sandwich_type']} type of bread.";
		if($args['name'] === 'Bob') {
			var_dump($args['name']);
			$fw->set('COOKIE.name', $args['name'], 60);
		}

		// if($fw->GET['clear']) {
		// 	$fw->clear('COOKIE.name');
		// }
		echo '<pre>';
		print_r($fw->COOKIE);
		echo '</pre>';
	}
}