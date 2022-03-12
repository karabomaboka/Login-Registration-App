<?php 
	class Validate{

		public static function escape($input){
			$input = trim(strip_tags($input));
			$input = stripslashes($input);
			$input = htmlentities($input, ENT_QUOTES);
			return $input;
		
		}
	}
?>