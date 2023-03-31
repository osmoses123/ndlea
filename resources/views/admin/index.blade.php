
@extends('admin.admin_master')
@section('admin')
@section('pagetitle')
Dashboard
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
      <section class="section">
         
        <h4> <strong>Welcome {{ Auth::guard('admin')->user()->name}} </strong> </h4>
        <div class="row ">

          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 pr-0 pt-6">
                      <div class="card-content">
                        <h5 class="font-15">All Incoming Files</h5>
                        <h2 class="mb-3 font-18">258</h2>
                        <p class="mb-0"> Personal <span class="col-orange">+</span> Policy </p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pl-0">
                      <div class="banner-img">
                        <img src="{{asset('panel/assets/img/banner/1.png')}}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 pr-0 pt-6">
                      <div class="card-content">
                        <h5 class="font-15"> All Outgoing Files</h5>
                        <h2 class="mb-3 font-18">1,287</h2>
                        <p class="mb-0"> Personal <span class="col-orange">+</span> Policy Files</p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pl-0">
                      <div class="banner-img">
                        <img src="{{asset('panel/assets/img/banner/2.png')}}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 pr-0 pt-6">
                      <div class="card-content">
                        <h5 class="font-15">All Policy Files</h5>
                        <h2 class="mb-3 font-18">128</h2>
                        <p class="mb-0"><span class="col-green">18%</span>
                          Increase</p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pl-0">
                      <div class="banner-img">
                        <img src="{{asset('panel/assets/img/banner/3.png')}}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 pr-0 pt-6">
                      <div class="card-content">
                        <h5 class="font-15">All Personal Files</h5>
                        <h2 class="mb-3 font-18">48,697</h2>
                        <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pl-0">
                      <div class="banner-img">
                        <img src="{{asset('panel/assets/img/banner/4.png')}}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
     

      @endsection