@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Orders</h1>
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
      <div class="col-12">
        <div class="card">
          @can('view', auth()->user())
          <div class="card-header">
            <a href="{{ route('order.create') }}" class="btn btn-primary">Create</a>
          </div>
          @endcan
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>State</th>
                  <th>Content</th>
                  <th>User</th>
                  <th>Products</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                  <tr>
                    <td><a href="{{ route('order.show', $order->id) }}">{{ $order->id }}</a></td>
                    <td>{{ $order->state->title }}</td>
                    <td>{{ $order->content }}</td>
                    <td><a href="{{ route('user.show', $order->user->id) }}">{{ $order->user->email }}</a></td>
                    <td class="d-flex flex-row">
                      @foreach ($order->products as $product)
                        <span class="mr-3">
                          <a href="{{ route('product.show', $product->id)}}">{{ $product->title }}</a>
                          <br />
                        </span>
                      @endforeach
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>
    <!-- /.row -->

    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection