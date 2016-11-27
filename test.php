<html lang="en"><head>
	<script src = 'http://code.jquery.com/jquery-1.12.1.min.js'/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src= "xml_req_.js"></script>
	
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HexaTab</title>

	<link rel="stylesheet" href="css/style.css">
	
	<style>
	header {
	height:50px;
	background:#F0F0F0;
	border:1px solid #CCC;
	width:960px;
	margin:0px auto
	}
	h1 {
	font-family:georgia, serif;
	color:#786E69;
	font-size:25px;
	font-weight:bold;
	letter-spacing:.1em;
	text-transform:uppercase;
	padding-bottom:3px;
	}
	
	body
	{
		background-image: url("assets/web.jpg");
	}
	#draggable { height: 60px; width: 60px; ; padding: 0.5em; background:transparent; border:transparent;}
	
	#resizable { width: 310px; height: 160px; padding: 0.5em; }

	html, body, #container { height: 100%; }
	#container { height: 100%; }

	.ui-widget-content {
		border: 1px solid #ffffff;
		background: #ffffff;
		color: #222222;
	}
	
	#content { padding-bottom: 3em; }
	
	#mask {
		position:absolute;
		top:0;
		width:0;
		margin:0;
		padding:0;
		width:100%;
		height:100%;
		display:none;
	}
	
		
	img {
	    -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
	    filter: grayscale(100%);
	}
	
	</style>
	
	<style>
	.show { display: block; }
	</style>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$( function() {
		$( "#draggable" ).draggable({ iframeFix: true });
		$("#draggable").on('click', function(){
			window.console.log($(this).attr("id"));
			var element = document.getElementById($(this).attr("id"));
			if(testDelete == true) {
				element.parentNode.removeChild(element);
			}
		});
	} );
	</script>
	
	<script>
	$(function(){
		$("#resizable").resizable({
			start: function(event, ui) { 
			   $("#mask").css("display","block");
			},
			stop: function(event, ui) {
			   $("#mask").css("display","none");
			}
		});
		$("#resizable").on('click', function(){
			window.console.log($(this).attr("id"));
			var element = document.getElementById($(this).attr("id"));
			if(testDelete == true) {
				element.parentNode.removeChild(element);
			}
		});
	});
	$( function() {
		$( "#draggable" ).draggable();
		$("#postIt").draggable({
			handle:  '.topBar',
		});
		$('#postIt').on('click', function(){
			window.console.log($(this).attr("id"));
			var element = document.getElementById($(this).attr("id"));
			if(testDelete) {
				element.parentNode.removeChild(element);
			}
		});
	} );
	$( function() {
		$( "#textMake" ).draggable();
		
		$('#textMake').on('click', function(){
			window.console.log($(this).attr("id"));
			var element = document.getElementById($(this).attr("id"));
			if(testDelete) {
				element.parentNode.removeChild(element);
			}
		});
	} );
	</script>
</head>
<h1>

<div id = "menuText" style="position: absolute; left: 300px; top: 90px;" onclick = "disDrop(menuDrop);"> 
Sign Out
</div>
<div id = "newTabText"  style="position: absolute; left: 500px; top: 90px;" onclick ="duplicate();useID();"> 
New Flake	
</div>
<div id = "saveButtonText" style="position: absolute; left: 720px; top: 90px;" onclick: "save();"> 
Save
</div>
<div id = "deleteButtonText" style="position: absolute; left: 830px; top: 90px;" onclick: "toggleDelete();"> 
Delete
</div>
</h1>

<div id = "menuButton" style="position: absolute; left: 10px; top: 10px;"> 
    <img src='assets/menu.png' width="50" height="50" onclick = "disDrop(menuDrop);"/>
	<div id="menuDrop" style="display: none;">
		<div id = "signInButton" > 
			<img src='assets/signIn.png' />
		</div>
		<div id = "logOutButton" > 
			<img src='assets/logOut.png' />
		</div>
	</div>
</div>

<div id = "newTab" style="position: absolute; left: 100px; top: 10px;" onclick ="duplicate();useID();"> 
    <img src='assets/newTab.png' width="50" height="50"/>	
