<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="CSS/sitestyle.css">
    <link rel ="stylesheet" href="CSS/contactstyle.css">
    <title>Nikita Garbovsky - Contact</title>
    <link rel="shortcut icon" type="image/png" href="Images/2560188.png">
    <script src="JS/functionality.js"></script>
</head>
<body id="container"><!-- Main div container, extended to the whole page using css grid -->
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
            <img src="Images/news-1729539.jpg" alt="thinkpadimage">
            <h1 id="centered1">Have a question?</h1>
            <h1 id="centered2">Contact me on twitter, linkedin or the form below</h1>
        </section>
        <section id="contactFormSection">
            <form id="contactform">
                <div class="formItem">
                    <label class="contactformLabel">Name *</label><br>
                    <input type="text" name="name" placeholder="Your name here..." class="contactFormInput">
                </div>
                <div class="formItem">
                    <label class="contactformLabel">Email Address *</label><br>
                    <input type="text" name="email" placeholder="Your email address here..." class="contactFormInput">
                </div>
                <div class="formItem">
                    <label class="contactformLabel">Message *</label><br>
                    <textarea name="message" placeholder="Your message here..." id="contactFormInputTextarea"></textarea>
                </div>
                <div>
                    <div class="formItemButton">
                        <input type="submit" value="Send Message" class="buttonInput">
                    </div>
                    <div class="formItemButton">
                        <input type="reset" value="Reset" class="buttonInput">
                    </div>
                </div>
            </form>
        </section>
        <section id="contentLinkSection">
            <div id="contentLinks">
                <h1>Social media's & platforms</h1>
                <a href="https://github.com/NikitaGarbovsky" class="logoLink">
                    <img src="Images/github-image.png" alt="githubLogo" class="logoImage">
                </a>
                <a href="https://twitter.com/niki_garbovsky" class="logoLink">
                    <img src="Images/twitter.png" alt="twitterLogo" class="logoImage">
                </a>
                <a href="https://www.linkedin.com/in/nikita-garbovsky-b822911a3/">
                    <img src="Images/linkedin.png" alt="linkedinLogo" class="logoImage">
                </a>
                <a></a>
            </div>
        </section>
        <footer>
            <div id="footerDiv">
                <div id="footerNav">
                    <ul>
                        <a href="http://www.nikitagarbovsky.com/"><li>Home</li></a>
                        <a href="projects"><li>Projects</li></a>
                        <a href="#"><li>Blog</li></a>
                        <a href="about"><li>About</li></a>
                        <a href="contact"><li>Contact</li></a>
                    </ul>
                </div>
                <div id="referenceContainer">
                    <p class="referenceLink">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a>
                        from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
                    </p><br>
                    <p class="referenceLink">
                        Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a>
                        from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
                    </p>
                </div>
            </div>
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Jump to top">^^^</button>
</body>
</html>