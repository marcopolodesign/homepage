<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../../',
        'aliases' => array(),
        'reference' => 'fc94de4114200839e3d1272b7c91fb458f7acf14',
        'name' => 'fullworks/stop-user-enumeration',
        'dev' => true,
    ),
    'versions' => array(
        'alanef/plugindonation_lib' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../alanef/plugindonation_lib',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => 'a265d21d2f486661eb5e852309a76e100317f1c5',
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v1.0.12',
            'version' => '1.0.12.0',
            'type' => 'composer-installer',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'reference' => '4127333b03e8b4c08d081958548aae5419d1a2fa',
            'dev_requirement' => false,
        ),
        'fullworks/stop-user-enumeration' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../../',
            'aliases' => array(),
            'reference' => 'fc94de4114200839e3d1272b7c91fb458f7acf14',
            'dev_requirement' => false,
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
