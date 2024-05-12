// Function to delete product and automatically update the table without refreshing the page
$(document).on("click", ".delete-product-btn", function(){
  var id = $(this).data('id');
  console.log(id);
  $.ajax({
    url: '/admin/deleteProduct/'+ id,
    type: 'POST',
    data: {
      _token: $('meta[name="csrf-token"]').attr('content'),
      _method: 'DELETE',
      id: id
    },
    success: function(response) {
      $.ajax({
        url: '/admin/getProducts',
        type: 'GET',
        success: function(response) {
          Swal.fire({
            position: 'top-end',
            title: 'Product deleted successfully'.toUpperCase(),
            showConfirmButton: false,
            icon: 'success',
            timer: 3000,
            toast: true,
          });
          $('tbody#productTableBody').html(response);
        }
      });
    }
  });
});
