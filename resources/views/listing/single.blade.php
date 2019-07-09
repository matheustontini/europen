@extends('layout')

@section('content')

    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a data-toggle="modal" data-target="#exampleModalLong"><img src="/img/home_img_01.jpg" class="d-block w-100" alt="..."></a>
                  </div>
                  <div class="carousel-item">
                    <a data-toggle="modal" data-target="#exampleModalLong"><img src="/img/home_img_01.jpg" class="d-block w-100" alt="..."></a>
                  </div>
                  <div class="carousel-item">
                    <a data-toggle="modal" data-target="#exampleModalLong"><img src="/img/home_img_01.jpg" class="d-block w-100" alt="..."></a>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <div class="col-12 mt-3">
            <h2 class="house_h">Flat 3 bedrooms good location</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem perspiciatis cum accusantium hic ducimus inventore obcaecati rem minima, repudiandae, eius error aperiam blanditiis nobis est, voluptate ipsam eligendi optio iure quibusdam quo. Hic, quo minima harum perspiciatis impedit, assumenda incidunt recusandae eum tenetur fugiat quae saepe a quod quia, architecto laudantium ab odit. Numquam itaque architecto asperiores labore id ducimus hic, est doloremque eos minus excepturi incidunt possimus quod quas placeat? Placeat, dolorem repellat. Iure nemo illum dolore, culpa quidem ex aut minus molestiae nam maiores ratione, harum consequatur. Excepturi sint eos quae ut, aspernatur repellendus recusandae voluptatibus praesentium error?</p>
        </div>
        <div class="col-12 col-md-6">
            <h3>Features</h3>
            <ul>
                <li><?= $features->rooms ?> bedrooms</li>
                <li>Parking</li>
                <li><?= $features->bathrooms ?> bathrooms</li>
                <li><?= $features->totalsquaremeters ?> Square Meters</li>
            </ul>
        </div>
        <div class="col-12 col-md-6 d-flex align-items-end flex-row-reverse">
            <button class="button">Book an appointment</button>
        </div>
    </div>


  
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="/img/home_img_01.jpg" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection