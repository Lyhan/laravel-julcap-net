<x-main>
    <div id="content">
        <h1><acronym title="Enhanced Interior Gateway Routing Protocol">EIGRP</acronym> main features</h1>
        <p><strong>EIGRP</strong> is based on <strong>IGRP</strong> created by Cisco and uses the <strong>Diffusion
                Update Algorithm(DUAL)</strong> which guarantees loop-free operation.</p>
        <p><strong>EIGRP</strong> stores data in three tables: <strong>Neigbor table, Topology table and Routing
                table</strong>.</p>

        <table class="table_red">
            <th class="table_red_hd" colspan="2">Attributes</th>
            <tr>
                <td><strong>Type</strong></td>
                <td>Distance Vector</td>
            </tr>
            <tr>
                <td><strong>Internal AD</strong></td>
                <td>90</td>
            </tr>
            <tr>
                <td><strong>External AD</strong></td>
                <td>170</td>
            </tr>
            <tr>
                <td><strong>Summary AD</strong></td>
                <td>5</td>
            </tr>
            <tr>
                <td><strong>Protocols</strong></td>
                <td>IP, IPX, Appletalk</td>
            </tr>
            <tr>
                <td><strong>Transport</strong></td>
                <td>IP/88</td>
            </tr>
            <tr>
                <td><strong>Hello Timers</strong></td>
                <td>5/60</td>
            </tr>
            <tr>
                <td><strong>Hold Timers</strong></td>
                <td>15/180</td>
            </tr>
            <tr>
                <td><strong>Authentication</strong></td>
                <td>MD5</td>
            </tr>
            <tr>
                <td><strong>Multicast</strong></td>
                <td>224.0.0.10</td>
            </tr>
            <tr>
                <td><strong>Standards</strong></td>
                <td>Cisco proprietary</td>
            </tr>
            <tr>
                <td><strong>Algorithm</strong></td>
                <td>DUAL</td>
            </tr>
        </table>
        <table class="table_black">
            <th class="table_black_hd" colspan="2">
                Terminology
            </th>

            <tr>
                <td><strong>Reported<br/>Distance</strong></td>
                <td>The metric for a route advertised by a neighbor</td>
            </tr>
            <tr>
                <td><strong>Feasible<br/>Distance</strong></td>
                <td>The distance advertised by a neighbor plus the cost<br/>
                    to get to that neighbor
                </td>
            </tr>
            <tr>
                <td><strong>Stuck in Active (SIA)</strong></td>
                <td>The condition when a route becomes unreachable<br/>
                    and not all queries for it are answered; adjacencies<br/>
                    with unresponsive neighbors are reset
                </td>
            </tr>
            <tr>
                <td><strong>Passive Interface</strong></td>
                <td>An interface which does not participate in EIGRP but<br/>
                    whose network is advertised
                </td>
            </tr>
            <tr>
                <td><strong>Stub Router</strong></td>
                <td>A router which advertises only a subset of routes,<br/>
                    and is omitted from the route query process
                </td>
            </tr>
        </table>
        <table class="table_red">
            <th class="table_red_hd" colspan="2">Packet Types</th>
            <tr>
                <td><strong>1</strong></td>
                <td>Update</td>
            </tr>
            <tr>
                <td><strong>3</strong></td>
                <td>Query</td>
            </tr>
            <tr>
                <td><strong>4</strong></td>
                <td>Reply</td>
            </tr>
            <tr>
                <td><strong>5</strong></td>
                <td>Hello</td>
            </tr>
            <tr>
                <td><strong>8</strong></td>
                <td>Acknowledge</td>
            </tr>
        </table>
        <!--
        <h1>How to configure EIGRP</h1>
        <p>How to configure EIGRP as the routing protocol and add directly connected interfaces</p>
        <ul>
        <li></li>
        </ul>
        <p>Additional configuration commands</p>
        <ul>
        <li>.</li>
        </ul>

        <h1>Troubleshooting</h1>
        <ul>
        <li><b>router#</b> show ip protocols</li>
        </ul>
        </div>-->
        <p>Source <a href="http://packetlife.net">PacketLife</a></p>
    </div>
</x-main>
