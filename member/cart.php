<?php 	session_start(); 

error_reporting( error_reporting() & ~E_NOTICE );


	$fiction_id = $_GET['fiction_id']; 
	$act = $_GET['act'];

	if($act=='add' && !empty($fiction_id))
	{
		if(isset($_SESSION['cart'][$fiction_id]))
		{
			$_SESSION['cart'][$fiction_id];
		}
		else
		{
			$_SESSION['cart'][$fiction_id]=1;
		}
	}

	if($act=='remove' && !empty($fiction_id)) 
	{
		unset($_SESSION['cart'][$fiction_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $fiction_id=>$amount)
		{
			$_SESSION['cart'][$fiction_id]=$amount;
		}
	}


    if($act=='cancel')  
	{
		unset($_SESSION['cart']);
	}


	// exit();
    
?>
<title>หน้าแรก</title>
<?php include("header.php"); ?>
<?php include("navbar.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container">
        <h4><i class="fas fa-shopping-cart"style="margin-top:85px"></i> ตะกร้าสั่งซื้อ </h4><br>
        <form id="frmcart" name="frmcart" method="post" action="?act=update">
            <table class="table table-bordered " width="100%" border="0" align="center" class="square">
                <tr>
                    <td bgcolor="#EAEAEA">#</td>
                    <td align="center" bgcolor="#EAEAEA">ภาพ</td>
                    <td bgcolor="#EAEAEA">นิยาย</td>
                    <td align="center" bgcolor="#EAEAEA">ราคา</td>
                    <td align="center" bgcolor="#EAEAEA">จำนวน</td>
                    <td align="center" bgcolor="#EAEAEA">รวม(บาท)</td>
                    <td align="center" bgcolor="#EAEAEA">ลบ</td>
                </tr>
                <?php
	$total=0;
	$i=1;
	if(!empty($_SESSION['cart']))
	{
		include("condb.php");
		foreach($_SESSION['cart'] as $fiction_id=>$qty)
		{
			$sql	= "SELECT fc.*,ff.fg_address FROM fiction as fc 
			INNER JOIN figure_fiction as ff ON fc.fiction_id=ff.fiction_id
			WHERE fc.fiction_id='$fiction_id'";
			$query	= mysqli_query($conn, $sql);
			$row	= mysqli_fetch_array($query);
			$sum	= $row['price_fiction']*$qty;
			$total	+= $sum;
			echo "<tr>";
			echo "<td width='5%' >" . $i++. "</td>";
			echo "<td width='20%'> <img src='../assets/image/figure_fiction/" . $row['fg_address'] . "' width='50%' alt='img'>" .'</td>' ;
			echo "<td width='30%'>" .$row["name_fiction"]. "</td>";
			echo "<td width='10%' align='right'>" .number_format($row["price_fiction"],2) . "</td>";
			echo "<td width='10%' align='right'>";  
			echo "<input type='number' min='1' max='1' class='form-control' name='amount[$fiction_id]' value='$qty' size='2'/></td>";
			echo "<td width='10%' align='right'>".number_format($sum,2)."</td>";
			//remove product
			echo "<td width='10%' align='center'><a class='btn btn-danger btn-flat btn-sm'  href='cart.php?fiction_id=$fiction_id&act=remove'>ลบ</a></td>";
			echo "</tr>";
		}
		echo "<tr>";
		echo "<td colspan='5' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
		echo "<td align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
		echo "<td align='left' bgcolor='#CEE7FF'></td>";
		echo "</tr>";
	}
	?>
                <tr>
                    <td colspan="7" align="right">
					<a class="btn btn-flat btn-primary" href="index.php">กลับหน้ารายการสินค้า</a>
                        <input class="btn btn-danger btn-flat" type="button" name="Submit" value="ยกเลิกตะกร้าสินค้า"
                            onclick="window.location='cart.php?act=cancel';" />
                        <?php if($_SESSION['cart']== 0){?>
                        <button class="btn btn-flat btn-warning" disabled>ปรับปรุง</button>
                        <?php } else {?>
                        <input class="btn btn-warning btn-flat" type="submit" name="button" id="button"
                            value="ปรับปรุง" />
                        <?php } ?>
                        <?php if($_GET['act']=="update"){ ?>
                        <input class="btn btn-success btn-flat" type="button" name="Submit2" value="สั่งซื้อ"
                            onclick="window.location='confirm.php';" />
                        <?php } else{ ?>
                        <button class="btn btn-flat btn-success" disabled>สั่งซื้อ</button>
                        <?php  } ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</section>
<!-- /.content -->

<?php include('footer.php'); ?>