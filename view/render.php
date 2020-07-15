<?php
namespace View;

class Render {
	public static function template($include) {
		ob_start();
		$include();
		return ob_get_clean();
	}

	public static function userPage($title, $contents, $header, $footer) {
		return self::template(
			function () use ($title, $contents, $header, $footer) {
				include __DIR__.'/templates/user-page.php';
			}
		);
	}

	public static function formField($fields, $label, $name, $type) {
		$type = $type ?? 'text';
		return self::template(
			function () use ($fields, $label, $name, $type) {
				include __DIR__.'/templates/form-field.php';
			}
		);
	}
}