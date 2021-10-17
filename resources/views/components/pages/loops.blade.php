<x-main>
    <div class="content">
        <h1>Loops in bash scripting</h1>
        <p>Here are some examples on how to use loops in bash scripting.</p>
        <h2># FOR loop</h2>
        <p class="well well-sm code">for i in {1..10}; do ls <em>{filename}</em>$i ; done
            <br/>for i in $(seq 1 10); do echo <em>{filename}</em>$i ; done
            <br/>for i in `seq 1 10` ; do echo <em>{filename}</em>$i ; done
        </p>
        <h2># WHILE loop</h2>
        <p class="well well-sm code">
            while true; do <em>{command}</em> && sleep 1;done
        </p>
        <h2># UNTIL loop</h2>
        <p class="well well-sm code">
            <b># In one line</b>
            <br/>let u=10 ; until [ $u -eq 0 ];do echo $u && let u-=1 ; done
            <br/>
            <br/><strong># With line breaks</strong>
            <br/>#!/bin/bash
            <br/>&emsp;let u=10
            <br/>until [ $u -eq 0 ]; do
            <br/>&emsp;echo $u && let u-=1
            <br/>done
        </p>
        <h2># IF ... THEN ...ELSE Statement</h2>

        <p class="well well-sm code">
            <strong># In one line</strong>
            <br/>if [ $p -eq 34 ]; then echo $p ; else echo "Foobar" ; fi
            <br/>
            <br/><strong># With line breaks</strong>
            <br/>#!/bin/bash
            <br/>if [ "foo" -eq "foo" ]; then
            <br/>&emsp;echo "expression evaluated as true"
            <br/>else
            <br/>&emsp;echo "expression evaluated as false"
            <br/>fi
        </p>

        <h2># IF ... THEN ... ELIF Statement</h2>
        <p class="well well-sm code">
            #!/bin/bash
            <br/>if [ "foo" == "foo" ]; then
            <br/>&emsp;echo "expression evaluated as true"
            <br/>elif [ 4 -lt 5 ]; then
            <br/>&emsp;echo "expression evaluated as true"
            <br/>else
            <br/>&emsp;echo "expression evaluated as false"
            <br/>fi
        </p>

        <h2># CASE Statement</h2>
        <p class="well well-sm code">
            #!/bin/bash
            <br/>case $1 in
            <br/>&emsp; start)
            <br/>&emsp;&emsp; # Commands to execute
            <br/>&emsp;&emsp; ;;
            <br/>&emsp; stop)
            <br/>&emsp;&emsp; # Commands to execute
            <br/>&emsp;&emsp; ;;
            <br/>&emsp; status)
            <br/>&emsp;&emsp; # Commands to execute
            <br/>&emsp;&emsp; ;;
            <br/>&emsp; *)
            <br/>&emsp;&emsp; # if no matches do this (optional)
            <br/>&emsp;&emsp; ;;
            <br/>esac
        <h1>Most used comparison operators</h1>
        <table class="table_black">
            <th colspan="2" class="table_black_hd">String Operators</th>
            <tr>
                <td><b>==</b></td>
                <td>the strings are equal</td>
            </tr>
            <tr>
                <td><b>!=</b></td>
                <td>the strings are not equal</td>
            </tr>
            <tr>
                <td><b>-z</b></td>
                <td>the length of STRING is zero</td>
            </tr>
            <tr>
                <td><b>-n</b></td>
                <td>the length of STRING is nonzero</td>
            </tr>
        </table>
        <table class="table_red">
            <th colspan="2" class="table_red_hd">Integer Operators</th>
            <tr>
                <td><b>-eq</b></td>
                <td>is equal to</td>
            </tr>
            <tr>
                <td><b>-gt</b></td>
                <td>is greater than</td>
            </tr>
            <tr>
                <td><b>-ge</b></td>
                <td>is less than or equal to</td>
            </tr>
            <tr>
                <td><b>-le</b></td>
                <td>is less than or equal to</td>
            </tr>
            <tr>
                <td><b>-lt</b></td>
                <td>is less than</td>
            </tr>
            <tr>
                <td><b>-ne</b></td>
                <td>is not equal to</td>
            </tr>
        </table>

        <table class="table_black">
            <th colspan="2" class="table_black_hd">File Operators</th>
            <tr>
                <td><b>-ef</b></td>
                <td>have the same device and inode numbers</td>
            </tr>
            <tr>
                <td><b>-nt</b></td>
                <td>is newer (modification date) than</td>
            </tr>
            <tr>
                <td><b>-ot</b></td>
                <td>is older than</td>
            </tr>
            <tr>
                <td><b>-e</b></td>
                <td>FILE exists</td>
            </tr>
            <tr>
                <td><b>-f</b></td>
                <td>FILE exists and is a regular file</td>
            </tr>
            <tr>
                <td><b>-s</b></td>
                <td>FILE exists and is greater than zero</td>
            </tr>
        </table>

        <table class="table_red">
            <th colspan="2" class="table_red_hd">Expression Operators</th>
            <tr>
                <td><b>( EXPRESSION )</b></td>
                <td>EXPRESSION is true</td>
            </tr>
            <tr>
                <td><b>! EXPRESSION</b></td>
                <td>EXPRESSION is false</td>
            </tr>
            <tr>
                <td><b>EXPRESSION1 -a EXPRESSION2</b></td>
                <td>logical AND</td>
            </tr>
            <tr>
                <td><b>EXPRESSION1 -o EXPRESSION2</b></td>
                <td>logical OR</td>
            </tr>
        </table>

        <h1>Control flow</h1>
        <p><b>break</b> is used when the execution of the entire loop needs to be interrupted.</p>
        <p><b>continue</b> will transfer control to the next set of code but will not stop the execution of the current
            loop.</p>
        <p><b>exit</b> is self explanatory.</p>
        <p><b>return</b> is used to return data back.</p>
    </div>
</x-main>
