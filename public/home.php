<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algo Challenge </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="palette.css">

    <!-- Latest compiled and minified JavaScript -->

    <style>
        body {
            /*            background: #2980b9;*/
            color: #C5CAE9 !important;
            font-family: 'Droid Sans', sans-serif;
        }
        
        .navbar-brand {
            color: #FFEB3B;
            font-family: 'Droid Sans', sans-serif;
            font-size: 30px;
        }
        
        .img_banner {
            /*            background-image: url(banner.jpg);*/
            background-image: url(signup.png);
            background-repeat: no-repeat;
            background-size: cover;
            /*
            position: fixed;
            top: 50px;
            bottom: 0px;
            left: 0px;
            right: 0px;
*/
        }
        
        .stat-card {
            padding: 30px;
            color: #303F9F;
        }
        
        .stat-title {
            font-size: 24px;
            text-align: center;
        }
        
        .stat-value {
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>

<body class="dark-primary-color">

    <nav class="navbar dark-primary-color" style="    z-index: 3000;">
        <div class="container-fluid">
            <!--             Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
         
                <span class="navbar-brand" href="#">Apptastic Coders</span>
            </div>


        </div>

    </nav>

    <!--
    <div class="img_banner media-object row col-xs-12">

        </div>
-->

    <div class="col-md-12">

        <div class="col-md-8">

            <!--            <div class="jumbotron">-->
            <h3 style="color:#fff;">Welcome, <span id="user_name">  </span>!</h3>

            <div class="col-md-12">
                <!--                <h4 class="text-primary-color">Your Stats:</h4>   -->
                <br>
                <div class="col-md-6">
                    <div class="panel accent-color  col-md-12 stat-card">
                        <div class="col-md-12 stat-title">Submit Count</div>
                        <br>
                        
                        <div class="col-md-12 stat-value">0</div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel  accent-color   col-md-12 stat-card">
                        <div class="col-md-12 stat-title">Your Ranking</div>
                        <br>
                      
                        <div class="col-md-12 stat-value">Solve 5 problems!</div>

                    </div>

                </div>
            </div>


            <div class="col-md-12">
                <h4>Your Submissions:</h4>

                <div class="col-md-12">

                    <table id="submit_table" class="table">
                        <tr>
                            <th>No.</th>
                            <th>Problem Url</th>
                            <th>Github Url</th>
                            <th>Created Date:</th>
                        </tr>
                        
                       
                    </table>

                </div>

            </div>





            <div>

            </div>

            <!--            </div>-->
        </div>
        <div class="col-md-4">
            <!--            All Submissions-->

            <div class="col-md-12">

                <!--                <input type="text" class="form-control" placeholder="Enter Problem Title">-->
                <!--                <br>-->
                <div class="col-md-12" style="    padding: 20px;
    background: #3F51B5;">
                    <h4 style="color:#FFEB3B;">Add new Submission:</h4>
                    <input type="text" class="form-control" placeholder="Enter Problem Url">
                    <br>
                    <input type="text" class="form-control" placeholder="Enter Github repo link">
                    <br>
                    <!--                <input type="text" class="form-control" placeholder="Language">-->
                    <br>

                    <button class="btn accent-color col-md-4 col-md-offset-8" style="color:#303F9F;">
                        <h4>Submit</h4></button>


                </div>
            </div>
        </div>


    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            
            //#user_name
            
            var get_submits_url = "/public/fetch_user_info.php?id=1";
              $.ajax(get_submits_url )
                  .done(function(data) {
                        console.log(JSON.parse(data));
                      var json_val = JSON.parse(data);
                      var tmp_val = json_val["user_name"].charAt(0).toUpperCase() +json_val["user_name"].slice(1);
                      $("#user_name").html(tmp_val);

                  });
            
            
            
            var get_submits_url = "/public/fetch_submits.php?id=1";
              $.ajax(get_submits_url )
                  .done(function(data) {
                    console.log(JSON.parse(data));
                    var json_val = JSON.parse(data);
                    
                  var table_row = "<tr><td>"+json_val["id"]+"</td><td>"+json_val["problem_url"]+"</td><td>"+json_val["github_url"]+"</td><td>"+json_val["created_at"]+"</td></tr>"
                  $("#submit_table").append(table_row);
                  
                    

                  });



        });
    </script>

</body>

</html>