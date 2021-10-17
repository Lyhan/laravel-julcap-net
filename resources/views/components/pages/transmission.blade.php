<x-main>
    <div class="content">
        <h1>How to install and configure transmission</h1>
        <p>The amount of energy required to keep the Raspberry pi 24/7, makes it perfect candidate for a Torrent
            client/server. There are some cons like storage and reliability, (I have experienced two SD cards that just
            died suddenly) but
            it is still fun.</p>
        <p>Installing transmission is straight forward, but you need to remember that in order to modify the
            configuration file the
            transmission daemon has to be stopped. I forgot that the first time, it was really frustrating until I found
            out. Let&#39;s get started !!</p>
        <p class="well well-sm code">root@sh-srv:~# apt-get install transmission -y</p>
        <p>After the installation you will need to configure
            <b>&#39;settings.json&#39;</b> which is located in
            <b>/etc/transmission-daemon/settings.json</b></p>
        <p>Before you start changing any settings make sure that the transmission-daemon is not running. I use the next
            command for
            that, probably there are more ways that work. It is a matter of taste, ... good taste :)</p>
        <p class="well well-sm code">root@sh-srv:~# /etc/init.d/transmission-daemon stop</p>
        <p>Find the next settings in the configuration file and modify them to suit your needs</p>
        <p class="well well-sm code">
            &quot;download-dir&quot;: &quot;/downloads&quot;,<br/>
            &quot;incomplete-dir&quot;: &quot;/downloads&quot;,<br/>
            &quot;rpc-authentication-required&quot;: true,<br/>
            &quot;rpc-username&quot;: &quot;&quot;,<br/>
            &quot;rpc-whitelist-enabled&quot;: false,<br/>
            &quot;rpc-password&quot;: &quot;&quot;,<br/>
        </p>
        <p>To configure authentication for transmission you will need to type a username, password in quotations and set
            authenitcation required to true.</p>
        <p class="well well-sm code">
            &quot;rpc-username&quot;: &quot;username&quot;,<br/>
            &quot;rpc-password&quot;: &quot;password&quot;,<br/>
            &quot;rpc-authentication-required&quot;: true,<br/>
        </p>
        <p>The &quot;downloads&quot; folder by default is located in
            <b>&quot;/var/lib/transmission-daemon/downloads&quot;</b>, it took me some time to figure that out. The good
            news is that you can
            decide where you want to save your downloads, just put the complete path like <b>&quot;/mnt/disk1/downloads&quot;</b>
        </p>
        <p>Remember to give tranmission-daemon ownership of the folder and change the permissions to 744. If it is a
            public samba shared
            folder, give it a 777, otherwise it will not be possible to delete stuff from other computers in the
            network.</p>

        <p class="well well-sm code">root@sh-srv:~# chown debian-transmission:debian-transmission {foldername}<br/
            >root@sh-srv:~# chmod 777 {foldername}</p>


        <p>It is important to set the whitelist to false, otherwise you will need to add the ip of all the computer you
            will be using
            to access the web based GUI.</p>
        <p>
            <span>&quot;rpc-whitelist-enabled&quot;: false,</span>
        </p>
        <p>That is all the basic configuration needed for the transmission daemon to work. You can fine tune it later,
            but first
            let&#39;s start it.</p>
        <p class="well well-sm code">root@sh-srv:~# /etc/init.d/transmission-daemon start</p>
        <p>Now we can log on the transmission web interface. Just start the web browser and type the ip address of your
            machine
            followed by colon and 9091 which is the default port.[Example: http://192.168.1.30:9091].</p>
        <p>Remember that <b>before making changes to the configuration file it is necessary to stop transmission-daemon,
                otherwise the changes can not be saved</b></p>
    </div>
</x-main>
