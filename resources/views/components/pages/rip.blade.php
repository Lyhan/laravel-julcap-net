<x-main>
    <div id="content">
        <h1><acronym title="Routing Information Protocol">RIP<acronym> main features</h1>
        <p><strong>RIPv1</strong> is limited to classful routing. <strong>RIPv2</strong> support classless
            routing,authentication,triggered updates and multicast announcements. <strong>RIPng (RIP Next
                Generation)</strong> Extends RIPv2 to support IPv6.</p>

        <table class="table_red">
            <th class="table_red_hd" colspan="2">Attributes</th>
            <tr>
                <td><strong>Type</strong></td>
                <td>Distance Vector</td>
            </tr>
            <tr>
                <td><strong>Metric</strong></td>
                <td>Hop count (max 15)</td>
            </tr>
            <tr>
                <td><strong>Protocols</strong></td>
                <td>IPv4, IPv6</td>
            </tr>
            <tr>
                <td><strong>Administrative Distance</strong></td>
                <td>120</td>
            </tr>
            <tr>
                <td><strong>Transport</strong></td>
                <td>UDP</td>
            </tr>
            <tr>
                <td><strong>Authentication</strong></td>
                <td>Plaintext, MD5</td>
            </tr>
            <tr>
                <td><strong>Multicast</strong></td>
                <td>224.0.0.9/FF02::9</td>
            </tr>
            <tr>
                <td><strong>Standards</strong></td>
                <td>RFCs 2080,2453</td>
            </tr>
            <tr>
                <td><strong>Algorithm</strong></td>
                <td>Bellman-Ford</td>
            </tr>
        </table>
        <table class="table_black">
            <th class="table_black_hd" colspan="2">
                Terminology
            </th>
            <tr>
                <td><strong>Split Horizon</strong></td>
                <td>A rule that states a router may not advertise a route<br/>
                    back to the neighbor from which it was learned
                </td>
            </tr>
            <tr>
                <td><strong>Route Poisoning</strong></td>
                <td>When a network becomes unreachable, <br/>an update with an infinite metric is generated to<br/>
                    explicitly advertise the route as unreachable
                </td>
            </tr>
            <tr>
                <td><strong>Poison Reverse</strong></td>
                <td>A rule that states a router may not advertise a route<br/>
                    back to the neighbor from which it was learned
                </td>
            </tr>
        </table>
        <table class="table_red">
            <th class="table_red_hd" colspan="2">Timers Defaults</th>
            <tr>
                <td><strong>Update</strong></td>
                <td>30 sec</td>
            </tr>
            <tr>
                <td><strong>Invalid</strong></td>
                <td>180 sec</td>
            </tr>
            <tr>
                <td><strong>Hold-down</strong></td>
                <td>180 sec</td>
            </tr>
            <tr>
                <td><strong>Flush</strong></td>
                <td>240 sec</td>
            </tr>
        </table>
        <h1>How to configure RIP</h1>
        <p class="well well-sm code">
            <b>router></b> enable
            <br/><b>router#</b> config t
            <br/><b>router(config)#</b> router rip
            <br/><b>router(config-router)#</b> version 2
            <br/><b>router(config-router)#</b> network < <em>ip address</em> > < <em>subnetmask</em> >
            <br/><b>router(config-router)#</b> no auto-summary
            <br/><b>router(config-router)#</b> end
            <br/><b>router#</b> wr
        </p>

        <h1>Additional configuration commands</h1>
        <p class="well well-sm code">
            <b>router(config-router)#</b> default-information originate
            <br/><b>router(config-router)#</b> passive-interface { interface | default }
            <br/><b>router(config-router)#</b> timers basic <b>update invalid hold-down flush</b>
            <br/><b>router(config-router)#</b> ip summary-address rip < <em>ip address</em> > < <em>subnetmask</em> >
            <br/><b>router(config-router)#</b> ip rip authentication mode md5
            <br/><b>router(config-router)#</b> ip rip authentication key-chain key-chain
        </p>
        <h1>RIPng Configuration</h1>
        <p class="well well-sm code">
            <b>router(config-router)#</b> [no] split-horizon
            <br/><b>router(config-router)#</b> [no] poison-reverse
        </p>
        <h1>Useful commands for troubleshooting</h1>
        <p class="well well-sm code">
            <b>router></b> enable
            <br/><b>router#</b> show ip protocols
            <br/><b>router#</b> show ip rip database
            <br/><b>router#</b> show ip route [rip]
            <br/><b>router#</b> debug ip rip { database | events | interface }
        </p>
    </div>
    <p>Source <a href="http://packetlife.net">PacketLife</a></p>
</x-main>
