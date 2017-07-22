// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
	var li = document.createElement("li");
	var inputValue = document.getElementById("myInput").value;
	var t = document.createTextNode(inputValue);
	li.appendChild(t);
	if (inputValue === '') {
		alert("You must write something!");
	} else {
		document.getElementById("myUL").appendChild(li);
	}
	document.getElementById("myInput").value = "";

	var span = document.createElement("SPAN");
	var txt = document.createTextNode("\u00D7");
	span.className = "close";
	span.appendChild(txt);
	li.appendChild(span);

	for (i = 0; i < close.length; i++) {
		close[i].onclick = function() {
		  var div = this.parentElement;
		  div.style.display = "none";
		}
	}

	userId = 1;
	groceryID = 1;
	url = "";
	body = {
		"item" : inputValue;
	};

	postRequest(url, body);
  
}

function saveList(){
	
	
}

function viewLists(){
	
	
}

function getRequest(url) {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
           if (xmlhttp.status >= 200 && xmlhttp.status < 300) {
               return xmlhttp.responseText;
           }
           else if (xmlhttp.status >= 500) {
              alert('There was a server error. World is over');
           }
           else if (xmlhttp.status >= 400) {
              alert('There was a client error. World is over');
           }
           else {
               alert('something else other than 200 was returned');
           }
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function putRequest(url, body) {
	
    var xmlhttp = new XMLHttpRequest();
	xmlhttp.setRequestHeader("Content-type", "application/json");

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
			if (xmlhttp.status >= 200 && xmlhttp.status < 300) {
			   return xmlhttp.responseText;
			}
			else if (xmlhttp.status >= 500) {
			  alert('There was a server error. World is over');
			}
			else if (xmlhttp.status >= 400) {
			  alert('There was a client error. World is over');
			}
			else {
			   alert('something else other than 200 was returned');
           }
        }
    };

    xmlhttp.open("PUT", url, true);
    xmlhttp.send(body);
}

function postRequest(url, body) {
	
    var xmlhttp = new XMLHttpRequest();
	xmlhttp.setRequestHeader("Content-type", "application/json");

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
			if (xmlhttp.status >= 200 && xmlhttp.status < 300) {
			   return xmlhttp.responseText;
			}
			else if (xmlhttp.status >= 500) {
			  alert('There was a server error. World is over');
			}
			else if (xmlhttp.status >= 400) {
			  alert('There was a client error. World is over');
			}
			else {
			   alert('something else other than 200 was returned');
           }
        }
    };

    xmlhttp.open("POST", url, true);
    xmlhttp.send(body);
}
