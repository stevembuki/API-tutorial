@extends('layout/template')

@section('content')
 <h1>Chabrin Agencies Limited</h1>
 <a href="{{url('/chabrin/create')}}" class="btn btn-success">Create Book</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>UnitNo</th>
         <th>BlockNo</th>
         <th>Name</th>
         <th>Description</th>
         <th>Amount</th>
         <th>Thumbs</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($chabrin as $chabrin)
         <tr>
             <td>{{ $chabrin->unitno }}</td>
             <td>{{ $chabrin->blockno }}</td>
             <td>{{ $chabrin->name }}</td>
             <td>{{ $chabrin->Description }}</td>
             <td>{{ $chabrin->Amount }}</td>
             <td><img src="{{asset('img/'.$book->image.'.jpg')}}" height="35" width="30"></td>
             <td><a href="{{url('tacc',$chabrin->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('tacc.edit',$cahbrin->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['tacc.destroy', $chabrin->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection