@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

<div class="card">
  <div class="card-header">
    Edit Postingan <i class="fa fa-pencil"></i>
  </div>
  <div class="card-body">
    <form class="form-material" action="/posts/{{ $post->id }}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group form-primary">
      <input type="hidden" name="user_id" value="1">
          <textarea class="form-control" name="quote">{{ $post->quote }}</textarea>
          <span class="form-bar"></span>
          <label class="float-label">Tulis Sesuatu</label>
      </div>
     <!--  <div class="form-group row">
          <label class="col-sm-2 col-form-label">Upload Foto</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="gambar">
          </div>
      </div> -->
      <div class="form-group form-primary has-danger">
          <input type="text" name="caption" class="form-control" value="{{$post->quote}}">
          <span class="form-bar text-danger"></span>
          <label class="float-label">Caption</label>
      </div>
      <div>
        <button type="submit" class="btn btn-sm btn-primary float-right">Simpan</button>
      </div>
    </form>
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
@endpush