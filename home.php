<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Page</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:url("image/menubg.png") no-repeat center center;
    background-size:cover;
    height:100vh;
    overflow:hidden;
    position:relative;
    color:white;
}

/* HEADER */
header{
    position:absolute;
    top:0;
    width:100%;
    padding:20px;
    display:flex;
    justify-content:flex-end;
    align-items:center;
    z-index:10;
}

/* HAMBURGER */
.hamburger{
    width:28px;
    cursor:pointer;
}

.hamburger div{
    height:4px;
    background:white;
    margin:5px 0;
    border-radius:2px;
}

/* SIDEBAR */
.sidebar{
    position:fixed;
    right:-100%;
    top:0;
    width:85%;
    height:100%;
    background:#f2f2f2;
    transition:0.3s ease;
    z-index:20;
    overflow-y:auto;
    padding:0; /* REMOVED GAP */
}

.sidebar.active{
    right:0;
}

/* OVERLAY */
.menu-overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.5);
    opacity:0;
    visibility:hidden;
    transition:0.3s;
    z-index:15;
}

.menu-overlay.active{
    opacity:1;
    visibility:visible;
}

/* PROFILE HEADER (FULL WIDTH, NO GAP) */
.profile-header{
    background:url("image/menubg.png") no-repeat center center;
    background-size:cover;
    padding:25px 20px;
    color:white;
    position:relative;
}

/* PROFILE CONTENT */
.profile-content{
    position:relative;
    z-index:2;
}

.profile-content a{
    all: unset;
    display:block;
    cursor:pointer;
}

.profile-pic{
    width:70px;
    height:70px;
    background:#ddd;
    border-radius:50%;
    margin-bottom:10px;
}

.profile-header::after{
    content:"";
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.5);
}

.profile-name{
    font-weight:bold;
    font-size:16px;
}

.profile-email{
    font-size:13px;
}

/* MENU ITEMS */
.menu-item{
    display:flex;
    align-items:center;
    padding:18px 20px;
    font-size:16px;
    color:#555;
    text-decoration:none;
    border-bottom:1px solid #ddd;
}

.menu-item img{
    width:25px;
    margin-right:15px;
}

.menu-item:hover{
    background:#e6e6e6;
}

/* LOGO SECTION */
.top-logo{
    text-align:center;
    padding-top:140px;
}

.top-logo img{
    width:90%;
    max-width:520px;
}

/* WHITE SECTION */
.bottom-section{
    background:white;
    margin-top:-40px;
    padding-top:40px;
    padding-bottom:80px;
    border-top-left-radius:40px;
    border-top-right-radius:40px;
}

.info-image{
    text-align:center;
    margin-bottom:20px;
}

.info-image img{
    width:100%;
    max-width:500px;
}

.bottom-text{
    padding:0 30px;
    color:#333;
    line-height:1.6;
    font-size:15px;
}
</style>
</head>

<body>

<header>
    <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
</header>

<div class="menu-overlay" id="menuOverlay" onclick="toggleMenu()"></div>

<div class="sidebar" id="sidebar">

    <div class="profile-header">
        <div class="profile-content">
            <a href="menu.php">
            <img src="image/user.png" class="profile-pic" alt="Profile Picture">
            <div class="profile-name">Francine Panganiban</div>
            <div class="profile-email">fastdomingo@student.hau.edu.ph</div>
        </div>
    </div>

    <a href="home.php" class="menu-item">
        <img src="image/home.png"> Home
    </a>

    <a href="lost.php" class="menu-item">
        <img src="image/lost.png"> Lost
    </a>

    <a href="list.php" class="menu-item">
        <img src="image/list.png"> List
    </a>

    <a href="found.php" class="menu-item">
        <img src="image/found.png"> Found
    </a>

    <a href="profile.php" class="menu-item">
        <img src="image/profile.png"> Profile
    </a>

</div>

<div class="top-logo">
    <img src="image/menulogo.png" alt="Menu Logo">
</div>

<div class="bottom-section">
    <div class="info-image">
        <img src="image/info.png" alt="Info Graphic">
    </div>

    <div class="bottom-text">
        FoundIt is a campus-exclusive lost and found web application developed for Holy Angel University. 
        It was created to provide a centralized and secure platform where students and staff can report lost items, 
        post found belongings, and reconnect with their rightful owners efficiently. 
        By requiring HAU email authentication, the system ensures that only legitimate members of the university 
        community can access and use the platform.
    </div>
</div>

<script>
function toggleMenu(){
    document.getElementById("sidebar").classList.toggle("active");
    document.getElementById("menuOverlay").classList.toggle("active");
}
</script>

</body>
</html>
