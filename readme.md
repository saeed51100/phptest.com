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
تقارن با توجه به مورب اصلی: diag_1_sym (یا diag1Sym یا diag-1-sym)
<br>

<br>
<div dir="ltr">
diag_1_sym(s) => "aeim\nbfjn\ncgko\ndhlp"
</div>
<br>
چرخش در جهت عقربه های ساعت 90 درجه: rot_90_clock (یا rot90Clock یا rot-90-clock)
<br>
<div dir="ltr">
rot_90_clock(s) => "miea\nnjfb\nokgc\nplhd"
</div>
<br>
selfie_and_diag1 (ها) (یا selfieAndDiag1 یا selfie-and-diag1) این رشته اولیه است + رشته ای که با توجه به قطر اصلی نسبت به مورب اصلی بدست می آید.
<br>
<div dir="ltr">
s = "abcd\nefgh\nijkl\nmnop" -->
"abcd|aeim\nefgh|bfjn\nijkl|cgko\nmnop|dhlp"
</div>
<br>
</div>

<h3>
<div dir="ltr">
        <code>
            <pre>
    or printed for the last:
                    selfie_and_diag1:
                    abcd|aeim
                    efgh|bfjn
                    ijkl|cgko 
                    mnop|dhlp
            </pre>
        </code>
</div>
</h3>
<div dir="rtl">
<br>
توجه داشته باشید که تعداد نقاط طول معمول "abcd" ، "efgh" ، "ijkl" ، "mnop" است.
<br>
وظیفه:
<br>
این توابع را diag_1_sym ، rot_90_clock ، selfie_and_diag1 بنویسید
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
                oper(diag_1_sym, s) => "aeim\nbfjn\ncgko\ndhlp"
                oper(rot_90_clock, s) => "miea\nnjfb\nokgc\nplhd"
                oper(selfie_and_diag1, s) => "abcd|aeim\nefgh|bfjn\nijkl|cgko\nmnop|dhlp"
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
توجه داشته باشید Bash: رشته های خروجی به جای \ n باید با \ r جدا شوند. به "نمونه آزمایشات" مراجعه کنید.
<br>
<br>
</div>
https://www.codewars.com/kata/56dbeec613c2f63be4000be6/php