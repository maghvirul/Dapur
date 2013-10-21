<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="codeigniter" />

	<title>Codeigniter</title>
</head>

<body>

Ini adalah halaman produk.

<h1>{kategori}</h1>
<div>{deskripsi}</div>

<h3>Daftar Produk</h3>

<table border="1px" cellspacing="0px" >
    <tr>
        <td width="100px">Nama</td>
        <td width="100px">Harga</td>
        <td width="100px">Tahun Produksi</td>
    </tr>
    
    {produk}
    <tr>
        <td>{nama}</td>
        <td>{harga}</td>
        <td>{tahun}</td>
    </tr>
    {/produk}
    
</table>

</body>
</html>