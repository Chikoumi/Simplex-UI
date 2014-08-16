<?php $titre ="How to use"; include("include/header.php");?>

            <div class="article">
                    <div class="header">
                        <h1>How to use Simplex-UI</h1>
                        <p>If you don't want to search code to made something, here you can get it.</p>
                    </div>
                    <h3 class="separate">Made with prism.js</h3>

                    <p>This page is provide by <a href="http://prismjs.com">Prism.js</a>, it is an extensible syntax highlighter, built with modern web standards.</p>


                        <h3 id="navbar" class="separate">Navigation Bar</h3>
                        See top-page. You can change color using menu on left. Possibility to have fixed-top navbar, just add top-nav to  &lt;div class="page"&gt; like &lt;div class="page top-nav"&gt;, with this way Navbar will be fixed on top when you scroll down, you can activate "sticky-header" with left demo menu.
                        <h6>HTML code:</h6><pre><code class="language-markup">&lt;div class="page *top-nav"> &lt;!-- remove * before top-bar to enable fixed navbar on top -->
    &lt;div class="header-container">
    &lt;header class="wrapper clearfix">
        &lt;div class="brand">
                &lt;img src="img/brand.png">&lt;h1>Simplex-UI&lt;/h1>
         &lt;/div>
        &lt;nav>
            &lt;ul>
                &lt;li>&lt;a href="/">&lt;i class="fa fa-home">&lt;/i> Home&lt;/a>&lt;/li>
                &lt;li>&lt;a href="/demo">&lt;i class="fa fa-paw">&lt;/i> Demo&lt;/a>&lt;/li>
                &lt;li>&lt;a>&lt;i class="fa fa-plus">&lt;/i> Tools&lt;/a>
                    &lt;ul>&lt;!-- DropDown -->
                        &lt;li>&lt;a href="/download">&lt;i class="fa fa-slark">&lt;/i> Download&lt;/a>&lt;/li>
                        &lt;li>&lt;a href="/use">&lt;i class="fa fa-slark">&lt;/i> How to use&lt;/a>&lt;/li>
                        &lt;li>&lt;a target="_blank" href="https://github.com/Chikoumi/Simplex-UI">&lt;i class="fa fa-slark">&lt;/i> Github&lt;/a>&lt;/li>
                    &lt;/ul>&lt;!-- End DropDown -->
                &lt;/li>
            &lt;/ul>
        &lt;/nav>
    &lt;/header>
&lt;/div></code></pre>
                        <h3 id="btn" class="separate">Buttons :</h3>
                        <h5>Small format</h5>
                                 <a class="button button-default button-small">Small</a>
                                 <a class="button button-green button-small">Small</a>
                                 <a class="button button-yellow button-small">Small</a>
                                 <a class="button button-blue button-small">Small</a>
                                 <a class="button button-red button-small">Small</a>
                                <br>
                        <h6>HTML code:</h6><pre><code class="language-markup">&lt;a class="button button-default button-small">Small&lt;/a>
&lt;a class="button button-green button-small">Small&lt;/a>
&lt;a class="button button-yellow button-small">Small&lt;/a>
&lt;a class="button button-blue button-small">Small&lt;/a>
&lt;a class="button button-red button-small">Small&lt;/a></code></pre>
                        <h5>Default format</h5>
                                 <a class="button button-default">Default</a>
                                 <a class="button button-green">Default</a>
                                 <a class="button button-yellow">Default</a>
                                 <a class="button button-blue">Default</a>
                                 <a class="button button-red">Default</a>
                                <br>
                        <h6>HTML code:</h6><pre><code class="language-markup">&lt;a class="button button-default">Default&lt;/a>
&lt;a class="button button-green">Default&lt;/a>
&lt;a class="button button-yellow">Default&lt;/a>
&lt;a class="button button-blue">Default&lt;/a>
&lt;a class="button button-red">Default&lt;/a></code></pre>
                        <h5>Big format</h5>
                                 <a class="button button-default button-big">Big one</a>
                                 <a class="button button-green button-big">Big one</a>
                                 <a class="button button-yellow button-big">Big one</a>
                                 <a class="button button-blue button-big">Big one</a>
                                 <a class="button button-red button-big">Big one</a>
                                 <br>
                        <h6>HTML code:</h6><pre><code class="language-markup">&lt;a class="button button-default button-big">Big one&lt;/a>
