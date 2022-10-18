<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bookworm's Domain</title>
</head>
<body>

  @include ('links')
  @include ('loadscreen')
  @include ('header')

  <!-- SPACER -->
  <section class="sub-header">
      <div class="left-content">
        <ul class ='nav-links'>
          <li></li>
        </ul>
      </div>
      </section>
  <!-- SPACER -->


      <table class="table-content-one">
        <thead>      @include ('ofm')
          <th>Book Title</th>
          <th>Publisher</th>
          <th>Author</th>
          <th>Year Published</th>
          <th>Volume</th>
        </thead>

          @php
            $i = 1;   
          @endphp
          @foreach ($data as $book)

          <thead>      @include ('ofm')
            <tr>
          <th>{{ $book->BookTitle }}</th>
          <th>{{ $book->Publisher }}</th>
          <th>{{ $book->Author }}</th>
          <th>{{ $book->YearPublished }}</th>
          <th>{{ $book->Volume }}</th>
            </tr>
        </thead>
          @endforeach

      </table>

    <!-- <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p><h5>Bookworm's Domain © 2022 <a href="https://www.facebook.com/samleoniel.sala"><u><h5> Sam Leoneil Sala</h5></u> Website Builder</a></h5></p>
          
  
        </div>
      </div>
    </div>
  </footer> -->

  <!-- {{-- Footer Section  --}}
  <section class="footer">
    <div class="footer-details">
      <h5>@Bookworm's Library </h5>
      <h5><a href="https://www.facebook.com/samleoniel.sala">| Sam Leoneil Sala </a></h5>
    </div>
  </section> -->

</body>
</html>