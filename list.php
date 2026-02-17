<?php 
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $success = "Item Posted Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>List Item</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f2f2f2;
    margin:0;
}

/* HEADER */
header{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    padding:20px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#f2f2f2;
    z-index:1000;
}

.logo{
    width:150px;
}

/* HAMBURGER */
.hamburger{
    width:28px;
    cursor:pointer;
    z-index:1100;
}

.hamburger div{
    height:4px;
    background:#0b3d70;
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
    z-index:2000;
    overflow-y:auto;
}

.sidebar.active{
    right:0;
}

/* OVERLAY */
.overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.5);
    opacity:0;
    visibility:hidden;
    transition:0.3s;
    z-index:1500;
}

.overlay.active{
    opacity:1;
    visibility:visible;
}

/* PROFILE HEADER */
.profile-header{
    background:url("image/menubg.png") no-repeat center center;
    background-size:cover;
    padding:25px 20px;
    color:white;
    position:relative;
}

.profile-header::after{
    content:"";
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.5);
}

.profile-content{
    position:relative;
    z-index:2;
}

.profile-content a{
    text-decoration:none;
    color:white;
}

.profile-content a:visited{
    color:white;
}

.profile-pic{
    width:70px;
    height:70px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:10px;
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

/* TITLE */
h1{
    text-align:center;
    color:#0b3d70;
    margin-top:110px;
    margin-bottom:20px;
}

/* SECTION TITLE */
.section-title{
    background:#0b3d70;
    color:white;
    padding:10px 15px;
    font-weight:bold;
    margin-top:20px;
}

/* FORM */
.container{
    padding:20px;
    max-width:600px;
    margin:0 auto 40px auto;
}

input{
    width:100%;
    padding:10px;
    border:none;
    border-bottom:2px solid #ccc;
    margin-bottom:20px;
    font-size:14px;
    background:transparent;
}

/* DRAG AREA */
.drag-area{
    border:2px dashed #999;
    border-radius:12px;
    padding:25px;
    text-align:center;
    margin-bottom:20px;
    background:#fafafa;
}

.drag-area img{
    width:60px;
    margin-bottom:10px;
}

.drag-area p{
    font-size:14px;
    color:#333;
}

.drag-area a{
    color:#0b3d70;
    font-weight:bold;
    text-decoration:underline;
}

/* ANSWERS */
.answer{
    background:#e6e6e6;
    padding:10px;
    margin-bottom:15px;
    border-radius:4px;
    color:green;
}

/* BUTTON */
button{
    width:100%;
    background:#0b3d70;
    color:white;
    padding:12px;
    border:none;
    border-radius:4px;
    font-weight:bold;
    cursor:pointer;
}

/* SUCCESS */
.success{
    color:green;
    text-align:center;
    margin-bottom:10px;
}
</style>
</head>

<body>

<header>
    <img src="image/logo.png" class="logo">
    <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
</header>

<div class="overlay" id="overlay" onclick="toggleMenu()"></div>

<div class="sidebar" id="sidebar">

    <div class="profile-header">
        <div class="profile-content">
            <a href="menu.php">
                <img src="image/user.png" class="profile-pic" alt="Profile">
                <div class="profile-name">Francine Panganiban</div>
                <div class="profile-email">fastdomingo@student.hau.edu.ph</div>
            </a>
        </div>
    </div>

    <a href="menu.php" class="menu-item"><img src="image/home.png"> Home</a>
    <a href="lost.php" class="menu-item"><img src="image/lost.png"> Lost</a>
    <a href="list.php" class="menu-item"><img src="image/list.png"> List</a>
    <a href="found.php" class="menu-item"><img src="image/found.png"> Found</a>
    <a href="profile.php" class="menu-item"><img src="image/profile.png"> Profile</a>
    <a href="contactus.php" class="menu-item"><img src="image/contact.png"> Contact Us</a>

</div>

<h1>List</h1>

<div class="container">

<div class="section-title">Public Information</div>

<?php if($success): ?>
<div class="success"><?php echo $success; ?></div>
<?php endif; ?>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="itemname" placeholder="Item Name" required>
<input type="text" name="category" placeholder="Category" required>
<input type="text" name="location" placeholder="Location Found" required>
<input type="date" name="datefound" required>

<p><strong>Upload Image (Optional)</strong></p>

<div class="drag-area">
    <img src="image/drag.png" alt="Drag Icon">
    <p><strong>Drag & drop images, videos, or any file!</strong></p>
    <p>or <a href="#">browse files</a> on your computer</p>
</div>

<div class="section-title">Hidden Verification</div>

<p>Question 1: What is the color of the wallet?</p>
<div class="answer">Answer: Black</div>

<p>Question 2: What brand is the wallet?</p>
<div class="answer">Answer: CLN</div>

<button type="submit">Post</button>

</form>

</div>

<script>
function toggleMenu(){
    document.getElementById("sidebar").classList.toggle("active");
    document.getElementById("overlay").classList.toggle("active");
}
</script>

</body>
</html>
