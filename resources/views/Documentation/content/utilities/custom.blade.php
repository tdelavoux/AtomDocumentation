@extends('Documentation.include.layout')

@section('title_page', 'Atom Texts')

@section('content')
    <section id="Components">
        <h2>Customize Components</h2>

        <h3>Overwrite Components Colors</h3>
        <article>
            <p>All elements colors might be overwrited by changing Atom css var but be aware this action will influence all of the components sharing same type (primary, secondary ... etc). </p>
            
            <div>
                <button class="a-btn a-link-primary">Primary Link</button>
                <button class="a-btn a-half-primary">Primary Half Button</button>	
                <button class="a-btn a-primary">Primary Button</button>	
                <button class="a-btn a-full-primary">Primary Full Button</button>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-primary" role="button" >Primary Checkbox</span></label>
                <table class="a-table a-table-hover">
                    <thead class="a-table-header-primary">
                        <tr>
                            <th>Primary Table Header</th>
                        </tr>
                    </thead>
                </table>
                <div class="atom-pan-tab">
                    <div class="atom-pan-tab-header a-tab-primary">
                        <span class="atom-pan-tab-header-item active" data-target="#one"><i class="fas fa-shopping-cart"></i> Shoping</span>
                        <span class="atom-pan-tab-header-item" data-target="#two"><i class="fas fa-book"></i> Education</span>
                        <span class="atom-pan-tab-header-item" data-target="#three"><i class="fas fa-music"></i> Music</span>
                    </div>
                    <div class="atom-pan-tab-body">
                        <div id="one" class="active">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti saepe illo dolore ad quod esse laboriosam, nemo tempora, maxime perferendis fugiat? Quibusdam facilis necessitatibus quam iusto modi! Accusantium, distinctio similique?</div>
                        <div id="two">d quod esse laboriosam, nemo tempora, maxime perferendis fugiat? Quibusdam facilis necessitatibus quam </div>
                        <div id="three">ipsam laudantium, numquam quos ex? Et eius corrupti quos. Ratione, sapiente unde.</div>
                    </div>
                </div>
            </div>

            <style>
                :root{
                    --p-primary:#cc913e;
                    --h-primary:#f1cc97;
                    --t-primary:#7b5929;
                }
            </style>

            <pre class="brush: css">
                // Default Atom Colors var
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