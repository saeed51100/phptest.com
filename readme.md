<div dir="rtl">
<h3>Scaling Squared Strings</h3>
به شما رشته ای از n خط داده می شود که هر زیر رشته دارای n کاراکتر است. مثلا:
<br>
<div dir="ltr">
s = "abcd\nefgh\nijkl\nmnop"
</div>
<br>
مقیاس بندی "افقی" و "عمودی" این مربع رشته ها را مطالعه خواهیم کرد.
<br>
مقیاس بندی k- افقی یک رشته شامل تکرار k برابر هر کاراکتر رشته است (به جز '\ n').
<br>
مثال: مقیاس گذاری 2 افقی از s: => "aabbccdd \ neeffgghh \ niijjkkll \ nmmnnoopp"
<br>
مقیاس گذاری عمودی یک رشته شامل تکرار v در هر قسمت از رشته مربع است.
<br>
مثال: مقیاس گذاری 2 عمودی s: => "abcd \ nabcd \ nefgh \ nefgh \ nijkl \ nijkl \ nmnop \ nmnop"
<br>
مقیاس عملکرد (strng ، k ، v) مقیاس بندی افقی k و مقیاس عمودی V را انجام می دهد.
<br>

</div>
<code>
    <pre>
        Example: 
            a = "abcd\nefgh\nijkl\nmnop"
            scale(a, 2, 3) --> "aabbccdd\naabbccdd\naabbccdd\neeffgghh\neeffgghh\neeffgghh\niijjkkll\niijjkkll\niijjkkll\nmmnnoopp\nmmnnoopp\nmmnnoopp"
    </pre>
</code>
<br>
<code>
    <pre>
abcd   ----->   aabbccdd
efgh            aabbccdd
ijkl            aabbccdd
mnop            eeffgghh
                eeffgghh
                eeffgghh
                iijjkkll
                iijjkkll
                iijjkkll
                mmnnoopp
                mmnnoopp
                mmnnoopp
    </pre>
</code>
<div dir="rtl">
یادداشت:
<br>
وظیفه: مقیاس تابع را بنویسید (strng ، k ، v) k و v عدد صحیح مثبت خواهند بود. اگر strng == "" بازگشت "".

<br>

<br>
</div>

<br>
<br>
https://www.codewars.com/kata/56ed20a2c4e5d69155000301/php