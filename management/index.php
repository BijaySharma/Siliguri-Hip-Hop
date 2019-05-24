<?php require_once("../private/functions.php");?>
<?php require_once("../private/shared/header.php");?>
<style>
    #body{
        margin-top:6em;

    }
    h1{
        margin: 90px;
    }
    table,tr,td,th{
        border: 2px solid black;
        padding: 5px 10px;
    }
    table{
        margin: 90px;
        margin-top: 20px;
    }
    th{
        background: #555555;
        color: white;
    }
    .addpart{
        margin-left: 100px;
    }
</style>

<?php require_once("../private/database.php");?>
<?php require_once("../private/query_functions.php");?>
<?php
    $db = db_connect();
    $result = find_all_records();
?>



<div id="body">
    <h1>ADMIN AREA</h1>

    <button class="btn addpart" data-toggle="modal" data-target="#myModal">Add Participant</button>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Stage Name</th>
            <th>Gender</th>
            <th>Category</th>
            <th>Phone</th>
            <th>Email</th>
            <th colspan="3" align="center">Actions</th>
        </tr>

        <?php while($reg=mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td> <?php echo $reg['id']; ?></td>
                <td><?php echo $reg['name'];?></td>
                <td><?php echo $reg['stage_name'];?></td>
                <td> <?php echo$reg['gender'];?></td>
                <td> <?php echo$reg['category'];?></td>
                <td><?php echo $reg['phone'];?></td>
                <td><?php echo $reg['email'];?></td>
                <td><a href="show.php?id=<?php echo u($reg['id']); ?>">View</a></td>
                <td><a><a href="edit.php?id=<?php echo u($reg['id']); ?>">Edit</a></a></td>
                <td><a href="delete.php?id=<?php echo u($reg['id']); ?>">Delete</a></td>
            </tr>
      <?php   } ?>

    </table>
    <?php
        mysqli_free_result($result);
        db_disconnect($db);
    ?>



</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4></span> Add Participant</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="/slghiphop/register.php" method="post">
                    <div class="form-group">
                        <label for="psw"> <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp; Name</label>
                        <input type="text" class="form-control" name="name" id="psw" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="psw"> </span> Stage Name</label>
                        <input type="text" name="stage_name" class="form-control" id="psw" placeholder="Stage Name" required>
                    </div>
                    <div class="form-group">
                        <label for="psw"></span>Gender</label>
                        <select id="psw" name="gender" required>
                            <option selected>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Transgender">Transgender</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="psw">Phone Number</label>
                        <input name="phone" type="tel" class="form-control" id="psw" placeholder="Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <label for="psw">Email ID</label>
                        <input name="email" type="email" class="form-control" id="psw" placeholder="Email ID?" required>
                    </div>
<!--                    <div class="form-group">By Clicking on Submit you accept all the Terms & conditions.</div><br>-->
                    <button type="submit" class="btn btn-block">Add
                        <span class="glyphicon glyphicon-ok"></span>
                    </button>
                </form>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Cancel
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("../private/shared/footer.php");?>

