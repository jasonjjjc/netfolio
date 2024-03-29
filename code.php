<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Examples of my web development work">
    <meta name="keywords" content="HTML, CSS, JavaScript, React, Next.js, TailwindCSS, SASS, examples, code, coding, functions, ">
    <meta name="author" content="Jason Chalangary">
    <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Code Examples</title>
</head>

<body>
    <div id="container">
        <header id="header">
            <div id="menu-wrapper" class="hides-nav">
                <svg id="menu" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>menu</title>
                    <path d="M2 6h28v6h-28zM2 14h28v6h-28zM2 22h28v6h-28z"></path>
                </svg>
            </div>
            <div id="nav">
                <a id="nav-initial" class="title" href="../index.php">
                    <h1>J</h1>
                </a>
                <ul id="nav-bar">
                    <li class="nav-bar-item"><a class="title" href="about-me.php">About Me</a></li>
                    <li class="nav-bar-item"><a class="title hides-nav" href="/index.php#portfolio-wrapper">My
                            Portfolio</a></li>
                    <li class="nav-bar-item"><a class="title" href="#">Code Examples</a></li>
                    <li class="nav-bar-item"><a class="title" href="current.php">SCS Scheme</a></li>
                    <li class="nav-bar-item"><a class="title hides-nav" href="#contact-wrapper">Contact Me</a></li>
                </ul>
                <a id="linkedin-button" href="https://linkedin.com/in/jason-chalangary" target="_blank"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28">
                        <title>linkedin</title>
                        <path d="M5.453 9.766v15.484h-5.156v-15.484h5.156zM5.781 4.984c0.016 1.484-1.109 2.672-2.906 2.672v0h-0.031c-1.734 0-2.844-1.188-2.844-2.672 0-1.516 1.156-2.672 2.906-2.672 1.766 0 2.859 1.156 2.875 2.672zM24 16.375v8.875h-5.141v-8.281c0-2.078-0.75-3.5-2.609-3.5-1.422 0-2.266 0.953-2.641 1.875-0.125 0.344-0.172 0.797-0.172 1.266v8.641h-5.141c0.063-14.031 0-15.484 0-15.484h5.141v2.25h-0.031c0.672-1.062 1.891-2.609 4.672-2.609 3.391 0 5.922 2.219 5.922 6.969z">
                        </path>
                    </svg></a>
            </div>
        </header>
        <div id="main">
            <section id="home-wrapper">
                <div id="home-content">
                    <div id="intro">
                        <div id="intro-titles">
                            <h1 class="title">Making</h1>
                            <h1 class="title">simple</h1>
                            <h1 class="title">code...</h1>
                            <h1 class="title">...that just works</h1>
                        </div>
                    </div>
                    <a id="scroll-down" class="hides-nav" href="#code-wrapper">
                        <p id="home-scroll-text">Scroll Down</p>
                        <svg id="home-scroll-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <title>keyboard_arrow_down</title>
                            <path d="M7.406 8.578l4.594 4.594 4.594-4.594 1.406 1.406-6 6-6-6z"></path>
                        </svg>
                    </a>
                </div>
            </section>
            <div id="code-wrapper" class="title">
                <div id="code-content">
                    <h2 id="code-title">Code Examples</h2>
                    <section id="code">
                        <a href="https://github.com/jasonjjjc" target="_blank" class="example">
                            <img src="../assets/thumbnails/code-next.png" alt="Next.js code example">
                            <div class="code-author">
                                <div class="code-author-quote">
                                    <h3>Using Next.JS Server-Side Rendering to pre-render the contents of the site</h3>
                                    <p class="code-author-summary">This function uses the Next.js GetStaticProps method
                                        to check whether the database URL environment variable is accessible and fetches
                                        the data from the database using the API key if it is. It uses async
                                        await syntax to ensure that the fetch has completed before using the json method
                                        to convert it to json format so that the record property can be stored as a prop
                                        variable called 'questions' that can be used to render the content of the
                                        page.<br><br> This code
                                        prevents repeated calls to the back-end server at each step of the site by
                                        fetching the entire data only once. The code checks that the environment
                                        variable is available to prevent needless server calls that will definitely fail
                                        without those variables. To facilitate fetching larger datasets, the entire
                                        process is run only
                                        once at build-time to pre-render the contents of the page so that run-time is
                                        always super-fast for users.</p>
                                    <p class="code-author-more">Read more &rarr;</p>
                                </div>
                            </div>
                        </a>
                        <a href="https://github.com/jasonjjjc" target="_blank" class="example">
                            <img src="../assets/thumbnails/code-react.png" alt="React code example">
                            <div class="code-author">
                                <div class="code-author-quote">
                                    <h3>Using a React map function to populate the page dynamically based on a project
                                        that is
                                        selected by the user.</h3>
                                    <p class="code-author-summary">This jsx code checks to see whether the user has
                                        selected a project and if they have it renders a div on the page with title text
                                        that is dynamically rendered based on the title property of the project that is
                                        selected. It then maps through all the other properties of the selected project
                                        to ensure that only desired properties are used to create sections on the new
                                        page and populate those sections with the values of those properties.<br><br>
                                        This code
                                        enables me to add 100 projects to this portfolio and the only change required
                                        for each project would be to add the text data to the json file instead of
                                        creating 100 pages and adding html and styles to them individually.</p>
                                    <p class="code-author-more">Read more &rarr;</p>
                                </div>
                            </div>
                        </a>
                        <a href="https://github.com/jasonjjjc" target="_blank" class="example">
                            <img src="../assets/thumbnails/code-javascript.png" alt="Javascript code example">
                            <div class="code-author">
                                <div class="code-author-quote">
                                    <h3>Combining Javascript's DOM manipulation capabilities and forEach method to
                                        create a function I can apply to any button to get the nav bar out of the way
                                        when the user is navigated to a section of the page.</h3>
                                    <p class="code-author-summary">I noticed that a few elements were all doing the same
                                        thing; hiding the navbar. So I gave them a css class called 'hides-nav' and used
                                        it as a javascript querySelectorAll target to attach a function.<br><br> The
                                        function
                                        first checks whether the element's ID is 'menu-wrapper' and uses conditional
                                        logic to toggle the navbar's display property between 'none' and 'flex' using
                                        hideNav and showNav callback functions respectively. If the element is not the
                                        menu-wrapper, it simply checks whether the navbar is visible and hides the
                                        navbar if it is.<br><br> This eliminated several duplications of eventListeners
                                        that
                                        were calling the hideNav and showNav functions, making the code more modular
                                        because I can reuse this code by adding the class 'hides-nav' to additional
                                        elements in the future.</p>
                                    <p class="code-author-more">Read more &rarr;</p>
                                </div>
                            </div>
                        </a>
                        <a href="https://github.com/jasonjjjc" target="_blank" class="example">
                            <img src="../assets/thumbnails/code-sql.png" alt="MySQL query">
                            <div class="code-author">
                                <div class="code-author-quote">
                                    <h3>Using SQL to monitor salary levels in a company</h3>
                                    <p class="code-author-quote-summary">
                                    <pre style="white-space: pre-wrap; overflow-x: auto;">
                                            <code>
