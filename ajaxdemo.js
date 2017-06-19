function pageLoad() {
	document.getElementById("button").onclick = loadData;
}
function loadData() {
	$.ajax({
		type: "GET",
		url: "books.xml",
		dataType: "xml",
		success: function(data){
			alert("file is loaded");
			$(data).find('bookstore').each(function(){
				$(data).find('book').each(function(){
					var title = $(this).find("title").text();
					var year = $(this).find("year").text();
					var price = $(this).find("price").text();
					var authors = "";
					$(data).find('author').each(function(){
						authors = authors + $(this).text();
						alert(authors);
					})
				})
					
			})
		},
		error: function(){
			alert("error loading file");
		}
	});
}
window.onload = pageLoad;