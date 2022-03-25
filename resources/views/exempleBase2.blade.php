@extends('basicpage')
@section('content')
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">
                                    Gérer facilement votre école ou votre structure de formation avec E-Liber!!</h3><br>
                                    
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Votre numéro matricule</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Entrez votre numéro matricule" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Mot de passe</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Entrez par défaut passwordEL21" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Se souvenir de moi</label>
                                                </div>
                                            </div> 
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                               
                                                <a class="btn btn-primary" href="index.html">Connexion</a>
                                            </div>
                                        </form>
                                    </div> 
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; E-Liber 2021</div>
                            <div>
                               
                                &middot;
                                <a href="#">Mentions Légales</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @endsection