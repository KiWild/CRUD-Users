<?php include('includes/header.php'); ?>

<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="container">
        <h1>Users</h1>

        <table class="tbl-usr-lst">
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            
            <tr>
                <td>1. </td>
                <td>Ki</td>
                <td>Wild</td>
                <td>kiwild</td>
                <td>0018449700010</td>
                <td>kiwild@gmail.com</td>
                <td>
                    <form action="" method="POST">
                        <input type="submit" name="submit" value="Update">
                        <input type="submit" name="submit" value="Delete">
                    </form>
                </td>
            </tr>

            <tr>
                <td>1. </td>
                <td>Ki</td>
                <td>Wild</td>
                <td>kiwild</td>
                <td>0018449700010</td>
                <td>kiwild@gmail.com</td>
                <td>
                    <form action="" method="POST">
                        <input type="submit" name="submit" value="Update" class="btn-upd-usr">
                        <input type="submit" name="submit" value="Delete" class="btn-del-usr">
                    </form>
                </td>
            </tr>
        </table>

    </div>
</div>

<?php include('includes/footer.php'); ?>