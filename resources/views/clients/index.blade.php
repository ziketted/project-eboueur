@include('side.header')
  <!-- Recent Sales -->
  <div class="col-12">
    <div class="card recent-sales overflow-auto">



      <div class="card-body">
        <h5 class="card-title">Les clients <span>| Aujourd'hui</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">ID client</th>
              <th scope="col">Client</th>
              <th scope="col">Type Abonnement</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><a href="#">#2457</a></th>
              <td>Brandon Jacob</td>
              <td><a href="#" class="text-primary">At praesentium minu</a></td>
              <td><span class="badge bg-success">Approved</span></td>
            </tr>
            <tr>
              <th scope="row"><a href="#">#2147</a></th>
              <td>Bridie Kessler</td>
              <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
              <td><span class="badge bg-warning">Pending</span></td>
            </tr>
            <tr>
              <th scope="row"><a href="#">#2049</a></th>
              <td>Ashleigh Langosh</td>
              <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
              <td><span class="badge bg-success">Approved</span></td>
            </tr>
            <tr>
              <th scope="row"><a href="#">#2644</a></th>
              <td>Angus Grady</td>
              <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
              <td><span class="badge bg-danger">Rejected</span></td>
            </tr>
            <tr>
              <th scope="row"><a href="#">#2644</a></th>
              <td>Raheem Lehner</td>
              <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
              <td><span class="badge bg-success">Approved</span></td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
  </div><!-- End Recent Sales -->


@include('side.footer')
