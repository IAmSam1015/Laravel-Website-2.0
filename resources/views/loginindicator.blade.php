@if(Session::has('success'))
          <div class="success-txt">
            {{ Session::get('success') }}
          </div>
          @endif
          @if(Session::has('fail'))
          <div class="error-txt">
            {{ Session::get('fail') }}
          </div>
          @endif