<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
	
		<form action ="http://localhost/listadded.php">
	
		

		<div id="myDIV" class="header">
		<h2>My Grocery Lists</h2>
		<input type="text" id="myInput" placeholder="Item...">
		<input type="text" id="myInput" placeholder="List Name...">
		</div>
		<div id ="myDIV" class="header">
		<span onclick="newElement()" class="addBtn">Add Item</span>
		<span onclick="saveList()" class="addBtn">Save List</span>
		<span onclick="viewLists()" class="addBtn" align="right">View Lists</span>
		
		</div>
	
		<ul id="myUL">
		</ul>
		
		
		<script src="grocery-list.js"></script>
	</body>
</html>

