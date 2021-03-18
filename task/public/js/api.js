$(document).ready(function () {

    let token = $('meta[name="csrf-token"]').attr('content'),
        $urlViews = $('#views').data('url'),
        $comment = $('#comment'),
        $commentForm = $('#commentForm'),
        $likeBtn = $('#like');

    function getViews() {
        $.ajax({
            type: 'POST',
            url: $urlViews,
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $("#views").html(data.views);
            }
        });
    }

    function like() {
        $.ajax({
            type: 'POST',
            url: $likeBtn.data('url'),
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $("#likes").html(data.likes);
            }
        });
    }

    function comment() {
        $.ajax({
            type: 'POST',
            url: $commentForm.data('url'),
            data: $commentForm.serialize(),
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {

                if (data.status === 'ok') {
                    $commentForm.remove();
                    let success = '<div class="alert alert-success mt-5">' + data.msg + '</div>';
                    $('#tags').after(success)
                }
            },
            error: function (data) {
                alert(data.responseJSON.msg);
            }
        });
    }

    $likeBtn.on('click', like);
    $comment.on('click', comment);
    setTimeout(getViews, 5000);
})