</div>

<div id="buttontext" style="position: absolute; left: 100px; top:60px;">
		<form>
		<input id="textbox" type="text" name="URL">
		</form>
</div>

<div id = "saveButton" style="position: absolute; left: 150px; top: 10px;"> 
    <img src='assets/save.png' onclick= "save();" width="50" height="50"/>
</div>

<div id = "editModeButton" style="position: absolute; left: 275px; top: 10px;"> 
    <img src='assets/editMode.png' width="50" height="50" onclick = "edDrop(editDrop);"/>
	<div id="editDrop" style="display: none;">
		<div id = "textButton" > 
			<img src='assets/newText.png' width="50" height="50" onclick = "makeText();"/>
		</div>
		<div id = "editTextButton" > 
			<img src='assets/editText.png' width="50" height="50"/>
		</div>
		<div id = "newListButton" > 
			<img src='assets/newList.png' width="50" height="50"/>
		</div>
	</div>
</div>

<div id = "deleteButton" style="position: absolute; left: 400px; top: 10px;"> 
    <img id = "deleteImg1" src='assets/delete.png' width="50" height="50" onclick = "toggleDelete();"/>
	<img id = "deleteImg2" src='assets/deleteActive.png' width="50" height="50" style="display:none" onclick = "toggleDelete();"/>
</div>



<body style="cursor: auto;">



<div id="postIt" style="position:absolute; left: 300px; top: 300px;">
  <div class=topBar></div>
  <div class=noteForm>
    <div contenteditable class=textAria>
      Hello, <b>Edit Me First</b> Then Drag & Drop me.
    </div>
  </div>
</div>

<div id="textMake" style="position:absolute; left: 380px; top: 180px; border-style: solid; border-width: 5px;">
  <input id="textMakeBox" type="text" name="tex" style ="font-size: 15px">
</div>

</body>
<script>
var testDelete = false;
function toggleDelete() {
	if(testDelete == false) {
		testDelete = true;
		$(deleteImg1).hide();
		$(deleteImg2).show();
	}
	else {
		testDelete = false;
		$(deleteImg2).hide();
		$(deleteImg1).show();
	}
}

var dis = 0;
var sid = 0;
function disDrop(id){
	dis += 1;
	if(dis % 2 == 1){
		$(id).show();
	}
	else $(id).hide();
}
function edDrop(id){
	sid += 1;
	if(sid % 2 == 1){
		$(id).show();
	}
	else $(id).hide();
}


var all_flakes = [];
function myfunc(id){
	window.console.log(id);
	window.console.log(id.style.display);
	
	if(id.style.display == 'none'){
		$(id).show();
	}
	else 
		$(id).hide();
	
}


document.getElementById('newTab').onclick = duplicate;

document.getElementById('newListButton').onclick = makeNote;

var i = 0;
var original = document.getElementById('draggable');


