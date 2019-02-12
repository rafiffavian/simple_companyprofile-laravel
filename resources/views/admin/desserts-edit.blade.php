@extends('adminlte::page')

@section('title', 'MainCourse-create Gusto')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Desserts</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		<form action="{{ route('admin.desserts.update',$mydesserts->id) }}" method="post">
          			@csrf
                <input type="hidden" name="_method" value="put">
          			<div class="form-group">
                  <label for="pengisi_acara">Nama Makanan</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <input type="text" name="name" value="{{$mydesserts->name}}" class="form-control" required=""><br>
                  <label for="pengisi_acara">Kategori</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <select name="id_menu" id="" class="form-control">
                    @foreach(App\Menu::all() as $item)
                      <option value="{{$item->id}}"@if($mydesserts->id_menu == $item->id) selected="selected @endif">{{$item->name}}</option>
                    @endforeach  
                    
                  </select><br>
                  <label for="pengisi_acara">Description</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<textarea name="description" id="" cols="30" rows="10" class="form-control">{{$mydesserts->description}}</textarea>
                  <label for="">Harga</label>
                  <input type="text" value="{{$mydesserts->price}}" name="price" value="" class="form-control" required="">
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