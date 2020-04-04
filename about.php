<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="CSS/sitestyle.css">
    <link rel ="stylesheet" href="CSS/aboutstyle.css">
    <title>Nikita Garbovsky - About</title>
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
            <img src="Images/computer-1245714.jpg" alt="2monitorimage">
            <h1 id="centeredHeading">A little bit about me</h1>
        </section>
        <section id="aboutsectionContent1">
            <div class="personalInfoElement">
                <h1>Nikita Garbovsky</h1><br>
                <p>I'm a full time I.T student in my final year of my degree, I'm an aspiring
                    full-stack Web Developer with an interest in large enterprise business applications,
                    ecommerce websites and content management systems (CMS).</p><br>
                    <br>
                <p>I have practical and academic skills in: C#, Php, JavaScript, CSS, HTML, Asp.net, SQL & SQL Server 
                    Management Studio </p>
            </div>
            <img class="images" id="imgofMe1" src="Images/20200225_164602.jpg" alt="pictureofme">
        </section>
        <section id="aboutsectionContent2">
            <div class="personalInfoElement" id="rightSideInfoElement">
                <h1>Plants for life</h1><br>
                <p>I went on a plant based vegan diet in May of 2017 and haven't looked back since. I've always 
                    loved food and I don't want the food I'm consuming to lead me to an early grave. I post alot of 
                    the foods I eat regularly on my social media's.
                    </p><br><br>
                <p>Sustainability, Health, Empathy and a love for all animals not just domesticated pets have provided 
                    a fundamental philsophy that I've applied to in my life. 
                </p>
            </div>
            <img class="images" id="imgofMe2" src="Images/plant based.jpg" alt="pictureofme">
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
            </div>
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Jump to top">^^^</button>
</body>
</html>