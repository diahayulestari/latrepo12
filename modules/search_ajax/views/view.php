<table class="table table-bordered" cellpadding="8">
    <tr class="bg-warning text-center">
        <th>Nama</th>
    </tr>
    <?php
    if( ! empty($products)){
        foreach($products as $data){
            echo "<tr>";
            echo "<td align='center'>".$data->nama_produk."</td>";
            echo "</tr>";
        }
    }else{
        echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
    } ?>
</table>