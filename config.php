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
    define('PUBLIC_DIR', __DIR__.'/public');
    define('LANGUAGE', 'ja');

    define('CODE_COLORS', [
        'html' => [
            'element_name' => '#176cd5',
            'element_attr' => 'skyblue',
            'string' => '#efaa2c'
        ]
    ]);

    

?>