@extends('adminstaff/master')
@section('content')
<div class="container-fluid">
        {{-- Page heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-0 text-gray-800 ">FeedBack</h1>
                     
                </div>
            </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        {{-- <th>Action</th> --}}

                    </tr>
                </thead>
                <tbody>
                     @php $i=1; @endphp
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $contact->name}}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject}}</td>
                        <td>{{ $contact->message }}</td>

                        {{-- <td>
                        
                        <a href="" class="btn btn-primary">Save</a>

                         
                            
                        </td> --}}
                    </tr> 
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
    
@endsection