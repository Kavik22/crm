@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Products</h1>
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
            <a href="{{ route('product.create') }}" class="btn btn-primary">Create</a>
          </div>
          @endcan

          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <td>Description</td>
                  <td>Content</td>
                  <td>price</td>
                  <td>count</td>
                  <td>is_published</td>
                  <td>category_id</td>
                  <td>orders</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                  <tr>
                    <td>{{ $product->id }}</td>
                    <td><a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a></td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->content }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->count }}</td>
                    <td>{{ $product->is_published }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>
                      @foreach ($product->orders as $order)
                        <span style="margin-right: 4px">
                          <a href="{{ route('order.show', $order->id)}}">{{ $order->id }}</a>
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