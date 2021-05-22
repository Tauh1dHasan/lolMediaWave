@extends('base.backEnd')
	
	@section('content')

		<div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">

                  <div class="iq-card">

                     <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <div class="iq-header-title">
                           <h4 class="card-title">Featured Videos</h4>
                        </div>
                        <div id="top-rated-item-slick-arrow" class="slick-aerrow-block"></div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row top-rated-item mb-0">

                           @foreach ($fvideos as $fvideo)
                              <li class="col-sm-6 col-lg-4 col-xl-3 iq-rated-box">
                                 <div class="iq-card mb-0">
                                    <div class="iq-card-body p-0">
                                       <div class="iq-thumb">

                                          <iframe src="https://www.youtube.com/embed/{{ $fvideo->code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                       </div>
                                       <div class="iq-feature-list">
                                          <h6 class="font-weight-600 mb-0">{{ $fvideo->title }}</h6>
                                          <p class="mb-0 mt-2">{{ $fvideo->day }}</p>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           @endforeach

                        </ul>
                     </div>
                  </div>

               </div>
            </div>

            <div class="row">
               
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Recent Added</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="/add-video" class="btn btn-primary">Add video</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">

                           <table class="data-tables table movie_table" style="width:100%">

                              <thead>
                                 <tr>
                                    <th style="width:20%;">Video</th>
                                    <th style="width:10%;">Name</th>
                                    <th style="width:10%;">Day</th>
                                    <th style="width:10%;">Updated</th>
                                    <th style="width:40%;">Description</th>
                                    <th style="width:10%;">Action</th>
                                 </tr>
                              </thead>

                              <tbody>

                                 @foreach ($allVideos as $video)
                                    <tr>
                                       <td>
                                          <div class="media align-items-center">
                                             <div class="iq-movie">


                                                <iframe src="https://www.youtube.com/embed/{{ $video->code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                                               
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="media align-items-center">
                                             <div class="media-body text-white text-left ml-3">
                                                <p class="mb-0">{{ $video->title }}</p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>{{ $video->day }}</td>
                                       <td>{{ $video->updated }}</td>
                                       <td>
                                          <p>{{ $video->description }}</p>
                                       </td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                             <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Update" href="/video/edit/{{ $video->id }}">
                                                <i class="lar la-edit"></i>
                                            </a>
                                            <div class="flex align-items-center list-user-action">
                                             <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="Delete" href="/video/delete/{{ $video->id }}">
                                                <i class="las la-trash"></i>
                                            </a>
                                          </div>
                                       </td>
                                    </tr>
                                 @endforeach
                                 
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>

	@endsection