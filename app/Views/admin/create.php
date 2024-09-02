<!DOCTYPE html>
<html>
<head>
    <title>Create Admin</title>
</head>
<body>
    <h2>Create Admin</h2>
    <form action="<?= site_url('admin/store') ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
