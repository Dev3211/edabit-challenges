<?php

function validatePIN($pin) {
	return (strlen($pin) == 4 || strlen($pin) == 6) ? preg_match('/^\d+$/', $pin) : false;
}

validatePIN("1234"); //true

?>
