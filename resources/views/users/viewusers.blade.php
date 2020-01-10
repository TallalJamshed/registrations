@extends('template.template2')
@section('content')
<div class="container-fluid">
    <div class="row mt-5">
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">All Users</h3>
              </div>
              <div class="col text-right">
                <a href="{{route('adduser')}}" class="btn btn-sm btn-primary">Add User</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">User Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Contact No</th>
                  <th scope="col">CNIC</th>
                  <th scope="col">Role</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <th scope="row">{{$user->name}}</th>
                  <td>{{$user->email}}</td>
                  <td>{{$user->contact}}</td>
                  <td>{{$user->cnic}}</td>
                  <td>{{$user->role}}</td>
                  <td>
                    <span class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></span>
                    <span class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></span>
                  </td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @endsection