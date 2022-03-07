@extends('Documentation.include.layout')

@section('title_page', 'Atom Images')

@section('content')
    <section id="Components" class="">
        <h2>Images</h2>

        <h3>Rounded Images</h3>
        <article>
            <div class="flex-column">
                <div class="flex ai-c">
                    <div class="a-round-img-xl" style="background-image:url('{{ asset('img/persona/persona.jpg')}}')"></div>
                    <span class="flex-1">a-round-img-xl</span>
                </div>

                <div class="flex ai-c">
                    <div class="a-round-img" style="background-image:url('{{ asset('img/persona/persona2.jpg') }}')"></div>
                    <span class="flex-1">a-round-img</span>
                </div>

                <div class="flex ai-c">
                    <div class="a-round-img-sm" style="background-image:url('{{ asset('img/persona/persona2.jpg') }}')"></div>
                    <span class="flex-1">a-round-img-sm</span>
                </div>
            </div>

            <pre class="brush: html">
                <div class="flex ai-c">
                    <div class="a-round-img-xl" style="background-image:url('img/persona.jpg')"></div>
                    <span class="flex-1">a-round-img-xl</span>
                </div>

                <div class="flex ai-c">
                    <div class="a-round-img" style="background-image:url('img/persona2.jpg')"></div>
                    <span class="flex-1">a-round-img</span>
                </div>

                <div class="flex ai-c">
                    <div class="a-round-img-sm" style="background-image:url('img/persona3.png')"></div>
                    <span class="flex-1">a-round-img-sm</span>
                </div>
            </pre>
        </article>

    </section>
@stop