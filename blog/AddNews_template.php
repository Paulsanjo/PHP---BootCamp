<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>Bloghe</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#section1">Home</a></li>
                <li><a href="#section2">#</a></li>
                <li><a href="#section3">#</a></li>
                <li><a href="#section3">#</a></li>
            </ul>
            <br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
            </div>
        </div>

        <div class="col-sm-9">
            <h4>
                <small>Add News</small>
            </h4>
            <hr>
            <div class="form-group">
                <label>Title:</label>
                <input type="text" class="form-control" id="subject">
                <br>
                <label>Text:</label>
                <textarea class="form-control" rows="6" id="content"></textarea>
                <br>
                <label for="sel1">Choose category:</label>
                <select class="form-control" id="sel1">
                    <option>Politics</option>
                    <option>Sport</option>
                    <option>Animals</option>
                </select>
                <br>
                <button type="button" class="btn" id="save-news">Submit</button>
            </div>


        </div>
    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>

