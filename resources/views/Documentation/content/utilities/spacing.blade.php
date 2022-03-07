@extends('Documentation.include.layout')

@section('title_page', 'Atom Texts')

@section('content')
    <section id="Components">
        <h2>Spacing</h2>

        <h3>Margins</h3>
        <article>
       
            <pre class="brush: css">
                .m-2{margin:2em !important}.m-1{margin:1em !important}.m-05{margin:0.5em !important}
                .mv-2{margin:2em 0 !important}.mv-1{margin:1em 0 !important}.mv-05{margin:0.5em 0 !important}
                .mh-2{margin: 0 2em !important}.mh-1{margin: 0 1em !important}.mh-05{margin: 0 0.5em !important}
                .mt-2{margin-top:2em !important}.mt-1{margin-top:1em !important}.mt-05{margin-top:0.5em !important}
                .ml-2{margin-left:2em !important}.ml-1{margin-left:1em !important}.ml-05{margin-left:0.5em !important}
                .mr-2{margin-right:2em !important}.mr-1{margin-right:1em !important}.mr-05{margin-right:0.5em !important}
                .mb-2{margin-bottom:2em !important}.mb-1{margin-bottom:1em !important}.mb-05{margin-bottom:0.5em !important}
            </pre>

        </article>

        <h3>Paddings</h3>
        <article>
       
            <pre class="brush: css">
                .p-2{padding:2em !important}.p-1{padding:1em !important}.p-05{padding:0.5em !important}.p-0{padding:0 !important}
                .pv-2{padding:2em 0 !important}.pv-1{padding:1em 0 !important}.pv-05{padding:0.5em 0 !important}
                .ph-2{padding: 0 2em !important}.ph-1{padding: 0 1em !important}.ph-05{padding: 0 0.5em !important}
                .pt-2{padding-top:2em !important}.pt-1{padding-top:1em !important}.pt-05{padding-top:0.5em !important}.pt-0{padding-top:0 !important}
                .pl-2{padding-left:2em !important}.pl-1{padding-left:1em !important}.pl-05{padding-left:0.5em !important}.pl-0{padding-left:0 !important}
                .pr-2{padding-right:2em !important}.pr-1{padding-right:1em !important}.pr-05{padding-right:0.5em !important}.pt-0{padding-right:0 !important}
                .pb-2{padding-bottom:2em !important}.pb-1{padding-bottom:1em !important}.pb-05{padding-bottom:0.5em !important}.pb-0{padding-bottom:0 !important}
            </pre>

        </article>

        <h3>Placements</h3>
        <article>
       
            <pre class="brush: css">
                .center{text-align:center}
                .left{text-align:left}
                .right{text-align:right}
                .flex{display:flex;}
                .ai-c{align-items:center;}
                .jc-c{justify-content:center;}
                .flex-center{display:flex; align-items: center; justify-content: center}
                .flex-column{display:flex;flex-direction:column}
                .ar{text-align:right}
                .al{text-align:left}
                .sb{display:flex;justify-content: space-between;align-items: center}
                .flex-1{flex: 1000 10 auto !important}
            </pre>

        </article>

        <h3>Width</h3>
        <article>
       
            <pre class="brush: css">
                .w10{width:10%}.w20{width:20%}.w30{width:30%}.w40{width:40%}.w50{width:50%}.w60{width:60%}.w70{width:70%}.w80{width:80%}.w90{width:90%}.w100{width:100%}
                .w5{width:5%}.w15{width:15%}.w25{width:25%}.w35{width:35%}.w45{width:45%}.w55{width:55%}.w65{width:65%}.w75{width:75%}.w85{width:85%}.w95{width:95%}
                .h10{height:10%}.h20{height:20%}.h30{height:30%}.h40{height:40%}.h50{height:50%}.h60{height:60%}.h70{height:70%}.h80{height:80%}.h90{height:90%}.h100{height:100%}
                .h5{height:5%}.h15{height:15%}.h25{height:25%}.h35{height:35%}.h45{height:45%}.h55{height:55%}.h65{height:65%}.h75{height:75%}.h85{height:85%}.h95{height:95%}
            </pre>

        </article>

    </section>
@stop