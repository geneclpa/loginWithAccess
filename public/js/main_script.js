/*  Creamos con el document para mayor facilidad al utilizarlo  */
const d = document;

/*  Eventos al dar click en la página web  */
d.addEventListener('click', e => {

    /*  Se selecciona el contenedor del contenido principal  */
    const $html = d.querySelector('.main__section');

    /*  Al hacer click en el logo se va al inicio  */
    if(e.target.matches('.logo')){

       /*  Invocación de la función que procesa peticiones AJAX para mostrar el contenido al cargar la página  */
        get_html({
            url: './index_content',
            success: (html) => $html.innerHTML = html,
            error: (err) => $html.innerHTML = `<h3>${err}</h3>`,
        });

    }

    if(e.target.matches('.links')){

        if(e.target.textContent === 'Inicio'){

            /*  Invocación de la función que procesa peticiones AJAX para mostrar el contenido al cargar la página  */
            get_html({
                url: './login_content',
                success: (html) => $html.innerHTML = html,
                error: (err) => $html.innerHTML = `<h3>${err}</h3>`,
            });

        }

        if(e.target.textContent === 'Registro'){

           /*  Invocación de la función que procesa peticiones AJAX para mostrar el contenido al cargar la página  */
           get_html({
                url: './register_content',
                success: (html) => $html.innerHTML = html,
                error: (err) => $html.innerHTML = `<h3>${err}</h3>`,
            });

        }

    }
    
});

/*  Eventos al cargar la página web  */
d.addEventListener('DOMContentLoaded', e => {

    /*  Se selecciona el contenedor del contenido principal  */
    const $html = d.querySelector('.main__section');

    /*  Invocación de la función que procesa peticiones AJAX para mostrar el contenido al cargar la página  */
    get_html({
        url: './index_content',
        success: (html) => $html.innerHTML = html,
        error: (err) => $html.innerHTML = `<h3>${err}</h3>`,
    });

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