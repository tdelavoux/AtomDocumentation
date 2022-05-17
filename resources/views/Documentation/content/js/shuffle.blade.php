@extends('Documentation.include.layout')

@section('title_page', 'Atom Shuffle')

@section('content')
    <section id="Components">
        <h2>Atom Spinner</h2>

        <h3>Shuffle from input</h3>
        <article>

            <div class="a-fantom-card mw-400 pl-2 pr-2">
                <div class="a-input-group">
                    <input class="a-input a-borderfull" id="a-input-shuffle" placeholder="Searching Patterns">
                    <label>Search</label>
                </div>
    
                <div class="row flex-center">
                    <div class="shufflingItem languageItem" data-title="PHP">PHP</div>
                    <div class="shufflingItem languageItem" data-title="HTML">HTML</div>
                    <div class="shufflingItem languageItem" data-title="CSS">CSS</div>
                    <div class="shufflingItem languageItem" data-title="JAVA">JAVA</div>
                    <div class="shufflingItem languageItem" data-title="C#">C#</div>
                </div>
            </div>
           
            <pre class="brush: html">
                <div class="a-input-group">
                    <input class="a-input a-borderfull" id="a-input-shuffle" placeholder="Searching Patterns">
                    <label>Search</label>
                </div>
    
                <div class="row flex-center">
                    <div class="shufflingItem languageItem" data-title="PHP">PHP</div>
                    <div class="shufflingItem languageItem" data-title="HTML">HTML</div>
                    <div class="shufflingItem languageItem" data-title="CSS">CSS</div>
                    <div class="shufflingItem languageItem" data-title="JAVA">JAVA</div>
                    <div class="shufflingItem languageItem" data-title="C#">C#</div>
                </div>
            </pre>

            <pre class="brush: js">
                $('#a-input-shuffle').atomShuffleInstance(optionalClassName);
                //optionalClassName : optional class name that define elements tu shuffle. "shufflingItem" by default
            </pre>
        </article>

        <h3>Complexe Shuffle</h3>
        <article>

            <div class="a-fantom-card mw-400 pl-2 pr-2">
                <div class="a-input-group">
                    <input class="a-input a-borderfull" id="inputFilter" placeholder="Searching Patterns">
                    <label>Search</label>
                </div>
    
                <div class="row flex-center">
                    <div class="languageItem atomShuffleItem" data-title="PHP">PHP</div>
                    <div class="languageItem atomShuffleItem" data-title="HTML">HTML</div>
                    <div class="languageItem atomShuffleItem" data-title="CSS">CSS</div>
                    <div class="languageItem atomShuffleItem" data-title="JAVA">JAVA</div>
                    <div class="languageItem atomShuffleItem" data-title="C#">C#</div>
                </div>
            </div>
           
            <pre class="brush: html">
                <div class="a-input-group">
                    <input class="a-input a-borderfull" id="inputFilter" placeholder="Searching Patterns">
                    <label>Search</label>
                </div>
    
                <div class="row flex-center">
                    <div class="atomShuffleItem languageItem" data-title="PHP">PHP</div>
                    <div class="atomShuffleItem languageItem" data-title="HTML">HTML</div>
                    <div class="atomShuffleItem languageItem" data-title="CSS">CSS</div>
                    <div class="atomShuffleItem languageItem" data-title="JAVA">JAVA</div>
                    <div class="atomShuffleItem languageItem" data-title="C#">C#</div>
                </div>
            </pre>

            <pre class="brush: js">
                // Déclaration de l'objet
                var shuffler = new atomShuffle();

                // all elements involved in shuffle must trigger filter function.  
                $("#inputFilter").keyup(function(){
                    shuffler.filter(function(element){
                        return updateFilter(element);
                    });
                });

                // Personal user function. return true to show element, false to hide
                function updateFilter(element){
                    var input = $('#inputFilter').val().toLowerCase();
                    return element.attr('data-title').toLowerCase().includes(input);
                }
            </pre>
            <pre class="brush: js">
           
                // Options 
                var options = {
                    itemSelector  : '.atomShuffleItem', // Class name of item to shuffle
                    animationTime : 400                 // animation time (show and hide)
                };
                var shuffler = new atomShuffle(options);
            </pre>
        </article>

    </section>
@stop
