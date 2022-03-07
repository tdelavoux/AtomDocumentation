@extends('Documentation.include.layout')

@section('title_page', 'Atom Panels')

@section('content')
    <section id="Components">
        <h2>Inputs</h2>

        <h3>Basic Inputs</h3>
        <article>
            <div class="a-fantom-card mw-400 pl-2 pr-2">

                <h4 class="center">Payment Informations</h4>
                <div class="a-input-group">
                    <input class="a-input" placeholder="Michel Del Pêche"/>
                    <label><i class="far fa-address-card"></i>Text</label>
                </div>

                <div class="  a-input-group">
                    <span role="button" class="a-input-button"><i class="fas fa-search"></i></span>
                    <input class="a-input" placeholder="Michel Del Pêche"/>
                    <label><i class="far fa-address-card"></i>Search</label>
                </div>

                <div class="  a-input-group a-input-load">
                    <input class="a-input" placeholder="loading in progress" />
                    <label><i class="fab fa-searchengin"></i>Spinner</label>
                </div>

                <div class="  a-input-group">
                    <select class="a-input" required>
                        <option value="" disabled selected>Pick a country</option>
                        <option value="1">France</option>
                        <option value="2">Korea</option>
                    </select>
                    <label><i class="fas fa-map-marker-alt"></i>Select</label>
                </div>
        
                <div class="  a-input-group">
                    <input type="phone" class="a-input" placeholder="22 rue de la Raye" readonly/>
                    <label><i class="fas fa-mobile-alt"></i>ReadOnly</label>
                </div>

                <div class="  a-input-group">
                    <input type="phone" class="a-input" placeholder="22 rue de la Raye" disabled/>
                    <label><i class="fas fa-mobile-alt"></i>Disabled</label>
                </div>
        
                <div class="col-md-4 a-input-group">
                    <input class="a-input" placeholder="***" type="password" />
                    <label><i class="far fa-credit-card"></i>PWD</label>
                </div>

                <div class="  a-input-group">
                    <label  class="a-input a-input-label-file">
                        <input  type="file" name="file"  class="a-input-file">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <span class="js-fileName">Choissisez un fichier</span>
                    </label>
                    <label><i class="far fa-credit-card"></i>File</label>
                </div>

                <div class="  ar mt-1">
                    <button class="a-btn-sm a-link-primary">ANNULER</button>	
                    <button class="a-btn-sm a-full-primary">VALIDER</button>	
                </div>
            </div>

            <pre class="brush: html">
                <div class="a-input-group">
                    <input class="a-input" placeholder="Michel Del Pêche"/>
                    <label><i class="far fa-address-card"></i>Text</label>
                </div>

                <div class="  a-input-group">
                    <span role="button" class="a-input-button"><i class="fas fa-search"></i></span>
                    <input class="a-input" placeholder="Michel Del Pêche"/>
                    <label><i class="far fa-address-card"></i>Search</label>
                </div>

                <div class="  a-input-group a-input-load">
                    <input class="a-input" placeholder="loading in progress" />
                    <label><i class="fab fa-searchengin"></i>Spinner</label>
                </div>

                <div class="  a-input-group">
                    <select class="a-input" required>
                        <option value="" disabled selected>Pick a country</option>
                        <option value="1">France</option>
                        <option value="2">Korea</option>
                    </select>
                    <label><i class="fas fa-map-marker-alt"></i>Select</label>
                </div>
        
                <div class="  a-input-group">
                    <input type="phone" class="a-input" placeholder="22 rue de la Raye" readonly/>
                    <label><i class="fas fa-mobile-alt"></i>ReadOnly</label>
                </div>

                <div class="  a-input-group">
                    <input type="phone" class="a-input" placeholder="22 rue de la Raye" disabled/>
                    <label><i class="fas fa-mobile-alt"></i>Disabled</label>
                </div>
        
                <div class="col-md-4 a-input-group">
                    <input class="a-input" placeholder="***" type="password" />
                    <label><i class="far fa-credit-card"></i>PWD</label>
                </div>

                <div class="  a-input-group">
                    <label  class="a-input a-input-label-file">
                        <input  type="file" name="file"  class="a-input-file">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <span class="js-fileName">Choissisez un fichier</span>
                    </label>
                    <label><i class="far fa-credit-card"></i>File</label>
                </div>
            </pre>
        </article>

        <h3>Borderless Inputs</h3>
        <article>
            <div class="a-fantom-card mw-400 pl-2 pr-2">

                <h4 class="center">Payment Informations</h4>
                <div class="a-input-group">
                    <input class="a-input a-borderless" placeholder="Michel Del Pêche"/>
                    <label><i class="far fa-address-card"></i>Text</label>
                </div>

                <div class="  a-input-group">
                    <span role="button" class="a-input-button"><i class="fas fa-search"></i></span>
                    <input class="a-input a-borderless" placeholder="Michel Del Pêche"/>
                    <label><i class="far fa-address-card"></i>Search</label>
                </div>

                <div class="  a-input-group a-input-load">
                    <input class="a-input a-borderless" placeholder="loading in progress" />
                    <label><i class="fab fa-searchengin"></i>Spinner</label>
                </div>

                <div class="  a-input-group">
                    <select class="a-input a-borderless" required>
                        <option value="" disabled selected>Pick a country</option>
                        <option value="1">France</option>
                        <option value="2">Korea</option>
                    </select>
                    <label><i class="fas fa-map-marker-alt"></i>Select</label>
                </div>
        
                <div class="  a-input-group">
                    <input type="phone" class="a-input a-borderless" placeholder="22 rue de la Raye" readonly/>
                    <label><i class="fas fa-mobile-alt"></i>ReadOnly</label>
                </div>

                <div class="  a-input-group">
                    <input type="phone" class="a-input a-borderless" placeholder="22 rue de la Raye" disabled/>
                    <label><i class="fas fa-mobile-alt"></i>Disabled</label>
                </div>
        
                <div class="col-md-4 a-input-group">
                    <input class="a-input a-borderless" type="password" placeholder="***" />
                    <label><i class="far fa-credit-card"></i>PWD</label>
                </div>

                <div class="  a-input-group">
                    <label  class="a-input a-borderless a-input-label-file">
                        <input  type="file" name="file"  class="a-input-file">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <span class="js-fileName">Choissisez un fichier</span>
                    </label>
                    <label><i class="far fa-credit-card"></i>File</label>
                </div>

                <div class="  ar mt-1">
                    <button class="a-btn-sm a-link-primary">ANNULER</button>	
                    <button class="a-btn-sm a-full-primary">VALIDER</button>	
                </div>
            </div>

            <pre class="brush: html">
                <div class="a-input-group">
                    <input class="a-input a-borderless" placeholder="Michel Del Pêche"/>
                    <label><i class="far fa-address-card"></i>Text</label>
                </div>
            </pre>
        </article>

        <h3>Borderfull Inputs</h3>
        <article>
            <div class="a-fantom-card mw-400 pl-2 pr-2">

                <h4 class="center">Payment Informations</h4>
                <div class="a-input-group">
                    <input class="a-input a-borderfull" placeholder="Michel Del Pêche"/>
                    <label><i class="far fa-address-card"></i>Text</label>
                </div>

                <div class="  a-input-group">
                    <span role="button" class="a-input-button"><i class="fas fa-search"></i></span>
                    <input class="a-input a-borderfull" placeholder="Michel Del Pêche"/>
                    <label><i class="far fa-address-card"></i>Search</label>
                </div>

                <div class="  a-input-group a-input-load">
                    <input class="a-input a-borderfull" placeholder="loading in progress" />
                    <label><i class="fab fa-searchengin"></i>Spinner</label>
                </div>

                <div class="  a-input-group">
                    <select class="a-input a-borderfull" required>
                        <option value="" disabled selected>Pick a country</option>
                        <option value="1">France</option>
                        <option value="2">Korea</option>
                    </select>
                    <label><i class="fas fa-map-marker-alt"></i>Select</label>
                </div>
        
                <div class="  a-input-group">
                    <input type="phone" class="a-input a-borderfull" placeholder="22 rue de la Raye" readonly/>
                    <label><i class="fas fa-mobile-alt"></i>ReadOnly</label>
                </div>

                <div class="  a-input-group">
                    <input type="phone" class="a-input a-borderfull" placeholder="22 rue de la Raye" disabled/>
                    <label><i class="fas fa-mobile-alt"></i>Disabled</label>
                </div>
        
                <div class="col-md-4 a-input-group">
                    <input class="a-input a-borderfull" type="password" placeholder="***" />
                    <label><i class="far fa-credit-card"></i>PWD</label>
                </div>

                <div class="a-input-group">
                    <label class="a-input a-borderfull a-input-label-file">
                        <input  type="file" name="file"  class="a-input-file">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <span class="js-fileName">Choissisez un fichier</span>
                    </label>
                    <label><i class="far fa-credit-card"></i>File</label>
                </div>

                <div class="ar mt-1">
                    <button class="a-btn-sm a-link-primary">ANNULER</button>	
                    <button class="a-btn-sm a-full-primary">VALIDER</button>	
                </div>
            </div>

            <pre class="brush: html">
                <div class="a-input-group">
                    <input class="a-input a-borderfull" placeholder="Michel Del Pêche"/>
                    <label><i class="far fa-address-card"></i>Text</label>
                </div>
            </pre>

            <pre class="brush: js">
                $('.a-input-file').atomFileInput();
            </pre>
        </article>

        <h3>Drop Files Input</h3>
        <article>

            <div class="a-uploader mw-400">
                <div class="file-bloc">
                    <input class="file-upload" type="file" name="fileUpload" />
                    <label for="file-upload" class="file-upload-label">
                        <div class="file-start">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            <div>Déposez l'archive ici ou :</div>
                            <span class="a-btn a-primary file-upload-btn">Sélectionner un fichier</span>
                        </div>
                    </label>
                </div>
                <div class="file-bloc-result">
                    <p class="file-recap small-text"></p>
                    <button class="a-btn a-primary a-btn-return"> Annuler </button>
                </div>
            </div>
            
            <pre class="brush: html">
                <div class="a-uploader">
                    <div class="file-bloc">
                        <input class="file-upload" type="file" name="fileUpload" />
                        <label for="file-upload" class="file-upload-label">
                            <div class="file-start">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                <div>Déposez l'archive ici ou :</div>
                                <span class="btn btn-primary file-upload-btn">Sélectionner un fichier</span>
                            </div>
                        </label>
                    </div>
                    <div class="file-bloc-result">
                        <p class="file-recap small-text"></p>
                        <button class="a-btn-return"> Annuler </button>
                    </div>
                </div>
            </pre>

            <pre class="brush: js">
                $('.a-uploader').atomFileLoader();
            </pre>
           
        </article>

        <h3>Counter Input</h3>
        <article>
            <div class="a-fantom-card mw-400 pl-2 pr-2">
                <div class="atomCnt">
                    <button class="a-btn-sm a-half-light">-</button>
                    <input type="hidden">
                    <span class="atom-counter-number"></span>
                    <button class="a-btn-sm a-half-light">+</button>
                </div>

                <div class="atomCnt">
                    <button class="a-btn-sm a-half-info">-</button>
                    <input type="hidden">
                    <span class="atom-counter-number"></span>
                    <button class="a-btn-sm a-half-info">+</button>
                </div>
            </div>

            <pre class="brush: html">
                <div id="atomCounter">
                    <button class="a-btn-sm a-light">-</button>
                    <input type="hidden">
                    <span class="atom-counter-number"></span>
                    <button class="a-btn-sm a-light">+</button>
                </div>
            </pre>

            <pre class="brush: js">
                $('#atomCounter').atomCounter();
 
                /* 
                Options {
                    increment   : 1,    -> Increment Value step
                    initialValue: 0,    -> initial value
                    min         : 0,    -> min value accepted
                    max         : 99999 -> max value accepted
                }
                */
            </pre>
           
        </article>

    </section>
@stop