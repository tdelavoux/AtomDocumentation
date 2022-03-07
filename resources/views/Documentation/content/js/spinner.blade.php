@extends('Documentation.include.layout')

@section('title_page', 'Atom Spinner')

@section('content')
    <section id="Components">
        <h2>Atom Spinner</h2>

        <h3>Spining Buttons</h3>
        <article>

            <button class="a-btn a-primary a-spin">Click Me</button>
            <button class="a-btn a-secondary a-spin">Click Me</button>
            <button class="a-btn a-light a-spin">Click Me</button>
            <button class="a-btn a-success a-spin">Click Me</button>
            <button class="a-btn a-info a-spin">Click Me</button>
            <button class="a-btn a-warning a-spin">Click Me</button>
            <button class="a-btn a-danger a-spin">Click Me</button>

            <pre class="brush: html">
                <button class="a-btn a-primary a-spin">Click Me</button>
                <button class="a-btn a-secondary a-spin">Click Me</button>
                <button class="a-btn a-tertiary a-spin">Click Me</button>
                <button class="a-btn a-success a-spin">Click Me</button>
                <button class="a-btn a-info a-spin">Click Me</button>
                <button class="a-btn a-warning a-spin">Click Me</button>
                <button class="a-btn a-danger a-spin">Click Me</button>
            </pre>

            <pre class="brush: js">
                var spinners = $('.a-spin').atomSpinnerElement();  // Init
                spinners.forEach( (el) => {
                    el.click(function(){
                        el.spin('Wait ... ');                       // Launch spin with optional text
                        setTimeout( () => el.stop(), 3000);           // Stop Spin
                    }); 
                });
            </pre>
        </article>

        <h3>Spining Elements with update</h3>
        <article>
            <div id="spinTable" class="flex-center" style="min-height:100px;">
                <table class="a-table">
                    <thead>
                        <tr>
                            <th>Col 01</th>
                            <th>Col 02</th>
                            <th>Col 03</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ligne 01</td>
                            <td>Ligne 01</td>
                            <td>Ligne 01</td>
                        </tr>
                        <tr>
                            <td>Ligne 02</td>
                            <td>Ligne 02</td>
                            <td>Ligne 02</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button id="updateTable" class="a-btn a-primary">Click Me</button>

            <pre class="brush: html">
                <div id="spinTableDemo" class="flex-center" style="min-height:100px;">
                    <table class="a-table">
                        <thead>
                            <tr>
                                <th>Col 01</th>
                                <th>Col 02</th>
                                <th>Col 03</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ligne 01</td>
                                <td>Ligne 01</td>
                                <td>Ligne 01</td>
                            </tr>
                            <tr>
                                <td>Ligne 02</td>
                                <td>Ligne 02</td>
                                <td>Ligne 02</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button id="updateTableDemo" class="a-btn a-primary">Click Me</button>
            </pre>

            <pre class="brush: js">
                $spinnerTable = $('#spinTableDemo').atomSpinnerElement();
                $('#updateTableDemo').click(function(){
                    $spinnerTable.spin('Loading datas ... ');
                    setTimeout( () => $spinnerTable.stopAndUpdate('No Data avaiable'), 3000);
                });
            </pre>
        </article>

    </section>
@stop

@push('addJS')
<script type="text/javascript" src="{{asset('js/spinner.js')}}"></script>
@endpush