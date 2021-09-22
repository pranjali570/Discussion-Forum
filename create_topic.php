

 <body>

 <?php
    Include('templates/header.php');
 ?>
   <div class="container" style="margin-top:100px;">

   <h2 style="text-align:center;font-style:bold">Discussion Forum</h2>

      <form action="add_topic.php" method="POST">

          <div class="form-group">
            <label for="topic">Topic:</label>
            <input type="text" class="form-control" id="topic" name="topic">
          </div>

          <div class="form-group">
            <label for="comment">Details:</label>
            <textarea class="form-control" rows="5" id="detail" name="detail"></textarea>
          </div>

          <div class="form-group col-sm-6 col-lg-6 col-xs-12 col-md-6" >
            <label for="username">Name:</label>
            <input type="text" class="form-control" id="username" name="name">
          </div>

          <div class="form-group col-sm-6 col-lg-6 col-xs-12 col-md-6">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>          

          <div class="col-xs-12 col-sm-6 col-md-6">
              <input type="submit" name="submit_post" value="Post topic" class="btn btn-lg btn-success btn-block"><hr>
          </div>
        
      </form>
     
   </div>

  


 </body>
