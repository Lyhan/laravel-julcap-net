<x-main>
    <h1>Manage user/group quota</h1>
    <div class="content">
        <p>To manage user quota it is necessary to install the 'quota' package. It is not installed by default.</p>

        <p class="well well-sm code">root@sh-srv:~# apt-get install quota</span></i></p>

        <p>Create quota files using the 'quotacheck' command followed by the options and the
            device or path where it is mounted. In the example the device name is used.</p>

        <p class="well well-sm code">root@sh-srv:~# quotacheck -cug /dev/sda1</p>

        <p>-c<i>&nbsp;Create file&nbsp;</i></p>

        <p>-u&nbsp;<i>User file</i></p>

        <p>-g&nbsp;<i>Group file</i></p>
        <div style="max-width:486px;max-height:135px;">
            <img src="img/quota_files.png" alt="quota_files">
        </div>
        <p>The new files 'aquota.group' amdaquota.user' are binary files and therefore can not be
            edited with a text editor. To edit these files it is necessary to use the
            'edquota' tool follow by the user/group.</p>

        <p class="well well-sm code">root@sh-srv:~# edquota -u julian</p>

        <p>The 'edquota' tool will parse a piece of the 'aquota.user' file so it will be
            editable. It is possible to limit the amount of blocks and inodes the user can
            use in the partition.</p>
        <div style="max-width:841px;max-height:150px;">
            <img src="img/edquota_julian.png" alt="edquota_julian">
        </div>
        <p><b>Soft Limit</b> - Number of blocks/inodes that can be used by the user</p>

        <p><b>Hard Limit</b> - When the soft limit is passed the user can still save data until it reaches the hard
            limit
            within the grace period.</p>

        <p><b>Grace period</b> - Default is 7 days in which the user after passing the soft limit can
            still store files.</p>

        <p>Once the soft limit is passed the user has a period of time to
            get under the soft limit wich is called the <i>grace period</i>. During
            the grace time the user can still save data until the hard limit is reached.
            Either reaching the hard limit or expiring the grace time will cause the user
            not to be able to save more files.</p>

        <p>To activate quotas:</p>

        <p class="well well-sm code">root@sh-srv:~# quotaon</p>

        <p>To deactivate quotas:</p>

        <p class="well well-sm code">root@sh-srv:~# quotaoff</p>

        <p>To change the grace period:</p>

        <p class="well well-sm code">root@sh-srv:~# edquota -t</p>
        <div style="max-width:655px;max-height:134px;">
            <img src="img/edit_grace_period.png">
        </div>
        <p>The 'repquota' tool will provide an overview of the disk quota usage.</p>

        <p class="well well-sm code">root@sh-srv:~# repquota /dev/sda1</p>
        <div style="max-width:672px;max-height:164px;">
            <img src="img/repquota.png">
        </div>
    </div>
</x-main>
