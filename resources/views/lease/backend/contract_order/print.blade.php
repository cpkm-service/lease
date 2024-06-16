@include('print::backend.template.print')
<script>
    let table = $(`table`).eq(0);
    default_data.items.map((item, key) => {
        let sort = key + 1;
        let trs = table.find('tr');
        let tds = trs.eq(sort).find('td');
        tds.eq(0).text([item.name, item.standard, item.size].filter(item => item).join('/'));
        tds.eq(1).text(item.count.toLocaleString());
        // tds.eq(2).text(item.unit);
        // tds.eq(3).text((parseFloat(item.amount)).toLocaleString());
        // tds.eq(4).text((parseFloat(item.total_amount)).toLocaleString());
        tds.eq(2).text(item.remark);
    })
</script>