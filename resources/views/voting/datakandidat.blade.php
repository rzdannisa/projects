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
            <li><i class="fa fa-square-o"></i>Data Kandidat</li>
          </ol>
        </div>
      </div>

              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Form Data Kandidat
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form  method="POST" action="{{ url('/postdatakandidat') }}"class="form-validate form-horizontal" id="feedback_form" enctype="multipart/form-data" >
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Nama Kandidat<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="nama"  type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c9aa5721ce89b8073da2a90766ef77598778d7ce
>>>>>>> 32641a6ebc35b9eebdf008748274bcbca3e275ba
                                      <label for="cname" class="control-label col-lg-2">Judul Voting</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="id_voting">
                                              @foreach($voting as $voting)
                                              <option value="{{ $voting->id }}">{{ $voting->judul }}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                      </div>  
                                      <div class="form-group ">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
>>>>>>> c9aa5721ce89b8073da2a90766ef77598778d7ce
>>>>>>> 32641a6ebc35b9eebdf008748274bcbca3e275ba
                                          <label for="cname" class="control-label col-lg-2">Foto Kandidat<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input  id="subject" style="height:35px;" name="foto"  type="file" required />
                                          </div>
                                      </div>                                      
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Keterangan</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="ccomment" name="keterangan" required></textarea>
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