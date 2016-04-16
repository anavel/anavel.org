@extends('layouts.master')

@section('title')
    @parent - Modular CMS for Laravel applications
@stop

@section('content')

    <section class="panel statement light">
        <div class="content">

            <img src="/img/anavel-flow.png" alt="Modular CMS for Laravel applications">

            <h1>Modular CMS for Laravel applications</h1>

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
