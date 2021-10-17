<x-main>
    <h1>Manage JVM certificates</h1>
    <div class="content">
        <h3>Check the setup</h3>
        <p>To manage JVM certificates from command line it is necessary to have 'keytool', which is part of the standard
            java distribution.</p>
        <p>Finding where the certs are stored is not difficult, just follow the yellow brick road.</p>
        </br>
        <h4>1. Find JVM home</h4>
        <p class="well well-sm code">
            <b># Find Java home</b></br>
            <b>root@VirtualBox:~#</b> ls -l $(which java) </br>
            lrwxrwxrwx 1 root root 22 Dec 18 13:00 /usr/bin/java -> /etc/alternatives/java</br>
            root@jca-VirtualBox:~# ll /etc/alternatives/java</br>
            lrwxrwxrwx 1 root root 46 Dec 18 13:00 /etc/alternatives/java ->
            /usr/lib/jvm/java-7-openjdk-amd64/jre/bin/java*
        </p>

        <h4>2. Find cacerts path</h4>
        <p>Now you know "/usr/lib/jvm/java-7-openjdk-amd64/jre/" is Java home. The default location for the certs is
            "<em>{JAVA HOME}/lib/security/</em>".</p>
        <p class="well well-sm code">
            <!--<b># Now you know "/usr/lib/jvm/java-7-openjdk-amd64/jre/" is Java home</b></br>-->
            <b>root@VirtualBox:~#</b> ls -l /usr/lib/jvm/java-7-openjdk-amd64/jre/lib/security</br>
            total 8</br>
            <b><em>lrwxrwxrwx 1 root root 27 Nov 19 11:39 cacerts -> /etc/ssl/certs/java/cacerts</em></b></br>
            lrwxrwxrwx 1 root root 40 Nov 19 11:39 java.policy -> /etc/java-7-openjdk/security/java.policy</br>
            lrwxrwxrwx 1 root root 42 Nov 19 11:39 java.security -> /etc/java-7-openjdk/security/java.security</br>
            -rw-r--r-- 1 root root 538 Dec 1 2007 local_policy.jar</br>
            lrwxrwxrwx 1 root root 36 Nov 19 11:39 nss.cfg -> /etc/java-7-openjdk/security/nss.cfg</br>
            -rw-r--r-- 1 root root 520 Dec 1 2007 US_export_policy.jar
        </p>
        <p>In this system JVM certificate file is '<em>/etc/ssl/certs/java/cacerts</em>'.</p>
        </br>
        <h4>3. Confirm that 'keytool' is available</h4>
        <p class="well well-sm code">
            <b>root@VirtualBox:~#</b> ls -l $(which keytool)</br>
            lrwxrwxrwx 1 root root 25 Dec 18 13:00 /usr/bin/keytool -> /etc/alternatives/keytool</br>
            <b>root@VirtualBox:~#</b> ll /etc/alternatives/keytool</br>
            lrwxrwxrwx 1 root root 49 Dec 18 13:00 /etc/alternatives/keytool ->
            /usr/lib/jvm/java-7-openjdk-amd64/jre/bin/keytool*
        </p>
        <p>Just as expected 'keytool' is part of the standard java installation and is located at "<em>{JAVA
                HOME}/jre/bin/keytool</em>"</p>
        </br>

        <h3>Add certificates to the system</h3>
        </br>
        <h4>Fetch the certificate</h4>
        <p>To fetch the certificate you can use the command showed below:</p>
        <p class="well well-sm code">
            <b>user@VirtualBox:~$</b> openssl s_client -connect {host}:{port} -showcerts 2>/dev/null | openssl x509
            -inform PEM -text -out cert.pem
        </p>
        <p>The resulting file ("cert.pem") will look something like this:</br>
        <p class="well well-sm code">
            -----BEGIN CERTIFICATE-----</br>
            MIIf+DCCHuCgAwIBAgIINLbQ6oSzeqAwDQYJKoZIhvcNAQELBQAwSTELMAkGA1UE</br>
            BhMCVVMxEzARBgNVBAoTCkdvb2dsZSBJbmMxJTAjBgNVBAMTHEdvb2dsZSBJbnRl</br>
            cm5ldCBBdXRob3JpdHkgRzIwHhcNMTUxMjEwMTc0NjAwWhcNMTYwMzA5MDAwMDAw</br>
            WjBkMQswCQYDVQQGEwJVUzETMBEGA1UECAwKQ2FsaWZvcm5pYTEWMBQGA1UEBwwN</br>
            BQcDAjCCG5MGA1UdEQS</br>
            -----END CERTIFICATE-----</br>
        </p></p>
        <h4>Update the certificate</h4>
        </br>
        <p>I highly recommend to take a backup of the cacerts or keystore file so it is possible to go back to it in
            case something goes wrong</p>
        <p class="well well-sm code">
            <b>root@VirtualBox:~#:</b> cp /etc/ssl/certs/java/cacerts /etc/ssl/certs/java/cacerts.back</p>
        <p>To delete the old certificate you can use the next command: "keytool --delete -alias {alias} -keystore
            {cacert or keystore} -storepass {password}". Substitute {alias}, {cacerts or keystore} and {password} by the
            alias of the certificate you want to delete, the file in which it is stored and its password. The switch
            "-storepass" is optional, if not used you will be prompted to type the password for the certificate
            file.</p>
        <p class="well well-sm code">
            <b>root@VirtualBox:~#:</b> keytool --delete -alias testcert -keystore cacerts -storepass changeit</p>
        <p>To import the new certificate you can use the next command: "keytool --importcert -alias {alias} -file
            {file.crt} -keystore {cacerts file} [optional: -storepass {password}"<br\>
        <p class="well well-sm code">
            <b>root@VirtualBox:~#:</b> keytool --importcert -alias testcert -file cert.pem -keystore cacerts -storepass
            changeit
        </p>
        <p>The difficult part now is to keep track of the certificates in all your servers and make sure none of them
            expires (especially in production). I have created a litle tool to acomplish this task. It can be set as a
            cronjob to run everyday and it will email you just 30 days before the certificate expires. I know is very
            simple but, it works.</p>
        <!--<p>I think I cover pretty much all practical things needed to know to maintain jvm certificates. If you think I forgot something important, please let me know.</p></br>-->

        <script src="https://gist.github.com/Lyhan/88b1d1551a4fc54a491c.js"></script>
    </div>
</x-main>
