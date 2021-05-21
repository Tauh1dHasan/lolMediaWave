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
                                    <th>Name</th>
                                    <th>Day</th>
                                    <th>Updated</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>

                                 <tr>
                                    <td>
                                       <div class="media align-items-center">
                                          <div class="iq-movie">
                                            <img src="assets/images/movie-thumb/06.jpg" class="img-border-radius avatar-40 img-fluid">
                                          </div>
                                          <div class="media-body text-white text-left ml-3">
                                             <p class="mb-0">Champions</p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>Saturday</td>
                                    <td>19/5/2021</td>
                                    <td>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit
                                          a scelerisque. Etiam feugiat luctus est,
                                          vel commodo odio rhoncus sit amet
                                       </p>
                                    </td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="View" href="#">
                                             <i class="lar la-edit"></i>
                                         </a>
                                         <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="Delete" href="#"><i
                                                class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <div class="media align-items-center">
                                          <div class="iq-movie">
                                             <a href="javascript:void(0);"><img
                                                   src="../assets/images/movie-thumb/05.jpg"
                                                   class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                          </div>
                                          <div class="media-body text-white text-left ml-3">
                                             <p class="mb-0">Last Race</p>
                                             <small>2h 20m</small>
                                          </div>
                                       </div>
                                    </td>
                                    <td>HD</td>
                                    <td>Action</td>
                                    <td>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit
                                          a scelerisque. Etiam feugiat luctus
                                          est, vel commodo odio rhoncus sit amet
                                       </p>
                                    </td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                          <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="Delete" href="#"><i
                                                class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <div class="media align-items-center">
                                          <div class="iq-movie">
                                             <a href="javascript:void(0);"><img
                                                   src="../assets/images/movie-thumb/08.jpg"
                                                   class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                          </div>
                                          <div class="media-body text-white text-left ml-3">
                                             <p class="mb-0">Boop Bitty</p>
                                             <small>2h 40m</small>
                                          </div>
                                       </div>
                                    </td>
                                    <td>Full HD</td>
                                    <td>Thriller</td>
                                    <td>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit
                                          a scelerisque. Etiam feugiat luctus
                                          est, vel commodo odio rhoncus sit amet
                                       </p>
                                    </td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                          <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="Delete" href="#"><i
                                                class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <div class="media align-items-center">
                                          <div class="iq-movie">
                                             <a href="javascript:void(0);"><img
                                                   src="../assets/images/movie-thumb/04.jpg"
                                                   class="img-border-radius avatar-40 img-fluid" alt=""></a>
                                          </div>
                                          <div class="media-body text-white text-left ml-3">
                                             <p class="mb-0">Dino Land</p>
                                             <small>1h 40m</small>
                                          </div>
                                       </div>
                                    </td>
                                    <td>HD</td>
                                    <td>Thriller</td>
                                    <td>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit
                                          a scelerisque. Etiam feugiat
                                          luctus est,
                                          vel commodo odio rhoncus sit amet
                                       </p>
                                    </td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-warning" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                          <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                             data-original-title="Delete" href="#"><i
                                                class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>

                                 
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

	@endsection