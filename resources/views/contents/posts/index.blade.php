@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

@foreach($post as $data)
<div class="card">
  <div class="card-header">
    <a href="posts/{{$data->id}}/edit" class="btn btn-sm btn-info float-right"><i class="ti ti-pencil"></i></a>

    <form action="posts/{{$data->id}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-sm btn-danger float-right"><i class="ti ti-trash"></i></button>
    </form>

  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$data->quote}}</p>
      <footer class="blockquote-footer">
        <small>ditulis pada :{{$data->created_at}}</small>
      </footer>
    </blockquote>
  </div>
</div>
@endforeach

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