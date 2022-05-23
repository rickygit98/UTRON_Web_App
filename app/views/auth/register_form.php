    <div class="row">
		<div class="col-lg-6">
			<?php Messages::auth_messages(); ?>
		</div>
	</div>
    <form action="<?= BASEURL; ?>/auth/register" method="post">

	
    <table align="center" width="40%">
        <thead>
            <tr>
            <td colspan="3" align="center" ><h1>REGISTRASI</h1></td>
            <td></td>
            <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td> : </td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td> : </td>
                <td><input type="text" name="username" id="username" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td> : </td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td> : </td>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Already have account? <a href="<?= BASEURL; ?>/auth/login_form">Login!</a> </td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <button type="submit" name="btn_register" id="btn_register"> Submit </button>
                <button type="reset" name="reset" id="reset"> Reset </button>
            </td>
            </tr>
        </tbody>
        
    </table>

        
    </form>