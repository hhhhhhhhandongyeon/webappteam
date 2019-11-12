<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width-device-width", inital-scale="1">
        <title>seleab</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/common.css">
    </head>
    <body>
        <style type="text/css">
            .jumbotron{
                background-image: url('img/yh.jpeg');
                background-size: contain;
                text-shadow: black 0.2em 0.2em 0.2em;
                color : white;
            }
        </style>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapse" data-toggle="collapsed" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">SELAB</a>
                </div>
                <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">소개</a></li>
                        <li><a href="notice.php">NOTICE</a></li>
                        <li><a href="members.php">MEMBERS</a></li>
                        <li><a href="research.php">RESEARCH</a></li>
                        <li><a href="publication.php">PUBLICATION</a></li>
                        <li class="active"><a href="course.php">COURSE<span class="sr-only"></span></a></li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="내용을 입력하시오.">
                        </div>
                        <button type="submit" class="btn btn-default">검색</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                접속하기<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php">로그인</a></li>
                                <li><a href="register.php">회원가입</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1 style="text-align: left;; font-size: 50px; font-weight: bold; color: cornflowerblue">COURSE</h1><hr>
              <div class="row">
                  <div class="col-xs-12">
                      <div class="panel panel-primary">
                          <div class="panel-heading">
                              <h3 class="panel-title">
                                  &nbsp;&nbsp; Web Application Development
                              </h3>
                              </div>
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th>Lecture slide</th>
                                        <th>Labs</th>
                                    </tr>
                                    <tr>
                                        <td>The Internet & World Wide Web</td>
                                        <td>About Me (HTML) - Week 4</td>
                                    </tr>
                                    <tr>
                                        <td>Basic HTML</td>
                                        <td>CSS - Week 5</td>
                                    </tr>
                                    <tr>
                                        <td>CSS for Styling</td>
                                        <td>CSS Design & Layout - Week 6</td>
                                    </tr>
