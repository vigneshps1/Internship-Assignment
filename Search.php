<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background: url(Category_Technology_Hd_Wallpap.png); background-size: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Search Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="" method="POST">
                                    <div class="form-group">
                                         <input type="text" name="valueToSearch" class="form-control" placeholder="Enter the Name or Roll NO" Required>
                                    </div><br>
                                    <button type="submit" name="search"class="btn btn-primary">Search</button>
                                </form>
                            </div>
                        </div><br>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Roll No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Class</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $connect = mysqli_connect("localhost", "root", "", "assign");
                                if(isset($_POST['search']))
                                {
                                 $valueToSearch = $_POST['valueToSearch'];
                                 $query = "SELECT * FROM `student` WHERE CONCAT(`Roll No`, `Name`) LIKE '%".$valueToSearch."%'";
                                 $query_run = mysqli_query($connect, $query);
                                 
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    while($row = mysqli_fetch_array($query_run))
                                    {
                                ?>
                                    <tr>
                                        <td><?php echo $row['Roll No'];?></td>
                                        <td><?php echo $row['Name'];?></td>
                                        <td><?php echo $row['Class'];?></td>
                                    </tr>
                                <?php
                                }
                                }
                            else{
                                ?>
                                <tr>
                                    <td colspan="6">No Record Found</td>
                                </tr>
                                <?php
                                }
                                }
                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>




     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>