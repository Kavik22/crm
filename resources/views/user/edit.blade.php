@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Edit user</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Main</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
          <input type="text" value="{{ $user->name ?? old('name') }}" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <select name="role" class="custom-select form-control">
            <option disabled selected>Role</option>
            <option {{ $user->role == 1 || old('role') == 1 ? ' selected' : ''}} value="1">Admin</option>
            <option {{ $user->role == 2 || old('role') == 2 ? ' selected' : ''}} value="2">User</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" value="{{ $user->surname ?? old('surname') }}" name="surname" class="form-control" placeholder="Surname">
        </div>
        <div class="form-group">
          <input type="text" value="{{ $user->patronymic ?? old('patronymic') }}" name="patronymic" class="form-control"
            placeholder="Patronymic">
        </div>
        <div class="form-group">
          <input type="text" value="{{ $user->age ?? old('age') }}" name="age" class="form-control" placeholder="Age">
        </div>
        <div class="form-group">
          <input type="text" value="{{ $user->address ?? old('address') }}" name="address" class="form-control" placeholder="address">
        </div>
        <div class="form-group">
          <select name="gender" class="custom-select form-control">
            <option disabled selected>Gender</option>
            <option {{ $user->gender == 1 || old('gender') == 1 ? ' selected' : ''}} value="1">Male</option>
            <option {{ $user->gender == 2 || old('gender') == 2 ? ' selected' : ''}} value="2">Female</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Edit">
        </div>
      </form>
    </div>
    <!-- /.row -->

    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection