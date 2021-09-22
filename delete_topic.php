<?php
	
	include('config/connect.php');
	
	if(isset($_POST['delete'])) {

		$id_to_delete = mysqli_real_escape_string($mysqli, $_POST['id_to_delete']);

		$sql = "DELETE FROM forum_question WHERE id = $id_to_delete";

		if(mysqli_query($mysqli, $sql)) {
			// success
			header('Location: index.php');
		}
		else {
			// error
			echo "query error: " . mysqli_error($mysqli);
		}
	}

	if(isset($_POST['delete'])) {

		$id_to_delete = mysqli_real_escape_string($mysqli, $_POST['id_to_delete']);

		$sql = "DELETE FROM forum_answer WHERE question_id = $id_to_delete";

		if(mysqli_query($mysqli, $sql)) {
			// success
			header('Location: index.php');
		}
		else {
			// error
			echo "query error: " . mysqli_error($mysqli);
		}
	}

	if(isset($_GET['id'])) {

		$id = mysqli_real_escape_string($mysqli, $_GET['id']);

		// query to select a pizza
		$sql = "SELECT * FROM forum_question WHERE id = $id";

		// get the query result
		$result = mysqli_query($mysqli, $sql);

		//fetch the result
		$question = mysqli_fetch_array($result);
		mysqli_free_result($result);
		mysqli_close($mysqli);

	}
?>


<!DOCTYPE html>
<html>

	<?php 
		include('templates/header.php')
	?>

	<h2 > Details </h2><br>
	<div class="container card">
		<?php if($question): ?>
			<div style="padding-top:20px">
			<img src="images/talk-point.jpg" />
		</div>
			<div style="padding-top:20px">
			<h4>
				title: 
				<?php echo htmlspecialchars($question['topic']); ?>
			</h4>
			
			<p>
				Created by:
				<?php echo htmlspecialchars($question['name']);
				echo '<br>';
				echo htmlspecialchars($question['email']); ?>
			</p>

			<p>
				Time:
				<?php echo date($question['datetime']); ?>
			</p>
			
			<p>
				Topic Details: 
				<?php echo htmlspecialchars($question['detail']); ?>
			</p>

			<p>
				Views: 
				<?php echo htmlspecialchars($question['view']); ?>
			</p>

			<p>
				Replies: 
				<?php echo htmlspecialchars($question['reply']);
				echo '<br>'; ?>
			</p>

			<!-- to delete a pizza -->
			<form action="delete_topic.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $question['id'] ?>">
				<input type="submit" name="delete" value="Delete" class="btn-danger brand z-depth-0">
			</form>

		<?php else: ?>
			<h5>No such Discussion exist!!</h5>

		<?php endif; ?>
		</div>
	</div>
<br>
<br><br>
	<?php 
		include('templates/footer.php')
	?>

</html>



