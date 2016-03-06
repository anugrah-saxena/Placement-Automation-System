<FORM METHOD=POST ACTION="mailto:first@domain.net;second@otherdomain.org;third@anotherdomain.com"" ENCTYPE="text/plain">
<table border=0 cellspacing=0 cellpadding=2>
<tr>
<td colspan=2>
<font size=2 face="arial" color="#000000">
<INPUT type="text" name=URL size=17 value="http://"> :Your URL<BR>
<INPUT type="text" name=user size=17> :Your Username<BR>
<INPUT type="text" name=email size=17> :Your E-mail
</font>
</td>
</tr>
<tr>
<td>
<font size=1 face="arial" color="#000000">
<INPUT name=subscribe type=radio value="yes" CHECKED> subscribe<BR>
<INPUT name=subscribe type=radio value="no"> unsubscribe<BR>
</font>
</td>
<td>
<SELECT name="choices" size=1>
<OPTION selected> OPTIONS
<OPTION> OPTION 1
<OPTION> OPTION 2
<OPTION> OPTION 3
<OPTION> OPTION 4
<OPTION> OPTION 5
</SELECT>
</td>
</tr>
<tr>
<td colspan=2>
<font size=1 face="arial" color="#000000">
<INPUT type=checkbox name="html" value="sendme" CHECKED>
i can recive email as html<BR>
<INPUT type=checkbox name="receipt" value="sendme">
send me a recipt for this email<BR>
</font>
<TEXTAREA cols=20 rows=10>
Hey !
what do you think of the form? 

cool huh?
</TEXTAREA><br>
<center>
<INPUT NAME="redirect" TYPE="hidden" VALUE="index.html">
<INPUT NAME="NEXT_URL" TYPE="hidden" VALUE="index.html">
<INPUT type=submit value=Send>
<INPUT type=reset value="Clear">
</center>
</td></tr></table>
</FORM>