@extends('adminlte::page')

@section('title', 'Message-table')

@section('content_header')
@stop

@section('content')
    
   <div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Message Table</h3>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered" id="datatable">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Email</th>
							<th>Pesan</th>
							<th>Created_At</th>
							<th>Updated_At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
	    				@foreach(App\message::all() as $v)
	    					<tr>
	    						<td>{{$v->name}}</td>
	    						<td>{{$v->email}}</td>
	    						<td>{{$v->pesan}}</td>
	    						<td>{{$v->created_at}}</td>
	    						<td>{{$v->updated_at}}</td>
	    						<td>
	    							<div class="btn btn-group">
	    								<a href="{{ route('admin.message.delete',$v->id) }}" class="btn btn-danger btn-xs">
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