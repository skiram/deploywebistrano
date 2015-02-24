<?php

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
require_once(getenv('ENV_PATH_CONF') . '/env.php');

$configuration = ProjectConfiguration::getApplicationConfiguration(sfConfig::get('ENV_APP'), sfConfig::get('ENV'), sfConfig::get('ENV_DEBUG'));
sfContext::createInstance($configuration)->dispatch();


