<div dir="rtl">
<h3>Moves in squared strings (II)</h3>

<br>
به شما یک رشته n خط داده می شود که هر زیر رشته دارای n کاراکتر است: به عنوان مثال:
<div dir="ltr">
s = "abcd\nefgh\nijkl\nmnop"
</div>
<br>
برخی از تحولات این مربع رشته ها را مطالعه خواهیم کرد.
<br>
چرخش ساعت 180 درجه: پوسیدگی
<br>
selfie_and_rot (s) (یا selfieAndRot یا selfie-and-rot) این رشته اولیه + رشته ای است که با چرخش ساعت 180 درجه با نقاط متقاطع به ترتیب به دست می آید (امیدوارم) برای بهتر نشان دادن چرخش هنگام چاپ.

<br>
<div dir="ltr">
s = "abcd\nefgh\nijkl\nmnop" --> 
<br>
"abcd....\nefgh....\nijkl....\nmnop....\n....ponm\n....lkji\n....hgfe\n....dcba"
<br>
<br>
<h3>
<code>
    <pre>
        or printed:
                |rotation        |selfie_and_rot
                |abcd --> ponm   |abcd --> abcd....
                |efgh     lkji   |efgh     efgh....
                |ijkl     hgfe   |ijkl     ijkl....   
                |mnop     dcba   |mnop     mnop....
                                           ....ponm
                                           ....lkji
                                           ....hgfe
                                           ....dcba
    </pre>
</code>
</h3>
</div>
<br>
توجه داشته باشید که تعداد نقاط طول معمول "abcd" ، "efgh" ، "ijkl" ، "mnop" است.
<br>
وظیفه:
<br>
این دو عملکرد را بنویسید
<h4>همچنین</h4>
عملکرد عملکرد بالا (fct ، s) در کجا
<br>
fct عملکرد یک متغیر f برای اعمال بر روی رشته s است (fct یکی از vertMirror ، horMirror خواهد بود)
<br>
<div dir="ltr">
<h3>
    <code>
        <pre>
            Examples:
                s = "abcd\nefgh\nijkl\nmnop"
                oper(rot, s) => "ponm\nlkji\nhgfe\ndcba"
                oper(selfie_and_rot, s) => "abcd....\nefgh....\nijkl....\nmnop....\n....ponm\n....lkji\n....hgfe\n....dcba"
        </pre>
    </code>
</h3>
</div>
<br>
یادداشت:
<br>
فرم پارامتر fct در اپر با توجه به زبان تغییر می کند. شما می توانید هر فرم را با توجه به زبان در "نمونه تست ها" مشاهده کنید.
<br>
به راحتی می توان این کاتاها را از شماره (I) به شماره (IV) برد
<br>
کاتاهای آینده ، تحولات دیگر را مطالعه می کنند.
<br>
یادداشت 2:
<br>
رشته های ورودی به جای \ n از یکدیگر جدا می شوند. رشته های خروجی باید به جای \ n با \ r جدا شوند. به "نمونه آزمایشات" مراجعه کنید.

</div>

https://www.codewars.com/kata/56dbe7f113c2f63570000b86/php