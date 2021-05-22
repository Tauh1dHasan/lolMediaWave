@extends('base.backEnd')

	@section('content')

		<div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">{{ $day }} Videos</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="/add-video" class="btn btn-primary">Add video</a>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-view">
                           <table class="data-tables table movie_table " style="width:100%">
                              <thead>
                                 <tr>
                                    <th>Video</th>
                                    <th>Name</th>
                                    <th>Day</th>
                                    <th>Updated</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>

                                 @foreach ($videos as $video)

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

	@endsection