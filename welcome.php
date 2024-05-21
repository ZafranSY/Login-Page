<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="welcome.css" />
    <link rel="icon" href="C:\Users\eruwa\Downloads\image-removebg-preview (9).png" type="image/x-icon"/>
    <title>Learnify.com</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  </head>

  <body>
    <div class="taglinebar">
        
        <header>Ready to get with the times?| Unlock your potential, unlock your future.</header>
    </div>
    
    <div class="navbar1">
        
        <div class="img-container"><img id="logo"src="asserts\newlogo.png"/><a href="#"><h1>Learnify</h1></a></div>
        
        <nav>
            <div class="top-navbar">

                <ul>
                    <a href=""><li>Home</li></a>
                    <a href=""><li>About</li></a>
                    <a href=""><li>Contact</li></a>
                    <a href="">
                        <li><i class='bx bx-menu' ></i></li>
                    </a>
                </ul>
            </div>
        </nav>
    </div>
   
    <div class="sidebar">
    <nav id="navbar">
      <div class="header">
        <img class="nodejsImg"src="asserts\nodejs.jpg"/>
        <header>Node.js Tutorial</header>
      </div>
      <ul>
        <li><a class="new-link" href="#Introduction">Introduction</a></li>
        <li>
          <a class="new-link" href="#Environment-setup">Environment Setup</a>
        </li>
        <li>
          <a class="new-link" href="#First-Application">First Application</a>
        </li>
        <li><a class="new-link" href="#NPM">NPM</a></li>
        <li><a class="new-link" href="#Callbacks-Concept">Callbacks Concept</a></li>
        <li><a class="new-link" href="#Upload-Files">Upload Files</a></li>
      </ul>
    </nav></div>
    <main>
        <section id="Introduction">
            <header>Node.js - Introduction</header>
            <h7 clas="p-header">What is Node.js</h7>
            <p class="p-header">Node.js is a server-side runtime environment built on Google Chrome's JavaScript Engine (V8 Engine). Node.js was developed by Ryan Dahl in 2009 and its latest version is v20.9.0. Node.js is a cross-platform (run on Windows, Linux, Unix, macOS, and more), open-source, back-end JavaScript runtime environment, that executes JavaScript code outside a web browser.</p>

               <p> The definition of Node.js as supplied by its official documentation is as follows −
                
                Node.js is a platform built on Chrome's JavaScript runtime for easily building fast and scalable network applications. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient, perfect for data-intensive real-time applications that run across distributed devices.</p>
                
                <p>Node.js environment is event-driven and provides non-blocking I/O, that optimizes throughput and scalability in web applications. The OpenJS Foundation, facilitated by the Linux Foundation's Collaborative Projects program, now handles the Node.js distributed development.</p>
            <h7>Features of Node.js</h7>
            <p class="p-header">Following are some of the important features that make Node.js the first choice of software architects.</p>
            <ul>
                <li><span>Asynchronous and Event Driven</span> − All APIs of Node.js library are asynchronous, that is, non-blocking. It essentially means a Node.js based server never waits for an API to return data. The server moves to the next API after calling it and a notification mechanism of Events of Node.js helps the server to get a response from the previous API call.</li>
                <li><span>Very Fast</span> − Being built on Google Chrome's V8 JavaScript Engine, Node.js library is very fast in code execution.</li>
                <li><span>No Buffering</span> − Node.js applications never buffer any data. These applications simply output the data in chunks.</li>
                <li><span>License</span> − Node.js is released under the MIT license.</li>
                </ul>

            
            <p>The following diagram depicts some important parts of Node.js which we will discuss in detail in the subsequent chapters.</p>
            <div class="objimg"><img  src="asserts\nodejs_concepts.jpg"/></div>
            <h7>Where to Use Node.js?</h7>
            <p>Following are the areas where Node.js is proving itself as a perfect technology partner.

            </p>
            <ul>
                <li>I/O bound Applications</li>
                <li>Data Streaming Applications</li>
                <li>Data Intensive Real-time Applications (DIRT)</li>
                <li>JSON APIs based Applications</li>
                <li>Single Page Applications</li>
            </ul>
            <p>However, it is not advisable to use Node.js for CPU intensive applications.</p>
            <p>Node.js is primarily used to build network programs such as Web servers. However, you can build different types of applications such as command line applications, web applications, real-time chat applications, REST APIs etc.</p>
            <p>Thousands of open-source libraries for Node.js are available, most of them hosted on the npm website, npm is a package manager for the JavaScript programming language. A number web frameworks can be used to accelerate the development of applications. Some of the popular frameworks are Express.js, Feathers.js, Koa.js, Sails.js, Meteor, and many others.</p>
            <p>Number of IDEs such as Atom, JetBrains WebStorm, NetBeans, and Visual Studio Code support development of Node.js applications. Cloud-hosting platforms like Google Cloud Platform and AWS Elastic Beanstalk can be used to host Node.js applications.

            </p>
        </section>
        <section id="Environment-setup">
            <header>Environment Setup</header>
            <p class="p-header">This Node.js tutorial consists of a number of ready-to-run examples, so that the learn can understand the Node.js concepts by running the code. To be able to execute the example code, you can use our online Node.js environment, or install Node.js environment in your local machine.</p>
        </section id="First-Application">
        <section>
            <header>First Application</header>
            <p  class="p-header">When learning a new language or a framework, the first application to write is a Hello World program. Such a program displays the Hello World message. This illustrates the basic syntax of the language and also serves to test whether the installation of the language compiler has been correctly done or not. In this chapter, we shall write a Hello World application in Node.js.</p>
        </section>
        <section id="NPM">
            <header>Node.js NPM</header>
            <p class="p-header">NPM − an acronym for Node Package Manager, refers to the Command line utility to install Node.js packages, perform version management and dependency management of Node.js packages. It also provides an online repository for node.js packages/modules which are searchable on https://www.npmjs.com/. A detailed documentation of NPM commands is also available on this link.

                If you are working with newer versions of Node.js (version 0.6.0 or later), the NPM utility is included with the Node.js binaries for all the OS platform bundles. Check the version of NPM in the command terminal −</p>
                <pre><code>
                    PS C:\Users\mlath> npm -v
                    10.1.0
                </code></pre>
                <p>In case you have an older version of NPM, you need to update it to the latest version using the following command.</p>
                <pre><code>
                    npm install npm-g</code></pre>
                <p>Note that YARN and PNPM tools are also available as alternatives for NPM. YARN installs packages more quickly and manage dependencies consistently across machines or in secure offline environments. PNPM (Performant NPM) is another fast and disk-space efficient package manager for Node.js packages.

                    If your Node.js application depends on one or more external packages, they must be installed from NPM repository. NPM packages are installed in two modes either local or global. By default, a package is installed locally.s</p>
        </section>
        <section id="Callbacks-Concept">
            <header>Callbacks Concept</header>
            <h7>What is Callback?</h7>
            <p>A Callback in Node.js is an asynchronous equivalent for a function. It is a special type of function passed as an argument to another function. Node.js makes heavy use of callbacks. Callbacks help us make asynchronous calls. All the APIs of Node are written in such a way that they support callbacks.

            </p>
            <p>Programming instructions are executed synchronously by default. If one of the instructions in a program is expected to perform a lengthy process, the main thread of execution gets blocked. The subsequent instructions can be executed only after the current I/O is complete. This is where callbacks come in to the picture.

            </p>
            <p>The callback is called when the function that contains the callback as an argument completes its execution, and allows the code in the callback to run in the meantime. This makes Node.js highly scalable, as it can process a high number of requests without waiting for any function to return results.

            </p>
        </section>
        <section id="Upload-Files">
            <header>Upload Files</header>
            <p>In many web applications, a user from client machine is required to upload file (such as the user uploading images and videos with Facebook or Instagram apps) to the server. There are a number of open-source modules available on the NPM registry, with which the feature of uploading files can be enabled in a Node.js application. The formidable module offers a convenient API to handle the file uploads. The formidable module can be imported in a core Node.js module along with the built-in http module, as well as the Express app.

            </p>
            <h7>Formidable</h7>
            <p>The Formidable module is a fast and streaming multipart parser, capable of automatically writing file uploads to the disk. It has a low memory footprint, with efficient error handling mechanism.</p>
            <p>As a first step, install the formidable module with the following command −

            </p>
            <pre><code>npm install formidable</code></pre>
            <p>In this chapter, the example usage of Formidable module in a node.js application that includes http module and in an ExpressJs application are shown below −

            </p>
        </section>
    </main>
  </body>
</html>
