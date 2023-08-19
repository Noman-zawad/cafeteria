<?php 
session_start();
if (!isset($_SESSION['stuff_name'])) {
    header("Location: ./login.html"); // Redirect to the login page if session is not started
    exit();
}
include("./assets/sections/dashboard-header.php"); 
?>

<table class="dashboard-table">
        <thead>
            <tr>
                <th>OrderNo</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Menu Item</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>S001</td>
                <td>John Doe</td>
                <td>Pizza</td>
                <td>$10.00</td>
                <td>Processing</td>
                <td>
                    <button>Completed</button>
                </td>
            </tr>
            <!-- Add more rows here -->
        </tbody>
    </table>

<?php include("./assets/sections/dashboard-footer.php"); ?>