<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Logo Icon -->
    <link href="assets/img/c2.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Vendor CSS Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style3.css" rel="stylesheet">
</head>
<body>
    <div class="">
        <!-- MENU -->
        <?php include"Items-page/menu-bar.php" ?>
        <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row mt-2 justify-content-center">
                    <div class="col">
                        <div class="text-center">
                            <i class="fa-brands fa-php text-primary fs-icon" style="font-size: 200px;"></i>
                            <h3><a href="#about" class="text-color">PHP</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <hr>
                <marquee behavior="Wellcome to my Admin page" direction="" style="color:blue;font-family:Times New Roman;font-size: 25px;">PHP is the language we use to style a Web page.</marquee>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <h2 style="color:red">What is PHP?</h2><br>
                        <ul>
                            <li>PHP is an acronym for "PHP: Hypertext Preprocessor"</li>
                            <li>PHP is a widely-used, open source scripting language</li>
                            <li>PHP scripts are executed on the server</li>
                            <li>PHP is free to download and use</li>
                            <li>PHP is an amazing and popular language!</li>
                            <li>It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!</li>
                            <li>It is deep enough to run large social networks!</li>
                            <li>It is also easy enough to be a beginner's first server side language!</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <center>
                            <h2 style="color:red">PHP</h2><br>
                            <p style="font-size:19px;">The language for building web pages</p>
                            <button class="rounded btn btn-primary" style="margin-bottom:2px; width: 180px; margin:10px"><a href="#PHPIntroduction" class="text-light ">PHP Introduction</a></button> <br>
                            <button class="rounded btn btn-success " style="margin-bottom:2px; width: 180px; margin:10px"><a href="#PHPInstallation" class="text-light">PHP Installation</a></button> <br>
                            <button class="rounded btn btn-info " style="margin-bottom:2px; width: 180px; margin:10px" ><a href="#PHPSyntax" class="text-light">PHP Syntax</a></button> 
                        </center>
                    </div>
                </div>
                <hr>
                <!-- Start PHP Indroduction -->
                <div class="row" id="PHPIntroduction">
                    <div class="col">
                        <h2 style="color:red">PHP Introduction</h2><br>
                        <p>PHP code is executed on the server.</p>
                        <h4 Style="color:blue">What You Should Already Know</h4>
                        <p>Before you continue you should have a basic understanding of the following:</p>
                        <ul>
                            <li><a href="">HTML</a></li>
                            <li><a href="">CSS</a></li>
                            <li><a href="">JavaScript</a></li>
                        </ul>
                        <p>If you want to study these subjects first, find the tutorials on our<a href="/default.asp">Home page</a>.</p>
                        <h4 Style="color:blue">What is a PHP File?</h4>
                        <ul>
                            <li>PHP files can contain text, HTML, CSS, JavaScript, and PHP code</li>
                            <li>PHP code is executed on the server, and the result is returned to the browser as plain HTML</li>
                            <li>PHP files have extension "<code class="w3-codespan">.php</code>"</li>
                        </ul>
                        <h4 Style="color:blue">What Can PHP Do?</h4>
                        <ul>
                            <li>PHP can generate dynamic page content</li>
                            <li>PHP can create, open, read, write, delete, and close files on the server</li>
                            <li>PHP can collect form data</li>
                            <li>PHP can send and receive cookies</li>
                            <li>PHP can add, delete, modify data in your database</li>
                            <li>PHP can be used to control user-access</li>
                            <li>PHP can encrypt data</li>
                        </ul>
                        <p>With PHP you are not limited to output HTML. You can output images or PDF files. You can also output any text, such as XHTML and XML.</p>
                        <h4 Style="color:blue">Why use PHP?</h4>
                        <ul>
                            <li>PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>
                            <li>PHP is compatible with almost all servers used today (Apache, IIS, etc.)</li>
                            <li>PHP supports a wide range of databases</li>
                            <li>PHP is free. Download it from the official PHP resource: <a target="_blank" href="http://www.php.net/">www.php.net</a></li>
                            <li>PHP is easy to learn and runs efficiently on the server side</li>
                        </ul>
                        <h4 Style="color:blue">What's new in PHP 7 ?</h4>
                        <ul>
                            <li>PHP 7 is much faster than the previous popular stable release (PHP 5.6)</li>
                            <li>PHP 7 has improved Error Handling</li>
                            <li>PHP 7 supports stricter Type Declarations for function arguments</li>
                            <li>PHP 7 supports new operators (like the spaceship operator: <code class="w3-codespan">&lt;=&gt;</code>)</li>
                        </ul>
                    </div>
                </div>
                <!-- End PHP Installation -->
                <hr>
                <!-- Start  PHP Installation-->
                <div class="row" id="PHPInstallation">
                    <div class="col">
                        <h2 style="color:red">PHP Installation</h2><br>
                        <h4 Style="color:blue">What Do I Need?</h4>
                        <p>To start using PHP, you can:</p>
                        <ul>
                            <li>Find a web host with PHP and MySQL support</li>
                            <li>Install a web server on your own PC, and then install PHP and MySQL</li>
                        </ul>
                        <h4 Style="color:blue">Use a Web Host With PHP Support</h4>
                            <p>If your server has activated support for PHP you do not need to do anything.</p>
                            <p>Just create some <code class="w3-codespan">.php</code> files, place them in your web directory, and the server will automatically parse them for you.</p>
                            <p>You do not need to compile anything or install any extra tools.</p>
                            <p>Because PHP is free, most web hosts offer PHP support.</p>
                            <h4 Style="color:blue">Set Up PHP on Your Own PC</h4>
                            <p>However, if your server does not support PHP, you must:</p>
                            <ul>
                                <li>install a web server</li>
                                <li>install PHP</li>
                                <li>install a database, such as MySQL</li>
                            </ul>
                            <p>The official PHP website (PHP.net) has installation instructions for PHP:
                            <a target="_blank" href="http://php.net/manual/en/install.php">http://php.net/manual/en/install.php</a></p>
                        <h4 Style="color:blue">PHP Online Compiler / Editor</h4> 
                            <p>With w3schools' online PHP compiler, you can edit PHP code, and view the result in your browser.</p>
                        <div class="p-3 card">
                            <div class="editor-container w3-container">
                                    <div class="editor-child editor-edit">
                                    <h3 class="w3-hide-large w3-hide-medium">Example</h3>
                                    <div class="xw3-white notranslate htmlHigh w3-code " style="border-left:none;padding:20px 16px">
                                    <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>
                                    $txt = <span class="phpstringcolor" style="color:brown">"PHP"</span>;<br>
                                    <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"I love <span>$txt!</span>"</span>;<br>
                                    <span class="phptagcolor" style="color:red">?&gt;</span></span>
                                    </div>
                                    </div>
                                    <div id="editorEdit" class="w3-container editor-child editor-view w3-border w3-left-align" style="padding:20px 16px;">
                                    <code>I love PHP!</code><br>
                            </div>
                        </div>
                    </div><br>
                </div>
                <!-- End PHP Installation -->
                <hr>
                <!-- Start  PHP Syntax-->
                <div class="row" id="PHPSyntax">
                    <div class="col">
                        <h2 style="color:red">PHP Syntax</h2><br>
                        <p>A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</p>
                        <h4 Style="color:blue">Basic PHP Syntax</h4> 
                        <p>A PHP script can be placed anywhere in the document.</p>
                        <p>A PHP script starts with <code class="w3-codespan">&lt;?php</code> and ends with <code class="w3-codespan">?&gt;</code>:</p>
                        <div class="w3-code w3-border notranslate card p-3">
                            <div>
                                &lt;?php<br>
                                // PHP code goes here<br>
                                ?&gt;
                            </div>
                            <div>
                                <a class="btn btn-primary mt-3" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div><br>
                        <h4 Style="color:blue">PHP Case Sensitivity</h4> 
                        <p>In PHP, keywords (e.g. <code class="w3-codespan">if</code>, 
                        <code class="w3-codespan">else</code>, <code class="w3-codespan">while</code>, 
                        <code class="w3-codespan">echo</code>, etc.), classes, functions, 
                        and user-defined functions are not case-sensitive.</p>
                        <p>In the example below, all three echo statements below are equal and legal:</p>
                        <div class=" p-3 card">
                            <h3>Example</h3>
                            <div class="w3-code htmlHigh notranslate">
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
                                    <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="phpnumbercolor" style="color:red">
                                </span> <span class="phpkeywordcolor" style="color:mediumblue">ECHO</span> <span class="phpstringcolor" style="color:brown">"Hello World!&lt;br&gt;"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Hello World!&lt;br&gt;"</span>;<br><span class="phpnumbercolor" style="color:red">
                                </span> <span class="phpkeywordcolor" style="color:mediumblue">EcHo</span> <span class="phpstringcolor" style="color:brown">"Hello World!&lt;br&gt;"</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br>
                                    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
                                </div>
                            <div>
                                <a class="btn btn-primary mt-3" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div><br>
                        <div class="w3-note w3-panel">
                            <p><strong>Note:</strong> However; all variable names are case-sensitive!</p>
                        </div>
                        <p>Look at the example below; only the first statement will display the value of the 
                            <code class="w3-codespan">$color</code> variable! This is because 
                            <code class="w3-codespan">$color</code>, <code class="w3-codespan">$COLOR</code>, and 
                            <code class="w3-codespan">$coLOR</code> are treated as three 
                            different variables:
                        </p>
                        <div class="p-3 card">
                            <h3>Example</h3>
                            <div class="w3-code htmlHigh notranslate">
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
                                    <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$color = <span class="phpstringcolor" style="color:brown">"red"</span>;<br><span class="phpnumbercolor" style="color:red">
                                </span> <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"My car is "</span> . $color . <span class="phpstringcolor" style="color:brown">"&lt;br&gt;"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"My house is "</span> . $COLOR . <span class="phpstringcolor" style="color:brown">"&lt;br&gt;"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"My boat is "</span> . $coLOR . <span class="phpstringcolor" style="color:brown">"&lt;br&gt;"</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br>
                                    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
                            </div>
                            <div>
                                <a class="btn btn-primary mt-3" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <!-- End PHP Syntax -->
            </div>
        </section>
        <?php include"Items-page/Team.php" ?>
        <?php include"Items-page/footer.php" ?>
    </div>
</body>
</html>