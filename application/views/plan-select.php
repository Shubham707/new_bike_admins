 <?php $this->load->view('include/header.php');?>

 <style type="text/css">
  
   .btn-group{ 
     padding: 0;
     margin-bottom: 20px;
    }
 </style>  
   <style type="text/css">

    .container-fluid div{
      height: 500px;
      overflow: auto;
    }

    .container-fluid div h3{
      text-align: center;
      font-weight: bold;
      text-decoration: underline;
      margin-bottom: 1em;
    }

    .container-fluid ul{
      padding: 0;
      display: block;

    }
    .container-fluid ul li{
      padding: 10px;
      transition: 0.2s;
    }

    .container-fluid ul li:hover{
      cursor: pointer;
      background-color: #999;
      border-radius: 5px;
    }

    .plan-list{
        min-height: 40px !important;
        height: auto !important;
    }

    .total-amount{
      width: 155px;
      text-align: center;
    }


    .pay-btn{
      width: 200px;
      background: #1abf2e;
      color: white;
      font-size: 16px;
      box-shadow: none;
      border: none;
      padding: 5px;
    }

    .pay-btn:hover{
      background: #22a232;
    }

    #selected{
      height: 417px;
    }

  </style>
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
                           <li><a class="active" href="#">Plans</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>Subscription Plan</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
     <div class="container-fluid">
  
  <div class="row">
    <div class="col-md-3" style="background-color:lavender; font-weight: bold; padding: 1em 2em;">
      <h3>Select Categories</h3>
      <ul style="list-style: none;">
        <?php foreach($plan as $plans){ ?>
        <li><a href="javascript:;" onclick="getValue('<?php echo $plans->Category_Name;?>');"><?php echo $plans->Category_Name;?></a></li>
      <?php }?>
      </ul>
    </div>

    <div class="col-md-5" style="background-color:lavenderblush; font-weight: bold; padding: 1em 2em;">
      <h3>Select Services</h3>
      <div id="selected"></div>  
   
    </div>

    <div class="col-md-4" style="background-color:lavender; font-weight: bold; padding: 2em;">
      <p>Amount</p>
      <div id="planArray" class="plan-list"></div> 
      <form action="<?php echo base_url('cart');?>" method="post">
      <div class="plan-list total">
      Total: <input  type="text" id="total" name="total" class="total-amount" value="" readonly>  
      </div>
      <input  type="hidden" id="bike" name="bike" value="<?php echo $bike;?>">
      <input  type="hidden" id="bike" name="service" value="<?php echo $service;?>">
       <input  type="hidden" id="plan" name="plan" value="<?php echo $plan_bike;?>"><br>
       <input  class="pay-btn" type="submit"  name="submit" value="Pay">
     </form>
    </div>
  </div>
</div> 
     <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
     
         
      </div>
      <?php $this->load->view('include/footer');?><!-- 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
      <script type="text/javascript">
        function getValue(value)
        {
          $.ajax({
              url: "<?php echo base_url();?>plan/plan_service/"+value+'/<?php echo $bike;?>',
              type: "POST",
              data: { 'name': value},
              async: false,
              cache: false,
              contentType: false,
              processData: false,
              success: function (returndata) 
              {
                document.getElementById('selected').innerHTML= returndata;    
              },
              error: function () {

              }
          });
        
        }
        var planArray = [];
        function ShowModal(elem){
          const dataId = $(elem).data("id");
          const dataVal = $(elem).val();
          const a = '<ol>',b = '</ol>', m = [];
          const data = {
            id: dataId,
            value: dataVal
          }
          const index = planArray.findIndex( item => item.id === dataId);
          index > -1 ? planArray.splice(index, 1) : planArray.push(data);
          let total = 0;
          let i=0;
          for(let key of planArray){
              m[i++] = ('<li>' + key.id + '  -'+ key.value +'</li>')
          }
          document.getElementById('planArray').innerHTML = a + m.join('\r\n') + b; 
          $(':checkbox:checked').each(function () {

              total += +this.value;
          });
          $("#total").val(total);
           
        }
         
     
      </script>
     