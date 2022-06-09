<form method="post" enctype="multipart/form-data" name="form1" id="form1" action="">
  <table width="59%" border="0" align="center">
    <tbody>
      <tr>
        <td colspan="3" align="center"><h1><strong>SIMPLE BLOG STATUS</strong></h1></td>
      </tr>
      <tr>
        <td width="12%"><label for="inputJudul">Judul</label></td>
        <td width="2%">:</td>
        <td width="86%"><input type="text" name="inputJudul" id="inputJudul"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><textarea name="inputKeterangan" id="inputKeterangan"></textarea></td>
      </tr>
      <tr>
        <td>Upload Foto</td>
        <td>:</td>
        <td><input type="file" name="inputFile" id="inputFile"></td>
      </tr>
      <tr>
        <td>Filter</td>
        <td>:</td>
        <td><select name="inputFilter" id="inputFilter">
            <option value="filter1">filter1</option>
            <option value="filter2">filter2</option>
            <option value="filter3">filter3</option>
            <option value="filter4">filter4</option>
          </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"></td>
      </tr>
    </tbody>
  </table>
</form>
	
<?php 
if(isset($_POST['btnSubmit'])){

  require_once "filter.php";
  // Data from FORM
  $fil = $_POST["inputFilter"];
  
  // Path to Img Save Location
  $path = "img/".$_POST['inputJudul'].".jpg";
  
  // Get name from input file form
  // Get the tmp_name to path with choosen name
  move_uploaded_file($_FILES["inputFile"]["tmp_name"],$path);
  
  switch($fil){
    case "filter1" : filter1($path);break;
    case "filter2" : filter2($path);break;
    case "filter3" : filter3($path);break;
    case "filter4" : filter4($path);break;
  }
  
}
  ?>