SELECT 
e.emp_id AS "Employee ID",
e.emp_name AS "Employee Name",
e.job_name AS "Job Title",
TO_CHAR(e.salary, '$999,999.99') AS "Salary",
DATE_PART('year', AGE(CURRENT_DATE, e.hire_date)) * 365 +
DATE_PART('month', AGE(CURRENT_DATE, e.hire_date)) * 30 +
DATE_PART('day', AGE(CURRENT_DATE, e.hire_date)) AS "Days Worked",
d.dep_name AS "Department Name"
                                            
FROM employees e

INNER JOIN department d ON e.dep_id = d.dep_id

LEFT JOIN salary_grade s ON e.salary BETWEEN s.min_sal AND s.max_sal

ORDER BY e.job_name ASC, e.salary DESC, "Days Worked" DESC;
                                            </code>
                                        </pre>
                                    <br><br>
                                    The query uses the DATE_PART function to calculate the number of days an employee has worked at the company and sorts the results by job title, salary, and days worked. This allows managers to see whether employees are being rewarded for their loyalty to the company and whether they are being paid fairly compared to their peers.
                                    <br><br>
                                    The outcome of this query is a simple table that only contains the employee ID, name, job title, salary, days worked, and department name. This makes it easy for managers to see the information they need at a glance and they can immediately identify any department that is not paying their employees fairly.
                                    </p>
                                    <p class="code-author-more">Read more &rarr;</p>
                                </div>
                            </div>
                        </a>
                        <a href="https://github.com/jasonjjjc" target="_blank" class="example">
                            <img src="../assets/thumbnails/code-php.png" alt="PHP code example">
                            <div class="code-author">
                                <div class="code-author-quote">
                                    <h3>Using PHP $POST superglobals to access the data submitted from a contact form and create custom error responses</h3>
                                    <p class="code-author-summary">Handling errors in production code can introcude vulnerability to a website. If too much information is revealed, attackers will have the clues they need to hack the server and database.<br><br> 
                                        The best way to mitigate this is to have our php.ini file have error logging turned on during development but off on production, by logging any errors to a file outside the root of our website such as in MAMP's 'logs' folder where attackers are unable to access those logs as a back up, and finally by providing the user with minimal information required to correct invalid inputs.<br><br> 
                                        These protections should be balanced with ensuring that users always get feedback to enable a good experience on the site. On this site I used client-side validation with javascript to give instant feedback about empty fields and invalid inputs. Then I used a try/catch block to handle exceptions that occur when trying to connect to the database. Finally, in the code to the left, I handled individual errors with input data to prevent erroneous data getting into the database. It also serves as a backup check in case there is a problem with the user's browser javascript processing or if javascript was deactivated or blocked.<br><br>
                                        These measures combined ensure that the user always gets feedback about their inputs and that the server is protected from revealing too much information to attackers.
                                    </p>
                                    <p class="code-author-more">Read more &rarr;</p>
                                </div>
                            </div>
                        </a>
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
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <title>keyboard_arrow_up</title>
                            <path d="M7.406 15.422l-1.406-1.406 6-6 6 6-1.406 1.406-4.594-4.594z"></path>
                        </svg>
                        Back To Top
                    </a>
                </div>
            </section>
        </div>
    </div>


    <script src="../js/jquery.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>