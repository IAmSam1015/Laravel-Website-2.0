<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Book</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
@include ('links')
  {{-- Update Book Section  --}}
  <section class="hero">
    <div class="wrapper">
      <div class="form signup">
        <header>Edit Book</header>
        @if(Session::has('success'))
        <div class="success-txt" role="alert">
          {{ Session::get('success') }}
        </div>
        @endif
        <form action="{{ url('update-book') }}" method="post">
          @csrf
          <input type="hidden" name="id" value=" {{ $data->id }}">
          <div class="field input">
            <label class="form-label">BookTitle</label>
            <input type="text" class='form-control' name='booktitle' placeholder="{{ "Enter Book Title" }}" value="{{ $data->BookTitle}}">
            @error('booktitle')
            <div class="text-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Publisher</label>
            <input type="text" class='form-control' name='publisher' placeholder="Enter Publisher" value="{{ $data->Publisher }}">
            @error('publisher')
            <div class="text-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Author</label>
            <input type="text" class='form-control' name='author' placeholder="Enter Author" value="{{ $data->Author }}">
            @error('author')
            <div class="text-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Year Published</label>
            <input type="text" class='form-control' name='yearpublished' placeholder="Enter Year Published" value="{{ $data->YearPublished }}">
            @error('yearpublished')
            <div class="text-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="field input">
            <label class="form-label">Volume</label>
            <input type="text" class='form-control' name='volume' placeholder="Enter Volume" value="{{ $data->Volume }}">
            @error('volume')
            <div class="text-danger" role="alert">
              {{ $message }}
            </div>
            @enderror
          </div>
          <br>
          <div class="actions">
            <button type="submit" class="btn btn-primary submit">Submit</button>
            <a href="{{ url('maintenance') }}" class="btn btn-secondary">Back</a>
          </div>
        </form>
      </div>
    </div>
  </section>
<!-- 
  {{-- Footer Section  --}}
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022  | <a href="https://www.facebook.com/samleoniel.sala"><u> Sam Leoneil Sala</u> Website Builder</a>. All rights reserved. 
          
  
        </div>
      </div>
    </div>
  </footer> -->

<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>