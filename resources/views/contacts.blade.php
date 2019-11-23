@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col">
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#contactModal">Add New</button> 
            </div>
            <div class="col">
                <input type="text" class="form-control ml-auto" placeholder="Search Contacts...">
            </div>
            
            <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-success" style="display:none"></div>
                            {!! Form::open(['action' => 'ContactController@store','method'=>'POST'])  !!}

                                {{Form::label('name','Name', ['class'=>'control-label'])}}
                                {{Form::text('name',null,['class'=>'form-control form-control-lg','id'=>'name', 'placeholder'=>'Ex. Legolas']) }}
                                {{Form::label('email','Email', ['class'=>'control-label mt-3'])}}
                                {{Form::text('email',null,['class'=>'form-control form-control', 'id'=>'email','placeholder'=>'legolas@mirkwood.com']) }}
                                {{Form::label('phone','Phone',['class'=>'control-label'])}}
                                {{Form::text('phone',null,['class'=>'form-control form-control', 'id'=>'phone','placeholder'=>"1-555-555-5555"])}}
                                {{Form::label('address','Address',['class'=>'control-label'])}}
                                {{Form::text('address',null,['class'=>'form-control form-control', 'id'=>'address','placeholder'=>'1 Forest Dr., Mirkwood, Middle Earth'])}}
                                {{Form::label('company','Company',['class'=>'control-label'])}}
                                {{Form::text('company',null,['class'=>'form-control form-control', 'id'=>'company', 'placeholder'=>'Fellowship of the Ring'])}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" id="ajaxSubmit" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                {{-- {{Form::submit('Submit',['class'=>'btn btn-primary'])}} --}}
                            {!! Form::close() !!}
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
        <div class="row">
            <table class="table table-hover" id="contactsTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Company</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                     @if (count($contacts) > 0)
                        @foreach ($contacts as $contact)
                            <tr>
                                <th scope="row">{{$contact->name}}</th>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->company}}</td>
                                <td>{{$contact->address}}</td>
                                <td>{!!Form::open(['action' => ['ContactController@destroy', $contact->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::button('<i class="fas fa-trash-alt"></i>', ['type'=>'submit','class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}</td>
                            </tr>
                        @endforeach
                    @else
                            <td>You don't have any contacts yet.</td>
                    @endif
                </tbody>
                    
            </table>
        </div>
    </div>
@endsection