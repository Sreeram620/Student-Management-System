<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

$result = null; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $roll = $_POST['rollno'];
    $query = "SELECT * FROM add_student WHERE roll_no = '$roll'";
    $result = mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>View Students</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }
        table {
            border-radius:10px;
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px #ccc;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        button {
            background-color: #007bff;
            border-radius: 5px;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Students List</h2>
    <?php if ($result !== null): ?>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Father Name</th>
                        <th>Roll Number</th>
                        <th>Phone Number</th>
                        <th>DOB</th>
                        <th>Update Student</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['std_name']) ?></td>
                        <td><?= htmlspecialchars($row['f_name']) ?></td>
                        <td><?= htmlspecialchars($row['roll_no']) ?></td>
                        <td><?= htmlspecialchars($row['phone_no']) ?></td>
                        <td><?= htmlspecialchars($row['dob']) ?></td>
                        <td>
                            <form action="att_add.html" method="GET">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                <button type="submit">Add Attendence</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p style="text-align:center;">No students found for this roll number.</p>
        <?php endif; ?>
    <?php endif; ?>

    <?php mysqli_close($conn); ?>
</body>
</html>
