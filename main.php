<?php session_start();
class cafekahani
{
	function con()
	{
		$con = mysqli_connect('localhost', 'root', '', 'cafe') or die('error');
		return ($con);
	}
	function user()
	{
		if (isset($_POST['user'])) {
			$c = $_POST['email'];
			$d = $_POST['number'];
			$e = $_POST['uname'];
			$f = md5($_POST['pass']);
			$g = $_POST['role'];
			$img = $_FILES['img']['name'];

			$sql = mysqli_query($this->con(), "INSERT INTO `tbl_user`( `email`, `number`, `user_name`, `pass`, `role`, `image`) VALUES ('$c','$d','$e','$f','$g','$img')");
			move_uploaded_file($_FILES['img']['tmp_name'], 'img/user/' . $img);
			if (!$sql) {
				echo ('<script>wrong()</script>');
			} else {
				echo ('<script>Succes()</script>');
			}
			return ($sql);
		}
	}
	function data_sum_order_today()
	{

		$order_query = "SELECT * FROM `table_orders` where date_format(o_time,'%Y-%m-%d') = date_format(now(),'%Y-%m-%d')";
		$da = mysqli_query($this->con(), $order_query);
		$total = 0;
		foreach ($da as $ch) {
			$var = json_decode($ch['items'], true);
			foreach ($var as $chk => $vals) {

				$sum_query = "SELECT item_price FROM `items_and_deals` where i_id = " . $vals['id:'];
				$price = mysqli_fetch_array(mysqli_query($this->con(), $sum_query), MYSQLI_ASSOC)['item_price'];
				$total = $total + ($price * $vals['qty']);
			}
		}


		return $total;
	}

	function data_sum_order_wise_date()
	{

		if (isset($_GET['st']) || isset($_GET['end'])) {

			$start_date = date_format(date_create($_GET['st']), "Y-m-d h:i:A");
			$end_date = date_format(date_create($_GET['end']), "Y-m-d h:i:A");

			$order_query = "SELECT * FROM `table_orders` where 1=1 and date_format(o_time,'%Y-%m-%d %h:%i:%p') between  
'$start_date' and '$end_date'";
		}

		$da = mysqli_query($this->con(), $order_query);
		$total = 0;
		foreach ($da as $ch) {
			$var = json_decode($ch['items'], true);
			foreach ($var as $chk => $vals) {

				$sum_query = "SELECT item_price FROM `items_and_deals` where i_id = " . $vals['id:'];
				$price = mysqli_fetch_array(mysqli_query($this->con(), $sum_query), MYSQLI_ASSOC)['item_price'];
				$total = $total + ($price * $vals['qty']);
			}
		}


		return $total;
	}

	function data_sum_order_month()
	{

		$order_query = "SELECT * FROM `table_orders` where date_format(o_time,'%Y-%m') = date_format(now(),'%Y-%m')";
		$da = mysqli_query($this->con(), $order_query);
		$total = 0;
		foreach ($da as $ch) {
			$var = json_decode($ch['items'], true);
			foreach ($var as $chk => $vals) {

				$sum_query = "SELECT item_price FROM `items_and_deals` where i_id = " . $vals['id:'];
				$price = mysqli_fetch_array(mysqli_query($this->con(), $sum_query), MYSQLI_ASSOC)['item_price'] ?? 0;
				$total = $total + ($price * $vals['qty']);
			}
		}


		return $total;
	}

