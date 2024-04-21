function animateProgress(progressId, textId, percent, duration) {
  const progress = document.getElementById(progressId);
  const progressText = document.getElementById(textId);

  const radius = parseFloat(progress.getAttribute('r'));
  const circumference = 2 * Math.PI * radius;

  let progressValue = 0;
  const interval = 10; // milliseconds
  const increment = (percent / duration) * interval;

  const animation = setInterval(() => {
    progressValue += increment;
    const progressOffset = circumference - (progressValue / 100) * circumference;
    progress.style.strokeDashoffset = progressOffset;
    progressText.textContent = `${Math.round(progressValue)}%`;

    if (progressValue >= percent) {
      clearInterval(animation);
    }
  }, interval);
}

// Example: Animate progress to 70% over 2 seconds
animateProgress('progress1', 'sp1', 85, 2000);
animateProgress('progress2', 'sp2', 80, 2000);
animateProgress('progress3', 'sp3', 85, 2000);
animateProgress('progress4', 'sp4', 80, 2000);
