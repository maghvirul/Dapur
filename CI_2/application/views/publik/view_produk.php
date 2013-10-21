<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="codeigniter" />

	<title>Codeigniter</title>
</head>

<body>

Ini adalah halaman produk.

<table border="1px" cellspacing="0px" >
    <tr>
        <td width="100px">Nama</td>
        <td width="100px">Harga</td>
    </tr>
    
    <?php foreach ($produk as $item): ?>
    <tr>
        <td><?php echo $item['nama']; ?></td>
        <td><?php echo $item['harga']; ?></td>
    </tr>
    <?php endforeach; ?>
    
</table>

</body>
</html>