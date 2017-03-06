<html>
<body>

    <h4 align="center">Update User<h4>
    <?php
/**
 * Created by PhpStorm.
 * User: tey_k_000
 * Date: 3/6/2017
 * Time: 9:52 AM
 */
        include_once ("../controller/manage.php");
        include_once ("../model/db_user.inc.php");
        include_once ("../model/connect.php");
        $id = $_POST["edit"];
        $user = array();
        $user = get_user($id,$conn);
        //var_dump($user);
        ?>
            <form action='../controller/manage.php' method= 'post' align= 'center'>
            <table  border="1" align="center" width="50%">
                <tr align='center' ><td>Name</td><td>Surname</td><td>Username</td><td>Password</td><td>Type User</td><td></td><td>Manage</td></tr>
            <?php
                echo
                "<tr>
                                <td><input type='text' name='user[]' value='$user[0]' ></td>
                                <td><input type='text' name='user[]' value='$user[1]' ></td>
                                <td><input type='text' name='user[]' value='$user[2]' ></td>
                                <td><input type='text' name='user[]' value='$user[3]' ></td>
                                <td><input type='text' name='user[]' value='$user[4]' ></td>
                                <td><input type='hidden' name='user[]' value='$user[5]' ></td>
                                <td>                                  
                                    <input name = 'save' type='submit' value='Save' >                                                                                                                              
                                </td>
                </tr>";
            ?>
            </table>
            </form>
</body>
</html>
