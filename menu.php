<?php 
    session_start();
    if (!isset($_SESSION['stuff_name'])) {
        header("Location: ./login.html"); // Redirect to the login page if session is not started
        exit();
    }
    include("./assets/sections/dashboard-header.php"); 
?>
<div class="dashboard-header">
    <button>Add New</button>
</div>
<table class="dashboard-table">
        <thead>
            <tr>
                <th>Menu ID</th>
                <th>Menu Item</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Pizza</td>
                <td>$10.00</td>
            </tr>
            <!-- Add more rows here -->
        </tbody>
    </table>

<?php include("./assets/sections/dashboard-footer.php"); ?>