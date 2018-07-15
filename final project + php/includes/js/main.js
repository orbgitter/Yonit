$('document').ready(function() {
	$("#hamburger").click(toggleMenu);
	$("#edit").click(editcomment);
});

function toggleMenu(){
	$("#menu").toggle(700);
}

function editcomment(){
	$("article#mycom").replaceWith('<form action="edit_comment.php" class="tocbac_comm" method="post"><div class="form-group"><textarea name="comment" class="form-control" aria-label="With textarea">' + 
		$("#mycomtxt").text() + '</textarea></div><div class="form-group"><label><input name="price" type="number" class="form-control" title="only numbers are allowed" value="' +
		$("#mycomprc").text() + '"></label><button type="submit" class="btn btn-primary">Update</button></div></form>');
}