function duplicate() {
	var cloneID = "draggable" + ++i;
	var clone = document.createElement("div");
	clone.id= cloneID;
	document.body.appendChild(clone);
	window.console.log(clone.outerHTML);
//	clone.outerHTML = "<div id='" + cloneID + "' class= 'ui-widget-content ui-draggable ui-draggable-handle' style='position: relative; left: 673px; top: 280px; height: 60px; width: 60px; ; padding: 0.5em; background:transparent; border:transparent;'> </div>"
	var newURL = document.getElementById('textbox').value;
	window.console.log(newURL);
	if(newURL == '')
		newURL = 'example.com';
	if(newURL.substring(0,4) != 'http'){
		newURL = 'http://' + newURL;
	}
	window.console.log(newURL);
	
	var test = new Image();
	test.src = "http://" + newURL.split('/')[2].concat("/favicon.ico");
	window.console.log(test.src);
	/* //i think this broke favicon
	if(!test.complete || test.naturalHeight == 0)
		test.src = 'http://google.com/favicon.ico';*/
	window.console.log(test.src);
	var inner = "<div id='" + cloneID + "' class= 'ui-widget-content ui-draggable ui-draggable-handle' style='position: relative; left: 673px; top: 280px; height: 60px; width: 60px; ; padding: 0.5em; background:transparent; border:transparent;' ondblclick = 'myfunc(resizable" + i + ")'> "
				+ "<li class='hex'></li>"
				+ "<span class='innerHex'>"
				+ "<img src= '" + test.src + "' alt='' style='height: 42px; width: 42px; position:absolute; top:10px; left: 12px;'/>"
				+ "<input id = 'text" +  i + "'type='text' style='font-size: 15px; width:75px; color:black; text-align:center; background: transparent; border: transparent; position:absolute; top: 55px; left: -6px;' maxlength = '6'>"
				+ "</span>"
				+ " <div id='resizable" + i + "' style='width: 310px; height: 160px; padding: 0.5em; display:none;'> <iframe id='" 
				+ "myiFrame" + i
				+  "' src='http://example.com' style='width:100%; height:100%;'></iframe> <div id='mask" + i
				+ "'></div> </div>"
				+ "<li class='hex' style='width: calc(.85 * 4em); height: calc(.85 * 6.8em); left: -3px; top: -91px; z-index: -1; background: transparent;'></li>"
				+ "</div>";
	clone.outerHTML = inner;
	/*if(highlightBox == true){
//		window.console.log(newTexID);
		document.getElementById(cloneID).getElementsByTagName("INPUT")[0].style.border = "7px solid green";
		document.getElementById(cloneID).getElementsByTagName("LI")[1].style.background = "#DA70D6";
	}
	else if(highlightDrag == true){
		document.getElementById(cloneID).getElementsByTagName("LI")[1].style.background = "#DA70D6";
	}
	*/
	
//	window.console.log(inner);
//	window.console.log(document.getElementById("myiFrame" + i));
//	window.console.log(document.getElementById(clone.id).innerHTML);
//	document.body.appendChild(clone);
	document.getElementById("myiFrame" + i).src = newURL;
	
	$(function() {
		$("#".concat(cloneID)).draggable({iframeFix: true});
		$("#".concat(cloneID)).on('click', function(){
			window.console.log($(this).attr("id"));
			var element = document.getElementById($(this).attr("id"));
			if(testDelete == true) {
				element.parentNode.removeChild(element);
				console.log("BEFORE");				
				console.log(all_flakes);				
				for(var x = 0; x < all_flakes.length; x++){
					if(all_flakes[x].id == cloneID){
						all_flakes.splice(x, 1);
						console.log(all_flakes[x].id);
					}
				}
				console.log("AFTER");				
				console.log(all_flakes);				
			}
		});
	} );
	
	$(function(){
		$("#resizable".concat(i)).resizable({
			start: function(event, ui) { 
			   $("#mask".concat(i)).css("display","block");
			},
			stop: function(event, ui) {
			   $("#mask".concat(i)).css("display","none");
			}
		});
	});
	all_flakes.push(clone);
   	window.console.log(clone);
}



