<?php
	include('config/connect.php');
	
	$sql = "select * from product";
	if(!$result=mysqli_query($conn,$sql)){
		die('Error : ' . mysqli_error($conn));
	}
	if(mysqli_num_rows($result) == 0){
		echo "There is no data";
	}else{?> 
    <div class="col-sm-12" align="center">
    	<h3 style="font-weight:bold;text-transform:uppercase;">All product</h3>
    </div>
    	<div class="col-lg-12 no-padding">
        	<div class="row">
            <div class="col-lg-12 no-padding" style="background-color:#FFF;">
			<table class="table table-striped table-bordered text-format" align="center" style="box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.28);">
            <tr style="font-weight:bold;">
                <td>pro_id</td>
                <td>pro_brand</td>
                <td>pro_model</td>
                <td>pro_gender</td>
                <td>pro_type</td>
                <td>pro_strap</td>
                <td>pro_price</td>
                <td>pro_amount</td>
                <td>Add/Red.</td>
                <td>Delete</td>
            </tr>		
		<?PHP
		while($data=mysqli_fetch_array($result, MYSQLI_ASSOC)){
		?>
            <tr>
            	<td><?PHP echo $data['pro_id']?></td>
                <td><?PHP echo $data['pro_brand']?></td>
                <td align="left"><?PHP echo $data['pro_model']?></td>
                <td><?PHP echo $data['pro_gender']?></td>
                <td><?PHP echo $data['pro_type']?></td>
                <td><?PHP echo $data['pro_strap']?></td>
                <td><?PHP echo $data['pro_price']?></td>
                <td><?PHP echo $data['pro_amount']?></td>
                <td align="center"><a data-id="<?PHP echo $data['pro_id']?>" id="edit-pro">Edit</a></td>
                <td align="center"><a data-id="<?PHP echo $data['pro_id']?>" id="del-pro">Delete</a></td>
            </tr>
     
<?PHP } ?>
			</table>
            </div>
            </div>
            </div>
<?php
	}
	mysqli_free_result($result);
	mysqli_close($conn);
?>



