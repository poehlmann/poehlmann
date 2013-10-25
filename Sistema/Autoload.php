<?php

function __autoload($clase) {
	require APP_ROOT . '/' . str_replace('\\', '/', $clase) . '.php';
}