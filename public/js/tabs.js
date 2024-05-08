document.addEventListener("DOMContentLoaded", function() {
  const tabs = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  tabs.forEach(tab => {
    tab.addEventListener('click', function() {
      const target = this.getAttribute('data-target');

      // Hide all tab contents
      tabContents.forEach(content => {
        content.classList.add('hidden');
      });

      // Show the target tab content
      document.getElementById(target).classList.remove('hidden');

      // Update tab button styles
      tabs.forEach(t => {
        t.classList.remove('tab-active');
        t.classList.add('tab-inactive');
      });
      this.classList.remove('tab-inactive');
      this.classList.add('tab-active');

      // Store the current active tab in the session Storage
      sessionStorage.setItem('activeTab', target);
    });
  });

  // When the document loads
  // Get last active tab from session storage
  const activeTab = sessionStorage.getItem('activeTab');

  // If there is any saved active tab in session storage
  if (activeTab) {
    // Hide all tab contents
    tabContents.forEach(content => {
      content.classList.add('hidden');
    });

    // Show the saved tab content
    document.getElementById(activeTab).classList.remove('hidden');

    // Update tab button styles
    tabs.forEach(t => {
      if (t.getAttribute('data-target') === activeTab) {
        t.classList.remove('tab-inactive');
        t.classList.add('tab-active');
      } else {
        t.classList.remove('tab-active');
        t.classList.add('tab-inactive');
      }
    });
  }
});