&lt;a class="button button-green button-big">Big one&lt;/a>
&lt;a class="button button-yellow button-big">Big one&lt;/a>
&lt;a class="button button-blue button-big">Big one&lt;/a>
&lt;a class="button button-red button-big">Big one&lt;/a></code></pre>
                        <h5>Specials buttons</h5>
                                  <a class="button button-default button-big button-dsbl" disabled>button-dsbl</a>
                                  <a class="button button-default button-blue button-big button-ico">button-ico <i class="fa fa-cogs"></i></a><br>
                                  <a class="button button-blue button-big button-block">Block button</a>
                                  <br>
<h6>HTML code:</h6><pre><code class="language-markup">&lt;a class="button button-default button-big button-dsbl" disabled>button-dsbl&lt;/a>
&lt;a class="button button-default button-blue button-big button-ico">button-ico &lt;i class="fa fa-cogs">&lt;/i>&lt;/a>&lt;br>
&lt;a class="button button-blue button-big button-block">Block button&lt;/a></code></pre>
                        <h5>Buttons-group</h5>
                        <div class="button-group">
                              <a class="button button-green">Button</a>
                              <a class="button button-blue">Button</a>
                              <a class="button button-red">Button</a>
                              <a class="button button-green">Button</a>
                        </div>
                        <br>
<h6>HTML code:</h6><pre><code class="language-markup">&lt;div class="button-group">
    &lt;a class="button button-green">Button&lt;/a>
    &lt;a class="button button-blue">Button&lt;/a>
    &lt;a class="button button-red">Button&lt;/a>
    &lt;a class="button button-green">Button&lt;/a>
&lt;/div></code></pre>
                        <h3 id="lbl" class="separate">Labels</h3>
                             <span class="lbl default">Lorem</span> 
                             <span class="lbl green">Lorem</span>
                             <span class="lbl blue">Lorem</span>
                             <span class="lbl yellow">Lorem</span>
                             <span class="lbl red">Lorem</span><br>
<h6>HTML code:</h6><pre><code class="language-markup">&lt;span class="lbl default">Lorem&lt;/span> 
&lt;span class="lbl green">Lorem&lt;/span>
&lt;span class="lbl blue">Lorem&lt;/span>
&lt;span class="lbl yellow">Lorem&lt;/span>
&lt;span class="lbl red">Lorem&lt;/span></code></pre>
                         <h3 id="code" class="separate">Code :</h3>
                         Lorem ipsum dolor <code>cd /home</code> sed do eiusmod
                        tempor incididunt, <code>wget "https://github.com/Chikoumi/Ioncube-Autoinstall/archive/master.zip" && unzip master.zip" && cd Ioncube-Autoinstall && chmod +x fr_ioncube.sh && ./fr_ioncube.sh</code> consectetur adipiscing elit.

<h6>HTML code:</h6><pre><code class="language-markup">Lorem ipsum dolor &lt;code>cd /home&lt;/code> sed do eiusmod tempor incididunt,
&lt;code>wget "https://github.com/Chikoumi/Ioncube-Autoinstall/archive/master.zip" && unzip master.zip" && cd Ioncube-Autoinstall && chmod +x fr_ioncube.sh && ./fr_ioncube.sh&lt;/code> consectetur adipiscing elit.
</code></pre>
                        <h3 id="bash" class="separate">Bash console</h3>
                        <div class="console">
                         <div class="console-head">
                          <h3>Bash console</h3>
                         </div>
                          <div class="console-body">
                            root@chk:/# ls <br>
                            bin   dev  home  lib64       media  opt   reboot  run   selinux  sys  usr <br>
                            boot  etc  lib   lost+found  mnt    proc  root    sbin  srv  tmp  var <br>
                            root@chk:/# uptime <br>
                             03:40:48 up 11 days,  4:44,  0 users,  load average: 0.00, 0.00, 0.00 <br>
                            root@chk:/# service teamspeak start <br>
                            root@chk:/# TeamSpeak 3 server started, for details please view the log file<br>
                            root@chk:/#
                          </div>
                        </div>

<h6>HTML code:</h6><pre><code class="language-markup">&lt;div class="console">
  &lt;div class="console-head">
  &lt;h3>Bash console&lt;/h3>
  &lt;/div>
  &lt;div class="console-body">
    root@chk:/# ls &lt;br>
    bin   dev  home  lib64       media  opt   reboot  run   selinux  sys  usr &lt;br>
    boot  etc  lib   lost+found  mnt    proc  root    sbin  srv  tmp  var &lt;br>
    root@chk:/# uptime &lt;br>
      03:40:48 up 11 days,  4:44,  0 users,  load average: 0.00, 0.00, 0.00 &lt;br>
    root@chk:/# service teamspeak start &lt;br>
    root@chk:/# TeamSpeak 3 server started, for details please view the log file&lt;br>
    root@chk:/#
  &lt;/div>
