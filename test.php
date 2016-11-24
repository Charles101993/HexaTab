<html lang="en"><head>
	<script src = 'http://code.jquery.com/jquery-1.12.1.min.js'/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery UI Draggable - Default functionality</title>

	<link rel="stylesheet" href="css/style.css">
	
	<style>
	body
	{
		background-color: #000000;
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
    <img src='assets/save.png' width="50" height="50"/>
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

<div id="draggable" class="ui-widget-content ui-draggable ui-draggable-handle" style="position: relative; left: 673px; top: 280px;">
	<div style = "height: 60px; width: 60px; position: relative; ">
		<img src= 'assets/hexBorder.png' alt="" style = "height: 75px; width: 75px; position: absolute;" ondblclick = 'myfunc(resizable)'/>
		<img src= 'http://google.com/favicon.ico' alt="" style="height: 42px; width: 42px; position:absolute; left:16px; top:5px" ondblclick = 'myfunc(resizable)'/>
		<input type="text" style ="font-size: 10px; width:75px; position:absolute; top:50; background:transparent; border:transparent; color:white; text-align:center" maxlength = "6">
	</div>
	<div id="resizable" style="display:none;">
		<iframe id="myiFrame" src="http://example.com" style="width:100%; height:100%	;"></iframe>
		<div id="mask"></div>
	</div>
</div>


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

</script>
<script>
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
    var clone = document.createElement('div');
	var cloneID = "draggable" + ++i;
   
	
	var newURL = document.getElementById('textbox').value;
	if(newURL == '')
		newURL = 'example.com';
	if(newURL.substring(0,4) != 'http'){
		newURL = 'http://' + newURL;
	}
	
	var test = new Image();
	test.src = "http://" + newURL.split('/')[2].concat("/favicon.ico");
	if(!test.complete || test.naturalHeight == 0)
		test.src = 'http://google.com/favicon.ico';
	
	var inner = "<div id='" + cloneID + "' class= 'ui-widget-content ui-draggable ui-draggable-handle' style='position: relative; left: 673px; top: 280px; height: 60px; width: 60px; ; padding: 0.5em; background:transparent; border:transparent;'> "
				+ "<div style = 'height: 60px; width: 60px; position: relative; '> "
				+ "<img src= 'assets/hexBorder.png' alt='' style = 'height: 75px; width: 75px; position: absolute;' ondblclick = 'myfunc(resizable" + i + ")'/>"
				+ "<img src= '" + test.src + "' alt='' style='height: 42px; width: 42px; position:absolute; left:16px; top:5px;' ondblclick = 'myfunc(resizable" + i + ")'/></div>"
				+ "<input type='text' style ='font-size: 10px; width:75px; position:absolute; top:57; background:transparent; border:transparent; color:white; text-align:center' maxlength = '6'>"
				+ " <div id='resizable" + i + "' style='width: 310px; height: 160px; padding: 0.5em; display:none;'> <iframe id='" 
				+ "myiFrame" + i
				+  "' src='http://example.com' style='width:100%; height:100%;'></iframe> <div id='mask" + i
				+ "'></div> </div>"
				+ "</div>";
	clone.innerHTML = inner;
	
//	window.console.log(inner);
//	window.console.log(document.getElementById("myiFrame" + i));
//	window.console.log(document.getElementById(clone.id).innerHTML);
	document.body.appendChild(clone);
	document.getElementById("myiFrame" + i).src = newURL;
	
	$(function() {
		$("#".concat(cloneID)).draggable({iframeFix: true});
		$("#".concat(cloneID)).on('click', function(){
			window.console.log($(this).attr("id"));
			var element = document.getElementById($(this).attr("id"));
			if(testDelete == true) {
				element.parentNode.removeChild(element);
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
	
	all_flakes.append(clone)
}


function duplicate1(x, y, url_, is_open, _label) {
    var clone = original.cloneNode(true); // "deep" clone

    clone.id = "draggable" + ++i; // there can only be one element with an ID
    clone.style = "position: relative; left:" + x + "px; top: " + y + "px;";
    original.parentNode.appendChild(clone);  
		
	var inner = "<div id='" + clone.id + "' class= 'ui-widget-content ui-draggable ui-draggable-handle' style='" + clone.style + "' height: 60px; width: 60px; ; padding: 0.5em; background:transparent; border:transparent;'> "
				+ "<div style = 'height: 60px; width: 60px; position: relative; '> "
				+ "<img src= 'assets/hexBorder.png' alt='' style = 'height: 75px; width: 75px; position: absolute;' ondblclick = 'myfunc(resizable" + i + ")'/>"
				+ "<img src= '" + url_ + "' alt='' style='height: 42px; width: 42px; position:absolute; left:16px; top:5px;' ondblclick = 'myfunc(resizable" + i + ")'/></div>"
				+ "<input type='text' style ='font-size: 10px; width:75px; position:absolute; top:57; background:transparent; border:transparent; color:white; text-align:center' maxlength = '6'>"
				+ " <div id='resizable" + i + "' style='width: 310px; height: 160px; padding: 0.5em; display:none;'> <iframe id='" 
				+ "myiFrame" + i
				+  "' src='http://example.com' style='width:100%; height:100%;'></iframe> <div id='mask" + i
				+ "'></div> </div>"
				+ "</div>";
	document.getElementById(clone.id).innerHTML = inner;
	
	document.getElementById("myiFrame" + i).src = url_;
	clone.src = url_;
	console.log(is_open);
	if(!is_open){$(document.getElementById("myiFrame" + i)).hide();}
	clone.label = _label;
	
	$(function() {
		$("#".concat(cloneID)).draggable({iframeFix: true});
		$("#".concat(cloneID)).on('click', function(){
			window.console.log($(this).attr("id"));
			var element = document.getElementById($(this).attr("id"));
			if(testDelete == true) {
				element.parentNode.removeChild(element);
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
}

function save() {
	var save_string = "";
	
	for(var i = 0; i < all_flakes.length; i++){
		c_id = all_flakes[i].id;
		this_url = all_flakes[i].src + ',';
		console.log(this_url);
		curr_flake = document.getElementById(c_id);
		x_pos_ = curr_flake.style.left;// + ',';
		x_pos = x_pos_.substring(0, x_pos_.length - 2) + ',';
		console.log(x_pos);
		console.log(x_pos);
		y_pos_ = curr_flake.style.top;// + ',';
		y_pos = y_pos_.substring(0, y_pos_.length - 2) + ',';
		f_label = c_id.lable; 
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
	echo "<head><meta HTTP-EQUIV='refresh' content='2; url=dan.php'></head>";
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
   $flakes[] = $row;
}
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
	duplicate1(params[0], params[1], params[2], params[3]);
	</script>
<?php
}

?>
</html>
