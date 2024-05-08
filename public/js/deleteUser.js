// Function to handle delete user request and automatically update the table without refreshing the page
$(document).on("click", ".delete-btn", function(){
  var id = $(this).data('id');
  $.ajax({
    url: '/admin/delete/'+ id,
    type: 'POST',
    data: {
      _token: $('meta[name="csrf-token"]').attr('content'),
      _method: 'DELETE',
      id: id
    },
    success: function(response) {
      console.log(response);
      $.ajax({
        url: '/admin/getUsers',
        type: 'GET',
        success: function(response) {
          Swal.fire({
            position: 'top-end',
            title: 'User deleted successfully'.toUpperCase(),
            showConfirmButton: false,
            icon: 'success',
            timer: 3000,
            toast: true,
          });
          $('tbody#usersTableBody').html(response);
        }
      });
    }
  });
});
