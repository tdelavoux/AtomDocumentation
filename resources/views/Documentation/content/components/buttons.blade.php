@extends('Documentation.include.layout')

@section('title_page', 'Atom Buttons')

@section('content')
    <section id="Components" class="">
        <h2>Buttons</h2>

        <h3>Basic Atom Buttons</h3>
        <article>
            <div>
                <button class="a-btn a-primary">Primary</button>
                <button class="a-btn a-secondary">Secondary</button>
                <button class="a-btn a-light">Light</button>
                <button class="a-btn a-success">Success</button>
                <button class="a-btn a-info">Info</button>
                <button class="a-btn a-warning">Warning</button>
                <button class="a-btn a-danger">Danger</button>
                <button class="a-btn a-dark">Dark</button>
            </div>
            <div>
                <button class="a-btn a-primary" disabled>Primary</button>
                <button class="a-btn a-secondary" disabled>Secondary</button>
                <button class="a-btn a-light" disabled>Light</button>
                <button class="a-btn a-success" disabled>Success</button>
                <button class="a-btn a-info" disabled>Info</button>
                <button class="a-btn a-warning" disabled>Warning</button>
                <button class="a-btn a-danger" disabled>Danger</button>
                <button class="a-btn a-dark" disabled>Dark</button>
            </div>

            <div>
                <button class="a-btn a-primary"><i class="fas fa-money-check-alt"></i></button>
                <button class="a-btn a-secondary"><i class="far fa-angry"></i></button>
                <button class="a-btn a-light"><i class="fas fa-balance-scale"></i></button>
                <button class="a-btn a-success"><i class="far fa-check-square"></i></button>
            </div>

            <pre class="brush: html">
                <button class="a-btn a-primary">Primary</button>
                <button class="a-btn a-secondary">Secondary</button>
                <button class="a-btn a-light">Light</button>
                <button class="a-btn a-success">Success</button>
                <button class="a-btn a-info">Info</button>
                <button class="a-btn a-warning">Warning</button>
                <button class="a-btn a-danger">Danger</button>
                <button class="a-btn a-dark">Dark</button>
            </pre>
        </article>

        <h3>Full Atom Buttons</h3>
        <article>
            <div>
                <button class="a-btn a-full-primary">Primary</button>
                <button class="a-btn a-full-secondary">Secondary</button>
                <button class="a-btn a-full-light">Light</button>
                <button class="a-btn a-full-success">Success</button>
                <button class="a-btn a-full-info">Info</button>
                <button class="a-btn a-full-warning">Warning</button>
                <button class="a-btn a-full-danger">Danger</button>  
                <button class="a-btn a-full-dark">Dark</button>
            </div>
            <div>
                <button class="a-btn a-full-primary" disabled>Primary</button>
                <button class="a-btn a-full-secondary" disabled>Secondary</button>
                <button class="a-btn a-full-light" disabled>Tertiary</button>
                <button class="a-btn a-full-success" disabled>Success</button>
                <button class="a-btn a-full-info" disabled>Info</button>
                <button class="a-btn a-full-warning" disabled>Warning</button>
                <button class="a-btn a-full-danger" disabled>Danger</button>
                <button class="a-btn a-full-dark" disabled>Dark</button>
            </div>
            <div>
                <button class="a-btn a-full-primary"><i class="fas fa-money-check-alt"></i></button>
                <button class="a-btn a-full-secondary"><i class="far fa-angry"></i></button>
                <button class="a-btn a-full-light"><i class="fas fa-balance-scale"></i></button>
                <button class="a-btn a-full-success"><i class="far fa-check-square"></i></button>
            </div>
            
            <pre class="brush: html">
                <button class="a-btn a-full-primary">Primary</button>
                <button class="a-btn a-full-secondary">Secondary</button>
                <button class="a-btn a-full-light">Light</button>
                <button class="a-btn a-full-success">Success</button>
                <button class="a-btn a-full-info">Info</button>
                <button class="a-btn a-full-warning">Warning</button>
                <button class="a-btn a-full-danger">Danger</button>
                <button class="a-btn a-full-dark">Dark</button>
            </pre>
        </article>

        <h3>Half and link Buttons</h3>
        <article>
            <div class="mt-1">
                <button class="a-btn-sm a-link-primary">ANNULER</button>
                <button class="a-btn-sm a-half-primary">VALIDER</button>	
                <button class="a-btn-sm a-full-primary">VALIDER</button>	
            </div>
    
            <div class=" mt-1">
                <button class="a-btn-sm a-link-success">ANNULER</button>
                <button class="a-btn-sm a-half-success">VALIDER</button>	
                <button class="a-btn-sm a-full-success">VALIDER</button>	
            </div>
    
            <div class="mt-1">
                <button class="a-btn-sm a-link-secondary">ANNULER</button>
                <button class="a-btn-sm a-half-secondary">VALIDER</button>	
                <button class="a-btn-sm a-full-secondary">VALIDER</button>	
            </div>
    
            <div class="mt-1">
                <button class="a-btn-sm a-link-light">ANNULER</button>
                <button class="a-btn-sm a-half-light">VALIDER</button>	
                <button class="a-btn-sm a-full-light">VALIDER</button>	
            </div>
    
            <div class="mt-1">
                <button class="a-btn-sm a-link-danger">ANNULER</button>
                <button class="a-btn-sm a-half-danger">VALIDER</button>	
                <button class="a-btn-sm a-full-danger">VALIDER</button>	
            </div>
    
            <div class="mt-1">
                <button class="a-btn-sm a-link-warning">ANNULER</button>
                <button class="a-btn-sm a-half-warning">VALIDER</button>	
                <button class="a-btn-sm a-full-warning">VALIDER</button>	
            </div>
    
            <div class="mt-1">
                <button class="a-btn-sm a-link-info">ANNULER</button>
                <button class="a-btn-sm a-half-info">VALIDER</button>	
                <button class="a-btn-sm a-full-info">VALIDER</button>	
            </div>

            <pre class="brush: html">
                <button class="a-btn-sm a-link-success">ANNULER</button>
                <button class="a-btn-sm a-half-success">VALIDER</button>	
                <button class="a-btn-sm a-full-success">VALIDER</button>	
            </pre>
        </article>
        
        <h3>Button Sizes</h3>
        <article>
            <div>
                <button class="a-btn-xs a-danger">danger</button>
                <button class="a-btn-sm a-primary">Primary</button>
                <button class="a-btn a-secondary">Secondary</button>
            </div>
            <div>
                <button class="a-btn-xs a-full-danger">danger</button>
                <button class="a-btn-sm a-full-primary">Primary</button>
                <button class="a-btn a-full-secondary">Secondary</button>
            </div>
            <div>
                <button class="a-btn-xs a-danger" disabled>danger</button>
                <button class="a-btn-sm a-primary" disabled>Primary</button>
                <button class="a-btn a-secondary" disabled>Secondary</button>
            </div>

            <pre class="brush: html">
                <button class="a-btn-xs a-danger">danger</button>
                <button class="a-btn-sm a-primary">Primary</button>
                <button class="a-btn a-secondary">Secondary</button>
            </pre>
        </article>

        <h3>Cutomise colors</h3>

        <p>All buttons colors might be overwrited by changing Atom css var but be aware this action will influence all of the components sharing same type (primary, secondary ... etc). </p>
        <p>Please, check the <a href="{{ route('documentation', ['utilities', 'custom']) }}">Cutomize</a> section for more informations</p>

        <article>

            <pre class="brush: html">
            :root{
                --p-primary:#437cb5;
                --h-primary:#d0e0fc;
                --t-primary:#0b3d91;

                [...]
            }
            </pre>
        </article>

    </section>
@stop