
	<div class="row">
		<div class="col-lg-6">
			<?php Messages::auth_messages(); ?>
		</div>
	</div>

	<form method="post" action="<?= BASEURL; ?>/auth/login">
	  <table width="40%" border="0" align="center">
	    <thead>
			<tr>
	        <td colspan="3" align="center"><h1>LOGIN</h1></td>
			<td></td>
			<td></td>
          	</tr>
		</thead>
	  <tbody>
	      
	      <tr>
	        <td>Email</td>
	        <td>:</td>
	        <td><input type="email" name="email" id="email" required></td>
          </tr>
	      <tr>
	        <td>Password</td>
	        <td>: </td>
	        <td><input type="password" name="password" id="password" required></td>
          </tr>
	      <tr>
	        <td>&nbsp;</td>
	        <td>&nbsp;</td>
	        <td> Don't Have account? <a href="<?= BASEURL; ?>/auth/register_form">Register here!</a> </td>
        </td>
          </tr>
	      <tr>
	        <td>&nbsp;</td>
	        <td>&nbsp;</td>
	        <td><button type="submit" name="btn_login" id="btn_login" value="Submit">Login</button></td>
          </tr>
        </tbody>
      </table>
	</form>
