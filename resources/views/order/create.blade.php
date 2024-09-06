@extends('layouts.main')

@section('content')
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Add order</h1>
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
            <form action="{{ route('order.store') }}" method="post">
              @csrf
              <div class="form-group">
                <input type="text" name="content" class="form-control" placeholder="Content">
              </div>
              <div class="form-group">
                <select name="user_id" class="form-control select2" style="width: 100%;">
                  <option selected="selected" disabled>Select a user</option>
                  @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->email }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <select name="state_id" class="form-control select2" style="width: 100%;">
                  <option selected="selected" disabled>Select a state</option>
                  @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <select name="products[]" multiple class="form-control select2" style="width: 100%;">
                  <option selected="selected" disabled>Select a products</option>
                  @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-order">
                <input type="submit" class="btn btn-primary" value="Create">
              </div>
            </form>
          </div>
          <!-- /.row -->

          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection