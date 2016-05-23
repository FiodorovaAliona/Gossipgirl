<head>
<link href="table.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<br /><br />

<div class = "center" align="center" id="result1"></div><br />
<div class = "center" align="center" id="result2"></div><br />
<div class = "center" align="center" id="result3"></div><br />
<div class = "center" align="center" id="result4"></div><br />
<div class = "center" align="center" id="result5"></div><br />
<div class = "center" align="center" id="result6"></div><br />
<div class = "center" align="center" id="result7"></div><br />
<div class = "center" align="center" id="result8"></div><br />
<div class = "center" align="center" id="result9"></div><br />
<div class = "center" align="center" id="result10"></div><br />


<script type="text/javascript">
var last_get;
function addpost()
{
     window.location = "addnews.php";
}

function loadTopNews(){
	$.ajax({
	type: 'GET',
	url: 'ajax.php',
	data: { topnews: '1' },
	dataType: 'json',
	success: function (data) {
		var idN = 1;
		$.each(data, function(index, element) {
			var html='<table>';			
			html += '<tr>';
			html += '<th>'+element.title+'</th></tr><tr>';
			html += "<td>"+element.text+"</td></tr><tr>"+"<td>"+element.author+"</td>"+"<th><button class ='new' id='like' onClick='addLike("+element.id+");'>"+element.likes+" Likes!</button></th>";
			html += '</tr>';
			html += '</table>';
			$('#result'+idN).html(html);
			idN = idN+1;
			});
		}
	});
last_get == "topnews";
}


$( document ).ready(function() {
    loadNewNews();
});
function loadNewNews(){
	$.ajax({
	type: 'GET',
	url: 'ajax.php',
	data: { newnews: '1' },
	dataType: 'json',
	success: function (data) {
		var idN = 1;
		$.each(data, function(index, element) {
			var html='<table>';			
			html += '<tr>';
			html += '<th>'+element.title+'</th></tr><tr>';
			html += "<td>"+element.text+"</td></tr><tr>"+"<td>"+element.author+"</td>"+"<th><button class ='new' id='like' onClick='addLike("+element.id+");'>"+element.likes+" Likes!</button></th>";
			html += '</tr>';
			html += '</table>';
			$('#result'+idN).html(html);
			idN = idN+1;
			});
		}
	});
last_get = "newnews";
}


function addLike(id){
	$.ajax({
	type: 'POST',
	url: 'ajax.php',
	data: { addlike: id },
	success: function(response) {
			loadNewNews();

	}
}
);}
</script>