<div dir="rtl">
<h3>Moves in squared strings (I)</h3>

<br>
این کاتا اولین سکانس چهار نفره درباره "رشته های مربع" است.
<br>
به شما یک رشته n خط داده می شود که هر زیر رشته دارای n کاراکتر است: به عنوان مثال:
<div dir="ltr">
s = "abcd\nefgh\nijkl\nmnop"
</div>
<br>
برخی از تحولات این مربع رشته ها را مطالعه خواهیم کرد.
<br>
<br>
<br>
<div dir="ltr">
Vertical mirror: vert_mirror (or vertMirror or vert-mirror)
<br>
vert_mirror(s) => "dcba\nhgfe\nlkji\nponm"
<br>
Horizontal mirror: hor_mirror (or horMirror or hor-mirror)
<br>
hor_mirror(s) => "mnop\nijkl\nefgh\nabcd"
<br>
<br>
<code>
    <pre>
        or printed:
            vertical mirror   |horizontal mirror   
            abcd --> dcba     |abcd --> mnop
            efgh     hgfe     |efgh     ijkl
            ijkl     lkji     |ijkl     efgh
            mnop     ponm     |mnop     abcd
    </pre>
</code>
</div>
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
        <code>
            <pre>
                Examples:
                    s = "abcd\nefgh\nijkl\nmnop"
                    oper(vert_mirror, s) => "dcba\nhgfe\nlkji\nponm"
                    oper(hor_mirror, s) => "mnop\nijkl\nefgh\nabcd"
            </pre>
        </code>
</div>
<br>
یادداشت:
<br>
فرم پارامتر fct در اپر با توجه به زبان تغییر می کند. شما می توانید هر فرم را با توجه به زبان در "نمونه تست ها" مشاهده کنید.
<br>
<br>
یادداشت 2:
<br>
رشته های ورودی به جای \ n از یکدیگر جدا می شوند. رشته های خروجی باید به جای \ n با \ r جدا شوند. به "نمونه آزمایشات" مراجعه کنید.

</div>

https://www.codewars.com/kata/56dbe0e313c2f63be4000b25/php