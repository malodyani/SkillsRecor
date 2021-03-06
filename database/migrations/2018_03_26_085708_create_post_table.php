<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->text('post');
        });
        
        	DB::table('post')->insert(
        			['post' => '
           <strong>ما هو السجل المهاري؟</strong><br />
               هو وثيقة رسمية معتمدة من الجامعة تصدرها وحدة السجل المهاري بمركز الحاسب وتنمية المهارات للتدريب بعمادة شؤون الطلاب تشتمل على كافة الدورات التدريبية التي حصل عليها الطالب/الطالبة خلال فترة دراسته الجامعية.</p>
               <p><strong>ما هي فائدة السجل المهاري؟</strong><br />
               يساعد السجل المهاري في تحسين فرص الطلاب والطالبات المتخرجين في الحصول على الوظائف المناسبة من خلال توفير إثبات رسمي لقدراتهم ومهاراتهم في المجالات غير الأكاديمية مما يدعم فرص منافستهم على الوظائف.</p>
               <p><strong>ما هي أهداف السجل المهاري؟</strong></p>
               <ol><li dir="RTL">
                   تزويد الطالب والطالبة بوثيقة رسمية توضح المهارات المهنية والشخصية المكتسبة خلال مرحلة الدراسة الجامعية.
                   </li>
               <li dir="RTL">
                   تحسين مخرجات الجامعة من خلال دعم وإثراء السيرة الذاتية للطلبة.
                   </li>
               <li dir="RTL">
                   إبراز جهود الطالب والطالبة في تأهيل نفسه في المجالات الإضافية غير الأكاديمية.
                   </li>
               <li dir="RTL">
                   توثيق مشاركات الطلاب وجهودهم الشخصية وتفاعلهم مع الحياة الجامعية.
                   </li>
               <li dir="RTL">
                   تحفيز الطلاب والطالبات للاهتمام بتنمية مهاراتهم غير الأكاديمية.
                   </li>
               </ol><p><strong>كيف يمكن الحصول على السجل المهاري؟</strong><br />
               إذا سبق لك الالتحاق بأي دورة تدريبية داخل الجامعة ، فيمكنك الدخول على البوابة الالكترونية في موقع الجامعة ، واختيار (إقونة السجل المهاري) ثم تسجيل الدورات التي حصلت عليها في النماذج الموجودة على الموقع (بعد قراءة الشروط والضوابط) والموافقة عليها ، ثم مراجعة وحدة السجل المهاري بالدور الرابع مبنى رقم (17) مصطحباً معك أصول شهادات الدورات التي سجلتها على الموقع لمطابقتها واعتمادها ، ومن ثم يمكنك طباعة السجل المهاري الخاص بك المعتمد والمختوم من الموقع مباشرة.</p>
               <p><strong>ما هي الدورات المعتمدة في السجل المهاري؟</strong><br />
               يحتوي السجل المهاري على رصد لمهارات الطالب في مجالات رئيسية هي:<br />
               1.    مهارات الحاسب الآلي الأساسية والتخصصية.<br />
               2.  الدورات التدريبية المهنية التي تخدم حقول علمية أو تخصصية شريطة أن تكون خلال فترة الدراسة الجامعية وأن تكون معتمدة من الجهات التي نظمتها ويمكن التحقق من صدقيتها.<br />
               3.    مهارات تطوير الذات وبناء الشخصية<br />
               4.    المشاركة في العمل التطوعي وخدمة المجتمع<br />
               5.    المشاركات في مجال النشاط الطلابي<br />
               6.    المهارات القيادية الطلابية.<br />
               7.    الجوائز التي حصل عليها الطلبة.<br />
               8.    أي دورات أخرى حصل عليها الطالب/الطالبة داخل الجامعة.</p>
               <p><strong>ما هي اللغات التي يصدر بها السجل المهاري؟</strong><br />
               يتم إصدار السجل المهاري باللغتين العربية والانجليزية ، على حسب رغبة الطالب/الطالبة ، واللغة التي قام بتسجيل مهاراته ودوراته بها على الموقع.<br />
                <br /><strong>ما هي آلية تسجيل المهارات والدورات في السجل المهاري:</strong><br />
               1.  أن يقوم الطالب/الطالبة بالدخول إلى البوابة الإلكترونية (EduGate) على موقع الجامعة باستخدام اسم المستخدم وكلمة السر الخاصة به ، ثم اختيار ايقونة السجل المهاري.<br />
               2.    يقوم الطالب/الطالبة بالاطلاع على الصفحة التعريفية عن السجل المهاري (اختيارية).<br />
               3.  يقوم الطالب/الطالبة بالاطلاع على صفحة الشروط والضوابط ثم الضغط على خيار (موافق) ، علماً بأنه لن يستطيع فتح الصفحة التالية إذا لم يوافق على الشروط.<br />
               4.  عند دخول الطالب/الطالبة على صفحة السجل المهاري يقوم بتعبئة المهارات والدورات التي حصل عليها في الحقول الموجودة باستخدام القوائم المنسدلة ، وفي حالة عدم توفر المسمى المطلوب في القائمة المنسدلة يقوم الطالب/الطالبة بتعبئة البيانات في حقل (أخرى) المتوفر في القائمة المنسدلة.<br />
               5.  على الطالب/الطالبة مراجعة وحدة السجل المهاري لإعتماد البيانات التي قام بإدخالها مصطحباً معه/ها إثبات الشخصية وأصول الشهادات التي قام بإدخالها في السجل المهاري.<br />
               6.  على موظف/موظفة وحدة السجل المهاري تدقيق البيانات ومضاهاتها مع أصول الشهادات ، وعدم اعتماد أي بيانات ليس لديها إثبات.<br />
               7.    يمكن للطالب/الطالبة طباعة السجل المهاري من الموقع في أي وقت.<br />
                <br /><strong>ما هي ضوابط السجل المهاري:</strong><br />
               1.    أن يكون الطالب/ الطالبة من طلبة الجامعة (منتظم ، خريج ، منقطع ، مفصول ، معتذر).<br />
               2.    ألا تتجاوز فترة التخرج عند التقدم لتسجيل المهارات والدورات المكتسبة عن سنتين.<br />
               3.    أن يقوم الطالب/الطالبة بتعبئة بيانات سجله المهاري في موقع البوابة الالكترونية باللغة التي يرغبها (العربية/الانجليزية) وفقاً للشروط والضوابط الموجودة على الموقع.<br />
               4.  لن يتم اعتماد بيانات السجل المهاري المدخلة من قبل الطالب/ الطالبة إلا بعد مراجعة وحدة السجل المهاري بمركز تنمية المهارات الطلابية بعمادة شؤون الطلاب أو وكالة العمادة لشؤون الطالبات.<br />
               5.  لإعتماد البيانات المدخلة من قبل الطالب/الطالبة فيجب أن تكون الشهادات المدرجة ضمن السجل المهاري مختومة وموقعة من الجهة التي أصدرتها داخل الجامعة، وستقوم وحدة السجل المهاري بالعمادة بالتحقق من صحتها.<br />
               6.  لا يمكن للطالب/الطالبة التعديل أو الإضافة أو الحذف في سجله المهاري بعد اعتماده من وحدة السجل المهاري بالعمادة إلا بعد مراجعة عمادة شؤون الطلاب.<br />
               7.    بعد اعتماد البيانات المدخلة سوف يستطيع الطالب/الطالبة طباعة سجله المهاري من الموقع مباشرة.<br /><strong>ما هي شروط تسجيل الدورات في السجل المهاري:</strong><br />
               1.    مهارات الحاسب الآلي الأساسية والتخصصية.<br />
               -         ألا تقل مدة الدورة عن (15) ساعة فأكثر.<br />
               2.    مهارات تطوير الذات وبناء الشخصية<br />
               -         ألا تقل مدة الدورة عن (4) ساعات فأكثر.<br />
               3.    المشاركة في العمل التطوعي وخدمة المجتمع<br />
               -    ألا تقل ساعات المشاركة عن (50) ساعة متواصلة أو متفرقة وتكون الشهادة موثقة من الجهة التي أصدرتها بعد نهاية برنامج العمل التطوعي مباشرة وان يكون العمل التطوعي منظم من جهة داخل الجامعة.<br />
               4.    المشاركات في مجال النشاط الطلابي<br />
               -         ألا يقل عدد الساعات عن (50) ساعة موثقة<br />
               5.    المهارات القيادية<br />
               أن يكون الطالب/الطالبة قد تولى مسؤولية القيادة في المجالات التالية:<br />
               -         رئاسة الأندية الطلابية.<br />
               -         مقرر اللجان الطلابية.<br />
               -         رئاسة أو عضوية المجالس الاستشارية الطلابية.<br />
               -         عضوية لجان الحقوق الطلابية أو مجلس إدارة صندوق الطلاب.<br />
               -         رئاسة الفرق الخاصة بخدمة المجتمع والأعمال التطوعية مع جهات داخل الجامعة.<br />
               -         أخرى<br />
               6.    الجوائز .<br />
               -    أن تكون الجائزة قد حصل عليها من جهة داخل الجامعة في أحد مجالات التفوق الدراسي أو الأنشطة الطلابية أو العمل التطوعي وخدمة المجتمع أو الابتكارات العلمية.<br />
               7.    الدورات التدريبية المهنية التي تخدم حقول علمية أو تخصصية.<br />
               -         أن تكون خلال فترة الدراسة الجامعية وأن تكون معتمدة من جهات داخل الجامعة ويمكن التحقق من صدقيتها.                        <br />
                  ']
        			);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
