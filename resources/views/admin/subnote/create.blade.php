@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
 
    <!-- Main content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Note SubCategory</h3>
              </div>

      
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('subclass.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">


                  
                  <div class="form-group">
                    <label for="heading">name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="" value="{{ old('iso3')}} ">
                  </div>
                  
                  <div class="form-group">
                  <label>class</label>
                  <select class="form-control select2bs4" name="note_id" style="width: 100%;" id="category_id">
               
@php
$categories=Db::table('notes')->get();
@endphp
                <option value="0">select category</option>
               @foreach($categories as $category) 
                    <option value="{{ $category->id }}" @if (old('category_name') == '{{ $category->id }}') selected="selected" @endif >{{ $category->name }}</option>
                 @endforeach
                    </select>
                </div>



                

      
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
      
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  
  

  @endsection
  