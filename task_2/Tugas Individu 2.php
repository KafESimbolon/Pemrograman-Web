<!DOCTYPE html>
<head>
    <title>Produk</title>
	<style>
		h1{
			text-decoration: underline;
		}
		.produk{
			border: 2px solid green;
			padding: 5px;
		}
	</style>
</head>
<body>
	<div class="Produk">
        <h1 align=center>PRODUK</h1>
	</div>
    <table class="produk" style="width:100%">
        <tr>
            <td>Nama</td>
            <td>: <?php echo $_GET["nama"]; ?></td>
        </tr>
        <tr>
            <td>Tanggal Pembelian</td>
            <td>: <?php echo $_GET["tanggal"]; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin </td>
            <td>: <?php echo $_GET["kelamin"]; ?></td>
        </tr>
        <tr>
            <td>Barang yang dibeli</td>
            <td>: <?php echo $_GET["barang"]; ?></td>
        </tr>
		<tr>
            <td>Harga barang</td>
            <td>: <?php echo $_GET["harga"]; ?></td>
        </tr>
        <tr>
            <td>Catatan(opsional)</td>
            <td>: <?php echo $_GET["pesan"]; ?></td>
        </tr>
    </table>
</body>
</html>