<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web Developer Portfolio">
    <meta name="keywords" content="portfolio, project, projects, demonstration, work, demo, norfolk, norwich, ">
    <meta name="author" content="Jason Chalangary">
    <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <title>Jason Chalangary</title>

</head>

<body>
    <div id="container">
        <header id="header">
            <div id="menu-wrapper" class="hides-nav">
                <svg id="menu" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                    viewBox="0 0 32 32">
                    <title>menu</title>
                    <path d="M2 6h28v6h-28zM2 14h28v6h-28zM2 22h28v6h-28z"></path>
                </svg>
            </div>
            <div id="nav">
                <a id="nav-initial" class="title" href="#home-wrapper">
                    <h1>J</h1>
                </a>
                <ul id="nav-bar">
                    <li class="nav-bar-item"><a class="title" href="about-me.php">About Me</a></li>
                    <li class="nav-bar-item"><a class="title hides-nav" href="#portfolio-wrapper">My Portfolio</a></li>
                    <li class="nav-bar-item"><a class="title" href="code.php">Code Examples</a></li>
                    <li class="nav-bar-item"><a class="title" href="current.php">SCS Scheme</a></li>
                    <li class="nav-bar-item"><a class="title hides-nav" href="#contact-wrapper">Contact Me</a></li>
                </ul>
                <a id="linkedin-button" class="title" href="https://linkedin.com/in/jason-chalangary"
                    target="_blank"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="28"
                        viewBox="0 0 24 28">
                        <title>linkedin</title>
                        <path
                            d="M5.453 9.766v15.484h-5.156v-15.484h5.156zM5.781 4.984c0.016 1.484-1.109 2.672-2.906 2.672v0h-0.031c-1.734 0-2.844-1.188-2.844-2.672 0-1.516 1.156-2.672 2.906-2.672 1.766 0 2.859 1.156 2.875 2.672zM24 16.375v8.875h-5.141v-8.281c0-2.078-0.75-3.5-2.609-3.5-1.422 0-2.266 0.953-2.641 1.875-0.125 0.344-0.172 0.797-0.172 1.266v8.641h-5.141c0.063-14.031 0-15.484 0-15.484h5.141v2.25h-0.031c0.672-1.062 1.891-2.609 4.672-2.609 3.391 0 5.922 2.219 5.922 6.969z">
                        </path>
                    </svg></a>
            </div>
        </header>
        <div id="main">
            <section id="home-wrapper">
                <div id="home-content">
                    <div id="intro">
                        <div id="intro-titles">
                            <div>
                                <h1 class="title">My name is</h1>
                                <h1 class="title">Jason Chalangary</h1>
                            </div>
                            <h2 class="title">Welcome to my universe</h2>
                        </div>
                    </div>
                    <a id="scroll-down" class="hides-nav" href="#portfolio-wrapper">
                        <p id="home-scroll-text">Scroll Down</p>
                        <svg id="home-scroll-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24">
                            <title>keyboard_arrow_down</title>
                            <path d="M7.406 8.578l4.594 4.594 4.594-4.594 1.406 1.406-6 6-6-6z"></path>
                        </svg>
                    </a>
                </div>
            </section>
            <div id="portfolio-wrapper" class="title">
                <div id="portfolio-content">
                    <h3 id="portfolio-title">My Projects</h3>
                    <section id="portfolio">
                        <div class="project">
                            <a href="https://jasonjjjc.github.io/array/" target="_blank">
                                <img src="./assets/thumbnails/array.png" alt="PicMailr thumbnail">
                                <div class="hover-text">
                                    <h3>PicMailr</h3>
                                    <p class="summary">Created a picture generator than assigns pictures to email
                                        addresses</p>
                                    <div class="view-site">
                                        <p>View Site</p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://github.com/jasonjjjc/array" target="_blank" class="lower">
                                <ul>
                                    <li>HTML</li>
                                    <li>SASS</li>
                                    <li>Javascript</li>
                                    <li>jQuery</li>
                                </ul>
                                <p class="view-repo">View Github Repo</p>
                            </a>
                        </div>
                        <div class="project">
                            <a href="https://netmatters.jason-chalangary.netmatters-scs.co.uk/" target="_blank">
                                <img src="./assets/thumbnails/netmatters.png" alt="netmatters thumbnail">
                                <div class="hover-text">
                                    <h3>Netmatters</h3>
                                    <p class="summary">Recreated the Netmatters homepage and made every element on the
                                        page dynamic, interactive and responsive using php to populate and retrieve data.</p>
                                    <div class="view-site">
                                        <p>View Site</p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://github.com/jasonjjjc/netmatters-homepage-sass" target="_blank"
                                class="lower">
                                <ul>
                                    <li>PHP</li>
                                    <li>HTML</li>
                                    <li>SASS</li>
                                    <li>Javascript</li>
                                    <li>jQuery</li>
                                </ul>
                                <p class="view-repo">View Github Repo</p>
                            </a>
                        </div>
                        <div class="project">
                            <a href="https://carechange.com" target="_blank">
                                <img src="./assets/thumbnails/carechange.png" alt="CareChange thumbnail">
                                <div class="hover-text">
                                    <h3>CareChange</h3>
                                    <p class="summary">Created a questionnaire tool that enables users to quickly create
                                        complex reports.</p>
                                    <div class="view-site">
                                        <p>View Site</p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://github.com/jasonjjjc/carechange" target="_blank" class="lower">
                                <ul>
                                    <li>HTML</li>
                                    <li>TailwindCSS</li>
                                    <li>Next.js</li>
                                    <li>Vercel</li>
                                </ul>
                                <p class="view-repo">View Github Repo</p>
                            </a>
                        </div>
                        <div class="project">
                            <a href="https://letchat.co.uk" target="_blank">
                                <img src="./assets/thumbnails/letchat.png" alt="LetChat thumbnail">
                                <div class="hover-text">
                                    <h3>LetChat</h3>
                                    <p class="summary">Created a communication tool that enables landlords and tenants
                                        to log jobs that need doing and have live chat with data back-up.</p>
                                    <div class="view-site">
                                        <p>View Site</p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://github.com/SchoolOfCode/bc13_final-project_front-end-git-gud"
                                target="_blank" class="lower">
                                <ul>
                                    <li>HTML</li>
                                    <li>TailwindCSS</li>
                                    <li>Next.JS</li>
                                    <li>Typescript</li>
                                    <li>Firebase</li>
                                    <li>Netlify</li>
                                </ul>
                                <p class="view-repo">View Github Repo</p>
                            </a>
                        </div>
                        <div class="project">
                            <a href="https://jasonjjjc.github.io/flash-IT/" target="_blank">
                                <img src="./assets/thumbnails/flash-it.png" alt="flash-it thumbnail">
                                <div class="hover-text">
                                    <h3>Flash-IT</h3>
                                    <p class="summary">Created a tech interview flash card app that enables users to
                                        revise technical and behavioural questions with ease.</p>
                                    <div class="view-site">
                                        <p>View Site</p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://github.com/jasonjjjc/flash-IT" target="_blank" class="lower">
                                <ul>
                                    <li>HTML</li>
                                    <li>TailwindCSS</li>
                                    <li>React.js</li>
                                    <li>Github Pages</li>
                                </ul>
                                <p class="view-repo">View Github Repo</p>
                            </a>
                        </div>
                        <div class="project">
                            <a href="https://chat-portfolio-two.vercel.app/" target="_blank">
                                <img src="./assets/thumbnails/minfolio.png" alt="minfolio thumbnail">
                                <div class="hover-text">
                                    <h3>Minfolio</h3>
                                    <p class="summary">Created a minimalist portfolio designed for people with huge
                                        amounts of projects with a tech stack bar for filtering only relevant projects.
                                    </p>
                                    <div class="view-site">
                                        <p>View Site</p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://github.com/jasonjjjc/chat_portfolio" target="_blank" class="lower">
                                <ul>
                                    <li>HTML</li>
                                    <li>TailwindCSS</li>
                                    <li>Next.JS</li>
                                    <li>Typescript</li>
                                    <li>Github Pages</li>
                                </ul>
                                <p class="view-repo">View Github Repo</p>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
            <section id="contact-wrapper">
                <div id="contact-content">
                    <div id="contact">
                        <div id="contact-intro">
                            <h3>Get in Touch</h3>
                            <p>To discuss a project, learn to code, or talk about tech, say hi!</p>
                            <div id="contact-intro-links">
                                <a href="tel:'07446739324'">Call</a>
                                <a href="mailto:'jasonjjjc@gmail.com">Email</a>
                            </div>
                        </div>
                        <form id="contact-form">
                            <div id="contact-form-inputs">
                                <p>Or leave a message below and I'll get back to you.</p>
                                <div>
                                    <input type="text" id="first-name" name="first_name" placeholder="First name*" required />
                                    <input type="text" id="last-name" name="last_name" placeholder="Last name*" required />
                                </div>
                                <input type="email" id="email" name="email" placeholder="Email address*" required />
                                <input type="text" id="subject" name="subject" placeholder="Subject" />
                                <textarea id="contact-form-inputs-message" name="message" placeholder="Message*" required></textarea>
                            </div>
                            <button id="contact-form-submit" type="submit">Submit</button>
                        </form>                        
                    </div>
                    <a id="return" class="hides-nav" href="#home-wrapper">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <title>keyboard_arrow_up</title>
                            <path d="M7.406 15.422l-1.406-1.406 6-6 6 6-1.406 1.406-4.594-4.594z"></path>
                        </svg>
                        Back To Top
                    </a>
                </div>
            </section>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>

</html>