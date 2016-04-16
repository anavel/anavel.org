@extends('layouts.master')

@section('title')
    @parent - Page not found
@stop

@section('content')

    <section class="panel statement light">
        <div class="content">

            <h2>Page not found</h2>

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

$module = $anavel->activeModule();

if (!$module) {
    throw new ModuleWasNotFound(
        'Module not found'
    );
}
</code></pre>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
