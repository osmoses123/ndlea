
<style>
    * {
      box-sizing: border-box;
    }
    
    @media print{
      .no-print, .no-print *{
        display: none !important;
      } 
      .print-m-0{
        margin: 0 !important;
      }
    } 
    
    .btn{
      padding: 10px 17px; 
      border-radius: 3px; 
      background: #f4b71a; 
      border: none; 
      font-size: 12px; 
      margin: 10px 5px;
    }
    
    .toolbar{
      background: #333; 
      width: 100vw; 
      position: fixed; 
      left: 0; 
      top: 0; 
      text-align: center;
    }
    
    .cert-container {
      margin:65px 0 10px 0; 
      width: 100%; 
      display: flex; 
      justify-content: center;
    }
    
    .cert {
      width:800px; 
      height:900px; 
      padding:15px 20px; 
      text-align:center; 
      position: relative; 
      z-index: -1;
    }
    
    .cert-bg {
      position: absolute; 
      left: 0px; 
      top: 0; 
      z-index: -1;
      width: 100%;
      border-color: red ;
          border-style: solid;
        border-width: 2px 1px 4px 2px;
         border-top-style: dotted; border-right-style: solid; border-bottom-style: dotted; border-left-style: solid; 
        
    }
    
       .cert-bg:before {
        display: block;
        content: "";
        width: 3px;
        height: 30px;
        position: absolute;
        top: -10px;
        right: -10px;
        border-top: 3px solid #EA485D;
        border-right: 3px solid #EA485D;
      }
    .cert-content {
      width:750px; 
      height:470px; 
      padding:70px 60px 0px 60px; 
      text-align:center;
      font-family: Arial, Helvetica, sans-serif;
      
    }
    
    h1 {
      font-size:44px;
    }
    
    p {
      font-size:25px;
    }
    
    small {
      font-size: 14px;
      line-height: 12px;
    }
    
    .bottom-txt {
      padding: 12px 5px; 
      display: flex; 
      justify-content: space-between;
      font-size: 16px;
    }
    
    .bottom-txt * {
      white-space: nowrap !important;
    }
    
    .other-font {
      font-family: Cambria, Georgia, serif;
      font-style: italic;
    }
    
    .ml-215 {
      margin-left: 215px;
    }
    
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
        
      
    
        <div class="toolbar no-print">
          <button class="btn btn-info" onclick="javascript:printDiv('result')">
            Print Certificate
          </button>
          <button class="btn btn-info" id="downloadPDF">Download PDF</button>
        </div>
        <div class="cert-container print-m-0">
          <div id="content2" class="cert">
            <img
              src="https://edgarsrepo.github.io/certificate.pn"
              class="cert-bg"
              alt=""
            />
            <div class="cert-content" id="result">
              <h1 class="other-font">CERTIFICATE</h1>
    
              <small style="margin-top:-10px"> <em>OF DRUG INTEGRITY TEST </em></small>
                       <br /><br />
              <span style="font-size: 35px; "><em> <b>{{$cert->fullname}} </b></em></span>
              <hr/>
            
              <span class="other-font"
                ><i><b>undertook the Drug Integrity Test conducted by the National
                Drug Law Enforcement Agency. The urine based test is capable of detecting the followings drugs: </b></i></span>
              
              <br />
            
              <br /><br />
             
              <div class="row">
                
                <div class="col-md-6">
                <ul style="list-style:none; text-align:left; font-size:15px" >
                    @if($cert->amphetamine == "1")
                    @php
                    $chk = 'checked';
                    @endphp
                <li>Amphetamine  
                    <span style="margin-left:36px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox"  {{$chk}} />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span>
                    <input type="checkbox"   /> 
                    @else
                    @php
                    $chk = 'checked';
                    @endphp
                    Amphetamine 
                    <span style="margin-left:36px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox" />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span><input type="checkbox"  {{$chk}} /> 
                 </li>
                @endif

                @if($cert->methylendioxymethamphetamine == "1")
                    @php
                    $chk = 'checked';
                    @endphp
                 <li style="margin-left:-80px">Methylendioxymethamphetamine   <span style="margin-left:9px"><b> +ive </b>
                    </span>
                    <input type="checkbox"  {{$chk}} />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span>
                    <input type="checkbox"   /> 
                    @else
                    @php
                    $chk = 'checked';
                    @endphp
                   <span style="margin-left:-80px">Methylendioxymethamphetamine</span>   <span style="margin-left:9px"><b> +ive </b>
                   </span>
                    <span style="margin-left:36px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox" />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span><input type="checkbox"  {{$chk}} /> 
                 </span>
                @endif

                @if($cert->ketamine == "1")
                    @php
                    $chk = 'checked';
                    @endphp
                <li>Ketamine  <span style="margin-left:85px"><b> +ive </b>
                    </span>
                    <input type="checkbox"  {{$chk}} />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span>
                    <input type="checkbox"   /> 
                    @else
                    @php
                    $chk = 'checked';
                    @endphp
                    Ketamine 
                    <span style="margin-left:36px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox" />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span><input type="checkbox"  {{$chk}} /> 
                 </li>
                @endif

                
                @if($cert->cotinine == "1")
                    @php
                    $chk = 'checked';
                    @endphp
                 <li>Cotinine  <span style="margin-left:85px"><b> +ive </b>
                    </span>
                    <input type="checkbox"  {{$chk}} />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span>
                    <input type="checkbox"   /> 
                    @else
                    @php
                    $chk = 'checked';
                    @endphp
                    Cotinine 
                    <span style="margin-left:36px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox" />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span><input type="checkbox"  {{$chk}} /> 
                 </li>
                @endif

                @if($cert->methamphetamine == "1")
                    @php
                    $chk = 'checked';
                    @endphp
                <li>Methamphetamine  <span style="margin-left:25px"><b> +ive </b>
                    </span>
                    <input type="checkbox"  {{$chk}} />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span>
                    <input type="checkbox"   /> 
                    @else
                    @php
                    $chk = 'checked';
                    @endphp
                    Methamphetamine 
                    <span style="margin-left:25px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox" />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span><input type="checkbox"  {{$chk}} /> 
                 </li>
                @endif









            {{-- <li style="margin-left:-80px">Methylendioxymethamphetamine   <span style="margin-left:9px"><b> +ive </b></span><input type="checkbox"  checked /> <span style="margin-left:10px"><b>  -ive </b></span><input type="checkbox"   />  </li> --}}

                {{-- <li>Ketamine  <span style="margin-left:85px"><b> +ive </b></span><input type="checkbox"  checked /> <span style="margin-left:10px"><b>  -ive </b></span><input type="checkbox"   />  </li> --}}


                {{-- <li>Cotinine  <span style="margin-left:85px"><b> +ive </b></span><input type="checkbox"  checked /> <span style="margin-left:10px"><b>  -ive </b></span><input type="checkbox"   />  </li> --}}

                {{-- <li>Methamphetamine  <span style="margin-left:25px"><b> +ive </b></span><input type="checkbox"  checked /> <span style="margin-left:10px"><b>  -ive </b></span><input type="checkbox"   />  </li> --}}
                
                
            
                </ul>
                
              </div>
              
              <div class="col-md-6">
                <ul style="list-style:none; text-align:left; font-size:15px" >
                    @if($cert->morphine == "1")
                    @php
                    $chk = 'checked';
                    @endphp
                 <li>Morphine  <span style="margin-left:80px"><b> +ive </b>
                    </span>
                    <input type="checkbox"  {{$chk}} />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span>
                    <input type="checkbox"   /> 
                    @else
                    @php
                    $chk = 'checked';
                    @endphp
                    Morphine 
                    <span style="margin-left:36px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox" />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span><input type="checkbox"  {{$chk}} /> 
                 </li>
                @endif

                @if($cert->opiatestramadol == "1")
                    @php
                    $chk = 'checked';
                    @endphp
                <li>Opiates Tramadol  <span style="margin-left:20px"><b> +ive </b>
                    </span>
                    <input type="checkbox"  {{$chk}} />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span>
                    <input type="checkbox"   /> 
                    @else
                    @php
                    $chk = 'checked';
                    @endphp
                    <span style="margin-left:20px"> Opiates Tramadol </span>
                    <span style="margin-left:36px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox" />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span><input type="checkbox"  {{$chk}} /> 
                 </li>
                @endif

                @if($cert->benzodiazepines == "1")
                    @php
                    $chk = 'checked';
                    @endphp
               <li>Benzodiazepines  <span style="margin-left:25px"><b> +ive </b>
                    </span>
                    <input type="checkbox"  {{$chk}} />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span>
                    <input type="checkbox"   /> 
                    @else
                    @php
                    $chk = 'checked';
                    @endphp
                    <span style="margin-left:25px"> Benzodiazepines </span>
                    <span style="margin-left:36px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox" />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span><input type="checkbox"  {{$chk}} /> 
                 </li>
                @endif

                @if($cert->marijuana == "1")
                    @php
                    $chk = 'checked';
                    @endphp
              <li>Marijuana   <span style="margin-left:75px"><b> +ive </b>
                    </span>
                    <input type="checkbox"  {{$chk}} />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span>
                    <input type="checkbox"   /> 
                    @else
                    @php
                    $chk = 'checked';
                    @endphp
                    <span style="margin-left:75px"> Marijuana </span>
                    <span style="margin-left:36px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox" />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span><input type="checkbox"  {{$chk}} /> 
                 </li>
                @endif

                @if($cert->cocaineheroin == "1")
                    @php
                    $chk = 'checked';
                    @endphp
              <li>Cocaine Heroin  <span style="margin-left:35px"><b> +ive </b>
                    </span>
                    <input type="checkbox"  {{$chk}} />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span>
                    <input type="checkbox"   /> 
                    @else
                    @php
                    $chk = 'checked';
                    @endphp
                    <span style="margin-left:35px"> Cocaine Heroin </span>
                    <span style="margin-left:36px">
                        <b> +ive </b>
                    </span>
                    <input type="checkbox" />
                    <span style="margin-left:10px">
                        <b>  -ive </b>
                    </span><input type="checkbox"  {{$chk}} /> 
                 </li>
                @endif





                {{-- <li>Morphine  <span style="margin-left:80px"><b> +ive </b></span><input type="checkbox"  checked /> <span style="margin-left:10px"><b>  -ive </b></span><input type="checkbox"   />  </li> --}}

                {{-- <li>Opiates Tramadol  <span style="margin-left:20px"><b> +ive </b></span><input type="checkbox"  checked /> <span style="margin-left:10px"><b>  -ive </b></span><input type="checkbox"   />  </li> --}}


                {{-- <li>Benzodiazepines  <span style="margin-left:25px"><b> +ive </b></span><input type="checkbox"  checked /> <span style="margin-left:10px"><b>  -ive </b></span><input type="checkbox"   />  </li> --}}


                {{-- <li>Marijuana   <span style="margin-left:75px"><b> +ive </b></span><input type="checkbox"  checked /> <span style="margin-left:10px"><b>  -ive </b></span><input type="checkbox"   />  </li> --}}

                {{-- <li>Cocaine Heroin  <span style="margin-left:35px"><b> +ive </b></span><input type="checkbox"  checked /> <span style="margin-left:10px"><b>  -ive </b></span><input type="checkbox"   />  </li> --}}
                
                
            
                </ul>
                
              </div>
              </div>
               <small>  Completion of the Azimuth Check and review of the Azimuth Check
                recommendations in ArmyFit is worth 1.0 hours in the Electronic
                Based Distance Learning (EBDL) program for USAR and ARNG Soldiers.
                For more information on the EBDL, see your unit training NCO.</small
              >
              <div class="bottom-txt">
                <span>G-1 DAPE-ARR-SF</span>
                <span>Completed on: April 3, 2020</span>
              </div>
            </div>
          </div>
        </div>
    <script>
    $("#downloadPDF").click(function () {
      // $("#content2").addClass('ml-215'); // JS solution for smaller screen but better to add media queries to tackle the issue
      getScreenshotOfElement(
        $("div#content2").get(0),
        0,
        0,
        $("#content2").width() + 45,  // added 45 because the container's (content2) width is smaller than the image, if it's not added then the content from right side will get cut off
        $("#content2").height() + 30, // same issue as above. if the container width / height is changed (currently they are fixed) then these values might need to be changed as well.
        function (data) {
          var pdf = new jsPDF("l", "pt", [
            $("#content2").width(),
            $("#content2").height(),
          ]);
    
          pdf.addImage(
            "data:image/png;base64," + data,
            "PNG",
            0,
            0,
            $("#content2").width(),
            $("#content2").height()
          );
          pdf.save("azimuth-certificte.pdf");
        }
      );
    });
    
    // this function is the configuration of the html2cavas library (https://html2canvas.hertzen.com/)
    // $("#content2").removeClass('ml-215'); is the only custom line here, the rest comes from the library.
    function getScreenshotOfElement(element, posX, posY, width, height, callback) {
      html2canvas(element, {
        onrendered: function (canvas) {
          // $("#content2").removeClass('ml-215');  // uncomment this if resorting to ml-125 to resolve the issue
          var context = canvas.getContext("2d");
          var imageData = context.getImageData(posX, posY, width, height).data;
          var outputCanvas = document.createElement("canvas");
          var outputContext = outputCanvas.getContext("2d");
          outputCanvas.width = width;
          outputCanvas.height = height;
    
          var idata = outputContext.createImageData(width, height);
          idata.data.set(imageData);
          outputContext.putImageData(idata, 0, 0);
          callback(outputCanvas.toDataURL().replace("data:image/png;base64,", ""));
        },
        width: width,
        height: height,
        useCORS: true,
        taintTest: false,
        allowTaint: false,
      });
    }
    
    </script>

<script language="javascript" type="text/javascript">
    function printDiv(result) {
      //Get the HTML of div
      var divElements = document.getElementById(result).innerHTML;
      //Get the HTML of whole page
      var oldPage = document.body.innerHTML;
  
      //Reset the page's HTML with div's HTML only
      document.body.innerHTML =
        "<html><head><title></title></head><body>" +
        divElements + "</body>";
  
      //Print Page
      window.print();
  
      //Restore orignal HTML
      document.body.innerHTML = oldPage;
    }
  
  </script>