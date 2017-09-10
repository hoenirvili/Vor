<!DOCTYPE html>
<html>
<?php require_once('base/header.php');?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 right-column--dashboard">
                <nav class="navbar navbar-default top-bar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand tob-bar__brand" href="#">Dashboard</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    Hoenir
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="settings.html">
                                            <i class="fa fa-sliders" aria-hidden="true"></i>Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="settings.html">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <button class="btn btn-primary navbar-btn pull-right">Create Post</button>
                    </div>
                </nav>
            </div> <!--col-md-12-->
        </div> <!--row-->
        <div class="row">
            <div class="container">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <form class="form-horizontal">
                        <h1> Create article</h1>
                        <div class="form-group">
                            <h4>Title</h4>
                            <label for="title" class="sr-only control-label">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Article title">
                        </div>

                        <div class="form-group">
                            <h4>Tags</h4>
                            <label for="tags" class="sr-only control-label">Tags</label>
                            <input type="text" class="form-control" id="Tags" placeholder="tags">
                        </div>

                        <div class="form-group">
                            <h4>Content</h4>
                            <label for="tags" class="sr-only control-label">Content</label>
                            <textarea class="form-control" rows="20"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once('base/footer.php'); ?>
</body>
</html>