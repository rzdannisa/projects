@extends('app')

@section('content')

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
>>>>>>> c9aa5721ce89b8073da2a90766ef77598778d7ce
>>>>>>> 32641a6ebc35b9eebdf008748274bcbca3e275ba
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 9e9950285b4af35f34db4324be6ce67f25e4a9c2
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
>>>>>>> c9aa5721ce89b8073da2a90766ef77598778d7ce
>>>>>>> 32641a6ebc35b9eebdf008748274bcbca3e275ba

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
                                  <form  method="POST" action="{{ url('/postdatavoting') }}"class="form-validate form-horizontal" id="feedback_form" >
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
=======
<<<<<<< HEAD
                                  <form  method="POST" action="{{ url('/postdatavoting') }}"class="form-validate form-horizontal" id="feedback_form" >
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
=======
<<<<<<< HEAD
                                  <form  method="POST" action="{{ url('/postdatavoting') }}"class="form-validate form-horizontal" id="feedback_form" >
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
=======
<<<<<<< HEAD
                                  <form  method="POST" action="{{ url('/postdatavoting') }}"class="form-validate form-horizontal" id="feedback_form" >
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
=======
                                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
>>>>>>> 9e9950285b4af35f34db4324be6ce67f25e4a9c2
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
>>>>>>> c9aa5721ce89b8073da2a90766ef77598778d7ce
>>>>>>> 32641a6ebc35b9eebdf008748274bcbca3e275ba
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Nama Instansi<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="instansi" minlength="5" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Judul Voting <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="subject" name="judul" minlength="5" type="text" required />
                                          </div>
                                      </div>                                      
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Tujuan Voting</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="ccomment" name="tujuan" required></textarea>
                                          </div>
                                      </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
>>>>>>> c9aa5721ce89b8073da2a90766ef77598778d7ce
>>>>>>> 32641a6ebc35b9eebdf008748274bcbca3e275ba
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Date Range Voting</label>
                                          <div class="col-lg-10">
                                                  <div data-role="datepicker">
    											                         <input class="form-control" type="text" name="start" style="width:40%;" placeholder="start"><br>
    											                        </div>
                                                  <div data-role="datepicker">
    											                         <input class="form-control" type="text" name="end" style="width:40%" placeholder="end ">
    											                     </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
<<<<<<< HEAD
                                              <button class="btn btn-primary" type="submit">Save</button>
=======
<<<<<<< HEAD
                                              <button class="btn btn-primary" type="submit">Save</button>
=======
<<<<<<< HEAD
                                              <button class="btn btn-primary" type="submit">Save</button>
=======
                                              <button class="btn btn-primary" type="submit">Save</button>\
=======
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
>>>>>>> 9e9950285b4af35f34db4324be6ce67f25e4a9c2
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
>>>>>>> c9aa5721ce89b8073da2a90766ef77598778d7ce
>>>>>>> 32641a6ebc35b9eebdf008748274bcbca3e275ba
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>

@endsection