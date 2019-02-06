@extends('adminlte::page')

@section('title', 'Special-create Gusto')

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
          		<form action="{{ route('admin.special.store') }}" method="post" enctype="multipart/form-data">
          			@csrf
          			<div class="form-group">
          				<label for="pengisi_acara">Nama Makanan</label> <!-- for di dalem lebel itu merujuk pada id <--><br></-->
                  <select name="id_listmenu" id="" class="form-control">
                    @foreach(App\Listmenu::all() as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach  
                  </select><br>
                  <label for="pengisi_acara">Upload Gambar</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <input type="file" name="file" id="pengisi_acara" class="form-control" required="" value="{{old('file')}}"><br>
                  <label for="pengisi_acara">Description</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
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