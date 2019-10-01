<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>


<div class="col-md-12">
    

	<marquee><h1>Welcome to Blossom Souvenir Purwokerto</h1></marquee>
</div>
<br>
</br>
<br>
</br>
<table class="table">
<div >
     <tr>
		<td colspan="7">Total Modal</td>
		<td>			
		<?php 
		
			$x=mysql_query("select sum(modal) as total from barang");	
			$xx=mysql_fetch_array($x);			
			echo "<b> Rp.". number_format($xx['total']).",-</b>";		
		?>
		</td>
	</tr>
	<br>
	</br>
	<tr>
		<td colspan="7">Total Pemasukan</td>
		<?php 
			$tanggal=mysql_real_escape_string($_GET['tanggal']);
			$x=mysql_query("select sum(total_harga) as total from barang_laku");	
			$xx=mysql_fetch_array($x);			
			echo "<td><b> Rp.". number_format($xx['total']).",-</b></td>";
		
 		?>
	</tr>
	<br>
	</br>
	<tr>
		<td colspan="7">Total Laba</td>
		<?php 
		
			$tanggal=mysql_real_escape_string($_GET['tanggal']);
			$x=mysql_query("select sum(laba) as total from barang_laku");	
			$xx=mysql_fetch_array($x);			
			echo "<td><b> Rp.". number_format($xx['total']).",-</b></td>";
		
 		?>
	</tr>
      </div>
      </table>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>
