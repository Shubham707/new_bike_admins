<?php $this->load->view('include/header');?>
      <!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= -->
     <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class="breadcrumb-link">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a class="active" href="">Vehicle Information</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>Request Service</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
	  <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding no-top gray">
            <!-- Main Container -->
            <div class="container"><!---  --->
               <!-- Row -->
               <div class="row margin-top-40">
                  <!-- Middle Content Area -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <!-- Row -->
                     <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                           <ul class="nav nav-justified nav-tabs">
                              <li id="bd" class="active"><a>Personal Details</a></li>
                              <li class="sr"><a>Bike Details</a></li>
                              <li class="pd"><a>Service Details</a></li>
                              <li class="rc"><a> Review &amp; Confirm</a></li>
                           </ul>
                           <div class="tab-content">
                              <div class="profile-edit tab-pane fade in active" id="profile">
                                 <h2 class="heading-md">Please Fill Personal Details</h2>
                                 <!-- <dl class="dl-horizontal">
                                 <p>Below are the Name  and Email,Contact on form for your Booking.</p>
                                    <dt><strong>Your name </strong></dt>
                                    <dd>
                                       John Doe
                                    </dd>
                                    <dt><strong>Email Address </strong></dt>
                                    <dd>
                                       contact@scriptsbundle.com
                                    </dd>
                                    <dt><strong>Phone Number </strong></dt>
                                    <dd>
                                       (0423) 12-2345-789
                                    </dd>
                                    <dt><strong>Country </strong></dt>
                                    <dd>
                                       England
                                    </dd>
                                    <dt><strong>City </strong></dt>
                                    <dd>
                                       London
                                    </dd>
                                    <dt><strong>You are a </strong></dt>
                                    <dd>
                                       Dealer
                                    </dd>
                                    <dt><strong>Address </strong></dt>
                                    <dd>
                                       Lahore, PK
                                    </dd>
                                 </dl>
								  -->
                          <form>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Your Name </label>
                                          <input type="text" name="name" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Email Address <span class="color-red">*</span></label>
                                          <input type="text" name="email" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">  
                                          <label>Contact Number <span class="color-red">*</span></label>
                                          <input type="text" name="contact" class="form-control margin-bottom-20">
                                       </div>
                                      
                                       <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                          <label>City <span class="color-red">*</span></label>
                                          <select name="country" class="form-control">
                                             <option value="0">London</option>
                                             <option value="1">Edinburgh</option>
                                             <option value="2">Wales</option>
                                             <option value="3">Cardiff</option>
                                             <option value="4">Bradford</option>
                                             <option value="5">Cambridge</option>
                                          </select>
                                       </div>
                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                          <label>Address <span class="color-red">*</span></label>
                                          <textarea name="address" class="form-control margin-bottom-20" rows = "3"></textarea>
                                       </div>
                                    </div>
                                  <!--   <div class="row margin-bottom-20">
                                       <div class="form-group">
                                          <div class="col-md-9">
                                             <div class="input-group">
                                                <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                Browse… <input type="file" id="imgInp">
                                                </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                             </div>
                                          </div>
                                          <div class="col-md-3">
                                             <img id="img-upload" class="img-responsive" src="images/users/2.jpg" alt="" />
                                          </div>
                                       </div>
                                    </div> -->
                                    <div class="clearfix"></div>
                                   <!--  <div class="row">
                                       <div class="col-md-8 col-sm-8 col-xs-12">
                                          <div class="form-group">
                                             <div class="skin-minimal">
                                                <ul class="list">
                                                   <li>
                                                      <input  type="checkbox" id="minimal-checkbox-7">
                                                      <label for="minimal-checkbox-7">i agree <a href="#">Terms of Services</a></label>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                          <button type="submit" class="btn btn-theme btn-sm">Update My Info</button>
                                       </div>
                                    </div> -->
                                 
                         
								 <div class="col-md-6 col-sm-6 col-xs-12 text-right">
								  <a id="sr" href="#edit" data-toggle="tab"><button class="btn btn-theme btn-sm">Update &amp; Continue</button></a>
							   </div>
								 
                              </div>
                              <div class="profile-edit tab-pane fade" id="edit">
                                 <h2 class="heading-md">Fill your Bike Details</h2>
                                 <p>Manage Your Booking</p>
                                 <div class="clearfix"></div>
                                  
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Company Name </label>
                                          <select name="company" id="company" onchange="getValue(this.value);" class="form-control">
                                             <?php foreach($bike as $bikes){ ?>
                                             <option value="<?php echo $bikes->SN;?>"><?php echo $bikes->Brand_Name;?></option>
                                             <?php } ?>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Bike Name </label>
                                          <select name="bike_name" id="bike_name" value="" class="form-control">
                                          </select>
                                           
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Model </label>
                                          <input name="model_name" id="model_name" value="" class="form-control">
                                             
                                       </div>
                                    </div>
                                  <!--   <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Model </label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                    </div> -->
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Email Address <span class="color-red">*</span></label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       </div>
                                       <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">  
                                          <label>Contact Number <span class="color-red">*</span></label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       </div>
                                       
                                      <!--  <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                          <label>Country <span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">SriLanka</option>
                                             <option value="1">Australia</option>
                                             <option value="2">Bahrain</option>
                                             <option value="3">Canada</option>
                                             <option value="4">Denmark</option>
                                             <option value="5">Germany</option>
                                          </select>
                                       </div> -->
                                       <!-- <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                          <label>City <span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">London</option>
                                             <option value="1">Edinburgh</option>
                                             <option value="2">Wales</option>
                                             <option value="3">Cardiff</option>
                                             <option value="4">Bradford</option>
                                             <option value="5">Cambridge</option>
                                          </select>
                                       </div> -->
                                       <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                                          <label>Address <span class="color-red">*</span></label>
                                          <textarea class = "form-control margin-bottom-20" rows = "3"></textarea>
                                       </div> -->
                                    <!-- <div class="row margin-bottom-20">
                                       <div class="form-group">
                                          <div class="col-md-9">
                                             <div class="input-group">
                                                <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                Browse… <input type="file" id="imgInp">
                                                </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                             </div>
                                          </div>
                                          <div class="col-md-3">
                                             <img id="img-upload" class="img-responsive" src="images/users/2.jpg" alt="" />
                                          </div>
                                       </div>
                                    </div> -->
                                    <div class="clearfix"></div>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <div class="form-group">
                                             <div class="skin-minimal">
                                                <ul class="list">
                                                   <li>
                                                      <input  type="checkbox" id="minimal-checkbox-7">
                                                      <label for="minimal-checkbox-7">i agree <a href="#">Terms of Services</a></label>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                      <!--  <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                          <button type="submit" class="btn btn-theme btn-sm">Update My Info</button>
                                       </div> -->
                                    </div>
                           </form>
                                 
								 
								  <div class="col-md-4 col-sm-4 col-xs-12">
									  <a id="pd" href="#payment" data-toggle="tab"><button class="btn btn-theme btn-sm" type="button">Update &amp; Continue</button></a>
								   </div>
								 
                              </div>
                              <div class="profile-edit tab-pane fade" id="payment">
                                <h2 class="heading-md">Manage your Package Settings</h2>
                                 <p>Below are the payment options for your account.</p>
                                 <br>
                                 <form action="#" id="sky-form" class="sky-form" novalidate>
                                    <!--Checkout-Form-->
                                    <!-- <dl class="dl-horizontal">
                                       <dt><strong>Current Plan</strong></dt>
                                       <dd>
                                          Premium
                                       </dd>
                                       <dt><strong>Expiration Date </strong></dt>
                                       <dd>
                                          2nd January 2017
                                       </dd>
                                    </dl>
                                    <div class="row">
                                       <div class="col-sm-12 col-md-6 margin-bottom-20">
                                          <label>Select Plan You Want To Change<span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">Free</option>
                                             <option value="1">Premium</option>
                                             <option value="2">Advanced</option>
                                          </select>
                                       </div>
                                    </div> -->
                                    <!-- <button class="btn btn-sm btn-default" type="button">Cancel</button>
                                    <button type="submit" class="btn btn-sm btn-theme">Save Changes</button> -->
                                    <!--End Checkout-Form-->
                                    <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                          <label>Select Plan <span class="color-red">*</span></label>
                                         <select class="form-control">
                                             <option value="0">0-100 cc</option>
                                             <option value="1">100-150 cc</option>
                                             <option value="2">150-200 cc</option>
                                             
                                          </select> 
                                       </div>
                                       </div>
                                 </form>
                                
                                 
								 
								  <div class="col-md-4 col-sm-4 col-xs-12 text-right">
									  <a id="rc" href="#settings" data-toggle="tab"><button class="btn btn-theme btn-sm">Update &amp; Continue</button></a>
								   </div>
								 
                              </div>
                              <div class="profile-edit tab-pane fade" id="settings">
                                 <h2 class="heading-md">Manage your Notifications.</h2>
                                 <p>Below are the notifications you may manage.</p>
                                 <br>
                                 <form>
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-1">
                                             <label for="minimal-checkbox-1">Send me email notification when Ad is processed</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-2">
                                             <label for="minimal-checkbox-2">Send me email notification when user comment</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-3">
                                             <label for="minimal-checkbox-3">Send me email notification for the latest update</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-4">
                                             <label for="minimal-checkbox-4"> Receive our monthly newsletter</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-5">
                                             <label for="minimal-checkbox-5">Email notification</label>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="button-group margin-top-20">
                                       <button class="btn btn-sm btn-default" type="button">Reset</button>
                                       <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Row End -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
            </div>
            <!-- Main Container End -->
         </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script>
     $(document).ready(function(){
     
        $("#sr").click(function(){
         $("#bd").removeClass("active");  
         $(".sr").addClass("active");
      });
      
       $("#pd").click(function(){
         $(".sr").removeClass("active");  
         $(".pd").addClass("active");
      });
      
       $("#rc").click(function(){
         $(".pd").removeClass("active");  
         $(".rc").addClass("active");
      });
      
      });
      
     </script>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
        <?php $this->load->view('include/footer');?>

   <script type="text/javascript">
        function getValue(value)
        {
          $.ajax({
              url: "<?php echo base_url();?>plan/brand",
              type: "POST",
              data: { 'id': value},
              success: function (returndata) 
              {
               
                data=JSON.parse(returndata); 
                console.log(data)
                $.each(data, function(key, value) {
                 $("#bike_name").append("<option>" + value.bike_name + "</option>");
               });
                //document.getElementById('bike_name').value=data[0]['bike_name']; 
                //document.getElementById('model_name').value=data[0]['bike_model']; 
              },
              error: function () {

              }
          });
        
        }
        
</script>