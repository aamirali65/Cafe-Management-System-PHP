<?php
include('header.php');

?>
 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Order</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
                <div class="">
                    
                </div>
            </div>
            
            <div class="container-fluid">
        
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Order</h3>
                            <p class="text-muted m-b-30 font-13">Cafe Kahani Order </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form method="post">
                                    <div class="row">
                           <div class="form-group col-md-6">
         <label for="exampleInputEmail1">Table no</label>
      <select  name="cat" class="form-control" id="tno">
          
          <option  selected disabled >Select One</option>
          <option value="9286">Home Delivery </option>
          

          <?php
          foreach($ob->sel_table() as $bb){

            echo("<option value='".$bb['id']."'>Table ".$bb['name']." </option>");
          }
          ?>
      </select>
                            </div>

                              <div class="form-group col-md-6">
         <label for="exampleInputEmail1">Catgories</label>
      <select  name="cat" class="form-control" id="cat_sel">
          
          <option  selected disabled >Select One</option>

          <?php
          foreach($ob->sel_cat() as $bb){

            echo("<option value='".$bb['id']."'> ".$bb['name']." </option>");
          }
          ?>
      </select>
      
                            </div>
                                        
                                       
                         </div>
    <textarea class="form-control" rows="2" id="home_add" placeholder="Enter Delivery Address" style="display: none"></textarea>

            <br>

<div class="row">
    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" id="cat_head">Items</h4>
                                
                                <div class="table-responsive">
                                    <table class="table color-bordered-table dark-bordered-table">
                                        <thead>
                                            <tr>
                                                <th>Items Name</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <tr>
                                                <td> - </td>
                                              
                                                <td> - </td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"><i class="fa fa-plus-circle"></i></i> </a>
                                                </td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
</div>

 <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Items</h4>
                                
                                <div class="table-responsive">
                                    <table id="printTable" class="table color-bordered-table dark-bordered-table">
                                        <thead>
                                            <tr>
                                                <th>Items Name</th>
                                                <th>Qty</th>
                                                <th>@</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody id="items_inv">
                                            <tr>
                                                <td> -</td>
                                                    <td>- </td>  
                                                      <td> -</td>
                                                <td> -</td>
                                                <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-check text-danger"></i> </a>
                                                </td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
</div>

</div>
                                        
                                        
                                        <div class="row">
                           <div class="form-group col-md-12">
       
      <input type="button" name="tab" id="print_now"  onclick="printit()" value="Print" class="btn btn-info btn-block" placeholder="Items Name">
                            </div>     	

