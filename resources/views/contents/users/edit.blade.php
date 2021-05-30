@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

<div class="card">
  <div class="card-header">
    Edit Data <i class="fa fa-pencil"></i>
  </div>
  <div class="card-body">
    <form class="form-material" action="/users/{{$user->id}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group form-primary has-danger">
          <input type="text" name="name" class="form-control" value="{{$user->name}}">
          @error('name')
          <span class="form-bar text-danger">{{$message}}</span>
          @enderror
          <label class="float-label">Username</label>
      </div>
      <div class="form-group form-primary">
          <input type="text" name="namalengkap" class="form-control" value="{{$user->namalengkap}}">
          @error('namalengkap')
          <span class="form-bar text-danger">{{$message}}</span>
          @enderror
          <label class="float-label">Namalengkap</label>
      </div>
      <div class="form-group form-primary">
          <input type="email" name="email" class="form-control" value="{{$user->email}}">
          @error('email')
          <span class="form-bar text-danger">{{$message}}</span>
          @enderror
          <label class="float-label">Email</label>
      </div>
      <div class="form-group form-primary">
          <input type="number" name="umur" class="form-control" value="{{$user->umur}}">
          <span class="form-bar"></span>
          <label class="float-label">Umur</label>
      </div>
      <div class="form-group form-primary">
          <input type="text" name="kelamin" class="form-control" maxlength="6" value="{{$user->kelamin}}">
          <span class="form-bar"></span>
          <label class="float-label">Jenis Kelamin</label>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-group form-primary">
              <input type="text" name="alamat" class="form-control" value="{{$user->alamat}}">
              <span class="form-bar"></span>
              <label class="float-label">Alamat</label>
          </div>
        </div>
        <div class="col-6">          
          <div class="form-group form-primary">
              <input type="text" name="kelurahan" class="form-control" value="{{$user->kelurahan}}">
              <span class="form-bar"></span>
              <label class="float-label">Kelurahan</label>
          </div>
        </div>
        <div class="col-6">          
          <div class="form-group form-primary">
              <input type="text" name="kecamatan" class="form-control" value="{{$user->kecamatan}}">
              <span class="form-bar"></span>
              <label class="float-label">Kecamatan</label>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group form-primary">
              <input type="text" name="kota" class="form-control" value="{{$user->kota}}">
              <span class="form-bar"></span>
              <label class="float-label">Kota</label>
          </div>
        </div>
      </div>
      <div class="form-group form-primary">
          <input type="text" name="hobi" class="form-control" value="{{$user->hobi}}">
          <span class="form-bar"></span>
          <label class="float-label">Hobi</label>
      </div>
      <div class="form-group form-primary">
          <textarea class="form-control" name="bio">{{$user->bio}}</textarea>
          <span class="form-bar"></span>
          <label class="float-label">Bio</label>
      </div>
      <div>
        <button type="submit" class="btn btn-sm btn-primary float-right">Simpan</button>
      </div>
    </form>
  </div>
</div>


@endsection