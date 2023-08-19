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
                            <i class="fa-brands fa-css3-alt text-primary fs-icon" style="font-size: 200px;"></i>
                            <h3><a href="#about" class="text-color">CSS</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <hr>
                    <marquee behavior="Wellcome to my Admin page" direction="" style="color:blue;font-family:Times New Roman;font-size: 25px;">CSS is the language we use to style a Web page.</marquee>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">       
                        <h2 style="color:red">What is CSS?</h2><br>
                        <ul>
                            <li>CSS stands for Cascading Style Sheets</li>
                            <li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
                            <li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
                            <li>External stylesheets are stored in CSS files</li>
                            <li>CSS elements tell the browser how to display the content</li>
                            <li>CSS elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>
                        </ul> 
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <center>
                            <h2 style="color:red">CSS</h2><br>
                            <p style="font-size:19px;">The language for building web pages</p>
                            <button class="rounded btn btn-primary" style="margin-bottom:2px; width: 180px; margin:10px"><a href="#whyuseCSS" class="text-light ">Why Use CSS?</a></button> <br>
                            <button class="rounded btn btn-success " style="margin-bottom:2px; width: 180px; margin:10px"><a href="#CSSsyntax" class="text-light">CSS Syntax</a></button> <br>
                            <button class="rounded btn btn-info " style="margin-bottom:2px; width: 180px; margin:10px" ><a href="#howtoaddCSS" class="text-light">How To Add CSS</a></button> 
                        </center>
                    </div>
                </div>
                <hr>
                <div class="row" id="whyuseCSS">

                    <div class="col" style="margin-top: 80px;">
                        <h2 style="color:red">Why use CSS?</h2><br>
                        <h5>CSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes.</h5>
                        <h3>Example</h3>
                        <div class="p-3 card" ><span class="cssselectorcolor" style="color:brown">
                            body
                            <span style="color:black">{</span><span style="color:red"><br>&nbsp;&nbsp;background-color<span style="color:mediumblue"><span style="color:black">:</span> lightblue<span style="color:black">;</span></span><br></span><span style="color:black">}</span><br>
                            <br>h1
                            <span style="color:black">{</span><span style="color:red"><br>
                            &nbsp;&nbsp;color<span style="color:mediumblue"><span style="color:black">:</span> white<span style="color:black">;</span></span><br>
                            &nbsp;&nbsp;text-align<span style="color:mediumblue"><span style="color:black">:</span> center<span style="color:black">;</span></span><br>
                            </span><span style="color:black">}</span><br><br>
                            p
                            <span style="color:black">{</span><span style="color:red"><br>
                            &nbsp;&nbsp;font-family<span style="color:mediumblue"><span style="color:black">:</span> verdana<span style="color:black">;</span></span><br>
                            &nbsp;&nbsp;font-size<span style="color:mediumblue"><span style="color:black">:</span> 20px<span class="cssdelimitercolor" style="color:black">;</span></span><br>
                            </span><span class="cssdelimitercolor" style="color:black">}</span> </span>
                            <div>
                                <a class="btn btn-primary mt-1" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div>

                        <h4 Style="color:blue;margin-top: 80px;">CSS Solved a Big Problem</h4>
                        <p>HTML was NEVER intended to contain tags for formatting a web page!</p><br>
                        <p>HTML was created to describe the content of a web page, like:</p>
                        <p>&lt;h1&gt;This is a heading&lt;/h1&gt;</p>
                        <p>&lt;p&gt;This is a paragraph.&lt;/p&gt;</p>
                        <p> When tags like &lt;font&gt;, and color attributes were added to the HTML 3.2 
                            specification, it started a nightmare for web developers. Development of large 
                            websites, where fonts and color information were added to every single  
                            page, became a long and expensive process.</p>
                        <p>To solve this problem, the World Wide Web Consortium (W3C) created CSS.</p>
                        <p>CSS removed the style formatting from the HTML page!</p>
                        <h4 Style="color:blue">CSS Saves a Lot of Work!</h4>
                        <p>The style definitions are normally saved in external .css files.</p>
                        <p>With an external stylesheet file, you can change the look of an entire website by changing just one file!</p>
                    </div>
                </div>
                <hr>
                <div class="row" id="CSSsyntax">
                    <div class="col" style="margin-top: 80px;">
                        <h2 style="color:red">CSS Syntax</h2><br>
                        <h5>A CSS rule consists of a selector and a declaration block.</h5><br>
                        <h3 Style="color:blue">CSS Syntax</h3>
                        <img src="assets/img/css-syntax.webp" alt="" width="100%" >
                        <p>The selector points to the HTML element you want to style. </p>
                        <p>The declaration block contains one or more declarations separated by semicolons.</p>
                        <p>Each declaration includes a CSS property name and a value, separated by a colon. </p>
                        <p>Multiple CSS declarations are separated with semicolons, and declaration blocks are surrounded by curly braces.</p>
                        <h3 Style="color:blue">Example</h3>
                        <p>In this example all &lt;p&gt; elements will be center-aligned, with a red text color:</p>
                        <div class="p-3 card"><span style="color:brown">
                            p<span style="color:black">{</span><span style="color:red"><br>
                            &nbsp;&nbsp;color<span style="color:mediumblue"><span style="color:black">:</span> red<span style="color:black">;</span></span><br>
                            &nbsp;&nbsp;text-align<span style="color:mediumblue"><span style="color:black">:</span> center<span style="color:black">;</span></span><br>
                            </span><span class="cssdelimitercolor" style="color:black">}</span>
                            </span>
                            <div>
                                <a class="btn btn-primary mt-1" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row" id="howtoaddCSS"> 
                    <div class="col" style="margin-top: 80px;">
                        <h2 style="color:red"> How to Add CSS</h2><br>
                        <h5>When a browser reads a style sheet, it will format the HTML document according to the information in the style sheet.</h5><br>
                        <h3 Style="color:blue">Three Ways to Insert CSS</h3><br>
                        <p>There are three ways of inserting a style sheet:</p>
                        <ul>
                            <li>External CSS</li>
                            <li>Internal CSS</li>
                            <li>Inline CSS</li>
                        </ul>
                        <h4 Style="color:green">External CSS</h4><br>
                        <p>An external style sheet can be written in any text editor, and must be saved with a .css extension.</p>
                        <div class="p-3 card">
                            <h4>Example</h4>
                            <p>External styles are defined within the <link> element, inside the <head> section of an HTML page:</p>
                            <div>
                                <span style="color:brown"><span style="color:mediumblue">&lt;</span>!DOCTYPE<span style="color:red"> html</span><span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>html<span style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span> href<span class="attributevaluecolor" style="color:mediumblue">="mystyle.css"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                                <span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>This is a paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span> 
                            </div>
                            <div>
                                <a class="btn btn-primary mt-1" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div>

                        <h4 Style="color:green;margin-top: 80px;">Internal CSS</h4><br>
                        <p>An internal style sheet may be used if one single HTML page has a unique style.</p>
                        <p>The internal style is defined inside the &lt;style&gt; element, inside the head section.</p>
                        <div class="p-3 card">
                            <h4>Example</h4>
                            <p><p>Internal styles are defined within the &lt;style&gt; element, inside the &lt;head&gt; section of an HTML page:</p></p>
                            <div>
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>style<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="cssselectorcolor" style="color:brown"><br>body <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
                                background-color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> linen<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span><br><br>h1 <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> maroon<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
                                margin-left<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 40px<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span> <br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/style<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a 
                                heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span> 
                            </div>
                            <div>
                                <a class="btn btn-primary mt-1" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div>

                        <h4 Style="color:green;margin-top: 80px;">Inline CSS</h4><br>
                        <p>An inline style may be used to apply a unique style for a single element.</p>
                        <p>To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.</p>
                        <div class="p-3 card">
                            <h4>Example</h4>
                            <p>Inline styles are defined within the "style" attribute of the relevant element:</p>
                            <div class="w3-code notranslate htmlHigh">
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="color:blue;text-align:center;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>This 
                                is a heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="color:red;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
                                <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span> 
                            </div>
                            <div>
                                <a class="btn btn-primary mt-1" href="#" target="_blank">Try it Yourself »</a>
                            </div>
                        </div><br><br>
                    </div>
                </div>
            </div>
        </section>
        <?php include"Items-page/Team.php" ?>
        <?php include"Items-page/footer.php" ?>
    </div>
</body>
</html>