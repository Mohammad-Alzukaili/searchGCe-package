<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <style>

        body {
            background: #FFFFFF;
            font: 12px Lucida sans, Arial, Helvetica, sans-serif;
            color: #333;
            text-align: center;
        }

        a {
            color: #2A679F;
        }

        /*========*/

        .form-wrapper {
            background-color: #f6f6f6;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f6f6f6), to(#eae8e8));
            background-image: -webkit-linear-gradient(top, #f6f6f6, #eae8e8);
            background-image: -moz-linear-gradient(top, #f6f6f6, #eae8e8);
            background-image: -ms-linear-gradient(top, #f6f6f6, #eae8e8);
            background-image: -o-linear-gradient(top, #f6f6f6, #eae8e8);
            background-image: linear-gradient(top, #f6f6f6, #eae8e8);
            border-color: #dedede #bababa #aaa #bababa;
            border-style: solid;
            border-width: 1px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0 3px 3px rgba(255, 255, 255, .1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
            -moz-box-shadow: 0 3px 3px rgba(255, 255, 255, .1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
            box-shadow: 0 3px 3px rgba(255, 255, 255, .1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #444;
            margin: 20px auto;
            overflow: hidden;
            padding: 8px;
            width: 450px;
        }

        .form-wrapper #search, #name, #email, #description {
            border: 1px solid #CCC;
            -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
            -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
            box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            color: #999;
            float: left;
            font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
            height: 20px;
            padding: 10px;
            width: 320px;
        }

        .form-wrapper #search:focus, #name:focus, #email:focus, #description:focus {
            border-color: #aaa;
            -webkit-box-shadow: 0 1px 1px #bbb inset;
            -moz-box-shadow: 0 1px 1px #bbb inset;
            box-shadow: 0 1px 1px #bbb inset;
            outline: 0;
        }

        .form-wrapper #search:-moz-placeholder,
        .form-wrapper #search:-ms-input-placeholder,
        .form-wrapper #search::-webkit-input-placeholder {
            color: #999;
            font-weight: normal;
        }

        .form-wrapper #submit {
            background-color: #0483a0;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#31b2c3), to(#0483a0));
            background-image: -webkit-linear-gradient(top, #31b2c3, #0483a0);
            background-image: -moz-linear-gradient(top, #31b2c3, #0483a0);
            background-image: -ms-linear-gradient(top, #31b2c3, #0483a0);
            background-image: -o-linear-gradient(top, #31b2c3, #0483a0);
            background-image: linear-gradient(top, #31b2c3, #0483a0);
            border: 1px solid #00748f;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
            -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #FFF;
            color: #fafafa;
            cursor: pointer;
            height: 42px;
            float: right;
            font: 15px Arial, Helvetica;
            padding: 0;
            text-transform: uppercase;
            text-shadow: 0 1px 0 rgba(0, 0, 0, .3);
            width: 100px;
        }
        .form-wrapper #submit:hover,
        .form-wrapper #submit:focus {
            background-color: #31b2c3;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
            background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
            background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
            background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
            background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
            background-image: linear-gradient(top, #0483a0, #31b2c3);
        }
        .form-wrapper #submit:active {
            -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
            -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
            outline: 0;
        }
        .form-wrapper #submit::-moz-focus-inner {
            border: 0;
        }
    </style>
</head>
<body>
<h3>Search Page</h3>
<a class="btn btn-success" href="/show">go to saved pages</a>
<div class="form-wrapper">
    <input type="text" id="search" placeholder="Search for..." required>
    <input class="btn btn-primary" type="submit" value="Search" id="searchb">
</div>
<div class="col-sm-12" id="content"></div>

<script>
    $(document).ready(function () {
        $("#searchb").on('click', function () {
            text = $("#search").val();
            getData(text);
        });

    });
    function getData(search) {
          $.ajax({
            type: "GET",
            url: '/get_result/'+search+'',
            dataType: "html",
            success: function (data) {
                // Call this function on success
                showData(data);
                return data;
            },
            error: function () {
                alert('Error occured');
            }
        });

    }

    function showData(data) {
        //table = " <form method='post' action='/save'><table class='table table-bordered table-primary table-hover'><tr>" +"<th>title</th><th>link</th><th>description</th><th>comment</th><th>check</th></tr>";
        table = " <form method='post' action='/save'><table class='table table-bordered  table-hover text-left'>" + "<tr>" + "<th></th><th>Comment</th><th>Check</th></tr>";
        array = JSON.parse(data);

        for (var i = 0; i < array['items'].length; i++) {
            var item = array['items'][i];
            table += "<tr><td>" + "<div class=''><a href='" + item['link'] + "' ><h4>" + item['title'] + "</h4></a>" + "";
            table += "" + "<p>" + item['snippet'] + "</p>" + "</div></td>";
            table += "<td>" + "<textarea  rows=\"4\" cols=\"50\"></textarea>" + "</td>";
            table += "<td><input class='form-control' type='checkbox'  id='choose" + i + "' value=\"" + item['title'] + "|," + item['link'] + "|," + item['snippet'] + "\" /></td>";
            table += " </tr>";
        }
        table += "<tr><td></td><td></td><td><input class='btn btn-success btn-lg' type='submit' name='submit' value='save'></td><td></td></tr>"
        table += " <table></form>";
        document.getElementById("content").innerHTML = table;

        $('input:checkbox').change(
            function () {
                if ($(this).is(':checked')) {
                    $(this).attr('name', 'choose[]');
                    $(this).parent().siblings().children("textarea").attr('name', "comment[]");
                } else {
                    $(this).removeAttr('name');
                    $(this).parent().siblings().children("textarea").removeAttr('name');
                }
            });
    }

</script>

</body>
</html>