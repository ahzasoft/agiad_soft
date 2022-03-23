<!-- business information here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Receipt-{{$receipt_details->invoice_no}}</title>
</head>
@include('sale_pos.receipts.invoice_style')
<body>
@php
    $numbers = range(0, 9);
    function arToIn($num, $pattern)
    {
        if ($pattern == 'TYPE_DEFAULT') {
            $fmt = numfmt_create('ar', NumberFormatter::TYPE_DEFAULT);
        } elseif ($pattern == 'DECIMAL') {
            $fmt = numfmt_create('ar', NumberFormatter::DECIMAL);
        }
        return numfmt_format($fmt, $num);
    }

    function dateFormate($date)
    {
        $fmt = datefmt_create('ar_EG', IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'Africa/Cairo', IntlDateFormatter::GREGORIAN, 'yyyy / M / d');
        return datefmt_format($fmt, $date);
    }
@endphp
{{--partial and due and insatallment  --}}

<div class="installment">
@if ($transaction->payment_status == 'partial' || $transaction->payment_status == 'due')
    @if (count($transaction->installment) > 0)
        <div style="page-break-after: always;">
            @if (!empty($receipt_details->logo))
                <div class="text-box centered">
                    <img style="max-height: 100px; width: auto;" src="{{ $receipt_details->logo }}" alt="Logo">
                </div>
            @endif

            <h1 style="text-align:center">ملف العميل</h1>
            <p>

                <?php
                // $num = $transaction->final_total * 1;
                // $num = numtoarb($num);
                // echo $num;
                ?>
            </p>
            <br><br>
            <table class="table table-bordered" id="installmentTable">
                <tr>
                    <td style="white-space: nowrap;">الإسم</td>
                    <td width="99%"> {{ $transaction->contact->first_name }}
                        {{ $transaction->contact->middle_name }} {{ $transaction->contact->last_name }}</td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;">العنوان</td>
                    <td width="99%">{{ $transaction->contact->address_line_1 }}</td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;">الرقم القومى</td>
                    <td width="99%">
                        {{ arToIn($transaction->contact->custom_field1, 'TYPE_DEFAULT') }}
                    </td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;">رقم الموبايل</td>
                    <td width="99%">
                        {{ arToIn($transaction->contact->mobile, 'TYPE_DEFAULT') }}
                    </td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;">سعر السلعة</td>
                    <td width="99%">
                        {{ arToIn($transaction->final_total, 'DECIMAL') }}
                    </td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;">المبلغ المدفوع</td>
                    <td width="99%">
                        @php
                            $payment_lines_total = 0;
                        @endphp
                        @foreach ($transaction->payment_lines as $payment_lines)

                            @php
                                $payment_lines_total = $payment_lines_total + $payment_lines->amount;
                            @endphp

                        @endforeach
                        {{ arToIn($payment_lines_total, 'DECIMAL') }}
                    </td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;">المبلغ المتبقى</td>
                    <td width="99%">
                        @php
                            $remaining_payments_total = 0;
                        @endphp
                        @foreach ($transaction->installment as $remaining_installment)
                            @if ($remaining_installment->status == 0)
                                @php
                                    $remaining_payments_total = $remaining_payments_total + $remaining_installment->amount;
                                @endphp
                            @endif
                        @endforeach

                        {{ arToIn($transaction->final_total - $payment_lines_total, 'DECIMAL') }}
                    </td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;">تحريرا فى</td>
                    <td width="99%" style="direction: rtl;">
                        {{ dateFormate(\Carbon\Carbon::now()) }}
                    </td>
                </tr>
            </table>
        </div>
        @foreach ($transaction->gurantors as $gurantor)
            <div style="page-break-after: always;">
                @if (!empty($receipt_details->logo))
                    <div class="text-box centered">
                        <img style="max-height: 100px; width: auto;" src="{{ $receipt_details->logo }}"
                             alt="Logo">
                    </div>
                @endif

                <h1 style="text-align:center">ملف الضامن</h1>

                <br><br>
                <table class="table table-bordered" id="installmentTable">
                    <tr>
                        <td style="white-space: nowrap;">الإسم</td>
                        <td width="99%">{{ $gurantor->name }}</td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">العنوان</td>
                        <td width="99%">{{ $gurantor->address }}</td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">الرقم القومى</td>
                        <td width="99%">
                            {{ arToIn($gurantor->national_id, 'TYPE_DEFAULT') }}
                            {{-- DECIMAL --}}
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">رقم الموبايل</td>
                        <td width="99%">
                            {{ arToIn($gurantor->phone, 'TYPE_DEFAULT') }}
                            {{-- DECIMAL --}}
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">سعر السلعة</td>
                        <td width="99%">
                            {{ arToIn($transaction->final_total, 'DECIMAL') }}
                            {{-- DECIMAL --}}
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">المبلغ المدفوع</td>
                        <td width="99%">
                            @php
                                $payment_lines_total = 0;
                            @endphp
                            @foreach ($transaction->payment_lines as $payment_lines)

                                @php
                                    $payment_lines_total = $payment_lines_total + $payment_lines->amount;
                                @endphp

                            @endforeach
                            {{ arToIn($payment_lines_total, 'DECIMAL') }}
                            {{-- DECIMAL --}}
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">المبلغ المتبقى</td>
                        <td width="99%">
                            @php
                                $remaining_payments_total = 0;
                            @endphp
                            @foreach ($transaction->installment as $remaining_installment)
                                @if ($remaining_installment->status == 0)
                                    @php
                                        $remaining_payments_total = $remaining_payments_total + $remaining_installment->amount;
                                    @endphp
                                @endif
                            @endforeach
                            {{ arToIn($transaction->final_total - $payment_lines_total, 'DECIMAL') }}
                            {{-- DECIMAL --}}
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">تحريرا فى</td>
                        <td width="99%">{{ dateFormate(\Carbon\Carbon::now()) }}</td>
                    </tr>
                </table>
            </div>
        @endforeach
        <div id="endorsement" style="page-break-after: always;width: calc(100% - 100px);margin:auto;">

            <h1 style="text-align:center">إقرار استلام</h1>
            <br><br>
            <br><br>


            <div class="row">
                <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">أقر أنا /
                    {{ $transaction->contact->first_name }}
                    {{ $transaction->contact->middle_name }} {{ $transaction->contact->last_name }}</div>
                <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">المقيم /
                    {{ $transaction->contact->address_line_1 }}</div>
            </div>

            <br>
            <br>

            <p style="font-size:20px;word-break: keep-all;">بأنني قد استلمت المبلغ المدون به ايصال الأمان الموقع مني
                والمحرر علي من السيد / </p>

            <br>
            <br>

            <div class="row">
                <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">لصالح السيد /</div>
                <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">المقيم /</div>
            </div>

            <br>
            <br>
            <p style="font-size:20px;word-break: keep-all;text-align: justify;">
                واننى قد استلمت هذا المبلغ نقدي وليس بضاعة وليس من حقي المنازعة بخصوص انتفاء ركن التسليم وذلك
                لإستلامي
                الفعلي لهذا المبلغ وانني ملزم برده نقدا ً - - --- -كما أقر بأن ما دون بالإيصال من بيانات وكذلك
                التوقيع
                المنسوب صدوره لي صحيحين ولا يجوز لي الطعن بالتزوير عليهم أمام المحكمة وفي حالة عدم الرد أكون مبددا
                وخائنا للأمانة ولا يجوز شهادة الشهود في إثبات وجود هذا المبلغ أو الإنقضاء ولا يجوز توجيه اليمين
                الحاسمة
                أو اليمين المتممة مني او من وكيلي إلي المستلم مني والدائن ولا تبرأ ذمتي إلا بتقديم دليل كتابي يفيد
                سداد
                المبلغ المدون بهذا الإيصال والموقع مني بالبصمة والإمضاء إلي المستفيد وفقا ً لنصوص قانون الإثبات .
            </p>
        </div>
        @foreach ($transaction->gurantors as $gurantor)
            <div id="endorsement" style="page-break-after: always;width: calc(100% - 100px);margin:auto;">

                <h1 style="text-align:center">إقرار استلام</h1>
                <br><br>
                <br><br>


                <div class="row">
                    <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">أقر أنا /
                        {{ $gurantor->name }}</div>
                    <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">المقيم /
                        {{ $gurantor->address }}</div>
                </div>

                <br>
                <br>

                <p style="font-size:20px;word-break: keep-all;">بأنني قد استلمت المبلغ المدون به ايصال الأمان الموقع
                    مني
                    والمحرر علي من السيد / </p>

                <br>
                <br>

                <div class="row">
                    <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">لصالح السيد /</div>
                    <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">المقيم /</div>
                </div>

                <br>
                <br>
                <p style="font-size:20px;word-break: keep-all;text-align: justify;">
                    واننى قد استلمت هذا المبلغ نقدي وليس بضاعة وليس من حقي المنازعة بخصوص انتفاء ركن التسليم وذلك
                    لإستلامي
                    الفعلي لهذا المبلغ وانني ملزم برده نقدا ً - - --- -كما أقر بأن ما دون بالإيصال من بيانات وكذلك
                    التوقيع
                    المنسوب صدوره لي صحيحين ولا يجوز لي الطعن بالتزوير عليهم أمام المحكمة وفي حالة عدم الرد أكون
                    مبددا
                    وخائنا للأمانة ولا يجوز شهادة الشهود في إثبات وجود هذا المبلغ أو الإنقضاء ولا يجوز توجيه اليمين
                    الحاسمة
                    أو اليمين المتممة مني او من وكيلي إلي المستلم مني والدائن ولا تبرأ ذمتي إلا بتقديم دليل كتابي
                    يفيد
                    سداد
                    المبلغ المدون بهذا الإيصال والموقع مني بالبصمة والإمضاء إلي المستفيد وفقا ً لنصوص قانون الإثبات
                    .
                </p>
            </div>
        @endforeach
        <div style="page-break-after: always;" id="gurantor-receipt">
            <h1>إيصال إستلام نقدية علي سبيل الأمانة</h1>
            <br>
            <br>
            <br>
            <br>
            <p>
                استلمت انا السيد / {{ $transaction->contact->first_name }}
                {{ $transaction->contact->middle_name }} {{ $transaction->contact->last_name }}
            </p>
            <br><br>
            <p>
                المقيم / {{ $transaction->contact->address_line_1 }}
            </p>
            <br><br>
            <p>
                أحمل رقم قومي : {{ arToIn($transaction->contact->custom_field1, 'TYPE_DEFAULT') }}
                {{-- DECIMAL --}}
            </p>
            <br><br>
            <p>
                من السيد /
            </p>
            <br><br>
            <p>
                مبلغ وقدرة
                ( {{ arToIn($transaction->final_total, 'DECIMAL') }} )
                {{-- DECIMAL --}}
                {{ $total_in_words }}
                {{-- فقط سبعة ألاف خمسة مائة واربعون جنيه مصري فقط
            لا غير --}}
                وذلك لرده للطالب حين طلبه واذ أقم برد المبلغ للطالب اعتبر مبددا وخائنا للأمانة وأتحمل المسئولية
                الجنائية والمدنية نحو إرتكابي
                الجريمة المعاقب عليها قانونا وهذا اقرار مني بذلك


            </p>

            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-4" style="text-align:center;font-size:20px;">التوقيع</div>
                <div class="col-xs-4" style="text-align:center;font-size:20px;">البصمة</div>
                <div class="col-xs-4" style="text-align:center;font-size:20px;">الرقم القومى</div>
            </div>

        </div>
        @foreach ($transaction->gurantors as $gurantor)

            <div style="page-break-after: always;" id="gurantor-receipt">
                <h1>إيصال إستلام نقدية علي سبيل الأمانة</h1>
                <br>
                <br>
                <br>
                <br>
                <p>
                    استلمت انا السيد / {{ $gurantor->name }}
                </p>
                <br><br>
                <p>
                    المقيم / {{ $gurantor->address }}
                </p>
                <br><br>
                <p>
                    أحمل رقم قومي : {{ arToIn($gurantor->national_id, 'TYPE_DEFAULT') }}
                    {{-- DECIMAL --}}
                </p>
                <br><br>
                <p>
                    من السيد /
                </p>
                <br><br>
                <p>
                    مبلغ وقدرة ( {{ arToIn($transaction->final_total, 'DECIMAL') }} )

                    {{ $total_in_words }}
                    {{-- فقط سبعة ألاف خمسة مائة واربعون جنيه مصري فقط
                لا غير --}}
                    وذلك لرده للطالب حين طلبه واذ أقم برد المبلغ للطالب اعتبر مبددا وخائنا للأمانة وأتحمل المسئولية
                    الجنائية والمدنية نحو إرتكابي
                    الجريمة المعاقب عليها قانونا وهذا اقرار مني بذلك


                </p>

                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-4" style="text-align:center;font-size:20px;">التوقيع</div>
                    <div class="col-xs-4" style="text-align:center;font-size:20px;">البصمة</div>
                    <div class="col-xs-4" style="text-align:center;font-size:20px;">الرقم القومى</div>
                </div>

            </div>

        @endforeach

        <div style="page-break-after: always;padding:25px;">
            <?php
            // dd($transaction, $transaction->payment_lines, $transaction->installment, $transaction->installmentBenefit);
            ?>
            @if (!empty($receipt_details->logo))
                <div class="text-box centered">
                    <img style="max-height: 100px; width: auto;" src="{{ $receipt_details->logo }}" alt="Logo">
                </div>
            @endif

            <h1 style="text-align:center">بيان التقسيط</h1>
            <br><br>


            @php
                $count_items = 0;
                $sum_items = 0;
                $items_discount = 0;
                $products = '';
            @endphp
            @forelse($receipt_details->lines as $line)
                @php
                    $count_items++;
                    $sum_items += $line['quantity'];
                    $items_discount += $line['line_discount'];
                    if ($products == '') {
                        $products .= $line['name'];
                    } else {
                        $products .= ', ' . $line['name'];
                    }
                @endphp
                @endforeach



                <table id="installment_calculations">
                    <tr>
                        <td style="white-space: nowrap;">مبلغ الفاتورة</td>
                        <td style="width: 99%;">

                            {{ arToIn($transaction->final_total, 'DECIMAL') }}
                        </td>
                    </tr>

                    <tr>
                        <td style="white-space: nowrap;">عدد الأقساط</td>
                        <td style="width: 99%;">{{ arToIn(count($transaction->installment), 'DECIMAL') }}</td>
                    </tr>

                    <tr>
                        <td style="white-space: nowrap;">المبلغ المدفوع</td>
                        <td style="width: 99%;">{{ arToIn($payment_lines_total, 'DECIMAL') }}</td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">المبلغ المتبقى</td>
                        <td style="width: 99%;">
                            {{ arToIn($transaction->final_total - $payment_lines_total, 'DECIMAL') }}
                        </td>
                    </tr>


                </table>


                @if (count($transaction->installment) > 0)
                    <div style="margin: 15px auto;border: thin solid #000;font-size:20px;text-align:center;">
                        @php
                            $due_percentage = $transaction->installment[0]->due_percentage;
                            $due_interval = $transaction->installment[0]->due_interval;
                            $due_interval_type = $transaction->installment[0]->due_interval_type;
                            $installment_amount = $transaction->installment[0]->amount;
                            $due_penalty = $installment_amount * ($due_percentage / 100);

                        @endphp
                        @if ($due_interval_type == 'day')
                            @php
                                $due_interval_type = 'يوم';
                            @endphp
                        @elseif($due_interval_type == 'month')
                            @php
                                $due_interval_type = 'شهر';
                            @endphp
                        @elseif($due_interval_type == 'year')
                            @php
                                $due_interval_type = 'سنة';
                            @endphp
                        @endif
                        فى حالة تأخير أى قسط يتم توقيع غرامة مقدارها ({{ arToIn($due_penalty, 'DECIMAL') }}) لكل
                        ({{ arToIn($due_interval, 'DECIMAL') }}:
                        {{ $due_interval_type }}) على العميل
                    </div>

                    <h5>بيان الأقساط تفصيليا</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>التوقيت</th>
                            <th>المبلغ</th>
                            <th style="text-align: center;">حالة الدفع</th>
                        </tr>
                        @foreach ($transaction->installment as $installment)


                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ dateFormate($installment->due_date) }}</td>
                                <td>{{ arToIn($installment->amount, 'DECIMAL') }}</td>
                                <td style="text-align: center;">
                                    @if ($installment->status == 1)
                                        &#10003;
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>

                        @endforeach
                    </table>
                @endif


                <br>
                <div style="display: flex;justify-content: space-around;">
                    <div>
                        <div>توقيع المستلم /</div>

                    </div>
                    <div>بصمة</div>
                </div>
        </div>
    @endif

    @if (count($transaction->installment) > 0)
        @foreach ($transaction->gurantors as $gurantor)
            <div style="page-break-after: always;padding:25px;">

                @if (!empty($receipt_details->logo))
                    <div class="text-box centered">
                        <img style="max-height: 100px; width: auto;" src="{{ $receipt_details->logo }}"
                             alt="Logo">
                    </div>
                @endif

                <h1 style="text-align:center">بيان التقسيط</h1>

                @php
                    $count_items = 0;
                    $sum_items = 0;
                    $items_discount = 0;
                    $products = '';
                @endphp
                @forelse($receipt_details->lines as $line)
                    @php
                        $count_items++;
                        $sum_items += $line['quantity'];
                        $items_discount += $line['line_discount'];
                        if ($products == '') {
                            $products .= $line['name'];
                        } else {
                            $products .= ', ' . $line['name'];
                        }
                    @endphp
                    @endforeach

                    <br><br>

                    <table id="installment_calculations">
                        <tr>
                            <td style="white-space: nowrap;">مبلغ الفاتورة</td>
                            <td style="width: 99%;">
                                {{ arToIn($transaction->final_total, 'DECIMAL') }}
                            </td>
                        </tr>

                        <tr>
                            <td style="white-space: nowrap;">عدد الأقساط</td>
                            <td style="width: 99%;">{{ arToIn(count($transaction->installment), 'DECIMAL') }}</td>
                        </tr>

                        <tr>
                            <td style="white-space: nowrap;">المبلغ المدفوع</td>
                            <td style="width: 99%;">{{ arToIn($payment_lines_total, 'DECIMAL') }}</td>
                        </tr>
                        <tr>
                            <td style="white-space: nowrap;">المبلغ المتبقى</td>
                            <td style="width: 99%;">

                                {{ arToIn($transaction->installmentBenefit->installment_amount + $transaction->installmentBenefit->benefits - $payment_lines_total, 'DECIMAL') }}
                            </td>
                        </tr>


                    </table>

                    @if (count($transaction->installment) > 0)
                        <div style="margin: 15px auto;border: thin solid #000;font-size:20px;text-align:center;">
                            @php
                                $due_percentage = $transaction->installment[0]->due_percentage;
                                $due_interval = $transaction->installment[0]->due_interval;
                                $due_interval_type = $transaction->installment[0]->due_interval_type;
                                $installment_amount = $transaction->installment[0]->amount;

                                $due_penalty = $installment_amount * ($due_percentage / 100);

                            @endphp
                            @if ($due_interval_type == 'day')
                                @php
                                    $due_interval_type = 'يوم';
                                @endphp
                            @elseif($due_interval_type == 'month')
                                @php
                                    $due_interval_type = 'شهر';
                                @endphp
                            @elseif($due_interval_type == 'year')
                                @php
                                    $due_interval_type = 'سنة';
                                @endphp
                            @endif
                            فى حالة تأخير أى قسط يتم توقيع غرامة مقدارها ({{ arToIn($due_penalty, 'DECIMAL') }}) لكل
                            ({{ arToIn($due_interval, 'DECIMAL') }}:
                            {{ arToIn($due_interval_type, 'DECIMAL') }}) على العميل
                        </div>

                        <h5>بيان الأقساط تفصيليا</h5>
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>التوقيت</th>
                                <th>المبلغ</th>
                                <th style="text-align: center;">حالة الدفع</th>
                            </tr>
                            @foreach ($transaction->installment as $installment)


                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ dateFormate($installment->due_date) }}</td>
                                    <td>{{ arToIn($installment->amount, 'DECIMAL') }}</td>
                                    <td style="text-align: center;">
                                        @if ($installment->status == 1)
                                            &#10003;
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>

                            @endforeach
                        </table>
                    @endif


                    <br>
                    <div style="display: flex;justify-content: space-around;">
                        <div>
                            <div>توقيع المستلم / </div>

                        </div>
                        <div>بصمة</div>
                    </div>
            </div>
        @endforeach
    @endif

    @if (count($transaction->installment) > 0)
        <div style="page-break-after: always;width: calc(100% - 100px);margin:auto;" id="commodity-sale-statement">
            <h1 style="text-align: center">بيان بيع سلعة</h1>
            <br>
            <br>

            <p>نوع السلعة / {{ $products }}</p>
            <br>

            <p>سعر السلعة / {{ arToIn($transaction->final_total, 'DECIMAL') }}</p>
            <br>
            <p>المبلغ المدفوع / {{ arToIn($payment_lines_total, 'DECIMAL') }}</p>
            <br>
            <p>المبلغ المتبقي /

                {{ arToIn($transaction->installmentBenefit->installment_amount + $transaction->installmentBenefit->benefits - $payment_lines_total, 'DECIMAL') }}
            </p>
            <br>
            <p>عدد أشهر التقسيط / {{ arToIn(count($transaction->installment), 'DECIMAL') }}</p>
            <br><br>

            <h3>إقرار</h3>

            <br><br>

            <div class="row">
                <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">أقر أنا /
                    {{ $transaction->contact->first_name }}
                    {{ $transaction->contact->middle_name }} {{ $transaction->contact->last_name }}</div>
                <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">المقيم /
                    {{ $transaction->contact->address_line_1 }}</div>
            </div>
            <br><br>
            <p>واحمل رقم قومي / {{ arToIn($transaction->contact->custom_field1, 'TYPE_DEFAULT') }}</p>

            <br>
            <br>
            <br>

            <p style="font-size:20px;word-break: keep-all;text-align: justify;">
                اقر بإستلامي السلعة المبينة أعلاه جديدة وغير مستعملة وبحالة جيدة بعد معاينتها المعاينة التامة
                النافية
                للجهالة وقبلتها بحالتها التي هي عليها وقت شراؤها واقر بإلتزامي بسداد جميع الأقساط في موعيدها المحددة
                واذا لم اقم بالسداد أو التأخير عن سداد الأقساط في مواعيدها أعتبر مبددا ً وخائنا للأمانة بقيمة السلعة
                المشتراه وهذا إقرار مني بذلك

            </p>

            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-6">توقيع المستلم</div>
                <div class="col-xs-6">بصمة المستلم </div>
            </div>

        </div>

        @foreach ($transaction->gurantors as $gurantor)
            <div style="page-break-after: always;width: calc(100% - 100px);margin:auto;"
                 id="commodity-sale-statement">
                <h1 style="text-align: center">بيان بيع سلعة</h1>
                <br>
                <br>

                <p>نوع السلعة / {{ $products }}</p>
                <br>

                <p>سعر السلعة / {{ arToIn($transaction->final_total, 'DECIMAL') }}</p>
                <br>
                <p>المبلغ المدفوع / {{ arToIn($payment_lines_total, 'DECIMAL') }}</p>
                <br>
                <p>المبلغ المتبقي /
                    {{ arToIn($transaction->installmentBenefit->installment_amount + $transaction->installmentBenefit->benefits - $payment_lines_total, 'DECIMAL') }}
                </p>
                <br>
                <p>عدد أشهر التقسيط / {{ arToIn(count($transaction->installment), 'DECIMAL') }}</p>
                <br><br>

                <h3>إقرار</h3>

                <br><br>

                <div class="row">
                    <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">أقر أنا /
                        {{ $gurantor->name }}</div>
                    <div class="col-xs-6" style="font-size:20px;word-break: keep-all;">المقيم /
                        {{ $gurantor->address }}</div>
                </div>
                <br><br>
                <p>واحمل رقم قومي / {{ arToIn($gurantor->national_id, 'TYPE_DEFAULT') }}</p>

                <br>
                <br>
                <br>

                <p style="font-size:20px;word-break: keep-all;text-align: justify;">
                    اقر بإستلامي السلعة المبينة أعلاه جديدة وغير مستعملة وبحالة جيدة بعد معاينتها المعاينة التامة
                    النافية
                    للجهالة وقبلتها بحالتها التي هي عليها وقت شراؤها واقر بإلتزامي بسداد جميع الأقساط في موعيدها
                    المحددة
                    واذا لم اقم بالسداد أو التأخير عن سداد الأقساط في مواعيدها أعتبر مبددا ً وخائنا للأمانة بقيمة
                    السلعة
                    المشتراه وهذا إقرار مني بذلك

                </p>

                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-6">توقيع المستلم</div>
                    <div class="col-xs-6">بصمة المستلم </div>
                </div>

            </div>
        @endforeach
    @endif
