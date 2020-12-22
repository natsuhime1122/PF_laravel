window.addEventListener('DOMContentLoaded', function() {
  $('.posts-index-item').on('click', '#deleteForm', function(event) {
    event.preventDefault();
    var delF = $(this);
    var postIndexItem = delF.parent().parent();
    var id = $(this).attr('value');

    $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });

    $.ajax({
      url: '/posts/' +id,
      type: 'POST',
      data: {'id': 'id',
            '_method': 'DELETE'},
      contentType: 'application/json',
      dataType: 'json'
    })

    .done(function(data) {
      console.log("Ajax通信成功");
      console.log(data);
      postIndexItem.remove();
    })

    .fail(function() {
      alert('エラー');
    });
  });
});