function duplicate1(x, y, url_, is_open, _label) {
	var cloneID = "draggable" + ++i;
	var clone = document.createElement("div");
	clone.id= cloneID;
	document.body.appendChild(clone);
	window.console.log(clone.outerHTML);
//	clone.outerHTML = "<div id='" + cloneID + "' class= 'ui-widget-content ui-draggable ui-draggable-handle' style='position: relative; left: 673px; top: 280px; height: 60px; width: 60px; ; padding: 0.5em; background:transparent; border:transparent;'> </div>"
	var newURL = url_
	window.console.log(newURL);
	if(newURL == '')
		newURL = 'example.com';
	if(newURL.substring(0,4) != 'http'){
		newURL = 'http://' + newURL;
	}
	window.console.log(newURL);
	
	var test = new Image();
	test.src = "http://" + newURL.split('/')[2].concat("/favicon.ico");
	window.console.log(test.src);
	/* //i think this broke favicon
	if(!test.complete || test.naturalHeight == 0)
		test.src = 'http://google.com/favicon.ico';*/
	window.console.log(test.src);
	var inner = "<div id='" + cloneID + "' class= 'ui-widget-content ui-draggable ui-draggable-handle' style='position: relative; left: " + x + "px; top: " + y + "px; height: 60px; width: 60px; ; padding: 0.5em; background:transparent; border:transparent;' ondblclick = 'myfunc(resizable" + i + ")'> "
				+ "<li class='hex'></li>"
				+ "<span class='innerHex'>"
				+ "<img src= '" + test.src + "' alt='' style='height: 42px; width: 42px; position:absolute; top:10px; left: 12px;'/>"
				+ "<input id = 'text" +  i + "'type='text' value ='" + _label + "'style='font-size: 15px; width:75px; color:black; text-align:center; background: transparent; border: transparent; position:absolute; top: 55px; left: -6px;' maxlength = '6'>"
				+ "</span>"
				+ " <div id='resizable" + i + "' style='width: 310px; height: 160px; padding: 0.5em; display:none;'> <iframe id='" 
				+ "myiFrame" + i
				+  "' src='http://example.com' style='width:100%; height:100%;'></iframe> <div id='mask" + i
				+ "'></div> </div>"
				+ "<li class='hex' style='width: calc(.85 * 4em); height: calc(.85 * 6.8em); left: -3px; top: -91px; z-index: -1; background: transparent;'></li>"
				+ "</div>";
	clone.outerHTML = inner;
	/*
	if(highlightBox == true){
		window.console.log(newTexID);
		document.getElementById(cloneID).getElementsByTagName("INPUT")[0].style.border = "7px solid green";
		document.getElementById(cloneID).getElementsByTagName("LI")[1].style.background = "#DA70D6";
	}
	else if(highlightDrag == true){
		document.getElementById(cloneID).getElementsByTagName("LI")[1].style.background = "#DA70D6";
	}
	*/
	
//	window.console.log(inner);
//	window.console.log(document.getElementById("myiFrame" + i));
//	window.console.log(document.getElementById(clone.id).innerHTML);
//	document.body.appendChild(clone);
	document.getElementById("myiFrame" + i).src = newURL;
	
	$(function() {
		$("#".concat(cloneID)).draggable({iframeFix: true});
		$("#".concat(cloneID)).on('click', function(){
			window.console.log($(this).attr("id"));
			var element = document.getElementById($(this).attr("id"));
			if(testDelete == true) {
				element.parentNode.removeChild(element);
				console.log("BEFORE");				
				console.log(all_flakes);				
				for(var x = 0; x < all_flakes.length; x++){
					if(all_flakes[x].id == cloneID){
						all_flakes.splice(x, 1);
						console.log(all_flakes[x].id);
					}
				}
				console.log("AFTER");				
				console.log(all_flakes);	
			}
		});
	} );
	
	$(function(){
		$("#resizable".concat(i)).resizable({
			start: function(event, ui) { 
			   $("#mask".concat(i)).css("display","block");
			},
			stop: function(event, ui) {
			   $("#mask".concat(i)).css("display","none");
			}
		});
	});
	all_flakes.push(clone);
   	window.console.log(clone);
}

function save() {
	var save_string = "";

	for(var i = 0; i < all_flakes.length; i++){
		c_id = all_flakes[i].id;
		console.log("cid = " + c_id.substring(9));
		var curr_url = document.getElementById("myiFrame" + c_id.substring(9));
		var curr_label = document.getElementById("text" + c_id.substring(9));
		f_label = curr_label.value; 
		
		this_url = curr_url.src + ',';
		console.log(this_url);
	
		var curr_flake = document.getElementById(c_id);
		console.log(curr_flake);
		console.log("cid after url = " + c_id);
		x_pos_ = curr_flake.style.left;// + ',';
		x_pos = x_pos_.substring(0, x_pos_.length - 2) + ',';
		console.log(x_pos);
		console.log(x_pos);
		y_pos_ = curr_flake.style.top;// + ',';
		y_pos = y_pos_.substring(0, y_pos_.length - 2) + ',';
		console.log(username);
		if (username === undefined || username === null) {}
		else {
			save_string += x_pos + y_pos + this_url + '0,' + username + ',' + f_label + ',';
			console.log(save_string);
		}
	}
	console.log(save_string + "\n\n\n");
	loadXMLDocSave(save_string);
}

