<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookworm's Domain</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  @include ('links');
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/dashboard" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <ul class="nav">
                        <li><a href="login">LogOut <img src="assets/images/user.png" alt=""></a></li>
                    </ul>   

                </nav>
            </div>
        </div>
    </div>
  </header>

    {{-- Sub Header Section  --}}
    <section class="sub-header">
      <div class="left-content">
        <ul class ='nav-links'>
          <li><a href="{{ url('dashboard')}}">Dashboard</a></li>
          <li><a href="{{ url('add-book')}}">Add Books</a></li>
          <li><a href="{{  url('maintenance') }}">Maintenance</a></li>
        </ul>
      </div>

    </section>
    

      {{-- Books Collection Section  --}}
      <table class="table-content-one">
        <thead><tr>
          <th>Book Title</th>
          <th>Publisher</th>
          <th>Author</th>
          <th>Year Published</th>
          <th>Volume</th>
          <th class="action">Action</th>
          </tr></thead>
        <tbody>
          @php
            $i = 1;   
          @endphp
          @foreach ($data as $book)
              <tr>
              <li></li>
                  <li><h4>{{ $book->BookTitle }}</h4><span>Title</span></li>
                  <li><h4>{{ $book->Publisher }}</h4><span>Publisher</span></li>
                  <li><h4>{{ $book->Author }}</h4><span>Author</span></li>
                  <li><h4>{{ $book->Volume }}</h4><span>Volume</span></li>
                  <li><h4>{{ $book->YearPublished }}</h4><span>Year Published</span></li>
                <td>
                  <a href="{{ url('view-book/'.$book->id) }}" class="btn btn-primary">View</a> 
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
      </section>

  {{-- Footer Section  --}}
  <section class="footer">
    <div class="footer-details">
      <h5>@Library Management System | Godwin Duliente</h5>
      <h5>CS31 Architecture And Organization</h5>
    </div>
  </section>

</body>
</html>