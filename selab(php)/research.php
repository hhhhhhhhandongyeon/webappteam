<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width-device-width", inital-scale="1">
        <title>seleab</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/research.css">
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
                        <li><a href="index.php" >소개</a></li>
                        <li><a href="notice.php">NOTICE</a></li>
                        <li><a href="members.php">MEMBERS</a></li>
                        <li class="active"><a href="research.php">RESEARCH<span class="sr-only"></span></a></li>
                        <li><a href="publication.php">PUBLICATION</a></li>
                        <li><a href="course.php">COURSE</a></li>
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
        </nav>
        <h1 style="text-align: left;; font-size: 50px; font-weight: bold; color: cornflowerblue">RESEARCH</h1><hr>
        <div id="re1">
        <img src="img/re1.png" id="re_img" style="width: 90px; height: 90px;" />
        <h4><a data-target="#modal" data-toggle="modal">Semi-structured Data</a></h4>
            <div class ="row">
                <div class="modal" id="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                    Semi-structured Data
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align:center;">
                                <ul>
                                    <li>XML and XML DB, Visualization of XML-Schema</li> 
                                    <li>Ontology and RDF Store</li>
                                    <li>Semistructured Data Integration and Migration</li> 
                                    <li>Optimization of X-Query</li>
                                    <li>Consistency Verification for Semistructured Data Manipulation</li>
                                    <li>Domain Specific Extension to XML & Data Translation from RDBMS to XML DBMS</li>
                                </ul>
                            <br><br>
                            <img src="img/re1.png" id="imagepreview" style="width: 256px"; height="256px";>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="re2">
        <img src="img/re2.png" id="re_img" style="width: 90px; height: 90px;" />
        <h4><a data-target="#modal-2" data-toggle="modal">Requirement Engineering</a></h4>
        <div class ="row">
                <div class="modal" id="modal-2" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                    Requirement Engineering
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                <ul>
                                    <li>Requirement Analysis, Validation and Conflict Detection</li> 
                                    <li>Non-Functional Requirements Analysis and Prediction</li>
                                    <li>Product Line and Software Product Line</li> 
                                    <li>Requirement Modeling with Extended Mind Map</li>
                                </ul>
                            <br><br>
                            <img src="img/re2.png" id="imagepreview" style="width: 256px"; height="256px";>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="re3">
        <img src="img/re3.png" id="re_img" style="width: 90px; height: 90px;" />
        <h4><a data-target="#modal-3" data-toggle="modal">Web & Web security</a></h4>
        <div class ="row">
                <div class="modal" id="modal-3" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                    Web & Web security
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                <ul>
                                    <li>Semantic web</li> 
                                    <li>Effective Access Control for Web Data</li>
                                    <li>Vulnerability Analysis and Detection for HTML5</li> 
                                    <li>JavaScript and Hybrid Application</li>
                                </ul>
                            <br><br>
                            <img src="img/re3.png" id="imagepreview" style="width: 256px"; height="256px";>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>

        <div id="re4">
        <img src="img/re4.png" id="re_img" style="width: 90px; height: 90px;" />
        <h4><a data-target="#modal-4" data-toggle="modal">Real-Time Software Engineering</a></h4>
        <div class ="row">
                <div class="modal" id="modal-4" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                    Real-Time Software Engineering
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                <ul>
                                    <li>Real-Time Software and Process Modeling</li> 
                                    <li>Real-Time Software Specification and Verification</li>
                                    <li>Real-Time Software Integration and Migration Control</li> 
                    
                                </ul>
                            <br><br>
                            <img src="img/re4.png" id="imagepreview" style="width: 256px"; height="256px";>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>

        <div id="re5">
        <img src="img/re5.png" id="re_img" style="width: 90px; height: 90px;" />
        <h4><a data-target="#modal-5" data-toggle="modal">Formal Engineering Methods</a></h4>
        <div class ="row">
                <div class="modal" id="modal-5" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                    Formal Engineering Methods
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                <ul>
                                    <li>Formal Specification, Validation, and Verification</li> 
                                    <li>Model checking, Theorem Proving</li>
                                    <li>Ontology Reasoning, Constraint Solving</li> 
                    
                                </ul>
                            <br><br>
                            <img src="img/re5.png" id="imagepreview" style="width: 256px"; height="256px";>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>