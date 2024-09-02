<!DOCTYPE html>
<html>
<head>
    <title>Admin List</title>
</head>
<body>
    <h2>Admin List</h2>
    <a href="<?= site_url('admin/create') ?>">Create New Admin</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach($admins as $admin): ?>
        <tr>
            <td><?= $admin['id'] ?></td>
            <td><?= $admin['name'] ?></td>
            <td><?= $admin['email'] ?></td>
            <td>
                <a href="<?= site_url('admin/edit/'.$admin['id']) ?>">Edit</a>
                <a href="<?= site_url('admin/delete/'.$admin['id']) ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>