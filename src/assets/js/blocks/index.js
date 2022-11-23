// programs content change
export function programsContentChange () {
    if (document.querySelector(".programsTabs_js")) {
        var samplePrice = document.querySelectorAll(".programsTabs_js");
        var sampleContent = document.querySelectorAll(".programsSliider_js");
        var choice;
        samplePrice.forEach((item) => {
            item.addEventListener("click", () => {
                samplePrice.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                choice = item.getAttribute('data-program');
                sampleContent.forEach((elem) => {
                    if (elem.getAttribute('data-content') === choice) {
                        sampleContent.forEach((i) => {
                            i.classList.add('hide');
                        });
                        elem.classList.remove('hide');
                    }
                });
            });
        });
    }
}