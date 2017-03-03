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
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../palette.css">

    <!-- Latest compiled and minified JavaScript -->

    <style>
        body {
            /*            background: #2980b9;*/
            color: #C5CAE9 !important;
/*            font-family: 'Droid Sans', sans-serif;*/
            font-family: 'Lato', sans-serif;
        }
        
        .navbar-brand {
            color: #FFEB3B;
            font-family: 'Droid Sans', sans-serif;
            font-family: 'Bungee Inline', cursive;
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
            padding: 20px;
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

<body class="dark-primary-color" style="    overflow-y: scroll;">

    <nav class="navbar " style="    z-index: 3000;    background: #000;">
        <div class="container-fluid">
            <!--             Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="width:100%;">

                <span class="navbar-brand" href="#">Apptastic Coders</span>
                <span style="    float: right;    padding: 15px 15px;font-size: 20px;    height: 50px;padding-top: 10px;">
<!--                    <h3 style="color:#fff;">-->
                    Welcome, <span id="user_name">  </span>!
<!--                    </h3>-->
                    </span>
            </div>


        </div>

    </nav>

    <!--
    <div class="img_banner media-object row col-xs-12">

        </div>
-->

    <div class="col-md-12">
<!--
        <div class="col-md-1">
            <ul class="list-group row">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            
        </div>
-->
        <div class="col-md-8">

            <!--            <div class="jumbotron">-->
            

            <div class="col-md-12">
                <!--                <h4 class="text-primary-color">Your Stats:</h4>   -->
                <br>
                <div class="col-md-6">
                    <div class="panel accent-color  col-md-12 stat-card">
                        <div class="col-md-12 stat-title">Submit Count</div>
                        <br>

                        <div id="submit_counter" class="col-md-12 stat-value">0</div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel  accent-color   col-md-12 stat-card">
                        <div class="col-md-12 stat-title">Your Ranking</div>
                        <br>

                        <div class="col-md-12 stat-value">Coming Soon!</div>

                    </div>

                </div>
                
                <div class="col-md-6">
                    <div class="panel  accent-color   col-md-12 stat-card">
                        <div class="col-md-12 stat-title">
                            <button id="show_submit_btn" class="btn btn-default">Show Submissions</button>
                        </div>
                        

                    </div>

                </div>


            </div>








            <div>

            </div>

            <!--            </div>-->
        </div>
        <div class="col-md-4">
            <!--            All Submissions-->

            <div class="col-md-12">
                <div class="col-md-6 col-xs-6">
                    <a href="https://www.topcoder.com/" target="_blank" class="thumbnail" style="height:50px;">
                        <img src="https://wwwtc.wpengine.com/wp-content/themes/tc2-theme/appirio-50-50/i/desktop/logo.png" alt="..." style="height:40px;    padding: 10px;">
                    </a>
                </div>

                <div class="col-md-6 col-xs-6">
                    <a href="https://www.hackerearth.com" target="_blank" class="thumbnail" style="height:50px;">
                        <img src="https://hackerearth.global.ssl.fastly.net/static/hackerearth/images/logo/HE_logo.png" alt="..." style="height:40px;    padding: 10px;">
                    </a>
                </div>


                <div class="col-md-6 col-xs-6">
                    <a href="https://www.codechef.com" target="_blank" class="thumbnail" style="height:50px;">
                        <img src="https://www.codechef.com/sites/all/themes/abessive/logo.png" alt="..." style="height:40px;    padding: 5px;">
                    </a>
                </div>
                <div class="col-md-6 col-xs-6">
                    <a href="https://www.hackerrank.com/" target="_blank" class="thumbnail" style="height:50px;">
                        <img src="https://cdn.hrcdn.net/hackerrank/assets/brand/wordmark_sm-18235847eda14ef53e4035505831eeb7.png" alt="..." style="height:40px;    padding: 10px;">
                    </a>
                </div>




            </div>

            <div class="col-md-12">

                <!--                <input type="text" class="form-control" placeholder="Enter Problem Title">-->
                <!--                <br>-->
                <div class="col-md-12" style="padding: 20px;background: #3F51B5;">
                    <h4 style="color:#FFEB3B;">Add new Submission:</h4>
                    <input id="prob_url" type="text" class="form-control" placeholder="Enter Problem Url">
                    <br>
                    <input id="repo_url" type="text" class="form-control" placeholder="Enter Github repo link">
                    <br>
                    <!--                <input type="text" class="form-control" placeholder="Language">-->
                    <br>

                    <button id="submit_btn" class="btn accent-color col-md-4 col-md-offset-8" style="color:#303F9F;">
                        <h4>Submit</h4></button>


                </div>
            </div>
        </div>


    </div>

    <div class="col-md-12">
        <div id="submit_list" class="col-md-12" style="display:none;">
            <h4>Your Submissions:</h4>

            <div class="col-md-12" style="    background: #fff;
    color: black;">

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
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            //#user_name

            var get_submits_url = "/public/php/fetch_user_info.php?id=1";
            $.ajax(get_submits_url)
                .done(function (data) {
                    console.log(JSON.parse(data));
                    var json_val = JSON.parse(data);
                    var tmp_val = json_val["user_name"].charAt(0).toUpperCase() + json_val["user_name"].slice(1);
                    $("#user_name").html(tmp_val);

                });



            var get_submits_url = "/public/php/fetch_submits.php?id=1";
            $.ajax(get_submits_url)
                .done(function (data) {
                    console.log(data);
                    console.log(JSON.parse(data));
                    var json_val = JSON.parse(data);
                
                $("#submit_counter").html(json_val.length);

                    for (i in json_val) {
                        var tmp_obj = json_val[i];
                        var table_row = "<tr><td>" + tmp_obj["id"] + "</td><td>" + tmp_obj["problem_url"] + "</td><td>" + tmp_obj["github_url"] + "</td><td>" + tmp_obj["created_at"] + "</td></tr>"
                        $("#submit_table").append(table_row);

                    }



                });


            $("#show_submit_btn").on("click", function () {
                $("#submit_list").slideDown();
            });

            $("#submit_btn").on("click", function () {
                console.log("sub");
                var prob_url_val = $("#prob_url").val();
                var repo_url_val = $("#repo_url").val();
                var user_id = 1;
                var sub_data = {
                    "prob": prob_url_val,
                    "repo": repo_url_val
                };
                var get_submits_url = "/public/php/submit.php";


                $.ajax({
                    type: "POST",
                    url: get_submits_url,
                    data: sub_data,
                    success: function (msg) {
                        console.log(msg);
                    },
                    error: function (msg) {
                        console.log(msg.responseText);
                    },
                    dataType: "JSON"
                });


            });



        });
    </script>

</body>

</html>