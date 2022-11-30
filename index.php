<?php

include 'connection.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="hero">
        <h1>Todo List</h1>


        <form action="add.php" method="POST">
            <input type="text" name="title" class="search_field">
            <button type="submit" class="search_btn" name="submit">Add Task</button>


            <table class="list_table">
                <thead>
                    <tr class="table_row">
                        <th class="table_head">Number</th>
                        <th class="table_head">Task</th>
                        <th class="table_head">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php


                        $sql = "SELECT * FROM tasks";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $done = $row['is_done'] == 1 ? 'done' : '';
                                print('<tr class="table_row '.$done.'">
                                    <td class="number">'.$row['id'].'</td>
                                    <td class="task">'.$row['title'].'</td>
                                    <td class="delete"><a href="./done.php?id='.$row['id'].'">Done</a></td>
                                    <td class="delete"><a href="./delete.php?id='.$row['id'].'">Delete</a></td>
                                </tr>');
                            }
                        } else {
                            print('<td class="number"></td>
                            <td class="task">No Task Found</td>
                            <td class="delete"></td>');
                        }
                        $conn->close();
                                            
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>
