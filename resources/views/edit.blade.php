@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
  <li class="nav-static-title">Personal</li>
  <li>
      <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
          <i class="nav-icon ti ti-rocket"></i>
          <span class="nav-title">Dashboards</span>
          <span class="nav-label label label-danger">9</span>
      </a>
      <ul aria-expanded="false">
          <li> <a href='index.html'>Default</a> </li>
          <li> <a href='index-ecommerce.html'>Ecommerce</a> </li>
          <li> <a href='index-car-dealer.html'>Car Dealer</a> </li>
          <li> <a href='index-stock-market.html'>Stock Market</a> </li>
          <li> <a href='index-dating.html'>Dating</a> </li>
          <li> <a href='index-job-portal.html'>Job Portal</a> </li>
          <li> <a href='index-crm.html'>CRM</a> </li>
          <li> <a href='index-real-estate.html'>Real Estate</a> </li>
          <li> <a href='index-crypto-currency.html'>Crypto Currency</a> </li>
      </ul>
  </li>
  <li><a href="app-chat.html" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Chat</span></a> </li>

@endsection

@section('content-header')
  <div class="col-md-12 m-b-30">
      <!-- begin page title -->
      <div class="d-block d-sm-flex flex-nowrap align-items-center">
          <div class="page-title mb-2 mb-sm-0">
              <h1>Form Layouts</h1>
          </div>
          <div class="ml-auto d-flex align-items-center">
              <nav>
                  <ol class="breadcrumb p-0 m-b-0">
                      <li class="breadcrumb-item">
                          <a href="index.html"><i class="ti ti-home"></i></a>
                      </li>
                      <li class="breadcrumb-item">
                          Forms
                      </li>
                      <li class="breadcrumb-item active text-primary" aria-current="page">Form Layouts</li>
                  </ol>
              </nav>
          </div>
      </div>
      <!-- end page title -->
  </div>
@endsection

@section('content')
  <div class="col-xl-12">
      <div class="card card-statistics">
          <div class="card-header">
              <div class="card-heading">
                  <h4 class="card-title">Form Row</h4>
              </div>
          </div>
          <div class="card-body">
            @foreach($books as $book)
              <form method="post" action="{{route('books.update', $book->books_id)}}" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                  {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-row">
                      <div class="input-group col-md-6">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Judul</span>
                          </div>
                          <input type="text" name="books_title" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="{{$book->books_title}}">
                      </div>
                      <div class="input-group col-md-6">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Penulis</span>
                          </div>
                          <input type="text" name="books_writer" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="{{$book->books_writer}}">
                      </div>                  
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-row">
                      <div class="input-group col-md-12">
                          <div class="input-group-prepend">
                              <span class="input-group-text" for="">Deskripsi</span>
                          </div>
                          <textarea class="form-control" name="books_description" aria-label="With textarea">{{$book->books_description}}</textarea>
                      </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-row">
                      <div class="input-group col-md-6">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Genre</span>
                          </div>
                          <input type="text" name="books_genre" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="{{$book->books_genre}}">
                      </div>
                      <div class="input-group col-md-6">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Bahasa</span>
                          </div>
                          <input type="text" name="books_language" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="{{$book->books_language}}">
                      </div>                  
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-row">
                      <div class="input-group col-md-6">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Negara</span>
                          </div>
                          <input type="text" name="books_country" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="{{$book->books_country}}">
                      </div>
                      <div class="input-group col-md-6">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">Publisher</span>
                          </div>
                          <input type="text" name="books_publisher" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" value="{{$book->books_publisher}}">
                      </div>                  
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-row">
                    <div class="input-group col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Harga (Rp)</span>
                        </div>
                        <input type="text" class="form-control" name="books_price" value="{{$book->books_price}}" aria-label="Amount (to the nearest dollar)">
                    </div>
                  </div>
                </div>
                <div class="form-row rangeslider-wrapper">
                  <div class="col-12">
                      <div class="col-md-12">
                        <div class="card-statistics">
                          <div class="card-body">
                            <div class="slider-1">
                                <input type="number" id="slider-1" name="books_qty" value="{{$book->books_qty}}" />
                                <label class="col-md-12 col-form-label">Stok Buku (Min=10, Max=100)</label>
                            </div>
                          </div>
                        </div>
                      </div>                    
                    </div>
                </div>
                <div class="row magnific-wrapper">
                  <div class="col-xl-3 col-md-4 col-sm-6">
                      <div class="card card-statistics text-center">
                          <div class="card-body p-0">
                              <div class="portfolio-item">
                                  <img src="{{ url('uploads/file/'.$book->books_filepath) }}" alt="gallery-img">
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3">
                      <div class="custom-file">
                          <input type="file" name="books_filepath" class="custom-file-input" id="inputGroupFile02">
                          <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                      </div>
                      <div class="input-group-append">
                          <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                      </div>
                  </div>
                </div>
                 
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
              @endforeach
          </div>
      </div>
  </div>
@endsection

{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.7 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Tambah Buku Baru</h2><br/>
      @foreach($books as $book)
      <form method="post" action="{{route('books.update', $book->id)}}" enctype="multipart/form-data">
        <input name="_method" type="hidden" value="PATCH">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Judul buku:</label>
            <input type="text" class="form-control" name="title" value="{{$book->title}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Keterangan:</label>
              <input type="text" class="form-control" name="description" value="{{$book->description}}">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Qty">Stock:</label>
            <input type="text" class="form-control" name="qty" value="{{$book->qty}}">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Penerbit:</label>
                <select name="publisher" value="{{$book->publisher}}">
                  <option value="Pustaka Imam Syafi`i">Pustaka Imam Syafi`i</option>
                  <option value="Pustaka Ibnu Katsir">Pustaka Ibnu Katsir</option>
                  <option value="Darul Haq">Darul Haq</option>  
                  <option value="At-tibyan">At-tibyan</option>  
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
        @endforeach
      </form>
    </div>
  </body>
</html> --}}