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
        <script src="assets/main.js"></script>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-3 sidenav">
                    <h4>Bloghe</h4>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#section1">Home</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Animals</a></li>
                    </ul><br>
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
                    <h4><small>RECENT POSTS</small></h4>
                    <hr>
                    <?php foreach ($result as $news): ?>
                            <h2><?= $news['subject']; ?></h2>
                            <h5><span class="glyphicon glyphicon-time"></span> <?= $news['date']; ?></h5>
                        <div>
                            <p><?= $news['content']; ?></p>
                        </div>
                        <hr>
                    <?php endforeach; ?> 
                </div>
            </div>
        </div>

        <footer class="container-fluid">
            <p>Footer Text</p>
        </footer>

    </body>
</html>
<!--    
    Subject: <br>
    <input id="news-subject"/><br>
    
    Text: <br>
    <textarea id="news-content"></textarea><br>
    
<button id="save-news">Test button</button>
<br><br>

</body>
</html>-->

