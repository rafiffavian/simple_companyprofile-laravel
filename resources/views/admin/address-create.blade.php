@extends('adminlte::page')

@section('title', 'Breakfast-create Gusto')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Gusto</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		<form action="{{ route('admin.address.store') }}" method="post">
          			@csrf
          			<div class="form-group">
                  <label for="pengisi_acara">Alamat</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <input type="text" name="alamat" value="{{old('alamat')}}" class="form-control" required=""><br>
                  <label for="pengisi_acara">Kecamatan</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <input type="text" name="kecamatan" class="form-control" value="{{old('kecamatan')}}" required=""><br>
                  <label for="pengisi_acara">Kelurahan</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<input type="text" name="kelurahan" class="form-control" value="{{old('kelurahan')}}" required="">
                  <label for="">Kota</label>
                  <input type="text" name="kota" value="{{old('kota')}}" class="form-control" required="">
                  <label for="">No-Tlp</label>
                  <input type="text" name="no_tlp" value="{{old('no_tlp')}}" class="form-control" required="">
                  <label for="">Monday-Thursday</label>
                  <input type="text" name="shift1" value="{{old('shift1')}}" class="form-control" required="">
                  <label for="">Friday-Sunday</label>
                  <input type="text" name="shift2" value="{{old('shift2')}}" class="form-control" required="">
          			</div>
          			<div class="form-group text-right">
                  <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
          		</form>
          	</div>
          </div>
      </div>
    </div>

@endsection