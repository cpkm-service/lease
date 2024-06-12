<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Cpkm\Print\Models\PrintTemplate;

return new class extends Migration
{
    public $data = [
        [
            'type'  =>  'lease',
            'code'  =>  'lease_quote_order',
            'name'  =>  '報價單列印',
            'content'   =>  '<p style="text-align:center;"><span class="text-big"><strong>祥 昇 機 電 工 業 有 限 公 司</strong></span></p><figure class="table" style="width:100%;"><table class="ck-table-resized" style="border-style:solid;border-width:0px;"><colgroup><col style="width:64.71%;"><col style="width:35.29%;"></colgroup><tbody><tr><td style="border:0px solid hsl(0, 0%, 0%);">◆<span class="text-tiny">永和牌移動式抽水泵站</span><br>◆<span class="text-tiny">永和牌沉水式電動抽水機製造</span><br>◆<span class="text-tiny">機械鑿井，抽水站工程設計承包</span></td><td style="border-style:solid;border-width:0px;"><span class="text-tiny">地址：<span class="cpkm-input-none" style="min-width:200px;" contenteditable="true" data-width="200" data-target="company_address">&nbsp;</span></span><br><span class="text-tiny">電話：<span class="cpkm-input-none" style="min-width:80px;" contenteditable="true" data-width="80" data-target="company_phone">&nbsp;</span>&nbsp; &nbsp;傳真：<span class="cpkm-input-none" style="min-width:80px;" contenteditable="true" data-width="80" data-target="company_fax">&nbsp;</span></span><br><a href="mailto:E-mail：nanhortw@gmail.com"><span class="text-tiny">E-mail：</span></a><span class="text-tiny"><span class="cpkm-input-none" style="min-width:150px;" contenteditable="true" data-width="150" data-target="company_email">&nbsp;</span></span><br><span class="text-tiny">網址：</span></td></tr></tbody></table></figure><p style="text-align:center;"><strong><u>&nbsp; &nbsp;估 &nbsp; &nbsp; &nbsp; 價 &nbsp; &nbsp; &nbsp; &nbsp;單 &nbsp; &nbsp;</u></strong></p><figure class="table" style="width:100%;"><table class="ck-table-resized" style="border-style:solid;border-width:0px;"><colgroup><col style="width:71.99%;"><col style="width:28.01%;"></colgroup><tbody><tr><td style="border-style:solid;border-width:0px;"><span class="text-tiny"><strong>&nbsp;<span class="cpkm-input-none" style="min-width:120px;" contenteditable="true" data-width="120" data-target="customer_name">&nbsp;</span>&nbsp; 葉展呈 &nbsp; &nbsp;台照</strong></span><br><span class="text-tiny">電話：<span class="cpkm-input-none" style="min-width:80px;" contenteditable="true" data-width="80" data-target="customer_phone">&nbsp;</span>&nbsp; &nbsp; 傳真：<span class="cpkm-input-none" style="min-width:80px;" contenteditable="true" data-width="80" data-target="customer_fax">&nbsp;</span></span></td><td style="border-style:solid;border-width:0px;"><span class="text-tiny">日期：<span class="cpkm-input-none" style="min-width:80px;" contenteditable="true" data-width="80" data-target="date">&nbsp;</span></span><br><span class="text-tiny">單號：<span class="cpkm-input-none" style="min-width:100px;" contenteditable="true" data-width="100" data-target="no">&nbsp;</span></span></td></tr></tbody></table></figure><figure class="table" style="width:100%;"><table class="ck-table-resized" style="border:2px solid hsl(0, 0%, 0%);"><colgroup><col style="width:45.33%;"><col style="width:7.99%;"><col style="width:5.75%;"><col style="width:10.65%;"><col style="width:11.88%;"><col style="width:18.4%;"></colgroup><tbody><tr><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;"><span class="text-tiny">品 &nbsp; &nbsp; 名 &nbsp; &nbsp; 規 &nbsp; &nbsp; 格</span></td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;height:50px;text-align:center;"><span class="text-tiny">數 &nbsp; 量</span></td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;height:50px;text-align:center;"><span class="text-tiny">單位</span></td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;height:50px;text-align:center;"><span class="text-tiny">單 &nbsp; &nbsp; 價</span></td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;height:50px;text-align:center;"><span class="text-tiny">金 &nbsp; &nbsp; 額</span></td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;height:50px;text-align:center;"><span class="text-tiny">備 &nbsp; &nbsp; 註</span></td></tr><tr><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td></tr><tr><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;">&nbsp;</td></tr><tr><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td></tr><tr><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td></tr><tr><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;">&nbsp;</td></tr><tr><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:center;" colspan="3" rowspan="3"><span class="text-tiny">總計本幣：<span class="cpkm-input-none" style="min-width:100px;" contenteditable="true" data-width="100" data-target="chinese_total">&nbsp;</span></span></td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;"><span class="text-tiny">合 &nbsp; &nbsp; &nbsp;計</span></td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:right;"><span class="cpkm-input-none" style="min-width:60px;" contenteditable="true" data-width="60" data-target="amount">&nbsp;</span></td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;" rowspan="3"><p><span class="text-tiny">審核：</span></p><p><span class="text-tiny">承辦人：<span class="cpkm-input-none" style="min-width:60px;" contenteditable="true" data-width="60" data-target="staff">&nbsp;</span></span></p></td></tr><tr><td style="border-color:hsl(0, 0%, 0%);border-style:solid;"><span class="text-tiny">稅 &nbsp; &nbsp; &nbsp;額</span></td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:right;"><span class="cpkm-input-none" style="min-width:60px;" contenteditable="true" data-width="60" data-target="tax">&nbsp;</span></td></tr><tr><td style="border-color:hsl(0, 0%, 0%);border-style:solid;"><span class="text-tiny">總 &nbsp; &nbsp; &nbsp;計</span></td><td style="border-color:hsl(0, 0%, 0%);border-style:solid;text-align:right;"><span class="cpkm-input-none" style="min-width:60px;" contenteditable="true" data-width="60" data-target="total">&nbsp;</span></td></tr></tbody></table></figure><figure class="table" style="width:100%;"><table class="ck-table-resized" style="border-style:solid;border-width:0px;"><colgroup><col style="width:50.43%;"><col style="width:49.57%;"></colgroup><tbody><tr><td style="border-style:solid;border-width:0px;"><span class="text-tiny">(1) 本估價單有效期限20天</span><br><span class="text-tiny">(2) 如蒙惠固請交貨付清一個月期票</span><br><span class="text-tiny">(3) 訂貨日期：確認回傳後<span class="cpkm-input" style="min-width:50px;" contenteditable="true" data-width="50" data-target="day">&nbsp;</span>天交貨。</span></td><td style="border-style:solid;border-width:0px;"><span class="text-tiny">(4) &nbsp;上項列項目若未註明營業稅額，即為淨值報價未含稅金。</span><br><span class="text-tiny">(5) 修理項目請於獲本估價單後壹星期內回電或覆函，否即視為同意依上列價格項目修理之。</span><br><span class="text-tiny">&nbsp;</span></td></tr></tbody></table></figure><p style="text-align:right;"><span class="text-tiny">NM2-001A1-0</span></p>',
        ],
        [
            'type'  =>  'lease',
            'code'  =>  'lease_contract_order',
            'name'  =>  '合約單列印',
            'content'   =>  '',
        ]
    ];
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        foreach ($this->data as $key => $value) {
            PrintTemplate::create($value);
        } 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach ($this->data as $key => $value) {
            PrintTemplate::where('code',$value['code'])->delete();
        } 
    }
};