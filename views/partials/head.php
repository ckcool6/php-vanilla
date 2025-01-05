<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>test</title>
	<style>
		body {
			width: 60%;
			margin: 20px auto;
			padding: 15px;
			border-radius: 15px;
			box-shadow: rgba(0, 0, 0, 0.07) 0 1px 2px, rgba(0, 0, 0, 0.07) 0 2px 4px, rgba(0, 0, 0, 0.07) 0 4px 8px, rgba(0, 0, 0, 0.07) 0 8px 16px, rgba(0, 0, 0, 0.07) 0 16px 32px, rgba(0, 0, 0, 0.07) 0 32px 64px;
		}

		#nav {
			font-size: 18px;
			font-weight: bold;
		}

		#nav li {
			text-decoration: none;
			/*去掉前面的圆点*/
			list-style: none;
			float: left;
			border: 1px solid #FFFFFF;
			background-color: #30DDEB;
		}

		#nav li a{
			color:#040404;
			text-decoration: none;//去掉a的下划线样式
			margin:0px;
			height:40px; 
			line-height:40px; 
			text-align:center;
		}

		#nav li a:hover{
			background-color: #FCFCFC;//鼠标经过事件
		}

		.submit {
			padding-left: 25px;
		}
		
	</style>
</head>

<body>
	<?php require 'nav.php'; ?>