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
          <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title">Video Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="" enctype="multipart/form-data">
              @csrf
              @method('PUT')


              <div class="card-body">
                <h5><label>Video Title: </label>{{ $video->title }}</h5>
                <h5><label>Video Category: </label>{{ $video->category }}</h5>
                <h5><label>Video Thumbnail:</label><br><img src="{{ url('/') }}/public/storage/posts/{{ $video->thumbnail }}" height="150px" width="250px"></h5>
                <hr>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="video-wrapper">
                      <video controls width="450" height="350">
                        <source src="{{ url('/') }}/public/storage/posts/{{  $video->video  }}" type="video/webm">
                      </video>
                    </div>
                  </div>
                </div>


              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <a href="{{ route('videos.index') }}"><button type="submit" class="btn btn-success">Back</button></a>
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