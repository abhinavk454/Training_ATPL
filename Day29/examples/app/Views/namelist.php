<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CURD APP</title>
    <div class="container mt-4">
        <h1>CURD APP</h1>

        <div>
            <a href="<?php echo site_url('/addname') ?>">Add a Name & email</a>
        </div>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
        }
        ?>
        <div class="mt-3">
            <table id="users-list">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($users) : ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['name']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('editnames/' . $user['id']); ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?php echo base_url('delete/' . $user['id']); ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    </body>

</html>