# Sprint project 8:
<h2>CMS(Content Management Systems) application</h2>
## About The Project

This is practical assignment. App was made based on PHP programming language. Main focus for this assignment was object-oriented programming simply known as OOP :
Task requirements:
* Create CMS app. With help of Composer PHP package management tool. Installing library: Doctrine ORM,and aplly MVC architecture design principles. 
* Make views panel such user/admin environment.  
* Create the app. Which render that data from DB.
* Implement Admin rights functionalities such as add, remove or update.
* Meanwhile regular user should only see content without any rights to manipulate content.
* Application have to update, remove or update any changes into database.


### Built With

This app was developed with Raw PHP applying OOP priciples with the use of Doctrine library, CSS - Style Design. DB - MySQL.

## Getting Started

<li>There are instructions on setting up this project.</li>
<li>To get a local copy up and run the app follow these simple steps(more detailed in <b>Settin up the project</b>):</li>
<li>You have to clone the repository https://github.com/XElderX/Sprint_8-CMS_App.git e.g On Visual Studio Code using git bash command line : <code> git clone https://github.com/XElderX/Sprint_8-CMS_App.git </code> </li>
<img src="https://user-images.githubusercontent.com/99712528/177182283-f283b0d9-e3eb-4a50-8f06-d4dc0ac17d56.png" alt="gitHub Clone">
<li>Download Xampp and MySQL check below <b>Installation</b></li>


### Installation

* XAMPP's instaliation;

1. Go to "https://www.apachefriends.org/"
2. Download it and install it
3. On XAMPP's instalation location find dir with a name: htdocs
4. Put there content that you have cloned before.

* MySQL instaliation and and settin-up database;

1. Go to "https://dev.mysql.com/downloads/installer/"
2. Download it, then start <b> XAMPP control Panel</b>
3. On XAMPP's control panel start <code>Apache</code> and <code>MySQL</code> by pressing start;


### Settin up the project.
<ol>
<li>Once you have done steps above. Time to set up and run the app</li>
<li>Go to your XAMPP instaliation directory and rigt click on <code>htdocs</code> and select open with code </li>
<img src="https://user-images.githubusercontent.com/99712528/177182285-77024ec8-2eeb-43a8-8c52-d849f5d652fa.png" alt="htdocs open">
<li></li>
<li>Once Visual Code IDE opened press onto top navigation line <code>Terminal  -> New Terminal </code> </li>
<img src="https://user-images.githubusercontent.com/99712528/177182287-08ae1aa3-36eb-4adb-820f-e6390a10a65e.png" alt="new Terminal">
<li>On bottom terminal container enter those command lines: composer instaliation download <code>php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"</code> enter, then validate installer by typing this command <code>php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"</code> and finnaly, this line <code> php composer-setup.php</code></li>
<img src="https://user-images.githubusercontent.com/99712528/177182300-e917e13a-08d3-4e3e-9a22-540692d16d0b.png" alt="Composer download">

<li>Composer phar instaliation<code>php ../composer.phar install</code> </li>
<img src="https://user-images.githubusercontent.com/99712528/177182302-98219a4e-8472-4b63-90e9-a8d2c7357529.png" alt="composer install">

<li>Once you successfuly installed composer, press <code>launch Profile</code> and then select<code>Git Bash</code> </li>
<img src="https://user-images.githubusercontent.com/99712528/177182289-8a97bdf4-d30f-4d30-98ba-22d79a169f05.png" alt="switch to git bash">

<li>Navigate to project path </li>
<img src="https://user-images.githubusercontent.com/99712528/177182291-e926787d-6290-4ed5-a764-eaf3699903c1.png" alt="to project">

<li>Open <code> MySQL Workbench </code> Create MySQL Connection (if it's your first time) set username and password(by default just leave username as root and not set any password); <img src="https://user-images.githubusercontent.com/99712528/174490079-1d58c653-ad9d-4e5a-88f7-2f24aff64697.png" alt="newSQlConn">   </li>
<li>Press <code> Create a new SQL tab</code> and create new database<code>CREATE DATABASE CMS_DB</code> and select it <code>use cms db</code></li>
<img src="https://user-images.githubusercontent.com/99712528/177182292-d244068f-be14-4abf-8f99-f47eae814259.png" alt="DB creation">

<li>Now time for database schema generation. On  powershell type: <code>vendor\bin\doctrine orm:schema-tool:update --force --dump-sql.</code> once you see green backgrounded line that :  <code>[OK] Database schema updated successfully!</code> </li>
<img src="https://user-images.githubusercontent.com/99712528/177182295-ba1fd227-2f11-43cf-ab99-20a3878aca7f.png" alt="db schema generation">

<li>Congratulations!  project ready to run</li>
<li>Go to any browser and type: <code>http://localhost/Sprint_8-CMS_App/<code></li>
<img src="https://user-images.githubusercontent.com/99712528/177182297-44adf668-2440-46db-9ef7-e4dc5ef2beee.png" alt="Run Project">

<li>Admin login credentials username:<code>Admin<code> password:<code>iamaadmin</code></li>
<img src="https://user-images.githubusercontent.com/99712528/177182298-d7862f4f-7a9c-4a9c-8bf8-771e78d0e376.png" alt="credentials">
</ol>



## Development log and workflow.
<h5>***************2022.06.25***************</h5>
* 2022.06.25 - <b>Start of development.</b> estimated to finish <b>ETA - 2022.07.04 </b><br>
* 2022.06.25 -> Settin up the project: Installed composer  -> installed doctrine/orm -> Created <code>bootstrap.php</code> and <code>cli-config.php</code> and configurated its perameters. Created Database : <code> CMS_DB</code><br>
* 2022.06.25 additionally installed 2 more libraries: <code>php ../composer.phar require symfony/cache</code> and <code>php ../composer.phar require doctrine/annotations</code><br> 
<h5>***************2022.06.27***************</h5>
* 2022.06.27 Created AppTab class - it renders object title and content from db.. created header.php file which contains navigation,
<h5>***************2022.06.29***************</h5> sat up routing  and renders content from db. <br>
* 2022.06.29 created footer, created admin area and added functionality to add page  <br>
<h5>***************2022.06.30***************</h5>
* 2022.06.30 implemented delete functionality and its logic  <br>
<h5>***************2022.07.01***************</h5>
* 2022.07.01 implemented update existing page functionality and its logic, added login/logout logic   <br>
<h5>***************2022.07.02***************</h5>
* 2022.07.02 added style for all pages, added notification messages with notes and exeptions<br>
<h5>***************2022.07.04***************</h5>
* 2022.07.04 formatated source code, other minor changes<br>







## Contact

<span><strong>Project developed by: </strong> Dalius Kriaučiūnas <a href="https://www.linkedin.com/in/dalius-kriauciunas/">Link to Linked In </a></span>

Project Link: https://github.com/XElderX/Sprint_8-CMS_App