&lt;/div></code></pre>
                         <h3 id="msg" class="separate">Message</h3>
                         <div class="message msg-default">
                            Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit.
                        </div>
                        <div class="message msg-green">
                            Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit.
                        </div>
                        <div class="message msg-blue">
                            Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit.
                        </div>
                        <div class="message msg-yellow">
                            Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit.
                        </div>
                        <div class="message msg-red">
                            Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit.
                        </div>
<h6>HTML code:</h6><pre><code class="language-markup">&lt;div class="message msg-default">
    Lorem ipsum dolor sit amet, &lt;strong>consectetur&lt;/strong> adipisicing elit.
&lt;/div>
&lt;div class="message msg-green">
    Lorem ipsum dolor sit amet, &lt;strong>consectetur&lt;/strong> adipisicing elit.
&lt;/div>
&lt;div class="message msg-blue">
    Lorem ipsum dolor sit amet, &lt;strong>consectetur&lt;/strong> adipisicing elit.
&lt;/div>
&lt;div class="message msg-yellow">
    Lorem ipsum dolor sit amet, &lt;strong>consectetur&lt;/strong> adipisicing elit.
&lt;/div>
&lt;div class="message msg-red">
    Lorem ipsum dolor sit amet, &lt;strong>consectetur&lt;/strong> adipisicing elit.
&lt;/div></code></pre>
                        <h3 id="card" class="separate">Card message</h3>

                        <div class="card card-default">
                            <div class="card-head">
                                <h3>Exceptur sint occaecat</h3>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </div>
                        </div>
                         <div class="card card-green">
                            <div class="card-head">
                                <h3>Exceptur sint occaecat</h3>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </div>
                        </div>
                         <div class="card card-blue">
                            <div class="card-head">
                                <h3>Exceptur sint occaecat</h3>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </div>
                        </div>
                         <div class="card card-yellow">
                            <div class="card-head">
                                <h3>Exceptur sint occaecat</h3>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </div>
                        </div>
                         <div class="card card-red">
                            <div class="card-head">
                                <h3>Exceptur sint occaecat</h3>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </div>
                        </div>
<h6>HTML code:</h6><pre><code class="language-markup">&lt;div class="card card-default">
    &lt;div class="card-head">
        &lt;h3>Exceptur sint occaecat&lt;/h3>
    &lt;/div>
    &lt;div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    &lt;/div>
&lt;/div>
    &lt;div class="card card-green">
    &lt;div class="card-head">
        &lt;h3>Exceptur sint occaecat&lt;/h3>
    &lt;/div>
    &lt;div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    &lt;/div>
&lt;/div>
    &lt;div class="card card-blue">
    &lt;div class="card-head">
        &lt;h3>Exceptur sint occaecat&lt;/h3>
    &lt;/div>
    &lt;div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    &lt;/div>
&lt;/div>
    &lt;div class="card card-yellow">
    &lt;div class="card-head">
        &lt;h3>Exceptur sint occaecat&lt;/h3>
    &lt;/div>
    &lt;div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    &lt;/div>
&lt;/div>
    &lt;div class="card card-red">
    &lt;div class="card-head">
        &lt;h3>Exceptur sint occaecat&lt;/h3>
    &lt;/div>
    &lt;div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    &lt;/div>
&lt;/div></code></pre>
                                 <H3 id="progress" class="separate">Progress Bar</H3>
                                 <h5>One line progress bar</h5>
                        <div class="progress">
                          <div class="bar" style="width: 60%;"></div>
                        </div>
                        <div class="progress">
                          <div class="bar bar-green" style="width: 20%;"></div>
                        </div>
                        <div class="progress">
                          <div class="bar bar-blue" style="width: 80%;"></div>
                        </div>
                        <div class="progress">
                          <div class="bar bar-yellow" style="width: 65%;"></div>
                        </div>
                        <div class="progress">
                          <div class="bar bar-red" style="width: 90%;"></div>
                        </div>
<h6>HTML code:</h6><pre><code class="language-markup">&lt;div class="progress">
  &lt;div class="bar" style="width: 60%;">&lt;/div>
