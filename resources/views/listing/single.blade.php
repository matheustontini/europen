<?php $i = 0 ?>
<?php $e = 0 ?>
@extends('layout')

@section('content')

    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($features->images as $image)
                    <div class="carousel-item">
                        <a data-toggle="modal" data-target="#exampleModalLong<?= $i ?>"><img src="<?= $image->image ?>" class="d-block w-100" alt="..."></a>
                    </div>
                    <?php $i += 1 ?>
                    @endforeach
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
            <h2 class="house_h"><?= $features->type . " " . $features->rooms . " BEDROOMS " . $features->neighborhood ?></h2>
            <p><?= $features->description ?></p>
        </div>
        <div class="col-12 col-md-6">
            <h3>Features</h3>
            <ul>
                <li><?= $features->rooms ?> bedrooms</li>
                <li><?= $features->bathrooms ?> bathrooms</li>
                <li><?= $features->totalsquaremeters ?> Square Meters</li>
                <li>Built in <?= $features->yearbuilt ?></li>
            </ul>
        </div>
        <div class="col-12 col-md-6 d-flex align-items-end flex-row-reverse">
            <button class="button">Book an appointment</button>
        </div>
        <div class="col-12">
            @if ($features->rentorsell == 'rent')
                <h4>Rental price: € <?= $features->rentalprice ?></h4>   
            @else
                <h4>Sale price: € <?= $features->saleprice ?></h4>                   
            @endif
        </div>
    </div>


  
    <!-- Modal -->
    @foreach ($features->images as $image)
    <div class="modal fade" id="exampleModalLong<?= $e ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="<?= $image->image ?>" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php $e += 1 ?>
    @endforeach

    <script>
        const pics = document.querySelector(".carousel-item");
        document.addEventListener("DOMContentLoaded", function () {
            pics.className = "carousel-item active";
        });
    </script>
@endsection