<?php

    /**
     * ユーザーが編集しない定数
     */
    define('CODE_CHARACTERS', [
        'html' => [
            'tag_start' => '&lt;',
            'tag_end' => '&gt;',
            'double_quot' => '&quot;',
            'single_quot' => '&#039;',
        ]
    ]);

    

    /**
     * ユーザーが自由に編集できる定数
     */
    define('PUBLIC_DIR'       , str_replace("\\", '/', __DIR__.'/public'));
    define('SERVER_PUBLIC_DIR', str_replace($_SERVER['DOCUMENT_ROOT'], '', PUBLIC_DIR));
    define('LANGUAGE', 'ja');

    define('CODE_COLORS', [
        'html' => [
            'element_name' => '#176cd5',
            'element_attr' => 'skyblue',
            'string' => '#efaa2c'
        ]
    ]);

    define('PARTS', [
        'header' => PUBLIC_DIR.'/parts/header.php',
        'footer' => PUBLIC_DIR.'/parts/footer.php',
        'head'   => PUBLIC_DIR.'/parts/head.php',
        'code'   => PUBLIC_DIR.'/parts/code/code.php',
    ]);

    define('STYLES', [
        'style' => SERVER_PUBLIC_DIR.'/assets/css/style.css',
        'code'  => SERVER_PUBLIC_DIR.'/parts/code/code.css',
    ]);
    define('SCRIPTS', [
        'code' => SERVER_PUBLIC_DIR.'/parts/code/code.js',
    ]);

    

?>