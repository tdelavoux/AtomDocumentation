@extends('Documentation.include.layout')

@section('title_page', 'Atom Radios')

@section('content')
    <section id="Components" class="">
        <h2>Radios & Checks</h2>

        <h3>Atom Radio Buttons</h3>
        <article>
            <div>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-primary" role="button" >CSS</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-secondary" role="button" >HTML</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-light" role="button" >PHP</span></label> 
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-success" role="button" >C++</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-info" role="button" >GO</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-warning" role="button" >Python</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-danger" role="button" >C</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-dark" role="button" >Swift</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn" role="button" >Borderless</span></label>
            </div>
            <div>
                <label><input name="line2" type="radio" class="a-check" value="1"checked disabled><span class="a-btn a-primary" role="button" >CSS</span></label>
                <label><input name="line2" type="radio" class="a-check" value="1" disabled><span class="a-btn a-secondary" role="button" >HTML</span></label>
                <label><input name="line2" type="radio" class="a-check" value="1" disabled><span class="a-btn a-light" role="button" >PHP</span></label> 
                <label><input name="line2" type="radio" class="a-check" value="1" disabled><span class="a-btn a-success" role="button" >C++</span></label>
                <label><input name="line2" type="radio" class="a-check" value="1" disabled><span class="a-btn a-info" role="button" >GO</span></label>
                <label><input name="line2" type="radio" class="a-check" value="1" disabled><span class="a-btn a-warning" role="button" >Python</span></label>
                <label><input name="line2" type="radio" class="a-check" value="1" disabled><span class="a-btn a-danger" role="button" >C</span></label>
                <label><input name="line2" type="radio" class="a-check" value="1" disabled><span class="a-btn a-dark" role="button" >Swift</span></label>
                <label><input name="line2" type="radio" class="a-check" value="1" disabled><span class="a-btn" role="button" >Borderless</span></label>
            </div>

            <pre class="brush: html">
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-primary" role="button" >CSS</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-secondary" role="button" >HTML</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-light" role="button" >PHP</span></label> 
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-success" role="button" >C++</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-info" role="button" >GO</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-warning" role="button" >Python</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-danger" role="button" >C</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn a-dark" role="button" >Swift</span></label>
                <label><input name="line" type="radio" class="a-check" value="1" ><span class="a-btn" role="button" >Borderless</span></label>
            </pre>
        </article>

        <h3>Atom Checkbox</h3>
        <article>
            <div>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-primary" role="button" >CSS</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-secondary" role="button" >HTML</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-light" role="button" >PHP</span></label> 
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-success" role="button" >C++</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-info" role="button" >GO</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-warning" role="button" >Python</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-danger" role="button" >C</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-dark" role="button" >Swift</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn" role="button" >Borderless</span></label>
            </div>
            <div>
                <label><input type="checkbox" class="a-check" value="1" disabled><span class="a-btn a-primary" role="button" >CSS</span></label>
                <label><input type="checkbox" class="a-check" value="1" disabled><span class="a-btn a-secondary" role="button" >HTML</span></label>
                <label><input type="checkbox" class="a-check" value="1" disabled><span class="a-btn a-light" role="button" >PHP</span></label> 
                <label><input type="checkbox" class="a-check" value="1" disabled><span class="a-btn a-success" role="button" >C++</span></label>
                <label><input type="checkbox" class="a-check" value="1" disabled><span class="a-btn a-info" role="button" >GO</span></label>
                <label><input type="checkbox" class="a-check" value="1" disabled><span class="a-btn a-warning" role="button" >Python</span></label>
                <label><input type="checkbox" class="a-check" value="1" disabled><span class="a-btn a-danger" role="button" >C</span></label>
                <label><input type="checkbox" class="a-check" value="1" disabled><span class="a-btn a-dark" role="button" >Swift</span></label>
                <label><input type="checkbox" class="a-check" value="1" disabled><span class="a-btn" role="button" >Borderless</span></label>
            </div>

            <pre class="brush: html">
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-primary" role="button" >CSS</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-secondary" role="button" >HTML</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-light" role="button" >PHP</span></label> 
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-success" role="button" >C++</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-info" role="button" >GO</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-warning" role="button" >Python</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-danger" role="button" >C</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn a-dark" role="button" >Swift</span></label>
                <label><input type="checkbox" class="a-check" value="1" ><span class="a-btn" role="button" >Borderless</span></label>
            </pre>
        </article>

        <h3>Radio Button Groups</h3>
        <article>
            <div>
                <div class="a-btn-group">
                    <label><input name="lineazd" type="radio" class="a-check a-check-iconless" value="1" checked><span class="a-btn a-primary" role="button" >CSS</span></label>
                    <label><input name="lineazd" type="radio" class="a-check a-check-iconless" value="1" ><span class="a-btn a-primary" role="button" >HTML</span></label>
                    <label><input name="lineazd" type="radio" class="a-check a-check-iconless" value="1" ><span class="a-btn a-primary" role="button" >PHP</span></label> 
                </div>
            </div>
            
            <div>
                <div class="a-btn-group">
                    <label><input name="lineazd22" type="radio" class="a-check a-check-iconless" value="1"checked ><span class="a-btn a-success" role="button" ><i class="far fa-eye"></i></span></label>
                    <label><input name="lineazd22" type="radio" class="a-check a-check-iconless" value="1" ><span class="a-btn a-danger" role="button" ><i class="far fa-eye-slash"></i></span></label>
                </div>
            </div>

            <pre class="brush: html">
                <div class="a-btn-group">
                    <label><input name="lineazd" type="radio" class="a-check a-check-iconless" value="1" ><span class="a-btn a-primary" role="button" >CSS</span></label>
                    <label><input name="lineazd" type="radio" class="a-check a-check-iconless" value="1" ><span class="a-btn a-primary" role="button" >HTML</span></label>
                    <label><input name="lineazd" type="radio" class="a-check a-check-iconless" value="1" ><span class="a-btn a-primary" role="button" >PHP</span></label> 
                </div>

                <div class="a-btn-group">
                    <label><input name="lineazd" type="radio" class="a-check a-check-iconless" value="1"checked ><span class="a-btn a-success" role="button" ><i class="far fa-eye"></i></span></label>
                    <label><input name="lineazd" type="radio" class="a-check a-check-iconless" value="1" ><span class="a-btn a-danger" role="button" ><i class="far fa-eye-slash"></i></span></label>
                </div>
            </pre>
        </article>

    </section>
@stop