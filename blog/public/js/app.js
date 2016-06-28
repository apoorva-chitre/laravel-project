var article_Id = 0;

$('.edit-article-button').on('click', function (e) {

	e.preventDefault();


	var article_Id = e.target.parentNode.parentNode.dataset['articleid'];

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


	var article_Id = e.target.parentNode.parentNode.dataset['articleid'];

	var isLike = e.target.previousElementSibling == null;

	$.ajax({

		method: 'POST',
		url: urlLike,
		data: {isLike: isLike, articleId: article_Id, _token: token},
		success: function() {

			$('.like').html('<p>You like this </p>');

		},

		failure: function() {

			$('.like').html('<p> 503 error </p>');
		}

	});

});

        $('#new-comment').on('click' , function(e) {

        	var commentData = $('#comment').html;

        	e.preventDefault();

            $.ajax({

                type: "POST",
                url: urlComment,
                data: { comment:commentData },
                success: function(data) {

                	$('.add-comment').html(data);
                   
                },

        		error: function() {
         		$('.add-comment').html('<p>An error has occurred</p>');
     		 }

            });

            return false;

        });




