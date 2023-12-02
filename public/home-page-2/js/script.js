


const nextArticle = () => {
    $.ajax({
        url: nextArticleRoute,
        type: 'GET',
        data: {articleId},
        dataType: 'json',
        success: function (res) {
            console.log('res',res.responseText)
            $('#articleId').html(res.responseText);
        },
        error: function (error) {
            // console.log(error);
        }
    });
}

window.nextArticle = nextArticle;