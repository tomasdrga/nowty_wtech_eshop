// Function to handle logout button click and remove activeTab from sessionStorage
$(document).on("click", ".logout-btn", function(){
  sessionStorage.removeItem("activeTab");
});
