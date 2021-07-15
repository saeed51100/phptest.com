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
<div dir="ltr">
Vertical mirror: vert_mirror (or vertMirror or vert-mirror)
<br>
vert_mirror(s) => "dcba\nhgfe\nlkji\nponm"
<br>
Horizontal mirror: hor_mirror (or horMirror or hor-mirror)
<br>
hor_mirror(s) => "mnop\nijkl\nefgh\nabcd"
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
این دو عملکرد را بنویسید
<br>
<br>
<br>
</div>

https://www.codewars.com/kata/56dbe0e313c2f63be4000b25/php