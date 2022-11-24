function removeError(errors) {
    for (var i = 0; i < errors.length; i++) {
        errors[i].classList.remove('error');
    }
}

function checkFields(fields) {
    for (var i = 0; i < fields.length; i++) {
        if (!fields[i].value) {
            fields[i].parentNode.classList.add('error');
        }
    }
}

function validatePhone(input) {
    if (input.value.length < 18) {
        input.parentNode.classList.add('error');
        return false;
    } else {
        input.parentNode.classList.remove('error');
        return true;
    }
}

// form discount 
export function getDiscount() {
    if (document.querySelector('.getDiscount_js')) {
        var form = document.querySelector('.getDiscount_js');
        var input = form.querySelector('.tel');
        var fields = form.querySelectorAll('.fileds_js');
        var envelope = form.querySelectorAll('.envelopeInput');
        var valid

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            var errors = form.querySelectorAll('.error');
            removeError(errors);
            checkFields(fields);
            validatePhone(input);
            envelope.forEach((item) => {
                if (item.classList.contains('error')) {
                    valid = false
                    console.log('no fetch')
                } else {
                    valid = true
                    console.log('fetch')
                }
            });
            console.log(valid)
        })
    }
}