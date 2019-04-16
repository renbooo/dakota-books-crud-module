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
              <form method="post" action="{{url('books')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="BookTitle">Judul</label>
                          <input type="text" name="books_title" class="form-control" id="inputEmail4" placeholder="judul buku">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="BookWriter">Penulis</label>
                          <input type="text" name="books_writer" class="form-control" id="inputPassword4" placeholder="penulis buku">
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="BookTitle">Deskripsi</label>
                          <input type="text" name="books_description" class="form-control" id="inputEmail4" placeholder="deskripsi buku">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="BookWriter">Jenis</label>
                          <input type="text" name="books_genre" class="form-control" id="inputPassword4" placeholder="jenis buku">
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="BookTitle">Bahasa</label>
                          <input type="text" name="books_language" class="form-control" id="inputEmail4" placeholder="deskripsi buku">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="BookWriter">Negara</label>
                          <input type="text" name="books_country" class="form-control" id="inputPassword4" placeholder="jenis buku">
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="BookTitle">Publisher</label>
                          <input type="text" name="books_publisher" class="form-control" id="inputEmail4" placeholder="deskripsi buku">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="BookWriter">Price</label>
                          <input type="text" name="books_price" class="form-control" id="inputPassword4" placeholder="jenis buku">
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="BookTitle">QTY</label>
                          <input type="text" name="books_qty" class="form-control" id="inputEmail4" placeholder="deskripsi buku">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="BookWriter">Filename</label>
                          <input type="text" name="books_filename" class="form-control" id="inputPassword4" placeholder="jenis buku">
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
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
      <form method="post" action="{{url('books')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Judul buku:</label>
            <input type="text" name="" class="form-control" name="title">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Keterangan:</label>
              <input type="text" name="" class="form-control" name="description">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Qty">Stock:</label>
            <input type="text" name="" class="form-control" name="qty">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Penerbit:</label>
                <select name="publisher">
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
      </form>
    </div>
  </body>
</html> --}}