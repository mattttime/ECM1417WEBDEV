<?php
session_start();
$_SESSION['login']='';
?>
<!DOCTYPE html>
<html>
<head>
<?php
    if($_SESSION['login']==''){
        '<script type= "text/javascript">
        var div = document.getElementById("login");
        div.style.display="block";
        </script>';
    } else {
        '<script type= "text/javascript">
        var div = document.getElementById("login");
        div.style.display="none";
        </script>';
    }
?>
<title>Home</title>
<style>
    #navbar{
        font-family:Arial;
        font-weight:bold;
        font-size:12px;
		font-color:black;
        background-color:blue;
        list-style-type:none;
        margin:0;
        padding:0;
        padding-top:25px;
    }
	#navbar a{
		font-family:Arial;
        font-weight:bold;
        font-size:12px;
		color:black;
		text-decoration: none;
	}
    .left{
        align:left;
    }
    .right{
        align:right;
		float:right;
    }
	.center{
		vertical-align:middle;
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 95%;
	}
    #navbar a:hover{
        background-color:green;
    }
	main{
		background-color:#45433f;
	}
</style>
<script>

</script>
</head>
<body>

<div id="navbar">
    <a name="home" class="left" href="index.php" >Home</a>
    <a name="tetris" class="right" href="tetris.php" >Play Tetris</a>
    <a name="leaderboard" class="right" style="text-align:center;" href="leaderboard.php">Leaderboard</a>
</div>
<div id="main">
    <img src="tetris.png" class="center" >
    <div id="login">
        <form id="loginForm">
            <label for="username">Enter Username</label><br>
            <input type="text" name="username"><br>
            <label for="password">Enter Password</label><br>
            <input type="password" name="password"><br>
            <input type="submit" name="Submit"><br>
        </form>
    </div>
    <div id="isLoggedIn">
        <button id="button" href="tetris.php">Click here to play</button>
    </div>
</div>
</body>
</html>