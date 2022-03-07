@extends('Documentation.include.layout')

@section('title_page', 'Atom Data Table')

@section('content')
    <section id="Components">
        <h2>Data Table</h2>

        <h3>Initialise Datatable</h3>
        <article>

            <table id="atomDataTableDemo" class="a-table a-table-delimited a-table-hover">
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
                        <td>#1254</td>
                        <td>Lorem ipsum atria</td>
                        <td>12/10/2021</td>
                        <td>Value 2 azdqsd</td>
                        <td>Value 3 fezdf</td>
                    </tr>
                    <tr>
                        <td>#1254</td>
                        <td>Lorem irrrrrrpsum atridddddda</td>
                        <td>25/06/1991 </td>
                        <td>Value sfzefsdf 2</td>
                        <td>Value sdfzefsdf 3</td>
                    </tr>
                    <tr>
                        <td>#1254</td>
                        <td>Lorem ipsum atria</td>
                        <td>15/01/2022</td>
                        <td>Value 2</td>
                        <td>Valssssssssssue 3</td>
                    </tr>
        
                </tbody>
            </table>

            <pre class="brush: html">
                <table id="atomDataTableDemo" class="a-table a-table-delimited a-table-hover">
                     
                </table>
            </pre>

            <pre class="brush: js">
                $('#atomDataTableDemo').atomDataTable();
            </pre>
        </article>

        <h3>Initialise Options</h3>
        <article>

            <table id="atomDataTableDemo2" class="a-table a-table-delimited a-table-hover">
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
                        <td>#1254</td>
                        <td>Lorem ipsum atria</td>
                        <td>12/10/2021</td>
                        <td>Value 2 azdqsd</td>
                        <td>Value 3 fezdf</td>
                    </tr>
                    <tr>
                        <td>#1254</td>
                        <td>Lorem irrrrrrpsum atridddddda</td>
                        <td>25/06/1991 </td>
                        <td>Value sfzefsdf 2</td>
                        <td>Value sdfzefsdf 3</td>
                    </tr>
                    <tr>
                        <td>#1254</td>
                        <td>Lorem ipsum atria</td>
                        <td>15/01/2022</td>
                        <td>Value 2</td>
                        <td>Valssssssssssue 3</td>
                    </tr>
        
                </tbody>
            </table>

            <pre class="brush: html">
                <table id="atomDataTableDemo" class="a-table a-table-delimited a-table-hover">
                     
                </table>
            </pre>

            <pre class="brush: js">
                $('#atomDataTableDemo2').atomDataTable({

                    // Define columns enable by input search. If this option is not set, all fields are enable
                    filterableColumn : [1,2,3],

                    // Activate sorting on specific columns. If this option is not set, all columns are sortable
                    orderableColumn : [1,2,4],

                    // Define specific data type for sorting. String by default
                    // value in ['string', 'number', 'Ymd', 'm/d/Y', 'm-d-y', 'd/m/Y', 'd-m-y']
                    columnType : {
                        0 : 'number',
                        1 : 'string',
                        2 : 'd/m/Y'
                    }
                });
            </pre>
        </article>

    </section>
@stop
