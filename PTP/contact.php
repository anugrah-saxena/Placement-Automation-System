<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body id="tt29">
<div id="abw">
  <div id="abm">
    <div id="abc">
      <div id="articlebody">
        <pre> &lt;?php    $to = $_REQUEST['sendto'] ;    $from = $_REQUEST['Email'] ;    $name = $_REQUEST['Name'] ;    $headers = &quot;From: $from&quot;;    $subject = &quot;Web Contact Data&quot;;       $fields = array();    $fields{&quot;Name&quot;} = &quot;Name&quot;;    $fields{&quot;Company&quot;} = &quot;Company&quot;;    $fields{&quot;Email&quot;} = &quot;Email&quot;;    $fields{&quot;Phone&quot;} = &quot;Phone&quot;;    $fields{&quot;list&quot;} = &quot;Mailing List&quot;;    $fields{&quot;Message&quot;} = &quot;Message&quot;;       $body = &quot;We have received the following information:\n\n&quot;; foreach($fields as $a =&gt; $b){ 	$body .= sprintf(&quot;%20s: %s\n&quot;,$b,$_REQUEST[$a]); }       $headers2 = &quot;From: noreply@YourCompany.com&quot;;    $subject2 = &quot;Thank you for contacting us&quot;;    $autoreply = &quot;Thank you for contacting us. Somebody will get back to you as soon as possible, usualy within 48 hours. If you have any more questions, please consult our website at www.oursite.com&quot;;      if($from == '') {print &quot;You have not entered an email, please go back and try again&quot;;}    else {    if($name == '') {print &quot;You have not entered a name, please go back and try again&quot;;}    else {    $send = mail($to, $subject, $body, $headers);    $send2 = mail($from, $subject2, $autoreply, $headers2);    if($send)    {header( &quot;Location: http://www.YourDomain.com/thankyou.html&quot; );}    else    {print &quot;We encountered an error sending your mail, please notify webmaster@YourCompany.com&quot;; }    }  }   ?&gt; </pre>
      </div>
    </div>
  </div>
</div>
</body>
</html>
