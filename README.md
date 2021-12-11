<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300"></a></p>

<h2><em> This was the first ever laravel project made by myself. It only features basic CRUD operations and some basic bootstrap classes for displaying and spacing the records in the database. </em></h2>

<h1>Requirements to run this project</h1>
<h3 align="center"> There are 2 ways of installing the required tools for this laravel project: </h3>
<h2> By Installing the tools one by one </h2>
<ul>
   <li>PHP >= 7.4 https://devdojo.com/tnylea/installing-php-on-windows </li>
   <li>composer https://getcomposer.org/ </li>
   <li>Mysql server https://www.sqlshack.com/how-to-install-mysql-database-server-8-0-19-on-windows-10/ </li>
   <li>Code editor, I personally recommend VSCode because of the extensions</li>
</ul>
<h2> Or by simply installing XAMPP which already includes PHP, Apache server and Mysql</h2>
<ul>
   <li><a href="https://www.apachefriends.org/index.html">XAMPP</a></li>
</ul>
<h1>Once the requirements are fullfilled, we can download or clone repository, install the project and run it</h1>
<ol>
   <li> First Download project folder OR clone using git bash https://git-scm.com/downloads</li>
   <li><p> Then we need to change the <b>".env.example"</b> file name to just <b>".env"</b> and change de database connection parameters inside of it to your own db user and password if required</p></li>
   <li> Once downloaded or cloned to your computer, access to project folder with the git bash cli (or cmd, powershell, whatever you use) and run the following commands: 
      <ul>
         <li><p><pre>composer install #this will install the packages specified in composer.json file, required by the project</pre></p></li>
         <li><p><pre> composer update #check for new versions of those packages</pre></p></li>
         <li><p><pre> php artisan serve #this will launch the laravel development server</p></pre></li>
         <li><p> now simply navigate to the link provided by the server (localhost:8000/productos) and you should be able to see the project running </p></li>
      </ul>
   </li>
</ol>
<h1> Creating the database and setting up the tables (not using relations so far but i´m on it) </h1>
<p> To set up our database and create the required columns we don´t have to write any sql statements. Laravel comes with a CLI (command line interface) that helps us build what we need without writting any php code or such.</p>
<p> So, for adding columns to our actual database (which in this case is called <em>carnes</em> but we can change the name on the .env file), first we have to create it, so go ahead and create a new database called "carnes" so that we can run the project right away without modifying any of the actual code just to see it running.
<p> Once the database is created and confirmed that the name on the <em>.env</em> file is the right one, we can go ahead and create the columns for it, which are the attributes we have already defined in class. As I said, laravel gives us a command line interface to interact with laravel and do so many things, called <em>Artisan</em> and executed by PHP.
  <p>Go to your terminal and type <pre> php artisan migrate </pre> and check the database. If everything went OK, you should now see the columns into the database </p>
  <p>Once we have the database ready, we can really test the CRUD operations on the db from laravel. So access localhost:8000/products/create and the form for adding new products to the db should display. Try adding values to it and save it, go to the database and check for that new record.</p>

