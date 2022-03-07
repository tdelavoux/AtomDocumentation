@extends('Documentation.include.layout')

@section('title_page', 'Atom Colors')

@section('content')
    <section id="Components">
        <h2>Atom Colors</h2>

        <h3>Background colors</h3>
        <article>
            <div class="flex">
                <div class="a-bg-primary bg-square"></div>
                <div class="a-bg-secondary bg-square"></div>
                <div class="a-bg-light bg-square"></div>
                <div class="a-bg-dark bg-square"></div>
                <div class="a-bg-warning bg-square"></div>
                <div class="a-bg-danger bg-square"></div>
                <div class="a-bg-info bg-square"></div>
            </div>
            
            <pre class="brush: html">
                <div class="a-bg-primary bg-square"></div>
                <div class="a-bg-secondary bg-square"></div>
                <div class="a-bg-light bg-square"></div>
                <div class="a-bg-dark bg-square"></div>
                <div class="a-bg-warning bg-square"></div>
                <div class="a-bg-danger bg-square"></div>
                <div class="a-bg-info bg-square"></div>
            </pre>

        </article>

        <h3>Custom colors</h3>
        <article>

            <p>All elements colors might be overwrited by changing Atom css var but be aware this action will influence all of the components sharing same type (primary, secondary ... etc). </p>
            <p>Please, check the <a href="{{ route('documentation', ['utilities', 'custom']) }}">Cutomize</a> section for more informations</p>

            <pre class="brush: css">
                :root{
                    --p-primary:#437cb5;
                    --h-primary:#d0e0fc;
                    --t-primary:#0b3d91;
                    
                    --p-danger:#c7736b;
                    --h-danger:#f2dede;
                    --t-danger:#a94442;
                
                    --p-waring:#c9a749;
                    --h-waring:#fcf8e3;
                    --t-waring:#8a6d3b;
                
                    --p-light:#868a8f;
                    --h-light:#e9e7e7;
                    --t-light:#61605f;
                
                    --p-sucess:#529e4f;
                    --h-sucess:#dff0d8;
                    --t-sucess:#3c763d;
                
                    --p-info:#62b1b5;
                    --h-info:#d9edf7;
                    --t-info:#31708f;
                
                    --p-secondary:#a84fb0;
                    --h-secondary:#f0d8ff;
                    --t-secondary:#6b2498;
                }
            </pre>

        </article>

    </section>
@stop