<?php
    session_start();
    require 'dbcon.php';
?>
<?php
    include('includes/header.php');
?>
    
    <!-- Fetch the Data -->
    <div class="container mt-5 mb-5">

        <?php
        include('message.php');
        ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Video Collection</h4>
                            <a href="media-create.php" class="btn btn-primary float-end">Add Video to Collection</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Year</th>
                                    <th>Season</th>
                                    <th>Link</th>
                                    <th>Genre</th>
                                    <th>Format</th>
                                    <th>Primary Location</th>
                                    <th>Secondary Location</th>
                                    <!--<th>Cover</th>
                                    <th>Tag 1</th>
                                    <th>Tag 2</th>
                                    <th>Tag 3</th>
                                    <th>Tag 4</th>
                                    <th>Tag 5</th>
                                    <th>Tag 6</th>
                                    <th>Tag 7</th>
                                    <th>Tag 8</th>-->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * from video";

                                     //perform the query
                                    $query_run = mysqli_query($con, $query);

                                    //Check to see if get any data back
                                    if(mysqli_num_rows($query_run) > 0) {
                                        foreach($query_run as $video){
                                            //echo $video['title'];
                                            ?>
                                            <tr>
                                            <td><?= $video['id']; ?></td>
                                            <td><?= $video['title']; ?></td>
                                            <td><?= $video['year']; ?></td>
                                            <td><?= $video['season']; ?></td>
                                            <td><?= $video['link']; ?></td>
                                            <td><?= $video['genre']; ?></td>
                                            <td><?= $video['format']; ?></td>
                                            <td><?= $video['location1']; ?></td>
                                            <td><?= $video['location2']; ?></td>
                                           
                                            <td>
                                                <a href="media-view.php?id=<?= $video['id']?>" class="btn btn-info btn-sm">View</a>
                                                <a href="media-edit.php?id=<?= $video['id']?>" class="btn btn-success btn-sm">Edit</a>
                                               
                                                <form action="load.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_media" value="<?=$video['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "<h5>No Records Found</h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include('includes/footer.php');
?>
