<?php
include('header.php');
include('role_page.php');

?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add Item</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                <li class="breadcrumb-item active">Items</li>
            </ol>
        </div>
        <div class="">

        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3 class="box-title m-b-0">Add Item</h3>
                    <p class="text-muted m-b-30 font-13">Items </p>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <?php
                            if (isset($_GET['i_id'])) {
                                echo ('<form method="get" action="main.php">
                                        <div class="row">
                                  <div class="form-group col-md-12">
                                  ');
                                foreach ($ob->sel_only_item() as $item) {
                                    echo ('
                                  
                                            <label for="exampleInputEmail1">Category</label>
      <select  name="cat" class="form-control">
          
          <option disabled >Select One</option>

          ');
                                    foreach ($ob->sel_cat() as $bb) {

                                        if ($item['item_cat'] == $bb['id']) {
                                            echo ("<option selected value='" . $bb['id'] . "'> " . $bb['name'] . " </option>");
                                        } else {
                                            echo ("<option value='" . $bb['id'] . "'> " . $bb['name'] . " </option>");
                                        }
                                    }
                                    echo ('
          
      </select>
                                        </div>
  </div> 
  
                                    <div class="row">
                           <div class="form-group col-md-6">
         <label for="exampleInputEmail1">Item Name</label>
      <input type="text" name="item" class="form-control" id="exampleInputEmail1" placeholder="Items Name" value="' . $item['item_name'] . '">
                            </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Item Price</label>
      <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Item Price" value="' . $item['item_price'] . '">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Stock</label>
      <input type="text" name="stock" class="form-control" id="exampleInputEmail1" placeholder="Stock" value="' . $item['stock'] . '">
                                        </div>
                                        </div>
                                                                   



                                           <div class="row">
                           <div class="form-group col-md-12">
       <input type="hidden" value="' . $_GET['i_id'] . '" name="i_id"/>
      <input type="submit" name="update_i"  value="Update" class="btn btn-info btn-block" placeholder="Items Name">
                            </div>      
                                          </div> 
                                    </form>');
                                }
                            } else {
                                echo ('<form method="post" action="main.php">
                                        <div class="row">
                                  <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">Category</label>
      <select  name="cat" class="form-control">
          
          <option  selected disabled >Select One</option>

          ');
                                foreach ($ob->sel_cat() as $bb) {

                                    echo ("<option value='" . $bb['id'] . "'> " . $bb['name'] . " </option>");
                                }
                                echo ('
          
      </select>
                                        </div>
  </div> 
  
                                    <div class="row">
                           <div class="form-group col-md-6">
         <label for="exampleInputEmail1">Item Name</label>
      <input type="text" name="item" class="form-control" id="exampleInputEmail1" placeholder="Items Name">
                            </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Item Price</label>
      <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Item Price">
                                        </div>  
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Stock</label>
      <input type="number" name="stock" class="form-control" id="exampleInputEmail1" placeholder="Stock">
                                        </div>
                                        </div>
                                                                   



                                           <div class="row">
                           <div class="form-group col-md-12">
       
      <input type="submit" name="add_i"  value="Add Items" class="btn btn-info btn-block" placeholder="Items Name">
                            </div>      
                                          </div> 
                                    </form>');
                            }
                            ?>

                        </div>
                    </div>


                </div>
            </div>


        </div>
        <?php
        include('footer.php');
        ?>