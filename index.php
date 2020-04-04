<!DOCTYPE html>
<html lang="en">
<head>
    <link rel ="stylesheet" href="CSS/sitestyle.css">
    <link rel ="stylesheet" href="CSS/homestyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikita Garbovsky</title>
    <link rel="shortcut icon" type="image/png" href="Images/2560188.png">
    <script src="JS/functionality.js"></script>
</head>
<body id="container"> <!-- Main div container, extended to the whole page using css grid -->
        <header id="header">
            <h1>Nikita Garbovsky</h1>
            <div id="navbar">
                <ul>
                    <a href="http://www.nikitagarbovsky.com/"><li>Home</li></a>
                    <a href="projects.php"><li>Projects</li></a>
                    <a href="#"><li>Blog</li></a>
                    <a href="about.php"><li>About</li></a>
                    <a href="contact.php"><li>Contact</li></a>
                    <a href="https://github.com/NikitaGarbovsky" id="githubLink"><li>Github</li></a>
                </ul>
            </div>
        </header>
        <section id="mainImg">
            <img src="Images/new-zealand-325620.jpg" alt="sexynewzealandimage">
            <h1 id="centered1">Hi, welcome to my site</h1>
            <h1 id="centered2">Check out my projects below</h1>
        </section>
        <section id="content">
            <div class="preview">
                <div class="previewItem">
                    <div class="previewImage">
                        <a href="CodingProjects/websiteproject.html">
                        <img src="Images/websiteprojectimage.PNG" alt="websiteprojectImage">
                        </a>
                    </div>
                    <div class="previewItemDescription">
                        <p>Being the first personal project I worked on, this website was a construction 
                        of tools, technologies and resources I've learned throughout my study... <a href="#">Read more</a></p>
                    </div>
                    <div class="previewItemHeading">
                        <h1>nikitagarbovsky.com</h1>
                    </div>
                    <div class="logoLink">
                        <h1 class="linksHeading">Github Repo:</h1>
                        <a href="https://github.com/NikitaGarbovsky/nikitagarbovsky.com">
                        <img  src="Images/github-image.png" alt="githubLogo" class="logoImage">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div id="footerDiv">
                <div id="footerNav">
                    <ul>
                        <a href="http://www.nikitagarbovsky.com/"><li>Home</li></a>
                        <a href="projects.php"><li>Projects</li></a>
                        <a href="#"><li>Blog</li></a>
                        <a href="about.php"><li>About</li></a>
                        <a href="contact.php"><li>Contact</li></a>
                    </ul>
                </div>
            </div>
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Jump to top">^^^</button>
</body>
</html>