<?php
/**
 * Created by PhpStorm.
 * User: tey_k_000
 * Date: 2/27/2017
 * Time: 2:55 PM
 */
    include_once ("../model/connect.php");
    include_once ("../model/db_user.inc.php");
    //$sql = "select * from members";
    //$res = $conn -> prepare($sql);
   // $res -> execute();
   // $i=0;
    $user= array();
    //while($row = $res ->fetch(PDO::FETCH_ASSOC))
    //{
   //    $user[$i] = array($row['name'],$row['surname'],$row['username'],$row['passwd'],$row['typeUser'],$row['id']);
    //   $i++;
   // }
    $user = get_users($conn);
?>
<html>
<boby>
    <h4  align='center' >List User</h4>>
    <table  border="1" align="center" width="50%">

        <tr align='center' ><td>Name</td><td>Surname</td><td>Username</td><td>Password</td><td>Type User</td><td>Manage</td></tr>
        <?php
        for($j=0;$j<count($user);$j++)
        { echo
            "<tr>
							<td>".$user[$j]['0']."</td>
							<td>".$user[$j]['1']."</td>
							<td>".$user[$j]['2']."</td>
							<td>".$user[$j]['3']."</td>
							<td>".$user[$j]['4']."</td>
							<td>
                                <form action='../view/edit_user.php' method= 'post' align= 'center'>
                                    <input name = 'edit' type='submit' value='Edit' >
                                    <input name = 'edit' type='hidden' value='".$user[$j]['5']."' >                                 
                                </form>
                                <form action ='../controller/manage.php' method ='post' align= 'center'>
                                    <input  type='submit' name='delete'  value='Delete'>
                                     <input  type='hidden' name='delete' value='".$user[$j]['5']."'>
                                </form>	
                            </td>
			</tr>";
        }
        ?>
    </table>
</boby>
</html>