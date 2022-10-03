<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORM INPUT</title>
</head>
	
<body>
	<form method="post" action="Kalkulator-proses.php">
    Masukan Bilangan 1 : <input type="text" name="bil1" /><br />
    Masukan Bilangan 2 : <input type="text" name="bil2" /><br />
        <select name="operasi">
			<option value="tambah">+</option>
			<option value="kurang">-</option>
			<option value="kali">x</option>
			<option value="bagi">/</option>
		</select><br/>
    <input type="submit" value="Hitung" />
    </form>          	
</body>
</html>