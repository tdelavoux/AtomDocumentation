@extends('Documentation.include.layout')

@section('title_page', 'Atom Form Handler')

@section('content')
    <section id="Components">
        <h2>Atom Form Handler</h2>

        <h3>Exemples</h3>
        <article>

            <form action="#" class="a-fantom-card mw-400 pl-2 pr-2" novalidate>

                <h4 class="center">Basic usage</h4>
                <div class="a-input-group">
                    <input class="a-input a-verify-text"/>
                    <label>Text</label>
                </div>

                <div class="a-input-group">
                    <input class="a-input a-verify-int"/>
                    <label>Integer</label>
                </div>

                <div class="a-input-group">
                    <input class="a-input a-verify-float"/>
                    <label>Float</label>
                </div>

                <div class="a-input-group">
                    <input class="a-input a-verify-phone"/>
                    <label>Phone</label>
                </div>

                <div class="a-input-group">
                    <input class="a-input a-verify-email"/>
                    <label>Email</label>
                </div>

                <div class="a-input-group">
                    <input class="a-input a-verify-date"/>
                    <label>Date</label>
                </div>


                <div class=" a-input-group">
                    <select class="a-input a-verify-select" required>
                        <option value="" disabled selected>Pick a country</option>
                        <option value="1">France</option>
                        <option value="2">Korea</option>
                    </select>
                    <label><i class="fas fa-map-marker-alt"></i>Select</label>
                </div>
        
                <div class="  a-input-group">
                    <label  class="a-input a-input-label-file">
                        <input  type="file" name="file"  class="a-input-file a-verify-file">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <span class="js-fileName">Choissisez un fichier</span>
                    </label>
                    <label><i class="far fa-credit-card"></i>File</label>
                </div>

                <div class="  ar mt-1">
                    <button class="a-btn-sm a-full-primary a-form-handler">VERIFY INPUTS</button>	
                </div>
            </form>

        </article>

        <h3>Documentation and options</h3>
        <article>

            <pre class="brush: js">
                
                /* Cass for submit button. Verifications will be launched on click
                *
                * List of attributes and property :
                * @use  optional    a-data-function	    Define JS function to launch if button is not a submit. Function will be executed if not error is triggered
                * @use  optional    a-check-invisible     Define to also check visible elements
                * @use  optional    a-notify-none         Define to disable global noticiations.
                * @use  optional    a-notify-all          Define to Notify all global errors. By default, one generic error message is triggered
                * @use  optional    a-disable-color     Define to disable red color input with errors
                * @use  optional    a-input-notify-none   Define to disable inputs error messages 
                * @use  optional    a-data-opt-bloc       Add custom JS control function. Return true to block submit, false otherwise
                */
                .a-form-handler
            </pre>

            <pre class="brush: js">

                /**
                * --------- Select Input Verification  ----------
                * 
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-verif          : custom select value that trigger eror. (no value by default)
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-disable-message: Disable error messages under input field
                * 
                */ 

                /**
                * --------- Text Input Verification  ----------
                * 
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-min-length     : min text size
                * @use optional  a-max-length     : max text size
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-nullable       : Define to accept null value
                * @use optional  a-disable-message: Disable error messages under input field
                * 
                */

                /**
                * --------- Textarea with count Verification  ----------
                * 
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-min-length     : min text size
                * @use optional  a-max-length     : max text size
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-nullable       : Define to accept null value
                * @use optional  a-disable-message: Disable error messages under input field
                * 
                */

                /**
                * --------- Date Input Verification  ----------
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-date-format    : Define accepted date format (accept YY, YYYY, DD, MM, /, -)
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-nullable       : Define to accept null value
                * @use optional  a-disable-message: Disable error messages under input field
                */

                /**
                * --------- Phone Input Verification  ----------
                * 
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-phone-format   : French format accepted mobile or fixe
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-nullable       : Define to accept null value
                * @use optional  a-disable-message: Disable error messages under input field
                * 
                */

                /**
                * --------- Email Input Verification  ----------
                * 
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-nullable       : Define to accept null value
                * @use optional  a-disable-message: Disable error messages under input field
                * 
                */

                /**
                * --------- Integer Input Verification  ----------
                * 
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-nullable       : Define to accept null value
                * @use optional  a-disable-message: Disable error messages under input field
                * @use optional  a-min            : Min value. Default 0
                * @use optional  a-max			  : Max value. Default 2147483647
                */

                /**
                * --------- Float Input Verification  ----------
                * 
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-nullable       : Define to accept null value
                * @use optional  a-disable-message: Disable error messages under input field
                * @use optional  a-min            : Min value. Default 0
                * @use optional  a-max			  : Max value. Default 2147483647
                * 
                */

                /**
                * --------- Checkboxs Verification  ----------
                * Simple checkbox verification
                *
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-disable-message: Disable error messages under input field
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * 
                */

                /**
                * --------- One In List Verification  ----------
                * Verify one checked in may
                * 
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use required  a-shared-name    : input name shared by all checkbox to evaluate
                * @use optional  a-disable-message: Disable error messages under input field
                * 
                */

                /**
                * --------- Radios Verification  ----------
                * Verify one radio has been selected in a list sharing the same name attr 
                *
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-disable-message: Disable error messages under input field
                */

                /**
                * --------- Files Input Verification ----------
                * verify File has been uplaoded
                * 
                * @use optional  a-alternate-verif: Add custom JS function to control input value. Return true to trigger error.
                * @use optional  a-error-message  : Custom error message for a-alternate-verif function.
                * @use optional  a-name           : Input name. Used in error messages
                * @use optional  a-disable-message: Disable error messages under input field
                * @use optional  a-nullable       : Define to accept null value
                */
            </pre>

        </article>

    </section>
@stop