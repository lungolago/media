<?php
session_start();    
require 'dbcon.php';
?>

<?php
    include('includes/header.php');
?>
    
    <div class="container mt-5 mb-5">

        <?php include('message.php');  ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Video Record Edit
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
                              <form action="load.php" method="POST">
                                <input type="hidden" name="video_id" value="<?= $video_id?>">

                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name="title" value="<?= $video['title'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Year</label>
                                    <input type="text" name="year" value="<?= $video['year'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Season/Episodes</label>
                                    <input type="text" name="season" value="<?= $video['season'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Details Link</label>
                                    <input type="text" name="link" value="<?= $video['link'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Genre</label>
                                    <input type="text" name="genre" value="<?= $video['genre'];?>" class="form-control">
                                    <label for="genre">Genre</label>
                                <select name="genre" class="form-control">
                                    <option value="">Select...</option>
                                    <option value="Drama Film">Film Drama</option>
                                    <option value="Sci-Fi Film">Film Sci-Fi</option>
                                    <option value="Horror Film">Film Horror</option>
                                    <option value="Comedy Film">Film Comedy</option>
                                    <option value="Romance Film">Film Romance</option>
                                    <option value="Action Film">Film Action</option>
                                    <option value="Western Film">Film Western</option>
                                    <option value="Thriller Film">Film Thriller/Suspense</option>
                                    <option value="Adventure Film">Film Adventure</option>
                                    <option value="Musical Film">Film Musical/Dance</option>
                                    <option value="Animation Film">Film Animation</option>
                                    <option value="Epic Film">Film Historical/War/Epic</option>
                                    <option value="Biopic Film">Film Biopic</option>
                                    <option value="Live Music">Music Live</option>
                                    <option value="Music Doc">Music Documentary</option>
                                    <option value="Music Video">Music Videography</option>
                                    <option value="MMA">Sports MMA</option>
                                    <option value="Tennis">Sports Tennis</option>
                                    <option value="Soccer">Sports Soccer</option>
                                    <option value="Doc">Documentary</option>
                                    <option value="Health and Fitness">Health and Fitness</option>
                                    <option value="Stand-Up Comedy">Stand-Up Comedy</option>
                                    <option value="TV Series">TV Series</option>
                                    <option value="Reality TV">TV Series/Reality TV</option>
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label>Media Format</label>
                                    <input type="text" name="format" value="<?= $video['format'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Primary Location</label>
                                    <input type="text" name="location1" value="<?= $video['location1'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Secondary Location</label>
                                    <input type="text" name="location2" value="<?= $video['location2'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Cover</label>
                                    <input type="text" name="cover" value="<?= $video['cover'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tag1</label>
                                    <input type="text" name="tag1" value="<?= $video['tag1'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tag2</label>
                                    <input type="text" name="tag2" value="<?= $video['tag2'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tag3</label>
                                    <input type="text" name="tag3" value="<?= $video['tag3'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tag4</label>
                                    <input type="text" name="tag4" value="<?= $video['tag4'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tag5</label>
                                    <input type="text" name="tag5" value="<?= $video['tag5'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tag6</label>
                                    <input type="text" name="tag6" value="<?= $video['tag6'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tag7</label>
                                    <input type="text" name="tag7" value="<?= $video['tag7'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tag8</label>
                                    <input type="text" name="tag8" value="<?= $video['tag8'];?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="update_media" class="btn btn-primary">Update Media</button>
                                </div>

                              </form>
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
    include('includes/footer.php');
?>