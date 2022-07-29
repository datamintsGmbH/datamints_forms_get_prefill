document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('form');
    // scans all forms, unfortunately theres no class or something like that to identify a EXT:forms related form...
    forms.forEach(function (currentForm, index) {
        const formId = currentForm.id;
        const isPowermail = currentForm.classList.contains('powermail_form');
        if((formId != null && typeof formId === 'string') || isPowermail){
            // get current url params and check if it begins with "form_" and additionally if there is a dom-element with the given id existing
            new URL(window.location).searchParams.forEach(function (paramValue, paramKey) {
                if(paramKey.startsWith('form_')){
                    let querySelector = '#'+formId+'-'+paramKey.replace('form_','');
                    if(isPowermail){
                        querySelector = '#powermail_field_'+paramKey.replace('form_','');
                    }
                    let input = currentForm.querySelector(querySelector);
                    if(input != null){
                        input.value = paramValue;
                    }
                }
            });
        }


    });

}, false);