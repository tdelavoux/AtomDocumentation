@extends('Documentation.include.layout')

@section('title_page', 'Atom Panels')

@section('content')
    <section id="Components">
        <h2>Panels</h2>

        <h3>Basic Panels</h3>
        <article>
            <div class="a-panel a-panel-primary">
                <div class="a-panel-header">Title to pannel</div>
                <div class="a-panel-content">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-secondary">
                <div class="a-panel-header">Title to pannel</div>
                <div class="a-panel-content">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-success">
                <div class="a-panel-header">Title to pannel</div>
                <div class="a-panel-content">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-danger">
                <div class="a-panel-header">Title to pannel</div>
                <div class="a-panel-content">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-warning">
                <div class="a-panel-header">Title to pannel</div>
                <div class="a-panel-content">Content Body to use</div>
                <div class="a-panel-footer">Content footer to use</div>
            </div>
        
            <div class="a-panel a-panel-info">
                <div class="a-panel-header">Title to pannel</div>
                <div class="a-panel-content">Content Body to use</div>
                <div class="a-panel-footer">Content footer to use</div>
            </div>
        
            <div class="a-panel a-panel-light">
                <div class="a-panel-header">Title to pannel</div>
                <div class="a-panel-content">Content Body to use</div>
                <div class="a-panel-footer">Content footer to use</div>
            </div>
        
            <div class="a-panel a-panel-dark">
                <div class="a-panel-header">Title to pannel</div>
                <div class="a-panel-content">Content Body to use</div>
                <div class="a-panel-footer">Content footer to use</div>
            </div>

            <pre class="brush: html">
                <div class="a-panel a-panel-primary">
                    <div class="a-panel-header">Title to pannel</div>
                    <div class="a-panel-content">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-secondary">
                    <div class="a-panel-header">Title to pannel</div>
                    <div class="a-panel-content">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-success">
                    <div class="a-panel-header">Title to pannel</div>
                    <div class="a-panel-content">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-danger">
                    <div class="a-panel-header">Title to pannel</div>
                    <div class="a-panel-content">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-warning">
                    <div class="a-panel-header">Title to pannel</div>
                    <div class="a-panel-content">Content Body to use</div>
                    <div class="a-panel-footer">Content footer to use</div>
                </div>
            
                <div class="a-panel a-panel-info">
                    <div class="a-panel-header">Title to pannel</div>
                    <div class="a-panel-content">Content Body to use</div>
                    <div class="a-panel-footer">Content footer to use</div>
                </div>
            
                <div class="a-panel a-panel-light">
                    <div class="a-panel-header">Title to pannel</div>
                    <div class="a-panel-content">Content Body to use</div>
                    <div class="a-panel-footer">Content footer to use</div>
                </div>
            
                <div class="a-panel a-panel-dark">
                    <div class="a-panel-header">Title to pannel</div>
                    <div class="a-panel-content">Content Body to use</div>
                    <div class="a-panel-footer">Content footer to use</div>
                </div>
            </pre>
        </article>


        <h3>Collapse Panels</h3>
        <article>
            <div class="a-panel a-panel-primary a-panel-collapsable">
                <div class="a-panel-header a-collapsable" collapse-target="#content1">Title to pannel</div>
                <div class="a-panel-content" id="content1">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-secondary a-panel-collapsable">
                <div class="a-panel-header a-collapsable" collapse-target="#content2">Title to pannel</div>
                <div class="a-panel-content" id="content2">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-success a-panel-collapsable">
                <div class="a-panel-header a-collapsable" collapse-target="#content3">Title to pannel</div>
                <div class="a-panel-content" id="content3">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-danger a-panel-collapsable">
                <div class="a-panel-header a-collapsable" collapse-target="#content4">Title to pannel</div>
                <div class="a-panel-content" id="content4">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-warning a-panel-collapsable">
                <div class="a-panel-header a-collapsable" collapse-target="#content5">Title to pannel</div>
                <div class="a-panel-content" id="content5">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-info a-panel-collapsable">
                <div class="a-panel-header a-collapsable" collapse-target="#content6">Title to pannel</div>
                <div class="a-panel-content" id="content6">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-light a-panel-collapsable">
                <div class="a-panel-header a-collapsable" collapse-target="#content7">Title to pannel</div>
                <div class="a-panel-content" id="content7">Content Body to use</div>
            </div>
        
            <div class="a-panel a-panel-dark a-panel-collapsable">
                <div class="a-panel-header a-collapsable" collapse-target="#content8">Title to pannel</div>
                <div class="a-panel-content" id="content8">Content Body to use</div>
            </div>

            <pre class="brush: html">
                <div class="a-panel a-panel-primary a-panel-collapsable">
                    <div class="a-panel-header a-collapsable" collapse-target="#content1">Title to pannel</div>
                    <div class="a-panel-content" id="content1">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-secondary a-panel-collapsable">
                    <div class="a-panel-header a-collapsable" collapse-target="#content2">Title to pannel</div>
                    <div class="a-panel-content" id="content2">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-success a-panel-collapsable">
                    <div class="a-panel-header a-collapsable" collapse-target="#content3">Title to pannel</div>
                    <div class="a-panel-content" id="content3">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-danger a-panel-collapsable">
                    <div class="a-panel-header a-collapsable" collapse-target="#content4">Title to pannel</div>
                    <div class="a-panel-content" id="content4">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-warning a-panel-collapsable">
                    <div class="a-panel-header a-collapsable" collapse-target="#content5">Title to pannel</div>
                    <div class="a-panel-content" id="content5">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-info a-panel-collapsable">
                    <div class="a-panel-header a-collapsable" collapse-target="#content6">Title to pannel</div>
                    <div class="a-panel-content" id="content6">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-light a-panel-collapsable">
                    <div class="a-panel-header a-collapsable" collapse-target="#content7">Title to pannel</div>
                    <div class="a-panel-content" id="content7">Content Body to use</div>
                </div>
            
                <div class="a-panel a-panel-dark a-panel-collapsable">
                    <div class="a-panel-header a-collapsable" collapse-target="#content8">Title to pannel</div>
                    <div class="a-panel-content" id="content8">Content Body to use</div>
                </div>
            </pre>
        </article>

    </section>
@stop