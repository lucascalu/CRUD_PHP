<!-- create.php -->
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h2>Create User</h2>
    <form method="POST" action="store.php">
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>
