/**
 * codeコピー
 */
 (function(){

    for(i = 0; i < $codes_count; i++){

        const button = document.querySelector(`#code_copy_button_${i}`);

        button.addEventListener('click', (event) => {

            const copy_text = event.target.nextElementSibling.textContent;
            navigator.clipboard.writeText(copy_text); // コピー

            event.target.children[0].children[0].style.display ="block";

            setTimeout(() => {
                event.target.children[0].children[0].style.display ="none";
            }, 3000);
        })
    };

    
})();