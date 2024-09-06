@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">States</h1>
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
            <a href="{{ route('state.create') }}" class="btn btn-primary">Create</a>
          </div>
          @endcan

          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Orders</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($states as $state)
                  <tr>
                    <td>{{ $state->id }}</td>
                    <td><a href="{{ route('state.show', $state->id) }}">{{ $state->title }}</a></td>
                    <td class="d-flex flex-row">
                      @foreach ($state->orders as $order)
                        <span class="mr-2">
                          <a href="{{ route('order.show', $order->id)}}">{{ $order->id }}</a>
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