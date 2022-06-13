<?php

session_start();
//Database Connection dbcon.php
require 'dbcon.php';

//Check if delete button was pressed from index.php
if(isset($_POST['delete_media'])){
    $video_id = mysqli_real_escape_string($con, $_POST['delete_media']);
    
    //setup the query
    $query = "DELETE from video WHERE id = '$video_id'";

    //perform the query
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Video Record Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Video Record NOT Deleted";
        header("Location: index.php");
        exit(0);
    }
}    

//Check if button update_media was pressed
if(isset($_POST['update_media'])){
    $video_id = mysqli_real_escape_string($con, $_POST['video_id']);

    //then get all the entered input fields
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $season = mysqli_real_escape_string($con, $_POST['season']);
    $link = mysqli_real_escape_string($con, $_POST['link']);
    $genre = mysqli_real_escape_string($con, $_POST['genre']);
    $format = mysqli_real_escape_string($con, $_POST['format']);
    $location1 = mysqli_real_escape_string($con, $_POST['location1']);
    $location2 = mysqli_real_escape_string($con, $_POST['location2']);
    $cover = mysqli_real_escape_string($con, $_POST['cover']);
    $tag1 = mysqli_real_escape_string($con, $_POST['tag1']);
    $tag2 = mysqli_real_escape_string($con, $_POST['tag2']);
    $tag3 = mysqli_real_escape_string($con, $_POST['tag3']);
    $tag4 = mysqli_real_escape_string($con, $_POST['tag4']);
    $tag5 = mysqli_real_escape_string($con, $_POST['tag5']);
    $tag6 = mysqli_real_escape_string($con, $_POST['tag6']);
    $tag7 = mysqli_real_escape_string($con, $_POST['tag7']);
    $tag8 = mysqli_real_escape_string($con, $_POST['tag8']);

    //setup the query
    $query = "UPDATE video SET title='$title', year='$year', season='$season', link='$link', genre='$genre', format='$format', 
              location1='$location1', location2='$location2', cover='$cover', tag1='$tag1', tag2='$tag2', tag3='$tag3',
              tag4='$tag4', tag5='$tag5', tag6='$tag6', tag7='$tag7', tag8='$tag8' WHERE id='$video_id'";

    //perform the query
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Video Record Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Video Record NOT Updated";
        header("Location: index.php");
        exit(0);
    }
}

//Check if button save_media was pressed
if(isset($_POST['save_media'])){
    //then get all the entered input fields
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $season = mysqli_real_escape_string($con, $_POST['season']);
    $link = mysqli_real_escape_string($con, $_POST['link']);
    $genre = mysqli_real_escape_string($con, $_POST['genre']);
    $format = mysqli_real_escape_string($con, $_POST['format']);
    $location1 = mysqli_real_escape_string($con, $_POST['location1']);
    $location2 = mysqli_real_escape_string($con, $_POST['location2']);
    $cover = mysqli_real_escape_string($con, $_POST['cover']);
    $tag1 = mysqli_real_escape_string($con, $_POST['tag1']);
    $tag2 = mysqli_real_escape_string($con, $_POST['tag2']);
    $tag3 = mysqli_real_escape_string($con, $_POST['tag3']);
    $tag4 = mysqli_real_escape_string($con, $_POST['tag4']);
    $tag5 = mysqli_real_escape_string($con, $_POST['tag5']);
    $tag6 = mysqli_real_escape_string($con, $_POST['tag6']);
    $tag7 = mysqli_real_escape_string($con, $_POST['tag7']);
    $tag8 = mysqli_real_escape_string($con, $_POST['tag8']);

    //setup the query
    $query = "INSERT INTO video (title, year, season, link, genre, format, location1, location2, cover, 
              tag1, tag2, tag3, tag4, tag5, tag6, tag7, tag8)
              VALUES ('$title', '$year', '$season', '$link', '$genre', '$format', '$location1', '$location2', 
              '$cover', '$tag1', '$tag2', '$tag3', '$tag4', '$tag5', '$tag6', '$tag7', '$tag8')";
    
    //perform the query
    $query_run = mysqli_query($con, $query);

    //if performed successfully go back to the media creation form
    if($query_run){
        $_SESSION['message'] = "Video Added Successfully";
        header("Location: media-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Video NOT Added";
        header("Location: media-create.php");
        exit(0);
    }

}
?>