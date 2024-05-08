$("#edit_button").click(function() {
  const button = $(this);

  // Take the original data from the fields
  const originalData = {
    name: $("#txt_name").val(),
    email: $("#txt_email").val(),
  };
  const userDetails = JSON.parse(JSON.stringify(originalData));

  // If the button text is "EDIT", then change the fields to input fields
  if (button.text().toUpperCase() === "EDIT") {
    ["name", "email",].forEach(function(field, index) {
      let span = $("#txt_" + field);
      let text = span.text();
      let placeholders = ["NAME", "EMAIL"];
      span.replaceWith(`
      <input id="txt_${field}" class="text-xs sm:text-sm w-full h-full outline-none input-pulse" style="text-transform: uppercase;" placeholder="${placeholders[index]}" value="${text}">`);
      span.change(function() {
        if ($(this).val() !== originalData[field]) {
          userDetails[field] = $(this).val();
        }
      });
    });
    button.html('<u>SUBMIT</u>');
  }

  // If the button text is "SUBMIT", then send the data to the server
  else if (button.text().toUpperCase() === "SUBMIT") {
    $.ajax({
      type: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/account',
      data: {
        data: userDetails,
        type: 'user_details'
      },
      success: function(data) {
        // If there is an error, show the error alert
        if (data.status === 'error') {
          let errorMessage = '';
          console.log(data.message);
          for (let field in data.message) {
            errorMessage += `${data.message[field].join(', ')}\n`;
          }
          console.log(errorMessage);
          Swal.fire({
            position: 'top-end',
            title: errorMessage.toUpperCase(),
            showConfirmButton: false,
            icon: 'error',
            timer: 3000,
            toast: true,
          });
        }

        // If the data is updated successfully, show the success alert
        else {
          button.html('<u>EDIT</u>');
          Swal.fire({
            position: 'top-end',
            title: 'Profile updated successfully'.toUpperCase(),
            showConfirmButton: false,
            icon: 'success',
            timer: 3000,
            toast: true,
          });

          // Change the input fields back to span fields with the updated data
          ["name", "email"].forEach(function (field) {
            let input = $("#txt_" + field);
            let text = input.val();
            input.replaceWith(`<span id="txt_${field}" class="text-xs sm:text-sm text-[#260065] w-full outline-none">${text}</span>`);
          });
        }
      },
    });
  }
});

$("#edit_address_button").click(function() {
  const button = $(this);

  // Take the original data from the fields
  const originalAddressData = {
    first_name: $("#txt_firstname").val(),
    last_name: $("#txt_lastname").val(),
    telephone: $("#txt_telephone").val(),
    address: $("#txt_address").val(),
    city: $("#txt_city").val(),
    postal_code: $("#txt_postal_code").val(),
    country: $("#txt_country").val()
  };
  const shippingDetails = JSON.parse(JSON.stringify(originalAddressData));

  // If the button text is "EDIT", then change the fields to input fields
  if (button.text().toUpperCase() === "EDIT") {
    ["firstname", "lastname", "telephone", "address", "city", "postal_code", "country"].forEach(function (field, index,) {
      let span = $("#txt_" + field);
      let text = span.text().trim();
      const inputType = "text";
      const placeholders = ["FIRST NAME", "LAST NAME", "PHONE NUMBER", "ADDRESS", "CITY", "POSTAL CODE", "COUNTRY"];

      // If the value in the span is one of the placeholders, then replace the span with an input field with the placeholder
      // Otherwise, replace the span with an input field with the value in the span and set the placeholder to the placeholder in the placeholders array
      if (placeholders.indexOf(text) !== -1) {
        span.replaceWith(`<input type="${inputType}" id="txt_${field}" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full h-full outline-none input-pulse" style="text-transform: uppercase;" placeholder="${placeholders[index]}">`);
      } else {
        span.replaceWith(`<input type="${inputType}" id="txt_${field}" class="text-xs sm:text-sm text-[#260065] placeholder:text-[#260065] w-full h-full outline-none input-pulse" style="text-transform: uppercase;" placeholder="${placeholders[index]}" value="${text}">`);
      }
      span.change(function () {if ($(this).val() !== originalAddressData[field]) {
        shippingDetails[field] = $(this).val();
      }
      });
    });
    button.html('<u>SUBMIT</u>');
  }

  // If the button text is "SUBMIT", then send the data to the server
  else if (button.text().toUpperCase() === "SUBMIT") {
    $.ajax({
      type: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/account',
      data: {
        data: shippingDetails,
        type: 'shipping_details'
      },
      success: function (data) {
        // If there is an error, show the error alert
        if (data.status === 'error') {
          let errorMessage = '';
          for (let field in data.message) {
            errorMessage += `${data.message[field].join(', ')}\n`;
          }
          Swal.fire({
            position: 'top-end',
            title: errorMessage.toUpperCase(),
            showConfirmButton: false,
            icon: 'error',
            timer: 3000,
            toast: true,
          });
        }

        // If the data is updated successfully, show the success alert
        else {
          button.html('<u>EDIT</u>');
          Swal.fire({
            position: 'top-end',
            title: 'Address updated successfully'.toUpperCase(),
            showConfirmButton: false,
            icon: 'success',
            timer: 3000,
            toast: true,
          });

          // Change the input fields back to span fields with the updated data
          ["firstname", "lastname", "telephone", "address", "city", "postal_code", "country"].forEach(function (field) {
            let input = $("#txt_" + field);
            let text = input.val();
            input.replaceWith(`<span id="txt_${field}" class="text-xs sm:text-sm text-[#260065] w-full outline-none">${text}</span>`);
          });
        }
      },
    });
  }
});
