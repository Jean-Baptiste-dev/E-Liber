<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{ route('espace_admin')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de Bord
                            </a>
                            <a class="nav-link" href="{{ route('compte')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                                    Créer un compte
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope fa-fw"></i></div>
                                   Messages
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Intervenants
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('liste_professeur')}}">Liste des professeurs</a>
                                    <a class="nav-link" href="{{ route('professeur.create')}}">Ajouter un intervenant</a>
									
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Etudiants/cours
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Etudiants
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{ route('liste_etudiant')}}">Liste des étudiants inscrits</a>
                                            <a class="nav-link" href="{{ route('etudiant.create')}}">Inscrire étudiant</a>
                                           
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Cours/Examens
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Assigner un cour</a>
                                            <a class="nav-link" href="#">Renseigner une note</a>
                                            
                                        </nav>
                                    </div>
                                </nav>
                            </div>
							<div class="sb-sidenav-menu-heading">Compétences</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsemodule" aria-expanded="false" aria-controls="collapsemodule">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Modules/Filières
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsemodule" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Nos modules</a>
                                    <a class="nav-link" href="{{ route('liste_filiere')}}">Les filières</a>
                                    <a class="nav-link" href="{{ route('liste_niveau')}}">Les Grades/Niveaux</a>
									
                                </nav>
                            </div>
							<div class="sb-sidenav-menu-heading">Gestion</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesecretaire" aria-expanded="false" aria-controls="collapsesecretaire">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Sécretaires
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsesecretaire" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Les sécretaires</a>
                                    <a class="nav-link" href="#">Ajouter un sécreatire</a>
									
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Scolarité</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Paiement
                            </a>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Connecté à la page</div>
                        <p>Administration</p>
                    </div>
                </nav>
            </div>