@endif
{{--End  partial and due and insatallment  --}}

</div>

<div class="ticket">

    {{--Logo --}}
    @if(!empty($receipt_details->logo))
        <div class="text-box centered">
            <img style="max-height: 100px; width: auto;" src="{{$receipt_details->logo}}" alt="Logo">
        </div>
    @endif



    <div class="text-box">
        <p class="centered">
            <!-- Header text -->
            @if(!empty($receipt_details->header_text))
                <span class="headings">{!! $receipt_details->header_text !!}</span>
            @endif
        </p>
        <div class="text-box">
            <p class="centered">
                <span class="headings"><strong>{!! $receipt_details->invoice_no_prefix !!}  {{$receipt_details->invoice_no}}</strong></span>
            </p>
        </div>

        <!-- business information here -->
        <div>
            @if(!empty($receipt_details->display_name))
                <span class="headings">
			   <p class="centered">{{$receipt_details->display_name}}</p>
			</span>
            @endif
        </div>
        @if(!empty($receipt_details->location_custom_fields))
            <span class="headings">
            <p class="centered">
                        {{ $receipt_details->location_custom_fields }}
            </p>
            </span>
        @endif

        {{--Address Line 1--}}
        @if(!empty($receipt_details->sub_heading_line1))
            <p class="centered">{{ $receipt_details->sub_heading_line1 }}</p>
        @endif
        {{--Address Line 2--}}
        @if(!empty($receipt_details->sub_heading_line2))
            <p class="centered">{{ $receipt_details->sub_heading_line2 }}  </p>
        @endif

        {{--Address Line 3--}}
        @if(!empty($receipt_details->sub_heading_line3))
            <p class="centered"> {{ $receipt_details->sub_heading_line3 }}</p>
        @endif
        {{--Address Line 4--}}
        @if(!empty($receipt_details->sub_heading_line4))
            <p class="centered">{{ $receipt_details->sub_heading_line4 }} </p>
        @endif
        {{--Address Line 5--}}
        @if(!empty($receipt_details->sub_heading_line5))
            <p class="centered"> {{ $receipt_details->sub_heading_line5 }}</p>
        @endif

          @if(!empty($receipt_details->address))
            <p class="centered">@lang('lang_v1.loaction_addres') : {{ $receipt_details->address }}</p>
        @endif



        {{--Invoice Date--}}
        @if(!empty($receipt_details->date_label))
            <p ><strong>{!! $receipt_details->date_label !!} :   {{$receipt_details->invoice_date}} </strong></p>
        @endif
        {{--Tax number --}}


        {{--@if(!empty($receipt_details->tax_number))
            <p ><strong>{!! $receipt_details->tax_number  !!}  {{ $receipt_details->tax_number2 }} </strong></p>
        @endif
        @if(!empty($receipt_details->commercial_register))
            <p ><strong>{!! $receipt_details->commercial_register  !!}  </strong></p>
        @endif--}}


            @if(!empty($receipt_details->tax_info1))
            <p>   <b>{{ $receipt_details->tax_label1 }}</b> {{ $receipt_details->tax_info1 }} </p>
            @endif

            @if(!empty($receipt_details->tax_info2))
            <p>  <b>{{ $receipt_details->tax_label2 }}</b> {{ $receipt_details->tax_info2 }}  </p>
            @endif
    </div>





    @if(!empty($receipt_details->due_date_label))
        <div class="textbox-info">
            <p class="f-left"><strong>{{$receipt_details->due_date_label}}</strong></p>
            <p class="f-right">{{$receipt_details->due_date ?? ''}}</p>
        </div>
    @endif

    {{-- User Name --}}


    @if(!empty($receipt_details->sales_person_label))
        <div class="textbox-info">
            <p class="f-left"><strong>{{$receipt_details->sales_person_label}}</strong></p>
            <p class="f-right">{{$receipt_details->sales_person}}</p>
        </div>
    @endif


    @if(!empty($receipt_details->commission_agent_label))
        <div class="textbox-info">
            <p class="f-left"><strong>{{$receipt_details->commission_agent_label}}</strong></p>

            <p class="f-right">{{$receipt_details->commission_agent}}</p>
        </div>
    @endif

    @if(!empty($receipt_details->brand_label) || !empty($receipt_details->repair_brand))
        <div class="textbox-info">
            <p class="f-left"><strong>{{$receipt_details->brand_label}}</strong></p>

            <p class="f-right">{{$receipt_details->repair_brand}}</p>
        </div>
    @endif

    @if(!empty($receipt_details->device_label) || !empty($receipt_details->repair_device))
        <div class="textbox-info">
            <p class="f-left"><strong>{{$receipt_details->device_label}}</strong></p>

            <p class="f-right">{{$receipt_details->repair_device}}</p>
        </div>
    @endif

    @if(!empty($receipt_details->model_no_label) || !empty($receipt_details->repair_model_no))
        <div class="textbox-info">
            <p class="f-left"><strong>{{$receipt_details->model_no_label}}</strong></p>

            <p class="f-right">{{$receipt_details->repair_model_no}}</p>
        </div>
    @endif

    @if(!empty($receipt_details->serial_no_label) || !empty($receipt_details->repair_serial_no))
        <div class="textbox-info">
            <p class="f-left"><strong>{{$receipt_details->serial_no_label}}</strong></p>

            <p class="f-right">{{$receipt_details->repair_serial_no}}</p>
        </div>
    @endif

    @if(!empty($receipt_details->repair_status_label) || !empty($receipt_details->repair_status))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {!! $receipt_details->repair_status_label !!}
                </strong></p>
            <p class="f-right">
                {{$receipt_details->repair_status}}
            </p>
        </div>
    @endif

    @if(!empty($receipt_details->repair_warranty_label) || !empty($receipt_details->repair_warranty))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {!! $receipt_details->repair_warranty_label !!}
                </strong></p>
            <p class="f-right">
                {{$receipt_details->repair_warranty}}
            </p>
        </div>
    @endif