&lt;/div>
&lt;div class="progress">
  &lt;div class="bar bar-green" style="width: 20%;">&lt;/div>
&lt;/div>
&lt;div class="progress">
  &lt;div class="bar bar-blue" style="width: 80%;">&lt;/div>
&lt;/div>
&lt;div class="progress">
  &lt;div class="bar bar-yellow" style="width: 65%;">&lt;/div>
&lt;/div>
&lt;div class="progress">
  &lt;div class="bar bar-red" style="width: 90%;">&lt;/div>
&lt;/div></code></pre>
                            <h3 id="hl" class="separate">Highlight paragraph</h3>
                            <p class="hl">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <p class="hl-green">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <p class="hl-blue">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <p class="hl-yellow">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <p class="hl-red">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
<h6>HTML code:</h6><pre><code class="language-markup">&lt;p class="hl">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.&lt;/p>
&lt;p class="hl-green">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.&lt;/p>
&lt;p class="hl-blue">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.&lt;/p>
&lt;p class="hl-yellow">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.&lt;/p>
&lt;p class="hl-red">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.&lt;/p></code></pre>
                            
                            <h3 id="blockquote" class="separate">Blockquote</h3>
                            <blockquote class="quote-left">
                                Delenda cartago est, <br>
                                Il faut détruire Carthage.
                                <span class="copy">Caton </span>
                            </blockquote>

                            <blockquote class="quote-right">
                                Delenda cartago est, <br>
                                Il faut détruire Carthage.
                                <span class="copy">Caton </span>
                            </blockquote>
                            
<h6>HTML code:</h6><pre><code class="language-markup">&lt;blockquote class="quote-left">
    Delenda cartago est, &lt;br>
    Il faut détruire Carthage.
    &lt;span class="copy">Caton &lt;/span>
&lt;/blockquote>

&lt;blockquote class="quote-right">
    Delenda cartago est, &lt;br>
    Il faut détruire Carthage.
    &lt;span class="copy">Caton &lt;/span>
&lt;/blockquote></code></pre>

                            <h3 id="hint" class="separate">Hint on hover</h3>  
                              <a class="button button-default tips">Hover-me <span class="tips-hint">Hint message</span></a> <p class="tips">Hover-me <span class="tips-hint">Hint Tips</span></p>


<h6>HTML code:</h6><pre><code class="language-markup">&lt;a class="button button-default tips">Hover-me &lt;span class="tips-hint">Hint message&lt;/span>&lt;/a> 
&lt;p class="tips">Hover-me &lt;span class="tips-hint">Hint Tips&lt;/span>&lt;/p>
</code></pre>

                            <h3 id="table" class="separate">Tables</h3>

                            <h5>Blue</h5>
                            <table class="blue">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>#1121</td>
                                  <td>Bob</td>
                                  <td>Sponge</td>
                                  <td>spongebob@mail.com-</td>
                                </tr>
                                <tr>
                                  <td>#7120</td>
                                  <td>Jacob</td>
                                  <td>Matador</td>
                                  <td>j-mat@mail.eu</td>
                                </tr>
                                <tr>
                                  <td>#9981</td>
                                  <td>Ben</td>
                                  <td>Scott</td>
                                  <td>b.scott@mail.uk</td>
                                </tr>
                              </tbody>
                            </table>

                            <h5>Red</h5>
                            <table class="red">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>#1121</td>
                                  <td>Bob</td>
                                  <td>Sponge</td>
                                  <td>spongebob@mail.com-</td>
                                </tr>
                                <tr>
                                  <td>#7120</td>
                                  <td>Jacob</td>
                                  <td>Matador</td>
                                  <td>j-mat@mail.eu</td>
                                </tr>
                                <tr>
                                  <td>#9981</td>
                                  <td>Ben</td>
                                  <td>Scott</td>
                                  <td>b.scott@mail.uk</td>
                                </tr>
                              </tbody>
                            </table>

                            <h5>Green</h5>
                            <table class="green">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>#1121</td>
                                  <td>Bob</td>
                                  <td>Sponge</td>
                                  <td>spongebob@mail.com-</td>
                                </tr>
                                <tr>
                                  <td>#7120</td>
                                  <td>Jacob</td>
                                  <td>Matador</td>
                                  <td>j-mat@mail.eu</td>
                                </tr>
                                <tr>
                                  <td>#9981</td>
                                  <td>Ben</td>
                                  <td>Scott</td>
                                  <td>b.scott@mail.uk</td>
                                </tr>
                              </tbody>
                            </table>

                            <h5>Yellow</h5>
                             <table class="yellow">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>#1121</td>
                                  <td>Bob</td>
                                  <td>Sponge</td>
                                  <td>spongebob@mail.com-</td>
                                </tr>
                                <tr>
                                  <td>#7120</td>
                                  <td>Jacob</td>
                                  <td>Matador</td>
                                  <td>j-mat@mail.eu</td>
                                </tr>
                                <tr>
                                  <td>#9981</td>
                                  <td>Ben</td>
                                  <td>Scott</td>
                                  <td>b.scott@mail.uk</td>
                                </tr>
                              </tbody>
                            </table>

                            <h5>Default</h5>
                            <table>
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Email</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>#1121</td>
                                  <td>Bob</td>
                                  <td>Sponge</td>
                                  <td>spongebob@mail.com-</td>
                                </tr>
                                <tr>
                                  <td>#7120</td>
                                  <td>Jacob</td>
                                  <td>Matador</td>
                                  <td>j-mat@mail.eu</td>
                                </tr>
                                <tr>
                                  <td>#9981</td>
                                  <td>Ben</td>
                                  <td>Scott</td>
                                  <td>b.scott@mail.uk</td>
                                </tr>
                              </tbody>
                            </table>

