<?php
header('Content-type: text/css; charset: UTF-8');
?>

body, textarea{
	font-family: Arial, Helvetica, sans-serif;
	line-height: 1.5em;
	background-color: #ededed;
}


.container{
	width: 70%;
	margin: auto;
	overflow: hidden;
	margin-top: 5rem;

	padding-bottom: 2.5rem;
}

.content-wrap{
	position: relative;
}

/* Changes to header/navbar */
header{
	position: fixed; /* Keep navbar fixed */
	width: 100%;
	top: 0;

	background: #353535;
	color: #fff;
	padding-top: 1.875rem;
	min-height: 3.8rem;
	border-bottom: #0888a8 .3rem solid;
}

header nav a{
	color: #fff;
	text-transform: uppercase;
	font-size: 1rem;
}

header a:hover{
	color: #0888a8;
}
header ul{
	text-align: center;
}

header li{
	float: center;
	display: inline;
	padding:0 2.25rem 0 2.25rem;
}

header nav{
	margin-top: 0.8rem;
}

header .current a{
	font-weight: bold;
	color: #0888A8;
}

header a:active{
	color: red;
}
/* Changes to home */
#home{
	background: #002b36 url(../img/me.jpg);
	background-repeat: no-repeat;
	background-position: center;
	background-blend-mode: overlay;

	min-height: 40rem;
	text-align: center;
}


#home h1{
	margin-top: 4.8rem;
	margin-bottom: 1.625rem;

	color: #fff;
	font-size: 5.5rem;
}

#home p{
	color: #07b7e3;
	padding-top: 3rem;
	font-size: 2.5rem;
}

/* Changes to About Me */
#AboutMe{
	margin-top: 1.5rem;
}

#AboutMe h2{
	text-align: center;
	color: #005266;
}

.item{
	float: left;
	text-align: center;
	width: 31%;
	padding: 0.75rem;
}

figcaption{
	font-weight: bold;
	font-size: 1.5rem;
	color: #005266;
}

#AboutMe ul{
	line-height: 1.8rem;
}

/* Changes to Skills */
#Skills{
	padding-top: 1.2em;
	background-color: #0888a8;
}

#Skills h2{
	text-align: center;
	color: #fff;
}

#Skills h3{
	color: #fff;
	text-align: center;
}

#Skills img{
	/* Filter is to change color of image. Source: https://codepen.io/sosuke/pen/Pjoqqp */
	filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(288deg) brightness(102%) contrast(102%);
}

#Skills figcaption{
	color: #fff;
}

/* Changes to login form */
#login {
	padding-top: 1rem;
	padding-bottom: 1rem;
	color: #fff;
	background: #353535;

}

#login h3{
	float:left;
	position: relative;
	bottom: 1.5rem;

}

#login form{
	float: right;
	margin-top: 1.5rem;
	position: relative;
	bottom: 1.5rem;
}

#login input{
	padding: 0.25rem;
	height: 1.4rem;
	width: 15rem;
}

.submit_btn{
	background-color: #0888A8;
	color: #fff;
	height: 1.9rem;
	padding-left: 1.25rem;
	padding-right: 1.25rem;
}

/* Changes to Education */
.timeline-container{
	width: 80%;
	height: auto;
	max-width: 50rem;
	margin: 0 auto;
	margin-top: 2rem;
}

.timeline{
	padding-top: 1rem;
}

.timeline ul li{
	background-color: #0888A8;
	color: white;
	padding: 1.25rem;
	border-radius: 0.75rem;
	margin-bottom: 1.25rem;
}

.timeline-content h2{
	font-size: 1.5rem;
	font-weight: 500;
	line-height: 1.75rem;
	margin-bottom: 0.8rem;
}

.timeline-content p{
	font-size: 1rem;
	line-height: 1.8rem;
	font-weight: 300;
}

.timeline ul li:hover{
	background-color: #353535;
}

#Education{
	color: #0888A8;
}

/* Changes Experience */

#Experience{
	background-color: #0888A8;
	color: #fff;
	padding-bottom: 2rem;
}

#Experience ul li{
	line-height: 2.5rem;
}

#main-ul > li{
	font-weight: bold;
}

#nested-ul > li{
	line-height: 1.5rem;
	padding-left: 2rem;
}

#nested-ul a{
	color: #fff;
}

#nested-ul a:hover{
	color: #353535;
}

/* Changes to Portfolio */
#Portfolio{
	padding-bottom: 1rem;
}
#Portfolio h1{
	color: #0888A8;
}

/* Changes to contact */
#Contact a{
	color:#000;
}
/* Changes to blog */
#Blogpost {
	text-align: center;
}

#Blogpost h1{
	text-align: left;
	color: #0888A8;
}

.title{
	position: relative;
	display: block;
	left: 35%;
	padding: 0.75rem 1.25rem;
	width: 40%;

	margin-bottom: 1rem;
}

textarea{
	position: relative;
	display: block;
	left: 35%;

	background: #fff;
}

.blog_btn{
	position: relative;
	left: 5%;
	background-color: #0888A8;
	color: #fff;
	height: 1.9rem;
	margin-top: 1rem;
	padding-left: 5rem;
	padding-right: 5rem;
}

/* Changes to Blog Entry */

.blogEntry h2{
	text-align: center;
}
.blogEntry p{
	padding: .5rem;
}

#dt{
	float: right;
}

.addPost {
	padding-bottom: 1rem;
}

.addPost p{
	text-align: center;
	font-size: 1.5rem;

}

#blogLink{
	color: #0888A8;
	text-allign: center;
}

#close_link{
	color: #0888A8;
}

#message{
	white-space: pre-line;
	white-space: pre-wrap;
}

/* Changes to footer */
footer{
		/* padding: 1.2rem; */
		height: 3.5rem;
		color: #fff;
		text-align: center;
		background-color: #000;

		width: 100%;
		position: absolute;
		bottom: 0;
}
a{
	color: #fff;
}
/* Changes to font sizes */
h1{
	font-size: 3rem;
}

h2{
	font-size: 2.25rem;
}

h3{
	font-size: 1.25rem;
}
