<?php require "../layout/header.php" ?>
    <h1>Add Admin Form</h1>
    <form action="/add-admin" method="POST">
        <input type="text" name="username" required>
        <input type="password" name="password" required>
        <input type="text" name="firstname" required>
        <input type="text" name="middlename" placeholder="(optional)">
        <input type="text" name="lastname" required>
        <button type="submit">Submit</button>
    </form>
<?php require "../layout/footer.php" ?>
