@include('side.header')

<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 d-flex flex-column align-items-center justify-content-center">



                    <div class="card">

                        <div class="card-body">
                            <div class="p-2">
                                <h5 class="card-title text-center pb-0 fs-4">Nouveau Client</h5>
                            </div>
                            <hr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingEmail" name="nom"
                                            placeholder="Nom du client">
                                        <label for="floatingEmail">Nom du client</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingPassword" name="postnom"
                                            placeholder="Postnom du client">
                                        <label for="floatingPassword">Postnom du client</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingEmail" name="prenom"
                                            placeholder="Prénom du client">
                                        <label for="floatingEmail">Prénom du client</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="sexe" id="floatingSelect" aria-label="State">
                                            <option selected value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                        </select>
                                        <label for="floatingSelect">Sexe client</label>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingEmail" name="adresse"
                                            placeholder="Adresse">
                                        <label for="floatingEmail">Ex: 45 avenue, Q/ Boulevard</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="commune" id="floatingSelect" aria-label="Commune">
                                            <option selected value="Bandal">Bandal</option>
                                            <option  value="Gombe">Gombe</option>
                                            <option value="Lemba">Lemba</option>
                                            <option  value="Makala">Makala</option>
                                        </select>
                                        <label for="floatingSelect">Commune</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="commune" id="floatingSelect" aria-label="Commune">
                                            <option selected value="1">Partenaire 1</option>
                                            <option selected value="2">Partenaire 2</option>
                                            <option selected value="3">Partenaire 3</option>
                                            <option selected value="4">Partenaire 4</option>
                                            <option selected value="5">Partenaire 5</option>
                                        </select>
                                        <label for="floatingSelect">Partenaire</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="commune" id="floatingSelect" aria-label="Commune">
                                            <option selected value="Annuel">Annuel</option>
                                            <option  value="Mensuel">Mensuel</option>

                                        </select>
                                        <label for="floatingSelect">Type Abonnement</label>
                                    </div>
                                </div>
                                <div class="col-mb-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="floatingEmail" name="adresse"
                                            placeholder="Date">
                                        <label for="floatingEmail">Date engagement</label>
                                    </div>
                                </div>

                                    <button class="btn btn-primary"> <i class="bi bi-save"></i> Enregistrer</button>
                                <hr>
                                    <div class="col-12">
                                        <p class="small mb-0">Veuillez contacter   <a href="pages-register.html">l'administrateur</a> en cas de souci.</p>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>



                </div>
            </div>
        </div>

    </section>

</div>

@include('side.footer')
