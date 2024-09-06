@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Order</h1>
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
          <div class="card-header d-flex p-3">
            <div class="mr-3">
              <a href="{{ route('order.edit', $order->id) }}" class="btn btn-primary">Edit</a>
            </div>
            <form action="{{ route('order.delete', $order->id) }}" method="post">
              @csrf
              @method('delete')
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
          </div>
          @endcan

          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <tbody>
                <tr>
                  <td>ID</td>
                  <td>{{ $order->id }}</td>
                </tr>
                <tr>
                  <td>State</td>
                  <td>{{ $order->state->title }}</td>
                </tr>
                <tr>
                  <td>Content</td>
                  <td>{{ $order->content }}</td>
                </tr>
                <tr>
                  <td>User</td>
                  <td><a href="{{ route('user.show', $order->user->id) }}">{{ $order->user->email }}</a></td>
                </tr>
                <tr>
                  <td>Products</td>
                  <td class="d-flex flex-row">
                    @foreach ($order->products as $product)
                      <span class="mr-3">
                        <a href="{{ route('product.show', $product->id)}}">{{ $product->title }}</a>
                        <br />
                      </span>
                    @endforeach  
                  </td>
                </tr>
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