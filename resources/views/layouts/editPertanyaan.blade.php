@extends('layouts.master')
@section('form')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT PERTANYAAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/{{$p->id}} " method="POST">
			  @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul','$p->judul')}}" placeholder="Tuliskan Judul">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <input type="text" class="form-control" id="isi" name="isi" value="{{old('isi','$p->isi')}}" placeholder="Tuliskan Isi Pertanyaan">
                  </div>
				  <div class="form-group">
                    <label for="judul">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tuliskan Tanggal">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">CREATE</button>
                </div>
              </form>
            </div>

@endsection