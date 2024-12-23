<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="./favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  body {
    width: 100%;
    height: 100vh;
    font-family: "IBM Plex Sans", sans-serif;
  }
  
  .left,
  .right {
    display: flex;
    align-items: center;
  }

  .navbar {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: none;
    border-bottom: 1px solid #7e7c7c39;
  }
  .dropdown {
    position: relative;
    padding: 10px 20px;
  }
  .dropdown:hover {
    background-color: #c0c0c079;
    cursor: pointer;
  }
  .menu_hover {
    padding: 10px 20px;
  }
  .menu_hover:hover {
    background-color: #c0c0c079;
    cursor: pointer;
  }
  .dropdown-menu {
    top: 45px;
    right: -100px;
    position: absolute;
    display: none;
    flex-direction: column;
    padding: 0;
    box-shadow: 0px 2px 6px 2px #ccc;
  }
  .d_show {
    display: flex;
  }
  .dropdown-menu a {
    border: 1px solid #6763631b;
  }
  .dropdown-menu a:hover {
    background-color: #79767633;
    cursor: pointer;
    color: black;
  }
  .pad {
    color: #525252;
    display: block;
  }
  .pad_2 {
    font-size: 14px;
    border: none !important;
    padding: 5px 0;
    padding-left: 10px;
    margin-left: 20px;
  }
  .colm {
    height: 540px;
    margin-top: 30px;
  }
  .c_height {
    overflow-y: scroll;
    height: 500px;
  }
  .drop-anch {
    padding: 10px 35px;
  }
  .dd1 {
    width: 250px;
  }
  .mega {
    position: static;
  }
  .mega-menu {
    flex-direction: row;
    left: 0;
    position: absolute;
    width: 100%;
  }
  .box {
    display: flex;
    flex-wrap: wrap;
  }
  .boxes {
    margin: 0;
    height: 80px;
    width: 350px;
  }
  .search {
    display: none;
  }
  .search_box {
    display: none;
    z-index: 1;
  }
  input {
    position: absolute;
    top: 0;
    right: 120px;
    width: 1260px;
    height: 45px;
    outline: none;
    border-bottom: 2px solid blue;
    border-top: none;
    border-left: none;
    border-right: none;
    background-color: #efeeee;
    padding: 5px 10px;
  }
  .bar_btn {
    position: absolute;
    top: 10px;
    right: 200px;
    color: #52525282;
  }
  .bar_btn2 {
    position: absolute;
    top: 14px;
    right: 140px;
  }
        </style>
    <title>IBM - India</title>
  </head>
  <body>
    <div class="contain">
      <div class="navbar">
        <div class="right">
          <a href="" class="px-5 dropdown"
            ><svg
              focusable="false"
              preserveAspectRatio="xMidYMid meet"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              aria-hidden="true"
              width="58px"
              height="23px"
              viewBox="0 0 58 23"
              data-di-res-id="97ac8063-482910f0"
              data-di-rand="1715943027926"
            >
              <!---->
              <g
                id="Page-1"
                stroke="none"
                stroke-width="1"
                fill="none"
                fill-rule="evenodd"
              >
                <g id="ibm-8-bar-logo--h15-copy" fill="#161616">
                  <path
                    d="M58,21.4666667 L58,23 L50.3684211,23 L50.3684211,21.4666667 L58,21.4666667 Z M39.6842105,21.4666667 L39.6842105,23 L32.0526316,23 L32.0526316,21.4666667 L39.6842105,21.4666667 Z M45.6385329,21.4666667 L45.0245693,23 L44.41871,21.4666667 L45.6385329,21.4666667 Z M28.5421053,21.4666667 C27.4471432,22.4188667 26.0029202,23 24.3905263,23 L24.3905263,23 L12.2105263,23 L12.2105263,21.4666667 Z M10.6842105,21.4666667 L10.6842105,23 L0,23 L0,21.4666667 L10.6842105,21.4666667 Z M39.6842105,18.4 L39.6842105,19.9333333 L32.0526316,19.9333333 L32.0526316,18.4 L39.6842105,18.4 Z M46.8318522,18.4 L46.2377311,19.9333333 L43.8212353,19.9333333 L43.2226426,18.4 L46.8318522,18.4 Z M30.0684211,18.4 C29.9306437,18.9451697 29.7105614,19.4599515 29.4273684,19.9333333 L29.4273684,19.9333333 L12.2105263,19.9333333 L12.2105263,18.4 Z M10.6842105,18.4 L10.6842105,19.9333333 L0,19.9333333 L0,18.4 L10.6842105,18.4 Z M58,18.4 L58,19.9333333 L50.3684211,19.9333333 L50.3684211,18.4 L58,18.4 Z M54.9473684,15.3333333 L54.9473684,16.8666667 L50.3684211,16.8666667 L50.3684211,15.3333333 L54.9473684,15.3333333 Z M39.6842105,15.3333333 L39.6842105,16.8666667 L35.1052632,16.8666667 L35.1052632,15.3333333 L39.6842105,15.3333333 Z M48.0292704,15.3333333 L47.4295831,16.8666667 L42.6233978,16.8666667 L42.019006,15.3333333 L48.0292704,15.3333333 Z M29.8547368,15.3333333 C29.991899,15.8221879 30.0684211,16.3357152 30.0684211,16.8666667 L30.0684211,16.8666667 L24.4210526,16.8666667 L24.4210526,15.3333333 Z M19.8421053,15.3333333 L19.8421053,16.8666667 L15.2631579,16.8666667 L15.2631579,15.3333333 L19.8421053,15.3333333 Z M7.63157895,15.3333333 L7.63157895,16.8666667 L3.05263158,16.8666667 L3.05263158,15.3333333 L7.63157895,15.3333333 Z M54.9473684,12.2666667 L54.9473684,13.8 L50.3684211,13.8 L50.3684211,12.2666667 L54.9473684,12.2666667 Z M39.6842105,12.2666667 L39.6842105,13.8 L35.1052632,13.8 L35.1052632,12.2666667 L39.6842105,12.2666667 Z M49.2252679,12.2666667 L48.6284686,13.8 L41.4089474,13.8 L40.8168134,12.2666667 L49.2252679,12.2666667 Z M27.9773684,12.2666667 C28.5037637,12.6994848 28.9570701,13.2181697 29.3052632,13.8 L29.3052632,13.8 L15.2631579,13.8 L15.2631579,12.2666667 Z M7.63157895,12.2666667 L7.63157895,13.8 L3.05263158,13.8 L3.05263158,12.2666667 L7.63157895,12.2666667 Z M44.5987396,9.2 L45.0263158,10.4393515 L45.4535426,9.2 L54.9473684,9.2 L54.9473684,10.7333333 L50.3684211,10.7333333 L50.3684211,9.32433939 L49.8494737,10.7333333 L40.1878947,10.7333333 L39.6842105,9.3242 L39.6842105,10.7333333 L35.1052632,10.7333333 L35.1052632,9.2 L44.5987396,9.2 Z M7.63157895,9.2 L7.63157895,10.7333333 L3.05263158,10.7333333 L3.05263158,9.2 L7.63157895,9.2 Z M29.3052632,9.2 C28.9570701,9.7818303 28.5037637,10.3003758 27.9773684,10.7333333 L27.9773684,10.7333333 L15.2631579,10.7333333 L15.2631579,9.2 Z M54.9473684,6.13333333 L54.9473684,7.66666667 L45.9831118,7.66666667 L46.5234001,6.13333333 L54.9473684,6.13333333 Z M43.534302,6.13333333 L44.0745993,7.66666667 L35.1052632,7.66666667 L35.1052632,6.13333333 L43.534302,6.13333333 Z M30.0684211,6.13333333 C30.0684211,6.66414545 29.991899,7.17767273 29.8547368,7.66666667 L29.8547368,7.66666667 L24.4210526,7.66666667 L24.4210526,6.13333333 Z M19.8421053,6.13333333 L19.8421053,7.66666667 L15.2631579,7.66666667 L15.2631579,6.13333333 L19.8421053,6.13333333 Z M7.63157895,6.13333333 L7.63157895,7.66666667 L3.05263158,7.66666667 L3.05263158,6.13333333 L7.63157895,6.13333333 Z M42.4774196,3.06666667 L43.0079113,4.6 L32.0527757,4.6 L32.0526316,3.06666667 L42.4774196,3.06666667 Z M58,3.06666667 L58,4.6 L47.0390632,4.6 L47.5903678,3.06666667 L58,3.06666667 Z M29.4273684,3.06666667 C29.7105614,3.54004848 29.9306437,4.0548303 30.0684211,4.6 L30.0684211,4.6 L12.2105263,4.6 L12.2105263,3.06666667 Z M10.6842105,3.06666667 L10.6842105,4.6 L0,4.6 L0,3.06666667 L10.6842105,3.06666667 Z M41.4056725,0 L41.9462722,1.53333333 L32.05278,1.53333333 L32.0526316,0 L41.4056725,0 Z M58,0 L58,1.53333333 L48.1188427,1.53333333 L48.6466706,0 L58,0 Z M24.3905263,0 C25.9912083,0 27.4472798,0.581133333 28.5421053,1.53333333 L28.5421053,1.53333333 L12.2105263,1.53333333 L12.2105263,0 Z M10.6842105,0 L10.6842105,1.53333333 L0,1.53333333 L0,0 L10.6842105,0 Z"
                    id="Combined-Shape"
                  ></path>
                </g>
              </g>
            </svg>
          </a>
          <h5 class="fw-lighter mt-1" style="color: #a09f9f96">|</h5>
          <div class="dropdown" onclick="Show(this)">
            <a href="JavaScript:void(0)" class="nav-link pad slidetoggle"
              >Think 2024 <i class="fa-solid fa-angle-down ps-2"></i
            ></a>
            <div class="dropdown-menu dd1">
              <a href="" class="nav-link drop-anch pad">Overview</a>
              <a href="" class="nav-link drop-anch pad">Experience</a>
              <a href="" class="nav-link drop-anch pad">Agenda</a>
              <a href="" class="nav-link drop-anch pad">Partner Day</a>
              <a href="" class="nav-link drop-anch pad">Think on Tour</a>
              <a href="" class="nav-link drop-anch pad">FAQ</a>
            </div>
          </div>
          <div class="dropdown mega" onclick="Show(this)">
            <a href="JavaScript:void(0)" class="nav-link pad px-2 slidetoggle"
              >Products <i class="fa-solid fa-angle-down ps-2"></i
            ></a>
            <div class="dropdown-menu mega-menu">
              <div class="col-lg-3 colm">
                <div class="c_height">
                  <a href="" class="pad pad_2 nav-link">Featured</a>
                  <a href="" class="pad pad_2 nav-link"
                    >AI & machine learning</a
                  >
                  <a href="" class="pad pad_2 nav-link">Analytics</a>
                  <a href="" class="pad pad_2 nav-link">Asset Management</a>
                  <a href="" class="pad pad_2 nav-link">Business Automation</a>
                  <a href="" class="pad pad_2 nav-link">Compute and servers</a>
                  <a href="" class="pad pad_2 nav-link"
                    >Containers and serverless compute</a
                  >
                  <a href="" class="pad pad_2 nav-link">Databases</a>
                  <a href="" class="pad pad_2 nav-link">DevOps</a>
                  <a href="" class="pad pad_2 nav-link">IT automation</a>
                  <a href="" class="pad pad_2 nav-link">Middleware</a>
                  <a href="" class="pad pad_2 nav-link">Network</a>
                  <a href="" class="pad pad_2 nav-link">Operating systems</a>
                  <a href="" class="pad pad_2 nav-link">Quantum</a>
                  <a href="" class="pad pad_2 nav-link">Security & identity</a>
                  <a href="" class="pad pad_2 nav-link">Storage</a>
                  <a href="" class="pad pad_2 nav-link">Supply chain</a>
                </div>
                <a
                  href=""
                  class="nav-link text-primary fs-6 ps-4 border border-none py-2"
                  >View all Products <i class="fa-solid fa-arrow-right"></i
                ></a>
              </div>

              <div class="col-lg-9 colm">
                <h3 class="mb-2">Featured</h3>
                <div class="box">
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">API Connect</h6>
                    <p>
                      Software to rapidly create, protect, socialize and manage
                      API's
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Robotic Process Automation</h6>
                    <p>Software to automate workflow and business processes</p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Environmental Intelligence suite</h6>
                    <p>
                      SaaS for predicting and responding to weather and climate
                      events
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">API Connect</h6>
                    <p>
                      Software to rapidly create, protect, socialize and manage
                      API's
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Robotic Process Automation</h6>
                    <p>Software to automate workflow and business processes</p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Environmental Intelligence suite</h6>
                    <p>
                      SaaS for predicting and responding to weather and climate
                      events
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">API Connect</h6>
                    <p>
                      Software to rapidly create, protect, socialize and manage
                      API's
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Robotic Process Automation</h6>
                    <p>Software to automate workflow and business processes</p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Environmental Intelligence suite</h6>
                    <p>
                      SaaS for predicting and responding to weather and climate
                      events
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown mega" onclick="Show(this)">
            <a href="JavaScript:void(0)" class="nav-link pad px-2 slidetoggle"
              >Solutions <i class="fa-solid fa-angle-down ps-2"></i
            ></a>
            <div class="dropdown-menu mega-menu">
              <div class="col-lg-3 colm">
                <a href="" class="pad pad_2 nav-link">Featured</a>
                <a href="" class="pad pad_2 nav-link">AI & machine learning</a>
                <a href="" class="pad pad_2 nav-link">Analytics</a>
                <a href="" class="pad pad_2 nav-link">Asset Management</a>
                <a href="" class="pad pad_2 nav-link">Business Automation</a>
                <a href="" class="pad pad_2 nav-link">Compute and servers</a>
              </div>
              <div class="col-lg-9 colm">
                <h2>Automation</h2>
                <div class="box">
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">API Connect</h6>
                    <p>
                      Software to rapidly create, protect, socialize and manage
                      API's
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Robotic Process Automation</h6>
                    <p>Software to automate workflow and business processes</p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Environmental Intelligence suite</h6>
                    <p>
                      SaaS for predicting and responding to weather and climate
                      events
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">API Connect</h6>
                    <p>
                      Software to rapidly create, protect, socialize and manage
                      API's
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Robotic Process Automation</h6>
                    <p>Software to automate workflow and business processes</p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Environmental Intelligence suite</h6>
                    <p>
                      SaaS for predicting and responding to weather and climate
                      events
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">API Connect</h6>
                    <p>
                      Software to rapidly create, protect, socialize and manage
                      API's
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown mega" onclick="Show(this)">
            <a href="JavaScript:void(0)" class="nav-link pad px-2 slidetoggle"
              >Support <i class="fa-solid fa-angle-down ps-2"></i
            ></a>
            <div class="dropdown-menu mega-menu">
              <div class="col-lg-9 colm">
                <h3>Community <i class="fa-solid fa-arrow-right"></i></h3>
                <div class="box">
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Developer</h6>
                    <p>
                      Software to rapidly create, protect, socialize and manage
                      API's
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Robotic Process Automation</h6>
                    <p>Software to automate workflow and business processes</p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Environmental Intelligence suite</h6>
                    <p>
                      SaaS for predicting and responding to weather and climate
                      events
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                  <a class="boxes pad pad_2 nav-link pe-5">
                    <h6 class="mb-0">Instana</h6>
                    <p>
                      Software for application performance monitoring and
                      automation
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="left">
         
          <div class="search-container">
            <div class="search_box">
              <input
                type="text"
                placeholder="Search all of IBM"
                class="search-input"
                id="search"
              />
              <a href="javascript:void(0)" class="search-btn bar_btn"
                ><i
                  class="fa-solid fa-magnifying-glass"
                  style="color: #3f3f3fc8"
                ></i
              ></a>
              <a href=""
                ><i
                  class="fa-solid fa-xmark bar_btn2"
                  style="color: #3f3f3fc8; font-size: 20px"
                ></i
              ></a>
            </div>
            <a
              href="javascript:void(0)"
              onclick="Show_search()"
              class="search-btn menu_hover"
            >
              <i class="fa-solid fa-magnifying-glass" style="color: #525252"></i
            ></a>
          </div>

          <a href="" class="menu_hover"
            ><i class="fa-regular fa-message" style="color: #525252"></i
          ></a>
          <a href="" class="me-2 menu_hover"
            ><i class="fa-regular fa-user" style="color: #525252"></i
          ></a>
        </div>
      </div>
    </div>

    <script>
      function Show(ele) {
        let dropdownMenu = ele.querySelector(".dropdown-menu");

        if (dropdownMenu.classList.contains("d_show")) {
          dropdownMenu.classList.remove("d_show");
        } else {
          let boxes = document.querySelectorAll(".dropdown-menu");
          for (let i = 0; i < boxes.length; i++) {
            boxes[i].classList.remove("d_show");
          }
          dropdownMenu.classList.add("d_show");
        }
      }

      let fn = true;
      function Show_search() {
        if (fn === true) {
          document.querySelector(".search_box").style.display = "block";
          fn = false;
        }
      }

      $(".slidetoggle").click(function () {
        $(this).children("i").toggleClass("fa-angle-up");
      });
    </script>