<h6>HTML code:</h6><pre><code class="language-markup">&lt;h5>Blue&lt;/h5>
&lt;table class="blue">
  &lt;thead>
    &lt;tr>
      &lt;th>ID&lt;/th>
      &lt;th>First Name&lt;/th>
      &lt;th>Last Name&lt;/th>
      &lt;th>Email&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>
    &lt;tr>
      &lt;td>#1121&lt;/td>
      &lt;td>Bob&lt;/td>
      &lt;td>Sponge&lt;/td>
      &lt;td>spongebob@mail.com-&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>#7120&lt;/td>
      &lt;td>Jacob&lt;/td>
      &lt;td>Matador&lt;/td>
      &lt;td>j-mat@mail.eu&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>#9981&lt;/td>
      &lt;td>Ben&lt;/td>
      &lt;td>Scott&lt;/td>
      &lt;td>b.scott@mail.uk&lt;/td>
    &lt;/tr>
  &lt;/tbody>
&lt;/table>

&lt;h5>Red&lt;/h5>
&lt;table class="red">
  &lt;thead>
    &lt;tr>
      &lt;th>ID&lt;/th>
      &lt;th>First Name&lt;/th>
      &lt;th>Last Name&lt;/th>
      &lt;th>Email&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>
    &lt;tr>
      &lt;td>#1121&lt;/td>
      &lt;td>Bob&lt;/td>
      &lt;td>Sponge&lt;/td>
      &lt;td>spongebob@mail.com-&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>#7120&lt;/td>
      &lt;td>Jacob&lt;/td>
      &lt;td>Matador&lt;/td>
      &lt;td>j-mat@mail.eu&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>#9981&lt;/td>
      &lt;td>Ben&lt;/td>
      &lt;td>Scott&lt;/td>
      &lt;td>b.scott@mail.uk&lt;/td>
    &lt;/tr>
  &lt;/tbody>
&lt;/table>

&lt;h5>Green&lt;/h5>
&lt;table class="green">
  &lt;thead>
    &lt;tr>
      &lt;th>ID&lt;/th>
      &lt;th>First Name&lt;/th>
      &lt;th>Last Name&lt;/th>
      &lt;th>Email&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>
    &lt;tr>
      &lt;td>#1121&lt;/td>
      &lt;td>Bob&lt;/td>
      &lt;td>Sponge&lt;/td>
      &lt;td>spongebob@mail.com-&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>#7120&lt;/td>
      &lt;td>Jacob&lt;/td>
      &lt;td>Matador&lt;/td>
      &lt;td>j-mat@mail.eu&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>#9981&lt;/td>
      &lt;td>Ben&lt;/td>
      &lt;td>Scott&lt;/td>
      &lt;td>b.scott@mail.uk&lt;/td>
    &lt;/tr>
  &lt;/tbody>
&lt;/table>

