
@extends('Documentation.include.layout')

@section('title_page', 'Atom Tables')

@section('content')
    <section id="Components" class="">
        <h2>Tables</h2>

        <h3>Stripped and hovered Table</h3>
        <article>
            <table class="a-table a-table-stripped a-table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <td >#1254</td>
                        <td>Lorem ipsum atria</td>
                        <td>value</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                    </tr>
                    <tr>
                        <td >#1254</td>
                        <td>Lorem ipsum atria</td>
                        <td>value</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                    </tr>
                    <tr>
                        <td >#1254</td>
                        <td>Lorem ipsum atria</td>
                        <td>value</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                    </tr>
        
                </tbody>
            </table>

            <pre class="brush: html">
                <table class="a-table a-table-stripped a-table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Value</th>
                            <th>Value 2</th>
                            <th>Value 3</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        <tr>
                            <td >#1254</td>
                            <td>Lorem ipsum atria</td>
                            <td>value</td>
                            <td>Value 2</td>
                            <td>Value 3</td>
                        </tr>
                        <tr>
                            <td >#1254</td>
                            <td>Lorem ipsum atria</td>
                            <td>value</td>
                            <td>Value 2</td>
                            <td>Value 3</td>
                        </tr>
                        <tr>
                            <td >#1254</td>
                            <td>Lorem ipsum atria</td>
                            <td>value</td>
                            <td>Value 2</td>
                            <td>Value 3</td>
                        </tr>
            
                    </tbody>
                </table>
            </pre>

        </article>


        <h3>Delimited Table</h3>
        <article>
            <table class="a-table a-table-delimited a-table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                    </tr>
                </thead>
        
                <tbody>
                    <tr>
                        <td >#1254</td>
                        <td>Lorem ipsum atria</td>
                        <td>value</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                    </tr>
                    <tr>
                        <td >#1254</td>
                        <td>Lorem ipsum atria</td>
                        <td>value</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                    </tr>
                    <tr>
                        <td >#1254</td>
                        <td>Lorem ipsum atria</td>
                        <td>value</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                    </tr>
        
                </tbody>
            </table>

            <pre class="brush: html">
                <table class="a-table a-table-delimited a-table-hover">
                    <!-- Table content -->
                </table>
            </pre>

        </article>

        <h3>Table Headers</h3>
        <article>
            <table class="a-table a-table-hover">
                <thead class="a-table-header-primary">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                    </tr>
                </thead>
            </table>

            <table class="a-table a-table-hover">
                <thead class="a-table-header-secondary">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                    </tr>
                </thead>
            </table>

            <table class="a-table a-table-hover">
                <thead class="a-table-header-success">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                    </tr>
                </thead>
            </table>

            <table class="a-table a-table-hover">
                <thead class="a-table-header-danger">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                    </tr>
                </thead>
            </table>

            <table class="a-table a-table-hover">
                <thead class="a-table-header-warning">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                    </tr>
                </thead>
            </table>

            <table class="a-table a-table-hover">
                <thead class="a-table-header-info">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                    </tr>
                </thead>
            </table>

            <table class="a-table a-table-hover">
                <thead class="a-table-header-light">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                    </tr>
                </thead>
            </table>

            <table class="a-table a-table-hover">
                <thead class="a-table-header-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Value 2</th>
                        <th>Value 3</th>
                    </tr>
                </thead>
            </table>  

            <pre class="brush: html">

                <table class="a-table a-table-hover">
                    <thead class="a-table-header-primary"></thead>
                </table>

                <table class="a-table a-table-hover">
                    <thead class="a-table-header-secondary"></thead>
                </table>

                <table class="a-table a-table-hover">
                    <thead class="a-table-header-success"></thead>
                </table>

                <table class="a-table a-table-hover">
                    <thead class="a-table-header-danger"></thead>
                </table>

                <table class="a-table a-table-hover">
                    <thead class="a-table-header-warning"></thead>
                </table>

                <table class="a-table a-table-hover">
                    <thead class="a-table-header-info"></thead>
                </table>

                <table class="a-table a-table-hover">
                    <thead class="a-table-header-light"></thead>
                </table>

                <table class="a-table a-table-hover">
                    <thead class="a-table-header-dark"></thead>
                </table>
            </pre>

        </article>

    </section>
@stop