</div> 
                                        
                                    </form>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>

                    
                </div>
                <script>
          var tno = document.getElementById('tno');
          var cat_sel = document.getElementById('cat_sel');
          var items_inv = document.getElementById('items_inv');
          var i_name = "";
          var tam =0;
          var retam = "";
          var recam = "";
          var rtn = 0;
          var discount = 0;
          
          function send_for_table()
          {
             $.ajax({
                    type : "post",
                    url  : "main.php",
                    data : {t_show :tno.value},
                    success : function(response)
                    {
                        items_inv.innerHTML = null;
                        var json = JSON.parse(response);
                        for(let i  = 0; i<json.length;i++)
                        {
                            items_inv.innerHTML +=json[i];
                        }
                         iname = document.getElementsByName('i_name');
                         qty = document.getElementsByName('qtys');
                         price = document.getElementsByName('price');
                          retam = document.getElementById('retam');
                          recam = document.getElementById('recam');
                          discount = document.getElementById('dis');
                          
                         tam = parseInt(document.getElementById('tam').innerHTML);


                    }
                });
          }

          tno.addEventListener('change',function()
            {
               send_for_table();
            });
          cat_sel.addEventListener('change',function()
            {
                $.ajax({
                    type : "post",
                    url  : "main.php",
                    data : {cat : this.value},
                    success : function(response)
                    {
                        var json = JSON.parse(response);
                        document.getElementById('cat_head').innerHTML = json[0];
                        var tbody = document.getElementById('tbody');
                        tbody.innerHTML = null;
                        for(let i  = 1; i<json.length; i++)
                        {
                            tbody.innerHTML += json[i];
                        }
                    }
                });
            });
          function additem(i_id)
          {
            $.ajax({
                type : "post",
                url  : "main.php",
                data : {i_id  : i_id.getAttribute('data-i-id'),t_id : document.getElementById('tno').value,i_sel : i_id.getAttribute('data-item')},
                success : function(response)
                {
                    send_for_table();
                }
            });
          }

          
          function changeam(){
            var sh = discount.value/100;
            var ad = tam*sh;
            rtn = retam.innerHTML = (recam.value - (tam-ad)).toString();
          }
         
          function printit()
          {
            var oid = parseInt(document.getElementById('i_name').getAttribute('data-oid'))+1;
            var tb = 0;
            var divToPrint=document.getElementById("printTable");
            var tm = 0;
            var disc = 0;
            var date = new Date();
            var rand = Math.ceil(Math.random()*5000);
           var d= date.getMonth()+1;
           var pri=document.getElementById('recam');
           var ap = date.getHours() >= 12 ? 'pm' : 'am';
           var h  = (date.getHours()-12)+':'+date.getMinutes()+':'+date.getSeconds()+" "+ap;
           
           

           if(tno.value == "9286")
           {
            tb = "Dining"
           }
           else
           {
            tb = tno.value;
           }

         
           
   newWin= window.open("");
   newWin.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">');
   newWin.document.write('<link rel="stylesheet" href="css/some.css">');
   newWin.document.write('<div style="height:20px;width:200px;margin:auto;"><h3 style="font-size:20px;text-align:center;font-weight:bold;">RaoStah Broast </h3></div><div style="width:300px;height:30px;margin:auto"><h6 style="font-size: 16px; text-align: center; font-weight: bold; border: 1px solid; padding: 10px;">For Delivery 0305-1124681</h6>  </div><br><table class=""><tr><div style="width:50%;float:left"><td>Bill No<td><td>:</td><td ><span style="margin-left:20px">'+oid+'</span></td></tr><tr><td>Date<td><td>:</td><td><span style="margin-left:20px">'+date.getDate()+"-"+d +"-"+date.getFullYear()+'</span></td></tr><div><div style="width:50%;float:left"><tr style="position:absolute;left:70%;top:100px;"><td>Time</td><td>:</td><td>'+h+'</td></tr></div><tr style="position: absolute; left: 93%; bottom: 86%;"> </tr></table> <br><table class="table table-bordered"><th style="width:200px;">Items</th><th style="width:100px;">Qty</th><th>@</th><th style="width:100px;">Price</th>');
   for(let i=0; i<iname.length;i++)
   {
    var total = parseInt(price[i].innerHTML) * parseInt(qty[i].innerHTML);
    var tm = total+tm;
    newWin.document.write('<tr><td>'+iname[i].innerHTML+' </td><td>'+qty[i].innerHTML+'</td><td>'+price[i].innerHTML+' </td><td>'+total+' </td></tr>');
   }
   if(document.getElementById('tno').value == 9286)
   {
    home = document.getElementById('home_add').value;
    var addr = 'Delivery Address:'+home;

   }
   else
   {
    home = 0;
    var addr = 'Dinning';
   }

   

   var real = discount.value/100;
   var dis = tm-(tm*real);
   disc = real*100;
   newWin.document.write('</table><br><div class="info"><table class="table c"><tr><td>Bill Total :</td><td>'+tm+'.00</td></tr><tr><td>Discount :</td><td>'+disc+'.00%</td></tr><tr><td>Total Payable :</td><td>'+dis+'.00</td></tr><tr><td>Paid :</td><td>'+recam.value+'.00</td></tr><tr><td>Change Return :</td><td>'+rtn+'.00</td></tr></table></div><br><br><br><br><br><br><p>'+addr+'</p><div style="width:250px;text-align:center;margin:auto"><p style="margin-right:20px;font-size:12px">Address : Main Korangi Road #3 opp Itwar Bazar Ground Karachi<br></p></div><div style="width:300px;height:40px;margin:auto;"><h5 style="text-align:center">Powered by Technologenesis<br>0336-0310507</h5></div>'); 

           $.ajax({
            type : "post",
            url  : "main.php",
            data : {tb:document.getElementById('tno').value,home : home},
            success : function(response)
            {
                var ab = setInterval(function(){newWin.print(); newWin.close(); a=1; if(a==1){clearInterval(ab)}},1);
            }
           });
         }
       </script>

       <script type="text/javascript">
       	document.getElementById('tno').addEventListener("change",function(){
       		       	var   home = document.getElementById('tno').value;
       		       	if(home == '9286'){
       		       		document.getElementById('home_add').style.display="block";
       		       	}
       		       	else {
       		       		document.getElementById('home_add').style.display="none";
       		       	}


       	});

       </script>
               <?php
include('footer.php');
?>

 