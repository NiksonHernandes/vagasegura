<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database','ion_auth', 'form_validation');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'funcao', 'form', 'array');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('core_model', 'home_model', 'estacionar_model');
