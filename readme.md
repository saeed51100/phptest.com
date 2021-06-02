<h3>Rainfall</h3>
<div dir="rtl">
data and data1 دو رشته با سوابق بارندگی چند شهر برای ماهها از ژانویه تا دسامبر است. سوابق شهرها با \ n از هم جدا می شوند. نام هر شهر به شرح زیر است:.
<br>
داده ها و شهرها را می توان در " Your Test Cases " مشاهده کرد:
<br>
Task:

تابع: mean(town, strng) باید میانگین بارندگی برای شهر و data و data1 strng  را برگرداند (در R و Julia به این تابع میانگین گفته می شود).

تابع: واریانس (شهر ، strng) باید واریانس بارندگی را برای شهر و داده های strng یا data1 را برگرداند.

<br>
</div>
<code>
    <pre>
        mean("London", data), 51.19(9999999999996) 
        variance("London", data), 57.42(833333333374)
    </pre>
</code>
<code>
    <pre>
        Notes:
        if functions mean or variance have as parameter town a city which has no records return -1 or -1.0 (depending on the language)
        Don't truncate or round: the tests will pass if abs(your_result - test_result) <= 1e-2 or abs((your_result - test_result) / test_result) <= 1e-6 depending on the language.
        Shell tests only variance
        A ref: http://www.mathsisfun.com/data/standard-deviation.html
        data and data1 (can be named d0 and d1 depending on the language; see "Sample Tests:") are adapted from: http://www.worldclimate.com
    </pre>
</code>
<br>
<br>
<br>
https://www.codewars.com/kata/56a32dd6e4f4748cc3000006