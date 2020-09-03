/*  Creamos con el document para mayor facilidad al utilizarlo  */
const d = document;

/*  Eventos al dar click en la página web  */
d.addEventListener('click', e => {

    /*  Se selecciona el contenedor del contenido principal  */
    const $html = d.querySelector('.main__section');

    /*  Al hacer click en el logo se va al inicio  */
    if(e.target.matches('.logo')) window.location.href = './';
    
});

/*  Eventos al cargar la página web  */
d.addEventListener('DOMContentLoaded', e => {

    /*  Ubicamos de la url el elemento que marca la página en la que estamos y cada uno de los links  */
    let url_element = window.location.pathname.split('/'),
        actual_page = url_element[2],
        links_elements = d.querySelectorAll('.links');

    /*  Recorremos cada link para ubicar la página actual y marcar el link correspondiente como activo  */
    links_elements.forEach(el => {

        if(actual_page === '' && el.innerText === 'Home'){

            el.classList.remove('nounder');

        }else if(actual_page === 'login' && el.innerText === 'Login'){

            el.classList.remove('nounder');

        }else if(actual_page === 'register' && el.innerText === 'Registro'){

            el.classList.remove('nounder');

        }

    });

    /*  Validación del formulario de login  */
    if(d.querySelector('#login-form')) form_validation('#login-form');

    /*  Validación del formulario de registro  */
    if(d.querySelector('#register-form')) form_validation('#register-form');

});

/*  Función para validar los formularios  */
const form_validation = (form) => {

    /*  Ubicamos el formulario y los campos requeridos  */
    const $form = d.querySelector(form),
        $inputs = d.querySelectorAll(`${form} [required]`),
        form_action = $form.getAttribute('action');

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
            if($input.value.length === 0) result = d.getElementById(`error-${$input.name}`).classList.remove('is-active');

            /*  Se evalua si hay un campo que no tenga el valor de requerido  */
            if(!pattern) result = $input.value === '' ? d.getElementById(`error-${$input.name}`).classList.add('is-active') : d.getElementById(`error-${$input.name}`).classList.remove('is-active');
            
            /*  Se evalua si los campos de contraseñas coinciden  */
            if(pattern && ($input.name === 'pass__one' || $input.name === 'pass__two')){

                /*  Se almacena el valor del primer campo de contraseña  */
                if($input.name === 'pass__one') value_one = $input.value;

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

    d.addEventListener('submit', e => {

        e.preventDefault();
            
        const $loader = d.querySelector('.loader'),
            $response = d.querySelector('.messaje_form');

        $loader.classList.remove('display_none');

        fetch(form_action, {
            method: 'POST',
            body: new FormData(e.target)
        })
        .then(res => res.ok ? res.json() : Promise.reject(res))   
        .then(json => {
            $loader.classList.add('display_none');
            $response.classList.remove('display_none');
            $response.innerHTML = json.message;

            setTimeout(() => {
                window.location.href = json.url_res;
            }, 3000);

        })
        .catch(err => {
            console.log(err);
            let err_message = err.statusText || 'Ocurrió un error inesperado';
            $response.innerHTML = `Error: ${err.status} - ${err_message}`;
        });

    });

}