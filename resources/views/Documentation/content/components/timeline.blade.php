
@extends('Documentation.include.layout')

@section('title_page', 'Atom Tabs')

@section('content')
    <section id="Components" class="">
        <h2>Timeline</h2>

        <h3>Basic Timeline</h3>
        <article>

            <div class="a-timeline">
                <div class="a-timeline-step">
                    <a  href="#" class="a-btn a-half-info timeline-button timeline-selectable"><i class="fas fa-info"></i></a>
                    <p class="a-timeline-label">Passed</p>
                </div>
        
                <div class="a-timeline-step">
                    <button class="a-btn a-full-primary timeline-button timeline-selected"><i class="fas fa-paste"></i></button>
                    <p class="a-timeline-label">Current</p>
                </div>
        
                <div class="a-timeline-step">
                    <a  href="#" class="a-btn a-full-light timeline-button"><i class="fas fa-font"></i></a>
                    <p class="a-timeline-label">Reachable</p>
                </div>
        
                <div class="a-timeline-step">
                    <button class="a-btn a-half-light timeline-button" disabled> <i class="fas fa-key"></i> </button>	
                    <p class="a-timeline-label">Blocked</p>
                </div>
            </div>

            <pre class="brush: html">
                <div class="a-timeline">
                    <div class="a-timeline-step">
                        <a  href="#" class="a-btn a-half-info timeline-button timeline-selectable"><i class="fas fa-info"></i></a>
                        <p class="a-timeline-label">Passed</p>
                    </div>
            
                    <div class="a-timeline-step">
                        <button class="a-btn a-full-primary timeline-button timeline-selected"><i class="fas fa-paste"></i></button>
                        <p class="a-timeline-label">Current</p>
                    </div>
            
                    <div class="a-timeline-step">
                        <a  href="#" class="a-btn a-full-light timeline-button"><i class="fas fa-font"></i></a>
                        <p class="a-timeline-label">Reachable</p>
                    </div>
            
                    <div class="a-timeline-step">
                        <button class="a-btn a-half-light timeline-button" disabled> <i class="fas fa-key"></i> </button>	
                        <p class="a-timeline-label">Blocked</p>
                    </div>
                </div>
            </pre>
        </article>

    </section>
@stop