@extends('base.backEnd')

	@section('content')

		<div id="content-page" class="content-page">
      <div class="container-fluid">
         @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
         @endif

         <div class="row">
            <div class="col-lg-6">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Account Setting</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="acc-edit">

                        <form action="/account-setting/update" method="POST">
                           @csrf

                           @foreach ($users as $user)
                              
                              <div class="form-group">
                                 <label for="name">User Name:</label>
                                 <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                              </div>

                              <div class="form-group">
                                 <label for="email">Email Id:</label>
                                 <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                              </div>

                              <div class="form-group">
                                 <label for="password">Password:</label>
                                 <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                              </div>

                           @endforeach

                           

                           <button type="submit" class="btn btn-primary">Update</button>
                           <button type="reset" class="btn iq-bg-danger">Cancel</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Social Media</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="acc-edit">

                        <form action="/social/update" method="POST">
                           @csrf

                           @foreach ($socials as $social)

                              <div class="form-group">
                                 <label for="facebook">Facebook:</label>
                                 <input type="text" class="form-control" name="facebook" value="{{ $social->facebook }}">
                              </div>

                              <div class="form-group">
                                 <label for="twitter">Twitter:</label>
                                 <input type="text" class="form-control" name="twitter" value="{{ $social->twitter }}">
                              </div>
                              
                              <div class="form-group">
                                 <label for="instagram">Instagram:</label>
                                 <input type="text" class="form-control" name="instagram" value="{{ $social->instagram }}">
                              </div>
                              <div class="form-group">
                                 <label for="youtube">YouTube:</label>
                                 <input type="text" class="form-control" name="youtube" value="{{ $social->youtube }}">
                              </div>

                           @endforeach
                           
                           <button type="submit" class="btn btn-primary">Update</button>
                           <button type="reset" class="btn iq-bg-danger">Cancel</button>
                        </form>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

	@endsection