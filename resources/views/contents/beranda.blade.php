@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

<div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>


@endsection

@push('script')
  <script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>     
  <script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}} "></script>     
  <script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>     
  <script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}} "></script>
  <!-- waves js -->
  <script src="{{asset('assets/pages/waves/js/waves.min.js')}}"></script>
  <!-- jquery slimscroll js -->
  <script type="text/javascript" src="{{asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}} "></script>
  <!-- modernizr js -->
  <script type="text/javascript" src="{{asset('assets/js/SmoothScroll.js')}}"></script>
  <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}} "></script>
  <script src="{{asset('assets/js/pcoded.min.js')}}"></script>
  <script src="{{asset('assets/js/vertical-layout.min.js')}} "></script>
  <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <!-- Custom js -->
  <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>

  </script>
  @if(session('success'))
  <script>
      swal("Selamat", "{{ session('success') }}");
  </script>
  @endif

@endpush