&lt;h5>Yellow&lt;/h5>
 &lt;table class="yellow">
  &lt;thead>
    &lt;tr>
      &lt;th>ID&lt;/th>
      &lt;th>First Name&lt;/th>
      &lt;th>Last Name&lt;/th>
      &lt;th>Email&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>
    &lt;tr>
      &lt;td>#1121&lt;/td>
      &lt;td>Bob&lt;/td>
      &lt;td>Sponge&lt;/td>
      &lt;td>spongebob@mail.com-&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>#7120&lt;/td>
      &lt;td>Jacob&lt;/td>
      &lt;td>Matador&lt;/td>
      &lt;td>j-mat@mail.eu&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>#9981&lt;/td>
      &lt;td>Ben&lt;/td>
      &lt;td>Scott&lt;/td>
      &lt;td>b.scott@mail.uk&lt;/td>
    &lt;/tr>
  &lt;/tbody>
&lt;/table>

&lt;h5>Default&lt;/h5>
&lt;table>
  &lt;thead>
    &lt;tr>
      &lt;th>ID&lt;/th>
      &lt;th>First Name&lt;/th>
      &lt;th>Last Name&lt;/th>
      &lt;th>Email&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>
    &lt;tr>
      &lt;td>#1121&lt;/td>
      &lt;td>Bob&lt;/td>
      &lt;td>Sponge&lt;/td>
      &lt;td>spongebob@mail.com-&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>#7120&lt;/td>
      &lt;td>Jacob&lt;/td>
      &lt;td>Matador&lt;/td>
      &lt;td>j-mat@mail.eu&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>#9981&lt;/td>
      &lt;td>Ben&lt;/td>
      &lt;td>Scott&lt;/td>
      &lt;td>b.scott@mail.uk&lt;/td>
    &lt;/tr>
  &lt;/tbody>
&lt;/table></code></pre>
                            <h3 id="scrabble" class="separate">Scrabble</h3>

                           <span class="scrabble">Lorem</span>
<h6>HTML code:</h6><pre><code class="language-markup">&lt;span class="scrabble">Lorem&lt;/span>
&lt;!-- JS automatically transform letters--></code></pre>

                           <h3 id="pop-up" class="separate">Pop-up</h3>     
                            <a href="" data-width="500" data-rel="popup1" class="pop-me button button-big button-default">Clic me</a>
                           <div id="popup1" class="popup default">
                                <div class="header"><h2>Default one Pop-up</h2></div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                </p>
                                <div class="btn">
                                    <a class="button button-green">I agree</a>
                                    <a class="button button-red" id="cancel">I disagree</a> <!-- Just add #cancel to button if it should close pop-up -->
                                </div>
                            </div>

                            <a href="" data-width="500" data-rel="popup2" class="pop-me button button-big button-green">Clic me</a>
                           <div id="popup2" class="popup green">
                                <div class ="header"><h2>Green one Pop-up</h2></div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                </p>
                                <div class="btn">
                                    <a class="button button-green">I agree</a>
                                    <a class="button button-red" id="cancel">I disagree</a> <!-- Just add #cancel to button if it should close pop-up -->
                                </div>
                            </div>

                            <a href="" data-width="500" data-rel="popup3" class="pop-me button button-big button-blue">Clic me</a>
                           <div id="popup3" class="popup blue">
                                <div class ="header"><h2>Blue one Pop-up</h2></div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                </p>
                                <div class="btn">
                                    <a class="button button-green">I agree</a>
                                    <a class="button button-red" id="cancel">I disagree</a> <!-- Just add #cancel to button if it should close pop-up -->
                                </div>
                            </div>

                            <a href="" data-width="500" data-rel="popup4" class="pop-me button button-big button-yellow">Clic me</a>
                           <div id="popup4" class="popup yellow">
                                <div class ="header"><h2>Yellow one Pop-up</h2></div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                </p>
                                <div class="btn">
                                    <a class="button button-green">I agree</a>
                                    <a class="button button-red" id="cancel">I disagree</a> <!-- Just add #cancel to button if it should close pop-up -->
                                </div>
                            </div>

                            <a href="" data-width="500" data-rel="popup5" class="pop-me button button-big button-red">Clic me</a>
                           <div id="popup5" class="popup red">
                                <div class ="header"><h2>Red one Pop-up</h2></div>
                                      <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                </p>
                                <div class="btn">
                                    <a class="button button-green">I agree</a>
                                    <a class="button button-red" id="cancel">I disagree</a> <!-- Just add #cancel to button if it should close pop-up -->
                                </div>
                            </div>
