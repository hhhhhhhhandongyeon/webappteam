<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width-device-width", inital-scale="1">
        <title>seleab</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/publication.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript">
        //카테고리 버튼 컨트롤러
        var bDisplay = true;
        function doDisplay(category){
            var con = document.getElementById(category);
            con.style.display = "block";//해당 id를 가진 div 보이기
            var categories = ["all", "inter-conf", "inter-jour", "dom-conf", "dom-jour"];
            for (let i = 0; i < categories.length; i++) {//나머지 모든 div의 내용 숨기기
                if (categories[i]===category) {
                    continue;
                }
                else{
                    con = document.getElementById(categories[i]);
                    con.style.display = "none";
                }
            }
        }
        // 출처: https://mainia.tistory.com/2710 [녹두장군 - 상상을 현실로]
        </script>
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
                        <li><a href="research.php">RESEARCH<span class="sr-only"></span></a></li>
                        <li class="active"><a href="publication.php">PUBLICATION</a></li>
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
            </div>
        </nav>
        <h1 style="text-align: left;; font-size: 50px; font-weight: bold; color: cornflowerblue">PUBLICATION</h1><hr>
        <div class="category" style="float:left; padding-right: 20pt; background-color: antiquewhite;">
            <br>
            <!-- 각 버튼을 누르면 해당 버튼이 표시할 div의 id과 head태그에 정의해 놓은 doDisplay를 이용하여 89-105번 줄 내 display의 스타일을 임의 조정한다.  -->
            <a href='javascript:doDisplay("all");'><button class="buttonpub" style="vertical-align:middle"><span>All</span></button><br></a>
            <a href='javascript:doDisplay("inter-conf");'><button class="buttonpub" style="vertical-align:middle"><span>International Conference</span></button><br></a>
            <a href='javascript:doDisplay("inter-jour");'><button class="buttonpub" style="vertical-align:middle"><span>International Journal</span></button><br></a>
            <a href='javascript:doDisplay("dom-conf");'><button class="buttonpub" style="vertical-align:middle"><span>Domestic Conference</span></button><br></a>
            <a href='javascript:doDisplay("dom-jour");'><button class="buttonpub" style="vertical-align:middle"><span>Domestic Journal</span></button></a>
        </div>
        <div class="article" style="padding-left: 40pt; background-color:skyblue;">
            <div id="all" style="display: block">
                <h2>All</h2>
            </div>
            <div id="inter-conf" style="display: none">
                <h2>International Conference</h2>
            </div>
            <div id="inter-jour" style="display: none">
                <h2>International Journal</h2>
            </div>
            <div id="dom-conf" style="display: none">
                <h2>Domestic Conference</h2>
            </div>
            <div id="dom-jour" style="display: none">
                <h2>Domestic Journal</h2>
            </div>
        </div>
            

    </body>
</html>