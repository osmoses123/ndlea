
@extends('admin.admin_master')
@section('admin')


<div id="app">
    <section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-10 offset-sm-2 col-md-8 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-4">
              <div class="card card-primary">
                <div class="card-header">
                  <h4>Register</h4>

                
                </div>
              
                <div class="card-body">

                   
                    @if (Session::has('error'))
                
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{session::get('error')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                  
                    @endif


                    @if (Session::has('err'))
                
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session::get('err')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                  
                    @endif
                  <form method="post" action="{{ route('admin.create_admin') }}" class="needs-validation" novalidate="">
                @csrf

                    <div class="form-group">
                        <label for="email">Surname</label>
                        <input required id="surname" type="text" class="form-control" name="surname" autofocus>
                       
                      </div>
                      <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input required id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input  required id="last_name" type="text" class="form-control" name="last_name" autofocus>
                    </div>
                      </div>
                 
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input required id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input  required id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input required id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input  required type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                  </form>
                 
                </div>
              </div>
              <div class="mt-5 text-muted text-center">
                Don't have an account? <a href="{{ route('login_from') }}">Create One</a>
              </div>
            </div>
          </div>
        </div>
      </section>


</div>



@endsection

