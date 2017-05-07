<?php
require_once '../core/init2.php';


$data = $user->iduser(session::get('username'));

$id= $data['id'];

if(isset($_POST['btn-upload']))
{

	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="profile/";

	// new file size in KB
	$new_size = $file_size/1024;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case

	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$user->avatar($final_file,$id);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='avatar.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='avatar.php?fail';
        </script>
		<?php
	}
}
?>
