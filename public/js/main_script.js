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

    /*  Validación de formulario  */
    form_validation('#login-form');

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

    const $form = d.querySelector(form)
    console.log($form);


}