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
    <div class="col-12 col-lg-12">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title">Table Head Dark</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Judul & Penulis</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Bahasa</th>
                                <th scope="col">Publisher</th>
                                <th scope="col">Harga</th>
                                <th scope="col">QTY</th>
                                <th scope="col">Gambar</th>
                                <th scope="col" colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($books as $book)
                            <tr>
                              <td>{{$book['books_id']}}</td>
                              <td>{{$book['books_title']}} <br> {{$book['books_writer']}}</td>
                              <td>{{$book['books_description']}}</td>
                              <td>{{$book['books_genre']}}</td>
                              <td>{{$book['books_language']}}</td>
                              <td>{{$book['books_publisher']}}</td>
                              <td>{{$book['books_price']}}</td>
                              <td>{{$book['books_qty']}}</td>
                              <td>
                                <div class="row magnific-wrapper">
                                  <div class="col-sm-6">
                                      <div class="card card-statistics text-center">
                                          <div class="card-body p-0">
                                              <div class="portfolio-item">
                                                  <img src="{{ url('uploads/file/'.$book->books_filepath) }}" alt="gallery-img">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              </td>
                              
                              <td><a href="{{action('BookController@edit', $book['books_id'])}}" class="btn btn-warning">Edit</a></td>
                              <td>
                                <form action="{{action('BookController@destroy', $book['books_id'])}}" method="post">
                                  @csrf
                                  <input name="_method" type="hidden" value="DELETE">
                                  <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <a href="{{route('books.create')}}" class="btn btn-primary">Tambah</a><br><br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul Buku</th>
        <th>Keterangan</th>
        <th>Penerbit</th>
        <th>Stock</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($books as $book)
      <tr>
        <td>{{$book['id']}}</td>
        <td>{{$book['title']}}</td>
        <td>{{$book['description']}}</td>
        <td>{{$book['publisher']}}</td>
        <td>{{$book['qty']}}</td>
        
        <td><a href="{{action('BookController@edit', $book['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BookController@destroy', $book['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html> --}}