@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Product</h1>
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
              <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
            </div>
            <form action="{{ route('product.delete', $product->id) }}" method="post">
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
                  <td>{{ $product->id }}</td>
                </tr>
                <tr>
                  <td>Title</td>
                  <td>{{ $product->title }}</td>
                </tr>
                <tr>
                  <td>Description</td>
                  <td>{{ $product->description }}</td>
                </tr>
                <tr>
                  <td>Content</td>
                  <td>{{ $product->content }}</td>
                </tr>
                <tr>
                  <td>price</td>
                  <td>{{ $product->price }}</td>
                </tr>
                <tr>
                  <td>count</td>
                  <td>{{ $product->count }}</td>
                </tr>
                <tr>
                  <td>is_published</td>
                  <td>{{ $product->is_published }}</td>
                </tr>
                <tr>
                  <td>category_id</td>
                  <td>{{ $product->category_id }}</td>
                </tr>
                <tr>
                  <td>orders</td>
                  <td>
                    @foreach ($product->orders as $order)
                      <span style="margin-right: 4px">
                        <a href="{{ route('order.show', $order->id)}}">{{ $order->id }}</a>
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