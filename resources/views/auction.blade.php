@extends('layouts.app')

@section('content')
    <div class="container">
		<div class="row">

			<div class="col-xl-12 col-lg-10 col-md-9">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
                  <div class="col-md-12 form-group">
                  Auction
        	    	</div>


				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				{{-- @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif --}}
            {{-- @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif --}}
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->

						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/th.jpg" alt="">
								<div class="product-details">
									<h6>Agarponis</h6>
									<div class="price">
                                    <h6>400000</h6>
                                    <h6>3day 11h 20m</h6>
									</div>
									<div class="prd-bottom">


										{{-- <a href="{{ route('detailBurung.show','1') }}" class="social-info"> --}}
											<span class="lnr lnr-move"></span>
											<p class="hover-text">detail</p>
										</a>
                                        <a href="" class="social-info" data-toggle="modal" data-target="#myModal">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">bid</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">

						{{-- <form class="row login_form" action="" method="post" id="contactForm" novalidate="novalidate">
                        {{ csrf_field() }}

                        <div class="col-md-6 ">
								Bid :
							</div>
                            <div class="col-md-6 ">
								<input type="text"  id="bid" name="bid"  >
							</div>
                            <br>
                            <br>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Bid</button>

                            </div>
                        </form> --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
					</div>
@endsection
