<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content {
        width: calc(100vw - 250px);
        height: 100%;
        box-sizing: border-box;
        padding: 2rem;
        padding-left: 10rem;
        overflow-y: scroll;
    }

    .title-content {
        text-align : center;
        font-weight: bolder;
        font-size: 2rem;
        text-shadow: 4px 4px 2px #32FF6A;
    }

    #category {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #category td,
    #category th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #category tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #category tr:hover {
        background-color: #ddd;
    }

    #category th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
    .subtitle-content{
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
        font-weight: bolder;
    }
    </style>
</head>
<body>
<div class="content">
        <p class="title-content">Hasil Perhitungan SPK Metode SMART</p>
        <hr>
        <p class="subtitle-content">Tabel Nilai Bobot Utility</p>
        <table id="category">
            <tr>
                <th>Nomor Pilihan</th>
                <th>Kategori</th>
                <th>SubCategory</th>
                <th>Nilai utility</th>
                <th>Nilai Bobot utility</th>

            </tr>

            <?php
            $i = 1;
            $temp = null;

            ?>
            <?php foreach ($data as $item) : ?>
                <?php for ($j = 0; $j < count($item['kategori']); $j++) : ?>
                    <tr>
                        <?php
                        if ($temp != $item['num_choose']) : ?>
                            <td rowspan="<?php
                                            if ($temp != $item['num_choose']) {
                                                echo count($item['kategori']);
                                                $temp = $item['num_choose'];
                                            } else {
                                                null;
                                            }
                                            ?>">

                                <?= $i++ ?></td>
                        <?php $temp = $item['num_choose']; ?>
                        <?php endif; ?>

                        <td><?= $item['kategori'][$j] ?></td>
                        <td><?= $item['subkategori'][$j] ?></td>
                        <td><?= $item['nilai_subkategori'][$j] ?></td>
                        <td><?= $item['bobot_utility'][$j] ?></td>
                    </tr>
                <?php endfor; ?>
            <?php endforeach; ?>
        </table>
        <p class="subtitle-content">Hasil Penentuan Keputusan </p>
        <table id="category">
            <tr>
                <th>Nomor Pilihan</th>
                <th>Nilai Akhir</th>
                <th>Status Keputusan</th>
            </tr>
                <?php for ($k=0; $k < count($nilai_spk['nilai_spk']);$k++) : ?>
            <tr>
                <td>
                    <?= $nilai_spk['num_choose'][$k]; ?>
                </td>
                <td><?= $nilai_spk['nilai_spk'][$k]; ?></td>
                <td><?= $nilai_spk['status'][$k]; ?></td>
            </tr>
                <?php endfor; ?>
        </table>
    </div>

</div>
</body>
</html>
    

