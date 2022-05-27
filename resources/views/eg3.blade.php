<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hayu Main</title>
</head>
<body>
<SCRIPT LANGUAGE="JavaScript">

var guessme=Math.round(Math.random()*(99)+1);
var speech='Tebak Nomor (Dari 1 sampai 100)';

function process(mystery) {
var guess=document.forms.guessquiz.guess.value;
var speech='"'+guess+ '" does not make sense to me.';
document.forms.guessquiz.guess.value='';

if (guess==mystery)
{
document.forms.guessquiz.prompt.value='Congratulations! '+mystery+' is correct!';
alert ('Well done - the mystery number is '+mystery+'! \n\nPress this button to reload the page for another game.');
speech='';
document.location=document.location;
}

if (mystery<guess)
{
speech='Dibawah angka '+ guess;
}

if (mystery>guess)
{
speech='Diatas angka '+ guess;
}

if (guess=='')
{
speech='You didn\'t guess anything!'
}

document.forms.guessquiz.prompt.value=speech; document.forms.guessquiz.guess.focus();

}

// end hide -->
</SCRIPT>

<FORM onSubmit="" NAME="guessquiz">
<CENTER>
<TABLE ALIGN="CENTER" BGCOLOR="#888888" BORDER="3" CELLPADDING="5">
<TR>
<TD BGCOLOR="#004080">
<FONT COLOR="#ffffff" FACE="Arial"><B>Tebak Nomor (1 - 100)</B></FONT>
</TD>
</TR>
<TR>
<TD>
<CENTER>
<INPUT TYPE="text" NAME="prompt" SIZE="31" MAXLENGTH="40" VALUE="Guess my number (from 1 to 100)"><BR>
<INPUT TYPE="text" NAME="guess" SIZE="3" MAXLENGTH="3" VALUE="">
<INPUT TYPE="button" VALUE="Guess" onClick='process(guessme)'>
</CENTER>
</TD>
</TR>
</TABLE>
</CENTER>
</FORM>
</body>
</html>