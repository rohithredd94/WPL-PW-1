function pageLoad() {
	document.getElementById("button").onclick = loadData;
}
function loadData() {
	$.ajax({
		type: "GET",
		url: "books.xml",
		dataType: "xml",
		success: function(data){
			console.log("file is loaded");
			var output = "<tr>";
			output += '<th>Title</th>';
			output += '<th>Author(s)</th>';
			output += '<th>Category</th>';
			output += '<th>Year</th>';
			output += '<th>Price</th>';
			output += '</tr>';
			$("#demo").append(output);
			$(data).find('bookstore').each(function(){
				$(data).find('book').each(function(){
					var cat = $(this).attr("category")
					var title = $(this).find("title").text();
					var year = $(this).find("year").text();
					var price = $(this).find("price").text();
					var authors = "";
					var output = "<tr>";
					$(this).find('author').each(function(){
						authors = authors +$(this).text() + ', ';	
					})
					authors = authors.replace(/,\s*$/, "");
					output += '<td>'+title+'</td>';
					output += '<td>'+authors+'</td>';
					output += '<td>'+cat+'</td>';
					output += '<td>'+year+'</td>';
					output += '<td>'+price+'</td>';
					output += '</tr>';
					$("#demo").append(output);
				})		
			})
		},
		error: function(){
			console.log("error loading file");
		}
	});
}
window.onload = pageLoad;