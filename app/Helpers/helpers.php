<?php

function setActive(string $route)
{
	return request()->routeIs($route) ? 'active' : '';
}
function getFecha($format)
{
	$fecha = new DateTime();
	return $fecha->format($format);
}
function getError($errors, string $name)
{
	if ($errors->has('name')) return '<div class="alert alert-danger">' . $errors->first($name) . '</div>';
}
