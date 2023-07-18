<!doctype html>
<html lang="en">
 
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
 
<body>
 
<div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin') ?>">Admin Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/news') ?>">News</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/setting') ?>">Setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
            </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Data Berkas
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <a href="<?= base_url(); ?>/berkas/create" class="btn btn-primary">Upload</a>
                <hr />
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no  = 1;
                        foreach ($berkas as $row) {
                        ?>
                            <tr>
                            <td><?= $no++; ?></td>
                            <td><?= is_array($row) && array_key_exists('title', $row) ? $row['title'] : 'Invalid title data'; ?></td>
        <td><?= is_array($row) && array_key_exists('keterangan', $row) ? $row['keterangan'] : 'Invalid keterangan data'; ?></td>
        <td>
        <?php if (is_array($row) && array_key_exists('id_berkas', $row)) : ?>
    <a class="btn btn-info" href="<?= base_url('berkas/download/' . $row['id_berkas']); ?>">Download</a>
<?php else : ?>
    <a class="btn btn-info" href="<?= base_url('/berkas/download/DEFAULT_ID_HERE'); ?>">Download</a>
<?php endif; ?>
</td>                            
</tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
 
</html>