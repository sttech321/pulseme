<!DOCTYPE html>
<html>

<head>
    <title>Add user</title>
</head>

<body>
    <form method="post" action="<?php echo base_url('user/save'); ?>">
        <table width="600" border="1" cellspacing="5" cellpadding="5">
            <tr>
                <td width="230">First Name</td>
                <td width="329">
                    <input type="text" name="txtFirstName" />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="txtLastName" />
                </td>
            </tr>
            <tr>
                <td>Email ID</td>
                <td>
                    <input type="email" name="txtEmail" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnAddUser" value="Add user" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>