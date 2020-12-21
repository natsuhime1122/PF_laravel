window.addEventListener('DOMContentLoaded', function() {
  $(document).on('click', '#deleteTarget', function(event) {
    event.preventDefault();
    var id = $(this).attr('value')

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
      $(this).parents('div').remove();
      alert('削除成功')
    })

    .fail(function() {
      alert('エラー');
    });
  });
});
