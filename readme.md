<h3>Is your period late?</h3>
<div dir="rtl">
در این کاتا ، ما تابعی را برای بررسی تأخیر پریود ایجاد خواهیم کرد. عملکرد ما سه پارامتر را در بر خواهد گرفت: last - شی Date با تاریخ آخرین دوره امروز - تاریخ Date با تاریخ چک cycleLength - عدد صحیحی که طول چرخه را در روز نشان می دهد اگر تعداد روزهایی که از روز گذشته به امروز منتقل شده اند بیشتر از cycleLength است ، درست برگردید. در غیر این صورت ، نادرست برگردید.


</div>
<code>
    <pre>
        function periodIsLate($last, $today, $cycleLength) {
            return false;
            }
    </pre>
</code>
<br>
<br>
<br>
https://www.codewars.com/kata/578a8a01e9fd1549e50001f1/train/php

<code>
    <pre>
        <h3>// date in php</h3>
        echo  date("Y/m/d") ; // 2021/05/06
        echo  date("y/m/d") ; // 21/05/06
        echo  date("Y.m.d") ; // 2021.05.06
        echo  date("Y-m-d") ; // 2021-05-06
        echo  date("Y M D"); // 2021 May Thu
        echo  date("l"); // Thursday
        echo  date("F"); // May
        echo  date("h:i:sa"); // 05:38:54pm
        echo  date("g:i:s a"); // 5:38:54 pm
        echo  time(); // 1620322734
        echo  date("N"); // 4
        echo  date("w"); // 4
        echo  date("z"); // 125
        echo  date("W"); // 18
        echo  date("t"); // 31
        echo  date("L"); // 0
        echo  date("e"); // UTC
        echo  date("P"); //+00:00
    </pre>
</code>