var initNote = document.getElementById('postIt');
var noteNum = 0;

function makeNote() {
	var newNote = document.createElement('div');
	var newNoteID = "postIt" + ++noteNum;
//	newNote.id = newNoteID;
//	initNote.parentNode.appendChild(newNote);
//	window.console.log(document.getElementById(initNote.id).outerHTML);
//	window.console.log("INNER^OUTERv");
//	window.console.log(document.getElementById(initNote.id).innerHTML);
	var inner = "<div id= '" + newNoteID+ "' style='position:absolute; left: 300px; top: 300px;'> <div class=topBar></div> <div class=noteForm> <div contenteditable class=textAria>  </div> </div> </div>";
	newNote.innerHTML = inner;
//	window.console.log(inner);
//	window.console.log(newNote.style.left);
	newNote.style.left = "200px";
	newNote.style.top = "200px";
	document.body.appendChild(newNote);
  $(function() {
		$("#".concat(newNoteID)).draggable({
			handle:  '.topBar',
		});
		$("#".concat(newNoteID)).on('click', function(){
			window.console.log($(this).attr("id"));
			var element = document.getElementById($(this).attr("id"));
			if(testDelete == true) {
				element.parentNode.removeChild(element);
			}
		});
	} );
}

var initText = document.getElementById('textMake');
var textNum = 0;
function makeText() {
	var newTex = initText.cloneNode(true);
	newTex.id = "textMake" + ++textNum;
	
	initText.parentNode.appendChild(newTex);
	
	var inner = "<input id=textMakeBox type=text name=tex>";
	document.getElementById(newTex.id).innerHTML = inner;
	window.console.log(inner);
	window.console.log(newTex.style.left);
	document.getElementById(newTex.id).style.left = "200px";
	document.getElementById(newTex.id).style.top = "200px";
	
  $(function() {
		$("#".concat(newTex.id)).draggable();
		$("#".concat(newTex.id)).on('click', function(){
			window.console.log($(this).attr("id"));
			var element = document.getElementById($(this).attr("id"));
			if(testDelete == true) {
				element.parentNode.removeChild(element);
			}
		});
	} );
	
	$(function(){
		$("#".concat(newNote.id)).resizable({
			start: function(event, ui) { 
			   $("#mask".concat(i)).css("display","block");
			},
			stop: function(event, ui) {
			   $("#mask".concat(i)).css("display","none");
			}
		});
	});
}

function useID(e) {   
//    alert(e.id);
	window.console.log("AHHH");
	window.console.log(e.id);
}
</script>

<?php
session_start();

if(!(isset($_SESSION['username']))){
	echo "You must be logged in";
	echo "<head><meta HTTP-EQUIV='refresh' content='2; url=../authenticate.php'></head>";
}

require_once '../login.php';
$db_server = @mysqli_connect($db_hostname, $db_username, $db_password);
	if (!$db_server) die("Unable to connect to mySQL:" . mysqli_error($db_server));
mysqli_select_db($db_server, $db_database)
	or die("Unable to connect to database" . mysqli_error($db_server));
$username = $_SESSION['username'];
?>
<script>
var username = "<?php echo $username; ?>";
</script>
<?php
$query = "SELECT * FROM flakes WHERE user = '$username'";
$result = mysqli_query($db_server, $query);
if (!$result) die ("Result didn't work:" . mysqli_error($db_server));
while ($row = $result->fetch_assoc()) {
   $flakes [] = $row;
}
if(is_array($flakes) || is_object($flakes)){
foreach ($flakes as &$i){
?>
	<script>
	console.log("inside script");
	var params = [];
	params.push(<?php echo $i['x']; ?>);
	params.push(<?php echo $i['y']; ?>);
	var _url_ = "<?php echo $i['url']; ?>";
	params.push(_url_);
	params.push(<?php echo $i['is_open']; ?>);
	params.push("<?php echo $i['label']; ?>");
	duplicate1(params[0], params[1], params[2], params[3], params[4]);
	</script>
<?php
}
}

?>
</html>
