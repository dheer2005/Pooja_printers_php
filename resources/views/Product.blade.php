@extends('App')
@section('content')
      <div class="row" >
        @foreach ($Product as $Product)
        <div class="col-md-3 ">
          <div class="card shadow-2-strong pro">
              <img src="{{$Product->image }}" class="card-img-top img">
              <div class="card-body d-flex flex-column">
                  <div class="d-flex flex-row">
                    <h5 class="card-title">&#8377;{{$Product->price}}</h5>
              
                  </div><p class="card-text">{{$Product->name}}</p>
                  <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                    <a href="{{ route('add_to_Cart', ['id' => $Product->id]) }}" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                      </div>
              </div>
          </div>
      </div>
        @endforeach
        
        {{-- <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
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
          </div> --}}</div>
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