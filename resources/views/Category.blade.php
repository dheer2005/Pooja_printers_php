@extends('App')
@section('content')
<div class="row">
    <!-- sidebar -->
    <div class="col-lg-3 mt-4" >
      <!-- Toggle button -->
      
      <!-- Collapsible wrapper -->
      <div class="card d-lg-block " id="navbarSupportedContent">
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button text-dark bg-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Related items
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
              <div class="accordion-body">
                <ul class="list-unstyled">
                  <li><a href="#" class="text-dark">Visiting Card </a></li>
                  <li><a href="#" class="text-dark">Letterheads</a></li>
                  <li><a href="#" class="text-dark">Clothing </a></li>
                  <li><a href="#" class="text-dark">Posters </a></li>
                  <li><a href="#" class="text-dark">Stickers </a></li>
                  <li><a href="#" class="text-dark">Invitation</a></li>
                  <li><a href="#" class="text-dark"></a></li>
                  <li><a href="#" class="text-dark">Accessories </a></li>
                </ul>
              </div>
            </div>
          </div>
        
          
        </div>
      </div>
    </div>
    <!-- sidebar -->
    <!-- content -->
    <div class="col-lg-9 mt-4" >
      <div class="row" >
        <div class="col-lg-4 ">
          <div class="card  my-2 shadow-2-strong">
            <img src="{{url('/img/tshirt_1.jpg')}}" class="card-img-top">
            <div class="card-body d-flex flex-column">
              <div class="d-flex flex-row">
                <h5 class="mb-1 me-1">₹199</h5>
                <span class="text-danger"><s> ₹499</s></span>
              </div>
              <p class="card-text">T-shirts with Your Brand logo</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="{{url('Cart')}}" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                 </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="" class="card-img-top">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">₹120.00</h5>
              <p class="card-text">Winter Jacket for Men and Women, All sizes</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="" class="card-img-top">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">₹120.00</h5>
              <p class="card-text">T-shirts with multiple colors, for men and lady</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="" class="card-img-top" >
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">₹120.00</h5>
              <p class="card-text">Blazer Suit Dress Jacket for Men, Blue color</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="" class="card-img-top" >
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">₹510.00</h5>
              <p class="card-text">Slim sleeve wallet Italian leather - multiple colors</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="" class="card-img-top">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">₹79.99</h5>
              <p class="card-text">T-shirts with multiple colors, for men and lady</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="" class="card-img-top">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">₹120.00</h5>
              <p class="card-text">Winter Jacket for Men and Women, All sizes</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="" class="card-img-top">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">₹120.00</h5>
              <p class="card-text">T-shirts with multiple colors, for men and lady</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                  </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="" class="card-img-top">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">₹43.50</h5>
              <p class="card-text">Summer New Men's Denim Jeans Shorts</p>
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                  </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Pagination -->
      <div>
      <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">«</span>
            </a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">»</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Pagination -->
    </div>
  </div>


@endsection