Define a  HTML5 Structure using semantic elements.

<html>

  <head>   <title>HTML5 Structure pro-24</title>

    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"></meta>    

    <style>

        html,

        body {          height: 100%;        }

        body {           display: flex;

                              flex-wrap: wrap;

                              margin: 0;

                    }

        .header-menu,

        footer {

          display: flex;

          align-items: center;

          width: 100%;

        }

        .header-menu {

          justify-content: flex-end;

          height: 60px;

          background: #22628a;

          

        }

        a{

            color: #ffffff;

        }

        h2 {

          margin: 0 0 8px;

        }

        ul li {

          display: inline-block;

          padding: 0 10px;

          list-style: none;

        }

        aside {

          flex: 0.4;

          height: 165px;

          padding-left: 15px;

          border-left: 1px solid #666;

        }

        section {

          flex: 1;

          padding-right: 15px;

        }

        footer {

          padding: 0 10px;

          background: #ccc;

        }

      </style>

  </head>



  <body>

    <!-- Here is our main header that is used across all the pages of our website -->

    <header class="header-menu">

        <nav>

            <ul>

                <li><a href="#">Home</a></li>

                <li><a href="#">Our team</a></li>

                <li><a href="#">Projects</a></li>

                <li><a href="#">Contact</a></li>

            </ul> 

        </nav>     <!-- A Search form is another commmon non-linear way to navigate through a website. --> 

        <form>

            <input name="q" placeholder="Search query" type="search" />

            <input type="submit" value="Go!" />

        </form>

    </header>    <!-- Here is our page's main content -->

    <section>      <!-- It contains an article -->

      <article>

          <header>

            <h2>Article heading</h2> 

            <small>Hyper Text Markup Language</small>

         </header>

         <p>Our free HTML tutorial for beginners will teach you HTML and how to create your website from the scratch. HTML isn't difficult, so hoping you will enjoy learning.</p>     

      </article>

      <article>

        <header>

          <h2>Start Quiz "HTML Basic"</h2>

          <small>You can test your HTML skills with W3docs' Quiz.</small>

        </header>

        <p>You will get 5% for each correct

        answer for single choice questions. 

        In multiple choice question 

        it might be up to 5%. 

        At the end of the Quiz, 

        your total score will be displayed. 

        Maximum score is 100%.</p>

      </article>

    </section>      <!-- the aside content can also be nested within the main content -->

      <aside>

        <h2>Related</h2>

        <p>HTML</p>

        <p>CSS</p>

        <p>JavaScript</p>

        <p>PHP</p>

      </aside>

    <!-- And here is our main footer that is used across all the pages of our website -->

    <footer>

      <p> Copyright 2050 by nobody. All rights reversed.</p>

    </footer>

  </body>

</html>


