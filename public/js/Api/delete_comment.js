window.addEventListener('DOMContentLoaded', function() {
  $('.comment-item').on('click', '#deleteForm', function(event) {
    event.preventDefault();
    var delF = $(this);
    var commentItem = delF.parent().parent();
    var id = $(this).attr('value');

    $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });

    $.ajax({
      url: '/comments/' +id,
      type: 'POST',
      data: {'id': 'id',
            '_method': 'DELETE'},
      contentType: 'application/json',
      dataType: 'json'
    })

    .done(function(data) {
      console.log("Ajax通信成功");
      console.log(data.comment_count);
      commentItem.remove();
      $('.comment_count').html('コメント('+data.comment_count+')');
    })

    .fail(function() {
      alert('エラー');
    });
  });
});