<h6>HTML code:</h6><pre><code class="language-markup"> &lt;a href="" data-width="500" data-rel="popup1" class="pop-me button button-big button-default">Clic me&lt;/a>
&lt;div id="popup1" class="popup default">
     &lt;div class="header">&lt;h2>Default one Pop-up&lt;/h2>&lt;/div>
     &lt;p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     &lt;/p>
     &lt;div class="btn">
         &lt;a class="button button-green">I agree&lt;/a>
         &lt;a class="button button-red" id="cancel">I disagree&lt;/a> &lt;!-- Just add #cancel to button if it should close pop-up -->
     &lt;/div>
 &lt;/div>

 &lt;a href="" data-width="500" data-rel="popup2" class="pop-me button button-big button-green">Clic me&lt;/a>
&lt;div id="popup2" class="popup green">
     &lt;div class ="header">&lt;h2>Green one Pop-up&lt;/h2>&lt;/div>
     &lt;p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     &lt;/p>
     &lt;div class="btn">
         &lt;a class="button button-green">I agree&lt;/a>
         &lt;a class="button button-red" id="cancel">I disagree&lt;/a> &lt;!-- Just add #cancel to button if it should close pop-up -->
     &lt;/div>
 &lt;/div>

 &lt;a href="" data-width="500" data-rel="popup3" class="pop-me button button-big button-blue">Clic me&lt;/a>
&lt;div id="popup3" class="popup blue">
     &lt;div class ="header">&lt;h2>Blue one Pop-up&lt;/h2>&lt;/div>
     &lt;p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     &lt;/p>
     &lt;div class="btn">
         &lt;a class="button button-green">I agree&lt;/a>
         &lt;a class="button button-red" id="cancel">I disagree&lt;/a> &lt;!-- Just add #cancel to button if it should close pop-up -->
     &lt;/div>
 &lt;/div>

 &lt;a href="" data-width="500" data-rel="popup4" class="pop-me button button-big button-yellow">Clic me&lt;/a>
&lt;div id="popup4" class="popup yellow">
     &lt;div class ="header">&lt;h2>Yellow one Pop-up&lt;/h2>&lt;/div>
     &lt;p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     &lt;/p>
     &lt;div class="btn">
         &lt;a class="button button-green">I agree&lt;/a>
         &lt;a class="button button-red" id="cancel">I disagree&lt;/a> &lt;!-- Just add #cancel to button if it should close pop-up -->
     &lt;/div>
 &lt;/div>

 &lt;a href="" data-width="500" data-rel="popup5" class="pop-me button button-big button-red">Clic me&lt;/a>
&lt;div id="popup5" class="popup red">
     &lt;div class ="header">&lt;h2>Red one Pop-up&lt;/h2>&lt;/div>
           &lt;p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     &lt;/p>
     &lt;div class="btn">
         &lt;a class="button button-green">I agree&lt;/a>
         &lt;a class="button button-red" id="cancel">I disagree&lt;/a> &lt;!-- Just add #cancel to button if it should close pop-up -->
     &lt;/div>
 &lt;/div></code></pre>
                            <h3 id="plist" class="separate">Price-List</h3>
                          <div class="plist-container">
                            <div class="plist red">
                              <div class="price">$100</div>
                                <div class="type">Article</div>
                              <ul class="options">
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                              </ul>
                              <a  class="button">J'achète</a>
                            </div>
                          
                            <div class="plist better yellow">
                              <div class="price">$150</div>
                                <div class="type">Best Offer</div>
                                <ul class="options">
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                                </ul>
                                <a  class="button">J'achète</a>
                            </div>

                            <div class="plist blue">
                              <div class="price">$9000</div>
                               <div class="type">Another article</div>
                                <ul class="options">
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                                </ul>
                                <a  class="button">J'achète</a>
                            </div>
                          </div>
                            

                          <div class="plist-container">
                            <div class="plist green">
                              <div class="price">$100</div>
                                <div class="type">Article</div>
                              <ul class="options">
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                              </ul>
                              <a  class="button">J'achète</a>
                            </div>
                          
                            <div class="plist red">
                              <div class="price">$150</div>
                                <div class="type">Another Article</div>
                                <ul class="options">
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                                </ul>
                                <a  class="button">J'achète</a>
                            </div>

                            <div class="plist better">
                              <div class="price">$9000</div>
                               <div class="type">Best Offer</div>
                                <ul class="options">
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                                <li><strong>Nice</strong> features</li>
                                </ul>
                                <a  class="button">J'achète</a>
                            </div>
                          </div>

