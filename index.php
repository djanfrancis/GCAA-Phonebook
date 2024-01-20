<?php include('partials/_head.php') ?> 
<section class="Getstarted mt-5">
  <div class="section pb0 card-body text-center">
    <img src="assets/img/app.png" height="100" alt="">
    <h2 class="text-center text-uppercase">Phone directory</h2>
  </div>
  <p class="text-center text-muted mb-4">Kindly search below</p>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"></div>
      <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 mx-auto">
        <div class="input-group">
          <input type="text" class="form-control" autocomplete="off" style="height: 50px;" id="search" placeholder="Search by name, job title, floor, or extension">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </div>
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="card mt-6 d-none" id="results">
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>JOBTITLE</th>
                  <th>EXTENSION</th>
                  <th>NAMES</th>
                  <th>FLOOR</th>
                </tr>
              </thead>
              <tbody id="output"></tbody>
            </table>
          </div>
          <div class="col-sm-3"></div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          $("#search").on("input", function() {
            if ($("#search").val().length >= 3) {
              $.ajax({
                type: 'POST',
                url: 'livesearch.php',
                data: {
                  name: $("#search").val(),
                },
                success: function(data) {
                  $("#output").html(data);
                  $("#results").removeClass('d-none');
                }
              });
            } else {
              $("#results").addClass('d-none');
            }
          });
        });
      </script> <?php include('partials/_footer.php')

                ?>.