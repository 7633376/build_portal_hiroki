/**
 * codeコピー
 */
 (function(){

    // @todo
    // PHPから$codesの(要素数-1)を取得
    const $codes = ['コード1', 'コード2', 'コード3'];


    $codes.forEach((code, index) => {

        const button = document.querySelector(`#copy_button_${index}`);

        button.addEventListener('click', (event) => {

            const copy_text = event.target.nextElementSibling.textContent;
            navigator.clipboard.writeText(copy_text);

            event.target.children[0].children[0].style.display ="block";

            setTimeout(() => {
                event.target.children[0].children[0].style.display ="none"
            }, 3000);
        })
    })

    
})();