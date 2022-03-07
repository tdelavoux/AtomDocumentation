@extends('Documentation.include.layout')

@section('title_page', 'Atom Colapse')

@section('content')
    <section id="Components">
        <h2>Collapse JS</h2>

        <h3>Automatic Collapsing elements</h3>
        <article>

            <div>
                <span role="button" id="collapserDemo1" collapse-target="#toCollapseDemo1" class="small-text a-collapsable">Collapse below</span>
                <p id="toCollapseDemo1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate non nisi id tempor. Sed lobortis ligula sed 
                    erat bibendum, vel interdum dui tempor. Etiam faucibus dapibus lectus vel rutrum. In vel neque malesuada, 
                    tristique nibh quis, porttitor dui. Nullam turpis erat, luctus sed nibh at, mollis rhoncus neque. Aenean eleifend dui nisi. 
                    Donec iaculis pretium porta. Donec at orci iaculis, lobortis nulla in, hendrerit lorem. Mauris nunc ipsum, eleifend id posuere eget, 
                    viverra non nisi.
                </p>
            </div>

            <pre class="brush: html">
               <div>       
                    <span id="collapserDemo" collapse-target="#toCollapseDemo" class="small-text">Collapse below</span>
                    <p id="toCollapseDemo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate non nisi id tempor. Sed lobortis ligula sed 
                        erat bibendum, vel interdum dui tempor. Etiam faucibus dapibus lectus vel rutrum. In vel neque malesuada, 
                        tristique nibh quis, porttitor dui. Nullam turpis erat, luctus sed nibh at, mollis rhoncus neque. Aenean eleifend dui nisi. 
                        Donec iaculis pretium porta. Donec at orci iaculis, lobortis nulla in, hendrerit lorem. Mauris nunc ipsum, eleifend id posuere eget, 
                        viverra non nisi.
                    </p>

                </div>
            </pre>


            use class="a-collapsed" to colapse by default element.
        </article>

        <h3>Manually Collapsing elements</h3>
        <article>

            <div>
                <span id="collapserDemo2" collapse-target="#toCollapseDemo2" class="small-text a-collapsing-manually">Collapse below</span>
                <p id="toCollapseDemo2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate non nisi id tempor. Sed lobortis ligula sed 
                    erat bibendum, vel interdum dui tempor. Etiam faucibus dapibus lectus vel rutrum. In vel neque malesuada, 
                    tristique nibh quis, porttitor dui. Nullam turpis erat, luctus sed nibh at, mollis rhoncus neque. Aenean eleifend dui nisi. 
                    Donec iaculis pretium porta. Donec at orci iaculis, lobortis nulla in, hendrerit lorem. Mauris nunc ipsum, eleifend id posuere eget, 
                    viverra non nisi.
                </p>
            </div>

            <pre class="brush: html">
               <div>       
                    <span id="collapserDemo" collapse-target="#toCollapseDemo" class="small-text">Collapse below</span>
                    <p id="toCollapseDemo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate non nisi id tempor. Sed lobortis ligula sed 
                        erat bibendum, vel interdum dui tempor. Etiam faucibus dapibus lectus vel rutrum. In vel neque malesuada, 
                        tristique nibh quis, porttitor dui. Nullam turpis erat, luctus sed nibh at, mollis rhoncus neque. Aenean eleifend dui nisi. 
                        Donec iaculis pretium porta. Donec at orci iaculis, lobortis nulla in, hendrerit lorem. Mauris nunc ipsum, eleifend id posuere eget, 
                        viverra non nisi.
                    </p>

                </div>
            </pre>

            <pre class="brush: js">
                $('.a-collapsing-manually').atomCollapse();
                
                //Options :  {collapsedText:'Show Text', startingPosition:'collapsed'} 
                // collapsedText : update trigger html when collapsed
                // starting position : 'collapsed' , collapsed by default
             </pre>

            describe options
        </article>

    </section>
@stop