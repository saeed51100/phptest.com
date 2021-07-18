<div dir="rtl">
<h3>Moves in squared strings (III)</h3>
<br>
به شما یک رشته n خط داده می شود که هر زیر رشته دارای n کاراکتر است: به عنوان مثال:
<div dir="ltr">
s = "abcd\nefgh\nijkl\nmnop"
</div>
<br>
برخی از تحولات این مربع رشته ها را مطالعه خواهیم کرد.
<br>
تقارن با توجه به قطر اصلی: diag_2_sym (یا diag2Sym یا diag-2-sym)
<br>

<br>
<div dir="ltr">
diag_2_sym(s) => "plhd\nokgc\nnjfb\nmiea"
</div>
<br>
چرخش در خلاف جهت عقربه های ساعت 90 درجه: rot_90_ شمارنده (یا rot90 شمارشگر یا rot-90 شمارنده)
<br>
<div dir="ltr">
rot_90_counter(s)=> "dhlp\ncgko\nbfjn\naeim"
</div>
<br>
selfie_diag2_counterclock (یا selfieDiag2Counterclock یا selfie-diag2-counterclock) این رشته اولیه است + رشته ای که با توجه به تقارن اصلی با قطر اصلی مورب + چرخش خلاف جهت عقربه های ساعت 90 درجه بدست می آید.
<br>
<div dir="ltr">
s = "abcd\nefgh\nijkl\nmnop" --> 
"abcd|plhd|dhlp\nefgh|okgc|cgko\nijkl|njfb|bfjn\nmnop|miea|aeim"
</div>
<br>
</div>

<h3>
<div dir="ltr">
        <code>
            <pre>
    or printed for the last:
                    selfie_diag2_counterclock
                    abcd|plhd|dhlp
                    efgh|okgc|cgko
                    ijkl|njfb|bfjn
                    mnop|miea|aeim
            </pre>
        </code>
</div>
</h3>
<div dir="rtl">
<br>
<br>
وظیفه:
<br>
این توابع را diag_2_sym ، rot_90_counter ، selfie_diag2_counterclock بنویسید
<h4>همچنین</h4>
عملکرد عملکرد بالا (fct ، s) در کجا
<br>
fct عملکرد یک متغیر f برای اعمال بر روی رشته s است (fct یکی از diag_1_sym ، rot_90_clock ، selfie_and_diag1 خواهد بود)
<br>
</div>

<div dir="ltr">
<h3>
    <code>
        <pre>
            Examples:
                s = "abcd\nefgh\nijkl\nmnop"
                oper(diag_2_sym, s) => "plhd\nokgc\nnjfb\nmiea"
                oper(rot_90_counter, s) => "dhlp\ncgko\nbfjn\naeim"
                oper(selfie_diag2_counterclock, s) => "abcd|plhd|dhlp\nefgh|okgc|cgko\nijkl|njfb|bfjn\nmnop|miea|aeim"
        </pre>
    </code>
</h3>
</div>
<br>
<div dir="rtl">
یادداشت:
<br>
فرم پارامتر fct در اپر با توجه به زبان تغییر می کند. هر فرم را می توانید با توجه به زبان در "موارد آزمایشی شما" مشاهده کنید.
<br>
به راحتی می توان این کاتاها را از شماره (I) به شماره (IV) برد
<br>
توجه داشته باشید Bash: رشته های خروجی باید به جای \ n با \ r جدا شوند. به "نمونه آزمایشات" مراجعه کنید.
<br>
<br>
</div>
https://www.codewars.com/kata/56dbf59b0a10feb08c000227/php