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
Description: Hello World Plugin for Wordpress
Author: Johan Janssens and Timble CVBA
Version: 0.1
Author URI: http://nooku.org/
Updates URL: https://api.github.com/repos/raeldc/wp-nooku-helloworld/releases
*/

add_action('koowa_after_bootstrap', 'helloworld_bootstrap');

function helloworld_bootstrap()
{
    $manager = KObjectManager::getInstance();
    $manager->getObject('lib:object.bootstrapper')
        ->registerComponent('helloworld', __DIR__, 'helloworld')
        ->registerComponent('helloworld', __DIR__.'/admin', 'admin');

    if(is_admin()) {
        $manager->getObject('com:helloworld.resources.updater', array('plugin_file' => __FILE__));
    }
}