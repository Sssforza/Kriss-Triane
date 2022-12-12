// popup step
export function popupStep() {
    if (document.querySelector(".popupStep_js")) {
        let begin = document.querySelector(".popupSelectionBegin_js");
        let parent = document.querySelector(".popupStep_js");
        let container = parent.querySelectorAll(".popupStepContainer_js");
        let containerLength = container.length;
        let btnParent = parent.querySelector(".popupStepBtns_js");
        let btnNext = parent.querySelector(".popupStepNext_js");
        let countCurrent = parent.querySelector(".popupStepCurrent_js");
        let countTotal = parent.querySelector(".popupStepTotal_js");
        let stepProgress = parent.querySelector(".popupStepProgress_js");
        let progress = (100 / containerLength) + 1;
        let current;
        let nextCurrent;

        stepProgress.style.width = progress + "%";
        countTotal.innerHTML = containerLength;

        begin.addEventListener("click", () => {
            parent.classList.remove('covert');
        });

        btnNext.addEventListener("click", () => {
            container.forEach((item) => {
                if (item.classList.contains('active')) {
                    current = item.getAttribute('data-step');
                    item.classList.remove('active');
                    nextCurrent = Number(current) + Number(1);
                }

                if (nextCurrent <= containerLength) {
                    stepProgress.style.width = (progress * nextCurrent) + "%";
                    if (Number(item.getAttribute('data-step')) === nextCurrent) {
                        item.classList.add('active');
                        countCurrent.innerHTML = nextCurrent;
                    }
                }

                if (nextCurrent >= containerLength) {
                    btnParent.classList.add('end');
                }
            });
        });
    }
}