@extends('adminlte::page')

@section('title', 'Chef-table gusto')

@section('content_header')
@stop

@section('content')
    
   <div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">coba edit</h3>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('admin.chef.create') }}">
					<button class="btn btn-primary btn-xs">
						<i class="fa fa-plus"></i> Tambah
					</button>
				</a>
				<table class="table table-striped table-bordered" id="datatable">
					<thead>
						<tr>
							<th>Gambar</th>
							<th>Name</th>
							<th>Description</th>
							<th>Created_At</th>
							<th>Updated_At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
	    				@foreach($chef as $v)
	    					<tr>
	    						<td><img width="50" src="{{url(Storage::url($v->file))}}" alt=""></td>
	    						<td>{{$v->name}}</td>
	    						<td>{{$v->description}}</td>
	    						<td>{{$v->created_at}}</td>
	    						<td>{{$v->updated_at}}</td>
	    						<td>
	    							<div class="btn btn-group">
	    								<a href="{{route('admin.chef.edit',$v->id)}}" class="btn btn-warning btn-xs">
	    									<i class="fa fa-pencil"></i>
	    								</a>
	    								<a href="{{ route('admin.chef.delete',$v->id )}}" class="btn btn-danger btn-xs">
	    									<i class="fa fa-trash"></i>
	    								</a>
	    							</div>
	    						</td>
	    					</tr>
	    				@endforeach	
	    				
	    				</tbody>
	    			</table>
	    		</div>
	    	</div>
	    </div>	
	</div>		
@stop