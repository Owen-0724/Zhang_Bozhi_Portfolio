export function initThemeToggle({
    buttonId = 'theme-toggle',
    iconId = 'theme-icon',
    dayIcon = 'theme.svg',
    nightIcon = 'theme.svg',
  } = {}) {
    const toggleButton = document.getElementById(buttonId);
    const icon = document.getElementById(iconId);
    const body = document.body;
  
    if (!toggleButton || !icon) {
      console.warn('Theme toggle button or icon not found.');
      return;
    }
  
    const applyTheme = (theme) => {
      const isNight = theme === 'night-mode';
      body.classList.toggle('night-mode', isNight);
      icon.src = isNight ? nightIcon : dayIcon;
      toggleButton.setAttribute('aria-label', isNight ? 'Switch to Day Mode' : 'Switch to Night Mode');
      localStorage.setItem('theme', theme);
    };
  
    // Initialize theme from localStorage or default to day
    const savedTheme = localStorage.getItem('theme') || 'day-mode';
    applyTheme(savedTheme);
  
    // Toggle on click
    toggleButton.addEventListener('click', () => {
      const newTheme = body.classList.contains('night-mode') ? 'day-mode' : 'night-mode';
      applyTheme(newTheme);
    });
  }