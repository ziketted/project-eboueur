@include('side.header')

<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center">



            <div class="card">

              <div class="card-body">
                <div class="">
                  <h5 class="card-title  fs-4">Client</h5>
                  <p class=" small">ID : client </p>
                  <p class="">Type abonnement</p>
                </div>

                <div class="col-12 ">
                    <div class="row">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-12">
                              <button class="btn btn-success w-100 h-200" type="submit">Travail exécuté &nbsp;&nbsp; <i class="bi bi-check2-circle"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-12">
                              <button class="btn btn-warning w-100" type="submit">Non exécuté &nbsp;&nbsp; <i class="bi bi-clipboard-x"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-12">
                              <button class="btn btn-danger w-100" type="submit">Client absent &nbsp;&nbsp; <i class="bi bi-person-x"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <p class="small mb-0">Veuillez contacter   <a href="pages-register.html">l'administrateur</a> en cas de souci.</p>
                  </div>
              </div>
            </div>



          </div>
        </div>
      </div>

    </section>

</div>

@include('side.footer')
