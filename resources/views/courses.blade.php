@extends('layouts.struct')

@section('title','home')

@section('content')

    <header>
        @extends('layouts.menu')
    </header>
    <section>
            <h1 class="article_card_titulo">Todos Nuestros Cursos</h1>
    <article class="article_cards">
        <div class="card">
            <figure>
                <img src="/imagen/logos/logo_piton.png" class="logo_card">
                <h3 class="card_titulo">Python</h3>
                <p>es un lenguaje de programacion ampliamente utilizado en las aplicaciones web,el desarrollo del software etc.
los desarrolladores utilizan phyton porque es eficiente y facil de aprender,ademas que se puede ejecutar en varias plataformas diferentes.</p>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="/imagen/logos/logo_laravel.png" class="logo_card">
                <h3 class="card_titulo">Laravel</h3>
                <p>laravel es un framework php para el desarrollo de aplicaciones web. lo que los distingue de los otros framework es 
su sintaxis elegante y concisa,su enfoque basado en el desarrollo basado en prueba de paquetes y herramientas.</p>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="/imagen/logos/logo_cmas.png" class="logo_card">
                <h3 class="card_titulo">C++</h3>
                <p>es un lenguaje de programacion orientado a objetos muy potente que evoluciono  de la extension del lenguaje c,que hoy en dia sigue usandose para realizar
programacion estructurada de alto nivel y rendimiento ,como sistemas operativos,videojuegos etc.</p>
            </figure>
        </div>
 <div class="card">
            <figure>
                <img src="/imagen/logos/logo_c.png" class="logo_card">
                <h3 class="card_titulo">C</h3>
                <p>es un leguaje de nivel medio bajo, asi que no requiere de muchos recursos pero ofrece una buena respuesta
 y una ejecucion rapida de programas.</p>
            </figure>
        </div>
  <div class="card">
            <figure>
                <img src="/imagen/logos/logo_mysql.jpg" class="logo_card">
                <h3 class="card_titulo">MySQL</h3>
                <p>es un sistema de bases de datos,que se utiliza para gestionar  bases de datos,se utiliza para el almacenamiento de datos de diversos servicios web.</p>
            </figure>
        </div>
 <div class="card">
            <figure>
                <img src="/imagen/logos/logo_arduino.jpg" class="logo_card">
                <h3 class="card_titulo">Arduino</h3>
                <p>es un microcontrolador,cuando tiene un programa descargado desde un ordenador y funciona de forma independiente de este,controla y alimenta determinado dispositivos y toma de decisiones
de acuerdo al programa descargado interactua con el mundo fisico gracias a sensores y actuadores.</p>
            </figure>
        </div>
 <div class="card">
            <figure>
                <img src="/imagen/logos/logo_javascript.jpg" class="logo_card">
                <h3 class="card_titulo">JavaScript</h3>
                <p>es un lenguaje de programacion que los desarrolladores utilizan para hacer paginas web interactivas
desde actualizar fuentes de redes sociales  y mostrar animaciones y mapas interactivos etc.</p>
            </figure>
        </div>
 <div class="card">
            <figure>
                <img src="/imagen/logos/logo_css.png" class="logo_card">
                <h3 class="card_titulo">Css</h3>
                <p>es un tipo de lenguaje que permite definir y crear la presentacion visual de un documento ya estructurado y escrito en un lenguaje html.
es decir permite generar el diseño visual de paginas web e interfaces de usuario.</p>
            </figure>
        </div>
 <div class="card">
            <figure>
                <img src="/imagen/logos/logo_html.png" class="logo_card">
                <h3 class="card_titulo">Html</h3>
                <p>es un lenguaje de marcado de hipertexto,su codigo se utiliza para estructurar y desplegar una pagina web y sus contenidos(parrafos,lista con viñetas ,imagenes ,etc)</p>
            </figure>
        </div>
      <div class="card">
            <figure>
                <img src="/imagen/logos/logo_php.png" class="logo_card">
                <h3 class="card_titulo">MySQL</h3>
                <p>es un lenguaje de programacion  para desarrollar aplicaciones y crear sitios web,facil de usar y en constante perfeccionamiento es una opcion 
segura para aquellos que desean trabajar en proyectos calificados y sin complicaciones.</p>
            </figure>
        </div>
    </article>
    </section>
@endsection