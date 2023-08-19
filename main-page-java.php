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
                            <i class="fa-brands fa-square-js text-primary fs-icon" style="font-size: 200px;"></i>
                            <h3><a href="#about" class="text-color">Java Script</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <hr>
                <marquee behavior="Wellcome to my Admin page" direction="" style="color:blue;font-family:Times New Roman;font-size: 25px;">Java Script is the language we use to style a Web page.</marquee>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <h2 style="color:red">What is Java Script?</h2><br>
                        <ul>
                            <li>JavaScript is the world's most popular programming language.</li>
                            <li>JavaScript is the programming language of the Web.</li>
                            <li>JavaScript is easy to learn.</li>
                            <li>JavaScript is the programming language of the Web.</li>
                            <li>JavaScript is the world's most popular programming language.</li>
                            <li>JavaScript is the world's most popular programming language.</li>
                            <li>JavaScript is easy to learn.</li>
                            <li>This tutorial will teach you JavaScript from basic to advanced.</li>
                            <li>JavaScript is the programming language of the Web.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <center>
                            <h2 style="color:red">JAVA SCRIPT</h2><br>
                            <p style="font-size:19px;">The language for building web pages</p>
                            <button class="rounded btn btn-primary" style="margin-bottom:2px; width: 180px; margin:10px"><a href="#JSIntroduction" class="text-light ">JS Introduction</a></button> <br>
                            <button class="rounded btn btn-success " style="margin-bottom:2px; width: 180px; margin:10px"><a href="#JavaScriptSyntax" class="text-light">JavaScript Syntax</a></button> <br>
                            <button class="rounded btn btn-info " style="margin-bottom:2px; width: 180px; margin:10px" ><a href="#JavaScriptOutput" class="text-light">JavaScript Output</a></button> 
                        </center>
                    </div>
                </div>
                <hr>
                <!-- Start JS Introduction -->
                <div class="row" id="JSIntroduction">
                    <div class="col" style="margin-top: 80px;">
                        <h2 style="color:red">Java Script Introduction</h2><br>
                        <p>This page contains some examples of what JavaScript can do.</p>
                        <h4 Style="color:blue">JavaScript Can Change HTML Content</h4>
                        <p>One of many JavaScript HTML methods is <code class="w3-codespan">getElementById()</code>.</p>
                        <p>The example below "finds" an HTML element (with id="demo"), and changes the element content (innerHTML) to "Hello JavaScript":</p>
                        <div class="p-3 card">
                            <h3>Example</h3>
                            <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
                            </span> document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"demo"</span>).<span class="jspropertycolor" style="color:black">innerHTML</span> = <span class="jsstringcolor" style="color:brown">"Hello JavaScript"</span>; </span></div>
                            <div>
                                <a class="btn btn-primary mt-3" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div><br>
                        <h4 Style="color:blue">JavaScript Can Change HTML Styles (CSS)</h4>
                        <p>Changing the style of an HTML element, is a variant of changing an HTML attribute:</p>
                        <div class="p-3 card">
                        <h3>Example</h3>
                        <div class="w3-code notranslate jsHigh">
                            <span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
                            </span> document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"demo"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">fontSize</span> = <span class="jsstringcolor" style="color:brown">"35px"</span>; </span></div>
                            <div>
                                <a class="btn btn-primary mt-3" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div><br>
                        <h4 Style="color:blue">JavaScript Can Hide HTML Elements</h4>
                        <p>Hiding HTML elements can be done by changing the <code class="w3-codespan">display</code> style:</p>
                        <div class="p-3 card">
                        <h3>Example</h3>
                        <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
                        </span> document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"demo"</span>).<span class="jspropertycolor" style="color:black">style</span>.<span class="jspropertycolor" style="color:black">display</span> = <span class="jsstringcolor" style="color:brown">"none"</span>; </span></div>
                        <div>
                            <a class="btn btn-primary mt-3" href="#" target="_blank">Try it Yourself »</a>
                        </div>
                    </div><br>
                </div>
                <!-- End JS Introduction -->
                <hr>
                <!-- Start JavaScript Syntax-->
                <div class="row" id="JavaScriptSyntax">
                    <div class="col" style="margin-top: 80px;">
                        <h2 style="color:red">Java Script Syntax</h2><br>
                        <h4 Style="color:blue">JavaScript syntax is the set of rules, how JavaScript programs are constructed:</h4>
                        <div class="p-3 card">
                            <div class="w3-code w3-large w3-border notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
                                </span><span class="commentcolor" style="color:green">// How to create variables:<br></span>
                                <span class="jskeywordcolor" style="color:mediumblue">var</span> x;<br>
                                <span class="jskeywordcolor" style="color:mediumblue">let</span> y;<br><span class="jsnumbercolor" style="color:red">
                                </span><br><span class="jsnumbercolor" style="color:red">
                                </span><span class="commentcolor" style="color:green">// How to use variables:<br></span>
                                x = <span class="jsnumbercolor" style="color:red">5</span>;<br>
                                y = <span class="jsnumbercolor" style="color:red">6</span>;<br>
                                <span class="jskeywordcolor" style="color:mediumblue">let</span> z = x + y;<br><span class="jsnumbercolor" style="color:red">
                                </span> </span>
                            </div>
                        </div><br>
                        <h4 Style="color:blue">JavaScript Operators</h4> 
                        <div class="p-3 card">
                             <h3>Example</h3>
                             <p>JavaScript uses <strong>arithmetic operators</strong> ( <code class="w3-codespan">+</code> <code class="w3-codespan">-</code> <code class="w3-codespan">*</code> <code class="w3-codespan">/</code> ) to 
                            <strong>compute</strong> values: </p>
                             <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black"><span class="jsnumbercolor" style="color:red">
                             </span>(<span class="jsnumbercolor" style="color:red">5</span> + <span class="jsnumbercolor" style="color:red">6</span>) * <span class="jsnumbercolor" style="color:red">10</span><br><span class="jsnumbercolor" style="color:red">
                             </span> </span></div>
                             <p>JavaScript uses an <strong>assignment operator</strong> ( <code class="w3-codespan">=</code> ) to <strong>assign</strong> values to variables: </p>
                             <div class="w3-code notranslate jsHigh"><span class="jscolor" style="color:black">
                             <span class="jskeywordcolor" style="color:mediumblue">let</span> x, y;<br>x = <span class="jsnumbercolor" style="color:red">5</span>;<br>
                             y = <span class="jsnumbercolor" style="color:red">6</span>; </span></div>
                            <div>
                                <a class="btn btn-primary mt-3" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div><br>
                        <h4 Style="color:blue">JavaScript Keywords</h4> 
                        <p>JavaScript <strong>keywords</strong> are used to identify actions to be performed.</p>
                        <div class="p-3 card">
                            <p>The<code class="m-1">let</code> keyword tells the browser to create variables:</p>
                            <h3>Example</h3>
                            <div><span style="color:black">
                            <span class="jskeywordcolor" style="color:mediumblue">let</span> x, y;<br>x = <span class="jsnumbercolor" style="color:red">5</span> + <span class="jsnumbercolor" style="color:red">6</span>;<br>y = x * <span class="jsnumbercolor" style="color:red">10</span>;<span class="jsnumbercolor" style="color:red">
                            </span> </span></div>
                            <div>
                                <a class="btn btn-primary mt-3" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                            <p>The<code class="w3-codespan">var</code> keyword also tells the browser to create variables:</p>

                            <h3>Example</h3>
                            <div class="w3-code notranslate jsHigh">
                                <span class="jscolor" style="color:black">
                                    <span class="jsnumbercolor" style="color:red"></span>
                                    <span class="jskeywordcolor" style="color:mediumblue">var</span> x, y;<br>x = <span class="jsnumbercolor" style="color:red">5</span> + <span class="jsnumbercolor" style="color:red">6</span>;<br>y = x * <span class="jsnumbercolor" style="color:red">10</span>;<span class="jsnumbercolor" style="color:red"></span> 
                                </span>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <!-- End JavaScript Syntax -->
                <hr>
                <!-- Start Java Script Output -->
                <div class="row" id="JavaScriptOutput">
                    <div class="col" style="margin-top: 80px;">
                        <h2 style="color:red">Java Script Output</h2><br>
                        <h4 Style="color:blue">JavaScript Display Possibilities</h4> 
                        <p>JavaScript can "display" data in different ways:</p>
                        <ul>
                            <li>Writing into an HTML element, using <code class="w3-codespan">innerHTML</code>.</li>
                            <li>Writing into the HTML output using <code class="w3-codespan">document.write()</code>.</li>
                            <li>Writing into an alert box, using <code class="w3-codespan">window.alert()</code>.</li>
                            <li>Writing into the browser console, using <code class="w3-codespan">console.log()</code>.</li>
                        </ul>
                        <h4 Style="color:blue">Using innerHTML</h4> 
                        <p>To access an HTML element, JavaScript can use the <code class="w3-codespan">document.getElementById(id)</code> method. </p>
                        <p>The <code class="w3-codespan">id</code> attribute defines the HTML element. The <code class="w3-codespan">innerHTML</code>  property defines the HTML content:</p>
                        <div class="p-3 card">
                        <h3>Example</h3>
                            <div class="w3-code notranslate htmlHigh">
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                <br>
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Web Page<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Paragraph<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                    <br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> id<span class="attributevaluecolor" style="color:mediumblue">="demo"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                <br>
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>script<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="jscolor" style="color:black"><br><span class="jsnumbercolor" style="color:red">
                                </span> document.<span class="jspropertycolor" style="color:black">getElementById</span>(<span class="jsstringcolor" style="color:brown">"demo"</span>).<span class="jspropertycolor" style="color:black">innerHTML</span> = <span class="jsnumbercolor" style="color:red">5</span> + <span class="jsnumbercolor" style="color:red">6</span>;<br><span class="jsnumbercolor" style="color:red">
                                </span>    </span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/script<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                <br>
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
                            </div>
                            <div>
                                <a class="btn btn-primary mt-3" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div><br>
                    </div>
                </div>
                <!-- End Java Script output -->
            </div>
        </section>
        <?php include"Items-page/Team.php" ?>
        <?php include"Items-page/footer.php" ?>
    </div>
</body>
</html>