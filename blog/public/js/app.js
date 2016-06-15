var article_Id = 0;

$('.article').find('#article-menu').find('#edit-article-button').on('click', function (e) {

	e.preventDefault();


	article_Id = event.target.parentNode.parentNode.dataset['articleId'];

	var article_title = event.target.parentNode.parentNode.dataset['articleTitle'];

	var article_category = event.target.parentNode.parentNode.dataset['articleCategory'];

	var article_body = event.target.parentNode.parentNode.dataset['articleBody'];


	$('#article-title-edit').val(article_title);

	$('#article-category-edit').val(article_category);

	$('#article-body-edit').val(article_body);

	$('#edit-article-modal').modal();
});

$('#modal-save').on('click', function(){


	$.ajax({

		method: 'POST',
		url: url,
		data: {body: $('#article-body-edit').val(), articleId: article_Id, _token: token }

	})

	.done(function (msg) {

		console.log(msg['message']);
	});
})

