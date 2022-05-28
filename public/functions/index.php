<?php

require_once(__DIR__.'/../../config.php'); 

/**
 * パーツ読み込み専用(同ページ内で複数回読み込もうとしても、一回までしか読み込まない)
 */
function getPartOnce($path, $args = []){
    require_once($path);
}

/**
 * パーツ読み込み専用
 */
function getPart($path, $args = []){
    require($path);
}

/**
 * エスケープ
 */
function escape($string){
    return htmlspecialchars($string);
}



/**
 * HTMLコードの色付け処理
 * @param string $code
 * @return string $code
 */
function renderHtmlCodeColor(string $code) :string
{
    $characters_html = CODE_CHARACTERS['html'];

    $tag_start   = $characters_html['tag_start'];
    $tag_end     = $characters_html['tag_end'];
    $double_quot = $characters_html['double_quot'];
    $single_quot = $characters_html['single_quot'];
    $eol = PHP_EOL;

    /**
     *  HTMLコードの色付け処理
     *  elementの名前に色を付ける（開始タグ）
     * 
     *  例：elementがpだった場合、
     *  /<p /または/<p>/の場合 p に色をつける
     */
    $code = preg_replace_callback("/{$tag_start}([A-z0-9]+( |{$eol}|{$tag_end}))/", function($match) use($tag_start, $tag_end) {

        $replaced_match0 = str_replace([$tag_start, $tag_end], '', $match[0]);
        $color = CODE_COLORS['html']['element_name'];

        // マッチした文字列に「>」があった場合
        if( is_int(strpos( $match[0], $tag_end )) ){
            return "{$tag_start}<span style ='color:{$color};'>{$replaced_match0}</span>{$tag_end}"; 
        }

        // 「>」がなかった場合
        return "{$tag_start}<span style ='color:{$color};'>{$replaced_match0}</span>";

    }, $code);




    /**
     *  HTMLコードの色付け処理
     *  elementの名前に色を付ける（終了タグ）
     */
    $code = preg_replace_callback("/{$tag_start}\/[A-z0-9]+{$tag_end}/", function($match) use($tag_start, $tag_end) {

        $replaced_match0 = str_replace([$tag_start, $tag_end, '/'], '', $match[0]);
        $color = CODE_COLORS['html']['element_name'];

        return "{$tag_start}/<span style ='color:{$color};'>{$replaced_match0}</span>{$tag_end}";

    }, $code);


    
    

    
    
    /**
     *  HTMLコードの色付け処理
     *  elementの属性に色を付ける
     */
    $forward_attr_preg = "( *)([A-z0-9-_]+)( *)";
    $behind_attr_preg = "=( *)({|{$double_quot}|{$single_quot})";

    $code = preg_replace_callback("/{$forward_attr_preg}{$behind_attr_preg}/", function($match) use($forward_attr_preg, $behind_attr_preg) {

        if(strpos($match[0],'style =')){
            return $match[0];
        }

        $color = CODE_COLORS['html']['element_attr'];

        preg_match("/{$forward_attr_preg}/", $match[0], $forward_matches);
        preg_match("/{$behind_attr_preg}/", $match[0], $behind_matches);

        return "<span style ='color:{$color};'>{$forward_matches[0]}</span>{$behind_matches[0]}"; 

    }, $code);



    /**
     *  HTMLコードの色付け処理
     *  クォーテーションで囲まれた文字列に色を付ける
     */
    $string_preg_d = getStringPreg($double_quot);
    $string_preg_s = getStringPreg($single_quot);

    $code = preg_replace_callback("/{$string_preg_d}|{$string_preg_s}/", function($match){

        $color = CODE_COLORS['html']['string'];
        return "<span style ='color:{$color};'>$match[0]</span>"; 

    }, $code);


    return $code;

}


function getStringPreg($quot){
    return "{$quot}([^\"']*?){$quot}";
}