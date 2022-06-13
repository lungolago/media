<?php 
require 'dbcon.php';
?>

<?php
    include('includes/header.php');
?>
    
    <div class="container mt-5 mb-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Video Record View Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>   
                    </div>
                    <div class="card-body">

                        <?php
                        //check if the id is present then retrieve the record based on current id
                        if(isset($_GET['id'])){
                            $video_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * from video where id='$video_id'";

                            //perform the query
                           $query_run = mysqli_query($con, $query);

                           //Check to see if get any data back
                           if(mysqli_num_rows($query_run) > 0) {
                              $video = mysqli_fetch_array($query_run);
                              //print_r($video);
                              ?>
                              
                            <div class="mb-3">
                                <label>Title</label>
                                <p class="form-control">
                                    <?= $video['title'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Year</label>
                                <p class="form-control">
                                    <?= $video['year'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Season/Episodes</label>
                                <p class="form-control">
                                    <?= $video['season'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Details Link</label>
                                <p class="form-control">
                                    <?= $video['link'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Genre</label>
                                <p class="form-control">
                                    <?= $video['genre'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Media Format</label>
                                <p class="form-control">
                                    <?= $video['format'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Primary Location</label>
                                <p class="form-control">
                                    <?= $video['location1'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Secondary Location</label>
                                <p class="form-control">
                                    <?= $video['location2'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Cover</label>
                                <p class="form-control">
                                    <?= $video['cover'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Tag1</label>
                                <p class="form-control">
                                    <?= $video['tag1'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Tag2</label>
                                <p class="form-control">
                                    <?= $video['tag2'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Tag3</label>
                                <p class="form-control">
                                    <?= $video['tag3'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Tag4</label>
                                <p class="form-control">
                                    <?= $video['tag4'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Tag5</label>
                                <p class="form-control">
                                    <?= $video['tag5'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Tag6</label>
                                <p class="form-control">
                                    <?= $video['tag6'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Tag7</label>
                                <p class="form-control">
                                    <?= $video['tag7'];?>    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Tag8</label>
                                <p class="form-control">
                                    <?= $video['tag8'];?>    
                                </p>
                            </div>

                              <?php
                           } else {
                              echo "<h4>Record Not Found</h4>";
                           }
                        }
                        ?>

                    </div>    
                </div>    
            </div>
        </div>
    </div>


<?php
    include ('includes/footer.php');
?>