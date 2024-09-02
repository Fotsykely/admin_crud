<!DOCTYPE html>
<html>
<head>
    <title>Edit Admin</title>
</head>
<body>
    <h2>Edit Admin</h2>
    <form action="<?= site_url('admin/update/'.$admin['id']) ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= $admin['name'] ?>" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $admin['email'] ?>" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>