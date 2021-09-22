<?php
Include('templates/header.php');
//include connect.php page for database connection
Include('config/connect.php');
$tbl_name="forum_question"; // Table name 
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result = $mysqli->query($sql);
?>

	<body>
  
			<div class="container" style="margin-top:95px;">
      <h1 class="heading">Discussion Forum</h1>
				<div class="well well-lg" style="margin-top:100px;">
					<a href="create_topic.php"><b>Create New Discussion..</b> </a>					
				</div>
  				
				<table class="table table-hover table-responsive table-inverse">

					<thead>
            <h2 style="margin-top:50px;">List of all the discussions..</h2>
				      <tr>
				        <!--<th style="text-align:center;">#</th>-->
				        <th class="bg-info" style="text-align:center;"><b>Topic</b></th>
				        <th class="bg-info" style="text-align:center;"><b>Views</b></th>
				        <th class="bg-info" style="text-align:center;"><b>Replies</b></th>
				        <th class="bg-info" style="text-align:center;"><b>Date/Time</b></th>
				        <th class="bg-info" style="text-align:center;"><b>Delete</b></th>
				      </tr>
              
				    </thead>
            
				    <tbody>
					
				

		


<?php
// Start looping table row
while($rows=mysqli_fetch_array($result))
{
?>
<tr>
<!--<td style="text-align:center;"> /*<?php //echo $rows['id']; ?><!--</td>-->
<td class="bg-success" style="text-align:center;"><a href="view_topic.php?id= <?php echo $rows['id']; ?> "><?php echo $rows['topic']; ?></a><BR></td>
<td class="bg-warning" style="text-align:center;"><?php echo $rows['view']; ?></td>
<td class="bg-danger" style="text-align:center;"><?php echo $rows['reply']; ?></td>
<td class="bg-primary" style="text-align:center;"><?php echo $rows['datetime']; ?></td>
<td class="bg-secondary" style="text-align:center;"><a href="delete_topic.php?id= <?php echo $rows['id']?>">delete</a>
</td>
</tr>

<?php
// Exit looping and close connection
}
$mysqli->close();
?>
	</BR>
	</td>
	</tr>
	</tbody>


	</div>
  
	</table>
  <p style="float:right">You can click on the topic name to join the discussion.. </p>
	</div>

  <footer>
 
      <h6 >Designed with 💗 by Pranjali Agrawal<h6>
  
  </footer>

  
  </body>
  </head>
</html>

  
	


