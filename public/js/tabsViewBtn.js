document.addEventListener("DOMContentLoaded", function() {
  const tabs_view = document.querySelectorAll('.tab-btn-view');
  const tabs = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  function activateTab(targetId) {
    tabContents.forEach(content => content.classList.add('hidden'));
    document.getElementById(targetId).classList.remove('hidden');

    tabs.forEach(t => {
      t.classList.remove('tab-active', 'tab-inactive');
      t.classList.add(t.getAttribute('data-target') === targetId ? 'tab-active' : 'tab-inactive');
    });
  }

  tabs_view.forEach(tab_view => {
    tab_view.addEventListener('click', function(event) {
      event.preventDefault();

      const targetId = this.getAttribute('data-target');
      activateTab(targetId);
      history.pushState(null, null, `#${targetId}`);
    });
  });

  // Restore active tab on load
  const initialTab = location.hash.slice(1) || sessionStorage.getItem('activeTab');
  if (initialTab) {
    activateTab(initialTab);
  }

  // Handle back/forward navigation
  window.addEventListener('popstate', function() {
    const activeTab = location.hash.slice(1);
    if (activeTab) {
      activateTab(activeTab);
    }
  });
});
