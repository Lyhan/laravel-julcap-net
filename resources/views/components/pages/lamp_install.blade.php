<x-main>
    <div class="content">
        <h1>How to install Apache, PHP and MYSQL</h1>
        <p>In order to install all those services you need to use the package manager installed in your system. In this
            case we will
            be using apt-get because is the package manager in Ubuntu. If it was a RedHat system like CentOS you should
            use
            <abbr title="Yellowdog Updater Modified">yum</abbr></p>
        <p>First we will update the list of packages cached in the system. If yum was used this step would not be
            necessary because yum does not keep a local cache of the available packages, it always looks in the
            repositories for the latest software available.</p>

        <p class="well well-sm code">root@sh-srv:~# apt-get update</p>

        <p>The next packages are needed</p>
        <ul>
            <li>apache2</li>
            <li>php5</li>
            <li>libapache2-mod-php5</li>
            <li>mysql-server</li>
            <li>mysql-client</li>
            <li>php5-mysql</li>
        </ul>
        <p>This task can be accomplish by using the &#39;install&#39; argument [apt-get install &#39;package1&#39;
            &#39;package2&#39;].</p>
        <p class="well well-sm code">root@sh-srv:~# apt-get install apache2 php5 mysql-server mysql-client
            libapache2-mod-php5 php5-mysql -y</p>
        </p>The '-y' switch is optional.</p>
        <h1>Checking apache</h1>
        <p>First you need to know if the apache web server daemon is running, there are different ways to find out
            depending on the distribution. In RedHat like systems the apache daemon is called "httpd" and in debian like
            systems it is called "Apache2"</p>
        <p>In Ubuntu it would be like this:</p>
        <p class="well well-sm code">root@sh-srv:~# etc/init.d/apache2 status<br/>root@sh-srv:~# service apache2 status
        </p>
        <p>If the webserver is running you should see a message like this:</p>
        <div style="max-width:356px;max-height:66px;">
            <img src="img/apache_status.png">
        </div>
        <h2>Checking file permissions and document root</h2>
        <p>The document root for the website has to be readable and executable by everybody. By default it is either
            '/var/www' or '/var/www/html' depending of the distribution. To find out what is the document root check the
            apache configuration file.</p>
        <P>It is important to know what is the name of the web server user, to find out use the next command:</p>
        <p class="well well-sm code">root@sh-srv:~# ps aux | egrep '(apache|httpd)'</p>
        <div style="max-width:962px;max-height:298px;">
            <img src="img/web_user.png">
        </div>
        <p>It is usually "Apache" or "www-data". All web server files should be owned by this user, to set it that way
            use the next commands:
        <p>
        <p class="well well-sm code">root@sh-srv:~# chmod 755 /var/www -R<br/>root@sh-srv:~# chown www-data. /var/www -R
        </p>
        <p>The '-R' switch means 'recursive'. That will change the permissions for all files recursively</p>
        <p>To find out if apache is running open a web browser and type http://localhost/ or http://{ip addr.}/ or
            http://{hostname}/ </p>
        <h1>Checking PHP</h1>
        <p>Create a txt file using a text editor, type the text below, save it as 'index.php' and put it in the document
            root.</p>
        <p class="well well-sm code code">&lt;html&gt;
            <br/>&lt;head&gt;
            <br/>&lt;title&gt;PHP Test&lt;/title&gt;
            <br/>&lt;/head&gt;
            <br/>&lt;body&gt;
            <br/>&lt;?php phpinfo(); ?&gt;
            <br/>&lt;/body&gt;
            <br/>&lt;/html&gt;
        </p>
        <p>Then open a web browser and type the ip address of the machine where you have installed apache and php, in my
            case the ip is 192.168.1.46. You should see
            something like this:</p>
        <div style="max-width:709px;max-height:904px;">
            <img src="img/PHP.png">
        </div>
        <h1>Checking MySQL</h1>
        <p>To check if mysql is working just connect to the database using the next command:</p>
        <p class="well well-sm code">root@sh-srv:~# mysql -u &#39;username&#39; -p</p>
        <p>'-u' for username<br/>'-p' for password</p>
        <p>You should type the username and password that you created during the installation. If it works you should
            not get any
            error messaged, the result should be a prompt like this:<br/></p>
        <div style="max-width:676px;max-height:424px;">
            <img src="img/MySQL.png">
        </div>
</x-main>
