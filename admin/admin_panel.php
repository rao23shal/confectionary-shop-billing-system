<?php
session_start();

// connect to DB
$con = mysqli_connect("localhost", "root", "", "user_data");
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}

// fetch products from table
$result = mysqli_query($con, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Panel</title>
</head>
<body>
<header class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
        <span class="ml-3 text-xl text-white">Admin Panel</span>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <h3 class="mr-5 text-white">Hello, Admin</h3>
            <a href="logout.php" class="mr-5 hover:text-white">Logout</a>
            <a href="index1.php" class="mr-5 hover:text-white">Userpanel</a>
        </nav>
    </div>
</header>

<div class="container mx-auto mt-10">
    <div class="flex shadow-md my-10">
        <div class="w-full bg-white px-10 py-10">
            <div class="flex justify-between border-b pb-8">
                <h1 class="font-semibold text-2xl">Products Data</h1>
            </div>

            <div class="lg:w-4/4 w-full mx-auto mt-5">
                <table class="table-auto w-full border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border">ID</th>
                            <th class="px-4 py-2 border">Name</th>
                            <th class="px-4 py-2 border">Price</th>
                            <th class="px-4 py-2 border">Stock</th>
                            <th class="px-4 py-2 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td class="px-4 py-2 border"><?php echo $row['id']; ?></td>
                            <td class="px-4 py-2 border"><?php echo $row['name']; ?></td>
                            <td class="px-4 py-2 border">₹<?php echo $row['price']; ?></td>
                            <td class="px-4 py-2 border"><?php echo $row['stock']; ?></td>
                            <td class="px-4 py-2 border">
                                <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="text-blue-500">Edit</a> | 
                                <a href="delete_product.php?id=<?php echo $row['id']; ?>" class="text-red-500">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</body>
</html>
