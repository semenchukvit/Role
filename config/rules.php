<?php

/*
 * You cad add new permissions here
 * The value of each permission has to be the same as name of the rout
 */
return [

    'owner' => [
        'show_dashboard',
        'show_report',
        'show_configuration',
        'create_user_show',
        'create_user'
    ],
    'admin' => [
        'show_dashboard',
        'show_configuration',
    ],
    'employee' => [
        'show_dashboard',
        'show_report',
    ],

];
