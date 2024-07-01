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
                <p></p>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="/imagen/logos/logo_laravel.png" class="logo_card">
                <h3 class="card_titulo">Laravel</h3>
                <p></p>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="/imagen/logos/logo_cmas.png" class="logo_card">
                <h3 class="card_titulo">C++</h3>
                <p></p>
            </figure>
        </div>
 <div class="card">
            <figure>
                <img src="/imagen/logos/logo_c.png" class="logo_card">
                <h3 class="card_titulo">C</h3>
                <p></p>
            </figure>
        </div>
  <div class="card">
            <figure>
                <img src="/imagen/logos/logo_mysql.jpg" class="logo_card">
                <h3 class="card_titulo">MySQL</h3>
                <p></p>
            </figure>
        </div>
 <div class="card">
            <figure>
                <img src="/imagen/logos/logo_arduino.jpg" class="logo_card">
                <h3 class="card_titulo">Arduino</h3>
                <p></p>
            </figure>
        </div>
 <div class="card">
            <figure>
                <img src="/imagen/logos/logo_javascript.jpg" class="logo_card">
                <h3 class="card_titulo">JavaScript</h3>
                <p></p>
            </figure>
        </div>
 <div class="card">
            <figure>
                <img src="/imagen/logos/logo_css.png" class="logo_card">
                <h3 class="card_titulo">Css</h3>
                <p></p>
            </figure>
        </div>
 <div class="card">
            <figure>
                <img src="/imagen/logos/logo_html.png" class="logo_card">
                <h3 class="card_titulo">Html</h3>
                <p></p>
            </figure>
        </div>
     
    </article>
    </section>
@endsection