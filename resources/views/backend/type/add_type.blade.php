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

          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
							<div class="card-body">

								<h6 class="card-title">Add Property Type</h6>

								<form method="POST" action="{{ route('admin.update.password') }}" class="forms-sample" enctype="multipart/form-data">
                                    @csrf
									<div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Old Password</label>
									
											<input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" autocomplete="off">
                                            @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
										
									</div>

								
									<button type="submit" class="btn btn-primary me-2">Add Type</button>
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




@endsection
