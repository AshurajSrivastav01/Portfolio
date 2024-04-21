<style>
  /* Global Reset */
.progress-container {
  position: relative;
  width: 198px; /* Adjust width as needed */
  height: 198px; /* Adjust height as needed */
  background-color: #333;
}

.progress-bar {
  fill: none;
  stroke: #6ff2e5; /* Progress bar color */
  stroke-width: 10; /* Progress bar thickness */
  stroke-linecap: round;
  stroke-dasharray: 251;
  stroke-dashoffset: 251;
}
.progress-bar
{
  background-color: #020f1c !important;
}
.progress-text {
  font-family: Arial, sans-serif;
  font-size: 12px; /* Progress text font size */
  fill: #6ff2e5; /* Progress text color */
  text-anchor: middle;
  dominant-baseline: middle;
}

/* Circular Progress Bar Container */
.cbar {
  width: 100%; /* Occupy full width */
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px 0; /* Adjust margin as needed */
}

/* Skill Text */
.pskill-text {
  font-size: 1.7rem;
  margin-top: 0.5rem;
  font-weight: 600;
  color: #6ff2e5;
}

</style>
<div class="cbar">
    <div class="progress-container">
      <svg viewBox="0 0 100 100" class="progress-bar">
          <circle cx="50" cy="50" r="40"></circle>
          <circle cx="50" cy="50" r="40" id="progress1">
          </circle>
          <text x="50" y="45" class="progress-text" id="sp1">0%</text>
        </svg>
      </div>
      <p class="pskill-text">Problem-Solving</p>
  </div>

  <div class="cbar">
    <div class="progress-container">
      <svg viewBox="0 0 100 100" class="progress-bar">
          <circle cx="50" cy="50" r="40"></circle>
          <circle cx="50" cy="50" r="40" id="progress2">
          </circle>
          <text x="50" y="45" class="progress-text" id="sp2">0%</text>
        </svg>
      </div>
      <p class="pskill-text">Teamwork</p>
  </div>

  <div class="cbar">
    <div class="progress-container">
      <svg viewBox="0 0 100 100" class="progress-bar">
          <circle cx="50" cy="50" r="40"></circle>
          <circle cx="50" cy="50" r="40" id="progress3">
          </circle>
          <text x="50" y="45" class="progress-text" id="sp3">0%</text>
        </svg>
      </div>
      <p class="pskill-text">Time Management</p>
  </div>

  <div class="cbar">
    <div class="progress-container">
      <svg viewBox="0 0 100 100" class="progress-bar">
          <circle cx="50" cy="50" r="40"></circle>
          <circle cx="50" cy="50" r="40" id="progress4">
          </circle>
          <text x="50" y="45" class="progress-text" id="sp4">0%</text>
        </svg>
      </div>
      <p class="pskill-text">Adaptability</p>
  </div>
<script src="circural-bar.js"></script>