<!-- Waiter info -->
    @if(!empty($receipt_details->service_staff_label) || !empty($receipt_details->service_staff))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {!! $receipt_details->service_staff_label !!}
                </strong></p>
            <p class="f-right">
                {{$receipt_details->service_staff}}
            </p>
        </div>
    @endif

    @if(!empty($receipt_details->table_label) || !empty($receipt_details->table))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    @if(!empty($receipt_details->table_label))
                        <b>{!! $receipt_details->table_label !!}</b>
                    @endif
                </strong></p>
            <p class="f-right">
                {{$receipt_details->table}}
            </p>
        </div>
    @endif

<!-- customer info -->
    <div class="textbox-info">
        <p style="vertical-align: top;"><strong>
                {{$receipt_details->customer_label ?? ''}}
            </strong></p>

        <p>
        @if(!empty($receipt_details->customer_info))
            <div class="bw">
                {!! $receipt_details->customer_info !!}
            </div>
            @endif
            </p>
    </div>

    {{--Client data--}}
    @if(!empty($receipt_details->client_id_label))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {{ $receipt_details->client_id_label }}
                </strong></p>
            <p class="f-right">
                {{ $receipt_details->client_id }}
            </p>
        </div>
    @endif

    @if(!empty($receipt_details->customer_tax_label))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {{ $receipt_details->customer_tax_label }}
                </strong></p>
            <p class="f-right">
                {{ $receipt_details->customer_tax_number }}
            </p>
        </div>
    @endif

    @if(!empty($receipt_details->customer_custom_fields))
        <div class="textbox-info">
            <p class="centered">
                {!! $receipt_details->customer_custom_fields !!}
            </p>
        </div>
    @endif

    @if(!empty($receipt_details->customer_rp_label))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {{ $receipt_details->customer_rp_label }}
                </strong></p>
            <p class="f-right">
                {{ $receipt_details->customer_total_rp }}
            </p>
        </div>
    @endif
    @if(!empty($receipt_details->shipping_custom_field_1_label))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {!!$receipt_details->shipping_custom_field_1_label!!}
                </strong></p>
            <p class="f-right">
                {!!$receipt_details->shipping_custom_field_1_value ?? ''!!}
            </p>
        </div>
    @endif
    @if(!empty($receipt_details->shipping_custom_field_2_label))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {!!$receipt_details->shipping_custom_field_2_label!!}
                </strong></p>
            <p class="f-right">
                {!!$receipt_details->shipping_custom_field_2_value ?? ''!!}
            </p>
        </div>
    @endif
    @if(!empty($receipt_details->shipping_custom_field_3_label))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {!!$receipt_details->shipping_custom_field_3_label!!}
                </strong></p>
            <p class="f-right">
                {!!$receipt_details->shipping_custom_field_3_value ?? ''!!}
            </p>
        </div>
    @endif
    @if(!empty($receipt_details->shipping_custom_field_4_label))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {!!$receipt_details->shipping_custom_field_4_label!!}
                </strong></p>
            <p class="f-right">
                {!!$receipt_details->shipping_custom_field_4_value ?? ''!!}
            </p>
        </div>
    @endif
    @if(!empty($receipt_details->shipping_custom_field_5_label))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    {!!$receipt_details->shipping_custom_field_5_label!!}
                </strong></p>
            <p class="f-right">
                {!!$receipt_details->shipping_custom_field_5_value ?? ''!!}
            </p>
        </div>
    @endif

    @if(!empty($receipt_details->sale_orders_invoice_no))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    @lang('restaurant.order_no')
                </strong></p>
            <p class="f-right">
                {!!$receipt_details->sale_orders_invoice_no ?? ''!!}
            </p>
        </div>
    @endif

    @if(!empty($receipt_details->sale_orders_invoice_date))
        <div class="textbox-info">
            <p class="f-left"><strong>
                    @lang('lang_v1.order_dates')
                </strong></p>
            <p class="f-right">
                {!!$receipt_details->sale_orders_invoice_date ?? ''!!}
            </p>
        </div>
    @endif


    <table style="margin-top: 10px !important" class="border-bottom width-100 table-f-12 mb-10">
        <thead class="border-bottom-dotted">
        <tr>
    {{--        <th class="serial_number">#</th>--}}
            <th class="description" width="30%">
                {{$receipt_details->table_product_label}}
            </th>
            <th class="quantity text-right">
                {{$receipt_details->table_qty_label}}
            </th>
            @if(empty($receipt_details->hide_price))
                <th class="unit_price text-right">
                    {{$receipt_details->table_unit_price_label}}
                </th>
                @if(!empty($receipt_details->item_discount_label))
                    <th class="text-right" width="15%">{{$receipt_details->item_discount_label}}</th>
                @endif
                <th class="price text-right">{{$receipt_details->table_subtotal_label}}</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @forelse($receipt_details->lines as $line)
            <tr>
                {{--<td class="serial_number" style="vertical-align: top;">
                    {{$loop->iteration}}
                </td>--}}
                <td class="description">
                    {{$line['name']}} {{$line['product_variation']}} {{$line['variation']}}
                    @if(!empty($line['sub_sku'])), {{$line['sub_sku']}} @endif @if(!empty($line['brand'])), {{$line['brand']}} @endif @if(!empty($line['cat_code'])), {{$line['cat_code']}}@endif
                    @if(!empty($line['product_custom_fields'])), {{$line['product_custom_fields']}} @endif
                    @if(!empty($line['sell_line_note']))
                        <br>
                        <span class="f-8">
	                        	{{$line['sell_line_note']}}
	                        	</span>
                    @endif
                    @if(!empty($line['lot_number']))<br> {{$line['lot_number_label']}}:  {{$line['lot_number']}} @endif
                    @if(!empty($line['product_expiry'])), {{$line['product_expiry_label']}}:  {{$line['product_expiry']}} @endif
                    @if(!empty($line['warranty_name']))
                        <br>
                        <small>
                            {{$line['warranty_name']}}
                        </small>
                    @endif
                    @if(!empty($line['warranty_exp_date']))
                        <small>
                            - {{@format_date($line['warranty_exp_date'])}}
                        </small>
                    @endif
                    @if(!empty($line['warranty_description']))
                        <small> {{$line['warranty_description'] ?? ''}}</small>
                    @endif
                </td>
                <td class="quantity text-right">{{$line['quantity']}} </td>
                @if(empty($receipt_details->hide_price))
                    <td class="unit_price text-right">{{$line['unit_price_before_discount']}}</td>
                    @if(!empty($receipt_details->item_discount_label))
                        <td class="text-right">
                            {{$line['line_discount'] ?? '0.00'}}
                        </td>
                    @endif
                    <td class="price text-right">{{$line['line_total']}}</td>
                @endif
            </tr>
            @if(!empty($line['modifiers']))
                @foreach($line['modifiers'] as $modifier)
                    <tr>
                       <td colspan="5">
                            {{$modifier['name']}} {{$modifier['variation']}}
                            @if(!empty($modifier['sub_sku'])), {{$modifier['sub_sku']}} @endif @if(!empty($modifier['cat_code'])), {{$modifier['cat_code']}}@endif
                            @if(!empty($modifier['sell_line_note']))({{$modifier['sell_line_note']}}) @endif
                        </td>

                    </tr>
                @endforeach
            @endif
            @endforeach
            <tr>
                <td @if(!empty($receipt_details->item_discount_label)) colspan="6" @else colspan="5" @endif>&nbsp;</td>
            </tr>
        </tbody>
    </table>


    @if(!empty($receipt_details->total_quantity_label))
        <div class="flex-box">
            <p class="">
                {!! $receipt_details->total_quantity_label !!}
            </p>
            <p class="width-50 text-right sub-headings">
                {{$receipt_details->total_quantity}}
            </p>
        </div>
    @endif
    @if(empty($receipt_details->hide_price))
        <div class="flex-box">
            <p >
             {!! $receipt_details->subtotal_label !!}
            </p>
            <p class="width-50 text-right sub-headings">
                {{$receipt_details->subtotal}}
            </p>
        </div>

        <!-- Shipping Charges -->
        @if(!empty($receipt_details->shipping_charges))
            <div class="flex-box">
                <p >
                    {!! $receipt_details->shipping_charges_label !!}
                </p>
                <p class="width-50 text-right sub-headings">
                    {{$receipt_details->shipping_charges}}
                </p>
            </div>
        @endif

        @if(!empty($receipt_details->packing_charge))
            <div class="flex-box">
                <p >
                    {!! $receipt_details->packing_charge_label !!}
                </p>
                <p class="width-50 text-right sub-headings">
                    {{$receipt_details->packing_charge}}
                </p>
            </div>
        @endif

    <!-- Discount for invoice  -->
        @if( !empty($receipt_details->discount) )
            <div class="flex-box">
                <p >
                    {!! $receipt_details->discount_label !!}
                </p>

                <p class="width-50 text-right sub-headings">
                    (-) {{$receipt_details->discount}}
                </p>
            </div>
        @endif


        {{--Discount  on product --}}
        @if( !empty($receipt_details->total_line_discount) && $receipt_details->total_line_discount>0 )
            <div class="flex-box">
                <p >
                    {!! $receipt_details->line_discount_label !!}
                </p>

                <p class="width-50 text-right sub-headings">
                    (-) {{$receipt_details->total_line_discount}}
                </p>
            </div>
        @endif

        @if(!empty($receipt_details->reward_point_label) )
            <div class="flex-box">
                <p >
                    {!! $receipt_details->reward_point_label !!}
                </p>

                <p class="width-50 text-right sub-headings">
                    (-) {{$receipt_details->reward_point_amount}}
                </p>
            </div>
        @endif


        {{--Tax used in invoice  get tax data from Transaction --}}
        @if( !empty($receipt_details->tax) )
            <div class="flex-box">
                <p >
                    {!! $receipt_details->tax_label !!}
                </p>
                <p class="width-50 text-right sub-headings">
                    (+) {{$receipt_details->tax}}
                </p>
            </div>
        @endif



        @if( $receipt_details->round_off_amount > 0)
            <div class="flex-box">
                <p>
                    {!! $receipt_details->round_off_label !!}
                </p>
                <p class="width-50 text-right sub-headings">
                    {{$receipt_details->round_off}}
                </p>
            </div>
        @endif


        {{--Total --}}
        <div class="flex-box">
            <p >
                {!! $receipt_details->total_label !!}
            </p>
            <p class="width-50 text-right sub-headings">
                {{$receipt_details->total}}
            </p>
        </div>


        @if(!empty($receipt_details->total_in_words))
            <p colspan="2" class="text-right mb-0">
                <small>
                    ({{$receipt_details->total_in_words}})
                </small>
            </p>
        @endif
        @if(!empty($receipt_details->payments))
            @foreach($receipt_details->payments as $payment)
                <div class="flex-box">
                    <p class="width-50 text-right">{{$payment['method']}} ({{$payment['date']}}) </p>
                    <p class="width-50 text-right">{{$payment['amount']}}</p>
                </div>
            @endforeach
        @endif

    <!-- Total Paid-->
        @if(!empty($receipt_details->total_paid_label))
            <div class="flex-box">
                <p>
                    {!! $receipt_details->total_paid_label !!}
                </p>
                <p class="width-50 text-right sub-headings">
                    {{$receipt_details->total_paid}}
                </p>
            </div>
        @endif

    <!-- Total Due-->
        @if(!empty($receipt_details->total_due_label))
            <div class="flex-box">
                <p >
                    {!! $receipt_details->total_due_label !!}
                </p>
                <p class="width-50 text-right sub-headings">
                    {{$receipt_details->total_due}}
                </p>
            </div>
        @endif

        @if(!empty($receipt_details->all_due))
            <div class="flex-box">
                <p width-50 text-right sub-headings>
                    {!! $receipt_details->all_bal_label !!}
                </p>
                <p class="width-50 text-right sub-headings">
                    {{$receipt_details->all_due}}
                </p>
            </div>
        @endif
    @endif
    <div class="border-bottom width-100">&nbsp;</div>
    @if(empty($receipt_details->hide_price))


    <!-- tax on products-->
        {{--@if(!empty($receipt_details->taxes))
            <table class="border-bottom width-100 table-f-12">
                @foreach($receipt_details->taxes as $key => $val)
                    <tr>
                        <td class="left">{{$key}}</td>
                        <td class="right">{{$val}}</td>
                    </tr>
                @endforeach
            </table>
        @endif--}}
    @endif


    @if(!empty($receipt_details->additional_notes))
        <p class="centered" >
            {!! nl2br($receipt_details->additional_notes) !!}
        </p>
    @endif

    {{-- Barcode --}}
   {{-- @if($receipt_details->show_barcode)
        <br/>
        <img class="center-block" src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2,30,array(39, 48, 54), true)}}">
    @endif--}}

    @include('sale_pos.partials.qr_code')

    @if(!empty($receipt_details->footer_text))
        <p class="centered">
            {!! $receipt_details->footer_text !!}
        </p>
    @endif

</div>

</body>
</html>
