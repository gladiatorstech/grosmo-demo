<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dashboard</title>
    <script src='https://unpkg.com/tesseract.js@v2.0.2/tesseract.min.js' language="javascript">
    function scanner()
    {
        Tesseract.recognize(
            'download.jpg','eng'
            {logger:m=> console.log(m)}
        ).then(({data:{text}})=>{
            console.log(text);
            document.calc.result.value=text;
        })
    }
    </script>
</head>

<body>
<form name="calc">
<table>
<font color="white">
<tr>
<td>
Result
</td>
<td>
<input type="text" id="result">
</td>
</tr>

<tr>
<td>
<input type="button"  onclick="scanner()"><font color="black">scan</font></button>
</td>
</tr>
</table>
</form>
</body>
</html>

