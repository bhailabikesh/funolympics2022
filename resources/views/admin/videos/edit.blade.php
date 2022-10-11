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
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Edit Video</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('videos.update',$video->id) }}" enctype="multipart/form-data">
               
               @method('PUT')
                @csrf
                <div class="card-body">


                  
                  <div class="form-group">
                    <label for="heading">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="" value="{{ $video->title }} ">
                  </div>

                  <div class="form-group">
                  <label>Video Category</label>
            <select class="form-control select2bs4" name="category" style="width: 100%;" id="">
              <option value="soccer" @if($video->category==="soccer") selected='selected' @endif >Soccer</option>
               <option value="skii" @if($video->category==="skii") selected='selected' @endif >Skii</option>
               <option value="volleyball" @if($video->category==="volleyball") selected='selected' @endif >Volleball</option>
               <option value="icehockey" @if($video->category==="icehockey") selected='selected' @endif >Icehockey</option>
                    </select>
                </div>


                       <div class="form-group">
                    <label for="exampleInputFile">Video Thumbnail</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="" name="thumbnail">     
                    </div>   
                  </div>
                  <br>
              <img src="{{ url('/') }}/public/storage/posts/{{ $video->thumbnail }}" height="150px" width="250px">

                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Video Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="" name="video">     
                    </div>   
                  </div>
                </div>
                <p>video name: {{ $video->video }}</p>

                <!-- /.card-body -->
                <div class="card-footer bg-transparent px-0">
                  <button type="submit" class="btn btn-success">Submit Changes</button>
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
  