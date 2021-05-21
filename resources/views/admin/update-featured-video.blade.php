@extends('base.backEnd')

	@section('content')

		<div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Update Featured Video</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">

                        <form action="/featured-video/update/{{ $datas->id }}" method="POST">
                        	@csrf
                        	
                           <div class="row">
                           	  
                              <div class="col-lg-12">
                                 <div class="row">

                                    <div class="col-12 form-group">
                                       <input type="text" name="link" class="form-control" value="https://youtu.be/{{ $datas->code }}">
                                    </div>

                                    <div class="col-12 form-group">
                                       <input type="text" name="title" class="form-control" value="{{ $datas->title }}">
                                    </div>

                                    <div class="col-12 form-group">
                                       <textarea id="text" name="description" rows="5" class="form-control"
                                          placeholder="Description">{{ $datas->description }}</textarea>
                                    </div>
                                 </div>
                              </div>

                              
                           </div>
                           <div class="row">

                              <div class="col-12 form-group ">
                                 <button type="submit" class="btn btn-primary">Update</button>
                              </div>

                           </div>

                        </form>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

	@endsection