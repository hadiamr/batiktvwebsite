<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-dark">Data <?php echo $judulTemp ?></h3>
    </div>
    <table>
        <thead>
            <tr colspan="2">
                <th>Senin</th>
            </tr>
            <tr class="text-center">
                <th>Jam</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($senin as $row) : ?>
                <tr>
                    <td><?= $row['jam']; ?></td>
                    <?php if ($row['kategori'] == 'baru') { ?>
                        <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                    <?php } else { ?>
                        <td><?= $row['program']; ?></td>
                    <?php } ?>
                </tr>
            <?php
            endforeach; ?>
        </tbody>
    </table>
    <table>
        <thead>
            <tr class="text-center">
                <th>Jam</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($selasa as $row) : ?>
                <tr>
                    <td><?= $row['jam']; ?></td>
                    <?php if ($row['kategori'] == 'baru') { ?>
                        <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                    <?php } else { ?>
                        <td><?= $row['program']; ?></td>
                    <?php } ?>
                </tr>
            <?php
            endforeach; ?>
        </tbody>
    </table>
    <table>
        <thead>
            <tr class="text-center">
                <th>Jam</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($kamis as $row) : ?>
                <tr>
                    <td><?= $row['jam']; ?></td>
                    <?php if ($row['kategori'] == 'baru') { ?>
                        <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                    <?php } else { ?>
                        <td><?= $row['program']; ?></td>
                    <?php } ?>
                </tr>
            <?php
            endforeach; ?>
        </tbody>
    </table>
    <table>
        <thead>
            <tr class="text-center">
                <th>Jam</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($jumat as $row) : ?>
                <tr>
                    <td><?= $row['jam']; ?></td>
                    <?php if ($row['kategori'] == 'baru') { ?>
                        <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                    <?php } else { ?>
                        <td><?= $row['program']; ?></td>
                    <?php } ?>
                </tr>
            <?php
            endforeach; ?>
        </tbody>
    </table>
    <table>
        <thead>
            <tr class="text-center">
                <th>Jam</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($sabtu as $row) : ?>
                <tr>
                    <td><?= $row['jam']; ?></td>
                    <?php if ($row['kategori'] == 'baru') { ?>
                        <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                    <?php } else { ?>
                        <td><?= $row['program']; ?></td>
                    <?php } ?>
                </tr>
            <?php
            endforeach; ?>
        </tbody>
    </table>
    <table>
        <thead>
            <tr class="text-center">
                <th>Jam</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($minggu as $row) : ?>
                <tr>
                    <td><?= $row['jam']; ?></td>
                    <?php if ($row['kategori'] == 'baru') { ?>
                        <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                    <?php } else { ?>
                        <td><?= $row['program']; ?></td>
                    <?php } ?>
                </tr>
            <?php
            endforeach; ?>
        </tbody>
    </table>