/*  Creamos con el document para mayor facilidad al utilizarlo  */
const d = document;

/*  Eventos al dar click en la página web  */
d.addEventListener('click', e => {

    /*  Se selecciona el contenedor del contenido principal  */
    const $html = d.querySelector('.main__section');

    /*  Al hacer click en el logo se va al inicio  */
    if(e.target.matches('.logo')){

        Window.location.href = './';

    }
    
});

/*  Eventos al cargar la página web  */
d.addEventListener('DOMContentLoaded', e => {

    if(d.querySelector('#login-form')){

        /*  Validación de formulario  */
        form_validation('#login-form');

    }

    if(d.querySelector('#register-form')){

        /*  Validación de formulario  */
        form_validation('#register-form');

    }


});

/*  Función para procesar solicitudes ajax  */
const get_html = (options) => {

    let {url, success, error} = options;

    const xhr = new XMLHttpRequest();

    xhr.addEventListener('readystatechange', e => {

        if(xhr.readyState !== 4) return;

        if(xhr.status >= 200 && xhr.status < 300){
            
            let html = xhr.responseText;
            success(html);

        }else{

            let message = xhr.statusText || 'Ocurrio un error';
            error(`Error ${xhr.status}: ${message}`);

        }

    });

    xhr.open('GET', url);
    xhr.setRequestHeader('Content-type', 'text/html; charset=utf-8');
    xhr.send();

}

/*  Función para validar los formularios  */
const form_validation = (form) => {

    /*  Ubicamos el formulario y los campos requeridos  */
    const $form = d.querySelector(form),
        $inputs = d.querySelectorAll(`${form} [required]`);

    /*  Creamos de manera dinámica los párrafos donde se mostrarán los errores en caso de que hayan para cada campo  */
    $inputs.forEach(input => {

        const $error = d.createElement('p');

        $error.id = `error-${input.name}`;
        $error.textContent = input.title;
        $error.classList.add('input__error', 'display_none');
        input.insertAdjacentElement('afterend', $error);

    });

    d.addEventListener('keyup', e => {

        if(e.target.matches(`${form} [required]`)){

            let $input = e.target,
                pattern = $input.pattern,
                result = '';

            /*  Se evalua si hay patrón y el campo tiene información  */
            if(pattern && $input.value !== ''){

                let regex = new RegExp(pattern);
                
                result = !regex.exec($input.value) ? d.getElementById(`error-${$input.name}`).classList.add('is-active') : d.getElementById(`error-${$input.name}`).classList.remove('is-active');

            }

            /*  Se evalua si hay caracteres en el campo  */
            if($input.value.length === 0){

                result = d.getElementById(`error-${$input.name}`).classList.remove('is-active');

            }

            /*  Se evalua si hay un campo que no tenga el valor de requerido  */
            if(!pattern) {

                result = $input.value === '' ? d.getElementById(`error-${$input.name}`).classList.add('is-active') : d.getElementById(`error-${$input.name}`).classList.remove('is-active');

            }
            
            /*  Se evalua si los campos de contraseñas coinciden  */
            if(pattern && ($input.name === 'pass__one' || $input.name === 'pass__two')){

                /*  Se almacena el valor del primer campo de contraseña  */
                if($input.name === 'pass__one'){

                    value_one = $input.value;

                }

                /*  Se evalua si las contraseñas coinciden  */
                if($input.name === 'pass__two' && $input.value.length >= 8){
    
                    let element =  d.getElementById(`error-${$input.name}`);
                    element.innerHTML = "Las contraseñas no coinciden";

                    if($input.value !== value_one){
    
                        result = element.classList.add('is-active');
                        
                    }else{
                        
                        result = element.classList.remove('is-active');
    
                    }
    
                }else{

                    let element =  d.getElementById(`error-${$input.name}`);
                    result = element.innerHTML = "El campo debe tener un formato válido, mínimo 8 y máximo 20 caracteres";

                }

            }

            return result;

        }

    });

}