	function monthly_items()
	{

		$order_query = "SELECT * FROM `table_orders` where date_format(o_time,'%Y-%m') = date_format(now(),'%Y-%m')";
		$da = mysqli_query($this->con(), $order_query);
		$total = 0;
		$items = array();
		foreach ($da as $ch) {
			$var = json_decode($ch['items'], true);
			foreach ($var as $chk => $vals) {

				$sum_query = "SELECT item_price FROM `items_and_deals` where i_id = " . $vals['id:'];
				$price = mysqli_fetch_array(mysqli_query($this->con(), $sum_query), MYSQLI_ASSOC)['item_price'];
				if (isset($items[$vals['id:']])) {
					$pr = $vals['qty'] * $price;

					$items[$vals['id:']]['qty'] = $items[$vals['id:']]['qty'] + $vals['qty'];
					$items[$vals['id:']]['price'] = $items[$vals['id:']]['price'] + $pr;
				} else {
					$pr = $vals['qty'] * $price;
					$items[$vals['id:']]['qty'] = $vals['qty'];
					$items[$vals['id:']]['price'] = $pr;
				}
			}
		}


		foreach ($items as $its => $vals) {
			$name = mysqli_fetch_array(mysqli_query($this->con(), "SELECT item_name from items_and_deals where i_id = $its"), MYSQLI_ASSOC)['item_name'];
			echo ("<tr>
		<td>$name</td>
		<td>" . $vals['qty'] . "</td>
		<td>" . $vals['price'] . "</td>
		</tr>");
		}

		return $total;
	}
	function paid_items()
{
    if (isset($_GET['st']) || isset($_GET['end'])) {
        $start_date = date_format(date_create($_GET['st']), "Y-m-d");
        $end_date = date_format(date_create($_GET['end']), "Y-m-d");

		$order_query = "SELECT * FROM `table_orders` WHERE payment = 'Paid' AND date_format(o_time,'%Y-%m-%d') BETWEEN '$start_date' AND '$end_date'";
    } else {
        $order_query = "SELECT * FROM `table_orders` WHERE payment = 'Paid'";
    }

    $da = mysqli_query($this->con(), $order_query);
    $total = 0;
    $items = array();
    foreach ($da as $ch) {
        $var = json_decode($ch['items'], true);
        foreach ($var as $chk => $vals) {
            $sum_query = "SELECT item_price FROM `items_and_deals` WHERE i_id = " . $vals['id:'];
            $price = mysqli_fetch_array(mysqli_query($this->con(), $sum_query), MYSQLI_ASSOC)['item_price'];
            if (isset($items[$vals['id:']])) {
                $pr = $vals['qty'] * $price;
                $items[$vals['id:']]['qty'] = $items[$vals['id:']]['qty'] + $vals['qty'];
                $items[$vals['id:']]['price'] = $items[$vals['id:']]['price'] + $pr;
            } else {
                $pr = $vals['qty'] * $price;
                $items[$vals['id:']]['qty'] = $vals['qty'];
                $items[$vals['id:']]['price'] = $pr;
            }
        }
    }

    foreach ($items as $its => $vals) {
        $name = mysqli_fetch_array(mysqli_query($this->con(), "SELECT item_name FROM items_and_deals WHERE i_id = $its"), MYSQLI_ASSOC)['item_name'];
        echo ("<tr>
                <td>$name</td>
                <td>" . $vals['qty'] . "</td>
                <td>" . number_format($vals['price'], 0) . "</td>
            </tr>");
        $total += $vals['price'];
    }

    if (isset($_GET['st']) || isset($_GET['end'])) {
        echo ("<tr><td>Total</td><td></td><td>" . number_format($total, 0) . "</td></tr>");
    }

    return $total;
}
	function unpaid_items()
{
    if (isset($_GET['st']) || isset($_GET['end'])) {
        $start_date = date_format(date_create($_GET['st']), "Y-m-d");
        $end_date = date_format(date_create($_GET['end']), "Y-m-d");
        $order_query = "SELECT * FROM `table_orders` WHERE payment = 'Unpaid' AND date_format(o_time,'%Y-%m-%d') BETWEEN '$start_date' AND '$end_date'";
    } else {
        $order_query = "SELECT * FROM `table_orders` WHERE payment = 'Unpaid'";
    }

    $da = mysqli_query($this->con(), $order_query);
    $total = 0;
    $items = array();
    foreach ($da as $ch) {
        $var = json_decode($ch['items'], true);
        foreach ($var as $chk => $vals) {
            $sum_query = "SELECT item_price FROM `items_and_deals` WHERE i_id = " . $vals['id:'];
            $price = mysqli_fetch_array(mysqli_query($this->con(), $sum_query), MYSQLI_ASSOC)['item_price'];
            if (isset($items[$vals['id:']])) {
                $pr = $vals['qty'] * $price;
                $items[$vals['id:']]['qty'] = $items[$vals['id:']]['qty'] + $vals['qty'];
                $items[$vals['id:']]['price'] = $items[$vals['id:']]['price'] + $pr;
            } else {
                $pr = $vals['qty'] * $price;
                $items[$vals['id:']]['qty'] = $vals['qty'];
                $items[$vals['id:']]['price'] = $pr;
            }
        }
    }

    foreach ($items as $its => $vals) {
        $name = mysqli_fetch_array(mysqli_query($this->con(), "SELECT item_name FROM items_and_deals WHERE i_id = $its"), MYSQLI_ASSOC)['item_name'];
        echo ("<tr>
                <td>$name</td>
                <td>" . $vals['qty'] . "</td>
                <td>" . number_format($vals['price'], 0) . "</td>
            </tr>");
        $total += $vals['price'];
    }

    if (isset($_GET['st']) || isset($_GET['end'])) {
        echo ("<tr><td>Total</td><td></td><td>" . number_format($total, 0) . "</td></tr>");
    }

    return $total;
}

	function daily_items()
	{
		if (isset($_GET['st']) && isset($_GET['end'])) {

			$start_date = date_format(date_create($_GET['st']), "Y-m-d");
			$end_date = date_format(date_create($_GET['end']), "Y-m-d");

		 
			$order_query = "SELECT * FROM `table_orders` where date_format(o_time,'%Y-%m-%d') between  
'$start_date' and '$end_date'";
		}
		 else {
			$order_query = "SELECT * FROM `table_orders` where date_format(o_time,'%Y-%d') = date_format(now(),'%Y-%d')";
		}


		$da = mysqli_query($this->con(), $order_query);
		$total = 0;
		$items = array();
		foreach ($da as $ch) {
			$var = json_decode($ch['items'], true);
			foreach ($var as $chk => $vals) {

				$sum_query = "SELECT item_price FROM `items_and_deals` where i_id = " . $vals['id:'];
				$price = mysqli_fetch_array(mysqli_query($this->con(), $sum_query), MYSQLI_ASSOC)['item_price'];
				if (isset($items[$vals['id:']])) {
					$pr = $vals['qty'] * $price;

					$items[$vals['id:']]['qty'] = $items[$vals['id:']]['qty'] + $vals['qty'];
					$items[$vals['id:']]['price'] = $items[$vals['id:']]['price'] + $pr;
				} else {
					$pr = $vals['qty'] * $price;
					$items[$vals['id:']]['qty'] = $vals['qty'];
					$items[$vals['id:']]['price'] = $pr;
				}
			}
		}


		foreach ($items as $its => $vals) {
			$name = mysqli_fetch_array(mysqli_query($this->con(), "SELECT item_name from items_and_deals where i_id = $its"), MYSQLI_ASSOC)['item_name'];
			echo ("<tr>
		<td>$name</td>
		<td>" . $vals['qty'] . "</td>
		<td>" . number_format($vals['price'], 0) . "</td>
		</tr>");
		}

		if (isset($_GET['st']) || isset($_GET['end'])) {
			echo ("<tr><td>Total</td><td></td><td>" . number_format($this->data_sum_order_wise_date(), 0) . "</td></tr>");
		}

		return $total;
	}

	function monthly_expense()
	{
		$query = "SELECT * from expense where date_format(e_time,'%Y-%d') = date_format(now(),'%Y-%d')";
		$result = mysqli_query($this->con(), $query);
		$total = 0;
		foreach ($result as $res) {
			$multi = $res['t_price'] * $res['qty'];
			$total = $total + $multi;
		}
		return $total;
	}

	function Today_expense()
	{
		$query = "SELECT * from expense where date_format(e_time,'%Y-%m') = date_format(now(),'%Y-%m')";
		$result = mysqli_query($this->con(), $query);
		$total = 0;
		foreach ($result as $res) {
			$multi = $res['t_price'] * $res['qty'];
			$total = $total + $multi;
		}
		return $total;
	}

	function login()
	{
		if (isset($_POST['login'])) {
			$a = $_POST['email'];
			$b = $_POST['psw'];

			$sql = "SELECT * FROM `tbl_user` WHERE user_name ='$a' and pass = '$b' and active= 1;";
			$login = mysqli_query($this->con(), $sql);
			$count = mysqli_num_rows($login);

			if ($count == 0) {
				echo ('<script>wrong()</script>');
			} else {
				$_SESSION['abc'] = $_POST['email'];
				echo ('<script> window.location = "index.php"</script>');
			}


			return ($login);
		}
	} //L0ogin end

	function user_data()
	{
		$query = mysqli_query($this->con(), "select * from  tbl_user");
		return $query;
	}
	function user_profile($a)
	{
		$query = mysqli_query($this->con(), "select * from  tbl_user where id = $a");
		return $query;
	}



	function user_active()
	{
		$userpro = mysqli_query($this->con(), "UPDATE `tbl_user` SET active ='1' WHERE id= '" . $_GET['active'] . "' ");
		return ($userpro);
	}
	function user_suspend()
	{
		$userpro = mysqli_query($this->con(), "UPDATE `tbl_user` SET active ='2' WHERE id= '" . $_GET['suspend'] . "' ");
		return ($userpro);
	}

	function user_admin()
	{
		$userpro = mysqli_query($this->con(), "UPDATE `tbl_user` SET role ='1' WHERE id = '" . $_GET['makeadmin'] . "' ");
		return ($userpro);
	}

	function user_view()
	{
		$query = mysqli_query($this->con(), "select * from tbl_user");
		return ($query);
	}

	function session()
	{
		$query = mysqli_query($this->con(), "select * from tbl_user where user_name = '" . $_SESSION['abc'] . "' ");
		return ($query);
	}


	function user_count()
	{
		$query = mysqli_query($this->con(), "select count(id) as idd from tbl_user");
		return ($query);
	}






	function item()
	{

		$a = $_POST['item'];
		$b = $_POST['price'];
		$c = $_POST['cat'];
		$d = $_POST['stock'];
		$query = "INSERT INTO `items_and_deals`( `item_name`, `item_type`, `item_price`,`item_cat`,`stock`) VALUES ('$a',1,'$b',$c,$d)";
		$item = mysqli_query($this->con(), $query);

		echo ('<script> window.location = "item.php"</script>');
	}




	function selectItems()
	{
		$cat = isset($_GET['cat']) ? $_GET['cat'] : 2;
		$query = "SELECT * from items_and_deals where item_cat = $cat";
		$result = mysqli_query($this->con(), $query);
		return $result;
	}
	function sel_item_by_cat()
	{
		$cat = $_POST['cat'];
		$arr = array();
		$query = "SELECT * from items_and_deals where item_cat = $cat";
		$sel_cat_name = mysqli_fetch_array(mysqli_query($this->con(), "SELECT name from catlog where id = $cat"), MYSQLI_ASSOC);
		$result = mysqli_query($this->con(), $query);

		array_push($arr, $sel_cat_name['name']);

		foreach ($result as $items) {
			array_push($arr, '<tr>
                                     <td>' . $items['item_name'] . '</td>
                                              
                                     <td>' . $items['item_price'] . '</td>
                                     <td class="text-nowrap">
                                         <a  onclick="additem(this)"  data-item="add" data-i-id = ' . $items['i_id'] . ' data-toggle="tooltip" data-original-title="Close" ></a> <i class="fa fa-check text-danger"></i> </a>
                                     </td>
                                 </tr>');
		}

		echo (json_encode($arr));
	}


	function sel_item_by_cat_v()
	{
		$cat = $_POST['cat_v'];


		$a = mysqli_query($this->con(), "SELECT * from items_and_deals where item_cat = $cat");
		$arr = [];
		foreach ($a as $data) {
			array_push($arr, ["id" => $data['i_id'], "name" => $data['item_name'], "Price" => $data['item_price']]);
		}
		echo (json_encode($arr));
	}




	function sel_items_by_table()
	{
		$oid = mysqli_fetch_array(mysqli_query($this->con(), "SELECT o_id from table_orders order by o_id desc limit 1 "), MYSQLI_ASSOC)['o_id'];
		$t_show = $_POST['t_show'];
		$arr = array();

		$query = "SELECT * from temp_orders where table_id = $t_show";

		$result = mysqli_query($this->con(), $query);

		if (mysqli_num_rows($result) > 0) {


			foreach ($result as $id) {
				$sel_qps = mysqli_query($this->con(), "SELECT  * from items_and_deals where i_id =" . $id['i_id']);
				$row = mysqli_fetch_array($sel_qps, MYSQLI_ASSOC);
				$t_am = $row['item_price'] * $id['qty'];

				array_push($arr, '<tr>
                                                <td style="width:300px" id="i_name" data-oid="' . $oid . '"  name="i_name">' . $row['item_name'] . '</td>
                                                <td name="qtys">' . $id['qty'] . '</td>
                                                <td name="price">' . $row['item_price'] . '</td>
                                               
                                                <td class="text-nowrap">
                                                    <a  data-toggle="tooltip" onclick="additem(this)" data-i-id="' . $id['i_id'] . '" data-item="add" data-original-title="Close"> <i class="fa fa-plus-circle text-success"></i> </a>

                                                    <a  data-toggle="tooltip" onclick="additem(this)" data-i-id="' . $id['i_id'] . '" data-item="rem" data-original-title="Close"> <i class="fa fa-minus-circle text-danger"></i> </a>
                                                </td>
                                            </tr>
                                        
                                           
                                            ');
				$qty = $id['qty'];
				$price = $row['item_price'];
				if (!isset($total)) {
					$total = 0;
				}
				$total = $total + ($price * $qty);
			}
			array_push($arr, "




			     	<tr>
			<td><b>Total<b></td>
			     
			     	
			     	<td></td>
			     	<td id='tam'>$total.00</td>
			     		<td></td>
			     		
</tr>
 






			     
			     	

			     	<tr style='border-top:3px solid black'>
			<td><b>Discount<b></td>
			     
			     	
			    
	<td style='width:200px' ><input style='width: 150px;position: absolute; margin-top: -6px;' onchange='changeam()' onkeyup='changeam()' id='dis' type='text' placeholder='Rs' class='form-control' ></td>
			     	
			     		
			     
			     	</tr>

			

<tr style='b:3px solid black'>
			<td><b>Recived<b></td>
			     	
			     
			     	
			     	 
	<td style='width:200px' ><input style='width: 150px;position: absolute; margin-top: -6px;' onchange='changeam(this)' onkeyup='changeam(this)' id='recam' type='text' placeholder='Rs' class='form-control' ></td>
			     		<td></td>
			     		
			     
			     	</tr>


			<tr>
<tr style='b:3px solid black'>
			<td><b>Paymet<b></td>
			     	
			     
			     	
			     	 
	<td style='width:100%'>
	<select class='custom-select' id='payment' name='paid'>
                                        <option>Paid</option>
                                        <option>Unpaid</option>
                                    </select>
	
	</td>
			     		
			     
			     	</tr>


			<tr>
			<td><b>Return<b></td>
			     	<td></td>
			     
			     	
			     	<td></td>
			     	<td id='retam'>00.00</td>
			     		
			     
			     	</tr>
			     	");
		} else {
			array_push($arr, "This Table has no order");
		}


		echo (json_encode($arr));
	}

	function update_item()
	{
		$name = $_GET['item'];
		$price = $_GET['price'];
		$cat = $_GET['cat'];
		$id = $_GET['i_id'];
		$stock = $_GET['stock'];
		$query = "UPDATE items_and_deals set item_name = '$name',item_cat=$cat,item_price = $price,stock = '$stock' where i_id = $id";
		$result = mysqli_query($this->con(), $query);
		header("location:items.php");
	}
	function sel_items()
	{
		$query = "SELECT * from items_and_deals it left join catlog c on it.item_cat = c.id";
		$result = mysqli_query($this->con(), $query);
		return $result;
	}
	function sel_only_item()
	{
		$id = $_GET['i_id'];
		$query = "SELECT * from items_and_deals it left join catlog c on it.item_cat = c.id where i_id = $id";
		$result = mysqli_query($this->con(), $query);
		return $result;
	}

	function temp_items()
	{
		$i_id = $_POST['i_id'];
		$t_id = $_POST['t_id'];
		$i_sel = $_POST['i_sel'];
		$home_add = "hello"; //$_POST['home_adda'];
		$arr = array();

		$query = "SELECT * from temp_orders where table_id = $t_id and i_id = $i_id ";
		$check = mysqli_query($this->con(), $query);
		if (mysqli_num_rows($check) > 0) {
			$row = mysqli_fetch_array($check, MYSQLI_ASSOC);

			if ($i_sel == "add") {
				$qty = $row['qty'] + 1;
			}

			if ($i_sel == "rem") {
				if ($row['qty'] > 1) {
					$qty = $row['qty'] - 1;
				} else {
					mysqli_query($this->con(), "DELETE from temp_orders where i_id = $i_id");
				}
			}

			$updt = "UPDATE temp_orders set qty = $qty where table_id = $t_id and i_id = $i_id";
			echo ($updt);
			$updt_res = mysqli_query($this->con(), $updt);
		} else {
			$ins = "INSERT into temp_orders(table_id,qty,i_id,delivery_add) values($t_id,1,$i_id,'$home_add')";
			echo ($ins);
			mysqli_query($this->con(), $ins);
		}
	}

	function addToOrder()
	{

		$tb_id = $_POST['tb'];
		$home = $_POST['home'];
		$payment = $_POST['paid'];
		$user_id = $_SESSION['id'];
		$query = "SELECT * from temp_orders where table_id = $tb_id ";
		$res = mysqli_query($this->con(), $query);
		$arr = array("$tb_id" => array());
		foreach ($res as $vals) {
			

			$select_stock = "select stock  from items_and_deals where i_id = ".$vals['i_id']."";
			$select_stock_result  = mysqli_query($this->con(), $select_stock);
            $row = $select_stock_result->fetch_assoc();
	     	$new_stock =( $row['stock'] -  $vals['qty']);
			$update_queruy = "UPDATE items_and_deals SET stock =  ".$new_stock."  WHERE i_id = ".$vals['i_id']."";
 			$resuilt = mysqli_query($this->con(), $update_queruy);

			 array_push($arr[$tb_id], array("id:" => $vals['i_id'], "qty" => $vals['qty']));
		}
 

		$json = json_encode($arr[$tb_id]);
	
		 $ins_query = "INSERT INTO `table_orders`(`t_no`, `items`,`payment`,`addr`,`o_addedBy` ) values($tb_id,'" . $json . "','$payment','$home','$user_id') ";
		$ins = mysqli_query($this->con(), $ins_query);

	 

		mysqli_query($this->con(), "DELETE from temp_orders where table_id = $tb_id");
		return "done";
	}
	function expence()
	{

		$a = $_GET['price'];
		$b = $_GET['paid_for'];
		$query = "INSERT INTO `expense`(`e_name`, `t_price`) VALUES ('$a',$b)";
		$q = mysqli_query($this->con(), $query);
		header("location:" . $_SERVER['HTTP_REFERER']);
	}

	function select_bills()
	{
		$query = "SELECT o_id,o_time from table_orders";
		$result = mysqli_query($this->con(), $query);
		$total = 0;
		foreach ($result as $exp) {
			echo ("<tr>
					
					<td>
					" . $exp['o_id'] . "
					</td>

					");
			foreach ($this->sel_billamount($exp['o_id']) as $its => $vals) {
				$total = $total + $vals['price'];
			}



			echo ("
					<td>
					" . $total . "
					</td>
					<td>
					" . $exp['o_time'] . "
					</td>

					<td><a href='view-bill.php?o_id=" . $exp['o_id'] . "'><i class='fa fa-eye '></i></a>
					</td>

					</tr>");
		}
	}



	function sel_billamount($id)
	{

		$order_query = "SELECT * FROM `table_orders` where o_id = $id";
		$da = mysqli_query($this->con(), $order_query);
		$total = 0;
		$items = array();
		foreach ($da as $ch) {
			$var = json_decode($ch['items'], true);
			foreach ($var as $chk => $vals) {

				$sum_query = "SELECT item_price FROM `items_and_deals` where i_id = " . $vals['id:'];
				$price = mysqli_fetch_array(mysqli_query($this->con(), $sum_query), MYSQLI_ASSOC)['item_price'];
				if (isset($items[$vals['id:']])) {
					$pr = $vals['qty'] * $price;

					$items[$vals['id:']]['qty'] = $items[$vals['id:']]['qty'] + $vals['qty'];
					$items[$vals['id:']]['price'] = $items[$vals['id:']]['price'] + $pr;
				} else {
					$pr = $vals['qty'] * $price;
					$items[$vals['id:']]['qty'] = $vals['qty'];
					$items[$vals['id:']]['price'] = $pr;
				}
			}
		}


		return $items;
	}

	function voucer_view()
	{
		$re = mysqli_query($this->con(), "select * from voucher");
		return $re;
	}

	function expance_view()
	{
		$re = mysqli_query($this->con(), "select *,date_format(e_time,'%Y-%m-%d') as datee from expense");
		return $re;
	}

	function update_expense()
	{

		$name = $_GET['e_name'];
		$price = $_GET['e_price'];
		$id = $_GET['updt_exp'];

		$query = "Update expense set e_name = '$name', t_price=$price where e_id = $id";
		$result = mysqli_query($this->con(), $query);
		header("location:" . $_SERVER['HTTP_REFERER']);
	}

	function only_exp()
	{
		$id = $_GET['exp_id'];
		$query = "SELECT * from expense where e_id = $id";
		$result = mysqli_query($this->con(), $query);
		return $result;
	}


	function categories()
	{

		if (isset($_POST['cata'])) {
			$a = $_POST['categorie'];
			$qu = mysqli_query($this->con(), "INSERT INTO `catlog`(`name`) VALUES ('$a')");
			return $qu;
		}
	}


	function sel_cat()
	{
		$qu = mysqli_query($this->con(), "select * from `catlog`");
		return $qu;
	}
	function add_table()
	{

		$a = $_POST['no'];
		$query = "INSERT INTO `tbl_add`( `name`) VALUES ($a)";
		$qu = mysqli_query($this->con(), $query);
		header("location:" . $_SERVER['HTTP_REFERER']);
	}




	function sel_table()
	{

		$qu = mysqli_query($this->con(), "select * from  `tbl_add`");
		return $qu;
	}

	function expp_head()
	{
		$expp = $_POST['expp'];
		$qu = mysqli_query($this->con(), "INSERT INTO `exp_head`( `exp_head`) VALUES  ('$expp') ");
		return $qu;
	}

	function logo()
	{
		if (isset($_POST['btn_logo'])) {

			$logo = $_POST['logo'];


			$qu = mysqli_query($this->con(), "update setting set logo = '$logo' where id = 1");
			return $qu;


			//	echo('<script>window.location.href="Setting.php"</script>');
			// echo $qu;

		}
	}

	function sel_setting()
	{
		$qu = mysqli_query($this->con(), "select * from setting  where id = 1");
		return $qu;
	}



	function bill_phone()
	{
		if (isset($_POST['btn_phone'])) {

			$add = $_POST['phone'];
			$qu = mysqli_query($this->con(), "update setting set number = '$add' where id = 1");
			return $qu;
			//	echo('<script>window.location.href="Setting.php"</script>');
			// echo $qu;

		}
	}
	function bill_add()
	{
		if (isset($_POST['btn_add'])) {
			$add = $_POST['add'];
			$qu = mysqli_query($this->con(), "update setting set address = '$add' where id = 1");
			return $qu;
			//	echo('<script>window.location.href="Setting.php"</script>');
			// echo $qu;

		}
	}
} // class end

$ob = new cafekahani;
if (isset($_POST['cat'])) {
	$ob->sel_item_by_cat();
}
if (isset($_POST['cat_v'])) {
	$ob->sel_item_by_cat_v();
}
if (isset($_POST['t_id'])) {
	$ob->temp_items();
}

if (isset($_POST['t_show'])) {
	$ob->sel_items_by_table();
}

if (isset($_POST['tb'])) {
	$ob->addToOrder();
}

if (isset($_GET['updt_exp'])) {
	$ob->update_expense();
}

if (isset($_GET['submit'])) {
	$ob->expence();
}
if (isset($_POST['add_i'])) {
	$ob->item();
}

if (isset($_GET['update_i'])) {
	$ob->update_item();
}
if (isset($_POST['tab'])) {
	$ob->add_table();
}

if (isset($_GET['sel_today'])) {
	$ob->daily_items();
}
if (isset($_GET['paid_today'])) {
	$ob->paid_items();
}
if (isset($_GET['unpaid_today'])) {
	$ob->unpaid_items();
}

if (isset($_GET['expp'])) {
	$ob->expp_head();
}
