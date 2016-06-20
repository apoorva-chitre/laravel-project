var article_Id = 0;

$('.edit-article-button').on('click', function (e) {

	e.preventDefault();

	var articleData = e.target.parentNode.parentNode.childNodes[1].textContext;

	var article_Id = articleData.dataset['articleId'];

	var article_title = e.target.parentNode.parentNode.dataset['articleTitle'];

	var article_category = e.target.parentNode.parentNode.dataset['articleCategory'];

	var article_body = e.target.parentNode.parentNode.dataset['articleBody'];


	$('#article-title-edit').val(article_title);

	$('#article-category-edit').val(article_category);

	$('#article-body-edit').val(article_body);

	$('#edit-article-modal').modal();
});

$('#modal-save').on('click', function(){


	$.ajax({

		method: 'POST',
		url: urlEdit,
		data: {body: $('#article-body-edit').val(), articleId: article_Id, _token: token }

	}).done(function (msg) {

		console.log(JSON.stringify(msg));
	});
});

$('.like').on('click' , function(e) {

	e.preventDefault();


	var article_Id = e.target.parentNode.parentNode.dataset['articleId'];

	var isLike = e.target.previousElementSibling == null;

	$.ajax({

		method: 'POST',
		url: urlLike,
		data: {isLike: isLike, articleId: article_Id, _token: token}
	}).done(function(){

		//change the page
	});

});

