        <!-- Please do not put code between page and footer to prevent sticky-footer / Ne pas placer de code ici pour ne pas supprimer le sticky-footer-->
        <div class="footer-print">&copy; 2014 | Company name</div> <!-- This footer will replace next footer on print -->
        <!-- sticky-footer -->
        <div class="footer-container">
            <footer class="wrapper">
                <center><h1>Simplex-UI <br><small>Free CSS Starter Kit</small></h1></center>
                <div class="grid">
                    <div class="col-3">
                        <h3>About Simplex</h3>
                        Simplex is born on 2014, I've the idea to create my own CSS template and to
                        share it with other webmaster, Simplex must to be simple to use, he must be
                        without js as for as I can, he is fully responsive and in a way mobile-ready. 
                        I've added a lot of themes, they are easy to change with a CSS tag.
                    </div>
                    <div class="col-3">
                        <h3>About Author</h3>
                          Simplex-UI is provide by Chk (Chikoumi), i'm a french guys who really love to create
                          website, i can use php, html, css, js and a lot of langage related to linux. I'm a member of
                          Harmony-Hosting's support who sell VPS. If you want to know more about me, you can read 
                          <a target="_blank" href="http://chikoumi.com" class="lbl yellow">my website</a>
                    </div>
                    <div class="col-3">
                        <h3>Simplex-UI</h3>
                            If you want to know more about Simplex-ui's use you can read the <br>
                            <a class="button button-green button-big button-block" href="/use">Usage page</a>
                            <br>If you just to download it, you should go to : <br>
                            <a class="button button-red button-big button-block" href="/download">Download Page</a>   
                    </div>
                </div>
                <p class="copy">&copy; <a target="_blank" href="http://chikoumi.com">Chk</a> | 2014 | Simplex-UI</p>
            </footer>
        </div>
        <!-- End-sticky-footer -->
<script type="text/javascript"></script>
        <!-- JS-invocation -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/general.js"></script> <!-- JS GENERAL code -->
        <!-- end-JS-invocation -->
        <?php if ($titre == "Demo") { echo '<script src="demo-files/demo.js"></script>';} ?>
        <?php if ($titre == "How to use") { echo '<script src="demo-files/prism.js"></script>';} ?>
    </body>
</html>