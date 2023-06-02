@extends('admin.admin_dashboard')
@section('admin')
<script src="{{ asset('backend/assets/js/custom/jquery.min.js') }}">
</script>

<div class="page-content">

        <div class="row">
          <div class="col-12 grid-margin">

          </div>
        </div>
        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                 
                  <div>
                    <img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) :url('upload/no_image.jpg')}}" alt="profile">
                    <span class="h4 ms-3">{{ $profileData->username }}</span>
                  </div>

                </div>
               
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                  <p class="text-muted">{{ $profileData->name }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">{{ $profileData->email }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                  <p class="text-muted">{{ $profileData->phone }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                  <p class="text-muted">{{ $profileData->address }}</p>
                </div>
                <div class="mt-3 d-flex social-links">
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="github"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="twitter"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
							<div class="card-body">

								<h6 class="card-title">Update Admin Profile</h6>

								<form method="POST" action="{{ route('admin.profile.store') }}" class="forms-sample" enctype="multipart/form-data">
                                    @csrf
									<div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
										<div class="col-sm-9">
											<input type="text" name="username" class="form-control" id="exampleInputUsername2"value="{{ $profileData->username }}"">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name</label>
										<div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" id="exampleInputUsername2"value="{{ $profileData->name }}"">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" id="exampleInputUsername2"value="{{ $profileData->email }}"">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Phone</label>
										<div class="col-sm-9">
                                        <input type="text" name="phone" class="form-control" id="exampleInputUsername2"value="{{ $profileData->phone }}"">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Address</label>
										<div class="col-sm-9">
                                        <input type="text" name="address" class="form-control" id="exampleInputUsername2"value="{{ $profileData->address }}"">
										</div>
									</div>
                                    <div class="mb-3">
										<label class="form-label" for="formFile">Photo</label>
										<input class="form-control" name="photo" type="file" id="image">
									</div>
                                    
                                    <div class="mb-3">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
                                        <img id="showImage" class="wd-80 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) :url('upload/no_image.jpg')}}" alt="profile">
										</div>
									</div>
								
								
									<button type="submit" class="btn btn-primary me-2">Save Changes</button>
								</form>

							</div>
						</div>

            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
          <div class="d-none d-xl-block col-xl-3">

          </div>
          <!-- right wrapper end -->
        </div>

	</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.load = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>



@endsection
