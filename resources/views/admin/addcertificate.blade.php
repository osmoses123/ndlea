
@extends('admin.admin_master')
@section('admin')
@section('pagetitle')
Add Certificate 
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


  <style>

    input[type=radio] + .details{
        display: none;
      }
      
      input[type=radio]:checked + .forpersonal {
        display:grid;
       
      }
      
      input[type=radio]:checked + .forpolicy {
        display:griD;
      }
     
    </style>
  <div class="main-content">
    <section class="section">
      <section class="section">
         
        {{-- <h4> <strong>Welcome {{ Auth::guard('admin')->user()->name}} </strong> </h4> --}}
        <div class="row">
          
            <div class="col-12 col-md-11 col-lg-11 ">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Cetificate</h4>
                  </div>
                  <div class="card-body">
                  
                    @if (Session::has('error'))
                
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session::get('error')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                  
                    @endif
                   
                   <div class="row">
                    <div class="col-md-6">
                      <form action="{{route("admin.storecertificate")}}" method="post">
                        @csrf
                        <div class="col-12 form-group ">
                        <div class="section-title">Full Name</div> 
                            
                              <input type="text"  name="fullname" class="form-control">
                            
                          </div>
  
                          <div class="col-12 form-group ">
                            <div class="section-title"> Phone Number</div> 
                                
                                  <input type="tel" name="phone" class="form-control">
                                
                              </div>
                              
                              <div class="col-12 form-group ">
                                <div class="section-title"> Email Address</div> 
                                    
                                      <input type="email" name="email" class="form-control">
                                    
                                  </div>
  
                                  <div class="col-12 form-group ">
                                    <div class="section-title"> Contact  Address</div> 
                                        
                                          <input type="text" name="caddress" class="form-control">
                                        
                                      </div>
  
                                      <div class="col-12 form-group ">
                                        <div class="section-title"> Date of Birth </div> 
                                            
                                              <input type="date" name="dob" class="form-control">
                                            
                                          </div>
                    
                      
                    </div>
                         <div class="col-md-6">
                              <div class=" col-md-12 form-group  ">
                                <div class="section-title">Select Sample Type</div>
                                  <input type="radio" class="form-check-label" name="urine"  value="urine" name="payment_type" id="personal" required>  Urine
                                  
                                  <div class="forpersonal details ">
                                 <br>

                                 <div class="form-group">
                                  <label class="d-block">Tick Positive Result</label>
                                  <div class="form-check ">
                                    <input class="form-input" name="methylendioxymethamphetamine" type="checkbox"  value="Methylendioxymethamphetamine">
                                    <label class="form-check-label" for="inlineCheckbox2">Methylendioxymethamphetamine </label>
                                  </div>
                                  <div class="form-check ">
                                    <input class="form-input" name="amphetamine" type="checkbox" value="Amphetamine">
                                    <label class="form-check-label" for="inlineCheckbox1">Amphetamine </label>
                                  </div>
                                 
                                  <div class="form-check ">
                                    <input class="form-input" name="ketamine" type="checkbox"  value="Ketamine" >
                                    <label class="form-check-label" for="inlineCheckbox3">Ketamine</label>
                                  </div>

                                  <div class="form-check ">
                                    <input class="form-input" name="cotinine" type="checkbox"  value="Cotinine">
                                    <label class="form-check-label" for="inlineCheckbox2">Cotinine </label>
                                  </div>
                                  <div class="form-check ">
                                    <input class="form-input" name="methamphetamine" type="checkbox"  value="Methamphetamine">
                                    <label class="form-check-label" for="inlineCheckbox2">Methamphetamine </label>
                                  </div>

                                  <div class="form-check ">
                                    <input class="form-input" name="marijuana" type="checkbox" value="Marijuana">
                                    <label class="form-check-label" for="inlineCheckbox2">Marijuana  </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-input"  name="morphine" type="checkbox"  value="Morphine">
                                    <label class="form-check-label" for="inlineCheckbox2">Morphine </label>
                                  </div>
                                  <div class="form-check ">
                                    <input class="form-input" name="opiatestramadol" type="checkbox" value="Opiates Tramadol ">
                                    <label class="form-check-label" for="inlineCheckbox2">Opiates Tramadol </label>
                                  </div>

                                  <div class="form-check ">
                                    <input class="form-input" name="benzodiazepines" type="checkbox" id="inlineCheckbox2" value="Benzodiazepines">
                                    <label class="form-check-label" for="inlineCheckbox2">Benzodiazepines </label>
                                  </div>
                                 

                                  <div class="form-check">
                                    <input class="form-input" name="cocaineheroin" type="checkbox" id="inlineCheckbox2" value="Cocaine Heroin ">
                                    <label class="form-check-label" for="inlineCheckbox2">Cocaine Heroin  </label>
                                  </div>

                               
                                      <div class="section-title">Addtional Test Note </div>  
                                     
                                        <textarea  name="note"  class="summernote"></textarea>
                                   
                                  
        
                                  </div>
                                     
                                </div>
                              </div>
                                  <div class="col-md-12  form-group ">
                      
                                    <input type="radio" name="payment_type" id="policy" disabled> Blood
                                    <div class="forpolicy details col-md-12">
                                      <br>
                                      <div class="form-group">
                                        <label class="d-block">Tick Positive Result</label>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                          <label class="form-check-label" for="inlineCheckbox2">Methylendioxymethamphetamine </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                          <label class="form-check-label" for="inlineCheckbox1">Amphetamine </label>
                                        </div>
                                       
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                                          <label class="form-check-label" for="inlineCheckbox3">Ketamine</label>
                                        </div>
      
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                          <label class="form-check-label" for="inlineCheckbox2">Cotinine </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                          <label class="form-check-label" for="inlineCheckbox2">Methamphetamine </label>
                                        </div>
      
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                          <label class="form-check-label" for="inlineCheckbox2">Marijuana  </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                          <label class="form-check-label" for="inlineCheckbox2">Morphine </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                          <label class="form-check-label" for="inlineCheckbox2">Opiates Tramadol </label>
                                        </div>
      
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                          <label class="form-check-label" for="inlineCheckbox2">Benzodiazepines </label>
                                        </div>
                                       
      
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                          <label class="form-check-label" for="inlineCheckbox2">Cocaine Heroin  </label>
                                        </div>
      
                                     
                                            <div class="section-title">Addtional Test Note </div>  
                                           
                                              <textarea row="2" col="2" class="summernote"></textarea>
                                         
                                        
              
                                        </div>
                                    </div>
                                  
                          
                                   
                                </div>
                                <div class="card-footer text-right">
                                  <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                  <button class="btn btn-secondary" type="reset">Reset</button>
                                </div>
                                </div>
                                
                              </form>  
                            </div>
                    
                      </div>
                     </div> 
                       
                    
                    
                
                  
                  </div>
                </div>



                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                      <div class=" fade show active">
                        <div class="setting-panel-header">Setting Panel
                        </div>
                        <div class="p-15 border-bottom">
                          <h6 class="font-medium m-b-10">Select Layout</h6>
                          <div class="selectgroup layout-color w-50">
                            <label class="selectgroup-item">
                              <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                              <span class="selectgroup-button">Light</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                              <span class="selectgroup-button">Dark</span>
                            </label>
                          </div>
                        </div>
                        <div class="p-15 border-bottom">
                          <h6 class="font-medium m-b-10">Sidebar Color</h6>
                          <div class="selectgroup selectgroup-pills sidebar-color">
                            <label class="selectgroup-item">
                              <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                              <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                              <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                            </label>
                          </div>
                        </div>
                        <div class="p-15 border-bottom">
                          <h6 class="font-medium m-b-10">Color Theme</h6>
                          <div class="theme-setting-options">
                            <ul class="choose-theme list-unstyled mb-0">
                              <li title="white" class="active">
                                <div class="white"></div>
                              </li>
                              <li title="cyan">
                                <div class="cyan"></div>
                              </li>
                              <li title="black">
                                <div class="black"></div>
                              </li>
                              <li title="purple">
                                <div class="purple"></div>
                              </li>
                              <li title="orange">
                                <div class="orange"></div>
                              </li>
                              <li title="green">
                                <div class="green"></div>
                              </li>
                              <li title="red">
                                <div class="red"></div>
                              </li>
                            </ul>
                          </div>
        </div>
    </section>
  </div>
     

      @endsection