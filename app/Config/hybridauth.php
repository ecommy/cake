<?php
/**
 * For more information about the hybridauth configuration array check 
 * http://hybridauth.sourceforge.net/userguide/Configuration.html
 */

$config['HybridAuth'] = array(
    'providers' => array(
        'OpenID' => array(
            'enabled' => true
        )
    ),
    'debug_mode' => (bool)Configure::read('debug'),
    'debug_file' => LOGS . 'hybridauth.log',
);