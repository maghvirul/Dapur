<style>
body {
    font-family: arial;
}

label,input,textarea,select {
    display: block;
}

input,textarea,select {
    margin-bottom: 20px;
}

label {
    font-size: 12px;
    font-weight: bold;
    color: navy;
}

fieldset {
    padding: 15px;
    width: 250px;
}

</style>

<?php 

$operasi = array(   'tambah'    =>  'Penjumlahan',
                    'kurang'    =>  'Pengurangan',
                    'kali'      =>  'Perkalian');

echo validation_errors();

echo form_open('matematika');
echo form_fieldset('Operasi Matematika Sederhana');

echo form_label('Bilangan Pertama','pertama');
echo form_input('pertama',@$pertama);

echo form_label('Bilangan Kedua','kedua');
echo form_input('kedua',@$kedua);

echo form_label('Jenis Operasi','operasi');
echo form_dropdown('operasi',$operasi);

echo form_submit('submit','Hitung');

echo form_fieldset_close();
echo form_close();

echo 'Hasil = '.@$hasil;

?>