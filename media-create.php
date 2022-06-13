<?php
session_start();    
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
                        <h4>Video Record Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>   
                    </div>
                    <div class="card-body">
                        <form action="load.php" method="POST">

                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Year</label>
                                <input type="text" name="year" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Season/Episodes</label>
                                <input type="text" name="season" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Details Link</label>
                                <input type="text" name="link" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="origin">Origin</label>
                                <select name="origin" class="form-control">
                                    <option value="">Select...</option>
                                    <option value="USA">USA</option>
                                    <option value="UK">UK</option>
                                    <option value="I">Italy</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="F">France</option>
                                    <option value="D">Germany</option>
                                    <option value="ESP">Spain</option>
                                    <option value="IND">India</option>
                                </select>
                            </div>
                            <div class="mb-3">
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
                                <label for="format">Media Format</label>
                                <select name="format" class="form-control">
                                    <option value="">Select...</option>
                                    <option value="DVD">DVD</option>
                                    <option value="PAL DVD">DVD PAL</option>
                                    <option value="Blu Ray">Blu Ray</option>
                                    <option value="Blu Ray Pal">Blu Ray PAL</option>
                                    <option value="Data">Data mp4/mkv</option>
                                </select>
                                <!--<label>Media Format</label>
                                <input type="text" name="format" class="form-control">-->
                            </div>
                            <div class="mb-3">
                                <label>Primary Location</label>
                                <input type="text" name="location1" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Secondary Location</label>
                                <input type="text" name="location2" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Cover</label>
                                <input type="text" name="cover" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tag1</label>
                                <input type="text" name="tag1" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tag2</label>
                                <input type="text" name="tag2" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tag3</label>
                                <input type="text" name="tag3" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tag4</label>
                                <input type="text" name="tag4" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tag5</label>
                                <input type="text" name="tag5" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tag6</label>
                                <input type="text" name="tag6" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tag7</label>
                                <input type="text" name="tag7" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tag8</label>
                                <input type="text" name="tag8" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_media" class="btn btn-primary">Save Media</button>
                            </div>

                        </form>
                    </div>    
                </div>    
            </div>
        </div>
    </div>

<?php
    include('includes/footer.php');
?>