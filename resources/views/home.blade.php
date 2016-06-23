@extends('layouts.master')

@section('title')
    @parent - Modular CMS for Laravel applications
@stop

@section('content')

    <section class="panel statement light">
        <div class="content">

            <img src="{{url('/img/anavel.png')}}" alt="Modular CMS for Laravel applications">

            <h1>Modular CMS for Laravel applications</h1>

            <p>Anavel is created to easily add CMS features to your Laravel based project from a modular approach, so you only install what you need getting a custom experience focused on the business goals of the user.</p>

            <div class='browser-window'>
                <div class='top-bar'>
                    <div class='circles'>
                        <div class="circle circle-red"></div>
                        <div class="circle circle-yellow"></div>
                        <div class="circle circle-green"></div>
                    </div>
                </div>
                <div class='window-content'>
				<pre class="language-php line-numbers"><code>
&lt;?php

    /*
    |--------------------------------------------------------------------------
    | Modules
    |--------------------------------------------------------------------------
    |
    */
    'modules'               => [
        Anavel\Crud\CrudModuleProvider::class,
        Anavel\Gettext\GettextModuleProvider::class,
        Anavel\Translation\TranslationModuleProvider::class
    ],
</code></pre>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
