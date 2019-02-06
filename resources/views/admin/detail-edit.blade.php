@extends('adminlte::page')

@section('title', 'About-edit Gusto')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit About</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		<div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <form action="{{ route('admin.detail.update',$about->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" value="put" name="_method" >
                      <div class="form-group">
                          <label for="">Upload Gambar</label>
                          <input type="file" name="file" required="" class="form-control"><br>
                          <label for="">Tittle</label>
                          <input type="text" name="judul" value="{{$about->judul}}" required="" class="form-control"><br>
                          <label for="">Description</label>
                          <textarea name="description" required="" cols="30" rows="10" class="form-control">{{$about->description}}</textarea>
                      </div>    
                      <div class="form-group text-right">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
          	</div>
          </div>
      </div>
    </div>

@endsection