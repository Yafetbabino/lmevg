@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Session::has('user_data_update'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('user_data_update')}}
                        </div>

                    @endif
                    <b>{{ __('You are logged in as Admin!') }}</b>
                    <p>{{_('You can see the list of members here and  can Edit their data')}}</p>
                    <p>{{__('Total number of registered users is '). $lastuser->id}}</p>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div style="overflow-x:auto;">
        <table class="table table-striped" style="white-space: nowrap;"  >
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Father Name</th>
                <th scope="col">Grand Father Name</th>
                <th scope="col">Sex</th>
                <th scope="col">Age</th>
                <th scope="col">Phone</th>
                <th scope="col">Marital Status</th>
                <th scope="col">Religion</th>
                <th scope="col">Church</th>
                <th scope="col">Email</th>
                <th scope="col">Edit</th>
            </tr>
            </thead>
                @if (count ($users) > 0)
                    @foreach ($users as $user )
                    <tbody>
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->user_id}}</td>
                            <td>{{$user->firstName}}</td>
                            <td>{{$user->fatherName}}</td>
                            <td>{{$user->grandFatherName}}</td>
                            <td>{{$user->sex}}</td>
                            <td>{{$user->age}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->maritalStatus}}</td>
                            <td>{{$user->religion}}</td>
                            <td>{{$user->church}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ url(App()->getLocale().'/admin/'.$user->id.'/edit/') }}">Edit</a>
                                {{-- <a class="btn btn-sm btn-danger" href="{{ url(App()->getLocale().'/admin/delete') }}">Delete</a> --}}
                            </td>
                          </tr>
                      </tbody>
                      @endforeach
                      {{-- {{$users->links()}} --}}
                      @else
                          <p>No user registered</p>
                      @endif
                    </table>
    </div>
    {{$users->links()}}
</div>
@endsection
