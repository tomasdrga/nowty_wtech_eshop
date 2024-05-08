window.addEventListener('hashchange', function() {
  loadTab(window.location.hash.slice(1));
});

document.addEventListener("DOMContentLoaded", function() {
  loadTab(window.location.hash.slice(1));

  const tabs = document.querySelectorAll('.tab-btn');

  tabs.forEach(tab => {
    tab.addEventListener('click', function() {
      const target = this.getAttribute('data-target');
      window.location.hash = target;

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

function loadTab(target) {
  const tabs = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  // If there's no target, or we couldn't find a tab or a content with the given target, we don't do anything
  if (!target || !document.getElementById(target) || ![...tabs].some(tab => tab.getAttribute('data-target') === target)) {
    if(!target){
      const defaultTab = document.querySelector('.tab-btn.tab-active');
      if (defaultTab) {
        target = defaultTab.getAttribute('data-target');
      }
      history.replaceState(null, null, '#' + target);
    } else{
      window.location.href = '/404';
    }
  }

  // Hide all tab contents
  tabContents.forEach(content => {
    content.classList.add('hidden');
  });

  // Show the target tab content
  document.getElementById(target).classList.remove('hidden');

  // Update tab button styles
  tabs.forEach(tab => {
    tab.classList.remove('tab-active');
    tab.classList.add('tab-inactive');

    // If this is the active tab, add 'tab-active'
    if (tab.getAttribute('data-target') === target) {
      tab.classList.remove('tab-inactive');
      tab.classList.add('tab-active');
    }
  });
}