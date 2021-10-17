<x-main>

    <h1>Regular expressions</h1>
    <p>There isn't just one set of regular expressions. Different applications use different types of <em>regular
            expression engines</em>. These are the
        two most commong regular expression engines:</p>
    <ul>
        <li>The POSIX <b>Basic Regular Expression</b> (BRE) engine</li>
        <li>The POSIX <b>Extended Regular Expression</b> (ERE) engine</li>
    </ul>
    The special characters recognized by regular expressions are <b> ^ $ [ ] \ . * { } + ? | ( ) </b>
    <div class="content">
        <h1>Basic Regular Expressions</h1>
        <h2>^</h2>
        <p>The <b>caret</b> symbol will match the patern or character searched at the begining of each line.<br/>Example:
        </p>
        <div style="max-width:402px;max-height:122px">
            <img src="img/caret.png">
        </div>
        <h2>$</h2>
        <p>The <b>dolar</b> sign will match the patern or character searched at the end of each line.<br/>Example:</p>
        <div style="max-width:401px;max-height:121px">
            <img src="img/dolar.png">
        </div>
        <h2>[ ]</h2>
        <p><b>Brackets</b> can be used to specify a set of characters like <b>[ioe]</b>. Grep will find all the lines
            that contain at least one of the specified characters inside the brackets.<br/>Example:</p>
        <div style="max-width:401px;max-height:134px">
            <img src="img/brackets.png">
        </div>
        <p>The caret symbol inside brackets <strong>[^]</strong> will invert the selection. Grep will match all the
            lines that <strong>DO NOT</strong> contain the specified characters.<br/>Example:</p>
        <div style="max-width:402px;max-height:122px">
            <img src="img/brackets_caret.png">
        </div>
        <p>You can use a <b>range of characters</b> within brackets like <b>[a-zAZ]</b> or numbers like <b>[0-9]</b>.
            <br/> Example:</p>
        <div style="max-width:402px;max-height:134px">
            <img src="img/bracket_ranges.png">
        </div>
        <h2>\</h2>
        <p><b>Back slash</b> is the escape character. It used when the searced pattern includes special characters.<br/>Example:
        </p>
        <div style="max-width:402px;max-height:134px">
            <img src="img/escape.png">
        </div>
        <h2 style="font-size:20px">.</h2>
        <p>The <b>period</b> is used to match any character in the place where it is used.<br/>Example:</p>
        <div style="max-width:402px;max-height:134px">
            <img src="img/period.png">
        </div>
        <h2 style="font-size:20px">*</h2>
        <p>The <b>asterix</b> can be a little bit tricky. <b>It is NOT a wildcard</b>, it will match zero or more times
            the preceding character.
            <br/>Example:</p>
        <div style="max-width:402px;max-height:134px">
            <img src="img/asterix.png">
        </div>
        <h1>Character classes</h1>
        <p>It is possible to use ranges like <b>[0-9]</b> or a class like <b>[[:alpha:]]</b> to match for only numbers.
            The <abbr title="Basic Regular Expressions">BRE</abbr> contains special character classes that can be used
            to match specific types of characters.</p>
        <table class="table_black">
            <th class="table_black_hd" colspan="2">BRE Special Character Classes.</th>
            <tr>
                <td><strong>[[:alpha:]]</strong></td>
                <td>Match any alphabetical character, either upper or lower case.</td>
            </tr>
            <tr>
                <td><strong>[[:alnum:]]</strong></td>
                <td>Match any alphanumeric character 0 - 9, A - Z, or a - z.</td>
            </tr>
            <tr>
                <td><strong>[[:blank:]]</strong></td>
                <td>Match a space or Tab character.</td>
            </tr>
            <tr>
                <td><strong>[[:digit:]]</strong></td>
                <td>Match a numerical digit from 0 through 9.</td>
            </tr>
            <tr>
                <td><strong>[[:lower:]]</strong></td>
                <td>Match any lower-case alphabetical character a - z.</td>
            </tr>
            <tr>
                <td><strong>[[:print:]]</strong></td>
                <td>Match any printable character.</td>
            </tr>
            <tr>
                <td><strong>[[:punct:]]</strong></td>
                <td>Match a punctuation character.</td>
            </tr>
            <tr>
                <td><strong>[[:space:]]</strong></td>
                <td>Match any whitespace character: space, Tab, NL, FF, VT, CR.</td>
            </tr>
            <tr>
                <td><strong>[[:upper:]]</strong></td>
                <td>Match any upper-case alphabetical character A - Z.</td>
            </tr>
        </table>
        <h1>Extended Regular Expressions</h1>
        <h2>?</h2>
        <p>The <b>question mark</b> indicates that the preceding character can appear zero or one time.
            The difference with the asterix is that the question mark will not match repeating occurrences of the
            character. <br/>Example:</p>
        <div style="max-width:402px;max-height:122px">
            <img src="img/question_mark.png">
        </div>
        <h2>+</h2>
        <p>The <b>plus sign</b> indicates that the preceding character can appear one or more times, but must be present
            at least once.</p>
        <div style="max-width:402px;max-height:168px">
            <img src="img/plus_sign.png">
        </div>
        <h2>{ }</h2>
        <p><b>Curly braces</b> allow to spedify a limit on a repeatable expression,{lower,upper} or just {min}. <br/>Example:
        </p>
        <div style="max-width:402px;max-height:198px">
            <img src="img/curly_braces.png">
        </div>

        <h2>|</h2>
        <p>The <b>pipe symbol</b> is used to match two or more patterns treated as a <b>logical OR</b> formula.</p>
        <div style="max-width:402px;max-height:134px">
            <img src="img/pipe.png">
        </div>

        <h2>( )</h2>
        <p><b>Parentheses</b> are used to group regular expressions patterns, the resulting group will be treated as a
            character.
            <br/> Example:</p>
        <div style="max-width:402px;max-height:148px">
            <img src="img/parentheses.png">
        </div>
        <h1>Examples</h1>
        <p>Find all blanc lines in a file:</p>
        <p class="well well-sm code">grep '^$' {file}</p>
        <p>Find any two digit numbers in a file:</p>
        <p class="well well-sm code">grep ^[0-9][0-9]$ {file}</p>
        <p>Find any line that starts with a period:</p>
        <p class="well well-sm code">grep '^\.' {file}</p>
        <p>Find lines that only have one character:</p>
        <p class="well well-sm code">grep '^.$' {file}</p>
    </div>
</x-main>


