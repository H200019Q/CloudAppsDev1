<!DOCTYPE html>
<html lang="en">
<head>
      <title>Customer Registeration</title>
      <meta charset="utf-8" />
	  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<form action="server.php" method="post">
<fieldset>
<legend>Customer Registration Form</legend>
<table>
<tr>
    <td><label for="fname">FirstName</label></td>
    <td><input type="text" id="fname"  name="fname" /></td>
</tr>
<tr>
    <td><label for="surname">Last Name</label></td>
    <td><input type="text" id="surname" name="surname" /></td>
</tr>
<tr>
  <td><label for="age">Age</label></td>
  <td><input type="number" id="age" name="age" min="1" max="120"/></td>
</tr>
<tr> 
    <td><span>Gender</span></td>
    <td><input type="radio" id="male" name="gender"  value="male" />

<label for="male">Male</label>
<input type="radio" id="female" name="gender"  value="female" />
<label for="female">Female</label></td>
<tr>

    <td><label for="province">Province</label></td>
<td><select name="province" id="province">
   <option>Harare</option>
   <option>Bulawayo</option>
   <option>Midlands</option>
   <option>Manicaland</option>
   <option>Masvingo</option>
   <option>Mash Central</option>
   <option>Mash East</option>
   <option>Mash West</option>
   <option>Mat North</option>
   <option>Mat South</option>
   <option>Mat West</option>
   <option>Mat East</option>
   
  </select>
  </td>
</tr>
<tr>
  <td><label for="email">Email</label></td>
  <td><input type="email" id="email" name="email" /></td>
</tr>
</table>  
  <p><input type="submit" value="Register" /></p>
  </fieldset>
  </form>



 	  