@extends('base.backEnd')
	
	@section('content')

		<div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row justify-content-md-center">
               <div class="col-sm-12 col-lg-6">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Edit Video</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">

                        <form action="/video/update/{{ $video->id }}" method="POST">
                        	@csrf
                        	
                           <div class="row">
                           	  
                              <div class="col-lg-12">
                                 <div class="row">

                                    <div class="col-12 form-group">
                                       <input type="text" name="link" class="form-control" value="https://youtu.be/{{ $video->code }}" required>
                                    </div>

                                    <div class="col-12 form-group">
                                       <input type="text" name="title" class="form-control" value="{{ $video->title }}" required>
                                    </div>

                                    <div class="col-md-6 form-group">
                                       <select class="form-control" name="day" id="exampleFormControlSelect1" requried>
                                          <option value="{{ $video->day }}">{{ $video->day }}</option>
                                          <option value="Saturday">Saturday</option>
                                          <option value="Sunday">Sunday</option>
                                          <option value="Monday">Monday</option>
                                          <option value="Tuesday">Tuesday</option>
                                          <option value="Wednesday">Wednesday</option>
                                          <option value="Thursday">Thursday</option>
                                          <option value="Friday">Friday</option>
                                       </select>
                                    </div>

                                    <div class="col-12 form-group">
                                       <textarea id="text" name="description" rows="5" class="form-control"
                                          placeholder="Description" required>{{ $video->description }}</textarea>
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