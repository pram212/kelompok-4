@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Hallo {{$user->name}}</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<div class="card">
  <div class="card-block">
    <!-- Row start -->
    <div class="row m-b-30">
        <div class="col-lg-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs md-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#postinngan" role="tab">Postingan</a>
                    <div class="slide"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profil" role="tab">Profil</a>
                    <div class="slide"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages3" role="tab">Pesan</a>
                    <div class="slide"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings3" role="tab">Followers</a>
                    <div class="slide"></div>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content card-block">
                <div class="tab-pane active" id="postinngan" role="tabpanel">
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
                </div>
                <div class="tab-pane" id="profil" role="tabpanel">
                    <div class="card mb-3">
                      <div class="card-header justify-content-between d-flex">
                        <span>Your Profile</span>
                        <a href="/users/{{$user->id}}/edit" class="text-right">Edit</a>
                        <!-- <span>Edit</span> -->
                      </div>
                      <div class="card-body mx-3">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{asset('assets/images/avatar-4.jpg')}}" alt="">
                            <hr>  
                            <h6>Bio :</h6>
                            <blockquote style="text-align: justify;">
                              {{$user->bio}}
                            </blockquote>
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">@ {{$user->name}}</h5>
                              <hr>
                              <table>
                                <tr>
                                  <td>Nama Lengkap</td>
                                  <td>: {{$user->namalengkap}}</td>
                                </tr>
                                <tr>
                                  <td>Umur</td>
                                  <td>: {{$user->umur}}</td>
                                </tr>
                                <tr>
                                  <td>Jenis Kelamin</td>
                                  <td>: {{$user->kelamin}}</td>
                                </tr>
                                <tr>
                                  <td>Hobi</td>
                                  <td>: {{$user->hobi}}</td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td>: {{$user->alamat}}, {{$user->kelurahan}}, {{$user->kecamatan}}, {{$user->kota}}, </td>
                                </tr>
                              </table>
                              <p class="card-text"><small class="text-muted">terakhir diupdate: {{$user->updated_at}}</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="tab-pane" id="messages3" role="tabpanel">
                    
                </div>
                <div class="tab-pane" id="settings3" role="tabpanel">
                    
                </div>
            </div>
        </div>
      </div>
  </div>


@endsection