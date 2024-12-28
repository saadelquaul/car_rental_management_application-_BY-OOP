<?php
// require_once '../classes/UserManager.php';
// require_once '../classes/ReservationManager.php';

// Fetch all users and their reservations
// $users = UserManager::getAllUsers();
// $reservations = ReservationManager::getAllReservations();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <title>Admin | Manage Users and Reservations</title>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main class="admin-main">
        <section class="user-section">
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['role']; ?></td>
                            <td>
                                <a class="edit" href="edit_user.php?id=<?php echo $user['id']; ?>">Edit</a>
                                <a class="delete" href="delete_user.php?id=<?php echo $user['id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?> -->

                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>
                            <a href="mailto:
                            john.doe@example.com">john.doe@example.com</a>
                        </td>
                        <td>Admin</td>
                        <td>
                            <a class="edit"  href="edit_user.php?id=1">Edit</a>
                            <a class="delete" href="delete_user.php?id=1">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Jane Doe</td>
                        <td>
                            <a href="mailto:
                            jane.doe@example.com">jane.doe@example.com</a>
                        </td>
                        <td>User</td>
                        <td>
                            <a class="edit" href="  edit_user.php?id=2">Edit</a>
                            <a class="delete" href="delete_user.php?id=2">Delete</a>
                        </td>
                    </tr>
                    <!-- Add more user rows here -->

                </tbody>
            </table>
        </section>

        <section class="reservation-section">
            <h2>Manage Reservations</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Car ID</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php foreach ($reservations as $reservation): ?>
                        <tr>
                            <td><?php echo $reservation['id']; ?></td>
                            <td><?php echo $reservation['user_id']; ?></td>
                            <td><?php echo $reservation['car_id']; ?></td>
                            <td><?php echo $reservation['start_date']; ?></td>
                            <td><?php echo $reservation['end_date']; ?></td>
                            <td>
                                <a href="edit_reservation.php?id=<?php echo $reservation['id']; ?>">Edit</a>
                                <a href="delete_reservation.php?id=<?php echo $reservation['id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?> -->
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>2022-01-01</td>
                        <td>2022-01-07</td>
                        <td>
                            <a class="edit"  href="edit_reservation.php?id=1">Edit</a>
                            <a class="delete" href="delete_reservation.php?id=1">Delete</a>
                        </td>
                    </tr>
                    <!-- Add more reservation rows here -->
                     </table>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>