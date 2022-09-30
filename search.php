<?php
include('code.php');
$obj = new search();
?>


<!DOCTYPE html>
<html>

<head>
    <title>Search Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="s1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    </style>
</head>

<body>
    <!-- header start here -->
    <div class="navbar">
        <div class="nav">
            <P class="txt">SEARCHING POINT</P>
        </div>
    </div>
    <!-- header end here -->
    <!-- component -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <h1 class="hed"> Your Search End Here<i class="fa-sharp fa-solid fa-globe globe"></i></h1>
    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto">
        <form class="flex items-center search1" method="post" action="">
            <label for="simple-search" class="sr-only">Search here</label>
            <div class="relative w-full ">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="simple-search" name="item" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="Search here">
            </div>
            <input type="submit" name="search" value="Search" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            </svg>
        </form>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        <?php
        //  print search keywords
        if (!empty($_POST['search'])) {
            $row = $obj->search($_POST);

            foreach ($row as $row1) { ?>
                <div class="heading"><?php echo $row1['title'] ?></div>
                <div class="main"><?php echo $row1['description'] ?></div>
        <?php }
        } ?>
    </div>
</body>
<html>