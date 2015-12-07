@extends('app')

@section('content')

<section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa fa-bars"></i> Input Data</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{ url('index') }}">Home</a></li>
            <li><i class="fa fa-bars"></i>Input Data</a></li>
            <li><i class="fa fa-square-o"></i>Data Voting</li>
          </ol>
        </div>
      </div>

              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Form Data Voting
                          </header>
                          <div class="panel-body">
                              <div class="form">
<<<<<<< HEAD
                                  <form  method="POST" action="{{ url('/postdatapeserta') }}"class="form-validate form-horizontal" id="feedback_form" >
=======
                                  <form  method="POST" action="{{ url('/postdatavoting') }}"class="form-validate form-horizontal" id="feedback_form" >
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Nama Peserta<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="nama_p" minlength="5" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
<<<<<<< HEAD
                                      <label for="cname" class="control-label col-lg-2">Judul Voting</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="id_voting">
                                              @foreach($voting as $voting)
                                              <option value="{{ $voting->id }}">{{ $voting->judul }}</option>
                                              @endforeach
                                          </select>
                                      </div>
=======
                                          <select class="form-control m-bot15" name="id_voting">
                                              @foreach($voting as $voting)
                                              <option value="{{ $voting->id }}">{{ $voting->judul_voting }}</option>
                                              @endforeach
                                          </select>
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
                                      </div>                                      
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Token Voting</label>
                                          <div class="col-lg-10">
<<<<<<< HEAD
                                              <textarea class="form-control " id="subject" maxlength="7" name="token_voting" required></textarea>
=======
                                              <textarea class="form-control " id="subject" maxlength="6" name="token_voting" required></textarea>
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
<<<<<<< HEAD
                                              <button class="btn btn-primary" type="submit">Save</button>
=======
                                              <button class="btn btn-primary" type="submit">Save</button>\
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>

@endsection