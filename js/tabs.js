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
    });
  });
});
