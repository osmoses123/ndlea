@extends('admin.admin_master')
@section('admin')
@section('pagetitle')
All  Certificate
@endsection



<div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
           
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
        
          
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('panel/assets/img/user.png')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello, {{ Auth::guard('admin')->user()->name}}</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              
              <div class="dropdown-divider"></div>
              <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2" syle="background:black !important;">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{asset('panel/assets/img/logo.png')}}" class="header-logo" /> <span
                class="logo-name">NDLEA</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
              </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span> Document</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('admin.addcertificate') }}">Add Certificate</a></li>
           <li><a class="nav-link" href="{{ route('admin.allcertificates') }}">All Certificate </a></li>
              </ul>
            </li>

        </ul>
    </aside>
</div>

<div class="main-content">
    <section class="section">
        <div class="sectionInput Text-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                      <h4>All Certificates</h4>
                    </div>
                    <div class="card-body">
    
                      @if (session()->has('message'))
                      <div class="alert alert-success">
                        {{session()->get('message')}}
        
                      </div>
                          
                        @endif
    
                        @if (session()->has('negativemessage'))
                      <div class="alert alert-danger">
                        {{session()->get('negativemessage')}}
        
                      </div>
                          
                        @endif

                      <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                          <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Full Name</th>
                              <th> Email</th>
                              <th> Phone Number</th>
                              <th>  DOB</th>
                              <th> Address</th>
                              <th> Sample Type</th>
                              <th> Note </th>
                              <th>Certificate Number</th>
                              <th>QR Code</th>
                              <th>  Status</th>
                               <th>Action</th>
                            </tr>
                            <tbody>
                              @foreach ($certificates as $certificate)
                                
                           
                              <tr>
                                <td>{{$certificate->id}}</td>
                                <td>{{$certificate->fullname}}</td>
                                <td>{{$certificate->email}}</td>
                                <td>{{$certificate->phone}}</td>
                                <td>{{$certificate->dob}}</td>
                                <td>{{$certificate->caddress}}</td>
                                <td>{{$certificate->urine}}</td>
                                <td>{{$certificate->note}}</td>
                                <td>{{$certificate->qrcode}}</td>
                                <td>{!! DNS2D::getBarcodeHTML($certificate->qrcode, 'QRCODE',2,2)!!}</td>
                                <td>
                                  @if ($certificate->status=='completed')
                                  <div class="badge badge-success"> Completed</div>
                                  @else
                                  <div class="badge badge-warning">Processing</div>
                                  @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.dashboard', $certificate->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a  href="{{route('admin.dashboard', $certificate->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                   
                                   {{-- For GET Method --}}
                                    @if ($certificate->status=='active')
                                    <a  href="{{route('admin.dashboard', $certificate->id)}}" class="btn btn-danger"><i class="fa fa-eye-slash"></i></a>
                                    
                                    @else
                                     {{-- For POST Method --}}
                                    <form  action="{{route('admin.dashboard')}}"  method="POST" >
                                      @csrf
                                      <input type="hidden" value="{{$certificate->id}}" name="department_id">
                                      <button type="submit" class="btn btn-success"><i class="fa fa-eye"></i></button>
                                    </form>
                                    @endif
                                    </td>
                               
                               
                              </tr>
                              @endforeach
                            
                            </tbody></thead>
                          
    
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
    </section>
</div>
@endsection