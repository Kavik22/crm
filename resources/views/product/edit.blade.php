@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Edit product</h1>
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
      <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
          <input type="text" name="title" value="{{ $product->title }}" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
          <input type="text" name="description" value="{{ $product->description }}" class="form-control"
            placeholder="Description">
        </div>
        <div class="form-group">
          <textarea name="content" class="form-control"
            placeholder="Content">{{ $product->content }}</textarea>
        </div>
        <div class="form-group">
          <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
        </div>
        <div class="form-group">
          <input type="text" name="count" value="{{ $product->count }}" class="form-control" placeholder="Count">
        </div>
      </form>
    </div>
    <!-- /.row -->

    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection