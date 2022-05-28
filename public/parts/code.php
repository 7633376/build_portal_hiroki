<?php 
$file_name = $args['file_name'] ?? '';
$code_key = $args['code_key'] ?? '';
$code = htmlspecialchars($args['code']);


/**
 * HTMLコードの色付け処理
 */
$code = renderHtmlCodeColor($code);



$code_line_count = (substr_count($code, "\n")) + 1;

?>





<div class="pre_wrap_wrap">

<div class="file_name_tab">
    <div><?= escape($file_name); ?></div>
</div>


<div class="pre_wrap">

<div class="left">
    <ul>
        <?php for($i = 1; $i <= $code_line_count; $i++): ?>
            <li><?= $i; ?></li>
        <?php endfor; ?>
    </ul>
</div>

<div class="right">

<!-- @todo コピーをアイコンにして、文字をポップアップにする -->
<!-- @todo codeよりも前に設置してjs,css調整する？ -->
<button id="copy_button_<?= escape($code_key); ?>">
    <div>
        <span class="copied">コピーしました！</span>
        <i style="pointer-events: none;" class="fa-regular fa-copy fa-2x"></i>
    </div>
</button>

<pre><code><?= $code ?></code>
</pre>
</div>
</div>

</div>
