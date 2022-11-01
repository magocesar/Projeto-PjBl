<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>
  <link rel="stylesheet" href="css/menu.css">
  <script src="homepage.js"></script>
</head>
<body>
<div class="app-container">
  <div class="app-header">
    <div class="app-header-left">
      <span class="app-icon"></span>
      <p class="app-name">FrAcademy</p>
      <div class="search-wrapper">
        <input class="search-input" type="text" placeholder="Search">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
          <defs></defs>
          <circle cx="11" cy="11" r="8"></circle>
          <path d="M21 21l-4.35-4.35"></path>
        </svg>
      </div>
    </div>
    <div class="app-header-right">
      <button class="add-btn" title="Add New Project">
        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
          <line x1="12" y1="5" x2="12" y2="19" />
          <line x1="5" y1="12" x2="19" y2="12" /></svg>
      </button>
      <button class="profile-btn">
        <img src="https://assets.codepen.io/3306515/IMG_2025.jpg" />
        <span>Gabi R.</span>
      </button>
    </div>
  </div>
  <div class="app-content">
    <div class="projects-section">
      <div class="projects-section-header">
        <p>Projects</p>
        <p class="time">November, 1</p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number">6</span>
            <span class="status-type">In Progress</span>
          </div>
          <div class="item-status">
            <span class="status-number">0</span>
            <span class="status-type">Upcoming</span>
          </div>
          <div class="item-status">
            <span class="status-number">6</span>
            <span class="status-type">Total Projects</span>
          </div>
        </div>
      </div>
      <div class="project-boxes jsGridView">
        <div class="project-box-wrapper">
          <div class="project-box" style="background-color: #fee4cb;">
            <div class="project-box-header">
              <span>November, 1, 2022</span>
              <div class="more-wrapper">
                <button class="project-btn-more">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" /></svg>
                </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Web Designing</p>
          <p class="box-content-subheader">Prototyping</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Progress</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 60%; background-color: #ff942e"></span>
          </div>
          <p class="box-progress-percentage">60%</p>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #e9e7fd;">
        <div class="project-box-header">
          <span>December 10, 2020</span>
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Testing</p>
          <p class="box-content-subheader">Prototyping</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Progress</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 50%; background-color: #4f3ff0"></span>
          </div>
          <p class="box-progress-percentage">50%</p>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box">
        <div class="project-box-header">
          <span>December 10, 2020</span>
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Svg Animations</p>
          <p class="box-content-subheader">Prototyping</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Progress</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 80%; background-color: #096c86"></span>
          </div>
          <p class="box-progress-percentage">80%</p>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #ffd3e2;">
        <div class="project-box-header">
          <span>December 10, 2020</span>
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">UI Development</p>
          <p class="box-content-subheader">Prototyping</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Progress</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 20%; background-color: #df3670"></span>
          </div>
          <p class="box-progress-percentage">20%</p>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #c8f7dc;">
        <div class="project-box-header">
          <span>December 10, 2020</span>
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Data Analysis</p>
          <p class="box-content-subheader">Prototyping</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Progress</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 60%; background-color: #34c471"></span>
          </div>
          <p class="box-progress-percentage">60%</p>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #d5deff;">
        <div class="project-box-header">
          <span>December 10, 2020</span>
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Web Designing</p>
          <p class="box-content-subheader">Prototyping</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Progress</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 40%; background-color: #4067f9"></span>
          </div>
          <p class="box-progress-percentage">40%</p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>