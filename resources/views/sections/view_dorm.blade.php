  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="box">Viewing Dorm {{$dorm->id}}</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 card">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"> </li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-moon.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Slide</h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item "> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-dark.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Slide</h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-light.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Slide</h5>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 card">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <h2 class="">Address</h2>
            </div>
            <div class="col-md-6">
              <h2 class="">Attributes<br></h2>

              @php
              $udar = new \App\UserDormAttributeRating;
              $clean = $udar->getSpecificRatings($dorm->id, 1);
              $safe = $udar->getSpecificRatings($dorm->id, 2);
              $amb = $udar->getSpecificRatings($dorm->id, 3);
              $fac = $udar->getSpecificRatings($dorm->id, 4);
              $acc = $udar->getSpecificRatings($dorm->id, 5);
              echo $clean[0];
              @endphp

              
                
             


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6"><iframe width="100%" height="400" src="https://maps.google.com/maps?q=New%20York&amp;z=14&amp;output=embed" scrolling="no" frameborder="0"></iframe></div>
            <div class="col-md-6">
              <div class="row"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Details</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" data-target="#tabone">Basic</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="" data-toggle="tab" data-target="#tabtwo">Filters</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" data-toggle="tab" data-target="#tabthree">Landlord</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content mt-2">
                <div class="tab-pane fade show active" id="tabone" role="tabpanel">
                  <div class="row">
                    <div class="col-md-6">
                      <p>Name</p> 
                      <p>Address</p> 
                      <p>Business Permit</p> 
                      <p>Description</p> 
                      <p>Price</p>
                      <p>Attribute Ratings</p>
                      <p>Curfew</p> 
                      <p>Rooms</p> 
                      <p>Filters</p> 
                      <p>Genders</p> 
                      <p>Photo</p>
                      <p><img src=""></p></div>
                      <div class="col-md-6">
                       <p>{{$dorm->name}}</p>
                       <p>{{$dorm->address}}</p>
                       <p>{{$dorm->business_permit}}</p>
                       <p>{{$dorm->description}}</p>
                       <p>{{$dorm->price}}</p>
                       <p>{{$dorm->name}}</p>
                       <p>{{$dorm->curfew}}</p>
                       <p>{{$dorm->rooms}}</p>
                       <p>{{$dorm->name}}</p>
                       <p>{{$dorm->genders}}</p>
                       <p>Photo</p>
                       <p><img src=""></p>
                     </div>
                   </div>
                 </div>
                 <div class="tab-pane fade" id="tabtwo" role="tabpanel">

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa fa-cloud text-primary mr-2"></i>Cras justo odio</li>
                    <li class="list-group-item"><i class="fa fa-bookmark text-primary mr-2"></i> Dapibus ac facilisis in</li>
                    <li class="list-group-item"><i class="fa fa-bell text-primary mr-2"></i> Morbi leo risus</li>
                    <li class="list-group-item"><i class="fa fa-life-ring text-primary mr-2"></i> Porta ac consectetur ac</li>
                    <li class="list-group-item"><i class="fa fa-paper-plane text-primary mr-2"></i> Vestibulum at eros</li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="tabthree" role="tabpanel">
                  <h3>
                    About the Landlord
                  </h3>
                  <div class="row">
                    <div class="col-md-6">
                      <img alt="landlord photo" src="{{URL::asset($dorm->landlord()->first()->photo)}}" class="img-thumbnail" />
                    </div>
                    <div class="col-md-6">
                      <h4>{{$dorm->getLandlordName()}}</h4>
                      <p>
                        {{$dorm->landlord()->first()->about}}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="">Reviews<br></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="pb-4">
    <div class="container">
      <div class="row py-5">
        <hr>
        <div class="col-md-7">
          <div class="media">
            <img class="mr-3" alt="Bootstrap Media Preview" src="https://www.layoutit.com/img/sports-q-c-64-64-8.jpg" />
            <div class="media-body">
              <h5 class="mt-0">
                Nested media heading
              </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              <div class="media mt-3">
               <a class="pr-3" href="#"><img alt="Bootstrap Media Another Preview" src="https://www.layoutit.com/img/sports-q-c-64-64-2.jpg" /></a>
               <div class="media-body">
                <h5 class="mt-0">
                  Nested media heading
                </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <form role="form">
          <div class="form-group py-2">

            <label for="review">
              Review
            </label>
            <input type="password" class="form-control" id="review" name="review"/>
          </div>

          <button type="submit" class="btn btn-primary">
            Submit
          </button>
        </form>
      </div>
    </div>
    <div class="py-5">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </div>



<!--<div class="container-fluid p-5">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-muted">
        Viewing Dorm no. {{$dorm->id}}
      </h3>
      <div class="row my-5">
        <div class="col-md-8">
          <h6>

          </h6>
          <div class="list-group">
           <p>Name</p> {{$dorm->name}}
           <p>Address</p> {{$dorm->address}}
           <p>Business Permit</p> {{$dorm->business_permit}}
           <p>Description</p> {{$dorm->description}}
           <p>Price</p> {{$dorm->price}}
           <p>Attribute Ratings</p> {{$dorm->name}}
           <p>Curfew</p> {{$dorm->curfew}}
           <p>Rooms</p> {{$dorm->rooms}}
           <p>Filters</p> {{$dorm->name}}
           <p>Genders</p> {{$dorm->genders}}
           <p>Photo</p>
           <p><img src=""></p>
         </div>
         <h3>
          User Reviews and Comments
        </h3>
        <div class="media">
          <img class="mr-3" alt="Bootstrap Media Preview" src="https://www.layoutit.com/img/sports-q-c-64-64-8.jpg" />
          <div class="media-body">
            <h5 class="mt-0">
              Nested media heading
            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            <div class="media mt-3">
             <a class="pr-3" href="#"><img alt="Bootstrap Media Another Preview" src="https://www.layoutit.com/img/sports-q-c-64-64-2.jpg" /></a>
             <div class="media-body">
              <h5 class="mt-0">
                Nested media heading
              </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            </div>
          </div>
        </div>
      </div>
      <form role="form">
        <div class="form-group py-2">

          <label for="review">
            Review
          </label>
          <input type="password" class="form-control" id="review" name="review"/>
        </div>

        <button type="submit" class="btn btn-primary">
          Submit
        </button>
      </form>
    </div>
    <div class="col-md-4 py-5">
      <h3>
        About the Landlord
      </h3>
      <div class="row py-3">
        <div class="col-md-6">
          <img alt="landlord photo" src="{{URL::asset($dorm->landlord()->first()->photo)}}" class="img-thumbnail" />
        </div>
        <div class="col-md-6">
          <h4>{{$dorm->getLandlordName()}}</h4>
          <p>
            {{$dorm->landlord()->first()->about}}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>-->