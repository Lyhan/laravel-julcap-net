<x-main>
    <!--<h1>How to use rsa key pairs to log on SSH</h1> -->
    <div class="content">
        <h1>Create public and private keys</h1>
        <p>There are many ways you can generate public and private key pars. As I like to use the terminal I will be
            using ssh-keygen.</p>
        <p class="well well-sm code">root@sh-srv:~# ssh-keygen -t rsa -b 4096</p>
        <p>The -t specifies the type of key to create. You can choose rsa1, rsa or dsa.
            <br/>The -b specifies the number of bits in the key to create.</p>
        <div style="max-width:937px;max-height:438px;">
            <img src="img/key-gen.png">
        </div>
        <p>There are plenty of options, if you want to know more, have a look to the man pages.</p>
        <h1>Add the public key to the server</h1>
        <p>Create a folder named ".ssh" and change the premissions to 700.</p>
        <p class="well well-sm code">jca@sh-srv:~$ mkdir ~/.ssh <br/>jca@sh-srv:~$ chmod 700 ~/.ssh</p>
        <p>Create the file authorized_keys and append the public key. In this case as there are no previous keys we will
            just rename
            the file id_rsa.pub.</p>
        <p class="well well-sm code">root@sh-srv:~# mv id_rsa.pub authorized_keys</p>
        <p>Change the owner and the group for the .ssh folder and all the contents.<br/>Example:</p>
        <p class="well well-sm code">root@sh-srv:~# chown jca. /home/jca/.ssh -R</p>
        <p>If you want to add more keys append the new kees to the authorized_keys file.<br/>Example:</p>
        <p class="well well-sm code">root@sh-srv:~# cat new_public_key &gt;&gt; authorized_keys</p>
        <h1>Use the private key with PuTTy</h1>
        <p>Download the private key from the server. Filezilla can be used to connect using FTP and download files from
            the server, but it is also possible to copy the file to other server using the
            <strong>scp</strong> command like this:<b>scp {file} {username}@{server}:{path}</b></p>
        <p>Example:</p>
        <p class="well well-sm code">root@sh-srv:~# scp test jca@testserver.com:/home/jca</p>
        <p>Once the file is in you computer you can convert the private key using PuTTygen:</p>
        <ol>
            <li>
                <span>Start PuTTygen</span>
            </li>
            <li>
                <span>Click on Load and find the id_rsa file that contains your private key.</span>
            </li>
            <li>
                <span>Click on save private key</span>
            </li>
        </ol>
        <p>To start using the key start Pageant, click on add key and then everything is setup to authenticate with your
            server using the
            private key.</p>
        <h1>Add public keys to other server</h1>
        <p>Lets say that you now want to use the same key pairs for multiple servers, well the only thing that needs to
            be done is to copy
            the .ssh file to your home directory in the new server.</p>
        <p>Remember the permission for .ssh should be 700 and the authorized_keys, nown_hosts files 644. You should be
            the owner and group of the files.</p>
        <div style="max-width:946px;max-height:298px;">
            <img src="img/ssh_ls.png">
        </div>
        <h2>The openSSH format</h2>
        <p>In some cases it might be necessary to convert the key to openSSH format using the ssh-keygen tool.<br/>Example:
        </p>
        <p class="well well-sm code">root@sh-srv:~#ssh-keygen -i -f keyfile.pub > newkeyfile.pub</p>
        <p> The '-i' option will read an unencrypted key and print an OpenSSH compatible to stdout.<br/>The '-f'
            specifies the filename</p>
    </div>
</x-main>

