<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $from = (int)$_GET['id'];
    $to = (int)$_POST['to'];
    $amount = (float)$_POST['amount'];

    // Get sender's data
    $sql = "SELECT * FROM users WHERE id = $from";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        die("Sender query failed: " . mysqli_error($conn));
    }
    $sql1 = mysqli_fetch_array($query);

    // Get receiver's data
    $sql = "SELECT * FROM users WHERE id = $to";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        die("Receiver query failed: " . mysqli_error($conn));
    }
    $sql2 = mysqli_fetch_array($query);

    // Constraint checks
    if ($amount <= 0) {
        echo '<script>alert("Oops! Amount must be greater than zero!");</script>';
    } else if ($amount > $sql1['balance']) {
        echo '<script>alert("Insufficient Balance!");</script>';
    } else {
        // Deduct from sender
        $newbalance_sender = $sql1['balance'] - $amount;
        $sql = "UPDATE users SET balance = $newbalance_sender WHERE id = $from";
        mysqli_query($conn, $sql);

        // Add to receiver
        $newbalance_receiver = $sql2['balance'] + $amount;
        $sql = "UPDATE users SET balance = $newbalance_receiver WHERE id = $to";
        mysqli_query($conn, $sql);

        // Record transaction
        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transactions(sender, receiver, balance) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script>alert('Transaction Successful!'); window.location='transhistory.php';</script>";
        } else {
            echo "<script>alert('Transaction Failed!');</script>";
        }
    }
}
?>
