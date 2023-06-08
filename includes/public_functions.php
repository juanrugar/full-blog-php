<?php // here are all our PHP functions for the public area.
// all pages using any of the functions in this file must have this file //included in the top section of the page

// returns all published posts
function getPublishedPosts() {

	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = mysqli_query($conn, $sql);

	//fetch all posts as an associative array
	$posts= mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

?>