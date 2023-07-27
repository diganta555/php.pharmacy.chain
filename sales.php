<?php
session_start();
	require 'config.php';
    $Pharmacy_Id=$_SESSION['Pharmacy_Id']; 
	if(isset($_POST['Purchase_Id'])){
 
		$C_name=$_POST['C_name'];
        $C_phone=$_POST['C_phone']; 
        $Outlet=$_POST['Outlet']; 
		$sql="insert into customer_details(C_name,C_phone,Outlet,s_date) values ('$C_name','$C_phone','$Outlet', NOW())";
		$conn->query($sql);
		$C_id=$conn->insert_id;
		$TOTAL=0;
        
		foreach($_POST['Purchase_Id'] as $med):
		$proinfo=explode("||",$med);
		$Purchase_Id=$proinfo[0];
		$i=$proinfo[1];
		$sql="select * from purchase where Pharmacy_Loc in (select Location from pharmacy where Pharmacy_Id={$Pharmacy_Id} and Purchase_Id='$Purchase_Id' ) order by Pharmacy_Loc ";
		
		$sql1=" SELECT Discount from pharmacy where Pharmacy_Id={$Pharmacy_Id}  ";
		$query=$conn->query($sql);
		$row=$query->fetch_array();
		$result1=$conn->query($sql1);
		$Temp=1;
        while($rows1=$result1->fetch_assoc()){
            $Temp=$rows1['Discount'];
        };
        $Temp=(100-$Temp)/100;
 
		if (isset($_POST['QUANTITY_'.$i])){
			$subt=$row['MRP']*$_POST['QUANTITY_'.$i];
            $TOTAL+=$subt*$Temp;

			$new_Quantity =$_POST['QUANTITY_'.$i];
			$select_Quantity ="select Quantity from purchase where Purchase_id=$med";
			$query=$conn->query($select_Quantity);
			//$row=$query->fetch_array();
			if ($query>$new_Quantity){
			$sql="insert into sales (C_id, Purchase_Id, QUANTITY) values ('$C_id','$Purchase_Id', '".$_POST['QUANTITY_'.$i]."')";
			$conn->query($sql);
			$sql1="update  purchase set Quantity =Quantity-$new_Quantity where Purchase_Id =$Purchase_Id";
			$conn->query($sql1);
			}
			else echo"error";
			
		}
		endforeach;
 		
 		$sql="update customer_details set TOTAL='$TOTAL' where C_id='$C_id'";
 		$conn->query($sql);
		header('location:add_sales.php');		
	}
	else{
		?>
		<script>
			window.alert('Please select Medicine');
			window.location.href='add_sales.php';
		</script>
		<?php
	}
?>