<h6>HTML code:</h6><pre><code class="language-markup">&lt;div class="plist-container">
 &lt;div class="plist red">
   &lt;div class="price">$100&lt;/div>
     &lt;div class="type">Article&lt;/div>
   &lt;ul class="options">
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
   &lt;/ul>
   &lt;a  class="button">J'achète&lt;/a>
 &lt;/div>
                          
 &lt;div class="plist better yellow">
   &lt;div class="price">$150&lt;/div>
     &lt;div class="type">Best Offer&lt;/div>
     &lt;ul class="options">
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;/ul>
     &lt;a  class="button">J'achète&lt;/a>
 &lt;/div>

 &lt;div class="plist blue">
   &lt;div class="price">$9000&lt;/div>
    &lt;div class="type">Another article&lt;/div>
     &lt;ul class="options">
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;/ul>
     &lt;a  class="button">J'achète&lt;/a>
 &lt;/div>
&lt;/div>
 
 
&lt;div class="plist-container">
 &lt;div class="plist green">
   &lt;div class="price">$100&lt;/div>
     &lt;div class="type">Article&lt;/div>
   &lt;ul class="options">
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
   &lt;/ul>
   &lt;a  class="button">J'achète&lt;/a>
 &lt;/div>
                          
 &lt;div class="plist red">
   &lt;div class="price">$150&lt;/div>
     &lt;div class="type">Another Article&lt;/div>
     &lt;ul class="options">
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;/ul>
     &lt;a  class="button">J'achète&lt;/a>
 &lt;/div>

 &lt;div class="plist better">
   &lt;div class="price">$9000&lt;/div>
    &lt;div class="type">Best Offer&lt;/div>
     &lt;ul class="options">
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;li>&lt;strong>Nice&lt;/strong> features&lt;/li>
     &lt;/ul>
     &lt;a  class="button">J'achète&lt;/a>
 &lt;/div>
&lt;/div></code></pre>
                        <h3 id="status" class="separate">Status icon</h3>
                          <ul>
                        <li>Server status: <div class="status"></div></li>
                        <li>Server status: <div class="status off"></div></li>
                          </ul>

<h6>HTML code:</h6><pre><code class="language-markup">&lt;ul>
  &lt;li>Server status: &lt;div class="status">&lt;/div>&lt;/li>
  &lt;li>Server status: &lt;div class="status off">&lt;/div>&lt;/li>
&lt;/ul>
&lt;!-- &lt;ul> and &lt;li> are optional just add the class Status && off --></code></pre>
                        <h3 id="grid" class="separate">Grid-System</h3>  

                            <div class="grid">
                                <h3>3 Collums</h3>
                                <div class="col_1">
                                    <h5>Col_1</h5>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero.
                                </div>
                                <div class="col_1">
                                    <h5>Col_1</h5>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero.
                                </div>
                                <div class="col_1">
                                    <h5>Col_1</h5>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero.
                                </div> 
                            </div>
                            <br>
<h6>HTML code:</h6><pre><code class="language-markup">&lt;div class="grid">
    &lt;h3>3 Collums&lt;/h3>
    &lt;div class="col_1">
        &lt;h5>Col_1&lt;/h5>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero.
    &lt;/div>
    &lt;div class="col_1">
        &lt;h5>Col_1&lt;/h5>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero.
    &lt;/div>
    &lt;div class="col_1">
        &lt;h5>Col_1&lt;/h5>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero.
    &lt;/div> 
&lt;/div></code></pre>
                            <div class="grid">
                                <h3>2 Collums</h3>

                                <div class="col_2">
                                    <h5>Col_2</h5>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero.
                                </div>
                                <div class="col_1">
                                    <h5>Col_1</h5>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante.
                                </div>
                            </div>
<h6>HTML code:</h6><pre><code class="language-markup">&lt;div class="grid">
    &lt;h3>2 Collums&lt;/h3>

    &lt;div class="col_2">
        &lt;h5>Col_2&lt;/h5>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero.
     &lt;/div>
    &lt;div class="col_1">
        &lt;h5>Col_1&lt;/h5>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante.
     &lt;/div>
&lt;/div></code></pre>

                </div>
                </div> <!-- End-main -->
            </div> <!-- End-main-container -->
    </div><!-- End-Page -->

<?php include("include/footer.php"); ?>
