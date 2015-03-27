<?php
/**
 * Helloworld Plugin for Wordpress
 *
 * @copyright   Copyright (C) 2007 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/nooku/wordpress-helloworld for the canonical source repository
 */

/*
Plugin Name: Helloworld
Plugin URI: http://github.com/nooku/wordpress-helloworld
Description: Hellowworld Plugin for Wordpress
Author: Johan Janssens and Timble CVBA
Version: 0.1
Author URI: http://nooku.org/
*/

add_action('koowa_before_bootstrap', 'helloworld_bootstrap');

function helloworld_bootstrap()
{
    KObjectManager::getInstance()
        ->getObject('lib:object.bootstrapper')
        ->registerComponent('helloworld', __DIR__, 'helloworld')
        ->registerComponent('helloworld', __DIR__.'/admin', 'admin');
        //->registerComponent('helloworld', __DIR__.'/site',  'site');
}