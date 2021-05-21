@extends('base.backEnd')

	@section('content')

		<div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="iq-card">

                     @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session('success') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                     @endif

                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Featured Videos</h4>
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

                                 @foreach ($featuredVideos as $featuredVideo)

                                    <tr>
                                       <td>
                                          <div class="media align-items-center">
                                             <div class="iq-movie">


                                                <iframe src="https://www.youtube.com/embed/{{ $featuredVideo->code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                                               
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="media align-items-center">
                                             <div class="media-body text-white text-left ml-3">
                                                <p class="mb-0">{{ $featuredVideo->title }}</p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>{{ $featuredVideo->day }}</td>
                                       <td>{{ $featuredVideo->updated }}</td>
                                       <td>
                                          <p>{{ $featuredVideo->description }}</p>
                                       </td>
                                       <td>
                                          <div class="flex align-items-center list-user-action">
                                             <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Update" href="/featured-videos/edit/{{ $featuredVideo->id }}">
                                                <i class="lar la-edit"></i>
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